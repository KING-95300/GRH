<x-admin-shell active="documents" title="Gestion Documentaire & Fichiers Collaborateurs">
<div class="flex flex-col w-full pb-margin">
<!-- Breadcrumb & Top Bar -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md mb-space-lg">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs font-label-sm text-label-sm text-on-surface-variant">
<span class="hover:text-primary transition-colors cursor-pointer">Accueil</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold">Documents RH</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Gestion Documentaire &amp; Fichiers Collaborateurs</h1>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-space-xs">
<span class="material-symbols-outlined text-[16px] text-tertiary">lock</span>
<span>Coffre-fort numérique sécurisé conforme aux normes tunisiennes • Chiffrement 256-bit</span>
</p>
</div>
<!-- Global CTA Buttons -->
<div class="flex items-center gap-space-sm self-start md:self-auto shrink-0">
<button class="h-10 px-space-md rounded-xl bg-surface-container-lowest text-secondary hover:text-on-surface hover:bg-surface-container shadow-sm transition-all flex items-center gap-space-xs font-label-lg text-label-lg active:scale-95" type="button">
<span class="material-symbols-outlined text-body-lg">folder_zip</span>
<span>Télécharger la sélection (ZIP)</span>
</button>
<button class="h-10 px-space-lg rounded-xl bg-primary-container text-on-primary hover:bg-primary shadow-sm hover:shadow-md transition-all flex items-center gap-space-xs font-label-lg text-label-lg active:scale-95" onclick="document.getElementById('upload-input').click()" type="button">
<span class="material-symbols-outlined text-body-lg">upload_file</span>
<span>+ Téléverser un Document</span>
</button>
<input accept=".pdf,.png,.jpg,.jpeg,.doc,.docx" class="hidden" id="upload-input" multiple="" type="file"/>
</div>
</div>
<!-- Key Metrics / Storage Bento Summary -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md mb-space-xl">
<!-- Total Documents -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Total Documents</span>
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-body-lg">inventory_2</span>
</div>
</div>
<div class="mt-space-md">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">384</span>
<div class="flex items-center gap-1.5 mt-space-xs">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
<span class="font-body-sm text-body-sm text-on-surface-variant truncate">Contrats, Avenants, Cartes CIN</span>
</div>
</div>
</div>
<!-- En Attente de Signature -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Signature Requise</span>
<div class="w-8 h-8 rounded-lg bg-secondary-container flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-body-lg">draw</span>
</div>
</div>
<div class="mt-space-md">
<div class="flex items-baseline gap-space-xs">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">6</span>
<span class="font-label-md text-label-md text-error font-semibold">Action requise</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Collaborateurs à relancer par SMS/Mail</p>
</div>
</div>
<!-- Pièces à Renouveler -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Pièces à Renouveler</span>
<div class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center text-primary-fixed-dim">
<span class="material-symbols-outlined text-body-lg">update</span>
</div>
</div>
<div class="mt-space-md">
<div class="flex items-baseline gap-space-xs">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">4</span>
<span class="font-label-sm text-label-sm text-secondary bg-surface-container px-1.5 py-0.5 rounded">Échéance &lt; 30j</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs truncate">Certificats médicaux &amp; Séjours</p>
</div>
</div>
<!-- Cloud Storage Usage Gauge -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Espace Cloud Stockage</span>
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-body-lg">cloud_sync</span>
</div>
</div>
<div class="mt-space-md">
<div class="flex items-baseline justify-between mb-1">
<span class="font-numeric-md text-numeric-md font-bold text-on-surface">18.4 Go</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">100 Go alloués</span>
</div>
<div class="w-full bg-surface-container rounded-full h-2 overflow-hidden">
<div class="bg-primary-container h-full rounded-full transition-all duration-500" style="width: 18.4%"></div>
</div>
<span class="font-label-sm text-label-sm text-tertiary font-medium block mt-1">Serveur local Tunisie Telecom DataCenter</span>
</div>
</div>
</div>
<!-- Drag and Drop Smart Upload Ingestion Area -->
<div class="relative group cursor-pointer bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all mb-space-xl overflow-hidden" id="drop-zone">
<div class="flex flex-col lg:flex-row items-center justify-between gap-space-md">
<div class="flex items-center gap-space-lg">
<div class="w-14 h-14 rounded-xl bg-surface-container-low group-hover:bg-primary-container/10 text-primary flex items-center justify-center transition-colors shrink-0">
<span class="material-symbols-outlined text-[32px]">cloud_upload</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-space-sm flex-wrap">
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Glissez-déposez vos fichiers ici ou Parcourir</span>
<span class="px-2 py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">smart_toy</span> Reconnaissance OCR CIN active
            </span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
            Formats acceptés : PDF, PNG, JPG, JPEG, DOCX jusqu'à 25 Mo • Rattachement automatique au dossier agent par scan CIN/Matricule.
          </p>
</div>
</div>
<div class="flex items-center gap-space-sm shrink-0">
<button class="h-9 px-space-md rounded-lg bg-surface-container-high hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors flex items-center gap-1.5" onclick="document.getElementById('upload-input').click()" type="button">
<span class="material-symbols-outlined text-body-md">folder_open</span>
<span>Explorer les dossiers</span>
</button>
</div>
</div>
</div>
<!-- Navigation Filters & Search Ribbon -->
<div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm mb-space-lg flex flex-col gap-space-md">
<!-- Search and quick controls -->
<div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-space-md">
<div class="relative flex-1 max-w-lg">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-lg pointer-events-none">search</span>
<input class="w-full h-10 pl-10 pr-4 rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant focus:outline-none focus:bg-surface-container transition-all" id="search-input" placeholder="Rechercher par libellé, agent, CIN (ex: 11029482), tag..." type="text"/>
</div>
<!-- View Switcher & Actions -->
<div class="flex items-center justify-between md:justify-end gap-space-sm">
<div class="flex items-center bg-surface-container-low p-0.5 rounded-lg">
<button class="px-3 py-1.5 rounded-md font-label-md text-label-md flex items-center gap-1.5 bg-surface-container-lowest text-primary shadow-xs transition-all" id="view-grid-btn" onclick="switchView('grid')" type="button">
<span class="material-symbols-outlined text-[18px]">grid_view</span>
<span class="hidden sm:inline">Grille</span>
</button>
<button class="px-3 py-1.5 rounded-md font-label-md text-label-md flex items-center gap-1.5 text-on-surface-variant hover:text-on-surface transition-all" id="view-list-btn" onclick="switchView('list')" type="button">
<span class="material-symbols-outlined text-[18px]">view_list</span>
<span class="hidden sm:inline">Liste détaillée</span>
</button>
</div>
<button class="h-9 px-space-md rounded-lg bg-surface-container-low text-on-surface-variant hover:text-on-surface hover:bg-surface-container flex items-center gap-1 font-label-md text-label-md transition-colors" type="button">
<span class="material-symbols-outlined text-[18px]">filter_list</span>
<span>Trier: Récent</span>
</button>
</div>
</div>
<!-- Category Segments Bar -->
<div class="flex items-center gap-space-xs overflow-x-auto pb-1 scrollbar-none" id="category-bar">
<button class="category-pill shrink-0 px-space-md py-1.5 rounded-full font-label-md text-label-md transition-all bg-primary-container text-on-primary" onclick="filterCategory('all', this)">
        Tous (384)
      </button>
<button class="category-pill shrink-0 px-space-md py-1.5 rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface" onclick="filterCategory('contrats', this)">
        Contrats de Travail (CDI/CDD/SIVP)
      </button>
<button class="category-pill shrink-0 px-space-md py-1.5 rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface" onclick="filterCategory('identite', this)">
        Copies CIN &amp; Passeport
      </button>
<button class="category-pill shrink-0 px-space-md py-1.5 rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface" onclick="filterCategory('paie', this)">
        Fiches de Paie signées
      </button>
<button class="category-pill shrink-0 px-space-md py-1.5 rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface" onclick="filterCategory('diplomes', this)">
        Diplômes &amp; Certificats
      </button>
<button class="category-pill shrink-0 px-space-md py-1.5 rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface" onclick="filterCategory('attestations', this)">
        Attestations &amp; B3
      </button>
</div>
</div>
<!-- Documents Grid View Container -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-space-lg" id="documents-grid">
<!-- Item 1: Contrat CDI -->
<div class="doc-card group bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="contrats" data-cin="08492019" data-employee="Mohamed Ben Salem" data-name="Contrat_CDI_Mohamed_Ben_Salem.pdf">
<div>
<div class="flex items-start justify-between gap-space-sm mb-space-md">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-10 h-10 rounded-lg bg-error-container/40 text-error flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[22px]">picture_as_pdf</span>
</div>
<div class="min-w-0 flex flex-col">
<h2 class="font-headline-sm text-headline-sm text-on-surface truncate group-hover:text-primary transition-colors cursor-pointer" title="Contrat_CDI_Mohamed_Ben_Salem.pdf">Contrat_CDI_Mohamed_Ben_Salem.pdf</h2>
<span class="font-label-sm text-label-sm text-on-surface-variant font-numeric-md">1.4 Mo • Ajouté le 15 Jan 2020</span>
</div>
</div>
<!-- Status Pill: Active/Approved -->
<span class="shrink-0 h-6 px-2.5 rounded-full font-label-sm text-label-sm font-semibold inline-flex items-center gap-1.5 bg-[#ECFDF5] text-[#065F46]">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
<span>Actif</span>
</span>
</div>
<div class="bg-surface-container-low rounded-lg p-space-sm mb-space-md flex flex-col gap-1">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Salarié :</span>
<span class="text-on-surface font-semibold">Mohamed Ben Salem</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Signature :</span>
<span class="text-tertiary flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">verified</span> Électronique (15/01/2020)
            </span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Type :</span>
<span class="text-on-surface">CDI Cadre Technique</span>
</div>
</div>
</div>
<div class="flex flex-wrap items-center justify-between gap-1 pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">fingerprint</span> CNSS: 92837482-01
        </span>
<div class="flex items-center gap-1">
<button aria-label="Aperçu" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-primary transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
<button aria-label="Télécharger" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">download</span>
</button>
<button aria-label="Partager avec l'employé" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">share</span>
</button>
<button aria-label="Supprimer" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-error-container text-on-surface-variant hover:text-error transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">delete</span>
</button>
</div>
</div>
</div>
<!-- Item 2: Copie CIN Yasmine Trabelsi -->
<div class="doc-card group bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="identite" data-cin="11029482" data-employee="Yasmine Trabelsi" data-name="Copie_CIN_Yasmine_Trabelsi.pdf">
<div>
<div class="flex items-start justify-between gap-space-sm mb-space-md">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-10 h-10 rounded-lg bg-secondary-container text-primary-container flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[22px]">badge</span>
</div>
<div class="min-w-0 flex flex-col">
<h2 class="font-headline-sm text-headline-sm text-on-surface truncate group-hover:text-primary transition-colors cursor-pointer" title="Copie_CIN_Yasmine_Trabelsi.pdf">Copie_CIN_Yasmine_Trabelsi.pdf</h2>
<span class="font-label-sm text-label-sm text-on-surface-variant font-numeric-md">840 Ko • Vérifié RH Tunis</span>
</div>
</div>
<!-- Status Pill: Conforme -->
<span class="shrink-0 h-6 px-2.5 rounded-full font-label-sm text-label-sm font-semibold inline-flex items-center gap-1.5 bg-[#ECFDF5] text-[#065F46]">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
<span>Conforme</span>
</span>
</div>
<div class="bg-surface-container-low rounded-lg p-space-sm mb-space-md flex flex-col gap-1">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Salarié :</span>
<span class="text-on-surface font-semibold">Yasmine Trabelsi</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Numéro CIN :</span>
<span class="text-on-surface font-numeric-md font-semibold">11029482</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Validation :</span>
<span class="text-on-surface flex items-center gap-1 text-tertiary">
<span class="material-symbols-outlined text-[14px]">check_circle</span> Contrôle biométrique OK
            </span>
</div>
</div>
</div>
<div class="flex flex-wrap items-center justify-between gap-1 pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">calendar_today</span> Valide jusqu'en 2031
        </span>
<div class="flex items-center gap-1">
<button aria-label="Aperçu" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-primary transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
<button aria-label="Télécharger" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">download</span>
</button>
<button aria-label="Partager avec l'employé" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">share</span>
</button>
<button aria-label="Supprimer" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-error-container text-on-surface-variant hover:text-error transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">delete</span>
</button>
</div>
</div>
</div>
<!-- Item 3: Bulletin Paie Signe Fevrier 2025 -->
<div class="doc-card group bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="paie" data-cin="Group" data-employee="48 Salariés télétransmis" data-name="Bulletin_Paie_Signe_Fevrier_2025.pdf">
<div>
<div class="flex items-start justify-between gap-space-sm mb-space-md">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-10 h-10 rounded-lg bg-surface-container-high text-primary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[22px]">receipt_long</span>
</div>
<div class="min-w-0 flex flex-col">
<h2 class="font-headline-sm text-headline-sm text-on-surface truncate group-hover:text-primary transition-colors cursor-pointer" title="Bulletin_Paie_Signe_Fevrier_2025.pdf">Bulletin_Paie_Signe_Fevrier_2025.pdf</h2>
<span class="font-label-sm text-label-sm text-on-surface-variant font-numeric-md">420 Ko • Lot télétransmis</span>
</div>
</div>
<!-- Status Pill: Neutral / Cloturé -->
<span class="shrink-0 h-6 px-2.5 rounded-full font-label-sm text-label-sm font-semibold inline-flex items-center gap-1.5 bg-[#F1F5F9] text-[#475569]">
<span class="w-1.5 h-1.5 rounded-full bg-[#64748B]"></span>
<span>Clôturé</span>
</span>
</div>
<div class="bg-surface-container-low rounded-lg p-space-sm mb-space-md flex flex-col gap-1">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Périmètre :</span>
<span class="text-on-surface font-semibold">48 Salariés télétransmis</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Archivage CNSS :</span>
<span class="text-tertiary flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">cloud_done</span> Certifié conforme
            </span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Période :</span>
<span class="text-on-surface font-numeric-md">01/02/2025 - 28/02/2025</span>
</div>
</div>
</div>
<div class="flex flex-wrap items-center justify-between gap-1 pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">lock</span> Chiffré AES-256
        </span>
<div class="flex items-center gap-1">
<button aria-label="Aperçu" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-primary transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
<button aria-label="Télécharger" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">download</span>
</button>
<button aria-label="Partager avec l'employé" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">share</span>
</button>
<button aria-label="Supprimer" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-error-container text-on-surface-variant hover:text-error transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">delete</span>
</button>
</div>
</div>
</div>
<!-- Item 4: Convention Stage SIVP ANETI -->
<div class="doc-card group bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="contrats" data-cin="14209511" data-employee="Tarek Mansour" data-name="Convention_Stage_SIVP_ANETI_2025.pdf">
<div>
<div class="flex items-start justify-between gap-space-sm mb-space-md">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-10 h-10 rounded-lg bg-error-container/40 text-error flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[22px]">description</span>
</div>
<div class="min-w-0 flex flex-col">
<h2 class="font-headline-sm text-headline-sm text-on-surface truncate group-hover:text-primary transition-colors cursor-pointer" title="Convention_Stage_SIVP_ANETI_2025.pdf">Convention_Stage_SIVP_ANETI_2025.pdf</h2>
<span class="font-label-sm text-label-sm text-on-surface-variant font-numeric-md">1.1 Mo • Homologué Bureau Emploi</span>
</div>
</div>
<!-- Status Pill: Active/Approved -->
<span class="shrink-0 h-6 px-2.5 rounded-full font-label-sm text-label-sm font-semibold inline-flex items-center gap-1.5 bg-[#ECFDF5] text-[#065F46]">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
<span>Homologué</span>
</span>
</div>
<div class="bg-surface-container-low rounded-lg p-space-sm mb-space-md flex flex-col gap-1">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Stagiaire :</span>
<span class="text-on-surface font-semibold">Tarek Mansour</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Organisme :</span>
<span class="text-on-surface">ANETI Tunis Belvédère</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Prime SIVP :</span>
<span class="text-on-surface font-numeric-md">150.000 TND État + 600 Ent.</span>
</div>
</div>
</div>
<div class="flex flex-wrap items-center justify-between gap-1 pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">event</span> 01/03/2025 - 28/02/2026
        </span>
<div class="flex items-center gap-1">
<button aria-label="Aperçu" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-primary transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
<button aria-label="Télécharger" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">download</span>
</button>
<button aria-label="Partager avec l'employé" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">share</span>
</button>
<button aria-label="Supprimer" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-error-container text-on-surface-variant hover:text-error transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">delete</span>
</button>
</div>
</div>
</div>
<!-- Item 5: Certificat Medical Amine Dridi -->
<div class="doc-card group bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="attestations" data-cin="07412954" data-employee="Amine Dridi" data-name="Certificat_Medical_Amine_Dridi.pdf">
<div>
<div class="flex items-start justify-between gap-space-sm mb-space-md">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-10 h-10 rounded-lg bg-tertiary-container/20 text-tertiary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[22px]">medical_services</span>
</div>
<div class="min-w-0 flex flex-col">
<h2 class="font-headline-sm text-headline-sm text-on-surface truncate group-hover:text-primary transition-colors cursor-pointer" title="Certificat_Medical_Amine_Dridi.pdf">Certificat_Medical_Amine_Dridi.pdf</h2>
<span class="font-label-sm text-label-sm text-on-surface-variant font-numeric-md">650 Ko • Transmis CNSS</span>
</div>
</div>
<!-- Status Pill: Validé CNSS -->
<span class="shrink-0 h-6 px-2.5 rounded-full font-label-sm text-label-sm font-semibold inline-flex items-center gap-1.5 bg-[#ECFDF5] text-[#065F46]">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
<span>Validé CNSS</span>
</span>
</div>
<div class="bg-surface-container-low rounded-lg p-space-sm mb-space-md flex flex-col gap-1">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Salarié :</span>
<span class="text-on-surface font-semibold">Amine Dridi</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Médecin traitant :</span>
<span class="text-on-surface">Dr. Moncef Ayadi</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Durée de repos :</span>
<span class="text-on-surface font-numeric-md">05 Jours (du 18 au 22 Fév)</span>
</div>
</div>
</div>
<div class="flex flex-wrap items-center justify-between gap-1 pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">health_and_safety</span> Dossier CNSS 4819-B
        </span>
<div class="flex items-center gap-1">
<button aria-label="Aperçu" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-primary transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
<button aria-label="Télécharger" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">download</span>
</button>
<button aria-label="Partager avec l'employé" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">share</span>
</button>
<button aria-label="Supprimer" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-error-container text-on-surface-variant hover:text-error transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">delete</span>
</button>
</div>
</div>
</div>
<!-- Item 6: Attestation de Salaire Karim Chaabane -->
<div class="doc-card group bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="attestations" data-cin="09182374" data-employee="Karim Chaabane" data-name="Attestation_Salaire_Karim_Chaabane.pdf">
<div>
<div class="flex items-start justify-between gap-space-sm mb-space-md">
<div class="flex items-center gap-space-sm min-w-0">
<div class="w-10 h-10 rounded-lg bg-surface-container text-secondary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[22px]">assignment</span>
</div>
<div class="min-w-0 flex flex-col">
<h2 class="font-headline-sm text-headline-sm text-on-surface truncate group-hover:text-primary transition-colors cursor-pointer" title="Attestation_Salaire_Karim_Chaabane.pdf">Attestation_Salaire_Karim_Chaabane.pdf</h2>
<span class="font-label-sm text-label-sm text-on-surface-variant font-numeric-md">310 Ko • Téléchargé hier</span>
</div>
</div>
<!-- Status Pill: En attente / Pending -->
<span class="shrink-0 h-6 px-2.5 rounded-full font-label-sm text-label-sm font-semibold inline-flex items-center gap-1.5 bg-[#FFFBEB] text-[#92400E]">
<span class="w-1.5 h-1.5 rounded-full bg-[#F59E0B]"></span>
<span>Délivrée</span>
</span>
</div>
<div class="bg-surface-container-low rounded-lg p-space-sm mb-space-md flex flex-col gap-1">
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Salarié :</span>
<span class="text-on-surface font-semibold">Karim Chaabane</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Motif de demande :</span>
<span class="text-on-surface">Crédit Bancaire BIAT</span>
</div>
<div class="flex items-center justify-between text-body-sm font-body-sm">
<span class="text-on-surface-variant">Salaire Brut mentionné :</span>
<span class="text-on-surface font-numeric-md">3,850.000 TND</span>
</div>
</div>
</div>
<div class="flex flex-wrap items-center justify-between gap-1 pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">verified</span> Tampon légal électronique
        </span>
<div class="flex items-center gap-1">
<button aria-label="Aperçu" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-primary transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
<button aria-label="Télécharger" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">download</span>
</button>
<button aria-label="Partager avec l'employé" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">share</span>
</button>
<button aria-label="Supprimer" class="w-8 h-8 rounded-lg bg-surface-container-low hover:bg-error-container text-on-surface-variant hover:text-error transition-colors flex items-center justify-center" type="button">
<span class="material-symbols-outlined text-body-md">delete</span>
</button>
</div>
</div>
</div>
</div>
<!-- Documents Detailed Table View (Initially Hidden) -->
<div class="hidden bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden" id="documents-list">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low h-10 border-b border-surface-container">
<th class="px-space-md font-label-md text-label-md text-on-surface-variant uppercase tracking-wider w-10">
<input class="rounded accent-primary cursor-pointer" type="checkbox"/>
</th>
<th class="px-space-md font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Document / Fichier</th>
<th class="px-space-md font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Collaborateur associé</th>
<th class="px-space-md font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Catégorie</th>
<th class="px-space-md font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Taille &amp; Date</th>
<th class="px-space-md font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Statut légal</th>
<th class="px-space-md font-label-md text-label-md text-on-surface-variant uppercase tracking-wider text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-low">
<!-- Row 1 -->
<tr class="h-14 hover:bg-surface-container-low transition-colors">
<td class="px-space-md">
<input class="rounded accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="px-space-md">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-error text-headline-sm">picture_as_pdf</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold hover:text-primary cursor-pointer">Contrat_CDI_Mohamed_Ben_Salem.pdf</span>
</div>
</td>
<td class="px-space-md">
<span class="font-body-md text-body-md text-on-surface font-medium">Mohamed Ben Salem</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Mat: CT-0042 • CIN: 08492019</span>
</td>
<td class="px-space-md">
<span class="font-body-sm text-body-sm text-on-surface">Contrats de Travail</span>
</td>
<td class="px-space-md">
<span class="font-numeric-md text-numeric-md text-on-surface">1.4 Mo</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">15/01/2020</span>
</td>
<td class="px-space-md">
<span class="h-6 px-2.5 rounded-full font-label-sm text-label-sm font-semibold inline-flex items-center gap-1.5 bg-[#ECFDF5] text-[#065F46]">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
<span>Actif</span>
</span>
</td>
<td class="px-space-md text-right">
<div class="inline-flex items-center gap-1">
<button class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-primary flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
<button class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-on-surface flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">download</span>
</button>
<button class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-on-surface flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="h-14 hover:bg-surface-container-low transition-colors">
<td class="px-space-md">
<input class="rounded accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="px-space-md">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-primary-container text-headline-sm">badge</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold hover:text-primary cursor-pointer">Copie_CIN_Yasmine_Trabelsi.pdf</span>
</div>
</td>
<td class="px-space-md">
<span class="font-body-md text-body-md text-on-surface font-medium">Yasmine Trabelsi</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Mat: CT-0089 • CIN: 11029482</span>
</td>
<td class="px-space-md">
<span class="font-body-sm text-body-sm text-on-surface">Copies CIN &amp; Passeport</span>
</td>
<td class="px-space-md">
<span class="font-numeric-md text-numeric-md text-on-surface">840 Ko</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">04/09/2023</span>
</td>
<td class="px-space-md">
<span class="h-6 px-2.5 rounded-full font-label-sm text-label-sm font-semibold inline-flex items-center gap-1.5 bg-[#ECFDF5] text-[#065F46]">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
<span>Conforme</span>
</span>
</td>
<td class="px-space-md text-right">
<div class="inline-flex items-center gap-1">
<button class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-primary flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
<button class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-on-surface flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">download</span>
</button>
<button class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-on-surface flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="h-14 hover:bg-surface-container-low transition-colors">
<td class="px-space-md">
<input class="rounded accent-primary cursor-pointer" type="checkbox"/>
</td>
<td class="px-space-md">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-primary text-headline-sm">receipt_long</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold hover:text-primary cursor-pointer">Bulletin_Paie_Signe_Fevrier_2025.pdf</span>
</div>
</td>
<td class="px-space-md">
<span class="font-body-md text-body-md text-on-surface font-medium">48 Salariés télétransmis</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Lot Mensuel Paie TN</span>
</td>
<td class="px-space-md">
<span class="font-body-sm text-body-sm text-on-surface">Fiches de Paie signées</span>
</td>
<td class="px-space-md">
<span class="font-numeric-md text-numeric-md text-on-surface">420 Ko</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">28/02/2025</span>
</td>
<td class="px-space-md">
<span class="h-6 px-2.5 rounded-full font-label-sm text-label-sm font-semibold inline-flex items-center gap-1.5 bg-[#F1F5F9] text-[#475569]">
<span class="w-1.5 h-1.5 rounded-full bg-[#64748B]"></span>
<span>Clôturé</span>
</span>
</td>
<td class="px-space-md text-right">
<div class="inline-flex items-center gap-1">
<button class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-primary flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">visibility</span>
</button>
<button class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-on-surface flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">download</span>
</button>
<button class="w-8 h-8 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-on-surface flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">more_vert</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Table Pagination -->
<div class="p-space-md bg-surface-container-low/50 flex items-center justify-between">
<span class="font-body-sm text-body-sm text-on-surface-variant">Affichage de 1 à 6 sur 384 documents certifiés</span>
<div class="flex items-center gap-space-xs">
<button class="px-3 py-1 rounded bg-surface-container-lowest text-on-surface-variant hover:text-on-surface text-label-md font-label-md shadow-xs disabled:opacity-50" disabled="">Précédent</button>
<button class="px-3 py-1 rounded bg-primary-container text-on-primary text-label-md font-label-md">1</button>
<button class="px-3 py-1 rounded bg-surface-container-lowest text-on-surface-variant hover:text-on-surface text-label-md font-label-md shadow-xs">2</button>
<button class="px-3 py-1 rounded bg-surface-container-lowest text-on-surface-variant hover:text-on-surface text-label-md font-label-md shadow-xs">3</button>
<button class="px-3 py-1 rounded bg-surface-container-lowest text-on-surface-variant hover:text-on-surface text-label-md font-label-md shadow-xs">Suivant</button>
</div>
</div>
</div>
<!-- Tunisian Regulatory & Compliance Banner Footer -->
<div class="mt-space-xl bg-surface-container-low rounded-xl p-space-md flex flex-col md:flex-row items-start md:items-center justify-between gap-space-md">
<div class="flex items-center gap-space-md">
<div class="w-10 h-10 rounded-lg bg-tertiary-container/20 text-tertiary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-headline-sm">gavel</span>
</div>
<div>
<span class="font-headline-sm text-headline-sm text-on-surface font-semibold block">Conservation Légale &amp; Traçabilité Numérique</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
          Respect du Décret-loi n° 2020-17 et des préconisations INPDP pour la protection des données personnelles en Tunisie. Horodatage électronique certifié ANSI/TunTrust.
        </p>
</div>
</div>
<div class="flex items-center gap-space-sm shrink-0">
<button class="px-space-md py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-md text-label-md shadow-xs transition-colors" type="button">
        Journal d'Audit
      </button>
<button class="px-space-md py-1.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-md text-label-md shadow-xs transition-colors" type="button">
        Exporter Registre
      </button>
</div>
</div>
</div>
<!-- Interactive Client-side Script for Instant Filtering & View Switching -->
<script>
  function switchView(viewType) {
    const grid = document.getElementById('documents-grid');
    const list = document.getElementById('documents-list');
    const gridBtn = document.getElementById('view-grid-btn');
    const listBtn = document.getElementById('view-list-btn');

    if (viewType === 'grid') {
      grid.classList.remove('hidden');
      list.classList.add('hidden');
      gridBtn.className = 'px-3 py-1.5 rounded-md font-label-md text-label-md flex items-center gap-1.5 bg-surface-container-lowest text-primary shadow-xs transition-all';
      listBtn.className = 'px-3 py-1.5 rounded-md font-label-md text-label-md flex items-center gap-1.5 text-on-surface-variant hover:text-on-surface transition-all';
    } else {
      grid.classList.add('hidden');
      list.classList.remove('hidden');
      listBtn.className = 'px-3 py-1.5 rounded-md font-label-md text-label-md flex items-center gap-1.5 bg-surface-container-lowest text-primary shadow-xs transition-all';
      gridBtn.className = 'px-3 py-1.5 rounded-md font-label-md text-label-md flex items-center gap-1.5 text-on-surface-variant hover:text-on-surface transition-all';
    }
  }

  function filterCategory(category, button) {
    // Style pills
    const pills = document.querySelectorAll('.category-pill');
    pills.forEach(p => {
      p.className = 'category-pill shrink-0 px-space-md py-1.5 rounded-full font-label-md text-label-md transition-all bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface';
    });
    button.className = 'category-pill shrink-0 px-space-md py-1.5 rounded-full font-label-md text-label-md transition-all bg-primary-container text-on-primary';

    // Filter cards
    const cards = document.querySelectorAll('.doc-card');
    cards.forEach(card => {
      if (category === 'all' || card.getAttribute('data-category') === category) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  }

  // Real-time Search
  const searchInput = document.getElementById('search-input');
  if (searchInput) {
    searchInput.addEventListener('input', function(e) {
      const query = e.target.value.toLowerCase().trim();
      const cards = document.querySelectorAll('.doc-card');
      cards.forEach(card => {
        const name = (card.getAttribute('data-name') || '').toLowerCase();
        const cin = (card.getAttribute('data-cin') || '').toLowerCase();
        const emp = (card.getAttribute('data-employee') || '').toLowerCase();
        if (name.includes(query) || cin.includes(query) || emp.includes(query)) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  }

  // Drag and drop feedback
  const dropZone = document.getElementById('drop-zone');
  if (dropZone) {
    ['dragenter', 'dragover'].forEach(eventName => {
      dropZone.addEventListener(eventName, (e) => {
        e.preventDefault();
        dropZone.classList.add('bg-primary/5', 'border', 'border-dashed', 'border-primary');
      }, false);
    });
    ['dragleave', 'drop'].forEach(eventName => {
      dropZone.addEventListener(eventName, (e) => {
        e.preventDefault();
        dropZone.classList.remove('bg-primary/5', 'border', 'border-dashed', 'border-primary');
      }, false);
    });
  }
</script>
</x-admin-shell>
