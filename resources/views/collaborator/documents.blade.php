@php
    $user = auth()->user();
    $matricule = 'MAT-' . str_pad($user->id, 4, '0', STR_PAD_LEFT);
    $nameParts = preg_split('/\s+/', trim($user->name));
    $initials = strtoupper(substr($nameParts[0] ?? '', 0, 1) . substr($nameParts[1] ?? '', 0, 1));
    $fileSlug = str_replace(' ', '_', $user->name);
@endphp

<x-collaborator-shell active="documents" title="Mes Documents & Profil">
<div class="flex flex-col w-full">
<div class="px-margin py-space-xl flex flex-col gap-space-xl max-w-[1536px] mx-auto w-full">
<!-- Header Section with Distinct Administrative Polish -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-lg">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center gap-space-sm">
<span class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed text-label-sm font-label-sm uppercase tracking-wider font-semibold">Portail e-RH Certifié</span>
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>
<span class="text-label-sm font-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-tertiary">verified</span> Coffre-Fort Chiffré AES-256
          </span>
</div>
<h1 class="font-display-lg text-display-lg text-on-surface tracking-tight">Mes Documents &amp; Coffre-Fort Numérique</h1>
<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
          Accédez à vos documents contractuels, attestations administratives certifiées et gérez votre dossier collaborateur en conformité avec la réglementation tunisienne.
        </p>
</div>
<div class="flex items-center gap-space-sm shrink-0">
<button class="h-9.5 px-space-lg rounded-xl bg-surface-container text-on-surface font-label-lg text-label-lg flex items-center gap-space-xs hover:bg-surface-container-high transition-all shadow-sm" onclick="openUpdateModal()" type="button">
<span class="material-symbols-outlined text-[18px] text-on-surface-variant">badge</span>
<span>Mettre à jour mes infos</span>
</button>
<button class="h-9.5 px-space-lg rounded-xl bg-primary text-on-primary font-label-lg text-label-lg flex items-center gap-space-xs hover:bg-primary-container shadow-sm transition-all" onclick="scrollToFastRequest()" type="button">
<span class="material-symbols-outlined text-[18px]">add_circle</span>
<span>Demander un Document RH</span>
</button>
</div>
</div>
<!-- Identity Overview Card: Asymmetric Split Bento -->
<div class="w-full rounded-xl bg-surface-container-lowest p-space-xl shadow-sm flex flex-col xl:flex-row gap-space-xl relative overflow-hidden">
<div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-primary/5 pointer-events-none blur-3xl"></div>
<!-- Employee Profile Core -->
<div class="flex items-start gap-space-lg xl:w-4/12 shrink-0">
<div class="relative">
<div class="w-20 h-20 rounded-xl shadow-sm bg-primary flex items-center justify-center">
<span class="text-on-primary text-headline-lg font-bold">{{ $initials ?: 'U' }}</span>
</div>
<span class="absolute -bottom-1 -right-1 w-6 h-6 rounded-full bg-tertiary-container text-on-tertiary flex items-center justify-center shadow-sm" title="Statut CDI Vérifié">
<span class="material-symbols-outlined text-[14px]">check</span>
</span>
</div>
<div class="flex flex-col min-w-0">
<div class="flex items-center gap-space-xs mb-0.5">
<h2 class="font-headline-md text-headline-md text-on-surface truncate">{{ $user->name }}</h2>
</div>
<span class="font-label-lg text-label-lg text-primary font-semibold">Lead Fullstack Engineer</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Pôle Ingénierie logicielle &amp; Architecture</span>
<div class="flex items-center gap-space-xs mt-2">
<span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm">Matricule: <span class="font-numeric-md text-numeric-md font-semibold text-on-surface">{{ $matricule }}</span></span>
<span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed text-label-sm font-label-sm font-medium">CDI Cadre</span>
</div>
</div>
</div>
<!-- Regulatory & Legal Identifiers (Tunisia Compliance) -->
<div class="grid grid-cols-2 sm:grid-cols-2 gap-space-md xl:w-5/12 bg-surface-container-low p-space-lg rounded-xl">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">C.I.N Nationale</span>
<div class="flex items-baseline gap-1 mt-0.5">
<span class="font-numeric-md text-numeric-md font-bold text-on-surface">09845211</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">(Tunis)</span>
</div>
<span class="font-label-sm text-label-sm text-tertiary-container font-medium mt-1 flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">verified_user</span> Valide jusqu'en 2030
          </span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Immatriculation CNSS</span>
<span class="font-numeric-md text-numeric-md font-bold text-on-surface mt-0.5">09482110-12</span>
<span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Caisse Tunis / Régime Général</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Date d'Embauche</span>
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface mt-0.5">15 Janvier 2020</span>
<span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Ancienneté: 5 ans 2 mois</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Convention Collective</span>
<span class="font-label-md text-label-md font-semibold text-on-surface mt-0.5">Bureaux d'Études &amp; Informatique</span>
<span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Échelon III - Position 2</span>
</div>
</div>
<!-- Emergency & Private Contact -->
<div class="flex flex-col justify-between gap-space-sm xl:w-3/12 bg-surface-container-high/40 p-space-lg rounded-xl">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider flex items-center gap-1">
<span class="material-symbols-outlined text-[15px] text-primary">contacts</span> Coordonnées Directes
          </span>
<span class="font-body-sm text-body-sm text-on-surface truncate mt-1">{{ $user->email }}</span>
<span class="font-numeric-md text-numeric-md font-medium text-on-surface">+216 98 412 890</span>
</div>
<div class="flex flex-col gap-0.5 pt-2">
<span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-error">emergency</span> Contact d'Urgence
          </span>
<span class="font-body-sm text-body-sm font-semibold text-on-surface">Leila Ben Salem <span class="font-normal text-on-surface-variant text-[12px]">(Épouse)</span></span>
<span class="font-numeric-md text-numeric-md text-on-surface-variant">+216 22 555 120</span>
</div>
</div>
</div>
<!-- Main Workspace Section: Digital Vault Documents & Filter Bar -->
<div class="flex flex-col gap-space-lg">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md">
<!-- Interactive Category Switcher -->
<div class="flex items-center gap-1 p-1 bg-surface-container-low rounded-xl overflow-x-auto max-w-full">
<button class="vault-tab-btn px-space-md py-space-xs rounded-lg bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm font-semibold transition-all flex items-center gap-1.5 whitespace-nowrap" onclick="filterDocs('all', this)" type="button">
<span>Tous les documents</span>
<span class="px-1.5 py-0.2 rounded-full bg-secondary-container text-on-secondary-fixed text-label-sm">12</span>
</button>
<button class="vault-tab-btn px-space-md py-space-xs rounded-lg text-on-surface-variant font-label-md text-label-md hover:text-on-surface transition-all flex items-center gap-1.5 whitespace-nowrap" onclick="filterDocs('contrats', this)" type="button">
<span>Contrats &amp; Avenants</span>
<span class="px-1.5 py-0.2 rounded-full bg-surface-container-high text-on-surface-variant text-label-sm">3</span>
</button>
<button class="vault-tab-btn px-space-md py-space-xs rounded-lg text-on-surface-variant font-label-md text-label-md hover:text-on-surface transition-all flex items-center gap-1.5 whitespace-nowrap" onclick="filterDocs('attestations', this)" type="button">
<span>Attestations RH</span>
<span class="px-1.5 py-0.2 rounded-full bg-surface-container-high text-on-surface-variant text-label-sm">4</span>
</button>
<button class="vault-tab-btn px-space-md py-space-xs rounded-lg text-on-surface-variant font-label-md text-label-md hover:text-on-surface transition-all flex items-center gap-1.5 whitespace-nowrap" onclick="filterDocs('identite', this)" type="button">
<span>Identité &amp; État Civil</span>
<span class="px-1.5 py-0.2 rounded-full bg-surface-container-high text-on-surface-variant text-label-sm">2</span>
</button>
<button class="vault-tab-btn px-space-md py-space-xs rounded-lg text-on-surface-variant font-label-md text-label-md hover:text-on-surface transition-all flex items-center gap-1.5 whitespace-nowrap" onclick="filterDocs('diplomes', this)" type="button">
<span>Diplômes &amp; Certificats</span>
<span class="px-1.5 py-0.2 rounded-full bg-surface-container-high text-on-surface-variant text-label-sm">3</span>
</button>
</div>
<!-- Search & Layout Helper -->
<div class="flex items-center gap-space-sm">
<div class="flex items-center gap-space-xs px-space-md py-1.5 rounded-xl bg-surface-container-lowest shadow-sm text-on-surface-variant">
<span class="material-symbols-outlined text-[18px]">search</span>
<input class="bg-transparent border-0 outline-none text-body-sm font-body-sm text-on-surface placeholder:text-on-surface-variant w-44" id="docSearchInput" oninput="searchDocuments(this.value)" placeholder="Filtrer un document..." type="text"/>
</div>
<div class="flex items-center p-1 bg-surface-container-low rounded-xl">
<button class="p-1 rounded-lg bg-surface-container-lowest text-primary shadow-sm" title="Vue Grille" type="button"><span class="material-symbols-outlined text-[18px]">grid_view</span></button>
<button class="p-1 rounded-lg text-on-surface-variant hover:text-on-surface" title="Vue Liste" type="button"><span class="material-symbols-outlined text-[18px]">view_list</span></button>
</div>
</div>
</div>
<!-- Documents Bento Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg" id="documentsContainer">
<!-- Document 1: Contrat CDI Principal -->
<div class="doc-card group rounded-xl bg-surface-container-lowest p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="contrats" data-title="Contrat de Travail CDI {{ $user->name }}">
<div class="flex flex-col gap-space-md">
<div class="flex items-start justify-between">
<div class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[26px]">contract</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-tertiary-container/15 text-tertiary-container font-label-sm text-label-sm flex items-center gap-1 font-medium">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span> Certifié Légal
              </span>
</div>
<div class="flex flex-col">
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Contrat de Travail CDI</h3>
<span class="font-numeric-md text-body-sm text-on-surface-variant font-mono truncate mt-0.5">Contrat_CDI_{{ $fileSlug }}.pdf</span>
</div>
<!-- Meta attributes -->
<div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col gap-1">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Signature :</span>
<span class="font-numeric-md text-on-surface font-medium">15/01/2020</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Empreinte Chiffrée :</span>
<span class="font-mono text-label-sm text-on-surface truncate w-32 text-right">SHA-256 #8b2c</span>
</div>
</div>
</div>
<div class="flex items-center gap-space-sm pt-space-md mt-space-sm">
<button class="flex-1 h-9 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high transition-colors flex items-center justify-center gap-1" onclick="downloadTrigger('Contrat_CDI_{{ $fileSlug }}.pdf')" type="button">
<span class="material-symbols-outlined text-[16px]">download</span>
<span>Télécharger</span>
</button>
<button class="w-9 h-9 rounded-xl bg-surface-container-low text-on-surface-variant hover:text-primary hover:bg-primary-fixed flex items-center justify-center transition-colors" onclick="previewDoc('Contrat CDI Cadre', '15 Janvier 2020')" title="Aperçu rapide" type="button">
<span class="material-symbols-outlined text-[18px]">visibility</span>
</button>
</div>
</div>
<!-- Document 2: Attestation de Travail Récente -->
<div class="doc-card group rounded-xl bg-surface-container-lowest p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="attestations" data-title="Attestation de Travail Récente Mars 2025">
<div class="flex flex-col gap-space-md">
<div class="flex items-start justify-between">
<div class="w-12 h-12 rounded-xl bg-secondary-container flex items-center justify-center text-on-secondary-fixed shrink-0">
<span class="material-symbols-outlined text-[26px]">verified</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-label-sm flex items-center gap-1 font-medium">
<span class="material-symbols-outlined text-[12px]">qr_code_2</span> Cachet Électronique
              </span>
</div>
<div class="flex flex-col">
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Attestation de Travail (Mars 2025)</h3>
<span class="font-numeric-md text-body-sm text-on-surface-variant font-mono truncate mt-0.5">Attestation_Travail_Mars2025.pdf</span>
</div>
<div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col gap-1">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Génération :</span>
<span class="font-numeric-md text-on-surface font-medium">01/03/2025 (Automatique)</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Validité légale :</span>
<span class="font-numeric-md text-tertiary-container font-semibold">90 Jours</span>
</div>
</div>
</div>
<div class="flex items-center gap-space-sm pt-space-md mt-space-sm">
<button class="flex-1 h-9 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high transition-colors flex items-center justify-center gap-1" onclick="downloadTrigger('Attestation_Travail_Mars2025.pdf')" type="button">
<span class="material-symbols-outlined text-[16px]">download</span>
<span>Télécharger</span>
</button>
<button class="w-9 h-9 rounded-xl bg-surface-container-low text-on-surface-variant hover:text-primary hover:bg-primary-fixed flex items-center justify-center transition-colors" onclick="previewDoc('Attestation de Travail avec QR Code', 'Mars 2025')" title="Aperçu rapide" type="button">
<span class="material-symbols-outlined text-[18px]">visibility</span>
</button>
</div>
</div>
<!-- Document 3: Carte d'Identité Nationale -->
<div class="doc-card group rounded-xl bg-surface-container-lowest p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="identite" data-title="Copie Carte d'Identite Nationale CIN">
<div class="flex flex-col gap-space-md">
<div class="flex items-start justify-between">
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-on-surface shrink-0">
<span class="material-symbols-outlined text-[26px]">badge</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-medium">
                Conforme RH
              </span>
</div>
<div class="flex flex-col">
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Copie Carte d'Identité (CIN)</h3>
<span class="font-numeric-md text-body-sm text-on-surface-variant font-mono truncate mt-0.5">Copie_CIN_{{ $fileSlug }}.pdf</span>
</div>
<div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col gap-1">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Numéro CIN :</span>
<span class="font-numeric-md text-on-surface font-semibold">09845211</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Expiration :</span>
<span class="font-numeric-md text-on-surface">14/11/2030</span>
</div>
</div>
</div>
<div class="flex items-center gap-space-sm pt-space-md mt-space-sm">
<button class="flex-1 h-9 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high transition-colors flex items-center justify-center gap-1" onclick="downloadTrigger('Copie_CIN_{{ $fileSlug }}.pdf')" type="button">
<span class="material-symbols-outlined text-[16px]">download</span>
<span>Télécharger</span>
</button>
<button class="w-9 h-9 rounded-xl bg-surface-container-low text-on-surface-variant hover:text-primary hover:bg-primary-fixed flex items-center justify-center transition-colors" onclick="previewDoc('Copie CIN Recto-Verso', 'CIN 09845211')" title="Aperçu rapide" type="button">
<span class="material-symbols-outlined text-[18px]">visibility</span>
</button>
</div>
</div>
<!-- Document 4: Avenant Promotion Lead -->
<div class="doc-card group rounded-xl bg-surface-container-lowest p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="contrats" data-title="Avenant Augmentation Promotion Lead 2023">
<div class="flex flex-col gap-space-md">
<div class="flex items-start justify-between">
<div class="w-12 h-12 rounded-xl bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed-variant shrink-0">
<span class="material-symbols-outlined text-[26px]">trending_up</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-tertiary-container/15 text-tertiary-container font-label-sm text-label-sm font-semibold">
                Actif &amp; Appliqué
              </span>
</div>
<div class="flex flex-col">
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Avenant Promotion Lead Engineer</h3>
<span class="font-numeric-md text-body-sm text-on-surface-variant font-mono truncate mt-0.5">Avenant_Promotion_Lead_2023.pdf</span>
</div>
<div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col gap-1">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Date d'Effet :</span>
<span class="font-numeric-md text-on-surface font-medium">01/09/2023</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Signataire :</span>
<span class="font-body-sm text-on-surface">Direction Générale</span>
</div>
</div>
</div>
<div class="flex items-center gap-space-sm pt-space-md mt-space-sm">
<button class="flex-1 h-9 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high transition-colors flex items-center justify-center gap-1" onclick="downloadTrigger('Avenant_Promotion_Lead_2023.pdf')" type="button">
<span class="material-symbols-outlined text-[16px]">download</span>
<span>Télécharger</span>
</button>
<button class="w-9 h-9 rounded-xl bg-surface-container-low text-on-surface-variant hover:text-primary hover:bg-primary-fixed flex items-center justify-center transition-colors" onclick="previewDoc('Avenant Cadre Supérieur', 'Septembre 2023')" title="Aperçu rapide" type="button">
<span class="material-symbols-outlined text-[18px]">visibility</span>
</button>
</div>
</div>
<!-- Document 5: Attestation CNSS -->
<div class="doc-card group rounded-xl bg-surface-container-lowest p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="attestations" data-title="Attestation d'Affiliation Bordereau CNSS Individuel">
<div class="flex flex-col gap-space-md">
<div class="flex items-start justify-between">
<div class="w-12 h-12 rounded-xl bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed shrink-0">
<span class="material-symbols-outlined text-[26px]">policy</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm font-medium">
                Bordereau Annuel
              </span>
</div>
<div class="flex flex-col">
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Attestation d'Affiliation CNSS</h3>
<span class="font-numeric-md text-body-sm text-on-surface-variant font-mono truncate mt-0.5">Bordereau_CNSS_Individuel.pdf</span>
</div>
<div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col gap-1">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Période :</span>
<span class="font-numeric-md text-on-surface font-medium">Trimestres 1-4 / 2024</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Statut cotisations :</span>
<span class="font-numeric-md text-tertiary-container font-semibold">En règle (100%)</span>
</div>
</div>
</div>
<div class="flex items-center gap-space-sm pt-space-md mt-space-sm">
<button class="flex-1 h-9 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high transition-colors flex items-center justify-center gap-1" onclick="downloadTrigger('Bordereau_CNSS_Individuel.pdf')" type="button">
<span class="material-symbols-outlined text-[16px]">download</span>
<span>Télécharger</span>
</button>
<button class="w-9 h-9 rounded-xl bg-surface-container-low text-on-surface-variant hover:text-primary hover:bg-primary-fixed flex items-center justify-center transition-colors" onclick="previewDoc('Relevé Trimestriel CNSS', 'Exercice 2024')" title="Aperçu rapide" type="button">
<span class="material-symbols-outlined text-[18px]">visibility</span>
</button>
</div>
</div>
<!-- Document 6: Certifications Techniques -->
<div class="doc-card group rounded-xl bg-surface-container-lowest p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="diplomes" data-title="Certifications Techniques AWS Solutions Architect React">
<div class="flex flex-col gap-space-md">
<div class="flex items-start justify-between">
<div class="w-12 h-12 rounded-xl bg-primary-fixed-dim flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[26px]">workspace_premium</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-primary/10 text-primary font-label-sm text-label-sm font-semibold">
                Certificat Professionnel
              </span>
</div>
<div class="flex flex-col">
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">AWS Solutions Architect - Pro</h3>
<span class="font-numeric-md text-body-sm text-on-surface-variant font-mono truncate mt-0.5">Certificat_AWS_Solutions_Architect.pdf</span>
</div>
<div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col gap-1">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Délivré par :</span>
<span class="font-body-sm text-on-surface font-medium">Amazon Web Services</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Reconnaissance RH :</span>
<span class="font-label-sm text-tertiary-container font-semibold">Validé pour Prime Expertise</span>
</div>
</div>
</div>
<div class="flex items-center gap-space-sm pt-space-md mt-space-sm">
<button class="flex-1 h-9 rounded-xl bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high transition-colors flex items-center justify-center gap-1" onclick="downloadTrigger('Certificat_AWS_Solutions_Architect.pdf')" type="button">
<span class="material-symbols-outlined text-[16px]">download</span>
<span>Télécharger</span>
</button>
<button class="w-9 h-9 rounded-xl bg-surface-container-low text-on-surface-variant hover:text-primary hover:bg-primary-fixed flex items-center justify-center transition-colors" onclick="previewDoc('Certificat AWS Cloud Architect', 'Cert ID: AWS-849201')" title="Aperçu rapide" type="button">
<span class="material-symbols-outlined text-[18px]">visibility</span>
</button>
</div>
</div>
</div>
</div>
<!-- Fast RH Request Hub ("Demande de documents en 1 clic") -->
<div class="w-full flex flex-col gap-space-lg pt-space-md" id="fastRequestHub">
<div class="flex items-center justify-between">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[20px]">bolt</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Génération &amp; Demande Express en 1-Clic</h2>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
            Générez des pièces officielles signées électroniquement sans délai de traitement administratif.
          </p>
</div>
<span class="hidden md:flex items-center gap-1 text-label-sm font-label-sm text-tertiary-container bg-surface-container-lowest px-space-md py-1 rounded-full shadow-sm">
<span class="w-2 h-2 rounded-full bg-tertiary-container animate-pulse"></span> Signature Électronique TunTrust Disponible
        </span>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
<!-- Action 1: Instant Attestation de Travail -->
<div class="rounded-xl bg-surface-container-lowest p-space-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between relative overflow-hidden group">
<div class="flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<div class="w-10 h-10 rounded-xl bg-primary text-on-primary flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[22px]">quick_reference</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-bold">Immédiat (0 min)</span>
</div>
<div class="flex flex-col gap-1">
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Attestation de Travail</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Document standard multilingue (Français/Arabe) certifiant votre statut de Lead Engineer en CDI chez Carthage Tech Solutions.
              </p>
</div>
<div class="flex items-center gap-space-xs text-label-sm font-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-[16px] text-tertiary-container">task_alt</span>
<span>Inclut QR Code de vérification publique</span>
</div>
</div>
<div class="pt-space-lg mt-space-md">
<button class="w-full h-9.5 px-space-md rounded-xl bg-primary-container text-on-primary font-label-lg text-label-lg hover:bg-primary transition-all flex items-center justify-center gap-space-xs shadow-sm" onclick="generateInstantDoc('Attestation de Travail')" type="button">
<span class="material-symbols-outlined text-[18px]">bolt</span>
<span>Générer immédiatement (PDF)</span>
</button>
</div>
</div>
<!-- Action 2: Attestation de Salaire & Titularisation -->
<div class="rounded-xl bg-surface-container-lowest p-space-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
<div class="flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<div class="w-10 h-10 rounded-xl bg-secondary-container text-on-secondary-fixed flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[22px]">account_balance</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-bold">Visa &amp; Banques</span>
</div>
<div class="flex flex-col gap-1">
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Salaire &amp; Domiciliation</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Attestation de salaire net imposable et confirmation de titularisation pour dossier de crédit bancaire ou dépôt de visa consulaire.
              </p>
</div>
<div class="flex items-center gap-space-xs text-label-sm font-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-[16px] text-primary">schedule</span>
<span>Validation RH automatisée en &lt; 2h ouvrées</span>
</div>
</div>
<div class="pt-space-lg mt-space-md">
<button class="w-full h-9.5 px-space-md rounded-xl bg-surface-container text-on-surface font-label-lg text-label-lg hover:bg-surface-container-high transition-all flex items-center justify-center gap-space-xs" onclick="openSalaryRequestModal()" type="button">
<span class="material-symbols-outlined text-[18px]">assignment_turned_in</span>
<span>Demander avec motif</span>
</button>
</div>
</div>
<!-- Action 3: Déclaration Changement de Situation -->
<div class="rounded-xl bg-surface-container-lowest p-space-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
<div class="flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<div class="w-10 h-10 rounded-xl bg-tertiary-fixed text-on-tertiary-fixed-variant flex items-center justify-center shadow-sm">
<span class="material-symbols-outlined text-[22px]">family_restroom</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-bold">Fiscalité &amp; IRPP</span>
</div>
<div class="flex flex-col gap-1">
<h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">Déclaration de Situation</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Transmettez vos changements d'adresse, RIB bancaire, ou acte de naissance d'un enfant pour ajuster vos abattements d'impôt IRPP.
              </p>
</div>
<div class="flex items-center gap-space-xs text-label-sm font-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-[16px] text-tertiary-container">tune</span>
<span>Mise à jour directe du barème de paie</span>
</div>
</div>
<div class="pt-space-lg mt-space-md">
<button class="w-full h-9.5 px-space-md rounded-xl bg-surface-container text-on-surface font-label-lg text-label-lg hover:bg-surface-container-high transition-all flex items-center justify-center gap-space-xs" onclick="openSituationModal()" type="button">
<span class="material-symbols-outlined text-[18px]">edit_document</span>
<span>Déclarer un changement</span>
</button>
</div>
</div>
</div>
</div>
<!-- Security, Regulatory Assurance & INPDP Seal Notice -->
<div class="w-full rounded-xl bg-surface-container-low p-space-lg flex flex-col md:flex-row items-center justify-between gap-space-lg shadow-sm">
<div class="flex items-start gap-space-md">
<div class="w-10 h-10 rounded-xl bg-tertiary-container text-on-tertiary flex items-center justify-center shrink-0 shadow-sm">
<span class="material-symbols-outlined text-[22px]">shield_lock</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-space-xs">
<span class="font-label-lg text-label-lg text-on-surface font-bold">Sécurité &amp; Protection des Données INPDP (Tunisie)</span>
<span class="px-2 py-0.2 rounded bg-tertiary-container/15 text-tertiary-container text-label-sm font-label-sm font-semibold">Loi n° 2004-63</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-4xl mt-0.5">
            Vos documents contractuels et données biométriques/personnelles sont hébergés sur le sol tunisien dans une infrastructure certifiée ISO 27001 &amp; SOC 2 Type II. Tout accès fait l'objet d'un journal d'audit immuable conforme aux directives de l'Instance Nationale de Protection des Données Personnelles.
          </p>
</div>
</div>
<div class="flex items-center gap-space-sm shrink-0">
<div class="flex flex-col text-right">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Stockage Sécurisé</span>
<span class="font-numeric-md text-numeric-md font-bold text-on-surface">DataCenter Tunis Ouest</span>
</div>
<span class="w-3 h-3 rounded-full bg-tertiary-container" title="Serveur opérationnel"></span>
</div>
</div>
</div>
<!-- Micro-Interaction Modals & Toast Containers -->
<!-- Preview Drawer / Modal -->
<div class="fixed inset-0 bg-inverse-surface/40 backdrop-blur-[2px] z-50 hidden items-center justify-center p-space-lg" id="previewModal">
<div class="w-full max-w-lg rounded-xl bg-surface-container-lowest p-space-xl shadow-xl flex flex-col gap-space-lg">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[22px]">description</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface" id="previewTitle">Aperçu du Document</h3>
</div>
<button class="w-8 h-8 rounded-lg flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface" onclick="closePreviewModal()" type="button">
<span class="material-symbols-outlined text-[18px]">close</span>
</button>
</div>
<div class="p-space-lg rounded-xl bg-surface-container-low flex flex-col gap-space-sm">
<div class="flex justify-between items-center text-body-sm font-body-sm">
<span class="text-on-surface-variant">Référence :</span>
<span class="font-numeric-md text-on-surface font-semibold" id="previewMeta">REF-2025-TN</span>
</div>
<div class="flex justify-between items-center text-body-sm font-body-sm">
<span class="text-on-surface-variant">Signature :</span>
<span class="text-tertiary-container font-label-md font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">check_circle</span> Signature Numérique Carthage Tech
          </span>
</div>
<div class="h-32 rounded-lg bg-surface-container-lowest p-space-md flex flex-col justify-center items-center text-center">
<span class="material-symbols-outlined text-outline-variant text-[40px] mb-1">picture_as_pdf</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Aperçu haute résolution prêt pour impression ou transfert</span>
</div>
</div>
<div class="flex items-center justify-end gap-space-sm pt-space-xs">
<button class="h-9 px-space-lg rounded-xl bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high transition-colors" onclick="closePreviewModal()" type="button">
          Fermer
        </button>
<button class="h-9 px-space-lg rounded-xl bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container transition-all flex items-center gap-1 shadow-sm" onclick="downloadCurrentPreview()" type="button">
<span class="material-symbols-outlined text-[16px]">download</span>
<span>Télécharger le PDF</span>
</button>
</div>
</div>
</div>
<!-- Interactive Update Info Modal -->
<div class="fixed inset-0 bg-inverse-surface/40 backdrop-blur-[2px] z-50 hidden items-center justify-center p-space-lg" id="updateModal">
<div class="w-full max-w-lg rounded-xl bg-surface-container-lowest p-space-xl shadow-xl flex flex-col gap-space-lg">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[22px]">manage_accounts</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Mise à jour du Dossier Collaborateur</h3>
</div>
<button class="w-8 h-8 rounded-lg flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface" onclick="closeUpdateModal()" type="button">
<span class="material-symbols-outlined text-[18px]">close</span>
</button>
</div>
<form class="flex flex-col gap-space-md" id="updateProfileForm" onsubmit="handleProfileSubmit(event)">
<div class="flex flex-col gap-space-xs">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Téléphone Professionnel</label>
<input class="h-9.5 px-space-md rounded-lg bg-surface-container-lowest border-0 ring-1 ring-outline-variant text-on-surface font-numeric-md text-numeric-md focus:ring-2 focus:ring-primary outline-none" required="" type="text" value="+216 98 412 890"/>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Contact d'Urgence (Nom &amp; Lien)</label>
<input class="h-9.5 px-space-md rounded-lg bg-surface-container-lowest border-0 ring-1 ring-outline-variant text-on-surface font-body-md text-body-md focus:ring-2 focus:ring-primary outline-none" required="" type="text" value="Leila Ben Salem (Épouse)"/>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Téléphone d'Urgence</label>
<input class="h-9.5 px-space-md rounded-lg bg-surface-container-lowest border-0 ring-1 ring-outline-variant text-on-surface font-numeric-md text-numeric-md focus:ring-2 focus:ring-primary outline-none" required="" type="text" value="+216 22 555 120"/>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Adresse Résidentielle (Tunis)</label>
<input class="h-9.5 px-space-md rounded-lg bg-surface-container-lowest border-0 ring-1 ring-outline-variant text-on-surface font-body-md text-body-md focus:ring-2 focus:ring-primary outline-none" required="" type="text" value="Résidence Les Jardins, Ennasr 2, Ariana"/>
</div>
<div class="flex items-center justify-end gap-space-sm pt-space-md">
<button class="h-9 px-space-lg rounded-xl bg-surface-container text-on-surface font-label-md text-label-md hover:bg-surface-container-high transition-colors" onclick="closeUpdateModal()" type="button">
            Annuler
          </button>
<button class="h-9 px-space-lg rounded-xl bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container transition-all shadow-sm" type="submit">
            Enregistrer les modifications
          </button>
</div>
</form>
</div>
</div>
<!-- Fast Notification Toast -->
<div class="fixed bottom-6 right-6 z-50 hidden bg-inverse-surface text-inverse-on-surface px-space-lg py-space-md rounded-xl shadow-xl flex items-center gap-space-md transition-all" id="systemToast">
<span class="material-symbols-outlined text-[20px] text-tertiary-fixed">check_circle</span>
<span class="font-body-sm text-body-sm" id="toastMessage">Document généré et ajouté à votre coffre-fort.</span>
</div>
<script>
    // Tab Filtering
    function filterDocs(cat, btn) {
      document.querySelectorAll('.vault-tab-btn').forEach(b => {
        b.classList.remove('bg-surface-container-lowest', 'text-primary', 'shadow-sm', 'font-semibold');
        b.classList.add('text-on-surface-variant');
      });
      btn.classList.add('bg-surface-container-lowest', 'text-primary', 'shadow-sm', 'font-semibold');
      btn.classList.remove('text-on-surface-variant');

      const cards = document.querySelectorAll('.doc-card');
      cards.forEach(card => {
        if (cat === 'all' || card.getAttribute('data-category') === cat) {
          card.classList.remove('hidden');
          card.classList.add('flex');
        } else {
          card.classList.add('hidden');
          card.classList.remove('flex');
        }
      });
    }

    // Search Filtering
    function searchDocuments(query) {
      const q = query.toLowerCase().trim();
      const cards = document.querySelectorAll('.doc-card');
      cards.forEach(card => {
        const title = card.getAttribute('data-title').toLowerCase();
        if (title.includes(q)) {
          card.classList.remove('hidden');
          card.classList.add('flex');
        } else {
          card.classList.add('hidden');
          card.classList.remove('flex');
        }
      });
    }

    // Quick Toast Feedback
    function showToast(msg) {
      const toast = document.getElementById('systemToast');
      const text = document.getElementById('toastMessage');
      text.innerText = msg;
      toast.classList.remove('hidden');
      setTimeout(() => {
        toast.classList.add('hidden');
      }, 3500);
    }

    // Instant Document Trigger
    function generateInstantDoc(type) {
      showToast('Génération immédiate de l\'Attestation de Travail en cours...');
      setTimeout(() => {
        showToast('Document signé électroniquement disponible en téléchargement.');
      }, 1200);
    }

    function downloadTrigger(fileName) {
      showToast('Téléchargement sécurisé : ' + fileName);
    }

    // Preview Modal Logic
    let currentActiveDoc = '';
    function previewDoc(title, meta) {
      currentActiveDoc = title;
      document.getElementById('previewTitle').innerText = title;
      document.getElementById('previewMeta').innerText = meta;
      document.getElementById('previewModal').classList.remove('hidden');
      document.getElementById('previewModal').classList.add('flex');
    }

    function closePreviewModal() {
      document.getElementById('previewModal').classList.add('hidden');
      document.getElementById('previewModal').classList.remove('flex');
    }

    function downloadCurrentPreview() {
      closePreviewModal();
      showToast('Téléchargement du document certifié : ' + currentActiveDoc);
    }

    // Update Profile Modal
    function openUpdateModal() {
      document.getElementById('updateModal').classList.remove('hidden');
      document.getElementById('updateModal').classList.add('flex');
    }

    function closeUpdateModal() {
      document.getElementById('updateModal').classList.add('hidden');
      document.getElementById('updateModal').classList.remove('flex');
    }

    function handleProfileSubmit(e) {
      e.preventDefault();
      closeUpdateModal();
      showToast('Vos informations collaborateur ont été mises à jour avec succès.');
    }

    function scrollToFastRequest() {
      document.getElementById('fastRequestHub').scrollIntoView({ behavior: 'smooth' });
    }

    function openSalaryRequestModal() {
      showToast('Formulaire de demande d\'attestation de salaire transmis au service RH.');
    }

    function openSituationModal() {
      showToast('Ouverture du dossier de déclaration fiscale & état civil...');
    }
  </script>
</div>
</x-collaborator-shell>
