<x-admin-shell active="attendance" title="Suivi du Pointage & Présence">
<div class="flex flex-col w-full pb-16">
<!-- Top Navigation & Breadcrumbs -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 py-5">
<div class="flex flex-col gap-1">
<nav class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface-variant">
<span class="hover:text-primary cursor-pointer transition-colors">Accueil</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold">Présence &amp; Pointage</span>
</nav>
<div class="flex items-baseline gap-3 mt-1">
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Suivi du Pointage &amp; Présence</h1>
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary animate-pulse"></span>
          Direct Biométrique
        </span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
        Badges &amp; empreintes synchronisés en temps réel • Conforme au Code du Travail Tunisien (Loi n° 66-27 - 48h/40h hebdo)
      </p>
</div>
<!-- Main Header Action CTAs -->
<div class="flex items-center gap-2.5">
<button class="h-9 px-3.5 rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg flex items-center gap-2 shadow-sm transition-all" type="button">
<span class="material-symbols-outlined text-body-lg text-secondary">file_download</span>
<span>Exporter Rapport</span>
</button>
<button class="h-9 px-4 rounded-xl bg-primary-container hover:bg-primary text-on-primary font-label-lg text-label-lg flex items-center gap-2 shadow-sm transition-all active:scale-[0.98]" id="openModalBtn" type="button">
<span class="material-symbols-outlined text-body-md">add_circle</span>
<span>+ Pointage Manuel</span>
</button>
</div>
</div>
<!-- KPI Metric Overview Bento Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
<!-- KPI 1: Présents -->
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface-variant">Effectif Présent Aujourd'hui</span>
<div class="w-8 h-8 rounded-lg bg-surface-container-low flex items-center justify-center text-tertiary">
<span class="material-symbols-outlined text-body-lg" style="font-variation-settings: 'FILL' 1;">badge</span>
</div>
</div>
<div class="my-3 flex items-baseline gap-2">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">43</span>
<span class="font-headline-sm text-headline-sm text-on-surface-variant">/ 48</span>
</div>
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="inline-flex items-center gap-1 text-tertiary font-semibold">
<span class="material-symbols-outlined text-[15px]">trending_up</span>
          89.6% Taux présence
        </span>
<span class="text-on-surface-variant">3 sites synchro</span>
</div>
<div class="absolute bottom-0 left-0 right-0 h-1 bg-tertiary-fixed"></div>
</div>
<!-- KPI 2: Retards -->
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface-variant">Retards Constatés</span>
<div class="w-8 h-8 rounded-lg bg-secondary-container flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-body-lg">schedule</span>
</div>
</div>
<div class="my-3 flex items-baseline gap-2">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">3</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">collaborateurs</span>
</div>
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-secondary-container font-medium">Tolérance &gt; 15 min</span>
<span class="text-on-surface-variant">Moy. +21 min</span>
</div>
<div class="absolute bottom-0 left-0 right-0 h-1 bg-secondary-fixed"></div>
</div>
<!-- KPI 3: Absences Non Justifiées -->
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface-variant">Absences Injustifiées</span>
<div class="w-8 h-8 rounded-lg bg-error-container flex items-center justify-center text-error">
<span class="material-symbols-outlined text-body-lg">warning</span>
</div>
</div>
<div class="my-3 flex items-baseline gap-2">
<span class="font-display-lg text-display-lg text-error tracking-tight">2</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">sans préavis</span>
</div>
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="inline-flex items-center gap-1 text-error font-medium">
<span class="material-symbols-outlined text-[14px]">notification_important</span>
          2 Rappels envoyés
        </span>
<span class="text-on-surface-variant">Délai 48h</span>
</div>
<div class="absolute bottom-0 left-0 right-0 h-1 bg-error"></div>
</div>
<!-- KPI 4: Heures Supplémentaires -->
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface-variant">Heures Supp. (Mois en cours)</span>
<div class="w-8 h-8 rounded-lg bg-primary-fixed flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-body-lg">more_time</span>
</div>
</div>
<div class="my-3 flex items-baseline gap-2">
<span class="font-display-lg text-display-lg text-primary tracking-tight">34,5</span>
<span class="font-headline-sm text-headline-sm text-on-surface-variant">heures</span>
</div>
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-primary font-semibold">Taux légal: 125% / 150%</span>
<span class="text-on-surface-variant">12 agents</span>
</div>
<div class="absolute bottom-0 left-0 right-0 h-1 bg-primary"></div>
</div>
</div>
<!-- Operational Control Bar: Datepicker, Presets, Filters & Search -->
<div class="bg-surface-container-lowest rounded-xl p-4 shadow-sm mb-6 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
<!-- Date Navigation Segment -->
<div class="flex items-center flex-wrap gap-2">
<div class="inline-flex items-center bg-surface-container-low p-1 rounded-xl">
<button aria-label="Jour précédent" class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">chevron_left</span>
</button>
<div class="flex items-center gap-2 px-3 py-1">
<span class="material-symbols-outlined text-primary text-body-md">calendar_today</span>
<span class="font-label-lg text-label-lg text-on-surface font-semibold">Mardi 18 Mars 2025</span>
</div>
<button aria-label="Jour suivant" class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">chevron_right</span>
</button>
</div>
<button class="h-8 px-3 rounded-lg bg-surface-container text-on-surface font-label-sm text-label-sm hover:bg-surface-container-high transition-colors" type="button">
        Aujourd'hui
      </button>
<span class="text-on-surface-variant font-label-sm text-label-sm ml-2 hidden xl:inline">Cycle normal : 08:30 - 17:30</span>
</div>
<!-- Filters & Search Query -->
<div class="flex items-center flex-wrap gap-3">
<!-- Search Input -->
<div class="relative min-w-[220px]">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span>
<input class="w-full h-9 pl-9 pr-3 rounded-xl bg-surface-container-low font-body-sm text-body-sm text-on-surface placeholder:text-on-surface-variant focus:outline-none focus:bg-surface-container" id="searchInput" placeholder="Filtrer collaborateur, matricule..." type="text"/>
</div>
<!-- Department Filter -->
<div class="relative">
<select class="h-9 pl-3 pr-8 rounded-xl bg-surface-container-low font-label-md text-label-md text-on-surface appearance-none focus:outline-none focus:bg-surface-container cursor-pointer">
<option value="all">Tous Départements</option>
<option value="tech">Ingénierie &amp; Tech</option>
<option value="rh">Ressources Humaines</option>
<option value="finance">Comptabilité &amp; Finance</option>
<option value="operations">Opérations Tunis/Sfax</option>
<option value="marketing">Marketing &amp; Ventes</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px] pointer-events-none">arrow_drop_down</span>
</div>
<!-- Attendance Status Filter -->
<div class="relative">
<select class="h-9 pl-3 pr-8 rounded-xl bg-surface-container-low font-label-md text-label-md text-on-surface appearance-none focus:outline-none focus:bg-surface-container cursor-pointer" id="statusFilter">
<option value="all">Tous les Statuts</option>
<option value="ontime">À l'heure</option>
<option value="late">En Retard</option>
<option value="remote">Télétravail</option>
<option value="absent">Absent Non Justifié</option>
<option value="leave">En Congé Légal</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px] pointer-events-none">arrow_drop_down</span>
</div>
</div>
</div>
<!-- Main Roster Attendance Data Table -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden mb-8">
<div class="p-4 bg-surface-container-low/50 flex items-center justify-between">
<div class="flex items-center gap-3">
<span class="font-headline-sm text-headline-sm text-on-surface">Journal des Pointages Journaliers</span>
<span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">48 collaborateurs inscrits</span>
</div>
<div class="flex items-center gap-2">
<span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1.5">
<span class="w-2 h-2 rounded-full bg-tertiary"></span> Terminal Lac 2 En Ligne
        </span>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse" id="attendanceTable">
<thead>
<tr class="bg-surface-container-low font-label-md text-label-md text-on-surface-variant uppercase tracking-wider h-11">
<th class="px-4 py-2 font-medium">Collaborateur</th>
<th class="px-3 py-2 font-medium">Département</th>
<th class="px-3 py-2 font-medium">Arrivée</th>
<th class="px-3 py-2 font-medium">Départ</th>
<th class="px-3 py-2 font-medium">Pause Midi</th>
<th class="px-3 py-2 font-medium">Total Effectué</th>
<th class="px-3 py-2 font-medium">Mode de Pointage</th>
<th class="px-3 py-2 font-medium">Statut Journée</th>
<th class="px-4 py-2 font-medium text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container font-body-md text-body-md text-on-surface">
<!-- Row 1: Mohamed Ben Salem -->
<tr class="hover:bg-surface-container-low/60 transition-colors h-14">
<td class="px-4 py-2.5">
<div class="flex items-center gap-3">
<img class="w-9 h-9 rounded-full object-cover shrink-0" data-alt="Professional headshot of a North African male software engineering manager wearing a navy blazer in a modern office in Tunis with soft daylight and clean corporate background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSpfNRQSQfIqtzTtdwCxulZuSGb4nGvmMfucnvTgFbmLg9zkGhBcSi3hC5t9nWLVKLWYGyTr_nDbKtLBMrR0rWKTCw0KYz8ofnPUxhnQfIG5AazEyH_ibZeqCYhw-cfLo6T3FUqnu5SdJP0Vl2L_VqJjtQQ27_9J3VWkDt2b2WKJ70xAYmPYWzfUnlhdi7Th2QEvEU1GJFR0TVFYEf5df0-nFuYcumMo4HISl9ib1xXzmCEWbtCM8K"/>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Mohamed Ben Salem</span>
<span class="font-label-sm text-label-sm text-on-surface-variant truncate">MAT-0419 • Lead Développeur</span>
</div>
</div>
</td>
<td class="px-3 py-2.5">
<span class="font-label-md text-label-md text-on-surface bg-surface-container px-2 py-0.5 rounded">R&amp;D Tech</span>
</td>
<td class="px-3 py-2.5">
<div class="flex items-center gap-1.5">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">08:28</span>
<span class="inline-flex items-center text-[11px] text-tertiary bg-tertiary-fixed/40 px-1.5 py-0.2 rounded font-medium">À l'heure</span>
</div>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md text-on-surface-variant italic">En poste...</span>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md text-on-surface-variant">45 min</span>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">6h 12m</span>
</td>
<td class="px-3 py-2.5">
<div class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-[16px] text-primary">fingerprint</span>
<span>Biométrie Lac 2</span>
</div>
</td>
<td class="px-3 py-2.5">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-tertiary font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span> Présent
              </span>
</td>
<td class="px-4 py-2.5 text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 hover:bg-surface-container rounded-lg text-on-surface-variant hover:text-primary transition-colors" title="Modifier le pointage" type="button">
<span class="material-symbols-outlined text-body-md">edit</span>
</button>
<button class="p-1.5 hover:bg-surface-container rounded-lg text-on-surface-variant hover:text-on-surface transition-colors" title="Consulter l'historique" type="button">
<span class="material-symbols-outlined text-body-md">history</span>
</button>
</div>
</td>
</tr>
<!-- Row 2: Yasmine Trabelsi (Retard) -->
<tr class="hover:bg-surface-container-low/60 transition-colors h-14 bg-error-container/10">
<td class="px-4 py-2.5">
<div class="flex items-center gap-3">
<img class="w-9 h-9 rounded-full object-cover shrink-0" data-alt="Portrait of a young Tunisian female marketing specialist smiling gently, natural corporate headshot with clean minimalist background and bright studio light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5t5Jvq58bVzzXOlTRTe5u5BB-yDvoZzY9vhCgdTOKikE4-UCEk5L6MD7b7CyMw_5fDDVUQ1PbREvah-QAcRJTAUvQ9g3svgmh0bxrlRPTsQjWC8s7elRhfqy1rJ6N1IR9ns1a9Y3460j6A6c5lEJUTiPqEsgQcyZ_QiDRV9V4JzQKsmQS_yRmLzTeivFYGsB4G7YwgifXAeWkReNoo6_DAIW8iZUU-JRPynG-fn3jdY-Cf_yPAFKo"/>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Yasmine Trabelsi</span>
<span class="font-label-sm text-label-sm text-on-surface-variant truncate">MAT-0582 • Product Manager</span>
</div>
</div>
</td>
<td class="px-3 py-2.5">
<span class="font-label-md text-label-md text-on-surface bg-surface-container px-2 py-0.5 rounded">Produit</span>
</td>
<td class="px-3 py-2.5">
<div class="flex items-center gap-1.5">
<span class="font-numeric-md text-numeric-md font-semibold text-error">08:54</span>
<span class="inline-flex items-center text-[11px] text-error bg-error-container px-1.5 py-0.2 rounded font-medium">+24 min</span>
</div>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md text-on-surface-variant italic">En poste...</span>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md text-on-surface-variant">50 min</span>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">5h 46m</span>
</td>
<td class="px-3 py-2.5">
<div class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-[16px] text-secondary">contactless</span>
<span>Badge RFID RDC</span>
</div>
</td>
<td class="px-3 py-2.5">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-error-container/40 font-label-sm text-label-sm text-error font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-error"></span> Retard Notifié
              </span>
</td>
<td class="px-4 py-2.5 text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 hover:bg-surface-container rounded-lg text-secondary hover:text-on-surface transition-colors" title="Demander justification" type="button">
<span class="material-symbols-outlined text-body-md">mail</span>
</button>
<button class="p-1.5 hover:bg-surface-container rounded-lg text-on-surface-variant hover:text-primary transition-colors" title="Modifier le pointage" type="button">
<span class="material-symbols-outlined text-body-md">edit</span>
</button>
</div>
</td>
</tr>
<!-- Row 3: Mehdi Zghal (Télétravail) -->
<tr class="hover:bg-surface-container-low/60 transition-colors h-14">
<td class="px-4 py-2.5">
<div class="flex items-center gap-3">
<img class="w-9 h-9 rounded-full object-cover shrink-0" data-alt="Middle-aged Tunisian male senior data analyst with glasses in business casual shirt, warm office atmosphere and subtle tech monitors in background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqqzr4_xFE7s444jQzq1c2qMXcJIAvp8Avfq0S6Xclzgxx5uggOlGLyfZbcQpevUbHriJjAiOs1PvC4TsQBhGLVL4wkNHFohonLnv1RCFcvgskH2lA-KY34x9wKwaqS3wDhil7rTbCQEtTdEJwjuhnLnGCWyjceiqMkMu5_62wi4Y6oH_uLsV9cmOsrBY_tQQBgGXjTn-tkwWF1PigtnFQfjK-wt88DRS7OSeSgnPmmoR7YfTf8TXm"/>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Mehdi Zghal</span>
<span class="font-label-sm text-label-sm text-on-surface-variant truncate">MAT-0312 • Architecte Cloud</span>
</div>
</div>
</td>
<td class="px-3 py-2.5">
<span class="font-label-md text-label-md text-on-surface bg-surface-container px-2 py-0.5 rounded">Infrastructure</span>
</td>
<td class="px-3 py-2.5">
<div class="flex items-center gap-1.5">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">08:10</span>
<span class="inline-flex items-center text-[11px] text-primary bg-primary-fixed px-1.5 py-0.2 rounded font-medium">À distance</span>
</div>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md text-on-surface-variant italic">En ligne</span>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md text-on-surface-variant">1h 00m</span>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">6h 30m</span>
</td>
<td class="px-3 py-2.5">
<div class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-[16px] text-primary-container">laptop_mac</span>
<span>Portail Web SSO</span>
</div>
</td>
<td class="px-3 py-2.5">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container font-label-sm text-label-sm text-on-secondary-fixed font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-primary-container"></span> Télétravail Validé
              </span>
</td>
<td class="px-4 py-2.5 text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 hover:bg-surface-container rounded-lg text-on-surface-variant hover:text-primary transition-colors" title="Modifier le pointage" type="button">
<span class="material-symbols-outlined text-body-md">edit</span>
</button>
<button class="p-1.5 hover:bg-surface-container rounded-lg text-on-surface-variant hover:text-on-surface transition-colors" title="Détails de session" type="button">
<span class="material-symbols-outlined text-body-md">info</span>
</button>
</div>
</td>
</tr>
<!-- Row 4: Nour El Houda Karray -->
<tr class="hover:bg-surface-container-low/60 transition-colors h-14">
<td class="px-4 py-2.5">
<div class="flex items-center gap-3">
<img class="w-9 h-9 rounded-full object-cover shrink-0" data-alt="Portrait of an elegant Tunisian female HR professional wearing modern executive attire, well-lit indoor corporate setting with neutral clean colors" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlkXnJ-GLW_WzBGs_MspuAOSe1lFuW9wZCtf2NQr8tPT0FPM1PETcBTjgdHv5Osl_UtQCW_YzsfYchco9acEKyZKi6eMFNvW04gIB4LpA8pK8JmozQ-sEvRGmK8g_GUmamNPetfuYfriDC47XSt05Rft_oH7FMW3BwndccBKZ4_NaT5ctj8Tor9DxPcwET-8qhQq91f2uTDrDDGv1FYnepVA4r2OcVyEDFpSipdtD11o9q9IplfnUw"/>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Nour El Houda Karray</span>
<span class="font-label-sm text-label-sm text-on-surface-variant truncate">MAT-0654 • Chargée Recrutement</span>
</div>
</div>
</td>
<td class="px-3 py-2.5">
<span class="font-label-md text-label-md text-on-surface bg-surface-container px-2 py-0.5 rounded">Ressources Humaines</span>
</td>
<td class="px-3 py-2.5">
<div class="flex items-center gap-1.5">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">08:30</span>
<span class="inline-flex items-center text-[11px] text-tertiary bg-tertiary-fixed/40 px-1.5 py-0.2 rounded font-medium">À l'heure</span>
</div>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md text-on-surface-variant italic">En poste...</span>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md text-on-surface-variant">40 min</span>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">6h 10m</span>
</td>
<td class="px-3 py-2.5">
<div class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-[16px] text-primary">fingerprint</span>
<span>Biométrie Lac 2</span>
</div>
</td>
<td class="px-3 py-2.5">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-tertiary font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span> Présent
              </span>
</td>
<td class="px-4 py-2.5 text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 hover:bg-surface-container rounded-lg text-on-surface-variant hover:text-primary transition-colors" title="Modifier le pointage" type="button">
<span class="material-symbols-outlined text-body-md">edit</span>
</button>
<button class="p-1.5 hover:bg-surface-container rounded-lg text-on-surface-variant hover:text-on-surface transition-colors" title="Détails" type="button">
<span class="material-symbols-outlined text-body-md">history</span>
</button>
</div>
</td>
</tr>
<!-- Row 5: Sonia Mezghani (Absent Non Justifié) -->
<tr class="hover:bg-surface-container-low/60 transition-colors h-14 bg-error-container/20">
<td class="px-4 py-2.5">
<div class="flex items-center gap-3">
<div class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center font-label-md text-label-md text-on-surface-variant font-bold">
                  SM
                </div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Sonia Mezghani</span>
<span class="font-label-sm text-label-sm text-on-surface-variant truncate">MAT-0220 • Comptable Fournisseurs</span>
</div>
</div>
</td>
<td class="px-3 py-2.5">
<span class="font-label-md text-label-md text-on-surface bg-surface-container px-2 py-0.5 rounded">Comptabilité</span>
</td>
<td class="px-3 py-2.5">
<span class="font-label-sm text-label-sm text-error font-medium">Non pointé</span>
</td>
<td class="px-3 py-2.5">
<span class="font-label-sm text-label-sm text-on-surface-variant">—</span>
</td>
<td class="px-3 py-2.5">
<span class="font-label-sm text-label-sm text-on-surface-variant">—</span>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md font-semibold text-error">0h 00m</span>
</td>
<td class="px-3 py-2.5">
<span class="font-label-sm text-label-sm text-on-surface-variant italic">Aucun enregistrement</span>
</td>
<td class="px-3 py-2.5">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-error-container font-label-sm text-label-sm text-on-error-container font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-error"></span> Absent Injustifié
              </span>
</td>
<td class="px-4 py-2.5 text-right">
<div class="flex items-center justify-end gap-1">
<button class="h-7 px-2.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-error font-label-sm text-label-sm transition-colors flex items-center gap-1" type="button">
<span class="material-symbols-outlined text-[14px]">send</span> Relancer
                </button>
</div>
</td>
</tr>
<!-- Row 6: Karim Chaabane -->
<tr class="hover:bg-surface-container-low/60 transition-colors h-14">
<td class="px-4 py-2.5">
<div class="flex items-center gap-3">
<img class="w-9 h-9 rounded-full object-cover shrink-0" data-alt="Portrait of an experienced Tunisian senior sales director in tailored suit, bright contemporary corporate glass building in Tunis" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAi0za5WJYzc6MKIUZ3imLvqtIs8r9CwgHD2fgJWt037Mu1JPH9WemmEu8AK-WZJsjhM5SjpjD9bG390zBoF2vAajSCqCSaR7KVA2NT2x0PwpqyxS8mi-o8mG01Bqn2Mos2gHFg9VT1TzH0Ip6Dh4LE0d_tfoM8_XRhwjKbOHpOX4j-FXR_kTS4jgD8awsXCNhgCzricLCruQZ98oGPVQoGnYYsPB8KtgS3yE1vq3dOvaXv3vVvqbgJ"/>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Karim Chaabane</span>
<span class="font-label-sm text-label-sm text-on-surface-variant truncate">MAT-0105 • VP Business Dev</span>
</div>
</div>
</td>
<td class="px-3 py-2.5">
<span class="font-label-md text-label-md text-on-surface bg-surface-container px-2 py-0.5 rounded">Direction Ventes</span>
</td>
<td class="px-3 py-2.5">
<div class="flex items-center gap-1.5">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">08:15</span>
<span class="inline-flex items-center text-[11px] text-tertiary bg-tertiary-fixed/40 px-1.5 py-0.2 rounded font-medium">À l'heure</span>
</div>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md text-on-surface-variant italic">En poste...</span>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md text-on-surface-variant">30 min</span>
</td>
<td class="px-3 py-2.5">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">6h 25m</span>
</td>
<td class="px-3 py-2.5">
<div class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-[16px] text-secondary">contactless</span>
<span>Badge RFID RDC</span>
</div>
</td>
<td class="px-3 py-2.5">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-tertiary font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span> Présent
              </span>
</td>
<td class="px-4 py-2.5 text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 hover:bg-surface-container rounded-lg text-on-surface-variant hover:text-primary transition-colors" title="Modifier le pointage" type="button">
<span class="material-symbols-outlined text-body-md">edit</span>
</button>
<button class="p-1.5 hover:bg-surface-container rounded-lg text-on-surface-variant hover:text-on-surface transition-colors" title="Détails" type="button">
<span class="material-symbols-outlined text-body-md">history</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Table Pagination Footer -->
<div class="p-4 bg-surface-container-low/40 flex flex-col sm:flex-row items-center justify-between gap-3">
<span class="font-label-sm text-label-sm text-on-surface-variant">
        Affichage de 1 à 6 sur 48 collaborateurs actifs
      </span>
<div class="flex items-center gap-1.5">
<button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest text-on-surface-variant opacity-50 cursor-not-allowed font-label-sm text-label-sm shadow-sm" disabled="" type="button">
          Précédent
        </button>
<button class="px-3 py-1.5 rounded-lg bg-primary-container text-on-primary font-label-sm text-label-sm shadow-sm" type="button">
          1
        </button>
<button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm shadow-sm transition-colors" type="button">
          2
        </button>
<button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm shadow-sm transition-colors" type="button">
          3
        </button>
<button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm shadow-sm transition-colors" type="button">
          Suivant
        </button>
</div>
</div>
</div>
<!-- Bottom Analytics & Compliance Section: Weekly Breakdown + Anomaly Stream -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Chart: Taux de présence hebdomadaire -->
<div class="lg:col-span-2 bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between mb-4">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Rythme &amp; Assiduité Hebdomadaire</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Moyenne globale des 5 derniers jours ouvrés (Lun - Ven)</p>
</div>
<div class="flex items-center gap-3">
<span class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant">
<span class="w-3 h-3 rounded bg-primary"></span> Présents
          </span>
<span class="flex items-center gap-1.5 font-label-sm text-label-sm text-on-surface-variant">
<span class="w-3 h-3 rounded bg-secondary-fixed-dim"></span> Retards
          </span>
</div>
</div>
<!-- Compact SVG Bar Visualization -->
<div class="h-44 w-full flex items-end gap-6 pt-4 pb-2 px-2">
<!-- Lun -->
<div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
<span class="font-label-sm text-label-sm text-on-surface-variant">94%</span>
<div class="w-full max-w-[48px] bg-surface-container-low rounded-t-lg h-full flex flex-col justify-end p-1">
<div class="w-full bg-secondary-fixed rounded-t-sm h-[8%]"></div>
<div class="w-full bg-primary rounded-b-sm h-[86%]"></div>
</div>
<span class="font-label-sm text-label-sm text-on-surface font-medium">Lun 17</span>
</div>
<!-- Mar (Aujourd'hui) -->
<div class="flex-1 flex flex-col items-center gap-2 h-full justify-end">
<span class="font-label-sm text-label-sm text-primary font-bold">89.6%</span>
<div class="w-full max-w-[48px] bg-primary-fixed/20 rounded-t-lg h-full flex flex-col justify-end p-1 ring-1 ring-primary/20">
<div class="w-full bg-secondary-fixed rounded-t-sm h-[6%]"></div>
<div class="w-full bg-primary-container rounded-b-sm h-[84%]"></div>
</div>
<span class="font-label-sm text-label-sm text-primary font-bold">Mar 18</span>
</div>
<!-- Mer (Estimé) -->
<div class="flex-1 flex flex-col items-center gap-2 h-full justify-end opacity-40">
<span class="font-label-sm text-label-sm text-on-surface-variant">--</span>
<div class="w-full max-w-[48px] bg-surface-container-low rounded-t-lg h-full flex flex-col justify-end p-1">
<div class="w-full bg-surface-container-high rounded-t-sm h-[70%]"></div>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Mer 19</span>
</div>
<!-- Jeu -->
<div class="flex-1 flex flex-col items-center gap-2 h-full justify-end opacity-40">
<span class="font-label-sm text-label-sm text-on-surface-variant">--</span>
<div class="w-full max-w-[48px] bg-surface-container-low rounded-t-lg h-full flex flex-col justify-end p-1">
<div class="w-full bg-surface-container-high rounded-t-sm h-[70%]"></div>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Jeu 20</span>
</div>
<!-- Ven -->
<div class="flex-1 flex flex-col items-center gap-2 h-full justify-end opacity-40">
<span class="font-label-sm text-label-sm text-on-surface-variant">--</span>
<div class="w-full max-w-[48px] bg-surface-container-low rounded-t-lg h-full flex flex-col justify-end p-1">
<div class="w-full bg-surface-container-high rounded-t-sm h-[70%]"></div>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Ven 21</span>
</div>
</div>
<div class="mt-4 pt-3 flex items-center justify-between bg-surface-container-low/40 rounded-lg p-2.5">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-body-md">gavel</span>
<span class="font-label-sm text-label-sm text-on-surface font-medium">Règle de présence 48h</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Majoration auto des H.S. au-delà du 48ème volume hebd.</span>
</div>
</div>
<!-- Right Box: Anomalies & Instant Alerts Stream -->
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-3">
<h2 class="font-headline-sm text-headline-sm text-on-surface flex items-center gap-2">
<span>Anomalies de Pointage</span>
<span class="px-2 py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-bold">3</span>
</h2>
<button class="font-label-sm text-label-sm text-primary hover:underline" type="button">Tout traiter</button>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-4">Événements exigeant une régularisation RH rapide</p>
<!-- Anomaly List -->
<div class="space-y-3">
<!-- Item 1 -->
<div class="p-3 bg-surface-container-low rounded-xl flex items-start gap-3">
<div class="w-7 h-7 rounded-full bg-error-container text-error flex items-center justify-center shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[16px]">logout</span>
</div>
<div class="flex flex-col flex-1 min-w-0">
<span class="font-label-md text-label-md text-on-surface font-semibold truncate">Oubli de badge départ (Veille)</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Tarak Mansour • 17 Mars 2025</span>
<div class="flex items-center gap-2 mt-2">
<button class="h-6 px-2 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm" type="button">Régulariser 17:30</button>
<button class="font-label-sm text-label-sm text-on-surface-variant hover:text-on-surface" type="button">Ignorer</button>
</div>
</div>
</div>
<!-- Item 2 -->
<div class="p-3 bg-surface-container-low rounded-xl flex items-start gap-3">
<div class="w-7 h-7 rounded-full bg-secondary-container text-secondary flex items-center justify-center shrink-0 mt-0.5">
<span class="material-symbols-outlined text-[16px]">hourglass_top</span>
</div>
<div class="flex flex-col flex-1 min-w-0">
<span class="font-label-md text-label-md text-on-surface font-semibold truncate">Sortie anticipée sans bon</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Aymen Sellami • 18 Mars (11:45)</span>
<div class="flex items-center gap-2 mt-2">
<button class="h-6 px-2 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm" type="button">Joindre Bon de Sortie</button>
</div>
</div>
</div>
</div>
</div>
<div class="mt-4 pt-3 flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
<span>Synchronisation passerelle : <b class="text-on-surface font-medium">11:02:15</b></span>
<button class="flex items-center gap-1 text-primary hover:text-primary-container" type="button">
<span class="material-symbols-outlined text-[14px]">refresh</span>
          Actualiser
        </button>
</div>
</div>
</div>
<!-- Manual Punch Slide-Over / Modal Overlay (Pure CSS/JS Interactive Layer) -->
<div class="fixed inset-0 z-50 flex items-center justify-center bg-inverse-surface/40 backdrop-blur-[2px] opacity-0 pointer-events-none transition-all duration-200" id="manualPunchModal">
<div class="bg-surface-container-lowest rounded-xl shadow-xl w-full max-w-lg p-6 relative mx-4 transform scale-95 transition-all duration-200" id="modalCard">
<!-- Modal Header -->
<div class="flex items-center justify-between pb-4 border-b border-surface-container">
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Ajouter un Pointage Manuel</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Régularisation exceptionnelle de présence avec visa RH</p>
</div>
<button class="p-1 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" id="closeModalBtn" type="button">
<span class="material-symbols-outlined text-body-lg">close</span>
</button>
</div>
<!-- Modal Body Form -->
<form class="space-y-4 pt-4" onsubmit="event.preventDefault(); document.getElementById('manualPunchModal').classList.add('opacity-0', 'pointer-events-none');">
<div>
<label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Collaborateur concerné</label>
<div class="relative">
<select class="w-full h-10 pl-3 pr-8 rounded-xl bg-surface-container-low font-body-md text-body-md text-on-surface appearance-none focus:outline-none focus:bg-surface-container">
<option value="1">Mohamed Ben Salem (MAT-0419)</option>
<option value="2">Yasmine Trabelsi (MAT-0582)</option>
<option value="3">Sonia Mezghani (MAT-0220)</option>
<option value="4">Mehdi Zghal (MAT-0312)</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none">expand_more</span>
</div>
</div>
<div class="grid grid-cols-2 gap-3">
<div>
<label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Date</label>
<input class="w-full h-10 px-3 rounded-xl bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container" type="date" value="2025-03-18"/>
</div>
<div>
<label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Heure de pointage</label>
<input class="w-full h-10 px-3 rounded-xl bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container" type="time" value="08:30"/>
</div>
</div>
<div class="grid grid-cols-2 gap-3">
<div>
<label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Sens de flux</label>
<select class="w-full h-10 px-3 rounded-xl bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container">
<option value="in">Entrée / Arrivée</option>
<option value="out">Sortie / Départ</option>
<option value="pause_in">Sortie Pause Déjeuner</option>
<option value="pause_out">Retour Pause Déjeuner</option>
</select>
</div>
<div>
<label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Motif de dérogation</label>
<select class="w-full h-10 px-3 rounded-xl bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container">
<option value="forgot">Oubli de badge physique</option>
<option value="failure">Panne terminal biométrique</option>
<option value="mission">Mission externe / Chantier</option>
<option value="other">Autre justification autorisée</option>
</select>
</div>
</div>
<div>
<label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Commentaire de validation</label>
<textarea class="w-full p-2.5 rounded-xl bg-surface-container-low font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant focus:outline-none focus:bg-surface-container" placeholder="Ex: Ordre de mission validé par la Direction Générale..." rows="2"></textarea>
</div>
<div class="p-3 bg-surface-container-low rounded-lg flex items-start gap-2.5">
<span class="material-symbols-outlined text-primary text-body-md mt-0.5">verified</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
            Ce pointage sera tracé au registre d'audit avec la signature électronique de l'utilisateur connecté (Amel Ben Salah).
          </p>
</div>
<!-- Footer Actions -->
<div class="flex items-center justify-end gap-3 pt-3">
<button class="h-9 px-4 rounded-xl bg-surface-container hover:bg-surface-container-high font-label-lg text-label-lg text-on-surface transition-colors" id="cancelModalBtn" type="button">
            Annuler
          </button>
<button class="h-9 px-5 rounded-xl bg-primary-container hover:bg-primary font-label-lg text-label-lg text-on-primary shadow-sm transition-colors" type="submit">
            Enregistrer le pointage
          </button>
</div>
</form>
</div>
</div>
<script>
    // Client-side interactions for Modal and Search Filter
    (function() {
      const modal = document.getElementById('manualPunchModal');
      const modalCard = document.getElementById('modalCard');
      const openBtn = document.getElementById('openModalBtn');
      const closeBtn = document.getElementById('closeModalBtn');
      const cancelBtn = document.getElementById('cancelModalBtn');

      function showModal() {
        if (!modal) return;
        modal.classList.remove('opacity-0', 'pointer-events-none');
        if (modalCard) {
          modalCard.classList.remove('scale-95');
          modalCard.classList.add('scale-100');
        }
      }

      function hideModal() {
        if (!modal) return;
        modal.classList.add('opacity-0', 'pointer-events-none');
        if (modalCard) {
          modalCard.classList.remove('scale-100');
          modalCard.classList.add('scale-95');
        }
      }

      if (openBtn) openBtn.addEventListener('click', showModal);
      if (closeBtn) closeBtn.addEventListener('click', hideModal);
      if (cancelBtn) cancelBtn.addEventListener('click', hideModal);

      // Search Filtering on table rows
      const searchInput = document.getElementById('searchInput');
      const tableRows = document.querySelectorAll('#attendanceTable tbody tr');

      if (searchInput) {
        searchInput.addEventListener('input', function(e) {
          const query = e.target.value.toLowerCase().trim();
          tableRows.forEach(row => {
            const text = row.innerText.toLowerCase();
            row.style.display = text.includes(query) ? '' : 'none';
          });
        });
      }
    })();
  </script>
</div>
</x-admin-shell>
