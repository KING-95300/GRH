@php
    $user = auth()->user();
    $matricule = 'MAT-' . str_pad($user->id, 4, '0', STR_PAD_LEFT);
@endphp

<x-collaborator-shell active="attendance" title="Mon Pointage">
<div class="flex flex-col w-full">
<div class="p-space-xl flex flex-col gap-space-xl max-w-[1536px] mx-auto w-full">
<!-- Top Bar: Title & Live Clock Tracker -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-space-lg">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs">
<span class="font-label-sm text-label-sm text-primary uppercase tracking-widest font-semibold">Présence &amp; Feuilles de Temps</span>
<span class="w-1.5 h-1.5 rounded-full bg-outline-variant"></span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Régime 40h (Code du Travail TN)</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Mon Pointage &amp; Suivi du Temps</h1>
<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
          Consultez vos relevés de présence biométrique, pointez en ligne pour le télétravail et régularisez vos anomalies de badgeage en liaison directe avec l'équipe RH.
        </p>
</div>
<!-- Live Digital Clock & Shift Status -->
<div class="flex items-center gap-space-md self-start lg:self-auto bg-surface-container-low px-space-lg py-space-md rounded-xl shadow-sm">
<div class="w-10 h-10 rounded-xl bg-tertiary-container/10 flex items-center justify-center text-tertiary-container shrink-0">
<span class="material-symbols-outlined text-[24px]">nest_clock_farsight_analog</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-space-xs">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold tracking-tight" id="live-clock-time">11:04:22</span>
<span class="font-label-md text-label-md text-on-surface-variant font-normal">TUT (Tunis)</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Mardi 18 Mars 2025</span>
</div>
<div class="ml-space-sm pl-space-md flex flex-col items-end">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary/10 text-tertiary-container font-label-sm text-[11px] font-semibold">
<span class="w-2 h-2 rounded-full bg-tertiary-container animate-pulse"></span>
            En poste (08:28)
          </span>
<span class="font-label-sm text-[10px] text-on-surface-variant mt-0.5">Terminal Biométrique RDC</span>
</div>
</div>
</div>
<!-- Active Punch Panel & Real-time Action Zone -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
<!-- Virtual Punch Interaction Card (7 Cols) -->
<div class="lg:col-span-7 bg-surface-container-lowest rounded-xl p-space-xl shadow-sm flex flex-col justify-between relative overflow-hidden">
<div class="absolute -right-8 -top-8 w-44 h-44 rounded-full bg-primary/5 pointer-events-none blur-2xl"></div>
<div>
<div class="flex items-start justify-between gap-space-md mb-space-md">
<div>
<span class="font-label-md text-label-md text-primary font-semibold uppercase tracking-wider">Session Active</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface mt-0.5">Badgeuse Virtuelle &amp; Télétravail</h2>
</div>
<div class="flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px] text-tertiary-container">wifi</span>
<span class="truncate max-w-[210px]">Carthage Tech Fibre (Lac 2)</span>
</div>
</div>
<!-- Shift timeline indicator -->
<div class="bg-surface-container-low rounded-xl p-space-md mb-space-lg">
<div class="flex items-center justify-between text-on-surface font-label-md text-label-md mb-space-xs">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[18px] text-tertiary-container">login</span>
<span>Arrivée: <strong>08:28</strong></span>
</div>
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-[18px]">restaurant</span>
<span>Pause: <strong>0h 45m</strong></span>
</div>
<div class="flex items-center gap-1.5 text-primary">
<span class="material-symbols-outlined text-[18px]">timer</span>
<span>Cumul: <strong>2h 36m</strong></span>
</div>
</div>
<div class="w-full bg-surface-container-high rounded-full h-2.5 overflow-hidden">
<div class="bg-primary-container h-full rounded-full transition-all duration-500" style="width: 32.5%"></div>
</div>
<div class="flex justify-between items-center mt-1 text-[11px] font-label-sm text-on-surface-variant">
<span>08:28 Prise de poste</span>
<span>Objectif quotidien: 8h 00m</span>
<span>Sortie estimée: 17:13</span>
</div>
</div>
</div>
<!-- Punch Buttons Interaction Group -->
<div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-space-md pt-space-xs">
<button class="flex-1 h-11 px-space-lg rounded-xl bg-primary-container hover:bg-primary text-on-primary font-label-lg text-label-lg font-semibold flex items-center justify-center gap-space-xs shadow-sm transition-all active:scale-[0.98]" id="btn-punch-out" onclick="triggerPunch('Sortie enregistrée avec succès.')">
<span class="material-symbols-outlined text-[20px]">logout</span>
<span>Pointer ma Sortie (Fin de journée)</span>
</button>
<button class="h-11 px-space-lg rounded-xl bg-surface-container-high hover:bg-surface-variant text-on-surface font-label-lg text-label-lg font-medium flex items-center justify-center gap-space-xs transition-all active:scale-[0.98]" id="btn-pause-toggle" onclick="triggerPunch('Pause déjeuner démarrée.')">
<span class="material-symbols-outlined text-[20px]">coffee</span>
<span>Pause Déjeuner</span>
</button>
<button class="h-11 px-space-md rounded-xl bg-surface-container text-on-secondary-container hover:text-on-surface hover:bg-surface-container-high font-label-lg text-label-lg flex items-center justify-center gap-1 transition-all" onclick="openModal('telework-modal')" title="Déclarer une journée en Télétravail">
<span class="material-symbols-outlined text-[20px]">home_work</span>
<span class="hidden xl:inline">Télétravail</span>
</button>
</div>
</div>
<!-- IP/Bio Verification & Office Location (5 Cols) -->
<div class="lg:col-span-5 bg-surface-container-lowest rounded-xl p-space-xl shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between mb-space-sm">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[20px]">verified</span>
<span class="font-headline-sm text-headline-sm text-on-surface">Vérification de Sécurité</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-tertiary-container/10 text-tertiary-container font-label-sm text-[11px] font-semibold">
            Pointage Garanti INPDP
          </span>
</div>
<div class="flex items-center gap-space-md p-space-md bg-surface-container-low rounded-xl">
<div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[26px]">fingerprint</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Empreinte &amp; Carte RFID N° 84920</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Badgeuse Terminal 01 • Hall Principal Carthage Tech</span>
<span class="font-label-sm text-[11px] text-tertiary-container mt-0.5 flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>
              Synchronisé en temps réel avec le serveur RH
            </span>
</div>
</div>
<!-- IP & Geolocation Network Status Info -->
<div class="grid grid-cols-2 gap-space-sm mt-space-md pt-space-xs">
<div class="p-space-sm bg-surface-container-low rounded-lg">
<span class="font-label-sm text-[11px] text-on-surface-variant block">IP Entreprise Détectée</span>
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">196.203.42.118</span>
</div>
<div class="p-space-sm bg-surface-container-low rounded-lg">
<span class="font-label-sm text-[11px] text-on-surface-variant block">Périmètre Géofence</span>
<span class="font-label-md text-label-md text-on-surface font-medium flex items-center gap-1 text-tertiary-container">
<span class="material-symbols-outlined text-[16px]">location_on</span>
              Site Les Berges du Lac 2
            </span>
</div>
</div>
</div>
</div>
<!-- Summary Metric Cards (4 Bento Tiles) -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-space-md">
<!-- Card 1: Hours this week -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant mb-space-xs">
<span class="font-label-md text-label-md font-medium">Heures cette semaine</span>
<span class="material-symbols-outlined text-primary text-[22px]">calendar_view_week</span>
</div>
<div class="flex items-baseline gap-space-xs my-space-xs">
<span class="font-display-lg text-display-lg text-on-surface font-bold">18h 45m</span>
<span class="font-label-md text-label-md text-on-surface-variant font-normal">/ 40h00</span>
</div>
<div class="flex items-center justify-between mt-space-xs pt-space-xs">
<span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed text-[11px] font-label-sm font-semibold">
            46.8% complété
          </span>
<span class="font-label-sm text-[11px] text-on-surface-variant">Reste 21h 15m</span>
</div>
</div>
<!-- Card 2: Monthly Attendance Rate -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant mb-space-xs">
<span class="font-label-md text-label-md font-medium">Assiduité Mensuelle</span>
<span class="material-symbols-outlined text-tertiary-container text-[22px]">verified_user</span>
</div>
<div class="flex items-baseline gap-space-xs my-space-xs">
<span class="font-display-lg text-display-lg text-tertiary-container font-bold">98.2%</span>
<span class="font-label-md text-label-md text-tertiary-container font-medium">Excellent</span>
</div>
<div class="flex items-center justify-between mt-space-xs pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant">0 retard constaté</span>
<span class="font-label-sm text-[11px] text-on-surface font-semibold">Moy. arrivée 08:24</span>
</div>
</div>
<!-- Card 3: Overtime Hours -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant mb-space-xs">
<span class="font-label-md text-label-md font-medium">Heures Supplémentaires</span>
<span class="material-symbols-outlined text-primary text-[22px]">more_time</span>
</div>
<div class="flex items-baseline gap-space-xs my-space-xs">
<span class="font-display-lg text-display-lg text-on-surface font-bold">4h 30m</span>
<span class="font-label-md text-label-md text-primary font-medium">Mars 2025</span>
</div>
<div class="flex items-center justify-between mt-space-xs pt-space-xs">
<span class="px-2 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-[11px] font-label-sm font-semibold">
            Taux majoré 125%
          </span>
<span class="font-label-sm text-[11px] text-on-surface-variant">Validées par RH</span>
</div>
</div>
<!-- Card 4: Anomalies to Regularize -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant mb-space-xs">
<span class="font-label-md text-label-md font-medium">Anomalie à régulariser</span>
<span class="material-symbols-outlined text-error text-[22px]">warning</span>
</div>
<div class="flex items-baseline gap-space-xs my-space-xs">
<span class="font-display-lg text-display-lg text-error font-bold">1</span>
<span class="font-body-md text-body-md text-on-surface-variant font-medium">Sortie manquante</span>
</div>
<div class="flex items-center justify-between mt-space-xs pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant">Jeu. 13 Mars</span>
<button class="px-2.5 py-1 rounded-lg bg-error-container text-on-error-container font-label-sm text-[11px] font-semibold hover:bg-error hover:text-on-error transition-all" onclick="openModal('regularize-modal')">
            Régulariser
          </button>
</div>
</div>
</div>
<!-- Monthly / Weekly Timecard Journal (Filterable Data Table) -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
<!-- Table Header & Controls Bar -->
<div class="p-space-lg bg-surface-container-low flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
<div class="flex items-center gap-space-sm">
<div class="w-8 h-8 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">table_chart</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Journal des Pointages &amp; Badgeages</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Détail journalier certifié par le système de contrôle d'accès</p>
</div>
</div>
<!-- Period Toggle & Actions -->
<div class="flex flex-wrap items-center gap-space-xs">
<div class="inline-flex rounded-lg bg-surface-container-high p-1">
<button class="px-3 py-1 text-label-sm font-label-sm rounded-md bg-surface-container-lowest text-on-surface shadow-xs font-semibold" id="tab-week" onclick="switchFilter('week')">
              Semaine en cours
            </button>
<button class="px-3 py-1 text-label-sm font-label-sm rounded-md text-on-surface-variant hover:text-on-surface font-medium" id="tab-month" onclick="switchFilter('month')">
              Mois de Mars 2025
            </button>
</div>
<button class="h-8 px-3 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm font-semibold flex items-center gap-1 shadow-xs transition-colors" onclick="exportLogs()">
<span class="material-symbols-outlined text-[16px]">download</span>
<span>Export PDF RH</span>
</button>
</div>
</div>
<!-- Data Table -->
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-surface-container-low/60 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">
<tr>
<th class="py-space-sm px-space-lg" scope="col">Date &amp; Jour</th>
<th class="py-space-sm px-space-md" scope="col">Arrivée</th>
<th class="py-space-sm px-space-md" scope="col">Départ</th>
<th class="py-space-sm px-space-md" scope="col">Pause</th>
<th class="py-space-sm px-space-md" scope="col">Total Effectué</th>
<th class="py-space-sm px-space-md" scope="col">Mode &amp; Emplacement</th>
<th class="py-space-sm px-space-md" scope="col">Statut</th>
<th class="py-space-sm px-space-lg text-right" scope="col">Actions</th>
</tr>
</thead>
<tbody class="font-body-md text-body-md text-on-surface divide-y divide-surface-container-low">
<!-- Row 1: Today (Mardi 18 Mars) -->
<tr class="hover:bg-surface-container-low/40 transition-colors bg-primary/2">
<td class="py-space-md px-space-lg">
<div class="flex items-center gap-space-xs">
<span class="w-2 h-2 rounded-full bg-tertiary-container animate-pulse"></span>
<div>
<span class="font-headline-sm text-[14px] text-on-surface font-semibold block">Mardi 18 Mars 2025</span>
<span class="font-label-sm text-[11px] text-primary">Aujourd'hui</span>
</div>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">08:28</span>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1 text-primary font-label-md text-label-md font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-ping"></span>
                  En cours
                </span>
</td>
<td class="py-space-md px-space-md font-numeric-md text-numeric-md text-on-surface-variant">0h 45m</td>
<td class="py-space-md px-space-md">
<span class="font-numeric-md text-numeric-md font-semibold text-tertiary-container">2h 36m</span>
</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-primary">fingerprint</span>
<span class="font-body-sm text-body-sm">Biométrie RDC (T1)</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-tertiary/10 text-tertiary-container font-label-sm text-[11px] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>
                  Conforme
                </span>
</td>
<td class="py-space-md px-space-lg text-right">
<button class="font-label-sm text-label-sm text-primary hover:text-on-primary-fixed-variant font-semibold" onclick="triggerPunch('Sortie rapide enregistrée.')">
                  Pointer Sortie
                </button>
</td>
</tr>
<!-- Row 2: Lundi 17 Mars -->
<tr class="hover:bg-surface-container-low/40 transition-colors">
<td class="py-space-md px-space-lg">
<div class="flex flex-col">
<span class="font-headline-sm text-[14px] text-on-surface font-semibold">Lundi 17 Mars 2025</span>
<span class="font-label-sm text-[11px] text-on-surface-variant">Semaine 12</span>
</div>
</td>
<td class="py-space-md px-space-md font-numeric-md text-numeric-md">08:22</td>
<td class="py-space-md px-space-md font-numeric-md text-numeric-md">17:35</td>
<td class="py-space-md px-space-md font-numeric-md text-numeric-md text-on-surface-variant">1h 00m</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-1">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">8h 13m</span>
<span class="font-label-sm text-[10px] text-tertiary-container font-semibold">(+13m)</span>
</div>
</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-primary">fingerprint</span>
<span class="font-body-sm text-body-sm">Biométrie RDC (T1)</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-tertiary/10 text-tertiary-container font-label-sm text-[11px] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>
                  Conforme
                </span>
</td>
<td class="py-space-md px-space-lg text-right">
<button class="p-1 rounded text-on-surface-variant hover:text-on-surface hover:bg-surface-container" onclick="viewLogDetail('17-03-2025')" title="Voir détails">
<span class="material-symbols-outlined text-[18px]">visibility</span>
</button>
</td>
</tr>
<!-- Row 3: Vendredi 14 Mars (Telework) -->
<tr class="hover:bg-surface-container-low/40 transition-colors">
<td class="py-space-md px-space-lg">
<div class="flex flex-col">
<span class="font-headline-sm text-[14px] text-on-surface font-semibold">Vendredi 14 Mars 2025</span>
<span class="font-label-sm text-[11px] text-on-surface-variant">Semaine 11</span>
</div>
</td>
<td class="py-space-md px-space-md font-numeric-md text-numeric-md">08:30</td>
<td class="py-space-md px-space-md font-numeric-md text-numeric-md">17:00</td>
<td class="py-space-md px-space-md font-numeric-md text-numeric-md text-on-surface-variant">1h 00m</td>
<td class="py-space-md px-space-md">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">7h 30m</span>
</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-secondary">home_work</span>
<span class="font-body-sm text-body-sm">Télétravail SSO VPN</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-[11px] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                  Télétravail Validé
                </span>
</td>
<td class="py-space-md px-space-lg text-right">
<button class="p-1 rounded text-on-surface-variant hover:text-on-surface hover:bg-surface-container" onclick="viewLogDetail('14-03-2025')" title="Voir justificatif">
<span class="material-symbols-outlined text-[18px]">description</span>
</button>
</td>
</tr>
<!-- Row 4: Jeudi 13 Mars (Anomaly missing punch out) -->
<tr class="hover:bg-surface-container-low/40 transition-colors bg-error/5">
<td class="py-space-md px-space-lg">
<div class="flex flex-col">
<span class="font-headline-sm text-[14px] text-on-surface font-semibold">Jeudi 13 Mars 2025</span>
<span class="font-label-sm text-[11px] text-error font-medium">Anomalie détectée</span>
</div>
</td>
<td class="py-space-md px-space-md font-numeric-md text-numeric-md">08:15</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1 text-error font-numeric-md text-numeric-md font-semibold">
<span class="material-symbols-outlined text-[16px]">error</span>
                  --:-- (Oubli)
                </span>
</td>
<td class="py-space-md px-space-md font-numeric-md text-numeric-md text-on-surface-variant">0h 45m</td>
<td class="py-space-md px-space-md">
<span class="font-numeric-md text-numeric-md text-error font-semibold">Incomplet</span>
</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-primary">fingerprint</span>
<span class="font-body-sm text-body-sm">Terminal RDC (T1)</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-[11px] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                  Sortie Non Enregistrée
                </span>
</td>
<td class="py-space-md px-space-lg text-right">
<button class="px-3 py-1 rounded-md bg-primary-container text-on-primary font-label-sm text-label-sm font-semibold hover:bg-primary transition-all shadow-xs" onclick="openModal('regularize-modal')">
                  Régulariser
                </button>
</td>
</tr>
<!-- Row 5: Mercredi 12 Mars -->
<tr class="hover:bg-surface-container-low/40 transition-colors">
<td class="py-space-md px-space-lg">
<div class="flex flex-col">
<span class="font-headline-sm text-[14px] text-on-surface font-semibold">Mercredi 12 Mars 2025</span>
<span class="font-label-sm text-[11px] text-on-surface-variant">Semaine 11</span>
</div>
</td>
<td class="py-space-md px-space-md font-numeric-md text-numeric-md">08:26</td>
<td class="py-space-md px-space-md font-numeric-md text-numeric-md">17:42</td>
<td class="py-space-md px-space-md font-numeric-md text-numeric-md text-on-surface-variant">1h 00m</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-1">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">8h 16m</span>
<span class="font-label-sm text-[10px] text-tertiary-container font-semibold">(+16m)</span>
</div>
</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[16px] text-primary">badge</span>
<span class="font-body-sm text-body-sm">Badge RFID Terminal 2</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-tertiary/10 text-tertiary-container font-label-sm text-[11px] font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>
                  Conforme
                </span>
</td>
<td class="py-space-md px-space-lg text-right">
<button class="p-1 rounded text-on-surface-variant hover:text-on-surface hover:bg-surface-container" onclick="viewLogDetail('12-03-2025')" title="Voir détails">
<span class="material-symbols-outlined text-[18px]">visibility</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination & Table Summary Footer -->
<div class="p-space-md bg-surface-container-low/50 flex flex-col sm:flex-row items-center justify-between gap-space-sm text-on-surface-variant font-label-sm text-label-sm">
<span>Affichage de 5 jours ouvrés sur 21 ce mois-ci</span>
<div class="flex items-center gap-space-xs">
<span class="mr-2">Moyenne quotidienne : <strong class="text-on-surface">8h 05m</strong></span>
<button class="w-7 h-7 rounded bg-surface-container-lowest flex items-center justify-center text-on-surface disabled:opacity-50" disabled="">
<span class="material-symbols-outlined text-[16px]">chevron_left</span>
</button>
<span class="px-2 py-0.5 rounded bg-primary-container text-on-primary font-semibold">1</span>
<button class="w-7 h-7 rounded bg-surface-container-lowest flex items-center justify-center text-on-surface hover:bg-surface-container">
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Regularization Modal / Flow Window (Popup Snippet) -->
<div class="fixed inset-0 z-50 bg-inverse-surface/40 backdrop-blur-xs flex items-center justify-center hidden p-space-md" id="regularize-modal">
<div class="bg-surface-container-lowest rounded-xl shadow-xl w-full max-w-lg overflow-hidden flex flex-col animate-in fade-in zoom-in duration-200">
<div class="p-space-lg bg-surface-container-low flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<div class="w-8 h-8 rounded-lg bg-error-container text-on-error-container flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">edit_calendar</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Régulariser un Oubli de Pointage</h4>
<span class="font-label-sm text-label-sm text-on-surface-variant">Conforme aux directives RH Carthage Tech</span>
</div>
</div>
<button class="w-8 h-8 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-on-surface flex items-center justify-center transition-colors" onclick="closeModal('regularize-modal')">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
</div>
<form class="p-space-xl flex flex-col gap-space-md" onsubmit="handleRegularizeSubmit(event)">
<div class="p-space-sm bg-surface-container-low rounded-lg flex items-center justify-between text-on-surface">
<div>
<span class="font-label-sm text-[11px] text-on-surface-variant block">Date concernée</span>
<span class="font-headline-sm text-headline-sm font-semibold">Jeudi 13 Mars 2025</span>
</div>
<div class="text-right">
<span class="font-label-sm text-[11px] text-on-surface-variant block">Arrivée enregistrée</span>
<span class="font-numeric-md text-numeric-md font-semibold text-tertiary-container">08:15</span>
</div>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium" for="reg-time">Heure effective de sortie souhaitée *</label>
<input class="h-10 px-space-md rounded-lg bg-surface-container-low text-on-surface font-numeric-md text-numeric-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary-container" id="reg-time" required="" type="time" value="17:30"/>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium" for="reg-reason">Motif de la régularisation *</label>
<select class="h-10 px-space-md rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary-container" id="reg-reason">
<option value="client">Réunion client externe prolongée</option>
<option selected="" value="oubli">Oubli de badgeage physique en quittant</option>
<option value="badge_panne">Dysfonctionnement du lecteur biométrique</option>
<option value="intervention">Intervention technique d'urgence</option>
</select>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium" for="reg-note">Précision explicative pour les RH (Amel Ben Salah)</label>
<textarea class="p-space-sm rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary-container resize-none" id="reg-note" placeholder="Ex: Déplacement inopiné chez le client Banque de l'Habitat jusqu'à 18h..." rows="3"></textarea>
</div>
<div class="flex items-center gap-space-sm pt-space-sm">
<button class="flex-1 h-10 px-space-md rounded-lg bg-surface-container-high text-on-surface font-label-lg text-label-lg font-medium hover:bg-surface-variant transition-colors" onclick="closeModal('regularize-modal')" type="button">
              Annuler
            </button>
<button class="flex-1 h-10 px-space-md rounded-lg bg-primary-container text-on-primary font-label-lg text-label-lg font-semibold hover:bg-primary transition-colors flex items-center justify-center gap-1 shadow-sm" type="submit">
<span class="material-symbols-outlined text-[18px]">send</span>
<span>Soumettre à la RH</span>
</button>
</div>
</form>
</div>
</div>
<!-- Telework Declaration Modal -->
<div class="fixed inset-0 z-50 bg-inverse-surface/40 backdrop-blur-xs flex items-center justify-center hidden p-space-md" id="telework-modal">
<div class="bg-surface-container-lowest rounded-xl shadow-xl w-full max-w-lg overflow-hidden flex flex-col">
<div class="p-space-lg bg-surface-container-low flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<div class="w-8 h-8 rounded-lg bg-secondary-container text-on-secondary-fixed flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">home_work</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Déclaration de Télétravail</h4>
<span class="font-label-sm text-label-sm text-on-surface-variant">Conformité accord télétravail d'entreprise (max 2j/semaine)</span>
</div>
</div>
<button class="w-8 h-8 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-on-surface flex items-center justify-center" onclick="closeModal('telework-modal')">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
</div>
<form class="p-space-xl flex flex-col gap-space-md" onsubmit="handleTeleworkSubmit(event)">
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium">Journée de télétravail souhaitée</label>
<input class="h-10 px-space-md rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary-container" required="" type="date" value="2025-03-21"/>
</div>
<div class="p-space-sm bg-surface-container-low rounded-lg text-on-surface-variant font-body-sm text-body-sm">
<p>Votre quota restant pour cette semaine : <strong>1 jour disponible</strong>. Le pointage se fera automatiquement via l'authentification VPN/SSO.</p>
</div>
<div class="flex items-center gap-space-sm pt-space-sm">
<button class="flex-1 h-10 rounded-lg bg-surface-container-high text-on-surface font-label-lg text-label-lg font-medium" onclick="closeModal('telework-modal')" type="button">Annuler</button>
<button class="flex-1 h-10 rounded-lg bg-primary-container text-on-primary font-label-lg text-label-lg font-semibold hover:bg-primary" type="submit">Confirmer</button>
</div>
</form>
</div>
</div>
<!-- Notification Toast Element -->
<div class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none flex items-center gap-space-sm px-space-lg py-space-md rounded-xl bg-inverse-surface text-inverse-on-surface shadow-xl" id="toast-notification">
<span class="material-symbols-outlined text-tertiary-fixed text-[22px]">check_circle</span>
<span class="font-label-lg text-label-lg font-medium" id="toast-message">Action validée</span>
</div>
</div>
</div>
<script>
  // Live Clock updater
  function updateClock() {
    const el = document.getElementById('live-clock-time');
    if (!el) return;
    const now = new Date();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    el.textContent = `${hours}:${minutes}:${seconds}`;
  }
  setInterval(updateClock, 1000);
  updateClock();

  // Modals management
  function openModal(id) {
    const modal = document.getElementById(id);
    if (modal) modal.classList.remove('hidden');
  }

  function closeModal(id) {
    const modal = document.getElementById(id);
    if (modal) modal.classList.add('hidden');
  }

  // Toast notification
  function showToast(message) {
    const toast = document.getElementById('toast-notification');
    const text = document.getElementById('toast-message');
    if (toast && text) {
      text.textContent = message;
      toast.classList.remove('translate-y-20', 'opacity-0');
      toast.classList.add('translate-y-0', 'opacity-100');
      setTimeout(() => {
        toast.classList.remove('translate-y-0', 'opacity-100');
        toast.classList.add('translate-y-20', 'opacity-0');
      }, 3500);
    }
  }

  // Virtual Punch Trigger
  function triggerPunch(msg) {
    showToast(msg);
  }

  // Handlers for modal forms
  function handleRegularizeSubmit(e) {
    e.preventDefault();
    closeModal('regularize-modal');
    showToast('Demande de régularisation envoyée à Amel Ben Salah (RH).');
  }

  function handleTeleworkSubmit(e) {
    e.preventDefault();
    closeModal('telework-modal');
    showToast('Journée de télétravail déclarée et inscrite au planning.');
  }

  function switchFilter(type) {
    const tabWeek = document.getElementById('tab-week');
    const tabMonth = document.getElementById('tab-month');
    if (type === 'week') {
      tabWeek.className = 'px-3 py-1 text-label-sm font-label-sm rounded-md bg-surface-container-lowest text-on-surface shadow-xs font-semibold';
      tabMonth.className = 'px-3 py-1 text-label-sm font-label-sm rounded-md text-on-surface-variant hover:text-on-surface font-medium';
      showToast('Affichage : Semaine en cours');
    } else {
      tabMonth.className = 'px-3 py-1 text-label-sm font-label-sm rounded-md bg-surface-container-lowest text-on-surface shadow-xs font-semibold';
      tabWeek.className = 'px-3 py-1 text-label-sm font-label-sm rounded-md text-on-surface-variant hover:text-on-surface font-medium';
      showToast('Affichage : Mois complet de Mars 2025');
    }
  }

  function exportLogs() {
    showToast('Génération de l\'export PDF du relevé d\'assiduité...');
  }

  function viewLogDetail(date) {
    showToast('Détails complets des passages badgeuse pour le ' + date);
  }
</script>
</x-collaborator-shell>
