<?php

namespace App\Support;

use App\Models\Payslip;

class PayslipPdf
{
    public static function render(Payslip $payslip, string $periodLabel): string
    {
        $employee = $payslip->employee;
        $ops = [];
        $y = 800;

        $ops[] = self::text(50, $y, 17, 'F2', 'CARTHAGE TECH SOLUTIONS SARL');
        $ops[] = self::text(50, $y - 17, 9, 'F1', 'Tunis Lac II - MF 182934 A/M/000 - CNSS Employeur 29481900-12');
        $ops[] = self::text(50, $y - 34, 12, 'F2', 'BULLETIN DE PAIE - '.$periodLabel);
        $ops[] = self::text(50, $y - 50, 9, 'F1', 'Document officiel genere par HRM Pro - Conforme au Code du Travail Tunisien');
        $ops[] = self::line(50, $y - 62, 545);

        $y = 710;
        $ops[] = self::text(50, $y, 9, 'F2', 'SALARIE');
        $ops[] = self::text(50, $y - 18, 10, 'F2', (string) $employee?->name);
        $ops[] = self::text(50, $y - 34, 9, 'F1', 'Matricule : '.$payslip->matricule().'    CIN : '.($employee?->cin ?: '—'));
        $ops[] = self::text(50, $y - 50, 9, 'F1', 'Emploi : '.($employee?->position ?: '—'));
        $ops[] = self::text(50, $y - 66, 9, 'F1', 'CNSS : '.($employee?->cnss_number ?: '—'));

        $ops[] = self::text(330, $y, 9, 'F2', 'REMUNERATION');
        $ops[] = self::text(330, $y - 18, 9, 'F1', 'Periode : '.$periodLabel);
        $ops[] = self::text(330, $y - 34, 9, 'F1', 'Banque : '.($payslip->bank ?: '—'));
        $ops[] = self::text(330, $y - 50, 9, 'F1', 'RIB : '.($payslip->rib ?: '—'));
        $ops[] = self::text(330, $y - 66, 9, 'F1', 'Statut : '.$payslip->statusLabel());

        $y = 610;
        $ops[] = self::line(50, $y, 545);
        $ops[] = self::text(50, $y - 18, 9, 'F2', 'ELEMENTS DE REMUNERATION');
        $ops[] = self::text(450, $y - 18, 9, 'F2', 'MONTANT (TND)');
        $y -= 38;

        $rows = [
            ['Salaire de base brut', number_format((float) $payslip->base_salary, 3, '.', ' ')],
            ['Prime de rendement et technicite', number_format((float) $payslip->prime, 3, '.', ' ')],
            ['Indemnite de transport legale', number_format((float) $payslip->transport_allowance, 3, '.', ' ')],
            ['Cotisation CNSS salariale (9.18%)', '-'.number_format((float) $payslip->cnss, 3, '.', ' ')],
            ['Base imposable soumise a l IRPP', number_format((float) $payslip->taxable_base, 3, '.', ' ')],
            ['Retenue IRPP - bareme 2025', '-'.number_format((float) $payslip->irpp, 3, '.', ' ')],
            ['Contribution sociale de solidarite (1%)', '-'.number_format((float) $payslip->css, 3, '.', ' ')],
        ];

        foreach ($rows as $row) {
            $ops[] = self::text(50, $y, 9, 'F1', $row[0]);
            $ops[] = self::text(465, $y, 9, 'F2', $row[1]);
            $y -= 19;
        }

        $ops[] = self::line(50, $y - 4, 545);
        $y -= 34;
        $ops[] = self::text(50, $y, 13, 'F2', 'NET A PAYER PAR VIREMENT BANCAIRE');
        $ops[] = self::text(430, $y, 14, 'F2', number_format((float) $payslip->net, 3, '.', ' ').' TND');

        $y -= 34;
        $ops[] = self::text(50, $y, 9, 'F1', 'Arrete le present bulletin a la somme de :');
        $y -= 16;
        $ops[] = self::text(50, $y, 10, 'F2', FrenchNumber::amountInWords((float) $payslip->net));

        $y -= 60;
        $ops[] = self::text(50, $y, 8, 'F1', 'Signature electronique employeur : HRM Pro - Carthage Tech Solutions');
        $ops[] = self::text(50, $y - 14, 8, 'F1', 'Verification : '.strtoupper(substr(hash('sha256', $payslip->id.'|'.$payslip->period.'|'.$payslip->net), 0, 32)));
        $ops[] = self::text(330, $y - 40, 9, 'F2', 'SIGNE ELECTRONIQUEMENT');
        $ops[] = self::text(330, $y - 54, 8, 'F1', 'Horodatage : '.now()->format('d/m/Y H:i:s'));
        $ops[] = self::line(50, 70, 545);
        $ops[] = self::text(50, 56, 8, 'F1', 'Document genere automatiquement - Aucune signature manuscrite requise.');

        $content = implode("\n", $ops);
        $length = strlen($content);

        $objects = [
            1 => '<< /Type /Catalog /Pages 2 0 R >>',
            2 => '<< /Type /Pages /Kids [3 0 R] /Count 1 >>',
            3 => '<< /Type /Page /Parent 2 0 R /MediaBox [0 0 595 842] /Resources << /Font << /F1 4 0 R /F2 5 0 R >> >> /Contents 6 0 R >>',
            4 => '<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica /Encoding /WinAnsiEncoding >>',
            5 => '<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica-Bold /Encoding /WinAnsiEncoding >>',
            6 => '<< /Length '.$length." >>\nstream\n".$content."\nendstream",
        ];

        $pdf = "%PDF-1.4\n";
        $offsets = [];

        foreach ($objects as $index => $object) {
            $offsets[$index] = strlen($pdf);
            $pdf .= $index." 0 obj\n".$object."\nendobj\n";
        }

        $xrefOffset = strlen($pdf);
        $pdf .= "xref\n0 ".(count($objects) + 1)."\n0000000000 65535 f \n";

        foreach ($offsets as $offset) {
            $pdf .= sprintf("%010d 00000 n \n", $offset);
        }

        $pdf .= "trailer\n<< /Size ".(count($objects) + 1)." /Root 1 0 R >>\nstartxref\n".$xrefOffset."\n%%EOF";

        return $pdf;
    }

    private static function text(float $x, float $y, int $size, string $font, string $text): string
    {
        return 'BT /'.$font.' '.$size.' Tf 1 0 0 1 '.self::number($x).' '.self::number($y).' Tm ('.self::escape($text).') Tj ET';
    }

    private static function line(float $x, float $y, float $width): string
    {
        return '0.6 w 0.75 0.75 0.8 RG '.self::number($x).' '.self::number($y).' m '.self::number($x + $width).' '.self::number($y).' l S';
    }

    private static function number(float $number): string
    {
        return rtrim(rtrim(number_format($number, 2, '.', ''), '0'), '.');
    }

    private static function escape(string $text): string
    {
        $encoded = @mb_convert_encoding($text, 'Windows-1252', 'UTF-8');

        if ($encoded === false || $encoded === '') {
            $encoded = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $text) ?: $text;
        }

        return str_replace(['\\', '(', ')'], ['\\\\', '\\(', '\\)'], $encoded);
    }
}
