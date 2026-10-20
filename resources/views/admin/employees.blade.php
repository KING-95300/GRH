<x-admin-shell active="employees" title="Gestion des Collaborateurs">
<div class="flex flex-col w-full pb-margin">
<!-- Subtle ambient glow background decoration -->
<div class="relative w-full overflow-hidden">
<div class="absolute -top-10 right-24 w-96 h-96 bg-primary-fixed-dim/20 rounded-full blur-3xl pointer-events-none -z-10"></div>
<div class="absolute top-48 left-1/3 w-80 h-80 bg-tertiary-fixed/15 rounded-full blur-3xl pointer-events-none -z-10"></div>
<!-- Page Breadcrumb & Header Bar -->
<div class="pt-space-md mb-space-xl flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
<div class="flex flex-col min-w-0">
<!-- Monospaced/Uppercase overline metadata -->
<div class="flex items-center gap-space-xs mb-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Accueil</span>
<span class="material-symbols-outlined text-outline text-label-sm">chevron_right</span>
<span class="font-label-sm text-label-sm text-primary font-semibold uppercase tracking-wider">Collaborateurs</span>
<span class="ml-space-sm px-2 py-0.5 rounded-full bg-surface-container font-numeric-md text-label-sm text-on-surface-variant font-bold">48 Profils Actifs</span>
</div>
<div class="flex items-baseline gap-space-md">
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Gestion des Collaborateurs</h1>
<span class="hidden sm:inline font-label-md text-label-md text-on-surface-variant">Conforme Code du Travail &amp; CNSS Tunisie</span>
</div>
</div>
<!-- Action Buttons -->
<div class="flex items-center gap-space-sm shrink-0">
<button class="h-10 px-space-lg rounded-xl bg-surface-container-lowest hover:bg-surface-container-low text-on-surface font-label-lg text-label-lg shadow-sm flex items-center gap-space-xs transition-all" type="button">
<span class="material-symbols-outlined text-body-lg text-on-surface-variant">file_download</span>
<span>Exporter CSV</span>
</button>
<button class="h-10 px-space-lg rounded-xl bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg shadow-md hover:shadow-lg flex items-center gap-space-xs transition-all transform active:scale-95" id="open-modal-btn" type="button">
<span class="material-symbols-outlined text-body-md">person_add</span>
<span>Nouveau Collaborateur</span>
</button>
</div>
</div>
<!-- Quick Stats Cards Strip -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md mb-space-xl">
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex items-center justify-between">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface-variant">Effectif Total</span>
<span class="font-display-lg text-display-lg text-on-surface font-bold tracking-tight mt-1">48</span>
<span class="font-label-sm text-label-sm text-tertiary flex items-center gap-0.5 mt-1">
<span class="material-symbols-outlined text-label-md">trending_up</span> +3 ce trimestre
          </span>
</div>
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-headline-md">group</span>
</div>
</div>
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex items-center justify-between">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface-variant">Période d'Essai</span>
<span class="font-display-lg text-display-lg text-on-surface font-bold tracking-tight mt-1">05</span>
<span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Évaluation sous 30 j</span>
</div>
<div class="w-12 h-12 rounded-xl bg-secondary-container/40 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-headline-md">hourglass_top</span>
</div>
</div>
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex items-center justify-between">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface-variant">En Congé Légal</span>
<span class="font-display-lg text-display-lg text-on-surface font-bold tracking-tight mt-1">03</span>
<span class="font-label-sm text-label-sm text-primary flex items-center gap-0.5 mt-1">
<span class="material-symbols-outlined text-label-md">event_available</span> Retours prévus semaine
          </span>
</div>
<div class="w-12 h-12 rounded-xl bg-primary-fixed/30 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-headline-md">beach_access</span>
</div>
</div>
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex items-center justify-between">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface-variant">Conformité CNSS</span>
<span class="font-display-lg text-display-lg text-tertiary font-bold tracking-tight mt-1">100%</span>
<span class="font-label-sm text-label-sm text-tertiary mt-1">Déclaration Q1 validée</span>
</div>
<div class="w-12 h-12 rounded-xl bg-tertiary-fixed/30 flex items-center justify-center text-tertiary">
<span class="material-symbols-outlined text-headline-md">verified_user</span>
</div>
</div>
</div>
<!-- Filter & Search Toolbar Card -->
<div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm mb-space-lg flex flex-col lg:flex-row gap-space-md items-stretch lg:items-center justify-between">
<!-- Search Input -->
<div class="relative flex-1 min-w-[280px]">
<span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-lg pointer-events-none">search</span>
<input class="w-full h-10 pl-11 pr-4 rounded-xl bg-surface-container-low font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant focus:outline-none focus:bg-surface-container transition-all" id="employee-search" placeholder="Rechercher par nom, email, CIN, poste..." type="text"/>
</div>
<!-- Dropdown Filters Group -->
<div class="flex flex-wrap items-center gap-space-sm">
<!-- Department Filter -->
<div class="relative">
<select class="appearance-none h-10 pl-3 pr-8 rounded-xl bg-surface-container-low font-body-sm text-body-sm text-on-surface font-medium focus:outline-none focus:bg-surface-container cursor-pointer transition-all">
<option value="">Tous les départements</option>
<option value="it">Ingénierie &amp; IT</option>
<option value="produit">Produit &amp; Design</option>
<option value="commerce">Marketing &amp; Sales</option>
<option value="finance">Finance &amp; Admin</option>
<option value="rh">Ressources Humaines</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-body-md">expand_more</span>
</div>
<!-- Status Filter -->
<div class="relative">
<select class="appearance-none h-10 pl-3 pr-8 rounded-xl bg-surface-container-low font-body-sm text-body-sm text-on-surface font-medium focus:outline-none focus:bg-surface-container cursor-pointer transition-all">
<option value="">Tous statuts</option>
<option value="actif">Actif (CDI / SIVP)</option>
<option value="essai">Période d'essai</option>
<option value="conge">En congé</option>
<option value="inactif">Inactif</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-body-md">expand_more</span>
</div>
<!-- Seniority Filter -->
<div class="relative">
<select class="appearance-none h-10 pl-3 pr-8 rounded-xl bg-surface-container-low font-body-sm text-body-sm text-on-surface font-medium focus:outline-none focus:bg-surface-container cursor-pointer transition-all">
<option value="">Ancienneté</option>
<option value="senior">&gt; 2 ans</option>
<option value="mid">1 à 2 ans</option>
<option value="junior">Junior (&lt; 1 an)</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-body-md">expand_more</span>
</div>
<div class="h-6 w-[1px] bg-surface-container-high mx-space-xs hidden sm:block"></div>
<!-- View Segment Toggles -->
<div class="flex items-center p-1 bg-surface-container-low rounded-xl">
<button aria-label="Table View" class="p-1.5 rounded-lg bg-surface-container-lowest text-primary shadow-xs" type="button">
<span class="material-symbols-outlined text-body-lg">view_list</span>
</button>
<button aria-label="Grid Cards View" class="p-1.5 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" type="button">
<span class="material-symbols-outlined text-body-lg">grid_view</span>
</button>
</div>
</div>
</div>
<!-- Main Employees Table Surface -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
<div class="overflow-x-auto w-full">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low h-11 text-on-surface-variant font-label-md text-label-md tracking-wider uppercase">
<th class="w-12 px-space-lg" scope="col">
<input class="w-4 h-4 rounded bg-surface-container-lowest text-primary focus:ring-0 cursor-pointer" type="checkbox"/>
</th>
<th class="px-space-md font-semibold" scope="col">Collaborateur</th>
<th class="px-space-md font-semibold" scope="col">Département</th>
<th class="px-space-md font-semibold" scope="col">Contact &amp; Mobile</th>
<th class="px-space-md font-semibold" scope="col">CIN Tunisienne</th>
<th class="px-space-md font-semibold" scope="col">Embauche &amp; Ancienneté</th>
<th class="px-space-md font-semibold" scope="col">Statut</th>
<th class="px-space-lg text-right font-semibold" scope="col">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-low font-body-md text-body-md text-on-surface">
<!-- Row 1: Mohamed Ben Salem -->
<tr class="h-16 hover:bg-surface-container-low/70 transition-colors group">
<td class="px-space-lg">
<input class="w-4 h-4 rounded bg-surface-container-lowest text-primary focus:ring-0 cursor-pointer" type="checkbox"/>
</td>
<td class="px-space-md py-space-sm">
<div class="flex items-center gap-space-md min-w-0">
<div class="relative shrink-0">
<img class="w-10 h-10 rounded-full object-cover shadow-xs" data-alt="Professional corporate headshot of Mohamed Ben Salem, a Tunisian Lead Software Engineer in his early 30s with a modern tech style, smiling warmly against a soft-lit Tunis office background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrs68UnenswLD3D32gpOF_NwpCMrT6NrQ9QR1pPkr69k4H5IatgxpFflk1xrpp05AqRJrtwV15eBBuxBzx-1KtmYwNB-gzelACj2xYa-PB1RPPznzecgTO0Kc38_h6a6P72Hva0O_8uErc-HyWbyISHjP9yHAKotQQwdH6HAy6jFEwC5vFntDi-qptjvv5lOELJ7FIizChfgKXOt57J7Xoda1Iaw3Bgo3DNe0VBd21QksQn0jO3sxD"/>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-tertiary ring-2 ring-surface-container-lowest"></span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg font-semibold text-on-surface group-hover:text-primary transition-colors truncate">Mohamed Ben Salem</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Lead Fullstack Engineer</span>
</div>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="px-2.5 py-1 rounded-full bg-surface-container text-primary font-label-sm text-label-sm font-semibold">
                  Ingénierie &amp; IT
                </span>
</td>
<td class="px-space-md py-space-sm">
<div class="flex flex-col text-left">
<span class="font-body-sm text-body-sm text-on-surface">m.bensalem@carthagetech.tn</span>
<span class="font-numeric-md text-label-sm text-on-surface-variant font-mono tracking-tight">+216 98 412 890</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex items-center gap-1.5 font-numeric-md text-numeric-md font-mono text-on-surface">
<span class="material-symbols-outlined text-outline text-label-md">badge</span>
<span>09845211</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex flex-col">
<span class="font-body-sm text-body-sm text-on-surface">15 Jan 2020</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">4 ans d'ancienneté</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-fixed/40 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                  Actif
                </span>
</td>
<td class="px-space-lg py-space-sm whitespace-nowrap text-right">
<div class="flex items-center justify-end gap-1 text-on-surface-variant">
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-primary transition-colors" title="Voir profil" type="button">
<span class="material-symbols-outlined text-body-lg">visibility</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Modifier" type="button">
<span class="material-symbols-outlined text-body-lg">edit</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Plus d'actions" type="button">
<span class="material-symbols-outlined text-body-lg">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 2: Yasmine Trabelsi -->
<tr class="h-16 hover:bg-surface-container-low/70 transition-colors group">
<td class="px-space-lg">
<input class="w-4 h-4 rounded bg-surface-container-lowest text-primary focus:ring-0 cursor-pointer" type="checkbox"/>
</td>
<td class="px-space-md py-space-sm">
<div class="flex items-center gap-space-md min-w-0">
<div class="relative shrink-0">
<img class="w-10 h-10 rounded-full object-cover shadow-xs" data-alt="Portrait photo of Yasmine Trabelsi, a Tunisian female Senior Product Designer with warm modern attire, creative studio office background in Lac II Tunis, confident and friendly expression." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD62ORlORJGf2o3d6-p2Hot1H2CtThrLeqKFZT53CnVsnka62Guw6L2TCP_scYcNJ8UXYj5bYElYZ3vtm6rjWy2t1ZotUMQ6dYzUs1VYVVa2GhhtacEB_o0o7nvc0k-usC2_2fBWYOcvWvJy4H4ohoEi62YSt1U2J5qFNKOjwFF9t4bNfPJfAdGO329UfTS7_2t_uZ1_ElTdCoZ4jc-mTSZiZgl1GvAS2CP52SPBh3Vg2BjacqPIkyX"/>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-tertiary ring-2 ring-surface-container-lowest"></span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg font-semibold text-on-surface group-hover:text-primary transition-colors truncate">Yasmine Trabelsi</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Senior Product Designer</span>
</div>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="px-2.5 py-1 rounded-full bg-primary-fixed/40 text-on-primary-fixed-variant font-label-sm text-label-sm font-semibold">
                  Produit &amp; Design
                </span>
</td>
<td class="px-space-md py-space-sm">
<div class="flex flex-col text-left">
<span class="font-body-sm text-body-sm text-on-surface">y.trabelsi@carthagetech.tn</span>
<span class="font-numeric-md text-label-sm text-on-surface-variant font-mono tracking-tight">+216 24 551 209</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex items-center gap-1.5 font-numeric-md text-numeric-md font-mono text-on-surface">
<span class="material-symbols-outlined text-outline text-label-md">badge</span>
<span>11029482</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex flex-col">
<span class="font-body-sm text-body-sm text-on-surface">03 Mars 2022</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">2 ans d'ancienneté</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-fixed/40 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                  Actif
                </span>
</td>
<td class="px-space-lg py-space-sm whitespace-nowrap text-right">
<div class="flex items-center justify-end gap-1 text-on-surface-variant">
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-primary transition-colors" title="Voir profil" type="button">
<span class="material-symbols-outlined text-body-lg">visibility</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Modifier" type="button">
<span class="material-symbols-outlined text-body-lg">edit</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Plus d'actions" type="button">
<span class="material-symbols-outlined text-body-lg">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 3: Karim Chaabane -->
<tr class="h-16 hover:bg-surface-container-low/70 transition-colors group">
<td class="px-space-lg">
<input class="w-4 h-4 rounded bg-surface-container-lowest text-primary focus:ring-0 cursor-pointer" type="checkbox"/>
</td>
<td class="px-space-md py-space-sm">
<div class="flex items-center gap-space-md min-w-0">
<div class="relative shrink-0">
<div class="w-10 h-10 rounded-full bg-secondary-container text-on-secondary-container font-headline-sm text-headline-sm flex items-center justify-center font-bold">
                      KC
                    </div>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-tertiary ring-2 ring-surface-container-lowest"></span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg font-semibold text-on-surface group-hover:text-primary transition-colors truncate">Karim Chaabane</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Key Account Manager</span>
</div>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="px-2.5 py-1 rounded-full bg-secondary-container/60 text-on-secondary-fixed font-label-sm text-label-sm font-semibold">
                  Marketing &amp; Sales
                </span>
</td>
<td class="px-space-md py-space-sm">
<div class="flex flex-col text-left">
<span class="font-body-sm text-body-sm text-on-surface">k.chaabane@carthagetech.tn</span>
<span class="font-numeric-md text-label-sm text-on-surface-variant font-mono tracking-tight">+216 55 190 344</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex items-center gap-1.5 font-numeric-md text-numeric-md font-mono text-on-surface">
<span class="material-symbols-outlined text-outline text-label-md">badge</span>
<span>08492019</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex flex-col">
<span class="font-body-sm text-body-sm text-on-surface">10 Fév 2023</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">1 an d'ancienneté</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-fixed/40 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                  Actif
                </span>
</td>
<td class="px-space-lg py-space-sm whitespace-nowrap text-right">
<div class="flex items-center justify-end gap-1 text-on-surface-variant">
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-primary transition-colors" title="Voir profil" type="button">
<span class="material-symbols-outlined text-body-lg">visibility</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Modifier" type="button">
<span class="material-symbols-outlined text-body-lg">edit</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Plus d'actions" type="button">
<span class="material-symbols-outlined text-body-lg">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 4: Nour El Houda Karray -->
<tr class="h-16 hover:bg-surface-container-low/70 transition-colors group">
<td class="px-space-lg">
<input class="w-4 h-4 rounded bg-surface-container-lowest text-primary focus:ring-0 cursor-pointer" type="checkbox"/>
</td>
<td class="px-space-md py-space-sm">
<div class="flex items-center gap-space-md min-w-0">
<div class="relative shrink-0">
<img class="w-10 h-10 rounded-full object-cover shadow-xs" data-alt="Professional corporate headshot of Nour El Houda Karray, an executive Tunisian woman in modern finance management attire, poised, elegant, inside high-rise office in Les Berges du Lac." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhOfrUgjfYrS6GfQxYvkNA9p2Om6mWO_k3JJgT6WOZuOsOfiJfDVSlY8_yofI6R_1jcUqseefqRssjKcscOioWpMzqNGT_eCQ9AK_MUrRgdSg88U0N2bkyKcbMbXrPar8z5aZvJQkdkxUp5VIQtXRHcKmhROnX7H7W-DaXNmYRe1FAad9BQSTQKafatjcKhSGGfzcry50o0t1bj6YmFsxiia4ARE9QXc0v3yjnfYH9jjr2AgqObECM"/>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-tertiary ring-2 ring-surface-container-lowest"></span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg font-semibold text-on-surface group-hover:text-primary transition-colors truncate">Nour El Houda Karray</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Responsable Paie &amp; Finance</span>
</div>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="px-2.5 py-1 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold">
                  Finance &amp; Admin
                </span>
</td>
<td class="px-space-md py-space-sm">
<div class="flex flex-col text-left">
<span class="font-body-sm text-body-sm text-on-surface">n.karray@carthagetech.tn</span>
<span class="font-numeric-md text-label-sm text-on-surface-variant font-mono tracking-tight">+216 97 882 110</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex items-center gap-1.5 font-numeric-md text-numeric-md font-mono text-on-surface">
<span class="material-symbols-outlined text-outline text-label-md">badge</span>
<span>07221948</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex flex-col">
<span class="font-body-sm text-body-sm text-on-surface">01 Sep 2019</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">5 ans d'ancienneté</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-fixed/40 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                  Actif
                </span>
</td>
<td class="px-space-lg py-space-sm whitespace-nowrap text-right">
<div class="flex items-center justify-end gap-1 text-on-surface-variant">
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-primary transition-colors" title="Voir profil" type="button">
<span class="material-symbols-outlined text-body-lg">visibility</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Modifier" type="button">
<span class="material-symbols-outlined text-body-lg">edit</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Plus d'actions" type="button">
<span class="material-symbols-outlined text-body-lg">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 5: Mehdi Zghal (Essai) -->
<tr class="h-16 hover:bg-surface-container-low/70 transition-colors group">
<td class="px-space-lg">
<input class="w-4 h-4 rounded bg-surface-container-lowest text-primary focus:ring-0 cursor-pointer" type="checkbox"/>
</td>
<td class="px-space-md py-space-sm">
<div class="flex items-center gap-space-md min-w-0">
<div class="relative shrink-0">
<div class="w-10 h-10 rounded-full bg-surface-container-highest text-primary font-headline-sm text-headline-sm flex items-center justify-center font-bold">
                      MZ
                    </div>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-secondary ring-2 ring-surface-container-lowest"></span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg font-semibold text-on-surface group-hover:text-primary transition-colors truncate">Mehdi Zghal</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">DevOps Engineer</span>
</div>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="px-2.5 py-1 rounded-full bg-surface-container text-primary font-label-sm text-label-sm font-semibold">
                  Ingénierie &amp; IT
                </span>
</td>
<td class="px-space-md py-space-sm">
<div class="flex flex-col text-left">
<span class="font-body-sm text-body-sm text-on-surface">m.zghal@carthagetech.tn</span>
<span class="font-numeric-md text-label-sm text-on-surface-variant font-mono tracking-tight">+216 29 443 219</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex items-center gap-1.5 font-numeric-md text-numeric-md font-mono text-on-surface">
<span class="material-symbols-outlined text-outline text-label-md">badge</span>
<span>12904811</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex flex-col">
<span class="font-body-sm text-body-sm text-on-surface">15 Sep 2023</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">6 mois d'ancienneté</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/60 text-on-secondary-container font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                  Période d'essai
                </span>
</td>
<td class="px-space-lg py-space-sm whitespace-nowrap text-right">
<div class="flex items-center justify-end gap-1 text-on-surface-variant">
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-primary transition-colors" title="Voir profil" type="button">
<span class="material-symbols-outlined text-body-lg">visibility</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Modifier" type="button">
<span class="material-symbols-outlined text-body-lg">edit</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Plus d'actions" type="button">
<span class="material-symbols-outlined text-body-lg">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 6: Sonia Mezghani -->
<tr class="h-16 hover:bg-surface-container-low/70 transition-colors group">
<td class="px-space-lg">
<input class="w-4 h-4 rounded bg-surface-container-lowest text-primary focus:ring-0 cursor-pointer" type="checkbox"/>
</td>
<td class="px-space-md py-space-sm">
<div class="flex items-center gap-space-md min-w-0">
<div class="relative shrink-0">
<div class="w-10 h-10 rounded-full bg-primary-fixed text-primary font-headline-sm text-headline-sm flex items-center justify-center font-bold">
                      SM
                    </div>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-tertiary ring-2 ring-surface-container-lowest"></span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg font-semibold text-on-surface group-hover:text-primary transition-colors truncate">Sonia Mezghani</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Chargée Recrutement RH</span>
</div>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="px-2.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold">
                  Ressources Humaines
                </span>
</td>
<td class="px-space-md py-space-sm">
<div class="flex flex-col text-left">
<span class="font-body-sm text-body-sm text-on-surface">s.mezghani@carthagetech.tn</span>
<span class="font-numeric-md text-label-sm text-on-surface-variant font-mono tracking-tight">+216 93 112 009</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex items-center gap-1.5 font-numeric-md text-numeric-md font-mono text-on-surface">
<span class="material-symbols-outlined text-outline text-label-md">badge</span>
<span>09182390</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex flex-col">
<span class="font-body-sm text-body-sm text-on-surface">12 Mai 2021</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">3 ans d'ancienneté</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-fixed/40 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                  Actif
                </span>
</td>
<td class="px-space-lg py-space-sm whitespace-nowrap text-right">
<div class="flex items-center justify-end gap-1 text-on-surface-variant">
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-primary transition-colors" title="Voir profil" type="button">
<span class="material-symbols-outlined text-body-lg">visibility</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Modifier" type="button">
<span class="material-symbols-outlined text-body-lg">edit</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Plus d'actions" type="button">
<span class="material-symbols-outlined text-body-lg">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 7: Anis Mansour (En Congé) -->
<tr class="h-16 hover:bg-surface-container-low/70 transition-colors group">
<td class="px-space-lg">
<input class="w-4 h-4 rounded bg-surface-container-lowest text-primary focus:ring-0 cursor-pointer" type="checkbox"/>
</td>
<td class="px-space-md py-space-sm">
<div class="flex items-center gap-space-md min-w-0">
<div class="relative shrink-0">
<div class="w-10 h-10 rounded-full bg-secondary-container text-secondary font-headline-sm text-headline-sm flex items-center justify-center font-bold">
                      AM
                    </div>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-primary ring-2 ring-surface-container-lowest"></span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg font-semibold text-on-surface group-hover:text-primary transition-colors truncate">Anis Mansour</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Cloud Infrastructure Architect</span>
</div>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="px-2.5 py-1 rounded-full bg-surface-container text-primary font-label-sm text-label-sm font-semibold">
                  Ingénierie &amp; IT
                </span>
</td>
<td class="px-space-md py-space-sm">
<div class="flex flex-col text-left">
<span class="font-body-sm text-body-sm text-on-surface">a.mansour@carthagetech.tn</span>
<span class="font-numeric-md text-label-sm text-on-surface-variant font-mono tracking-tight">+216 21 009 332</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex items-center gap-1.5 font-numeric-md text-numeric-md font-mono text-on-surface">
<span class="material-symbols-outlined text-outline text-label-md">badge</span>
<span>06771029</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex flex-col">
<span class="font-body-sm text-body-sm text-on-surface">01 Déc 2021</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">2.5 ans</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-primary-fixed/40 text-on-primary-fixed-variant font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                  En Congé
                </span>
</td>
<td class="px-space-lg py-space-sm whitespace-nowrap text-right">
<div class="flex items-center justify-end gap-1 text-on-surface-variant">
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-primary transition-colors" title="Voir profil" type="button">
<span class="material-symbols-outlined text-body-lg">visibility</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Modifier" type="button">
<span class="material-symbols-outlined text-body-lg">edit</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Plus d'actions" type="button">
<span class="material-symbols-outlined text-body-lg">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 8: Fatma Ghorbel -->
<tr class="h-16 hover:bg-surface-container-low/70 transition-colors group">
<td class="px-space-lg">
<input class="w-4 h-4 rounded bg-surface-container-lowest text-primary focus:ring-0 cursor-pointer" type="checkbox"/>
</td>
<td class="px-space-md py-space-sm">
<div class="flex items-center gap-space-md min-w-0">
<div class="relative shrink-0">
<div class="w-10 h-10 rounded-full bg-tertiary-fixed text-tertiary font-headline-sm text-headline-sm flex items-center justify-center font-bold">
                      FG
                    </div>
<span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-tertiary ring-2 ring-surface-container-lowest"></span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg font-semibold text-on-surface group-hover:text-primary transition-colors truncate">Fatma Ghorbel</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Comptable Senior</span>
</div>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="px-2.5 py-1 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold">
                  Finance &amp; Admin
                </span>
</td>
<td class="px-space-md py-space-sm">
<div class="flex flex-col text-left">
<span class="font-body-sm text-body-sm text-on-surface">f.ghorbel@carthagetech.tn</span>
<span class="font-numeric-md text-label-sm text-on-surface-variant font-mono tracking-tight">+216 50 871 432</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex items-center gap-1.5 font-numeric-md text-numeric-md font-mono text-on-surface">
<span class="material-symbols-outlined text-outline text-label-md">badge</span>
<span>10892011</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<div class="flex flex-col">
<span class="font-body-sm text-body-sm text-on-surface">18 Juin 2022</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">2 ans</span>
</div>
</td>
<td class="px-space-md py-space-sm whitespace-nowrap">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-fixed/40 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                  Actif
                </span>
</td>
<td class="px-space-lg py-space-sm whitespace-nowrap text-right">
<div class="flex items-center justify-end gap-1 text-on-surface-variant">
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-primary transition-colors" title="Voir profil" type="button">
<span class="material-symbols-outlined text-body-lg">visibility</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Modifier" type="button">
<span class="material-symbols-outlined text-body-lg">edit</span>
</button>
<button class="p-1.5 rounded-lg hover:bg-surface-container hover:text-on-surface transition-colors" title="Plus d'actions" type="button">
<span class="material-symbols-outlined text-body-lg">more_vert</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination Footer -->
<div class="px-space-lg py-space-md bg-surface-container-low/40 flex flex-col sm:flex-row items-center justify-between gap-space-md">
<div class="flex items-center gap-space-xs font-label-md text-label-md text-on-surface-variant">
<span>Affichage</span>
<span class="font-numeric-md text-on-surface font-semibold">1</span>
<span>à</span>
<span class="font-numeric-md text-on-surface font-semibold">8</span>
<span>sur</span>
<span class="font-numeric-md text-on-surface font-semibold">48</span>
<span>collaborateurs</span>
</div>
<div class="flex items-center gap-space-xs">
<button class="h-9 px-space-md rounded-xl bg-surface-container-lowest hover:bg-surface-container text-on-surface-variant font-label-md text-label-md shadow-xs disabled:opacity-40 flex items-center gap-1 transition-colors" disabled="" type="button">
<span class="material-symbols-outlined text-body-md">chevron_left</span>
<span>Précédent</span>
</button>
<div class="flex items-center gap-1 mx-1">
<button class="w-8 h-8 rounded-xl bg-primary text-on-primary font-label-md text-label-md font-semibold" type="button">1</button>
<button class="w-8 h-8 rounded-xl hover:bg-surface-container text-on-surface font-label-md text-label-md" type="button">2</button>
<button class="w-8 h-8 rounded-xl hover:bg-surface-container text-on-surface font-label-md text-label-md" type="button">3</button>
<span class="text-on-surface-variant px-1 font-label-md text-label-md">...</span>
<button class="w-8 h-8 rounded-xl hover:bg-surface-container text-on-surface font-label-md text-label-md" type="button">6</button>
</div>
<button class="h-9 px-space-md rounded-xl bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-md text-label-md shadow-xs flex items-center gap-1 transition-colors" type="button">
<span>Suivant</span>
<span class="material-symbols-outlined text-body-md">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
<!-- Slide-Over Multi-Step Modal (Add Employee) -->
<div class="fixed inset-0 z-50 overflow-hidden flex justify-end transition-opacity duration-300" id="add-employee-modal">
<!-- Overlay backdrop -->
<div class="fixed inset-0 bg-inverse-surface/40 backdrop-blur-xs transition-opacity" id="modal-backdrop"></div>
<!-- Slide-over Drawer Panel -->
<div class="relative w-full max-w-2xl bg-surface-container-lowest shadow-2xl flex flex-col h-full z-10 overflow-hidden">
<!-- Drawer Header -->
<div class="p-space-xl bg-surface-container-low/60 flex items-start justify-between">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded-xl bg-primary-container text-on-primary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-headline-lg">fitbit_push_ups</span>
</div>
<div class="flex flex-col">
<h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">Nouveau Collaborateur</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Ajout d'un employé au registre réglementaire tunisien</p>
</div>
</div>
<button aria-label="Fermer" class="w-9 h-9 rounded-xl hover:bg-surface-container text-on-surface-variant hover:text-on-surface flex items-center justify-center transition-colors" id="close-modal-btn" type="button">
<span class="material-symbols-outlined text-headline-sm">close</span>
</button>
</div>
<!-- Multi-step Stepper Ribbon -->
<div class="px-space-xl py-space-sm bg-surface-container-lowest overflow-x-auto">
<div class="flex items-center min-w-max gap-space-sm">
<!-- Step 1 (Active) -->
<div class="flex items-center gap-2 px-3 py-2 rounded-xl bg-primary-container text-on-primary shadow-xs">
<span class="w-5 h-5 rounded-full bg-white text-primary font-label-sm text-label-sm flex items-center justify-center font-bold">1</span>
<span class="font-label-md text-label-md font-semibold">Infos Personnelles</span>
</div>
<span class="material-symbols-outlined text-outline-variant text-label-md">arrow_forward_ios</span>
<!-- Step 2 -->
<div class="flex items-center gap-2 px-3 py-2 rounded-xl text-on-surface-variant hover:bg-surface-container transition-colors">
<span class="w-5 h-5 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm flex items-center justify-center font-bold">2</span>
<span class="font-label-md text-label-md font-medium">Contrat &amp; Poste</span>
</div>
<span class="material-symbols-outlined text-outline-variant text-label-md">arrow_forward_ios</span>
<!-- Step 3 -->
<div class="flex items-center gap-2 px-3 py-2 rounded-xl text-on-surface-variant hover:bg-surface-container transition-colors">
<span class="w-5 h-5 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm flex items-center justify-center font-bold">3</span>
<span class="font-label-md text-label-md font-medium">Paie &amp; CNSS</span>
</div>
<span class="material-symbols-outlined text-outline-variant text-label-md">arrow_forward_ios</span>
<!-- Step 4 -->
<div class="flex items-center gap-2 px-3 py-2 rounded-xl text-on-surface-variant hover:bg-surface-container transition-colors">
<span class="w-5 h-5 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm flex items-center justify-center font-bold">4</span>
<span class="font-label-md text-label-md font-medium">Congés</span>
</div>
</div>
</div>
<!-- Drawer Form Content (Step 1 Fields) -->
<div class="flex-1 overflow-y-auto p-space-xl space-y-space-lg">
<!-- Info Banner: Legal Compliance -->
<div class="p-space-md rounded-xl bg-surface-container-low flex items-start gap-space-sm">
<span class="material-symbols-outlined text-primary text-body-lg shrink-0 mt-0.5">policy</span>
<div class="flex flex-col text-on-surface">
<span class="font-label-md text-label-md font-semibold">Vérification d'identité tunisienne</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Le numéro de CIN doit comporter exactement 8 chiffres conformes au registre national d'état civil.</span>
</div>
</div>
<form class="space-y-space-md" id="new-employee-form">
<!-- Row: Prénom & Nom -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium" for="emp-firstname">Prénom <span class="text-error">*</span></label>
<input class="h-10 px-3 rounded-xl bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:outline-none ring-1 ring-outline-variant focus:ring-2 focus:ring-primary transition-all" id="emp-firstname" placeholder="Ex: Amira" required="" type="text" value="Amira"/>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium" for="emp-lastname">Nom de famille <span class="text-error">*</span></label>
<input class="h-10 px-3 rounded-xl bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:outline-none ring-1 ring-outline-variant focus:ring-2 focus:ring-primary transition-all" id="emp-lastname" placeholder="Ex: Bouazizi" required="" type="text" value="Bouazizi"/>
</div>
</div>
<!-- Row: CIN & Date de Naissance -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium" for="emp-cin">Numéro de CIN (8 chiffres) <span class="text-error">*</span></label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-md">badge</span>
<input class="w-full h-10 pl-10 pr-3 rounded-xl bg-surface-container-lowest text-on-surface font-numeric-md text-numeric-md font-mono focus:outline-none ring-1 ring-outline-variant focus:ring-2 focus:ring-primary transition-all" id="emp-cin" maxlength="8" pattern="[0-9]{8}" placeholder="09845211" required="" type="text" value="09823412"/>
</div>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium" for="emp-dob">Date de naissance <span class="text-error">*</span></label>
<input class="h-10 px-3 rounded-xl bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:outline-none ring-1 ring-outline-variant focus:ring-2 focus:ring-primary transition-all" id="emp-dob" required="" type="date" value="1994-06-18"/>
</div>
</div>
<!-- Row: Email & Téléphone -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium" for="emp-email">Email Personnel / Pro <span class="text-error">*</span></label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-md">mail</span>
<input class="w-full h-10 pl-10 pr-3 rounded-xl bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:outline-none ring-1 ring-outline-variant focus:ring-2 focus:ring-primary transition-all" id="emp-email" placeholder="a.bouazizi@carthagetech.tn" required="" type="email" value="amira.bouazizi@email.tn"/>
</div>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium" for="emp-phone">Numéro Mobile (Tunisie) <span class="text-error">*</span></label>
<div class="relative">
<span class="absolute left-3 top-1/2 -translate-y-1/2 font-numeric-md text-label-md font-mono text-on-surface-variant font-bold">+216</span>
<input class="w-full h-10 pl-14 pr-3 rounded-xl bg-surface-container-lowest text-on-surface font-numeric-md text-numeric-md font-mono focus:outline-none ring-1 ring-outline-variant focus:ring-2 focus:ring-primary transition-all" id="emp-phone" placeholder="98 123 456" required="" type="tel" value="98 234 110"/>
</div>
</div>
</div>
<!-- Row: Situation Familiale & Enfants -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium" for="emp-family">Situation Familiale (Chef de famille)</label>
<div class="relative">
<select class="w-full appearance-none h-10 pl-3 pr-8 rounded-xl bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:outline-none ring-1 ring-outline-variant focus:ring-2 focus:ring-primary transition-all" id="emp-family">
<option value="celibataire">Célibataire</option>
<option selected="" value="marie">Marié(e)</option>
<option value="divorce">Divorcé(e)</option>
<option value="veuf">Veuf / Veuve</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-body-md">expand_more</span>
</div>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium" for="emp-children">Nombre d'enfants à charge (Déduction IRPP)</label>
<input class="h-10 px-3 rounded-xl bg-surface-container-lowest text-on-surface font-numeric-md text-numeric-md focus:outline-none ring-1 ring-outline-variant focus:ring-2 focus:ring-primary transition-all" id="emp-children" max="10" min="0" type="number" value="1"/>
</div>
</div>
<!-- Address -->
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium" for="emp-address">Adresse Résidentielle Principale</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-md">home_pin</span>
<input class="w-full h-10 pl-10 pr-3 rounded-xl bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:outline-none ring-1 ring-outline-variant focus:ring-2 focus:ring-primary transition-all" id="emp-address" placeholder="Rue, Code Postal, Gouvernorat, Tunisie" type="text" value="24 Rue de la Bourse, Les Berges du Lac 2, 1053 Tunis"/>
</div>
</div>
<!-- File Upload: CIN Copy -->
<div class="flex flex-col gap-space-xs pt-space-xs">
<label class="font-label-md text-label-md text-on-surface font-medium">Copie Recto/Verso CIN (PDF ou Scan)</label>
<div class="rounded-xl p-space-md bg-surface-container-low flex items-center justify-between">
<div class="flex items-center gap-space-sm min-w-0">
<span class="material-symbols-outlined text-primary text-headline-sm">description</span>
<div class="flex flex-col min-w-0">
<span class="font-label-md text-label-md text-on-surface font-semibold truncate">CIN_Amira_Bouazizi_2024.pdf</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">1.4 Mo • Validé</span>
</div>
</div>
<button class="text-on-surface-variant hover:text-error transition-colors p-1" type="button">
<span class="material-symbols-outlined text-body-md">delete</span>
</button>
</div>
</div>
</form>
</div>
<!-- Drawer Sticky Footer Actions -->
<div class="p-space-lg bg-surface-container-lowest shadow-[0_-4px_12px_rgba(0,0,0,0.03)] flex items-center justify-between">
<button class="h-10 px-space-lg rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg transition-colors" id="cancel-modal-btn" type="button">
          Annuler
        </button>
<button class="h-10 px-space-xl rounded-xl bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg shadow-md flex items-center gap-space-xs transition-all transform active:scale-95" type="button">
<span>Suivant: Contrat &amp; Poste</span>
<span class="material-symbols-outlined text-body-md">arrow_forward</span>
</button>
</div>
</div>
</div>
<!-- Inline UI Interactions Script -->
<script>
    (function() {
      const modal = document.getElementById('add-employee-modal');
      const openBtn = document.getElementById('open-modal-btn');
      const closeBtn = document.getElementById('close-modal-btn');
      const cancelBtn = document.getElementById('cancel-modal-btn');
      const backdrop = document.getElementById('modal-backdrop');
      const searchInput = document.getElementById('employee-search');

      function openModal() {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
      }

      function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
      }

      // Initial state: hidden
      modal.classList.add('hidden');

      if (openBtn) openBtn.addEventListener('click', openModal);
      if (closeBtn) closeBtn.addEventListener('click', closeModal);
      if (cancelBtn) cancelBtn.addEventListener('click', closeModal);
      if (backdrop) backdrop.addEventListener('click', closeModal);

      // Simple Table Filter Interaction
      if (searchInput) {
        searchInput.addEventListener('input', function(e) {
          const term = e.target.value.toLowerCase();
          const rows = document.querySelectorAll('tbody tr');
          rows.forEach(row => {
            const text = row.innerText.toLowerCase();
            row.style.display = text.includes(term) ? '' : 'none';
          });
        });
      }
    })();
  </script>
</div>
</x-admin-shell>
