<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Confirmation d'embauche</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f5f7; font-family:Arial, Helvetica, sans-serif;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f5f7; padding:32px 16px;">
<tr>
<td align="center">
<table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px; background-color:#ffffff; border-radius:12px; overflow:hidden;">
<tr>
<td style="background-color:#1d4ed8; padding:28px 32px; color:#ffffff;">
<p style="margin:0; font-size:14px; opacity:0.85;">Carthage Tech Solutions</p>
<h1 style="margin:8px 0 0; font-size:22px;">Bienvenue dans l'équipe !</h1>
</td>
</tr>
<tr>
<td style="padding:32px;">
<p style="margin:0 0 16px; font-size:16px; color:#1f2937;">Bonjour <strong>{{ $candidate->name }}</strong>,</p>
<p style="margin:0 0 16px; font-size:15px; line-height:1.6; color:#374151;">
Nous avons le plaisir de vous annoncer que votre candidature pour le poste de
<strong>{{ $candidate->position }}</strong> a été retenue et que votre embauche est confirmée.
</p>
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="margin:24px 0; border:1px solid #e5e7eb; border-radius:8px;">
<tr>
<td style="padding:14px 16px; border-bottom:1px solid #e5e7eb; color:#6b7280; font-size:13px;">Poste</td>
<td style="padding:14px 16px; border-bottom:1px solid #e5e7eb; color:#111827; font-size:14px; font-weight:bold;">{{ $candidate->position }}</td>
</tr>
@if ($candidate->contract_type_target)
<tr>
<td style="padding:14px 16px; border-bottom:1px solid #e5e7eb; color:#6b7280; font-size:13px;">Type de contrat</td>
<td style="padding:14px 16px; border-bottom:1px solid #e5e7eb; color:#111827; font-size:14px;">{{ $candidate->contract_type_target }}</td>
</tr>
@endif
@if ($candidate->hired_at)
<tr>
<td style="padding:14px 16px; color:#6b7280; font-size:13px;">Date d'intégration</td>
<td style="padding:14px 16px; color:#111827; font-size:14px;">{{ $candidate->hired_at->format('d/m/Y') }}</td>
</tr>
@endif
</table>
<p style="margin:0 0 8px; font-size:15px; line-height:1.6; color:#374151;">
Notre équipe RH vous contactera prochainement pour finaliser votre dossier d'intégration
(CIN, CNSS et documents administratifs).
</p>
<p style="margin:24px 0 0; padding-top:20px; border-top:1px solid #e5e7eb; font-size:13px; color:#6b7280;">
Direction des Ressources Humaines — Carthage Tech Solutions<br>
{{ config('mail.from.address') }}
</p>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
