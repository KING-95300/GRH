<x-admin-shell active="recruitment" title="Gestion du Recrutement & Candidatures">
<div class="flex flex-col w-full pb-16">
<!-- Top Ambient Glow (Scoped & Soft) -->
<div class="relative w-full overflow-hidden">
<div class="absolute -top-6 right-12 w-96 h-96 bg-primary/5 rounded-full blur-3xl pointer-events-none -z-10"></div>
<div class="absolute top-20 left-1/3 w-80 h-80 bg-tertiary-fixed/10 rounded-full blur-3xl pointer-events-none -z-10"></div>
</div>
<!-- Breadcrumbs & Meta Topline -->
<div class="flex items-center justify-between pt-space-lg mb-space-xs">
<div class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md">
<span class="hover:text-primary cursor-pointer transition-colors">Accueil</span>
<span class="material-symbols-outlined text-body-sm text-outline-variant">chevron_right</span>
<span class="text-on-surface font-semibold">Recrutement &amp; Talents</span>
<span class="ml-space-sm px-2 py-0.5 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm">Session Q1 2025</span>
</div>
<div class="hidden lg:flex items-center gap-space-sm">
<span class="w-2 h-2 rounded-full bg-tertiary-container animate-pulse"></span>
<span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Synchronisation ATS &amp; LinkedIn : <strong class="text-on-surface">Actif</strong> (Il y a 4 min)</span>
</div>
</div>
<!-- Primary Page Header & Executive Controls -->
<div class="flex flex-col xl:flex-row xl:items-end justify-between gap-space-lg pb-space-lg">
<div class="flex flex-col gap-1 min-w-0">
<div class="flex items-center gap-space-sm flex-wrap">
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight font-bold">
          Gestion du Recrutement &amp; Candidatures
        </h1>
<span class="px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-label-sm flex items-center gap-1 font-semibold">
<span class="material-symbols-outlined text-body-sm">apartment</span>
          Carthage Tech Solutions Tunis
        </span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
        Pilotage centralisé du flux de recrutement conforme aux conventions collectives tunisiennes. Pipeline actif des postes techniques, produit et administratifs.
      </p>
</div>
<!-- Actions & View Switcher -->
<div class="flex items-center gap-space-md shrink-0 flex-wrap">
<!-- Segmented View Toggle -->
<div class="inline-flex p-1 bg-surface-container rounded-xl shadow-inner">
<button class="flex items-center gap-1.5 px-space-md py-1.5 rounded-lg bg-surface-container-lowest text-primary font-label-lg text-label-lg font-semibold shadow-sm transition-all" type="button">
<span class="material-symbols-outlined text-body-md" style="font-variation-settings: 'FILL' 1;">view_kanban</span>
<span>Tableau Kanban</span>
</button>
<button class="flex items-center gap-1.5 px-space-md py-1.5 rounded-lg text-on-surface-variant hover:text-on-surface font-label-lg text-label-lg transition-all" type="button">
<span class="material-symbols-outlined text-body-md">work</span>
<span>Offres d'emploi</span>
<span class="px-1.5 py-0.2 rounded-full bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm font-semibold ml-0.5">5</span>
</button>
</div>
<!-- Action Button -->
<button class="h-10 px-space-lg rounded-xl bg-primary-container hover:bg-primary text-on-primary font-label-lg text-label-lg flex items-center gap-space-xs shadow-md shadow-primary/20 hover:shadow-lg transition-all active:scale-[0.98]" type="button">
<span class="material-symbols-outlined text-body-lg">person_add</span>
<span>+ Nouveau Recrutement / Offre</span>
</button>
</div>
</div>
<!-- Executive Quick Stats Strip -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-space-md mb-space-lg">
<!-- Stat 1 -->
<div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-between group hover:shadow-md transition-all">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant font-medium tracking-wide uppercase">Candidatures actives</span>
<div class="flex items-baseline gap-space-xs mt-1">
<span class="font-display-lg text-display-lg text-on-surface font-bold">42</span>
<span class="font-label-sm text-label-sm text-tertiary font-semibold flex items-center">
<span class="material-symbols-outlined text-body-sm">arrow_upward</span> +14%
          </span>
</div>
</div>
<div class="w-12 h-12 rounded-xl bg-secondary-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-headline-sm">groups</span>
</div>
</div>
<!-- Stat 2 -->
<div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-between group hover:shadow-md transition-all">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant font-medium tracking-wide uppercase">Entretiens cette semaine</span>
<div class="flex items-baseline gap-space-xs mt-1">
<span class="font-display-lg text-display-lg text-on-surface font-bold">08</span>
<span class="font-label-sm text-label-sm text-on-surface-variant font-medium">3 aujourd'hui</span>
</div>
</div>
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-primary-container">
<span class="material-symbols-outlined text-headline-sm">calendar_month</span>
</div>
</div>
<!-- Stat 3 -->
<div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-between group hover:shadow-md transition-all">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant font-medium tracking-wide uppercase">Offres en attente</span>
<div class="flex items-baseline gap-space-xs mt-1">
<span class="font-display-lg text-display-lg text-on-surface font-bold">03</span>
<span class="font-label-sm text-label-sm text-tertiary-container font-semibold">Validation DG</span>
</div>
</div>
<div class="w-12 h-12 rounded-xl bg-tertiary-fixed/30 flex items-center justify-center text-tertiary">
<span class="material-symbols-outlined text-headline-sm">fact_check</span>
</div>
</div>
<!-- Stat 4 -->
<div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-between group hover:shadow-md transition-all">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant font-medium tracking-wide uppercase">Embauches ce mois</span>
<div class="flex items-baseline gap-space-xs mt-1">
<span class="font-display-lg text-display-lg text-tertiary font-bold">02</span>
<span class="font-label-sm text-label-sm text-tertiary font-semibold flex items-center">
<span class="material-symbols-outlined text-body-sm">check_circle</span> 100% objectif
          </span>
</div>
</div>
<div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-tertiary">
<span class="material-symbols-outlined text-headline-sm">how_to_reg</span>
</div>
</div>
</div>
<!-- Filtration & Search Toolbar -->
<div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm mb-space-lg flex flex-col xl:flex-row items-center justify-between gap-space-md">
<!-- Search Bar with Shortcut -->
<div class="relative w-full xl:w-96">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-lg pointer-events-none">search</span>
<input class="w-full h-10 pl-10 pr-12 rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant focus:outline-none focus:bg-surface-container transition-colors" placeholder="Filtrer par candidat, poste, compétence (React, Go...)" type="text"/>
<span class="absolute right-3 top-1/2 -translate-y-1/2 font-label-sm text-label-sm text-on-surface-variant bg-surface-container-lowest px-1.5 py-0.5 rounded shadow-sm">/</span>
</div>
<!-- Dropdown Filters Group -->
<div class="flex items-center gap-space-sm w-full xl:w-auto flex-wrap sm:flex-nowrap">
<!-- Department Filter -->
<div class="relative flex-1 sm:flex-none">
<select class="h-10 pl-3 pr-8 rounded-lg bg-surface-container-low font-label-lg text-label-lg text-on-surface appearance-none focus:outline-none focus:bg-surface-container cursor-pointer w-full sm:w-auto">
<option>Département: Tous</option>
<option>Ingénierie &amp; R&amp;D</option>
<option>Produit &amp; Design</option>
<option>Commercial &amp; Marketing</option>
<option>Finance &amp; Opérations RH</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-md pointer-events-none">expand_more</span>
</div>
<!-- Contract Type Filter (Tunisian Legal Framework) -->
<div class="relative flex-1 sm:flex-none">
<select class="h-10 pl-3 pr-8 rounded-lg bg-surface-container-low font-label-lg text-label-lg text-on-surface appearance-none focus:outline-none focus:bg-surface-container cursor-pointer w-full sm:w-auto">
<option>Type de Contrat: Tous</option>
<option>CDI (Durée Indéterminée)</option>
<option>CDD (Durée Déterminée)</option>
<option>Stage SIVP (ANETI)</option>
<option>Contrat Karama</option>
<option>Consultance / Externe</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-md pointer-events-none">expand_more</span>
</div>
<!-- Provenance / Source -->
<div class="relative hidden md:block">
<select class="h-10 pl-3 pr-8 rounded-lg bg-surface-container-low font-label-lg text-label-lg text-on-surface appearance-none focus:outline-none focus:bg-surface-container cursor-pointer">
<option>Canal: Tous</option>
<option>LinkedIn Recruiter</option>
<option>Recommandation interne</option>
<option>Site Carrières Carthage Tech</option>
<option>Keejob / Tanitjobs</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-md pointer-events-none">expand_more</span>
</div>
<button class="h-10 w-10 flex items-center justify-center rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="Réinitialiser les filtres" type="button">
<span class="material-symbols-outlined text-body-lg">filter_alt_off</span>
</button>
</div>
</div>
<!-- Interactive Recruitment Kanban Board -->
<!-- 5 Columns Container with Horizontal Scroll fallback on mid-size screens -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 gap-space-md items-start">
<!-- COLUMN 1: Tri Initial -->
<div class="flex flex-col bg-surface-container-low rounded-xl p-space-sm shadow-sm min-w-0">
<!-- Column Header -->
<div class="p-space-sm flex items-center justify-between">
<div class="flex items-center gap-space-xs min-w-0">
<span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
<h2 class="font-label-lg text-label-lg text-on-surface font-bold truncate">Reçues / Tri Initial</h2>
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant font-semibold">8</span>
</div>
<button class="w-7 h-7 rounded-lg hover:bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface" type="button">
<span class="material-symbols-outlined text-body-md">more_horiz</span>
</button>
</div>
<!-- Cards Container -->
<div class="flex flex-col gap-space-sm mt-space-xs">
<!-- Candidate Card: Tarek Guediche -->
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all cursor-pointer group flex flex-col gap-space-sm relative overflow-hidden">
<div class="absolute top-0 left-0 bottom-0 w-1 bg-primary"></div>
<div class="flex items-start justify-between gap-space-sm">
<div class="flex items-center gap-space-sm min-w-0">
<img class="w-10 h-10 rounded-full object-cover shrink-0 ring-2 ring-surface-container" data-alt="Portrait professionnel soigné d'un jeune ingénieur tunisien moderne souriant en chemise sobre, éclairage naturel studio professionnel, palette douce et élégante" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3ipymPp66b2WPBRPbwa7sWeDKjESgluXi3efqeGaQiNN2rcNNbfRjr4vM4s2IDZwlYK6en3P6DTsDopNT7teJEARp2kheXwmD8nvzneqhdGhvTYewIgrjK1eNUCvmqcEenoDsHahh0u0X64Q8vyi-f3v9SKmdpNtebihicDwE7FXbrxGENiYLO6dIotAjy447P5ERllpu_PygrSDdxPs7E7QedXXAKEOYsPXLRhGat-G3Yj2JaLnZ"/>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-bold truncate group-hover:text-primary transition-colors">Tarek Guediche</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Senior React Native Dev</span>
</div>
</div>
<span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-label-sm font-bold shrink-0">Nouveau</span>
</div>
<!-- Matching Score & Provenance -->
<div class="flex items-center justify-between py-1 px-2 rounded-lg bg-surface-container-low font-label-sm text-label-sm">
<div class="flex items-center gap-1 text-tertiary font-bold">
<span class="material-symbols-outlined text-body-sm" style="font-variation-settings: 'FILL' 1;">bolt</span>
<span>Match 92%</span>
</div>
<span class="text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-body-sm">history_edu</span> Exp. 5 ans
            </span>
</div>
<!-- Tags -->
<div class="flex flex-wrap gap-1">
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-medium">TypeScript</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-medium">Redux Toolkit</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-medium">iOS / Android</span>
</div>
<!-- Meta Footnote -->
<div class="flex items-center justify-between pt-space-xs text-on-surface-variant font-label-sm text-label-sm">
<span class="flex items-center gap-1 truncate">
<span class="material-symbols-outlined text-body-sm text-primary">link</span> LinkedIn Talent
            </span>
<div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-1 hover:text-primary"><span class="material-symbols-outlined text-body-md">visibility</span></button>
<button class="p-1 hover:text-tertiary"><span class="material-symbols-outlined text-body-md">thumb_up</span></button>
</div>
</div>
</div>
<!-- Candidate Card: Marwa Belhaj -->
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all cursor-pointer group flex flex-col gap-space-sm relative overflow-hidden">
<div class="flex items-start justify-between gap-space-sm">
<div class="flex items-center gap-space-sm min-w-0">
<img class="w-10 h-10 rounded-full object-cover shrink-0 ring-2 ring-surface-container" data-alt="Portrait studio moderne d'une jeune femme designer produit tunisienne avec lunettes élégantes et expression bienveillante confiante, tons neutres et professionnels" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTMZOq-Ywzgnih2g84CQNBcthY3LdMt8nDsShswGeCNtfvjqChF36j2qsS29xgO_AIT6lvISqHcW94-cXiK8MRNjISACt2jKqafKkY8wpBQAMt4EfzRORX_RmWTiUsuSM_o4fZspuAk1nnNMb9e0s93LIRAcGQK6Mc7bLlHXg_4ZGTEpLZUks_mdzC35YpdfAklD9lAqlrJxA--GzN3XmgqM_RLsGWUX_oNNDpXbGO6ijtKW-N3qOV"/>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-bold truncate group-hover:text-primary transition-colors">Marwa Belhaj</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Product Designer UI/UX</span>
</div>
</div>
<button class="text-on-surface-variant hover:text-on-surface p-1"><span class="material-symbols-outlined text-body-md">more_vert</span></button>
</div>
<!-- Matching Score & Status -->
<div class="flex items-center justify-between py-1 px-2 rounded-lg bg-surface-container-low font-label-sm text-label-sm">
<div class="flex items-center gap-1 text-primary font-bold">
<span class="material-symbols-outlined text-body-sm" style="font-variation-settings: 'FILL' 1;">stars</span>
<span>Match 85%</span>
</div>
<span class="text-on-surface-variant font-medium">Contrat CDI visé</span>
</div>
<!-- Figma Attachment pill -->
<div class="flex items-center gap-space-xs p-1.5 rounded-lg bg-surface-container-high/60 text-on-surface font-label-sm text-label-sm">
<span class="material-symbols-outlined text-primary text-body-md">attach_file</span>
<span class="truncate font-medium">Portfolio Figma 2024.fig</span>
<span class="material-symbols-outlined text-body-sm ml-auto text-primary">open_in_new</span>
</div>
<!-- Tags & Provenance -->
<div class="flex items-center justify-between pt-space-xs text-on-surface-variant font-label-sm text-label-sm">
<span class="flex items-center gap-1 text-tertiary-container font-semibold truncate">
<span class="material-symbols-outlined text-body-sm">recommend</span> Recomm. Interne (S. Jebali)
            </span>
<span>Il y a 1j</span>
</div>
</div>
</div>
</div>
<!-- COLUMN 2: Évaluation RH / Téléphonique -->
<div class="flex flex-col bg-surface-container-low rounded-xl p-space-sm shadow-sm min-w-0">
<!-- Column Header -->
<div class="p-space-sm flex items-center justify-between">
<div class="flex items-center gap-space-xs min-w-0">
<span class="w-2.5 h-2.5 rounded-full bg-primary-container"></span>
<h2 class="font-label-lg text-label-lg text-on-surface font-bold truncate">Évaluation RH</h2>
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant font-semibold">6</span>
</div>
<button class="w-7 h-7 rounded-lg hover:bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface" type="button">
<span class="material-symbols-outlined text-body-md">more_horiz</span>
</button>
</div>
<!-- Cards Container -->
<div class="flex flex-col gap-space-sm mt-space-xs">
<!-- Candidate Card: Aziz Mansour -->
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all cursor-pointer group flex flex-col gap-space-sm relative overflow-hidden">
<div class="flex items-start justify-between gap-space-sm">
<div class="flex items-center gap-space-sm min-w-0">
<img class="w-10 h-10 rounded-full object-cover shrink-0 ring-2 ring-surface-container" data-alt="Portrait en milieu d'entreprise moderne d'un ingénieur cloud et DevOps nord-africain au regard déterminé, éclairage architectural chaleureux" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdibQA8mILekhdWsYswZJe3AzwnEyq70eO2doKzkYUHWgTbVY7165Vbc0hM5YaDwr3gLNV3zJsApjV9Kda19aetn25Mlqs-O09b72nK0gC6jjF-ZC3uviimbgUhMsaRxhoo7ai_vIZfl9_WTt-9HcQOySDaEz9T183ky1LoCzHuK-jzcFIrD2oMd-AIcIuLoyRnumlXrkkzATdRkvKn70Gi_KE30ZVBQsT0z1i8TJ5_UwzPMZ3mvXc"/>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-bold truncate group-hover:text-primary transition-colors">Aziz Mansour</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">DevOps AWS / Docker</span>
</div>
</div>
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed/30 text-tertiary font-label-sm text-label-sm font-bold shrink-0">88%</span>
</div>
<!-- Scheduled Interview Pill -->
<div class="flex items-center gap-2 p-2 rounded-lg bg-surface-container-high text-on-surface font-label-sm text-label-sm">
<span class="material-symbols-outlined text-primary text-body-md animate-pulse">event</span>
<div class="flex flex-col min-w-0">
<span class="font-semibold text-primary truncate">19 Mars • 10h00</span>
<span class="text-on-surface-variant text-label-sm">Amel Ben Salah (RH)</span>
</div>
</div>
<!-- Salary Claim -->
<div class="flex items-center justify-between text-label-sm text-on-surface-variant">
<span>Prétention salariale:</span>
<span class="font-numeric-md text-numeric-md text-on-surface font-bold">3,500 TND Net</span>
</div>
<div class="flex flex-wrap gap-1">
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Kubernetes</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Terraform</span>
</div>
</div>
<!-- Candidate Card: Selima Riahi -->
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all cursor-pointer group flex flex-col gap-space-sm relative overflow-hidden">
<div class="flex items-start justify-between gap-space-sm">
<div class="flex items-center gap-space-sm min-w-0">
<img class="w-10 h-10 rounded-full object-cover shrink-0 ring-2 ring-surface-container" data-alt="Portrait Corporate d'une responsable marketing tunisienne élégante et dynamique en blazer bleu marine, fond flou de bureaux technologiques" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBWuxqJWsdywoXJpPRk9k6sm_krV3be0yx3NeIirFr1unpZfyiiPyVUnZkZlB9-uD4nw_-8wH6YRhMJ2xqpGx0YaZh9NPz-wCCQCZisD3YMAVO2MRcl92bS3JMfAM90vQKao0Ycqyoje46ywYV7x6n5unoeaerQWlCHzgCeJonRqYQ6fftkm0wHPwFEC1-aKmWa0PssPk4fbevLFsw8MGf1SUiEM3Coa-OLmFG1yHvw4lVbjuCG2yl0"/>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-bold truncate group-hover:text-primary transition-colors">Selima Riahi</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Growth Marketer B2B</span>
</div>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-bold shrink-0">78%</span>
</div>
<!-- Availability Tag -->
<div class="flex items-center gap-1.5 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-body-sm">check_circle</span>
<span>Disponible immédiatement</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">
            Spécialiste acquisition SaaS B2B, expérience confirmée sur marchés Maghreb et France.
          </p>
<div class="flex items-center justify-between pt-space-xs font-label-sm text-label-sm text-on-surface-variant">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-body-sm">phone_in_talk</span> Appel prévu 20/03</span>
<span class="material-symbols-outlined text-body-sm">arrow_forward</span>
</div>
</div>
</div>
</div>
<!-- COLUMN 3: Entretien Technique / Métier -->
<div class="flex flex-col bg-surface-container-low rounded-xl p-space-sm shadow-sm min-w-0">
<!-- Column Header -->
<div class="p-space-sm flex items-center justify-between">
<div class="flex items-center gap-space-xs min-w-0">
<span class="w-2.5 h-2.5 rounded-full bg-surface-tint"></span>
<h2 class="font-label-lg text-label-lg text-on-surface font-bold truncate">Test &amp; Technique</h2>
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant font-semibold">4</span>
</div>
<button class="w-7 h-7 rounded-lg hover:bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface" type="button">
<span class="material-symbols-outlined text-body-md">more_horiz</span>
</button>
</div>
<!-- Cards Container -->
<div class="flex flex-col gap-space-sm mt-space-xs">
<!-- Candidate Card: Hichem Khemir (Top Performer) -->
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all cursor-pointer group flex flex-col gap-space-sm relative overflow-hidden ring-1 ring-tertiary-fixed">
<div class="flex items-start justify-between gap-space-sm">
<div class="flex items-center gap-space-sm min-w-0">
<img class="w-10 h-10 rounded-full object-cover shrink-0 ring-2 ring-surface-container" data-alt="Portrait d'un développeur senior tunisien avec barbe taillée et chemise sombre, style minimaliste moderne, éclairage soigné" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCC8w0G5OS6hHcgwWnPD9c8npcr3lBed_xpXZ1ljXZjdUD0m_dIBsBYHnDnxYSQDOBcyMJJ28L0CH3XEAM8GfcYU94Cy2zTnH4FcJo6UrXK0rc8-4opN3JpWu5jUKdSQsQmHzyN2bbuMZAC5TA8Ji1Vf14GR7mtpH4rNdC9XO4jH4EusqevOFTQWZubXt6hJJVbXQNXW5EH1kpZMa8SAgb9iTDJg9wvnE-wDv7ig7Il4IVrVWkm8KjG"/>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-bold truncate group-hover:text-primary transition-colors">Hichem Khemir</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Fullstack Go / Python</span>
</div>
</div>
<span class="px-2 py-0.5 rounded-full bg-tertiary text-on-tertiary font-label-sm text-label-sm font-bold shrink-0">95% Top</span>
</div>
<!-- Code Test Performance Gauge Component -->
<div class="p-2 rounded-lg bg-surface-container flex flex-col gap-1.5">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-body-sm text-tertiary">terminal</span> Score Algorithmique
              </span>
<span class="font-numeric-md text-numeric-md font-bold text-tertiary">88 / 100</span>
</div>
<div class="w-full bg-surface-container-high h-1.5 rounded-full overflow-hidden">
<div class="bg-tertiary h-full rounded-full" style="width: 88%"></div>
</div>
</div>
<div class="flex items-center justify-between text-label-sm text-on-surface-variant font-medium">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-body-sm">assignment_ind</span> Mohamed Ben Salem (CTO)</span>
<span class="px-1.5 py-0.5 rounded bg-surface-container font-mono text-[11px]">Go/gRPC</span>
</div>
</div>
<!-- Candidate Card: Rim Ayari -->
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all cursor-pointer group flex flex-col gap-space-sm relative overflow-hidden">
<div class="flex items-start justify-between gap-space-sm">
<div class="flex items-center gap-space-sm min-w-0">
<img class="w-10 h-10 rounded-full object-cover shrink-0 ring-2 ring-surface-container" data-alt="Portrait chaleureux d'une jeune financière et comptable tunisienne portant un foulard élégant contemporain dans un bureau vitré" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkttI-iZd2rVMvYcrNoxikmszjAkAGU_IuwmnMoMAvXGsw7uo2w-mH3D53Ri3LgkQexQ-sSmiLuoExvjo_NFj8rPBOsDtXZNSYSJB-CSywfPL1T2K6TfABo57ql6m-xuwIMMDy-SD7ESubra4GxiMiV2KZD8yKHsunq4L6pGyT-1lj9WWjMaSlUiife94RzZmVmtclsaeP602O4ehAKUKUvBQMwg68ukVYf28MBPP9IHAEr7pjFUvr"/>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-bold truncate group-hover:text-primary transition-colors">Rim Ayari</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Comptable Junior (SYSCOHADA)</span>
</div>
</div>
<span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-label-sm font-bold shrink-0">90%</span>
</div>
<div class="flex items-center gap-1.5 p-2 rounded-lg bg-surface-container-low font-label-sm text-label-sm text-on-surface">
<span class="material-symbols-outlined text-body-sm text-tertiary">verified</span>
<span class="truncate">Recommandation Expert-Comptable</span>
</div>
<div class="flex items-center justify-between pt-space-xs font-label-sm text-label-sm text-on-surface-variant">
<span>Contrat éligible: Karama</span>
<span class="text-primary font-semibold">Test Validé</span>
</div>
</div>
</div>
</div>
<!-- COLUMN 4: Proposition / Offre d'Embauche -->
<div class="flex flex-col bg-surface-container-low rounded-xl p-space-sm shadow-sm min-w-0">
<!-- Column Header -->
<div class="p-space-sm flex items-center justify-between">
<div class="flex items-center gap-space-xs min-w-0">
<span class="w-2.5 h-2.5 rounded-full bg-tertiary-fixed-dim"></span>
<h2 class="font-label-lg text-label-lg text-on-surface font-bold truncate">Offre d'Embauche</h2>
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant font-semibold">3</span>
</div>
<button class="w-7 h-7 rounded-lg hover:bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface" type="button">
<span class="material-symbols-outlined text-body-md">more_horiz</span>
</button>
</div>
<!-- Cards Container -->
<div class="flex flex-col gap-space-sm mt-space-xs">
<!-- Candidate Card: Bilel Cherif -->
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all cursor-pointer group flex flex-col gap-space-sm relative overflow-hidden">
<div class="absolute top-0 left-0 bottom-0 w-1 bg-tertiary"></div>
<div class="flex items-start justify-between gap-space-sm">
<div class="flex items-center gap-space-sm min-w-0">
<img class="w-10 h-10 rounded-full object-cover shrink-0 ring-2 ring-surface-container" data-alt="Portrait corporate d'un architecte système senior tunisien à l'allure affirmée, costume moderne décontracté, fond flou urbain de Tunis" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9b8WYahEpmshB1EuhlZLX1fBcXaLa4Xc79t6OskzRzPEeLL4zaEw6kP4XgLzOE54QQ5rpAE0xRmNhCc-g84Dxnk2IxcBhbGrdkW-OPSIfGzzJ47dP7l1Xn_KFjez9bBHYT7ACynOOGYVrtBYFcQM9J-CzD1618jcXkiwcjhDBSASpP-knXW2LEutCo1SbI8QxqTIOkCDKxyI6FRhDMC1y0OIhH5GB23Amu_DLN4N88_aT7hPoNcT-"/>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-bold truncate group-hover:text-primary transition-colors">Bilel Cherif</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Cloud Architect (CDI)</span>
</div>
</div>
<button class="text-on-surface-variant hover:text-on-surface"><span class="material-symbols-outlined text-body-md">more_vert</span></button>
</div>
<!-- Offer Highlights Pill -->
<div class="p-space-sm rounded-lg bg-surface-container flex flex-col gap-1">
<div class="flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant">
<span>Package Proposé :</span>
<span class="font-numeric-md text-numeric-md font-bold text-primary">4,800 TND Net</span>
</div>
<div class="flex items-center gap-1 font-label-sm text-label-sm text-on-surface">
<span class="material-symbols-outlined text-body-sm text-tertiary">health_and_safety</span>
<span class="truncate">Mutuelle Santé 100% + Tickets Resto</span>
</div>
</div>
<!-- Status Indicator -->
<div class="flex items-center gap-2 pt-1">
<span class="w-2 h-2 rounded-full bg-secondary-container animate-ping"></span>
<span class="font-label-sm text-label-sm text-on-surface font-semibold truncate">En attente de signature candidat</span>
</div>
<div class="flex items-center justify-between pt-space-xs border-t border-surface-container font-label-sm text-label-sm text-on-surface-variant">
<span class="flex items-center gap-1 text-tertiary"><span class="material-symbols-outlined text-body-sm">check</span> Validé DG</span>
<span>Expire le 22/03</span>
</div>
</div>
</div>
</div>
<!-- COLUMN 5: Recruté / Clôturé -->
<div class="flex flex-col bg-surface-container-low rounded-xl p-space-sm shadow-sm min-w-0">
<!-- Column Header -->
<div class="p-space-sm flex items-center justify-between">
<div class="flex items-center gap-space-xs min-w-0">
<span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span>
<h2 class="font-label-lg text-label-lg text-on-surface font-bold truncate">Recruté / Clôturé</h2>
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed/40 font-label-sm text-label-sm text-tertiary font-bold">2</span>
</div>
<button class="w-7 h-7 rounded-lg hover:bg-surface-container flex items-center justify-center text-on-surface-variant hover:text-on-surface" type="button">
<span class="material-symbols-outlined text-body-md">more_horiz</span>
</button>
</div>
<!-- Cards Container -->
<div class="flex flex-col gap-space-sm mt-space-xs">
<!-- Candidate Card: Emna Dridi -->
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all cursor-pointer group flex flex-col gap-space-sm relative overflow-hidden bg-gradient-to-b from-surface-container-lowest to-surface-container-low/40">
<div class="flex items-start justify-between gap-space-sm">
<div class="flex items-center gap-space-sm min-w-0">
<img class="w-10 h-10 rounded-full object-cover shrink-0 ring-2 ring-tertiary" data-alt="Portrait souriant d'une jeune consultante en ressources humaines tunisienne avec chemisier blanc et bureau contemporain en arrière plan" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYju-u5w6DN1fHj1oFfPb9YrCuPIc4KzoqxXjvupUl0TV3zD32OCg-ZZxWaQgj3p5uldDPoy1xXThnwzIharxKx_8JXpVWfipeb5rKyY7hLgQAroma6XuIZJ6fGlU2lwXDO6qea5nYKzZ-DhFYHBl4yQTEydzuwMwIY36948Gwy5LWTsQp3i3MWsBq1MGKgDCQH8A-UcM6lpq0lrjQoQqLcBZzW8G8RAuTJ1Dw90nGCKfJqYuMPm4Q"/>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-bold truncate group-hover:text-primary transition-colors">Emna Dridi</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Talent Acquisition Specialist</span>
</div>
</div>
<span class="w-6 h-6 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-body-sm" style="font-variation-settings: 'FILL' 1;">done</span>
</span>
</div>
<!-- Contract Badge & Details -->
<div class="flex flex-col gap-1 p-2 rounded-lg bg-surface-container font-label-sm text-label-sm">
<div class="flex items-center justify-between text-tertiary font-bold">
<span>Contrat CDI Signé</span>
<span class="material-symbols-outlined text-body-sm">verified_user</span>
</div>
<div class="flex items-center gap-1 text-on-surface-variant">
<span class="material-symbols-outlined text-body-sm text-primary">calendar_today</span>
<span>Intégration : <strong>01 Avril 2025</strong></span>
</div>
</div>
<!-- Onboarding Trigger -->
<div class="flex items-center justify-between pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant">Dossier CNSS généré</span>
<button class="px-2 py-1 rounded bg-primary-container text-on-primary font-label-sm text-label-sm font-semibold hover:bg-primary transition-colors flex items-center gap-1">
<span>Onboarding</span>
<span class="material-symbols-outlined text-body-sm">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
</div>
<!-- Tunisian Regulatory & Pipeline Health Footer Bar -->
<div class="mt-space-xl p-space-md bg-surface-container-lowest rounded-xl shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-space-md">
<div class="flex items-center gap-space-md min-w-0 w-full md:w-auto">
<div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-headline-sm">policy</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-lg text-label-lg text-on-surface font-semibold">Conformité aux Procédures d'Embauche en Tunisie</span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">
          Tous les modèles de contrats proposés intègrent les clauses de période d'essai selon le Code du Travail Tunisien et les barèmes de retenue à la source IRPP/CSS.
        </span>
</div>
</div>
<div class="flex items-center gap-space-sm shrink-0">
<button class="px-space-md py-2 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors flex items-center gap-1.5">
<span class="material-symbols-outlined text-body-md">download</span>
<span>Exporter Pipeline (.XLSX)</span>
</button>
<button class="px-space-md py-2 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high font-label-md text-label-md font-semibold transition-colors flex items-center gap-1.5">
<span class="material-symbols-outlined text-body-md">settings</span>
<span>Paramètres d'Évaluation</span>
</button>
</div>
</div>
</div>
</x-admin-shell>
