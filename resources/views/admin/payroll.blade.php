<x-admin-shell active="payroll" title="Gestion de la Paie & Salaires">
<div class="flex flex-col w-full pb-16">
<!-- Breadcrumb & Top Metadata Bar -->
<div class="flex flex-wrap items-center justify-between gap-space-sm pt-space-lg pb-space-md">
<nav aria-label="Fil d'ariane" class="flex items-center gap-space-xs font-label-md text-label-md text-on-surface-variant">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="#">
<span class="material-symbols-outlined text-body-sm">home</span>
<span>Accueil</span>
</a>
<span class="text-outline-variant">/</span>
<span class="text-on-surface font-semibold">Paie &amp; Rémunérations</span>
<span class="text-outline-variant">/</span>
<span class="text-primary font-medium">Mars 2025</span>
</nav>
<div class="flex items-center gap-space-xs font-label-sm text-label-sm text-on-surface-variant bg-surface-container-low px-space-md py-1.5 rounded-full shadow-sm">
<span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
<span>Barème IRPP Révisé 2025 • CNSS T1 2025 Conforme</span>
</div>
</div>
<!-- Main Section Header -->
<div class="flex flex-col xl:flex-row xl:items-end justify-between gap-space-lg pb-space-xl">
<div>
<div class="flex items-center gap-space-sm mb-1">
<span class="font-label-sm text-label-sm tracking-wider uppercase text-primary font-semibold">Gestion Sociale &amp; Fiscale</span>
<span class="text-outline-variant">•</span>
<span class="font-numeric-md text-numeric-md text-on-surface-variant">ID Cycle: TN-PAY-2025-03</span>
</div>
<h1 class="font-display-lg text-display-lg text-on-surface tracking-tight">Gestion de la Paie &amp; Salaires</h1>
<p class="font-body-md text-body-md text-on-surface-variant mt-1 flex items-center gap-space-xs">
<span class="material-symbols-outlined text-body-md text-tertiary">verified</span>
<span>Cycle de Paie : <strong>Mars 2025</strong> • Conforme Code du Travail Tunisien, barème IRPP 2025 &amp; Loi de Finances</span>
</p>
</div>
<!-- Action Group -->
<div class="flex flex-wrap items-center gap-space-sm">
<button class="h-10 px-space-md rounded-xl bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-lg text-label-lg flex items-center gap-space-xs shadow-sm transition-all" type="button">
<span class="material-symbols-outlined text-body-md text-tertiary">table_view</span>
<span>Journal de Paie (Excel)</span>
</button>
<button class="h-10 px-space-md rounded-xl bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-lg text-label-lg flex items-center gap-space-xs shadow-sm transition-all" type="button">
<span class="material-symbols-outlined text-body-md text-primary">cloud_download</span>
<span>Télé-déclaration CNSS (.TXT)</span>
</button>
<button class="h-10 px-space-lg rounded-xl bg-primary-container hover:bg-primary text-on-primary font-label-lg text-label-lg flex items-center gap-space-xs shadow-md transition-all active:scale-95" type="button">
<span class="material-symbols-outlined text-body-md">lock</span>
<span>Clôturer le Mois</span>
</button>
</div>
</div>
<!-- Operational Status Banner -->
<div class="relative overflow-hidden rounded-xl bg-gradient-to-r from-surface-container-low via-surface-container-lowest to-surface-container-low p-space-lg shadow-sm mb-space-xl">
<div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-space-md">
<div class="flex items-start md:items-center gap-space-md">
<div class="w-10 h-10 rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-headline-sm">account_balance</span>
</div>
<div>
<div class="flex items-center gap-space-xs">
<span class="font-headline-sm text-headline-sm text-on-surface">Cycle Mars 2025 : Prêt pour Télétransmission</span>
<span class="px-2 py-0.5 rounded-full text-label-sm font-label-sm bg-tertiary-fixed text-on-tertiary-fixed font-semibold">Validé DAF</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
            Fichiers SEPA / Virement bancaire protocolisés prêts pour <strong>Amen Bank</strong> et <strong>BIAT</strong> (Format TXT télétransmis). Contrôle matricules CNSS : 100% conformes.
          </p>
</div>
</div>
<div class="flex items-center gap-space-sm shrink-0">
<div class="text-right hidden sm:block">
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase">Date d'échéance virement</p>
<p class="font-numeric-md text-numeric-md text-on-surface font-bold">28 Mars 2025</p>
</div>
<button class="px-space-md py-2 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md transition-colors flex items-center gap-1" type="button">
<span class="material-symbols-outlined text-body-sm">send</span>
<span>Transmettre Fichiers Banques</span>
</button>
</div>
</div>
</div>
<!-- High-level Financial Metric Cards (4 Bento KPIs) -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-space-md mb-space-xl">
<!-- KPI 1 -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant mb-space-sm">
<span class="font-label-md text-label-md uppercase tracking-wider">Masse Salariale Nette</span>
<span class="material-symbols-outlined text-body-lg text-primary">payments</span>
</div>
<div class="flex items-baseline gap-space-xs my-space-xs">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">142,850</span>
<span class="font-label-lg text-label-lg text-on-surface-variant font-medium">TND</span>
</div>
<div class="flex items-center justify-between pt-space-xs text-on-surface-variant">
<span class="font-label-sm text-label-sm text-tertiary font-semibold flex items-center gap-0.5">
<span class="material-symbols-outlined text-body-sm">check_circle</span>
          48 virements prêts
        </span>
<span class="font-label-sm text-label-sm">+2.1% vs Fév</span>
</div>
</div>
<!-- KPI 2 -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant mb-space-sm">
<span class="font-label-md text-label-md uppercase tracking-wider">Cotisations CNSS (9.18%)</span>
<span class="material-symbols-outlined text-body-lg text-secondary">badge</span>
</div>
<div class="flex items-baseline gap-space-xs my-space-xs">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">19,420</span>
<span class="font-label-lg text-label-lg text-on-surface-variant font-medium">TND</span>
</div>
<div class="flex items-center justify-between pt-space-xs text-on-surface-variant">
<span class="font-label-sm text-label-sm">Part salariale déduite</span>
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">Régime Général</span>
</div>
</div>
<!-- KPI 3 -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant mb-space-sm">
<span class="font-label-md text-label-md uppercase tracking-wider">Cotisations CNSS Patronales</span>
<span class="material-symbols-outlined text-body-lg text-tertiary">assured_workload</span>
</div>
<div class="flex items-baseline gap-space-xs my-space-xs">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">36,250</span>
<span class="font-label-lg text-label-lg text-on-surface-variant font-medium">TND</span>
</div>
<div class="flex items-center justify-between pt-space-xs text-on-surface-variant">
<span class="font-label-sm text-label-sm">16.57% + Acc. Travail (0.8%)</span>
<span class="font-numeric-md text-numeric-md font-semibold text-tertiary">Déclarable Q1</span>
</div>
</div>
<!-- KPI 4 -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant mb-space-sm">
<span class="font-label-md text-label-md uppercase tracking-wider">Retenue à la Source IRPP</span>
<span class="material-symbols-outlined text-body-lg text-primary-container">receipt_long</span>
</div>
<div class="flex items-baseline gap-space-xs my-space-xs">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">24,800</span>
<span class="font-label-lg text-label-lg text-on-surface-variant font-medium">TND</span>
</div>
<div class="flex items-center justify-between pt-space-xs text-on-surface-variant">
<span class="font-label-sm text-label-sm">Déclaration Mensuelle N°28</span>
<span class="font-numeric-md text-numeric-md font-semibold text-primary">Échéance 28/04</span>
</div>
</div>
</div>
<!-- Interactive Workspace: Table & Interactive Payslip Drawer/Panel -->
<div class="grid grid-cols-1 xl:grid-cols-12 gap-space-lg">
<!-- Left / Center: Table & Filtering (8 cols) -->
<div class="xl:col-span-8 flex flex-col gap-space-md">
<!-- Search & Filters Container -->
<div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-wrap items-center justify-between gap-space-sm">
<div class="flex flex-wrap items-center gap-space-sm flex-1 min-w-[280px]">
<div class="relative flex-1 min-w-[220px]">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-body-md text-on-surface-variant pointer-events-none">search</span>
<input class="w-full h-9 pl-9 pr-3 rounded-lg bg-surface-container-low font-body-sm text-body-sm text-on-surface focus:outline-none focus:bg-surface-container transition-colors" id="searchInput" placeholder="Filtrer collaborateur, CIN, matricule..." type="text"/>
</div>
<!-- Department Selector -->
<select class="h-9 px-space-sm rounded-lg bg-surface-container-low font-body-sm text-body-sm text-on-surface focus:outline-none focus:bg-surface-container">
<option value="">Tous Départements</option>
<option value="Ingénierie">Ingénierie R&amp;D</option>
<option value="Produit">Produit &amp; Design</option>
<option value="Opérations">Opérations &amp; RH</option>
<option value="Finance">Finance &amp; Légal</option>
</select>
<!-- Status Selector -->
<select class="h-9 px-space-sm rounded-lg bg-surface-container-low font-body-sm text-body-sm text-on-surface focus:outline-none focus:bg-surface-container">
<option value="">Tous Statuts</option>
<option value="ready">Virement Prêt (46)</option>
<option value="review">En Révision (2)</option>
<option value="paid">Payé</option>
</select>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm">
<span>48 Collaborateurs Actifs</span>
<span class="w-1.5 h-1.5 rounded-full bg-outline-variant"></span>
<span>100% Déclarés</span>
</div>
</div>
<!-- Main Payroll Register Table -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low h-10 text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">
<th class="py-2.5 px-space-md">Collaborateur</th>
<th class="py-2.5 px-space-sm">Département</th>
<th class="py-2.5 px-space-sm text-right">Brut (TND)</th>
<th class="py-2.5 px-space-sm text-right">Primes</th>
<th class="py-2.5 px-space-sm text-right">CNSS 9.18%</th>
<th class="py-2.5 px-space-sm text-right">IRPP</th>
<th class="py-2.5 px-space-md text-right">Net à Payer</th>
<th class="py-2.5 px-space-sm text-center">Statut</th>
<th class="py-2.5 px-space-sm text-center">Action</th>
</tr>
</thead>
<tbody class="font-body-md text-body-md divide-y divide-surface-container" id="payrollTableBody">
<!-- Row 1: Mohamed Ben Salem (Selected by default) -->
<tr class="hover:bg-surface-container-low transition-colors cursor-pointer bg-primary-container/5" onclick="selectEmployee('mohamed')">
<td class="py-3 px-space-md">
<div class="flex items-center gap-space-sm">
<img class="w-8 h-8 rounded-full object-cover shrink-0" data-alt="Corporate headshot of a 34-year-old North African tech lead man with short hair wearing a navy blue blazer against an architectural studio background with soft lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPho4TrhXfuNDlrzgEjjy1_SZgDiLnMgdmSE87OZkFiY3FE3S6HL79P-GCNJfaF5JkTiRJJVQNpOxLMAw-9VH2Oz1iaJQkhZ6ly0JPMX_YIGFNJM9Mb8JXtJx9CyfxqnHhW9Xe68utOgHCIGFq0rz7lPnvI50kwDnBXH2khOxAS2USbuXcvMwpPSR2tFS15UFqCI4gHy6MvKMJOi1yJnCtWIkI5NY8nkJxomV2D3vicZHue3O7i7yP"/>
<div class="min-w-0">
<p class="font-headline-sm text-headline-sm text-on-surface leading-tight truncate">Mohamed Ben Salem</p>
<p class="font-label-sm text-label-sm text-on-surface-variant font-mono">MAT-0418 • CIN 09482110</p>
</div>
</div>
</td>
<td class="py-3 px-space-sm">
<span class="inline-block px-2 py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-on-surface">Ingénierie</span>
</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface">4,200.000</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface">+350.000</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-error-container text-on-surface">-417.690</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface-variant">-597.310</td>
<td class="py-3 px-space-md text-right font-numeric-md text-numeric-md font-bold text-primary">3,535.000</td>
<td class="py-3 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-label-sm font-label-sm bg-tertiary-fixed text-on-tertiary-fixed font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                    Virement Prêt
                  </span>
</td>
<td class="py-3 px-space-sm text-center">
<button class="p-1 rounded hover:bg-surface-container text-primary transition-colors" title="Aperçu du bulletin" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
</td>
</tr>
<!-- Row 2: Yasmine Trabelsi -->
<tr class="hover:bg-surface-container-low transition-colors cursor-pointer" onclick="selectEmployee('yasmine')">
<td class="py-3 px-space-md">
<div class="flex items-center gap-space-sm">
<img class="w-8 h-8 rounded-full object-cover shrink-0" data-alt="Portrait of an elegant North African female product manager in her early 30s in modern corporate tech apparel in Tunis studio with warm diffused lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKbw9SFvLCzor7FANBgQD2IJwbgp7Hns_3mESBqCn_56WzwhmB6UcIso32q5_fg_6rSOOPtkGAmNZ7mopiypVLyAI5481h5RGy_Q0C1no23dL-H8VgJLeptaCC50KG7bqkP9lCrx3zq4Vk9isrjwWbErXUip1NnLLkzuz99cc_aZ2I9FSRLGl34VHGZ3L2J1YSrXFEoU-Tyd8iI7WCHIyDAvCUfCjiraTFe9A1gLSCcXMg4DfdCqee"/>
<div class="min-w-0">
<p class="font-headline-sm text-headline-sm text-on-surface leading-tight truncate">Yasmine Trabelsi</p>
<p class="font-label-sm text-label-sm text-on-surface-variant font-mono">MAT-0294 • CIN 11029384</p>
</div>
</div>
</td>
<td class="py-3 px-space-sm">
<span class="inline-block px-2 py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-on-surface">Produit</span>
</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface">3,600.000</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface">+180.000</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface-variant">-347.000</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface-variant">-420.000</td>
<td class="py-3 px-space-md text-right font-numeric-md text-numeric-md font-bold text-primary">3,013.000</td>
<td class="py-3 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-label-sm font-label-sm bg-tertiary-fixed text-on-tertiary-fixed font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                    Virement Prêt
                  </span>
</td>
<td class="py-3 px-space-sm text-center">
<button class="p-1 rounded hover:bg-surface-container text-primary transition-colors" title="Aperçu du bulletin" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
</td>
</tr>
<!-- Row 3: Karim Chaabane -->
<tr class="hover:bg-surface-container-low transition-colors cursor-pointer" onclick="selectEmployee('karim')">
<td class="py-3 px-space-md">
<div class="flex items-center gap-space-sm">
<img class="w-8 h-8 rounded-full object-cover shrink-0" data-alt="Professional studio portrait of a 40 year old senior Tunisian DevOps engineer with glasses smiling warmly in smart casual dark sweater" src="https://lh3.googleusercontent.com/aida-public/AB6AXuANszgx3wAnQ6kKbYnk-V4VuH4MrikLAh4hiqC59YEafxj4jzmJs9LM8idw6THb_bXAiMFeoZrLeaXWL90v0UOzuGWsFzbhdA5EQMC5PO0VnamaO7iHdEh42hn8sRkux2HjnIfFj0Ql38rqyBKRpsHeRHJkaH1vnI-wcL22eNwfcY9cOWnPPkPgsQpboYFSHl4yV4eSQjCc5vQAokszJ9uFFKBQemrh_v8wvn7mH_TrGFC1-cUM7SvR"/>
<div class="min-w-0">
<p class="font-headline-sm text-headline-sm text-on-surface leading-tight truncate">Karim Chaabane</p>
<p class="font-label-sm text-label-sm text-on-surface-variant font-mono">MAT-0105 • CIN 07839201</p>
</div>
</div>
</td>
<td class="py-3 px-space-sm">
<span class="inline-block px-2 py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-on-surface">Opérations</span>
</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface">3,100.000</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface">+600.000</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface-variant">-339.660</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface-variant">-385.340</td>
<td class="py-3 px-space-md text-right font-numeric-md text-numeric-md font-bold text-primary">2,975.000</td>
<td class="py-3 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-label-sm font-label-sm bg-tertiary-fixed text-on-tertiary-fixed font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                    Virement Prêt
                  </span>
</td>
<td class="py-3 px-space-sm text-center">
<button class="p-1 rounded hover:bg-surface-container text-primary transition-colors" title="Aperçu du bulletin" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
</td>
</tr>
<!-- Row 4: Sarra Jemli -->
<tr class="hover:bg-surface-container-low transition-colors cursor-pointer" onclick="selectEmployee('sarra')">
<td class="py-3 px-space-md">
<div class="flex items-center gap-space-sm">
<div class="w-8 h-8 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-bold text-label-sm shrink-0">
                      SJ
                    </div>
<div class="min-w-0">
<p class="font-headline-sm text-headline-sm text-on-surface leading-tight truncate">Sarra Jemli</p>
<p class="font-label-sm text-label-sm text-on-surface-variant font-mono">MAT-0522 • CIN 14209551</p>
</div>
</div>
</td>
<td class="py-3 px-space-sm">
<span class="inline-block px-2 py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-on-surface">Design &amp; UI</span>
</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface">2,850.000</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface">+120.000</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface-variant">-272.640</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface-variant">-297.360</td>
<td class="py-3 px-space-md text-right font-numeric-md text-numeric-md font-bold text-primary">2,400.000</td>
<td class="py-3 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-label-sm font-label-sm bg-tertiary-fixed text-on-tertiary-fixed font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                    Virement Prêt
                  </span>
</td>
<td class="py-3 px-space-sm text-center">
<button class="p-1 rounded hover:bg-surface-container text-primary transition-colors" title="Aperçu du bulletin" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
</td>
</tr>
<!-- Row 5: Anis Louati (En révision) -->
<tr class="hover:bg-surface-container-low transition-colors cursor-pointer" onclick="selectEmployee('anis')">
<td class="py-3 px-space-md">
<div class="flex items-center gap-space-sm">
<div class="w-8 h-8 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center font-bold text-label-sm shrink-0">
                      AL
                    </div>
<div class="min-w-0">
<p class="font-headline-sm text-headline-sm text-on-surface leading-tight truncate">Anis Louati</p>
<p class="font-label-sm text-label-sm text-on-surface-variant font-mono">MAT-0610 • CIN 08761234</p>
</div>
</div>
</td>
<td class="py-3 px-space-sm">
<span class="inline-block px-2 py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-on-surface">Finance</span>
</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface">3,400.000</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface">+250.000</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface-variant">-335.070</td>
<td class="py-3 px-space-sm text-right font-numeric-md text-numeric-md text-on-surface-variant">-384.930</td>
<td class="py-3 px-space-md text-right font-numeric-md text-numeric-md font-bold text-on-surface">2,930.000</td>
<td class="py-3 px-space-sm text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-label-sm font-label-sm bg-surface-container text-on-surface-variant font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                    En Révision
                  </span>
</td>
<td class="py-3 px-space-sm text-center">
<button class="p-1 rounded hover:bg-surface-container text-primary transition-colors" title="Aperçu du bulletin" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Table Pagination & Footer Summary -->
<div class="p-space-md bg-surface-container-low flex flex-wrap items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm font-body-sm text-body-sm text-on-surface-variant">
<span>Affichage de 1 à 5 sur 48 collaborateurs</span>
<span class="text-outline-variant">•</span>
<span>Total Net Émis : <strong class="text-on-surface font-semibold">15,853.000 TND</strong></span>
</div>
<div class="flex items-center gap-space-xs">
<button class="h-8 px-3 rounded-lg bg-surface-container-lowest text-on-surface font-label-md text-label-md disabled:opacity-50 shadow-sm" disabled="">Précédent</button>
<button class="h-8 w-8 rounded-lg bg-primary-container text-on-primary font-label-md text-label-md shadow-sm">1</button>
<button class="h-8 w-8 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-md text-label-md shadow-sm">2</button>
<button class="h-8 w-8 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-md text-label-md shadow-sm">3</button>
<button class="h-8 px-3 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-md text-label-md shadow-sm">Suivant</button>
</div>
</div>
</div>
<!-- Quick Regulatory Note Banner -->
<div class="bg-surface-container-low rounded-xl p-space-md flex items-center justify-between gap-space-md">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-tertiary text-headline-sm">info</span>
<p class="font-body-sm text-body-sm text-on-surface">
<strong>Rappel Loi de Finances :</strong> La Contribution Sociale de Solidarité (CSS 1%) et le nouveau barème d'abattement pour charges familiales (300 TND conjoint, 100 TND/enfant) sont appliqués automatiquement sur ce cycle.
          </p>
</div>
<button class="whitespace-nowrap font-label-md text-label-md text-primary font-semibold hover:underline" type="button">
          Consulter Barème 2025
        </button>
</div>
</div>
<!-- Right: High Precision Payslip Slide-out / Focus View (4 cols) -->
<div class="xl:col-span-4">
<div class="bg-surface-container-lowest rounded-xl shadow-lg p-space-lg sticky top-20 flex flex-col justify-between">
<div>
<!-- Header Bulletin -->
<div class="flex items-start justify-between pb-space-md">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold">Aperçu Officiel</span>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight mt-0.5">Bulletin de Paie</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Période : 01/03/2025 au 31/03/2025</p>
</div>
<div class="h-9 px-2.5 rounded-lg bg-tertiary-fixed flex items-center gap-1 text-on-tertiary-fixed font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-body-sm">verified_user</span>
<span>Certifié Conforme</span>
</div>
</div>
<!-- Employer & Employee Administrative Metadata -->
<div class="bg-surface-container-low rounded-xl p-space-md space-y-space-xs mb-space-md font-body-sm text-body-sm">
<div class="flex justify-between items-center text-on-surface-variant">
<span>Société :</span>
<strong class="text-on-surface">Carthage Tech Solutions SARL</strong>
</div>
<div class="flex justify-between items-center text-on-surface-variant">
<span>Affiliation CNSS Employeur :</span>
<span class="font-mono text-on-surface">29481900-12</span>
</div>
<div class="h-px bg-surface-container my-1"></div>
<div class="flex justify-between items-center text-on-surface">
<span class="font-medium">Salarié :</span>
<strong class="text-primary font-semibold" id="slipName">Mohamed Ben Salem</strong>
</div>
<div class="flex justify-between items-center text-on-surface-variant">
<span>CIN &amp; Matricule :</span>
<span class="font-mono text-on-surface" id="slipCin">09482110 • MAT-0418</span>
</div>
<div class="flex justify-between items-center text-on-surface-variant">
<span>Emploi &amp; Échelon :</span>
<span class="text-on-surface font-medium" id="slipRole">Lead Architect • Cat. 7</span>
</div>
<div class="flex justify-between items-center text-on-surface-variant">
<span>Régime de Travail :</span>
<span class="text-on-surface">40h / Semaine • Tunis</span>
</div>
</div>
<!-- Salary Deconstruction Line Items -->
<div class="space-y-space-xs mb-space-md">
<div class="flex justify-between items-center py-1 font-body-sm text-body-sm">
<span class="text-on-surface">Salaire de Base Brut</span>
<span class="font-numeric-md text-numeric-md font-medium text-on-surface" id="slipBase">4,200.000 TND</span>
</div>
<div class="flex justify-between items-center py-1 font-body-sm text-body-sm text-on-surface-variant">
<span>Prime de Rendement &amp; Technicité</span>
<span class="font-numeric-md text-numeric-md text-on-surface" id="slipPrime">+250.000 TND</span>
</div>
<div class="flex justify-between items-center py-1 font-body-sm text-body-sm text-on-surface-variant">
<span>Indemnité de Transport Légale</span>
<span class="font-numeric-md text-numeric-md text-on-surface">+100.000 TND</span>
</div>
<!-- Deductions Partition -->
<div class="bg-surface-container/60 rounded-lg p-2.5 space-y-1.5 my-2">
<div class="flex justify-between items-center font-body-sm text-body-sm">
<span class="text-error font-medium">Cotisation CNSS (9.18%)</span>
<span class="font-numeric-md text-numeric-md text-error" id="slipCnss">-417.690 TND</span>
</div>
<div class="flex justify-between items-center font-body-sm text-body-sm">
<span class="text-on-surface-variant">Base Imposable Soumise à l'IRPP</span>
<span class="font-numeric-md text-numeric-md text-on-surface font-mono" id="slipTaxBase">4,132.310 TND</span>
</div>
<div class="flex justify-between items-center font-body-sm text-body-sm">
<span class="text-error font-medium">Retenue IRPP (Tranches 2025)</span>
<span class="font-numeric-md text-numeric-md text-error" id="slipIrpp">-555.990 TND</span>
</div>
<div class="flex justify-between items-center font-body-sm text-body-sm">
<span class="text-error font-medium">Contrib. Solidarité Sociale (CSS 1%)</span>
<span class="font-numeric-md text-numeric-md text-error" id="slipCss">-41.320 TND</span>
</div>
</div>
</div>
<!-- Net to Pay Grand Banner -->
<div class="bg-primary-container text-on-primary rounded-xl p-space-md mb-space-sm shadow-md">
<span class="font-label-sm text-label-sm tracking-wider uppercase opacity-90">Net à Payer (Virement Bancaire)</span>
<div class="flex items-baseline justify-between mt-1">
<span class="font-display-lg text-display-lg font-bold tracking-tight" id="slipNet">3,535.000</span>
<span class="font-headline-sm text-headline-sm font-semibold opacity-95">TND</span>
</div>
<p class="font-body-sm text-body-sm opacity-90 italic mt-1" id="slipInWords">
              "Trois mille cinq cent trente-cinq dinars tunisiens"
            </p>
</div>
<div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm px-1 mb-space-md">
<span>Banque : Amen Bank (Agence Lac 2)</span>
<span class="font-mono">RIB: 08 ... 4910</span>
</div>
</div>
<!-- Action Buttons -->
<div class="flex flex-col gap-space-xs pt-space-xs">
<button class="w-full h-10 rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg flex items-center justify-center gap-space-xs transition-colors" type="button">
<span class="material-symbols-outlined text-body-md text-primary">print</span>
<span>Imprimer Bulletin</span>
</button>
<button class="w-full h-10 rounded-xl bg-primary-container hover:bg-primary text-on-primary font-label-lg text-label-lg flex items-center justify-center gap-space-xs transition-all shadow-sm" type="button">
<span class="material-symbols-outlined text-body-md">download_done</span>
<span>Télécharger PDF Signé Électroniquement</span>
</button>
</div>
</div>
</div>
</div>
</div>
<script>
  // Dynamic payslip updater
  const employeesData = {
    mohamed: {
      name: "Mohamed Ben Salem",
      cin: "09482110 • MAT-0418",
      role: "Lead Architect • Cat. 7",
      base: "4,200.000 TND",
      prime: "+250.000 TND",
      cnss: "-417.690 TND",
      taxBase: "4,132.310 TND",
      irpp: "-555.990 TND",
      css: "-41.320 TND",
      net: "3,535.000",
      words: "Trois mille cinq cent trente-cinq dinars tunisiens"
    },
    yasmine: {
      name: "Yasmine Trabelsi",
      cin: "11029384 • MAT-0294",
      role: "Senior Product Manager • Cat. 6",
      base: "3,600.000 TND",
      prime: "+180.000 TND",
      cnss: "-347.000 TND",
      taxBase: "3,433.000 TND",
      irpp: "-385.670 TND",
      css: "-34.330 TND",
      net: "3,013.000",
      words: "Trois mille treize dinars tunisiens"
    },
    karim: {
      name: "Karim Chaabane",
      cin: "07839201 • MAT-0105",
      role: "Lead DevOps Specialist • Cat. 7",
      base: "3,100.000 TND",
      prime: "+600.000 TND",
      cnss: "-339.660 TND",
      taxBase: "3,360.340 TND",
      irpp: "-351.740 TND",
      css: "-33.600 TND",
      net: "2,975.000",
      words: "Deux mille neuf cent soixante-quinze dinars tunisiens"
    },
    sarra: {
      name: "Sarra Jemli",
      cin: "14209551 • MAT-0522",
      role: "Lead UI/UX Designer • Cat. 5",
      base: "2,850.000 TND",
      prime: "+120.000 TND",
      cnss: "-272.640 TND",
      taxBase: "2,697.360 TND",
      irpp: "-270.390 TND",
      css: "-26.970 TND",
      net: "2,400.000",
      words: "Deux mille quatre cents dinars tunisiens"
    },
    anis: {
      name: "Anis Louati",
      cin: "08761234 • MAT-0610",
      role: "Contrôleur de Gestion • Cat. 6",
      base: "3,400.000 TND",
      prime: "+250.000 TND",
      cnss: "-335.070 TND",
      taxBase: "3,314.930 TND",
      irpp: "-351.780 TND",
      css: "-33.150 TND",
      net: "2,930.000",
      words: "Deux mille neuf cent trente dinars tunisiens"
    }
  };

  function selectEmployee(key) {
    const data = employeesData[key];
    if (!data) return;

    document.getElementById("slipName").innerText = data.name;
    document.getElementById("slipCin").innerText = data.cin;
    document.getElementById("slipRole").innerText = data.role;
    document.getElementById("slipBase").innerText = data.base;
    document.getElementById("slipPrime").innerText = data.prime;
    document.getElementById("slipCnss").innerText = data.cnss;
    document.getElementById("slipTaxBase").innerText = data.taxBase;
    document.getElementById("slipIrpp").innerText = data.irpp;
    document.getElementById("slipCss").innerText = data.css;
    document.getElementById("slipNet").innerText = data.net;
    document.getElementById("slipInWords").innerText = `"${data.words}"`;

    // Row selection visual highlight
    const rows = document.querySelectorAll("#payrollTableBody tr");
    rows.forEach(r => r.classList.remove("bg-primary-container/5"));
    event.currentTarget.classList.add("bg-primary-container/5");
  }

  // Quick Client Search Filter
  document.getElementById("searchInput")?.addEventListener("input", function(e) {
    const term = e.target.value.toLowerCase();
    const rows = document.querySelectorAll("#payrollTableBody tr");
    rows.forEach(row => {
      const text = row.innerText.toLowerCase();
      row.style.display = text.includes(term) ? "" : "none";
    });
  });
</script>
</x-admin-shell>
