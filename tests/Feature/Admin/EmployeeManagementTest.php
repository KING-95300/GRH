<?php

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

function adminEmployeeUser(): User
{
    return User::factory()->create([
        'role' => 'admin',
        'email_verified_at' => now(),
    ]);
}

function employeePayload(array $overrides = []): array
{
    return array_merge([
        'firstname' => 'Amira',
        'lastname' => 'Bouazizi',
        'cin' => '09823412',
        'date_of_birth' => '1994-06-18',
        'email' => 'amira.bouazizi@example.tn',
        'mobile' => '98 234 110',
        'family_status' => 'marie',
        'children' => 1,
        'address' => '24 Rue de la Bourse, Les Berges du Lac 2, 1053 Tunis',
        'position' => 'Ingénieure Logiciel',
        'department' => 'it',
        'contract_type' => 'CDI',
        'hire_date' => '2024-01-15',
        'work_mobile' => '71 820 400',
        'status' => 'actif',
        'cnss_number' => '09482110-12',
        'bank_account' => 'BIAT 08 123 4567890123456 78',
        'leave_rights' => 30,
        'token_leave_days' => 30,
        'token_sick_leave_days' => 15,
        'employee_note' => 'Profil de test.',
    ], $overrides);
}

it('renders the employee directory for admins', function () {
    $admin = adminEmployeeUser();
    $employee = Employee::factory()->create(['name' => 'Mohamed Ben Salem', 'status' => 'actif']);

    $response = $this->withCookies(tokenCookiesFor($admin))->get(route('admin.employees'));

    $response->assertOk()
        ->assertSee('Gestion des Collaborateurs')
        ->assertSee('Mohamed Ben Salem')
        ->assertSee('Nouveau Collaborateur')
        ->assertSee('Conformité CNSS');
});

it('protects the employee directory from guests and collaborators', function () {
    $this->get(route('admin.employees'))->assertRedirect(route('login'));

    $collaborator = User::factory()->create(['role' => 'collaborator', 'email_verified_at' => now()]);

    $this->withCookies(tokenCookiesFor($collaborator))
        ->get(route('admin.employees'))
        ->assertRedirect(route('dashboard'));
});

it('creates an employee from the multi-step form', function () {
    $admin = adminEmployeeUser();

    $response = $this->withCookies(tokenCookiesFor($admin))
        ->post(route('admin.employees.store'), employeePayload());

    $response->assertRedirect(route('admin.employees'))
        ->assertSessionHas('success');

    $this->assertDatabaseHas('employees', [
        'name' => 'Amira Bouazizi',
        'email' => 'amira.bouazizi@example.tn',
        'mobile' => '+216 98 234 110',
        'work_mobile' => '+216 71 820 400',
        'department' => 'it',
        'contract_type' => 'CDI',
        'seniority' => 'senior',
        'status' => 'actif',
        'cnss_number' => '09482110-12',
    ]);
});

it('stores an uploaded CIN document and serves it back', function () {
    Storage::fake('local');
    $admin = adminEmployeeUser();

    $response = $this->withCookies(tokenCookiesFor($admin))
        ->post(route('admin.employees.store'), employeePayload([
            'cin_file' => UploadedFile::fake()->create('cin-amira.pdf', 120, 'application/pdf'),
        ]));

    $response->assertRedirect(route('admin.employees'));

    $employee = Employee::where('email', 'amira.bouazizi@example.tn')->firstOrFail();

    expect($employee->cin_file_path)->not->toBeNull();
    Storage::disk('local')->assertExists($employee->cin_file_path);

    $this->withCookies(tokenCookiesFor($admin))
        ->get(route('admin.employees.cin', $employee))
        ->assertOk();
});

it('validates the employee payload', function () {
    $admin = adminEmployeeUser();

    $response = $this->withCookies(tokenCookiesFor($admin))
        ->post(route('admin.employees.store'), employeePayload([
            'firstname' => '',
            'cin' => '123',
            'email' => 'not-an-email',
            'department' => 'invalid',
        ]));

    $response->assertSessionHasErrors(['firstname', 'cin', 'email', 'department']);
    $this->assertDatabaseCount('employees', 0);
});

it('updates an existing employee', function () {
    $admin = adminEmployeeUser();
    $employee = Employee::factory()->create([
        'name' => 'Sami Ben Ali',
        'email' => 'sami@example.tn',
        'cin' => '12345678',
    ]);

    $response = $this->withCookies(tokenCookiesFor($admin))
        ->put(route('admin.employees.update', $employee), employeePayload([
            'firstname' => 'Sami',
            'lastname' => 'Ben Ali',
            'email' => 'sami@example.tn',
            'cin' => '12345678',
            'status' => 'conge',
            'position' => 'Directeur Technique',
        ]));

    $response->assertRedirect(route('admin.employees'))
        ->assertSessionHas('success');

    $this->assertDatabaseHas('employees', [
        'id' => $employee->id,
        'name' => 'Sami Ben Ali',
        'position' => 'Directeur Technique',
        'status' => 'conge',
    ]);
});

it('deletes a single employee and a bulk selection', function () {
    $admin = adminEmployeeUser();
    $single = Employee::factory()->create();
    $bulk = Employee::factory()->count(2)->create();

    $this->withCookies(tokenCookiesFor($admin))
        ->delete(route('admin.employees.destroy', $single))
        ->assertRedirect(route('admin.employees'));

    $this->assertDatabaseMissing('employees', ['id' => $single->id]);

    $this->withCookies(tokenCookiesFor($admin))
        ->delete(route('admin.employees.bulkDestroy'), ['ids' => $bulk->pluck('id')->all()])
        ->assertRedirect(route('admin.employees'));

    foreach ($bulk as $employee) {
        $this->assertDatabaseMissing('employees', ['id' => $employee->id]);
    }
});

it('filters employees by search, department and status', function () {
    $admin = adminEmployeeUser();
    Employee::factory()->create(['name' => 'Yasmine Trabelsi', 'department' => 'produit', 'status' => 'actif', 'email' => 'yasmine@example.tn']);
    Employee::factory()->create(['name' => 'Anis Mansour', 'department' => 'it', 'status' => 'conge', 'email' => 'anis@example.tn']);

    $this->withCookies(tokenCookiesFor($admin))
        ->get(route('admin.employees', ['q' => 'Yasmine']))
        ->assertOk()
        ->assertSee('Yasmine Trabelsi')
        ->assertDontSee('Anis Mansour');

    $this->withCookies(tokenCookiesFor($admin))
        ->get(route('admin.employees', ['department' => 'it', 'status' => 'conge']))
        ->assertOk()
        ->assertSee('Anis Mansour')
        ->assertDontSee('Yasmine Trabelsi');
});

it('exports the filtered directory as CSV', function () {
    $admin = adminEmployeeUser();
    Employee::factory()->create(['name' => 'Fatma Ghorbel', 'department' => 'finance', 'status' => 'actif']);
    Employee::factory()->create(['name' => 'Karim Chaabane', 'department' => 'commerce', 'status' => 'actif']);

    $response = $this->withCookies(tokenCookiesFor($admin))
        ->get(route('admin.employees.export', ['department' => 'finance']));

    $response->assertOk();
    expect($response->headers->get('content-type'))->toContain('text/csv');

    $csv = $response->streamedContent();
    expect($csv)->toContain('Nom', 'Fatma Ghorbel', 'Finance & Admin')
        ->not->toContain('Karim Chaabane');
});
