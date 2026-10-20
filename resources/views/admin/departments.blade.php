<x-admin-shell active="departments" title="Gestion des Départements">
<div class="flex flex-col w-full pb-16 space-y-8">
<!-- Breadcrumb & Top Bar -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pt-6">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface-variant">
<a class="hover:text-primary transition-colors" href="#">Accueil</a>
<span class="material-symbols-outlined text-body-sm">chevron_right</span>
<span class="text-on-surface font-semibold">Départements &amp; Structure</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Gestion des Départements</h1>
<p class="font-body-sm text-body-sm text-on-surface-variant">
        48 collaborateurs répartis sur 5 départements opérationnels • Carthage Tech Solutions SARL, Tunis Lac II
      </p>
</div>
<!-- Actions & View Switcher -->
<div class="flex items-center gap-3">
<div class="bg-surface-container-low p-1 rounded-xl flex items-center shadow-sm">
<button class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm transition-all" id="viewGridBtn" onclick="switchView('grid')">
<span class="material-symbols-outlined text-body-sm">grid_view</span>
<span>Vue Grille Cartes</span>
</button>
<button class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-all" id="viewTreeBtn" onclick="switchView('tree')">
<span class="material-symbols-outlined text-body-sm">account_tree</span>
<span>Vue Organigramme</span>
</button>
</div>
<button class="h-9 px-4 rounded-xl bg-primary-container hover:bg-primary font-label-lg text-label-lg text-on-primary flex items-center gap-1.5 shadow-sm transition-all hover:shadow-md" onclick="document.getElementById('newDeptModal').classList.remove('hidden')">
<span class="material-symbols-outlined text-body-md">domain_add</span>
<span>+ Nouveau Département</span>
</button>
</div>
</div>
<!-- KPI Summary Banner -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<!-- Stat 1 -->
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-3 -top-3 w-16 h-16 bg-primary-container/10 rounded-full blur-xl pointer-events-none"></div>
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Départements</span>
<div class="w-8 h-8 rounded-lg bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-headline-sm">apartment</span>
</div>
</div>
<div class="mt-3 flex items-baseline gap-2">
<span class="font-display-lg text-display-lg text-on-surface font-bold tracking-tight">05</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Unités actives</span>
</div>
<div class="mt-2 flex items-center gap-1 font-label-sm text-label-sm text-tertiary">
<span class="material-symbols-outlined text-body-sm">check_circle</span>
<span>Toutes pourvues d'un Lead</span>
</div>
</div>
<!-- Stat 2 -->
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-3 -top-3 w-16 h-16 bg-secondary-container/20 rounded-full blur-xl pointer-events-none"></div>
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Effectif Global</span>
<div class="w-8 h-8 rounded-lg bg-surface-container-low flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-headline-sm">groups</span>
</div>
</div>
<div class="mt-3 flex items-baseline gap-2">
<span class="font-display-lg text-display-lg text-on-surface font-bold tracking-tight">48</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Salariés déclarés</span>
</div>
<div class="mt-2 flex items-center gap-1 font-label-sm text-label-sm text-on-surface-variant">
<span class="font-numeric-md text-numeric-md font-semibold text-primary">100%</span>
<span>Affiliés CNSS Tunisie</span>
</div>
</div>
<!-- Stat 3 -->
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Managers de Pôle</span>
<div class="w-8 h-8 rounded-lg bg-surface-container-low flex items-center justify-center text-primary-container">
<span class="material-symbols-outlined text-headline-sm">manage_accounts</span>
</div>
</div>
<div class="mt-3 flex items-baseline gap-2">
<span class="font-display-lg text-display-lg text-on-surface font-bold tracking-tight">05</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Cadres Dirigeants</span>
</div>
<div class="mt-2 flex items-center gap-1 font-label-sm text-label-sm text-tertiary">
<span class="material-symbols-outlined text-body-sm">military_tech</span>
<span>Ratio encadrement : 1 / 9.6</span>
</div>
</div>
<!-- Stat 4 -->
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-3 -top-3 w-16 h-16 bg-tertiary-fixed/30 rounded-full blur-xl pointer-events-none"></div>
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Masse Salariale Brute</span>
<div class="w-8 h-8 rounded-lg bg-surface-container-low flex items-center justify-center text-tertiary">
<span class="material-symbols-outlined text-headline-sm">payments</span>
</div>
</div>
<div class="mt-3 flex items-baseline gap-1">
<span class="font-display-lg text-display-lg text-on-surface font-bold tracking-tight font-numeric-md">142,850</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">TND / mois</span>
</div>
<div class="mt-2 flex items-center gap-1 font-label-sm text-label-sm text-on-surface-variant">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
<span>Budget Q2 conforme à 98.4%</span>
</div>
</div>
</div>
<!-- VIEW 1: GRID MODE (Active by default) -->
<div class="flex flex-col space-y-6" id="gridContainer">
<!-- Filters & Search mini strip -->
<div class="flex flex-col sm:flex-row items-center justify-between gap-3 bg-surface-container-lowest p-3 rounded-xl shadow-sm">
<div class="flex items-center gap-2 w-full sm:w-auto">
<div class="relative w-full sm:w-72">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-md pointer-events-none">filter_list</span>
<input class="w-full h-9 pl-9 pr-4 rounded-lg bg-surface-container-low font-body-sm text-body-sm text-on-surface placeholder:text-on-surface-variant focus:outline-none focus:bg-surface-container" id="deptSearchInput" onkeyup="filterDepartments()" placeholder="Filtrer par nom, lead, technologie..." type="text"/>
</div>
</div>
<div class="flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
<span>Trié par :</span>
<button class="bg-surface-container-low px-2.5 py-1 rounded-md text-on-surface font-semibold flex items-center gap-1 hover:bg-surface-container transition-colors">
<span>Effectif décroissant</span>
<span class="material-symbols-outlined text-body-sm">arrow_downward</span>
</button>
</div>
</div>
<!-- Department Cards (3 columns grid) -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="departmentsCardsList">
<!-- Card 1: Ingénierie & Tech -->
<div class="dept-card bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between relative group" data-name="Ingénierie Tech Mohamed Ben Salem Node React Cloud">
<div class="space-y-4">
<!-- Top Tag & Options -->
<div class="flex items-start justify-between">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-primary-container"></span>
<span class="font-label-sm text-label-sm uppercase font-semibold text-primary">Pôle Technique</span>
</div>
<div class="flex items-center gap-1">
<span class="px-2 py-0.5 rounded-full bg-surface-container font-numeric-md text-label-sm text-on-surface font-semibold">18 Collaborateurs</span>
<button class="text-on-surface-variant hover:text-on-surface p-1 rounded-lg hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined text-body-md">more_vert</span>
</button>
</div>
</div>
<!-- Title & Description -->
<div>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">Ingénierie &amp; Tech</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Conception logicielle, plateformes SaaS, infrastructure cloud AWS et intégrations monétiques.</p>
</div>
<!-- Manager Row -->
<div class="bg-surface-container-low p-3 rounded-xl flex items-center justify-between">
<div class="flex items-center gap-3 min-w-0">
<img class="w-10 h-10 rounded-full object-cover shrink-0 shadow-sm" data-alt="Professional portrait of a North African male tech executive in his mid-30s wearing a navy blazer and smart casual glasses with a subtle confident smile in a modern bright office environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCstWBAu3Kmcg3ptkCeAZBQvK1UzeCQ-3Df-Nfk5-IVHb4PQWpdt-7cUeFu7pXytyj40bTigGISQzQM6WY6iangp-FoYA7IKWfGgfMmCwIvp2UuvAuOyFrEUSkbo2MMoU2R2zhYttfeJQy_mLpDrpguiHIldn_ZJbcMnMlYCUtO5l_h5djewbODHHNFQ519fppkf_T3SKwASJJOTjofed831hiTAROD7AcDCH5Dzqbn7qBtw6KGVCXn"/>
<div class="flex flex-col min-w-0">
<span class="font-label-md text-label-md text-on-surface font-bold truncate">Mohamed Ben Salem</span>
<span class="font-label-sm text-label-sm text-on-surface-variant truncate">VP Engineering • m.bensalem@carthagetech.tn</span>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant text-body-md shrink-0 ml-2">mail</span>
</div>
<!-- Sub-poles & Tags -->
<div class="space-y-2">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant">3 Pôles d'expertise :</span>
<span class="font-semibold text-on-surface">Frontend, Backend, DevOps</span>
</div>
<div class="flex flex-wrap gap-1.5 pt-1">
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Node.js</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">React / Next.js</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">AWS Cloud</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">PostgreSQL</span>
</div>
</div>
<!-- Workload & Budget metrics -->
<div class="space-y-2 pt-2">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant">Taux d'occupation</span>
<span class="font-numeric-md font-bold text-on-surface">92%</span>
</div>
<div class="w-full h-1.5 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-primary-container rounded-full" style="width: 92%"></div>
</div>
<div class="flex items-center justify-between pt-1">
<span class="font-label-sm text-label-sm text-on-surface-variant">Budget Salarial Mensuel</span>
<span class="font-numeric-md text-body-sm font-bold text-on-surface">62,400 TND</span>
</div>
</div>
</div>
<!-- Footer / Quick Links -->
<div class="pt-5 mt-4 flex items-center justify-between">
<div class="flex -space-x-2 overflow-hidden items-center">
<img class="inline-block h-6 w-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Portrait of a young Tunisian female front-end software engineer smiling warmly with natural lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtvZwSTGQSjhhNU9l2WLIB4Rrre6UMBejxj14BL5i1yBE6Tp32yhIwHQMNOO-toxzJG9sllGByuwXf8rrKhfYq_xoy50w9ggu4SCAZuILmYsFulil4SXlB-Ny_BnC2TjlCCtkbQeBXsyboy64r--SdDK5gFLRNY-bw1g_0B6P7FROa3Zh6D9h3CCJtjq3dcu70YzuF8yKMNpl8PUxTrUufpxxpR7DQPoCBouX83HmThTQM2WIZh2lY"/>
<img class="inline-block h-6 w-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Portrait of a male North African cloud infrastructure devops architect wearing dark frame glasses." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnwIJH3MAQ53hoBreVlbJe5Se2ksa_JdNJQ2bjh4U9cJj-mHokAcmAErOjE-pCJY4Oq1qL0SLuN7H9lW-IrHeJGRj5RZTt1SeyS9W_wirmspY6-fTbF38Q1ekbQENPNGun1Hb657omfjG3XYDJLSDdesKTjLuh_dTf01EaAXPQ8RkQK-mzF7QkdjFJdpoPCo5hvwKVZ3psiOmDYivwcg94iCd69MVf0qjyLN1WG4b_Pbk0nZOBtOtp"/>
<img class="inline-block h-6 w-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Portrait of a senior Tunisian software developer with trimmed beard in a casual tech workplace." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0-u-z9Kj-sNdxK6naF_D4tDA81e1haVxd4qAC6wSjb6dFFm0kOUDewQMHvOcCd8Rhc5QaEOrpgQWjA_3glk3lOu-S2nmkxmT39xFkSmVvDFC1zE9P1tpY4mi5HuvNrWfGhoflR15QvBIMqu7MXb42H7naEKq0iswMke1bmdnDloD7zxw3bjAkSa0O2KOULYMRpHNUNc7oKEnw_ekWuc5XNU903MsQQQU4mIQXGkOu3BgKsp_wk-l2"/>
<span class="inline-flex items-center justify-center h-6 w-6 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-bold ring-2 ring-surface-container-lowest">+15</span>
</div>
<div class="flex items-center gap-1">
<button class="px-2.5 py-1 rounded-lg text-primary hover:bg-surface-container-low font-label-sm text-label-sm font-semibold transition-colors">Voir l'équipe</button>
<button class="p-1 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-colors" title="Paramètres">
<span class="material-symbols-outlined text-body-sm">settings</span>
</button>
</div>
</div>
</div>
<!-- Card 2: Produit & Design -->
<div class="dept-card bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between relative group" data-name="Produit Design Yasmine Trabelsi UX UI Figma Agile">
<div class="space-y-4">
<!-- Top Tag & Options -->
<div class="flex items-start justify-between">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
<span class="font-label-sm text-label-sm uppercase font-semibold text-secondary">Expérience &amp; Conception</span>
</div>
<div class="flex items-center gap-1">
<span class="px-2 py-0.5 rounded-full bg-surface-container font-numeric-md text-label-sm text-on-surface font-semibold">8 Collaborateurs</span>
<button class="text-on-surface-variant hover:text-on-surface p-1 rounded-lg hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined text-body-md">more_vert</span>
</button>
</div>
</div>
<!-- Title & Description -->
<div>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">Produit &amp; Design</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Recherche utilisateurs, Design System multiplateforme, roadmap fonctionnelle et discovery continue.</p>
</div>
<!-- Manager Row -->
<div class="bg-surface-container-low p-3 rounded-xl flex items-center justify-between">
<div class="flex items-center gap-3 min-w-0">
<img class="w-10 h-10 rounded-full object-cover shrink-0 shadow-sm" data-alt="Portrait of a modern Tunisian woman product leader wearing minimalist elegant attire in a creative studio office." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPlxZNjAN4qo5HYsVg3NC46qejJF8bgido5s3uArIB0U86ZDrdSo2DSlSzUjtRisnUOUMlgQ5GEm6uEUiRgKIUsOwSj_Ac-u0Rx7ubkXWw5AuWNU7D-WgSu_QxxdmE4gzcBZ0otFq-vwXud2CerTvctSPoeY9ODasVhbqsLnRdP7PHj8kFEX_Q1_AKHIsAmcNjTrDlerAaJBlrsH3cKcRkeO0iL5dk-sB_PNL17OyvkucFfUHQeBcL"/>
<div class="flex flex-col min-w-0">
<span class="font-label-md text-label-md text-on-surface font-bold truncate">Yasmine Trabelsi</span>
<span class="font-label-sm text-label-sm text-on-surface-variant truncate">Head of Product • y.trabelsi@carthagetech.tn</span>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant text-body-md shrink-0 ml-2">mail</span>
</div>
<!-- Sub-poles & Tags -->
<div class="space-y-2">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant">Spécialisations :</span>
<span class="font-semibold text-on-surface">UI/UX, Product Management</span>
</div>
<div class="flex flex-wrap gap-1.5 pt-1">
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Figma</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Design Tokens</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">User Research</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Agile PO</span>
</div>
</div>
<!-- Workload & Budget metrics -->
<div class="space-y-2 pt-2">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant">Taux d'occupation</span>
<span class="font-numeric-md font-bold text-on-surface">84%</span>
</div>
<div class="w-full h-1.5 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-secondary rounded-full" style="width: 84%"></div>
</div>
<div class="flex items-center justify-between pt-1">
<span class="font-label-sm text-label-sm text-on-surface-variant">Budget Salarial Mensuel</span>
<span class="font-numeric-md text-body-sm font-bold text-on-surface">28,100 TND</span>
</div>
</div>
</div>
<!-- Footer / Quick Links -->
<div class="pt-5 mt-4 flex items-center justify-between">
<div class="flex -space-x-2 overflow-hidden items-center">
<img class="inline-block h-6 w-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Close up face of an innovative North African UI designer with headset working in design sprint." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrML-sMn6wI3XhdAjzbtFJNKO4ayQAQTfHfsKl3wZp1xHYVBb_bAXNWXR138GBgRZ_2Ibh_DEiM8NqdwsGvWYtU8LrNQ4sb8W2tj_5xo_hE72GxATfRxhFSxNdthThKMKG2IS1hZ59pB0ZEQ7YcRCiAdjakp3kcdrO6-qZg82FFvaHfkH4Pl3py0veHuCCbNzzoNchJW89E4L7BGczqm6_kIRzg6-g55hWCFoFqWPg_knecr2TU20j"/>
<img class="inline-block h-6 w-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Young North African product owner in office checking backlog metrics on monitor." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiCtFZfmHLHQwA7mKttI7MW4LGVS0OcjS6JwKdyIyH1xZI2OlQp3Ix4GlRvqOcxUMnaw2o6vZ76699KbELQk2WON7Dr65VdGULzK6GUpXcB40eangLHBmo2LYzS9ra_oyzTtFVBR8pxTUc8hR2bFPa_U8ncczOsRcPOGDZPvXw5oQGK62JQztz7Q7zP5AsoG8PEwB8PO-gaKHCcceKDFtP82Ickf4JsSswuMVuhhjHGENvmk3Jd8FU"/>
<span class="inline-flex items-center justify-center h-6 w-6 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-bold ring-2 ring-surface-container-lowest">+6</span>
</div>
<div class="flex items-center gap-1">
<button class="px-2.5 py-1 rounded-lg text-primary hover:bg-surface-container-low font-label-sm text-label-sm font-semibold transition-colors">Voir l'équipe</button>
<button class="p-1 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-colors" title="Paramètres">
<span class="material-symbols-outlined text-body-sm">settings</span>
</button>
</div>
</div>
</div>
<!-- Card 3: Commercial & Marketing -->
<div class="dept-card bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between relative group" data-name="Commercial Marketing Karim Chaabane Sales B2B Growth CRM Hubspot">
<div class="space-y-4">
<!-- Top Tag & Options -->
<div class="flex items-start justify-between">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span>
<span class="font-label-sm text-label-sm uppercase font-semibold text-tertiary">Développement Marché</span>
</div>
<div class="flex items-center gap-1">
<span class="px-2 py-0.5 rounded-full bg-surface-container font-numeric-md text-label-sm text-on-surface font-semibold">11 Collaborateurs</span>
<button class="text-on-surface-variant hover:text-on-surface p-1 rounded-lg hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined text-body-md">more_vert</span>
</button>
</div>
</div>
<!-- Title & Description -->
<div>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">Commercial &amp; Marketing</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Prospection B2B Tunisie &amp; Export (MENA/Europe), partenariats stratégiques et acquisition digitale.</p>
</div>
<!-- Manager Row -->
<div class="bg-surface-container-low p-3 rounded-xl flex items-center justify-between">
<div class="flex items-center gap-3 min-w-0">
<img class="w-10 h-10 rounded-full object-cover shrink-0 shadow-sm" data-alt="Portrait of a distinguished Tunisian commercial director with suit in modern boardroom overlooking Tunis lake." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfOQ6swcdeVjja51SjVgX2JqZU7XR8gzsvFEvsXPr5D2WucOXM09bvXa8Z-zoe6tg8ip8WK2IJUOnWh5Ek1nqis9sufwtOpDBkQ707rs1OlcsilnzJv29jEUzEEPRqFa4VwZ8F8twv4vXhnA2fJQUjbieacOP_ZhAtvEvyN9Ze8iWhyzT_nexpwIhPMmqgwN-DNHmvhF2eG2FtxfIXLD2j1BaAPj71KXc26bbJwVNPbU3RS8rsh-J0"/>
<div class="flex flex-col min-w-0">
<span class="font-label-md text-label-md text-on-surface font-bold truncate">Karim Chaabane</span>
<span class="font-label-sm text-label-sm text-on-surface-variant truncate">Directeur Commercial • k.chaabane@carthagetech.tn</span>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant text-body-md shrink-0 ml-2">mail</span>
</div>
<!-- Sub-poles & Tags -->
<div class="space-y-2">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant">3 Pôles d'activité :</span>
<span class="font-semibold text-on-surface">Sales B2B, Growth, Support</span>
</div>
<div class="flex flex-wrap gap-1.5 pt-1">
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Hubspot CRM</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Grands Comptes</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">SaaS Sales</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Growth Inbound</span>
</div>
</div>
<!-- Workload & Budget metrics -->
<div class="space-y-2 pt-2">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant">Objectif T1 Atteint</span>
<span class="font-numeric-md font-bold text-tertiary">104%</span>
</div>
<div class="w-full h-1.5 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-tertiary rounded-full" style="width: 100%"></div>
</div>
<div class="flex items-center justify-between pt-1">
<span class="font-label-sm text-label-sm text-on-surface-variant">Budget Salarial Mensuel</span>
<span class="font-numeric-md text-body-sm font-bold text-on-surface">31,500 TND</span>
</div>
</div>
</div>
<!-- Footer / Quick Links -->
<div class="pt-5 mt-4 flex items-center justify-between">
<div class="flex -space-x-2 overflow-hidden items-center">
<img class="inline-block h-6 w-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Portrait of an energetic North African female account executive with tablet in customer lounge." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBllp770cB2omUCHjA7E7981FkO6ZUXp27Lh7GfswLLhMwExH8t01SPiaPan-1bJeHaP_shqCFhOrBR9zQIskwmzeN73IoktfZVQS89799utPH2fbSmv3KZ6IeilpeVVwjWXTrqGNAdvDs7dCG-eCuIV6i7OX3r2DuTdp9SjKC4_Q2WBN1_0lOTCSdZ6wdsE-czmiamfUVlvHfQoec7xJVdHN0MKToMwAZlI28bmZkMhgamm1yGICyi"/>
<img class="inline-block h-6 w-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Portrait of an international business developer specialist in business casual shirt." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCcDQgsIsHNV6SB_O69LqNR2xc15pXGi7PZs2IEJtkxRbt0xpjNROi5h1mlnX5vdTOr_YrO7m9RkK2KibDf6O1aiLXA_vhuRbiclMPWhLsc2tc5atNr9mepjCwtpSez3MjratYir_hzvuLSWpWh2YwmbfeGFpfhPshKLzfS8fC5l6A0sKvv8Vp1shFOGQa-QJhY-BaWNtkdKdiZrYnTyygK-AP9jrFyh1eg0XjV5QoX2gW84Al9UvCQ"/>
<span class="inline-flex items-center justify-center h-6 w-6 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-bold ring-2 ring-surface-container-lowest">+9</span>
</div>
<div class="flex items-center gap-1">
<button class="px-2.5 py-1 rounded-lg text-primary hover:bg-surface-container-low font-label-sm text-label-sm font-semibold transition-colors">Voir l'équipe</button>
<button class="p-1 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-colors" title="Paramètres">
<span class="material-symbols-outlined text-body-sm">settings</span>
</button>
</div>
</div>
</div>
<!-- Card 4: Finance, Comptabilité & Juridique -->
<div class="dept-card bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between relative group" data-name="Finance Comptabilité Juridique Nour El Houda Karray Fiscal CNSS Audit">
<div class="space-y-4">
<!-- Top Tag & Options -->
<div class="flex items-start justify-between">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-outline"></span>
<span class="font-label-sm text-label-sm uppercase font-semibold text-on-surface-variant">Conformité Légale</span>
</div>
<div class="flex items-center gap-1">
<span class="px-2 py-0.5 rounded-full bg-surface-container font-numeric-md text-label-sm text-on-surface font-semibold">6 Collaborateurs</span>
<button class="text-on-surface-variant hover:text-on-surface p-1 rounded-lg hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined text-body-md">more_vert</span>
</button>
</div>
</div>
<!-- Title & Description -->
<div>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">Finance, Comptabilité &amp; Juridique</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Supervision de la paie tunisienne, déclarations trimestrielles CNSS, fiscalité et conformité contractuelle.</p>
</div>
<!-- Manager Row -->
<div class="bg-surface-container-low p-3 rounded-xl flex items-center justify-between">
<div class="flex items-center gap-3 min-w-0">
<img class="w-10 h-10 rounded-full object-cover shrink-0 shadow-sm" data-alt="Portrait of an experienced Tunisian female Chief Financial Officer in dark tailleur reviewing corporate balance sheets in modern office." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpG-0e5K7dRjvi_fmyHPEN_QudrEyjcOaYkjjLayQR-ZiIwfMefJhybb5p7J4KVO1HL13Wrl6W850KQazEdL6oT3vlFb_GQ8VZQmd2YDOSY7tpsfxUqYsO_cDD6NRA0ZEjDG5QJOpXD4QCkG4rQofpmp87ZOe8QtH0vSlnv83hf7St75bYYVYbKpzbIEZxRtf2SdfcrMUbRM1bheUHhXpYOhJZmlPcAOPLFw0prtGyVPQTptBWaF-B"/>
<div class="flex flex-col min-w-0">
<span class="font-label-md text-label-md text-on-surface font-bold truncate">Nour El Houda Karray</span>
<span class="font-label-sm text-label-sm text-on-surface-variant truncate">Directrice Financière • n.karray@carthagetech.tn</span>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant text-body-md shrink-0 ml-2">mail</span>
</div>
<!-- Sub-poles & Tags -->
<div class="space-y-2">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant">Périmètres :</span>
<span class="font-semibold text-on-surface">Paie, CNSS &amp; Fiscalité</span>
</div>
<div class="flex flex-wrap gap-1.5 pt-1">
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Code Travail TN</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Déclaration CNSS</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Audit Fiscal</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Sage / IFRS</span>
</div>
</div>
<!-- Workload & Budget metrics -->
<div class="space-y-2 pt-2">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant">Audit Conformité</span>
<span class="font-numeric-md font-bold text-tertiary">100% à jour</span>
</div>
<div class="w-full h-1.5 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-tertiary-container rounded-full" style="width: 100%"></div>
</div>
<div class="flex items-center justify-between pt-1">
<span class="font-label-sm text-label-sm text-on-surface-variant">Budget Salarial Mensuel</span>
<span class="font-numeric-md text-body-sm font-bold text-on-surface">17,200 TND</span>
</div>
</div>
</div>
<!-- Footer / Quick Links -->
<div class="pt-5 mt-4 flex items-center justify-between">
<div class="flex -space-x-2 overflow-hidden items-center">
<img class="inline-block h-6 w-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Portrait of a Tunisian certified public accountant working with ledger documents in bright accounting department." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrFQJXqEYqr99-pJHJKm3mE7sghSEUgyZyfPC3wc0LtH99P6XBGFXpcyGqn0lb15segYz6ySVqi4Ko-BzebgmpHQbKWMfq_lSjBHu0PUpk8fUAYCKugh7IwvWogMCNf-XItpD9GEcOYh8NZbSZpF22B9i4Zwu29om_MuKLy9ayGzT8oah3GtyQHnzenwk6ep0qwLG7CZXDmHjzUXYu94q668UaYTvXfgwHeDQjiA6xTFodwxXqvRQf"/>
<img class="inline-block h-6 w-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Portrait of a young Tunisian legal counsel female specialist smiling professionally." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHHmEZzOELvHQz44HusWZwjN3bfFveq2nlhSpAV3pX41Qsx6VsxGv0OGh6LfDJfuQ4FQAfHaIaW2KJnzF5vs0Y_MS4Xr829xH2JuXZakrhr3by4lOD_6UGLBrcFG3gfgxi66DZ2muGJEtoVwZk-d0BeIXK35OYqkBHZY33Dz68qoMLfFNLAcKh9GJky8bShqSdXLodQQZbNhIfgFbvxhB98CPtRXPp-D7d7q0kDVJc4L1dfs1e_E3U"/>
<span class="inline-flex items-center justify-center h-6 w-6 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-bold ring-2 ring-surface-container-lowest">+4</span>
</div>
<div class="flex items-center gap-1">
<button class="px-2.5 py-1 rounded-lg text-primary hover:bg-surface-container-low font-label-sm text-label-sm font-semibold transition-colors">Voir l'équipe</button>
<button class="p-1 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-colors" title="Paramètres">
<span class="material-symbols-outlined text-body-sm">settings</span>
</button>
</div>
</div>
</div>
<!-- Card 5: Ressources Humaines & Opérations -->
<div class="dept-card bg-surface-container-lowest rounded-xl p-6 shadow-sm hover:shadow-md transition-all flex flex-col justify-between relative group" data-name="Ressources Humaines Opérations Sonia Mezghani Recrutement Talents Carrières">
<div class="space-y-4">
<!-- Top Tag & Options -->
<div class="flex items-start justify-between">
<div class="flex items-center gap-2">
<span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
<span class="font-label-sm text-label-sm uppercase font-semibold text-primary">Capital Humain</span>
</div>
<div class="flex items-center gap-1">
<span class="px-2 py-0.5 rounded-full bg-surface-container font-numeric-md text-label-sm text-on-surface font-semibold">5 Collaborateurs</span>
<button class="text-on-surface-variant hover:text-on-surface p-1 rounded-lg hover:bg-surface-container transition-colors">
<span class="material-symbols-outlined text-body-md">more_vert</span>
</button>
</div>
</div>
<!-- Title & Description -->
<div>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">Ressources Humaines &amp; Opérations</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Recrutement des talents tech, onboarding, gestion des congés, climat social et plans de formation continue.</p>
</div>
<!-- Manager Row -->
<div class="bg-surface-container-low p-3 rounded-xl flex items-center justify-between">
<div class="flex items-center gap-3 min-w-0">
<img class="w-10 h-10 rounded-full object-cover shrink-0 shadow-sm" data-alt="Portrait of an approachable female HR manager in Tunisia with stylish professional attire welcoming a candidate." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAET3_dzGWu_fBp_AlhIaLBGvuyYSnwBkovoQ0HU4YKbd4-HKBMuNFVydAVDvZr7zUptqmQ1Gg3hjuLSH6UEkqELbBhmeEHSWm8IFFYwi6rUqg-ipH1L2q-eRyZ0KcDpJ1CtVUAAz1wVyVHHGp0SiNxeVmSk42TRMH0p5HAHNdN50QO2jR1YXLYBsVOnrsL84TQxEKMcO2ZWjnFGlmIWJr02e0cVBeZrtzq93rKfbVQw6ZNhjef3SRG"/>
<div class="flex flex-col min-w-0">
<span class="font-label-md text-label-md text-on-surface font-bold truncate">Sonia Mezghani</span>
<span class="font-label-sm text-label-sm text-on-surface-variant truncate">People Ops Manager • s.mezghani@carthagetech.tn</span>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant text-body-md shrink-0 ml-2">mail</span>
</div>
<!-- Sub-poles & Tags -->
<div class="space-y-2">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant">Focus Stratégique :</span>
<span class="font-semibold text-on-surface">Rétention &amp; Recrutement</span>
</div>
<div class="flex flex-wrap gap-1.5 pt-1">
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Recrutement Tech</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Législation CNSS</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Évaluations 360</span>
<span class="px-2 py-0.5 rounded-md bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Wellbeing</span>
</div>
</div>
<!-- Workload & Budget metrics -->
<div class="space-y-2 pt-2">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant">Postes Ouverts</span>
<span class="font-numeric-md font-bold text-primary">3 En cours</span>
</div>
<div class="w-full h-1.5 bg-surface-container rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 60%"></div>
</div>
<div class="flex items-center justify-between pt-1">
<span class="font-label-sm text-label-sm text-on-surface-variant">Budget Salarial Mensuel</span>
<span class="font-numeric-md text-body-sm font-bold text-on-surface">13,650 TND</span>
</div>
</div>
</div>
<!-- Footer / Quick Links -->
<div class="pt-5 mt-4 flex items-center justify-between">
<div class="flex -space-x-2 overflow-hidden items-center">
<img class="inline-block h-6 w-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Portrait of an optimistic Tunisian talent acquisition specialist at her laptop in a contemporary co-working lounge." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5bpzm4EaB2tDrvQB2Kz-MniV5XhVsWBVAL88OQywq7GzgQVf3QzRob_YcJvJLNf2Me5jC0brHdRZStNduWVYmV0aGjvgGkBnTGdun0mLgOE2hQP4hwgVI6u4029JQhtXH7y9V-GmxuuWLJiv1zpTboNrBUZYPcVhCHHtSR1sDrp3OfFYrbZQe7yQEblau3LBbudn7fec9Jm1EpJ8XNrqU89zSpqKV0S5zI5wVIJdw9RKWXETLNgtH"/>
<img class="inline-block h-6 w-6 rounded-full ring-2 ring-surface-container-lowest object-cover" data-alt="Portrait of an HR operations officer handling onboarding files in a bright office." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8I_Gk1ZMWF4eq4f14UQW7tRlGh0YeGgpBm9jKcJCFofJaSQHgT7Uu1aV4CtLX6TRjZvrgdxCKJ_LySgiFGPgcoZ8JTQ_MTBR4yHZTNhfGC38RKnENSqW4AfWTVYVSAWc2ydEOUkatjwcI9FIXn4hpxEYW1PUAWsbZAGHqVYmH_6ih92iMEEWLyvHfEc23I5fvIM83_GBGbhve6XqWW2_ve5cpP-4AR8jk67sFn-F_9JTSKE_wD15I"/>
<span class="inline-flex items-center justify-center h-6 w-6 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-bold ring-2 ring-surface-container-lowest">+3</span>
</div>
<div class="flex items-center gap-1">
<button class="px-2.5 py-1 rounded-lg text-primary hover:bg-surface-container-low font-label-sm text-label-sm font-semibold transition-colors">Voir l'équipe</button>
<button class="p-1 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-colors" title="Paramètres">
<span class="material-symbols-outlined text-body-sm">settings</span>
</button>
</div>
</div>
</div>
<!-- Add Department Quick Placeholder Tile -->
<div class="border-2 border-dashed border-outline-variant/60 rounded-xl p-6 flex flex-col items-center justify-center text-center space-y-3 hover:border-primary transition-colors cursor-pointer group bg-surface/40 hover:bg-surface-container-low" onclick="document.getElementById('newDeptModal').classList.remove('hidden')">
<div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant group-hover:bg-primary-container group-hover:text-on-primary transition-all">
<span class="material-symbols-outlined text-headline-md">add</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Créer une structure</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-xs mt-1">Définissez un nouveau département, assignez un lead et associez une ligne budgétaire.</p>
</div>
<span class="font-label-md text-label-md text-primary font-bold group-hover:underline">Ajouter un département →</span>
</div>
</div>
</div>
<!-- VIEW 2: HIERARCHICAL ORG TREE (Hidden by default, toggled via JS) -->
<div class="hidden flex-col space-y-6" id="treeContainer">
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm overflow-x-auto">
<div class="min-w-[900px] flex flex-col items-center py-6">
<!-- Level 0: Direction Générale -->
<div class="flex flex-col items-center">
<div class="bg-surface-container-low p-4 rounded-xl shadow-sm border border-outline-variant/30 w-72 flex items-center gap-3">
<img class="w-12 h-12 rounded-full object-cover shadow-sm shrink-0" data-alt="Executive portrait of a distinguished Tunisian CEO in clean modern navy suit, thoughtful posture in upscale Tunis office." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkV2umn0tezmOGfxmfXyMxanbOja3bgaIP5iw0H5ym-RfIUJYT3dJ9RCZnub-By_Cd_SMOX3hnp4C_hj3ML8HB4DW3bnaO7H7yEvTiSxXzddm4n56m5dcB9yzt5MEH_NQWKv0H79w7_zAS3KZSkKG1zdad8aNDeda_v3a7YelGoX3bcvy1aArasDQSS1XY0JQ_Y5EU9lO_kHv0uORC9rHN5lZBlFkEcm9JMD2BJSy__2DlF_1XI4b4"/>
<div class="flex flex-col min-w-0">
<span class="font-label-sm text-label-sm text-primary font-bold uppercase">Direction Générale</span>
<span class="font-label-lg text-label-lg text-on-surface font-bold truncate">Tarek Ben Ammar</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Président Directeur Général</span>
</div>
</div>
<!-- Connecting stem -->
<div class="w-0.5 h-8 bg-outline-variant"></div>
</div>
<!-- Cross Branch Line -->
<div class="w-[820px] h-0.5 bg-outline-variant"></div>
<!-- Level 1: Department Directors (5 branches) -->
<div class="w-[850px] flex justify-between pt-0">
<!-- Branch 1: Tech -->
<div class="flex flex-col items-center">
<div class="w-0.5 h-6 bg-outline-variant"></div>
<div class="bg-surface-container-lowest p-3 rounded-xl shadow-sm border border-outline-variant/30 w-40 flex flex-col items-center text-center">
<span class="w-2 h-2 rounded-full bg-primary-container mb-1"></span>
<span class="font-label-sm text-label-sm font-bold text-on-surface">Ingénierie Tech</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">M. Ben Salem</span>
<span class="mt-1 px-2 py-0.5 rounded-full bg-surface-container-low font-numeric-md text-label-sm font-semibold">18 pers.</span>
</div>
<!-- Sub specialists mini stem -->
<div class="w-0.5 h-4 bg-outline-variant"></div>
<div class="bg-surface-container-low p-2 rounded-lg text-center w-36">
<p class="font-label-sm text-label-sm text-on-surface-variant">DevOps • Arch • Devs</p>
</div>
</div>
<!-- Branch 2: Product -->
<div class="flex flex-col items-center">
<div class="w-0.5 h-6 bg-outline-variant"></div>
<div class="bg-surface-container-lowest p-3 rounded-xl shadow-sm border border-outline-variant/30 w-40 flex flex-col items-center text-center">
<span class="w-2 h-2 rounded-full bg-secondary mb-1"></span>
<span class="font-label-sm text-label-sm font-bold text-on-surface">Produit &amp; Design</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Y. Trabelsi</span>
<span class="mt-1 px-2 py-0.5 rounded-full bg-surface-container-low font-numeric-md text-label-sm font-semibold">8 pers.</span>
</div>
<div class="w-0.5 h-4 bg-outline-variant"></div>
<div class="bg-surface-container-low p-2 rounded-lg text-center w-36">
<p class="font-label-sm text-label-sm text-on-surface-variant">UI/UX • Product Leads</p>
</div>
</div>
<!-- Branch 3: Sales -->
<div class="flex flex-col items-center">
<div class="w-0.5 h-6 bg-outline-variant"></div>
<div class="bg-surface-container-lowest p-3 rounded-xl shadow-sm border border-outline-variant/30 w-40 flex flex-col items-center text-center">
<span class="w-2 h-2 rounded-full bg-tertiary mb-1"></span>
<span class="font-label-sm text-label-sm font-bold text-on-surface">Commercial</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">K. Chaabane</span>
<span class="mt-1 px-2 py-0.5 rounded-full bg-surface-container-low font-numeric-md text-label-sm font-semibold">11 pers.</span>
</div>
<div class="w-0.5 h-4 bg-outline-variant"></div>
<div class="bg-surface-container-low p-2 rounded-lg text-center w-36">
<p class="font-label-sm text-label-sm text-on-surface-variant">Account Execs • B2B</p>
</div>
</div>
<!-- Branch 4: Finance -->
<div class="flex flex-col items-center">
<div class="w-0.5 h-6 bg-outline-variant"></div>
<div class="bg-surface-container-lowest p-3 rounded-xl shadow-sm border border-outline-variant/30 w-40 flex flex-col items-center text-center">
<span class="w-2 h-2 rounded-full bg-outline mb-1"></span>
<span class="font-label-sm text-label-sm font-bold text-on-surface">Finance &amp; Juridique</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">N. Karray</span>
<span class="mt-1 px-2 py-0.5 rounded-full bg-surface-container-low font-numeric-md text-label-sm font-semibold">6 pers.</span>
</div>
<div class="w-0.5 h-4 bg-outline-variant"></div>
<div class="bg-surface-container-low p-2 rounded-lg text-center w-36">
<p class="font-label-sm text-label-sm text-on-surface-variant">Paie • CNSS • Audit</p>
</div>
</div>
<!-- Branch 5: HR -->
<div class="flex flex-col items-center">
<div class="w-0.5 h-6 bg-outline-variant"></div>
<div class="bg-surface-container-lowest p-3 rounded-xl shadow-sm border border-outline-variant/30 w-40 flex flex-col items-center text-center">
<span class="w-2 h-2 rounded-full bg-primary mb-1"></span>
<span class="font-label-sm text-label-sm font-bold text-on-surface">Ressources Humaines</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">S. Mezghani</span>
<span class="mt-1 px-2 py-0.5 rounded-full bg-surface-container-low font-numeric-md text-label-sm font-semibold">5 pers.</span>
</div>
<div class="w-0.5 h-4 bg-outline-variant"></div>
<div class="bg-surface-container-low p-2 rounded-lg text-center w-36">
<p class="font-label-sm text-label-sm text-on-surface-variant">Recrutement • Ops</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Tunisian Regulatory & Payroll Cross-Department Breakdown -->
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm space-y-4">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Répartition Budgétaire &amp; Conformité Sociale (Tunisie)</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Consolidation des charges patronales CNSS (16.57%) et accidents de travail (0.5%) par département pour l'exercice 2025.</p>
</div>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 rounded-lg bg-surface-container-low hover:bg-surface-container font-label-md text-label-md text-on-surface flex items-center gap-1.5 transition-colors">
<span class="material-symbols-outlined text-body-sm">download</span>
<span>Exporter CSV / PDF</span>
</button>
</div>
</div>
<!-- Interactive mini table -->
<div class="overflow-x-auto">
<table class="w-full text-left font-body-sm text-body-sm">
<thead>
<tr class="bg-surface-container-low text-on-surface-variant font-label-md text-label-md uppercase">
<th class="py-3 px-4 rounded-l-lg">Département</th>
<th class="py-3 px-4">Responsable</th>
<th class="py-3 px-4 text-center">Effectif</th>
<th class="py-3 px-4 text-right">Salaire Brut Total</th>
<th class="py-3 px-4 text-right">Cotisations CNSS (Patronal)</th>
<th class="py-3 px-4 text-center rounded-r-lg">Statut Conformité</th>
</tr>
</thead>
<tbody class="text-on-surface divide-y divide-surface-container">
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-3.5 px-4 font-semibold flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-primary-container"></span>
<span>Ingénierie &amp; Tech</span>
</td>
<td class="py-3.5 px-4">Mohamed Ben Salem</td>
<td class="py-3.5 px-4 text-center font-numeric-md">18</td>
<td class="py-3.5 px-4 text-right font-numeric-md font-semibold">62,400.000 TND</td>
<td class="py-3.5 px-4 text-right font-numeric-md text-on-surface-variant">10,339.680 TND</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-label-sm bg-tertiary/10 text-tertiary font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                Conforme
              </span>
</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-3.5 px-4 font-semibold flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-secondary"></span>
<span>Produit &amp; Design</span>
</td>
<td class="py-3.5 px-4">Yasmine Trabelsi</td>
<td class="py-3.5 px-4 text-center font-numeric-md">8</td>
<td class="py-3.5 px-4 text-right font-numeric-md font-semibold">28,100.000 TND</td>
<td class="py-3.5 px-4 text-right font-numeric-md text-on-surface-variant">4,656.170 TND</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-label-sm bg-tertiary/10 text-tertiary font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                Conforme
              </span>
</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-3.5 px-4 font-semibold flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
<span>Commercial &amp; Marketing</span>
</td>
<td class="py-3.5 px-4">Karim Chaabane</td>
<td class="py-3.5 px-4 text-center font-numeric-md">11</td>
<td class="py-3.5 px-4 text-right font-numeric-md font-semibold">31,500.000 TND</td>
<td class="py-3.5 px-4 text-right font-numeric-md text-on-surface-variant">5,219.550 TND</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-label-sm bg-tertiary/10 text-tertiary font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                Conforme
              </span>
</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-3.5 px-4 font-semibold flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-outline"></span>
<span>Finance, Comptabilité &amp; Juridique</span>
</td>
<td class="py-3.5 px-4">Nour El Houda Karray</td>
<td class="py-3.5 px-4 text-center font-numeric-md">6</td>
<td class="py-3.5 px-4 text-right font-numeric-md font-semibold">17,200.000 TND</td>
<td class="py-3.5 px-4 text-right font-numeric-md text-on-surface-variant">2,850.040 TND</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-label-sm bg-tertiary/10 text-tertiary font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                Conforme
              </span>
</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-3.5 px-4 font-semibold flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-primary"></span>
<span>Ressources Humaines &amp; Opérations</span>
</td>
<td class="py-3.5 px-4">Sonia Mezghani</td>
<td class="py-3.5 px-4 text-center font-numeric-md">5</td>
<td class="py-3.5 px-4 text-right font-numeric-md font-semibold">13,650.000 TND</td>
<td class="py-3.5 px-4 text-right font-numeric-md text-on-surface-variant">2,261.805 TND</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-label-sm bg-tertiary/10 text-tertiary font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                Conforme
              </span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- SLIDE-OVER MODAL: Nouveau Département -->
<div class="hidden fixed inset-0 z-50 overflow-hidden bg-on-surface/40 backdrop-blur-sm flex justify-end" id="newDeptModal">
<div class="w-full max-w-lg bg-surface-container-lowest h-full shadow-2xl p-6 flex flex-col justify-between overflow-y-auto">
<div class="space-y-6">
<div class="flex items-center justify-between pb-4 border-b border-surface-container">
<div>
<h2 class="font-headline-md text-headline-md text-on-surface font-bold">Nouveau Département</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Structuration organisationnelle • Carthage Tech</p>
</div>
<button class="p-1 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-colors" onclick="document.getElementById('newDeptModal').classList.add('hidden')">
<span class="material-symbols-outlined text-body-lg">close</span>
</button>
</div>
<div class="space-y-4">
<div class="space-y-1">
<label class="font-label-sm text-label-sm font-semibold text-on-surface">Intitulé du Département</label>
<input class="w-full h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm border border-outline-variant focus:border-primary focus:outline-none" placeholder="Ex: Data Intelligence &amp; IA" type="text"/>
</div>
<div class="space-y-1">
<label class="font-label-sm text-label-sm font-semibold text-on-surface">Responsable de Pôle (Lead)</label>
<select class="w-full h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm border border-outline-variant focus:border-primary focus:outline-none">
<option value="">Sélectionner un collaborateur...</option>
<option value="1">Mohamed Ben Salem (VP Eng)</option>
<option value="2">Yasmine Trabelsi (Head of Product)</option>
<option value="3">Karim Chaabane (Dir Commercial)</option>
<option value="4">Nour El Houda Karray (CFO)</option>
<option value="5">Sonia Mezghani (People Ops)</option>
</select>
</div>
<div class="space-y-1">
<label class="font-label-sm text-label-sm font-semibold text-on-surface">Code Analytique / Centre de Coûts</label>
<input class="w-full h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm border border-outline-variant focus:border-primary focus:outline-none" placeholder="Ex: CC-TECH-2025" type="text"/>
</div>
<div class="space-y-1">
<label class="font-label-sm text-label-sm font-semibold text-on-surface">Budget Mensuel Estimé (TND)</label>
<input class="w-full h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm border border-outline-variant focus:border-primary focus:outline-none" placeholder="25000" type="number"/>
</div>
<div class="space-y-1">
<label class="font-label-sm text-label-sm font-semibold text-on-surface">Missions &amp; Objectifs</label>
<textarea class="w-full p-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm border border-outline-variant focus:border-primary focus:outline-none" placeholder="Décrivez succinctement le périmètre opérationnel..." rows="3"></textarea>
</div>
</div>
</div>
<div class="pt-6 border-t border-surface-container flex items-center justify-end gap-3">
<button class="px-4 py-2 rounded-lg bg-surface-container-low font-label-md text-label-md text-on-surface hover:bg-surface-container transition-colors" onclick="document.getElementById('newDeptModal').classList.add('hidden')" type="button">
          Annuler
        </button>
<button class="px-4 py-2 rounded-lg bg-primary-container font-label-md text-label-md text-on-primary hover:bg-primary transition-colors" onclick="document.getElementById('newDeptModal').classList.add('hidden')" type="button">
          Enregistrer le Département
        </button>
</div>
</div>
</div>
<!-- Micro Interaction Script for Switch View & Search Filter -->
<script>
    function switchView(mode) {
      const gridBtn = document.getElementById('viewGridBtn');
      const treeBtn = document.getElementById('viewTreeBtn');
      const gridContainer = document.getElementById('gridContainer');
      const treeContainer = document.getElementById('treeContainer');

      if (mode === 'grid') {
        gridContainer.classList.remove('hidden');
        treeContainer.classList.add('hidden');
        gridBtn.className = 'flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm transition-all';
        treeBtn.className = 'flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-all';
      } else {
        gridContainer.classList.add('hidden');
        treeContainer.classList.remove('hidden');
        treeContainer.classList.add('flex');
        treeBtn.className = 'flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm transition-all';
        gridBtn.className = 'flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-all';
      }
    }

    function filterDepartments() {
      const query = document.getElementById('deptSearchInput').value.toLowerCase();
      const cards = document.querySelectorAll('.dept-card');
      cards.forEach(card => {
        const dataName = (card.getAttribute('data-name') || '').toLowerCase();
        if (dataName.includes(query)) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    }
  </script>
</div>
</x-admin-shell>
