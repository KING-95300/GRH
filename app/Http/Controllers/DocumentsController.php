<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class DocumentsController extends Controller
{
    public function index(Request $request)
    {
        $documents = Document::query()
            ->with('employee')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->query('search');
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('original_name', 'like', "%{$search}%")
                        ->orWhereHas('employee', function ($eq) use ($search) {
                            $eq->where('name', 'like', "%{$search}%")
                                ->orWhere('cin', 'like', "%{$search}%");
                        });
                });
            })
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->where('category', $request->query('category'));
            })
            ->latest()
            ->get();

        $totalBytes = Document::sum('size');

        $stats = [
            'total' => Document::count(),
            'signature_required' => Document::where('status', 'en_attente_signature')->count(),
            'to_renew' => Document::whereBetween('expires_at', [now()->toDateString(), now()->addDays(30)->toDateString()])->count(),
            'storage_bytes' => $totalBytes,
            'storage_percent' => min(100, round($totalBytes / (100 * 1024 ** 3) * 100, 1)),
        ];

        $categoryCounts = collect(Document::CATEGORIES)->mapWithKeys(function ($label, $key) {
            return [$key => Document::where('category', $key)->count()];
        });

        $employees = Employee::orderBy('name')->get();

        return view('admin.documents', compact('documents', 'stats', 'categoryCounts', 'employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'files' => ['required', 'array'],
            'files.*' => ['file', 'mimes:pdf,png,jpg,jpeg,doc,docx', 'max:25600'],
            'employee_id' => ['nullable', 'exists:employees,id'],
            'category' => ['required', Rule::in(array_keys(Document::CATEGORIES))],
            'status' => ['required', Rule::in(array_keys(Document::STATUSES))],
            'expires_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ]);

        $stored = 0;

        foreach ($request->file('files') as $file) {
            $original = $file->getClientOriginalName();
            $storedName = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $original);
            $path = $file->storeAs('documents', $storedName, 'local');

            Document::create([
                'employee_id' => $request->employee_id ?: null,
                'name' => $original,
                'original_name' => $original,
                'path' => $path,
                'size' => $file->getSize(),
                'mime_type' => $file->getMimeType(),
                'category' => $request->category,
                'status' => $request->status,
                'expires_at' => $request->expires_at ?: null,
                'notes' => $request->notes,
            ]);

            $stored++;
        }

        return redirect()->route('admin.documents')->with('success', $stored . ' document(s) téléversé(s) avec succès.');
    }

    public function download(Document $document)
    {
        if (! Storage::disk('local')->exists($document->path)) {
            return redirect()->route('admin.documents')->with('error', 'Fichier introuvable sur le disque.');
        }

        return Storage::disk('local')->download($document->path, $document->original_name);
    }

    public function update(Request $request, Document $document)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'employee_id' => ['nullable', 'exists:employees,id'],
            'category' => ['required', Rule::in(array_keys(Document::CATEGORIES))],
            'status' => ['required', Rule::in(array_keys(Document::STATUSES))],
            'expires_at' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ]);

        $document->update($request->only(['name', 'employee_id', 'category', 'status', 'expires_at', 'notes']));

        return redirect()->route('admin.documents')->with('success', 'Document mis à jour.');
    }

    public function destroy(Document $document)
    {
        Storage::disk('local')->delete($document->path);
        $document->delete();

        return redirect()->route('admin.documents')->with('success', 'Document supprimé.');
    }

    public function zipSelection(Request $request)
    {
        $request->validate([
            'ids' => ['required', 'array'],
            'ids.*' => ['integer'],
        ]);

        $documents = Document::whereIn('id', $request->ids)->get();

        if ($documents->isEmpty()) {
            return redirect()->route('admin.documents')->with('error', 'Aucun document sélectionné.');
        }

        $zipPath = tempnam(sys_get_temp_dir(), 'docs_') . '.zip';
        $zip = new \ZipArchive();

        if ($zip->open($zipPath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) !== true) {
            return redirect()->route('admin.documents')->with('error', 'Impossible de créer le fichier ZIP.');
        }

        foreach ($documents as $document) {
            if (Storage::disk('local')->exists($document->path)) {
                $zip->addFile(Storage::disk('local')->path($document->path), $document->id . '_' . $document->original_name);
            }
        }

        $zip->close();

        return response()->download($zipPath, 'documents_rh_' . now()->format('Ymd_His') . '.zip')->deleteFileAfterSend(true);
    }
}
