<x-admin-shell active="leaves" title="Gestion des Congés & Absences">
<div class="flex flex-col w-full pb-margin">
<!-- Dynamic Atmospheric Glow -->
<div class="relative w-full overflow-hidden">
<div class="absolute -top-10 left-1/4 w-96 h-48 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
<div class="absolute top-12 right-12 w-80 h-36 bg-tertiary/5 rounded-full blur-2xl pointer-events-none"></div>
<!-- Page Header & Action Bar -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md pt-space-lg mb-space-xl">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs font-label-sm text-label-sm text-on-surface-variant">
<span>Accueil</span>
<span class="material-symbols-outlined text-body-sm">chevron_right</span>
<span class="text-primary font-semibold">Congés</span>
</div>
<div class="flex items-baseline gap-space-md">
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Gestion des Congés &amp; Absences</h1>
<span class="font-label-sm text-label-sm px-2.5 py-0.5 rounded-full bg-surface-container-high text-primary font-semibold uppercase tracking-wider">Loi TN N° 66-27</span>
</div>
</div>
<div class="flex items-center gap-space-md">
<!-- View Switcher -->
<div class="bg-surface-container-low p-1 rounded-xl flex items-center shadow-sm">
<button class="flex items-center gap-space-xs px-space-md py-1.5 rounded-lg bg-surface-container-lowest text-primary shadow-sm font-label-md text-label-md font-semibold transition-all" type="button">
<span class="material-symbols-outlined text-body-md" style="font-variation-settings: 'FILL' 1;">table_chart</span>
<span>Vue Tableau</span>
</button>
<button class="flex items-center gap-space-xs px-space-md py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">calendar_month</span>
<span>Vue Calendrier d'Équipe</span>
</button>
</div>
<!-- Primary CTA Trigger Modal -->
<button class="h-10 px-space-lg rounded-xl bg-primary-container hover:bg-primary text-on-primary font-label-lg text-label-lg flex items-center gap-space-xs shadow-md transition-all active:scale-95" id="openModalBtn" type="button">
<span class="material-symbols-outlined text-body-md">add_circle</span>
<span>Nouvelle Demande de Congé</span>
</button>
</div>
</div>
<!-- Top KPI Balance & Summary Cards (Bento Metric Layout) -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-space-xl">
<!-- Card 1: Action Required -->
<div class="relative overflow-hidden bg-surface-container-lowest rounded-xl p-space-xl shadow-sm flex flex-col justify-between group hover:shadow-md transition-shadow">
<div class="absolute right-0 top-0 w-24 h-24 bg-gradient-to-bl from-error-container/30 to-transparent rounded-bl-full pointer-events-none"></div>
<div class="flex items-center justify-between mb-space-sm">
<div class="flex items-center gap-space-xs">
<span class="w-2.5 h-2.5 rounded-full bg-error animate-ping"></span>
<span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant font-semibold">Action Requise</span>
</div>
<span class="material-symbols-outlined text-error bg-error-container/50 p-2 rounded-xl text-headline-sm">pending_actions</span>
</div>
<div class="my-space-xs">
<div class="flex items-baseline gap-space-xs">
<span class="font-display-lg text-display-lg text-on-surface font-bold">7</span>
<span class="font-headline-sm text-headline-sm text-on-surface-variant font-medium">demandes</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Congés en attente de validation RH</p>
</div>
<div class="mt-space-md pt-space-xs flex items-center justify-between">
<div class="flex -space-x-2">
<img alt="User 1" class="w-6 h-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Close up corporate portrait photo of Tunisian male software engineer smiling in office background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBb288NCtpz4qnwJxcGE1tMN8H1bJMHu7OSoHNYof_FSfBhrPakVIp91pdmQJlCFYwSCqv1388t7kWrdCsrs8hJUkz6KveuOvhitBjUWQT3aq179E1tjfq-shZ_m1u3p_ssVT5U-fZrQbFBmhZ_WCXuGNmFpXmHqGMjGXYLFPOtnGPz4aYsEDHlVhPjUTzYnrETtKZcRBSjPax0RgKPfCWrskNyBt8PqvmvRDoF0OkrcILsDDAct9km"/>
<img alt="User 2" class="w-6 h-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Close up corporate portrait of female data analyst with glasses in bright modern workspace" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqe6zwYI_59l7_2Vv3H0cjRGJ_QsgdE3FEI2_rL4NHaXtvUyGqcjG97Z5Bffbw8TDpsKOt4hvtMiSITI1Gyvesr2fjjLHjr5VUqWrdYudszSJ4KtbNJwYBmmBgTd_m07c72jzXOdfl4IsPxfmSq9sEp4RT2KVHelOr1mHFlal9HNfrzRY1XmU8JcEFWoMA4sUTM-YtC6rnuJC10C98IB3GprrcLTPvG3PRCLI3OOl5I0dOdAT8syZ0"/>
<img alt="User 3" class="w-6 h-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Tunisian business professional male in smart attire smiling in boardroom ambient light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKlEDMKYu9O8eNdgwSgPKrtDhIb9xj5i8iNLYkdBZT7-sousUIJdCwVtnsz7Z-dh3iLofjUUDU9O6_8EFpkgNdV1DgJp-rmQ5BEMO9x5pKMMmmqemHA_n4IivWwGCcWXcGezUOA9QDU9gbf3gFeWSBndUcWAPGM1FFV_rS32vN81wQULkGA6p4DAevZ6-AP0sPOjl2ocZU5Qwvn4NB-0d3k0Hg4fV4nu0t70QmJNAkjI6G6FCoFrjJ"/>
</div>
<span class="font-label-sm text-label-sm text-error font-semibold flex items-center gap-1">
            À traiter avant 18:00
            <span class="material-symbols-outlined text-body-sm">arrow_forward</span>
</span>
</div>
</div>
<!-- Card 2: Collaborateurs en congé -->
<div class="relative overflow-hidden bg-surface-container-lowest rounded-xl p-space-xl shadow-sm flex flex-col justify-between group hover:shadow-md transition-shadow">
<div class="absolute right-0 top-0 w-24 h-24 bg-gradient-to-bl from-secondary-container/40 to-transparent rounded-bl-full pointer-events-none"></div>
<div class="flex items-center justify-between mb-space-sm">
<span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant font-semibold">Effectif Absent</span>
<span class="material-symbols-outlined text-secondary bg-surface-container p-2 rounded-xl text-headline-sm">badge</span>
</div>
<div class="my-space-xs">
<div class="flex items-baseline gap-space-xs">
<span class="font-display-lg text-display-lg text-on-surface font-bold">5</span>
<span class="font-headline-sm text-headline-sm text-on-surface-variant font-medium">collaborateurs</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">En congé régulier ce jour (18 Mars)</p>
</div>
<div class="mt-space-md pt-space-xs flex items-center justify-between">
<div class="flex items-center gap-1.5">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Taux de présence: <strong class="text-on-surface font-semibold">94.2%</strong></span>
</div>
<span class="font-label-sm text-label-sm text-primary font-medium hover:underline cursor-pointer">Voir planning</span>
</div>
</div>
<!-- Card 3: Solde Moyen -->
<div class="relative overflow-hidden bg-surface-container-lowest rounded-xl p-space-xl shadow-sm flex flex-col justify-between group hover:shadow-md transition-shadow">
<div class="absolute right-0 top-0 w-24 h-24 bg-gradient-to-bl from-tertiary-fixed/30 to-transparent rounded-bl-full pointer-events-none"></div>
<div class="flex items-center justify-between mb-space-sm">
<span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant font-semibold">Réserve Globale</span>
<span class="material-symbols-outlined text-tertiary bg-surface-container-low p-2 rounded-xl text-headline-sm">account_balance_wallet</span>
</div>
<div class="my-space-xs">
<div class="flex items-baseline gap-space-xs">
<span class="font-display-lg text-display-lg text-on-surface font-bold">18.5</span>
<span class="font-headline-sm text-headline-sm text-tertiary font-medium">jours / sal.</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Solde moyen disponible par collaborateur</p>
</div>
<div class="mt-space-md pt-space-xs flex items-center justify-between">
<div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden mr-space-md">
<div class="bg-tertiary h-full rounded-full" style="width: 68%;"></div>
</div>
<span class="font-label-sm text-label-sm text-on-surface font-semibold whitespace-nowrap">68% acquis</span>
</div>
</div>
</div>
<!-- Filter & Search Toolbar Strip -->
<div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm mb-space-lg flex flex-col lg:flex-row items-center justify-between gap-space-md">
<!-- Search Input -->
<div class="relative w-full lg:w-72">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-md pointer-events-none">search</span>
<input class="w-full h-9 pl-9 pr-3 rounded-lg bg-surface-container-low font-body-sm text-body-sm text-on-surface placeholder:text-on-surface-variant focus:outline-none focus:bg-surface-container" placeholder="Filtrer collaborateur, CIN..." type="text"/>
</div>
<!-- Select Groups -->
<div class="flex flex-wrap items-center gap-space-sm w-full lg:w-auto">
<!-- Type Filter -->
<div class="flex items-center bg-surface-container-low rounded-lg px-2 h-9">
<span class="material-symbols-outlined text-on-surface-variant text-body-md mr-1.5">category</span>
<select class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer pr-2">
<option value="">Tous les Types</option>
<option value="annuel">Annuel Payé (Code N° 66)</option>
<option value="maladie">Congé Maladie</option>
<option value="famille">Maternité / Paternité</option>
<option value="sans-solde">Sans Solde</option>
<option value="recup">Récupération</option>
</select>
</div>
<!-- Status Filter -->
<div class="flex items-center bg-surface-container-low rounded-lg px-2 h-9">
<span class="material-symbols-outlined text-on-surface-variant text-body-md mr-1.5">filter_list</span>
<select class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer pr-2">
<option value="">Tous les Statuts</option>
<option value="pending">En attente (7)</option>
<option value="approved">Approuvé</option>
<option value="rejected">Rejeté</option>
</select>
</div>
<!-- Department Filter -->
<div class="flex items-center bg-surface-container-low rounded-lg px-2 h-9">
<span class="material-symbols-outlined text-on-surface-variant text-body-md mr-1.5">domain</span>
<select class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer pr-2">
<option value="">Tous les Départements</option>
<option value="tech">Ingénierie &amp; Tech</option>
<option value="ops">Opérations &amp; Logistique</option>
<option value="fin">Finance &amp; Juridique</option>
<option value="hr">Ressources Humaines</option>
</select>
</div>
<!-- Month Picker Widget -->
<div class="flex items-center gap-space-xs bg-surface-container-high px-space-md h-9 rounded-lg text-primary">
<button class="hover:text-primary-container p-0.5" type="button"><span class="material-symbols-outlined text-body-md">chevron_left</span></button>
<span class="font-label-md text-label-md font-semibold px-1 whitespace-nowrap">Mars 2025</span>
<button class="hover:text-primary-container p-0.5" type="button"><span class="material-symbols-outlined text-body-md">chevron_right</span></button>
</div>
<!-- Export CSV Button -->
<button class="h-9 px-space-md rounded-lg bg-surface-container-low hover:bg-surface-container font-label-md text-label-md text-on-surface flex items-center gap-1 transition-colors" title="Exporter rapport de congés" type="button">
<span class="material-symbols-outlined text-body-md">download</span>
<span class="hidden sm:inline">Export</span>
</button>
</div>
</div>
<!-- Data Table Container -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low h-10 text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">
<th class="py-2.5 px-space-lg font-semibold">Collaborateur</th>
<th class="py-2.5 px-space-md font-semibold">Type de Congé</th>
<th class="py-2.5 px-space-md font-semibold">Période (Début - Fin)</th>
<th class="py-2.5 px-space-md font-semibold text-center">Durée</th>
<th class="py-2.5 px-space-md font-semibold">Motif / Justificatif</th>
<th class="py-2.5 px-space-md font-semibold text-right">Solde Restant</th>
<th class="py-2.5 px-space-md font-semibold text-center">Statut</th>
<th class="py-2.5 px-space-lg font-semibold text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y-0">
<!-- Row 1: Mohamed Ben Salem -->
<tr class="h-16 hover:bg-surface-container-low transition-colors bg-surface-container-lowest">
<td class="py-3 px-space-lg">
<div class="flex items-center gap-space-md">
<div class="relative">
<img alt="Mohamed Ben Salem" class="w-9 h-9 rounded-full object-cover" data-alt="Portrait photography of Mohamed Tunisian male developer wearing navy sweater in modern tech office" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCu8eEhEiROzdpXtOzEtGaysTCfptLKi8J_IX2-iY8HUq4jH76NOQk2pO9AvPl3RmRfJ3BGYQ2l4usax_4B7cxiU3I0MMAe0YVxiAPN9cg4OK2BSn_YzdMaFxHjoWIe1rcqyv6K8XrzDQKi1U7VUBmDzVmhTj3Ms85b5sIwq2flaPq1wwpKuRmIRfFXdQjMGbL-elLh4aJ3XIS9RMhBfQyJ_DLXtsY3-CgpcF42k60JmP_Qk0DeyT-O"/>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-tertiary ring-2 ring-surface-container-lowest"></span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Mohamed Ben Salem</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Ingénierie Logicielle • Tech</span>
</div>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-primary text-body-md">beach_access</span>
<span class="font-body-md text-body-md text-on-surface font-medium">Congé Annuel Payé</span>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex flex-col font-numeric-md text-numeric-md text-on-surface">
<span class="font-semibold">18/03/2025 <span class="text-on-surface-variant font-normal font-body-sm">au</span> 22/03/2025</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Départ Mardi matin</span>
</div>
</td>
<td class="py-3 px-space-md text-center">
<span class="inline-flex items-center justify-center px-2 py-0.5 rounded-md bg-surface-container-high font-numeric-md text-numeric-md font-bold text-primary">
                  5 jours
                </span>
</td>
<td class="py-3 px-space-md max-w-xs">
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-body-sm">chat_bubble_outline</span>
<span class="font-body-sm text-body-sm text-on-surface truncate">Vacances familiales annuelles</span>
</div>
</td>
<td class="py-3 px-space-md text-right">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">16 jours</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">après décompte</span>
</td>
<td class="py-3 px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container/50 text-on-secondary-fixed-variant font-label-sm text-label-sm font-semibold">
<span class="w-2 h-2 rounded-full bg-secondary"></span>
                  En Attente
                </span>
</td>
<td class="py-3 px-space-lg text-right">
<div class="flex items-center justify-end gap-1.5">
<button class="h-8 px-2.5 rounded-lg bg-tertiary-container hover:bg-tertiary text-on-tertiary font-label-sm text-label-sm font-semibold flex items-center gap-1 transition-colors shadow-sm" type="button">
<span class="material-symbols-outlined text-body-sm">check</span>
<span>Approuver</span>
</button>
<button class="h-8 px-2.5 rounded-lg bg-error-container hover:bg-error hover:text-on-error text-error font-label-sm text-label-sm font-semibold flex items-center gap-1 transition-colors" type="button">
<span class="material-symbols-outlined text-body-sm">close</span>
<span>Refuser</span>
</button>
</div>
</td>
</tr>
<!-- Row 2: Yasmine Trabelsi -->
<tr class="h-16 hover:bg-surface-container-low transition-colors bg-surface-container-lowest">
<td class="py-3 px-space-lg">
<div class="flex items-center gap-space-md">
<div class="relative">
<img alt="Yasmine Trabelsi" class="w-9 h-9 rounded-full object-cover" data-alt="Portrait photography of young Tunisian business woman Yasmine Trabelsi with hair tied back in bright sunny office" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPdGMh-6wotc2Pqnh8ZtjT4mhuxzN8lEwZ9Uz59tGrgbrzttU1xVE1mM996txXY5JMVlbIws5W3Scl6j1aJq4FFo8WiJg2JpayaRFTtXZaL-7D8qNsn0hQI7AyqkYnq2HDPRuEabzoqscjm_sACRDPB7VmRHIZ1WeQy8r4gfhyxa4_SaXk4TQoPQbGGD8iIUXhgZNiOKWP5kS8kxmOU3suM-1qaOzSlqSZMFxavUFEr8bBiMzCMiKK"/>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-secondary ring-2 ring-surface-container-lowest"></span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Yasmine Trabelsi</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Marketing Lead • Communication</span>
</div>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-error text-body-md">medical_services</span>
<span class="font-body-md text-body-md text-on-surface font-medium">Congé Maladie</span>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex flex-col font-numeric-md text-numeric-md text-on-surface">
<span class="font-semibold">10/03/2025 <span class="text-on-surface-variant font-normal font-body-sm">au</span> 12/03/2025</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">3 jours ouvrés</span>
</div>
</td>
<td class="py-3 px-space-md text-center">
<span class="inline-flex items-center justify-center px-2 py-0.5 rounded-md bg-surface-container font-numeric-md text-numeric-md font-bold text-on-surface">
                  3 jours
                </span>
</td>
<td class="py-3 px-space-md max-w-xs">
<div class="flex items-center gap-1.5 px-2 py-1 rounded bg-surface-container-low w-fit hover:bg-surface-container cursor-pointer">
<span class="material-symbols-outlined text-error text-body-sm">picture_as_pdf</span>
<span class="font-label-sm text-label-sm text-on-surface font-medium underline">Certificat_Dr_Ayadi.pdf</span>
</div>
</td>
<td class="py-3 px-space-md text-right">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">21 jours</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Congé CNSS</span>
</td>
<td class="py-3 px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
                  Approuvé
                </span>
</td>
<td class="py-3 px-space-lg text-right">
<button class="h-8 px-3 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface font-label-sm text-label-sm font-medium transition-colors" type="button">
                  Détails
                </button>
</td>
</tr>
<!-- Row 3: Karim Chaabane -->
<tr class="h-16 hover:bg-surface-container-low transition-colors bg-surface-container-lowest">
<td class="py-3 px-space-lg">
<div class="flex items-center gap-space-md">
<div class="relative">
<img alt="Karim Chaabane" class="w-9 h-9 rounded-full object-cover" data-alt="Portrait photography of Karim Tunisian operations manager in white collared shirt in executive building" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcpmy3t7sDQ4FIuzkGvX8WisINDPxfuh4j1bubzI1Q3QEuiTyXENFnZkarzbcBsuQTOQRbz10yk5TGFwZJhnkwYMTHm5PErev1KcsFHDIeC07cfS1DoPD_ZN1fEm__xnWHEfFiIoLNf5DJnJCTRwga-NhE-wWwj6-o3GCEVJRAi8SgYcBlkdkcXEArEzqSYCDadGySnj6m72YBjvx_7pIsm09XKfz0PT2ERc2ewHJ2g8SXmdAZY9uc"/>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-tertiary ring-2 ring-surface-container-lowest"></span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Karim Chaabane</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Supply Chain Lead • Opérations</span>
</div>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-on-surface-variant text-body-md">money_off</span>
<span class="font-body-md text-body-md text-on-surface font-medium">Sans Solde</span>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex flex-col font-numeric-md text-numeric-md text-on-surface">
<span class="font-semibold">25/03/2025</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Journée complète</span>
</div>
</td>
<td class="py-3 px-space-md text-center">
<span class="inline-flex items-center justify-center px-2 py-0.5 rounded-md bg-surface-container font-numeric-md text-numeric-md font-bold text-on-surface">
                  1 jour
                </span>
</td>
<td class="py-3 px-space-md max-w-xs">
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-body-sm">assignment</span>
<span class="font-body-sm text-body-sm text-on-surface truncate">Démarche administrative (Permis)</span>
</div>
</td>
<td class="py-3 px-space-md text-right">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">12 jours</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Sans impact</span>
</td>
<td class="py-3 px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container/50 text-on-secondary-fixed-variant font-label-sm text-label-sm font-semibold">
<span class="w-2 h-2 rounded-full bg-secondary"></span>
                  En Attente
                </span>
</td>
<td class="py-3 px-space-lg text-right">
<div class="flex items-center justify-end gap-1.5">
<button class="h-8 px-2.5 rounded-lg bg-tertiary-container hover:bg-tertiary text-on-tertiary font-label-sm text-label-sm font-semibold flex items-center gap-1 transition-colors shadow-sm" type="button">
<span class="material-symbols-outlined text-body-sm">check</span>
<span>Approuver</span>
</button>
<button class="h-8 px-2.5 rounded-lg bg-error-container hover:bg-error hover:text-on-error text-error font-label-sm text-label-sm font-semibold flex items-center gap-1 transition-colors" type="button">
<span class="material-symbols-outlined text-body-sm">close</span>
<span>Refuser</span>
</button>
</div>
</td>
</tr>
<!-- Row 4: Amine Dridi -->
<tr class="h-16 hover:bg-surface-container-low transition-colors bg-surface-container-lowest">
<td class="py-3 px-space-lg">
<div class="flex items-center gap-space-md">
<div class="relative">
<img alt="Amine Dridi" class="w-9 h-9 rounded-full object-cover" data-alt="Portrait photography of Amine Dridi Senior DevOps engineer smiling in server room hallway" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDl2v2_hXlhl5UdSZ8muXXsY23u_3Z0Km9c5A-SrN7VXC2B0dhiHt9m2XhHoeBqHO6NMPQIQYX5d-hsSs0JLsu-pOzoeg1d9FegPrzZTXA2VAgOsZZZD7wLjOzE6ISlx5ufKCAjKCaRI1i19dFeZSlA9opFSP8wj5mNaxX2TA5Fm0y6vj6cOpxs9wO0uLR-jf2mLtzlKXXOksRzD8uT0cw7B2I2NsTe953P6Jeb69nvq3haG5FMlaqK"/>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-tertiary ring-2 ring-surface-container-lowest"></span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Amine Dridi</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">DevOps Infrastructure • Tech</span>
</div>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-primary text-body-md">beach_access</span>
<span class="font-body-md text-body-md text-on-surface font-medium">Congé Annuel Payé</span>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex flex-col font-numeric-md text-numeric-md text-on-surface">
<span class="font-semibold">03/03/2025 <span class="text-on-surface-variant font-normal font-body-sm">au</span> 07/03/2025</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Période clôturée</span>
</div>
</td>
<td class="py-3 px-space-md text-center">
<span class="inline-flex items-center justify-center px-2 py-0.5 rounded-md bg-surface-container font-numeric-md text-numeric-md font-bold text-on-surface">
                  5 jours
                </span>
</td>
<td class="py-3 px-space-md max-w-xs">
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-body-sm">hotel</span>
<span class="font-body-sm text-body-sm text-on-surface truncate">Repos récupération trimestrielle</span>
</div>
</td>
<td class="py-3 px-space-md text-right">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">14 jours</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Validé RH</span>
</td>
<td class="py-3 px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
                  Approuvé
                </span>
</td>
<td class="py-3 px-space-lg text-right">
<button class="h-8 px-3 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface font-label-sm text-label-sm font-medium transition-colors" type="button">
                  Détails
                </button>
</td>
</tr>
<!-- Row 5: Fatma Bouchoucha -->
<tr class="h-16 hover:bg-surface-container-low transition-colors bg-surface-container-lowest">
<td class="py-3 px-space-lg">
<div class="flex items-center gap-space-md">
<div class="relative">
<img alt="Fatma Bouchoucha" class="w-9 h-9 rounded-full object-cover" data-alt="Portrait photography of Fatma Bouchoucha female legal compliance officer in Tunis office sitting by window" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdBxqc2BfiZeBpRCNNJOovC4lE8NE6JpTbLnVGGqFBb2DTGPVjC-uE7mdt6ERxGc2t9fhRf4FMam7FAGukyiHtGnttnTkadHbmICxJTNQJ38F7HfgZEnMINX0lufhQRQABHrM_MXGEXmKw3XCtSSIlEGra7H8LQCvlmdQmpRpGj2xDFp4UOGbqx4gNl2CmoP2O1nr-EhLKDBBo9flVtsSiTvTYl1LPeE9J5myMdfQ-xojOI8ypW6CJ"/>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-tertiary ring-2 ring-surface-container-lowest"></span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Fatma Bouchoucha</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Juriste Entreprise • Legal</span>
</div>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-primary text-body-md">favorite</span>
<span class="font-body-md text-body-md text-on-surface font-medium">Mariage (Exceptionnel)</span>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex flex-col font-numeric-md text-numeric-md text-on-surface">
<span class="font-semibold">02/04/2025 <span class="text-on-surface-variant font-normal font-body-sm">au</span> 04/04/2025</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Congé de droit civil</span>
</div>
</td>
<td class="py-3 px-space-md text-center">
<span class="inline-flex items-center justify-center px-2 py-0.5 rounded-md bg-surface-container font-numeric-md text-numeric-md font-bold text-on-surface">
                  3 jours
                </span>
</td>
<td class="py-3 px-space-md max-w-xs">
<div class="flex items-center gap-1.5 text-on-surface-variant">
<span class="material-symbols-outlined text-body-sm">gavel</span>
<span class="font-body-sm text-body-sm text-on-surface truncate">Art. 112 Convention Coll.</span>
</div>
</td>
<td class="py-3 px-space-md text-right">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">22 jours</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Hors solde annuel</span>
</td>
<td class="py-3 px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
                  Approuvé
                </span>
</td>
<td class="py-3 px-space-lg text-right">
<button class="h-8 px-3 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface font-label-sm text-label-sm font-medium transition-colors" type="button">
                  Détails
                </button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination footer inside card -->
<div class="bg-surface-container-low px-space-lg py-space-sm flex flex-col sm:flex-row items-center justify-between gap-space-sm">
<span class="font-label-sm text-label-sm text-on-surface-variant">
          Affichage de <span class="font-semibold text-on-surface">1 à 5</span> sur <span class="font-semibold text-on-surface">42</span> demandes de congés
        </span>
<div class="flex items-center gap-space-xs">
<button class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface-variant hover:text-on-surface flex items-center justify-center shadow-sm disabled:opacity-40" disabled="" type="button">
<span class="material-symbols-outlined text-body-md">chevron_left</span>
</button>
<button class="w-8 h-8 rounded-lg bg-primary-container text-on-primary font-label-sm text-label-sm font-bold shadow-sm" type="button">1</button>
<button class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-surface-container font-label-sm text-label-sm font-semibold shadow-sm" type="button">2</button>
<button class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-surface-container font-label-sm text-label-sm font-semibold shadow-sm" type="button">3</button>
<span class="px-1 text-on-surface-variant font-label-sm text-label-sm">...</span>
<button class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-surface-container font-label-sm text-label-sm font-semibold shadow-sm" type="button">9</button>
<button class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface-variant hover:text-on-surface flex items-center justify-center shadow-sm" type="button">
<span class="material-symbols-outlined text-body-md">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
<!-- Modal: Nouvelle Demande de Congé (Initially Hidden, Toggled by JS) -->
<div class="fixed inset-0 z-50 flex items-center justify-center p-space-md hidden" id="leaveModal">
<!-- Backdrop Blur with Ambient Overlay -->
<div class="fixed inset-0 bg-on-surface/40 backdrop-blur-sm transition-opacity" id="modalBackdrop"></div>
<!-- Modal Card Level 3 Elevation -->
<div class="relative w-full max-w-2xl bg-surface-container-lowest rounded-xl shadow-xl overflow-hidden flex flex-col z-10 animate-in fade-in zoom-in-95 duration-200">
<!-- Modal Header -->
<div class="px-space-xl py-space-lg bg-surface-container-low flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-primary-container text-on-primary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-headline-sm">event_note</span>
</div>
<div>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold">Soumettre une demande de congé</h3>
<p class="font-label-sm text-label-sm text-on-surface-variant">Conformité légale selon le Code du Travail Tunisien</p>
</div>
</div>
<button class="w-8 h-8 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container flex items-center justify-center transition-colors" id="closeModalBtn" type="button">
<span class="material-symbols-outlined text-body-lg">close</span>
</button>
</div>
<!-- Modal Body -->
<form class="p-space-xl space-y-space-lg overflow-y-auto max-h-[calc(90vh-140px)]" id="leaveForm">
<!-- Field 1: Collaborateur Dropdown -->
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md font-semibold text-on-surface">Collaborateur Bénéficiaire</label>
<div class="relative">
<select class="w-full h-10 pl-3 pr-10 rounded-xl bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container cursor-pointer appearance-none">
<option selected="" value="1">Mohamed Ben Salem — Développeur Senior (Ingénierie)</option>
<option value="2">Yasmine Trabelsi — Lead Marketing (Communication)</option>
<option value="3">Karim Chaabane — Supply Lead (Opérations)</option>
<option value="4">Amine Dridi — Ingénieur DevOps (Tech)</option>
<option value="5">Fatma Bouchoucha — Juriste (Legal)</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-body-md">unfold_more</span>
</div>
</div>
<!-- Field 2: Type de Congé -->
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md font-semibold text-on-surface">Type de Congé</label>
<div class="relative">
<select class="w-full h-10 pl-3 pr-10 rounded-xl bg-surface-container-low font-body-md text-body-md text-on-surface focus:outline-none focus:bg-surface-container cursor-pointer appearance-none" id="leaveTypeSelect">
<option selected="" value="annual">Congé Payé Annuel (Solde actuel disponible: 21 jours)</option>
<option value="sick">Congé Maladie (Justificatif médical requis)</option>
<option value="unpaid">Congé Sans Solde</option>
<option value="exceptional">Événement Familial (Mariage, Décès, Naissance)</option>
<option value="recup">Récupération Heures Sup.</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-body-md">expand_more</span>
</div>
</div>
<!-- Date Range Grid with calculated duration -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md font-semibold text-on-surface">Date Début</label>
<div class="relative">
<input class="w-full h-10 px-3 rounded-xl bg-surface-container-low font-numeric-md text-numeric-md text-on-surface focus:outline-none focus:bg-surface-container" id="startDate" type="date" value="2025-03-18"/>
</div>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md font-semibold text-on-surface">Date Fin</label>
<div class="relative">
<input class="w-full h-10 px-3 rounded-xl bg-surface-container-low font-numeric-md text-numeric-md text-on-surface focus:outline-none focus:bg-surface-container" id="endDate" type="date" value="2025-03-22"/>
</div>
</div>
</div>
<!-- Live Calculation & Balance Projection Card (Bespoke Dynamic Indicator) -->
<div class="p-space-md rounded-xl bg-surface-container-low flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-body-lg">calculate</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface font-semibold">Durée calculée : <span class="text-primary font-bold">5 jours ouvrés</span></p>
<p class="font-label-sm text-label-sm text-on-surface-variant">Exclut le dimanche légal de repos hebdomadaire</p>
</div>
</div>
<div class="text-right">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant font-semibold">Solde après approbation</span>
<p class="font-numeric-md text-numeric-md font-bold text-tertiary">16 jours restants</p>
</div>
</div>
<!-- Field 4: Motif / Commentaire -->
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md font-semibold text-on-surface">Motif / Commentaire de la demande</label>
<textarea class="w-full p-3 rounded-xl bg-surface-container-low font-body-sm text-body-sm text-on-surface placeholder:text-on-surface-variant focus:outline-none focus:bg-surface-container resize-none" placeholder="Précisez la raison ou les dispositions de passation..." rows="2"></textarea>
</div>
<!-- Field 5: Pièce jointe Upload Zone (for medical note or family certificate) -->
<div class="flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<label class="font-label-md text-label-md font-semibold text-on-surface">Pièce justificative (Optionnelle ou Obligatoire pour maladie)</label>
<span class="font-label-sm text-label-sm text-on-surface-variant">PDF, PNG jusqu'à 10MB</span>
</div>
<div class="relative bg-surface-container-low rounded-xl p-space-lg flex flex-col items-center justify-center text-center hover:bg-surface-container transition-colors cursor-pointer group">
<input class="absolute inset-0 opacity-0 cursor-pointer w-full h-full" type="file"/>
<div class="w-10 h-10 rounded-full bg-surface-container-highest group-hover:scale-110 flex items-center justify-center text-primary mb-2 transition-transform">
<span class="material-symbols-outlined text-headline-sm">upload_file</span>
</div>
<p class="font-label-md text-label-md text-on-surface font-medium">Glissez un document ou <span class="text-primary font-bold underline">parcourez votre appareil</span></p>
<p class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Certificat médical, acte de mariage, convocation officielle</p>
</div>
</div>
</form>
<!-- Modal Footer -->
<div class="px-space-xl py-space-md bg-surface-container-low flex items-center justify-end gap-space-md">
<button class="h-10 px-space-lg rounded-xl bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-lg text-label-lg transition-colors" id="cancelModalBtn" type="button">
          Annuler
        </button>
<button class="h-10 px-space-xl rounded-xl bg-primary-container hover:bg-primary text-on-primary font-label-lg text-label-lg font-semibold flex items-center gap-space-xs shadow-md transition-all active:scale-95" id="submitLeaveBtn" type="button">
<span class="material-symbols-outlined text-body-md">send</span>
<span>Soumettre pour validation</span>
</button>
</div>
</div>
</div>
</div>
<script>
  // Interactive modal management
  const openModalBtn = document.getElementById('openModalBtn');
  const closeModalBtn = document.getElementById('closeModalBtn');
  const cancelModalBtn = document.getElementById('cancelModalBtn');
  const modalBackdrop = document.getElementById('modalBackdrop');
  const leaveModal = document.getElementById('leaveModal');
  const submitLeaveBtn = document.getElementById('submitLeaveBtn');

  function openModal() {
    leaveModal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    leaveModal.classList.add('hidden');
    document.body.style.overflow = '';
  }

  if (openModalBtn) openModalBtn.addEventListener('click', openModal);
  if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
  if (cancelModalBtn) cancelModalBtn.addEventListener('click', closeModal);
  if (modalBackdrop) modalBackdrop.addEventListener('click', closeModal);

  if (submitLeaveBtn) {
    submitLeaveBtn.addEventListener('click', () => {
      submitLeaveBtn.innerHTML = '<span class="material-symbols-outlined animate-spin text-body-md">progress_activity</span><span>Traitement...</span>';
      setTimeout(() => {
        closeModal();
        submitLeaveBtn.innerHTML = '<span class="material-symbols-outlined text-body-md">send</span><span>Soumettre pour validation</span>';
      }, 700);
    });
  }
</script>
</x-admin-shell>
