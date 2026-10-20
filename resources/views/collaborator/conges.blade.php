@php
    $user = auth()->user();
    $matricule = 'MAT-' . str_pad($user->id, 4, '0', STR_PAD_LEFT);
@endphp

<x-collaborator-shell active="conges" title="Mes Congés & Absences">
<div class="flex flex-col w-full">
<div class="px-space-xl py-space-lg flex flex-col gap-space-xl max-w-[1536px] mx-auto w-full">
<!-- Hero / Header Section -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-space-lg bg-surface-container-lowest p-space-xl rounded-xl shadow-sm relative overflow-hidden">
<div class="absolute -right-12 -top-12 w-64 h-64 bg-primary-container/5 rounded-full blur-3xl pointer-events-none"></div>
<div class="flex flex-col gap-space-xs z-10">
<div class="flex items-center gap-space-xs">
<span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed text-label-sm font-label-sm uppercase tracking-wider font-semibold">
            Réglementation TN - Art. 112 à 133
          </span>
<span class="text-on-surface-variant font-label-sm text-label-sm">• Exercice 2024 / 2025</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
          Mes Congés &amp; Demandes d'Absence
        </h1>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
          Consultez vos soldes réglementaires (Loi n° 66-27 portant Code du Travail), planifiez vos départs en concertation avec l'équipe et suivez l'avancement de vos visas d'approbation.
        </p>
</div>
<div class="flex items-center gap-space-sm z-10 shrink-0">
<button class="h-10 px-space-lg rounded-xl bg-primary-container text-on-primary font-label-lg text-label-lg flex items-center gap-space-xs hover:bg-primary shadow-sm transition-all transform active:scale-95" id="btn-open-request-drawer" type="button">
<span class="material-symbols-outlined text-[20px]">add_circle</span>
<span>+ Déposer une Demande de Congé</span>
</button>
</div>
</div>
<!-- Balance Overview Strip (4 metric cards) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-lg">
<!-- Card 1: Congé Annuel Payé -->
<div class="p-space-xl rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-all">
<div class="flex items-start justify-between">
<div class="flex flex-col">
<span class="text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">Solde Principal</span>
<span class="text-on-surface font-headline-sm text-headline-sm mt-0.5">Congé Annuel Payé</span>
</div>
<div class="w-10 h-10 rounded-xl bg-primary-fixed flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[22px]">beach_access</span>
</div>
</div>
<div class="my-space-md">
<div class="flex items-baseline gap-space-xs">
<span class="font-display-lg text-display-lg text-primary tracking-tight" id="annual-balance-display">16.0</span>
<span class="font-headline-sm text-headline-sm text-on-surface-variant">Jours restants</span>
</div>
<div class="flex items-center justify-between text-on-surface-variant font-label-md text-label-md mt-1">
<span>22.0 j acquis</span>
<span class="text-error font-medium">6.0 j pris</span>
</div>
</div>
<div class="w-full">
<div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
<div class="h-full bg-primary-container rounded-full transition-all duration-700" style="width: 72%;"></div>
</div>
<div class="flex justify-between items-center mt-1.5 font-label-sm text-label-sm text-on-surface-variant">
<span>Taux de consommation : 28%</span>
<span class="text-tertiary-container font-semibold">72% disponible</span>
</div>
</div>
</div>
<!-- Card 2: Congé Maladie Ordinaire -->
<div class="p-space-xl rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between group hover:shadow-md transition-all">
<div class="flex items-start justify-between">
<div class="flex flex-col">
<span class="text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">Santé &amp; Prévoyance</span>
<span class="text-on-surface font-headline-sm text-headline-sm mt-0.5">Maladie Ordinaire</span>
</div>
<div class="w-10 h-10 rounded-xl bg-secondary-container flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[22px]">healing</span>
</div>
</div>
<div class="my-space-md">
<div class="flex items-baseline gap-space-xs">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">0.0</span>
<span class="font-headline-sm text-headline-sm text-on-surface-variant">Jour utilisé</span>
</div>
<div class="text-on-surface-variant font-label-md text-label-md mt-1">
            Couverture CNSS active sans carence
          </div>
</div>
<div class="p-space-xs px-space-sm rounded-lg bg-surface-container-low flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px] text-tertiary-container">verified</span>
<span>Dépôt certificat obligatoire sous 48h</span>
</div>
</div>
<!-- Card 3: Événements Familiaux -->
<div class="p-space-xl rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between group hover:shadow-md transition-all">
<div class="flex items-start justify-between">
<div class="flex flex-col">
<span class="text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">Droits Conventionnels</span>
<span class="text-on-surface font-headline-sm text-headline-sm mt-0.5">Événements Familiaux</span>
</div>
<div class="w-10 h-10 rounded-xl bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed">
<span class="material-symbols-outlined text-[22px]">diversity_1</span>
</div>
</div>
<div class="my-space-md">
<div class="flex items-baseline gap-space-xs">
<span class="font-display-lg text-display-lg text-on-surface tracking-tight">Ouvert</span>
<span class="font-headline-sm text-headline-sm text-on-surface-variant">Légal</span>
</div>
<div class="text-on-surface-variant font-label-md text-label-md mt-1 flex flex-wrap gap-1">
<span class="px-1.5 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Mariage (3j)</span>
<span class="px-1.5 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Naiss. (2j)</span>
<span class="px-1.5 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Décès (2-3j)</span>
</div>
</div>
<div class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">info</span>
<span>Sans impact sur le solde annuel</span>
</div>
</div>
<!-- Card 4: Récupération / RTT -->
<div class="p-space-xl rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between group hover:shadow-md transition-all">
<div class="flex items-start justify-between">
<div class="flex flex-col">
<span class="text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">Compensation</span>
<span class="text-on-surface font-headline-sm text-headline-sm mt-0.5">Heures Sup. / Astreinte</span>
</div>
<div class="w-10 h-10 rounded-xl bg-tertiary-fixed flex items-center justify-center text-tertiary">
<span class="material-symbols-outlined text-[22px]">more_time</span>
</div>
</div>
<div class="my-space-md">
<div class="flex items-baseline gap-space-xs">
<span class="font-display-lg text-display-lg text-tertiary-container tracking-tight">1.5</span>
<span class="font-headline-sm text-headline-sm text-on-surface-variant">Jour dispo</span>
</div>
<div class="text-on-surface-variant font-label-md text-label-md mt-1">
            Généré par les astreintes Prod S06 &amp; S08
          </div>
</div>
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant">À purger avant:</span>
<span class="text-on-surface font-semibold">30 Avril 2025</span>
</div>
</div>
</div>
<!-- Team Overlap Alert Banner / Collision Check -->
<div class="rounded-xl bg-surface-container-lowest p-space-md px-space-lg shadow-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-space-md">
<div class="flex items-center gap-space-md">
<div class="w-10 h-10 rounded-xl bg-tertiary-fixed/30 flex items-center justify-center text-tertiary-container shrink-0">
<span class="material-symbols-outlined text-[22px]">groups</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-space-xs">
<span class="font-headline-sm text-headline-sm text-on-surface">Continuité opérationnelle Tech &amp; Architecture</span>
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-[#ECFDF5] text-[#065F46] font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
              Aucun conflit
            </span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
            Pôle Ingénierie : Mehdi Zghal (Senior Backend) et Sonia Trabelsi (Front Lead) sont prévus en service continu durant vos dates cibles. Quorum minimal garanti (100%).
          </p>
</div>
</div>
<div class="flex items-center gap-space-sm w-full md:w-auto justify-end">
<div class="flex -space-x-2 overflow-hidden">
<div class="inline-block h-8 w-8 rounded-full ring-2 ring-surface bg-primary-container text-on-primary flex items-center justify-center font-label-sm text-[11px] font-bold">MZ</div>
<div class="inline-block h-8 w-8 rounded-full ring-2 ring-surface bg-secondary-container text-on-secondary-fixed flex items-center justify-center font-label-sm text-[11px] font-bold">ST</div>
<div class="inline-block h-8 w-8 rounded-full ring-2 ring-surface bg-surface-container-highest text-on-surface flex items-center justify-center font-label-sm text-[11px] font-bold">+3</div>
</div>
<button class="px-space-md py-1.5 rounded-lg bg-surface-container-high text-on-surface font-label-md text-label-md hover:bg-surface-variant transition-colors" type="button">
          Planning équipe
        </button>
</div>
</div>
<!-- Main Workspace Split: Simulation Form & Requests History -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
<!-- Left Column: Fast Request / Simulator Form -->
<div class="lg:col-span-5 flex flex-col gap-space-lg" id="request-card-container">
<div class="bg-surface-container-lowest p-space-xl rounded-xl shadow-sm flex flex-col gap-space-lg">
<div class="flex items-center justify-between">
<div class="flex flex-col">
<h2 class="font-headline-sm text-headline-sm text-on-surface flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-[20px]">edit_calendar</span>
                Nouvelle Demande d'Absence
              </h2>
<span class="font-body-sm text-body-sm text-on-surface-variant">Simulation dynamique du décompte légal</span>
</div>
<span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-medium">Étape 1/2</span>
</div>
<form class="flex flex-col gap-space-md" id="leave-request-form">
<!-- Type de congé -->
<div class="flex flex-col gap-space-xs">
<label class="font-label-lg text-label-lg text-on-surface" for="leave-type-select">Type de congé ou motif réglementaire</label>
<select class="h-10 px-space-md rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary-container transition-all" id="leave-type-select">
<option selected="" value="ANNUEL">Congé Annuel Payé (Solde: 16.0 j)</option>
<option value="SANS_SOLDE">Congé Sans Solde (Autorisation préalable)</option>
<option value="MALADIE">Congé Maladie (Certificat médical CNSS)</option>
<option value="MARIAGE">Événement Familial - Mariage (3 jours)</option>
<option value="NAISSANCE">Événement Familial - Naissance (2 jours)</option>
<option value="RECUP">Récupération / Heures Supplémentaires (1.5 j)</option>
</select>
</div>
<!-- Date Range Selectors -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-space-xs">
<label class="font-label-lg text-label-lg text-on-surface" for="date-start">Date de début</label>
<input class="h-10 px-space-md rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary-container" id="date-start" type="date" value="2025-04-14"/>
<div class="flex gap-2 mt-1">
<label class="flex items-center gap-1 font-label-sm text-label-sm text-on-surface-variant cursor-pointer">
<input checked="" class="text-primary focus:ring-0" name="start-period" type="radio" value="MATIN"/> Matin
                  </label>
<label class="flex items-center gap-1 font-label-sm text-label-sm text-on-surface-variant cursor-pointer">
<input class="text-primary focus:ring-0" name="start-period" type="radio" value="MIDI"/> Après-midi
                  </label>
</div>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-lg text-label-lg text-on-surface" for="date-end">Date de fin</label>
<input class="h-10 px-space-md rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary-container" id="date-end" type="date" value="2025-04-18"/>
<div class="flex gap-2 mt-1">
<label class="flex items-center gap-1 font-label-sm text-label-sm text-on-surface-variant cursor-pointer">
<input class="text-primary focus:ring-0" name="end-period" type="radio" value="MIDI"/> Midi
                  </label>
<label class="flex items-center gap-1 font-label-sm text-label-sm text-on-surface-variant cursor-pointer">
<input checked="" class="text-primary focus:ring-0" name="end-period" type="radio" value="SOIR"/> Fin de journée
                  </label>
</div>
</div>
</div>
<!-- Live Calculation Feedback Box -->
<div class="p-space-md rounded-xl bg-surface-container-high/60 flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface-variant">Jours ouvrés décomptés :</span>
<span class="font-headline-sm text-headline-sm text-primary font-bold" id="calculated-days-count">5.0 Jours</span>
</div>
<div class="flex items-center justify-between pt-1 text-on-surface">
<span class="font-label-md text-label-md text-on-surface-variant">Nouveau solde prévisionnel :</span>
<span class="font-headline-sm text-headline-sm text-tertiary-container font-semibold" id="projected-balance">11.0 Jours</span>
</div>
<div class="flex items-center gap-1 font-label-sm text-label-sm text-on-surface-variant pt-1">
<span class="material-symbols-outlined text-[14px] text-tertiary">check_circle</span>
<span>Samedi &amp; Dimanche non décomptés (Régime 40h/semaine)</span>
</div>
</div>
<!-- Motif / Commentaire -->
<div class="flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<label class="font-label-lg text-label-lg text-on-surface" for="leave-comment">Motif / Commentaire de passation</label>
<span class="font-label-sm text-label-sm text-on-surface-variant">N+1 : Amel Ben Salah</span>
</div>
<textarea class="p-space-md rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary-container resize-none" id="leave-comment" placeholder="Ex: Congés de printemps. Relais des revues de code assuré par Mehdi Zghal." rows="3"></textarea>
</div>
<!-- File Upload (Certificat / Justificatif) -->
<div class="flex flex-col gap-space-xs" id="justificatif-container">
<div class="flex items-center justify-between">
<label class="font-label-lg text-label-lg text-on-surface">Pièce justificative</label>
<span class="font-label-sm text-label-sm text-on-surface-variant" id="justificatif-optional-badge">Optionnel pour Congé Payé</span>
</div>
<div class="p-space-md rounded-xl bg-surface-container-low flex items-center justify-between gap-space-md">
<div class="flex items-center gap-space-sm overflow-hidden">
<div class="w-8 h-8 rounded-lg bg-surface-container-highest flex items-center justify-center text-on-surface-variant shrink-0">
<span class="material-symbols-outlined text-[18px]">attach_file</span>
</div>
<div class="flex flex-col truncate">
<span class="font-label-md text-label-md text-on-surface truncate">Ajouter un document (PDF, PNG, JPG)</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Max. 5 Mo (Requis pour Maladie &amp; Mariage)</span>
</div>
</div>
<label class="h-8 px-space-md rounded-lg bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center gap-1 cursor-pointer hover:bg-surface-variant transition-colors shrink-0">
<span>Parcourir</span>
<input class="hidden" type="file"/>
</label>
</div>
</div>
<!-- Submit Button & Workflow details -->
<div class="pt-space-xs flex flex-col gap-space-xs">
<button class="w-full h-10 rounded-xl bg-primary-container text-on-primary font-label-lg text-label-lg flex items-center justify-center gap-space-xs hover:bg-primary shadow-sm transition-all transform active:scale-98" id="submit-leave-btn" type="button">
<span class="material-symbols-outlined text-[18px]">send</span>
<span>Transmettre pour Visa Manager (N+1)</span>
</button>
<p class="font-label-sm text-label-sm text-on-surface-variant text-center">
                Délai moyen de validation constatée chez Carthage Tech : ~4 heures ouvrées.
              </p>
</div>
</form>
</div>
<!-- Practical Guide Card -->
<div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col gap-space-sm">
<div class="flex items-center gap-space-xs text-on-surface font-headline-sm text-headline-sm">
<span class="material-symbols-outlined text-primary text-[20px]">policy</span>
<span>Rappels Conventionnels &amp; RH</span>
</div>
<ul class="flex flex-col gap-2 font-body-sm text-body-sm text-on-surface-variant">
<li class="flex items-start gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-primary mt-1.5 shrink-0"></span>
<span><strong>Délai de prévenance :</strong> Déposer au moins 7 jours calendaires à l'avance pour tout congé supérieur à 3 jours.</span>
</li>
<li class="flex items-start gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-primary mt-1.5 shrink-0"></span>
<span><strong>Certificat Maladie :</strong> Transmission impérative du feuillet CNSS sous 48 heures au service RH.</span>
</li>
<li class="flex items-start gap-2">
<span class="w-1.5 h-1.5 rounded-full bg-primary mt-1.5 shrink-0"></span>
<span><strong>Fractionnement :</strong> Le congé principal doit comporter au moins 12 jours ouvrables consécutifs.</span>
</li>
</ul>
</div>
</div>
<!-- Right Column: Personal Leave History & Requests Table -->
<div class="lg:col-span-7 flex flex-col gap-space-lg">
<!-- Table Card -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
<!-- Table Controls & Tabs -->
<div class="p-space-lg flex flex-col sm:flex-row sm:items-center justify-between gap-space-md bg-surface-container-low/50">
<div class="flex items-center gap-1 bg-surface-container-high p-1 rounded-xl">
<button class="history-tab px-space-md py-1 rounded-lg bg-surface text-on-surface font-label-md text-label-md shadow-xs transition-all" data-filter="all" type="button">
                Toutes (6)
              </button>
<button class="history-tab px-space-md py-1 rounded-lg text-on-surface-variant font-label-md text-label-md hover:text-on-surface transition-all" data-filter="pending" type="button">
                En attente (1)
              </button>
<button class="history-tab px-space-md py-1 rounded-lg text-on-surface-variant font-label-md text-label-md hover:text-on-surface transition-all" data-filter="approved" type="button">
                Approuvées (4)
              </button>
<button class="history-tab px-space-md py-1 rounded-lg text-on-surface-variant font-label-md text-label-md hover:text-on-surface transition-all" data-filter="rejected" type="button">
                Refusées (1)
              </button>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">tune</span>
<span>Année : <strong>2024 - 2025</strong></span>
</div>
</div>
<!-- Responsive Data Table -->
<div class="overflow-x-auto">
<table class="w-full text-left font-body-md text-body-md text-on-surface">
<thead>
<tr class="bg-surface-container-low text-on-surface-variant font-label-md text-label-md uppercase tracking-wider h-10">
<th class="px-space-md font-semibold">Type &amp; Période</th>
<th class="px-space-md font-semibold text-center">Durée</th>
<th class="px-space-md font-semibold">Validation</th>
<th class="px-space-md font-semibold">Statut</th>
<th class="px-space-md font-semibold text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-low">
<!-- Row 1: Pending Request -->
<tr class="hover:bg-surface-container-low/40 transition-colors" data-status="pending">
<td class="px-space-md py-space-md">
<div class="flex flex-col">
<div class="flex items-center gap-1.5">
<span class="font-headline-sm text-headline-sm text-on-surface">Congé Annuel Payé</span>
<span class="px-1.5 py-0.2 rounded bg-primary-fixed text-primary font-label-sm text-[10px]">Printemps</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                        18 Mars 2025 au 22 Mars 2025
                      </span>
<span class="font-label-sm text-label-sm text-outline mt-0.5">Déposé le 02 Mars 2025</span>
</div>
</td>
<td class="px-space-md py-space-md text-center">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">5.0 j</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Ouvrés</span>
</td>
<td class="px-space-md py-space-md">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface">Amel Ben Salah</span>
<span class="font-label-sm text-label-sm text-on-secondary-container">N+1 Manager Tech</span>
<span class="font-label-sm text-label-sm text-primary flex items-center gap-0.5 mt-0.5">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                        Revue en cours
                      </span>
</div>
</td>
<td class="px-space-md py-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#FFFBEB] text-[#92400E] font-label-sm text-label-sm font-semibold">
<span class="w-2 h-2 rounded-full bg-[#F59E0B]"></span>
                      En attente
                    </span>
</td>
<td class="px-space-md py-space-md text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 rounded-lg text-error hover:bg-error-container/20 transition-colors" title="Annuler ma demande" type="button">
<span class="material-symbols-outlined text-[18px]">cancel</span>
</button>
<button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-colors" title="Voir les détails" type="button">
<span class="material-symbols-outlined text-[18px]">visibility</span>
</button>
</div>
</td>
</tr>
<!-- Row 2: Approved Maladie -->
<tr class="hover:bg-surface-container-low/40 transition-colors" data-status="approved">
<td class="px-space-md py-space-md">
<div class="flex flex-col">
<div class="flex items-center gap-1.5">
<span class="font-headline-sm text-headline-sm text-on-surface">Congé Maladie</span>
<span class="px-1.5 py-0.2 rounded bg-secondary-container text-on-secondary-fixed font-label-sm text-[10px]">Justifié</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                        14 Janv. 2025 au 16 Janv. 2025
                      </span>
<span class="font-label-sm text-label-sm text-outline mt-0.5">Déposé le 14 Janv. 2025</span>
</div>
</td>
<td class="px-space-md py-space-md text-center">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">2.0 j</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Légaux</span>
</td>
<td class="px-space-md py-space-md">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface">Rim Jaziri</span>
<span class="font-label-sm text-label-sm text-on-secondary-container">Service RH Carthage</span>
<span class="font-label-sm text-label-sm text-tertiary-container flex items-center gap-0.5 mt-0.5">
<span class="material-symbols-outlined text-[14px]">task_alt</span>
                        Certificat Dr. Ayadi (CNSS)
                      </span>
</div>
</td>
<td class="px-space-md py-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#ECFDF5] text-[#065F46] font-label-sm text-label-sm font-semibold">
<span class="w-2 h-2 rounded-full bg-[#10B981]"></span>
                      Validé RH
                    </span>
</td>
<td class="px-space-md py-space-md text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 rounded-lg text-primary hover:bg-surface-container-high transition-colors" title="Télécharger le récépissé CNSS" type="button">
<span class="material-symbols-outlined text-[18px]">download</span>
</button>
</div>
</td>
</tr>
<!-- Row 3: Approved Congé Annuel -->
<tr class="hover:bg-surface-container-low/40 transition-colors" data-status="approved">
<td class="px-space-md py-space-md">
<div class="flex flex-col">
<div class="flex items-center gap-1.5">
<span class="font-headline-sm text-headline-sm text-on-surface">Congé Annuel Payé</span>
<span class="px-1.5 py-0.2 rounded bg-surface-container text-on-surface font-label-sm text-[10px]">Fin d'année</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                        26 Déc. 2024 au 30 Déc. 2024
                      </span>
<span class="font-label-sm text-label-sm text-outline mt-0.5">Déposé le 05 Déc. 2024</span>
</div>
</td>
<td class="px-space-md py-space-md text-center">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">4.0 j</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Ouvrés</span>
</td>
<td class="px-space-md py-space-md">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface">Amel Ben Salah</span>
<span class="font-label-sm text-label-sm text-on-secondary-container">N+1 Validé</span>
</div>
</td>
<td class="px-space-md py-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#ECFDF5] text-[#065F46] font-label-sm text-label-sm font-semibold">
<span class="w-2 h-2 rounded-full bg-[#10B981]"></span>
                      Approuvé
                    </span>
</td>
<td class="px-space-md py-space-md text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-colors" title="Historique d'approbation" type="button">
<span class="material-symbols-outlined text-[18px]">verified</span>
</button>
</div>
</td>
</tr>
<!-- Row 4: Approved Récupération -->
<tr class="hover:bg-surface-container-low/40 transition-colors" data-status="approved">
<td class="px-space-md py-space-md">
<div class="flex flex-col">
<div class="flex items-center gap-1.5">
<span class="font-headline-sm text-headline-sm text-on-surface">Repos Compensateur</span>
<span class="px-1.5 py-0.2 rounded bg-tertiary-fixed text-tertiary font-label-sm text-[10px]">Astreinte</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                        04 Nov. 2024
                      </span>
<span class="font-label-sm text-label-sm text-outline mt-0.5">Déposé le 28 Oct. 2024</span>
</div>
</td>
<td class="px-space-md py-space-md text-center">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">1.0 j</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Compensé</span>
</td>
<td class="px-space-md py-space-md">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface">Amel Ben Salah</span>
<span class="font-label-sm text-label-sm text-on-secondary-container">N+1 Validé</span>
</div>
</td>
<td class="px-space-md py-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#ECFDF5] text-[#065F46] font-label-sm text-label-sm font-semibold">
<span class="w-2 h-2 rounded-full bg-[#10B981]"></span>
                      Approuvé
                    </span>
</td>
<td class="px-space-md py-space-md text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-colors" type="button">
<span class="material-symbols-outlined text-[18px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- Row 5: Rejected Request -->
<tr class="hover:bg-surface-container-low/40 transition-colors" data-status="rejected">
<td class="px-space-md py-space-md">
<div class="flex flex-col">
<div class="flex items-center gap-1.5">
<span class="font-headline-sm text-headline-sm text-on-surface">Congé Sans Solde</span>
<span class="px-1.5 py-0.2 rounded bg-error-container text-on-error-container font-label-sm text-[10px]">Non Accordé</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                        12 Sept. 2024 au 16 Sept. 2024
                      </span>
<span class="font-label-sm text-label-sm text-outline mt-0.5">Déposé le 01 Sept. 2024</span>
</div>
</td>
<td class="px-space-md py-space-md text-center">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">4.0 j</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Sans solde</span>
</td>
<td class="px-space-md py-space-md">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface">Direction Opérations</span>
<span class="font-label-sm text-label-sm text-error">Charge release Q3 prioritaire</span>
</div>
</td>
<td class="px-space-md py-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#FFF1F2] text-[#9F1239] font-label-sm text-label-sm font-semibold">
<span class="w-2 h-2 rounded-full bg-[#F43F5E]"></span>
                      Refusé
                    </span>
</td>
<td class="px-space-md py-space-md text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-colors" title="Consulter le motif détaillé du refus" type="button">
<span class="material-symbols-outlined text-[18px]">info</span>
</button>
</div>
</td>
</tr>
<!-- Row 6: Approved Congé Annuel Eté -->
<tr class="hover:bg-surface-container-low/40 transition-colors" data-status="approved">
<td class="px-space-md py-space-md">
<div class="flex flex-col">
<div class="flex items-center gap-1.5">
<span class="font-headline-sm text-headline-sm text-on-surface">Congé Annuel Payé</span>
<span class="px-1.5 py-0.2 rounded bg-surface-container text-on-surface font-label-sm text-[10px]">Été</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                        15 Juil. 2024 au 26 Juil. 2024
                      </span>
<span class="font-label-sm text-label-sm text-outline mt-0.5">Déposé le 10 Juin 2024</span>
</div>
</td>
<td class="px-space-md py-space-md text-center">
<span class="font-numeric-md text-numeric-md font-semibold text-on-surface">10.0 j</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Ouvrés</span>
</td>
<td class="px-space-md py-space-md">
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface">Amel Ben Salah &amp; RH</span>
<span class="font-label-sm text-label-sm text-tertiary-container">Planification estivale validée</span>
</div>
</td>
<td class="px-space-md py-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-[#ECFDF5] text-[#065F46] font-label-sm text-label-sm font-semibold">
<span class="w-2 h-2 rounded-full bg-[#10B981]"></span>
                      Consommé
                    </span>
</td>
<td class="px-space-md py-space-md text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-colors" type="button">
<span class="material-symbols-outlined text-[18px]">history</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Table Footer Pagination / Context -->
<div class="p-space-md px-space-lg bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-space-sm text-on-surface-variant font-label-sm text-label-sm">
<span>Affichage de 6 demandes sur l'exercice social en cours</span>
<div class="flex items-center gap-space-xs">
<button class="px-2 py-1 rounded bg-surface-container text-outline cursor-not-allowed" disabled="" type="button">Précédent</button>
<span class="px-2 font-semibold text-on-surface">Page 1 de 1</span>
<button class="px-2 py-1 rounded bg-surface-container text-outline cursor-not-allowed" disabled="" type="button">Suivant</button>
</div>
</div>
</div>
<!-- Statutory Leave Rights Tunisia Info Strip -->
<div class="p-space-lg rounded-xl bg-surface-container-low flex items-start gap-space-md">
<span class="material-symbols-outlined text-primary text-[24px] shrink-0 mt-0.5">account_balance</span>
<div class="flex flex-col gap-1">
<h3 class="font-headline-sm text-headline-sm text-on-surface">
              Cadre Légal des Droits à Congés en Tunisie
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
              En application du <strong>Code du Travail tunisien</strong>, chaque salarié acquiert un minimum d'un jour ouvrable de congé payé par mois de service effectif, majoré selon l'ancienneté conventionnelle (Convention collective sectorielle de la métallurgie et du numérique). Les jours fériés officiels tunisiens (14 Janvier, 20 Mars, 1er Mai, 25 Juillet, Fêtes religieuses) ne sont pas décomptés du solde légal.
            </p>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
  (function initLeaveManagement() {
    const leaveTypeSelect = document.getElementById('leave-type-select');
    const dateStart = document.getElementById('date-start');
    const dateEnd = document.getElementById('date-end');
    const calculatedDays = document.getElementById('calculated-days-count');
    const projectedBalance = document.getElementById('projected-balance');
    const annualBalanceDisplay = document.getElementById('annual-balance-display');
    const justificatifBadge = document.getElementById('justificatif-optional-badge');
    const submitBtn = document.getElementById('submit-leave-btn');
    const filterTabs = document.querySelectorAll('.history-tab');
    const tableRows = document.querySelectorAll('tbody tr');
    const openRequestBtn = document.getElementById('btn-open-request-drawer');
    const requestCard = document.getElementById('request-card-container');

    const BASE_BALANCE = 16.0;

    function calculateBusinessDays(startDateStr, endDateStr) {
      if (!startDateStr || !endDateStr) return 0;
      const start = new Date(startDateStr);
      const end = new Date(endDateStr);
      if (end < start) return 0;

      let count = 0;
      let cur = new Date(start.getTime());
      while (cur <= end) {
        const dayOfWeek = cur.getDay();
        // 0 = Sunday, 6 = Saturday
        if (dayOfWeek !== 0 && dayOfWeek !== 6) {
          count++;
        }
        cur.setDate(cur.getDate() + 1);
      }
      return count;
    }

    function updateSimulation() {
      const type = leaveTypeSelect.value;
      const days = calculateBusinessDays(dateStart.value, dateEnd.value);
      
      calculatedDays.textContent = days.toFixed(1) + ' Jours';

      if (type === 'ANNUEL') {
        const remaining = Math.max(0, BASE_BALANCE - days);
        projectedBalance.textContent = remaining.toFixed(1) + ' Jours';
        justificatifBadge.textContent = 'Optionnel pour Congé Payé';
        justificatifBadge.className = 'font-label-sm text-label-sm text-on-surface-variant';
      } else if (type === 'MALADIE') {
        projectedBalance.textContent = '16.0 Jours (Solde préservé)';
        justificatifBadge.textContent = 'Obligatoire sous 48h';
        justificatifBadge.className = 'font-label-sm text-label-sm text-error font-semibold';
      } else if (type === 'RECUP') {
        projectedBalance.textContent = 'Déduit du solde Astreinte (1.5j)';
        justificatifBadge.textContent = 'Visa responsable astreinte';
        justificatifBadge.className = 'font-label-sm text-label-sm text-on-surface-variant';
      } else {
        projectedBalance.textContent = '16.0 Jours (Solde légal préservé)';
        justificatifBadge.textContent = 'Justificatif d\'état civil requis';
        justificatifBadge.className = 'font-label-sm text-label-sm text-primary font-semibold';
      }
    }

    dateStart.addEventListener('change', updateSimulation);
    dateEnd.addEventListener('change', updateSimulation);
    leaveTypeSelect.addEventListener('change', updateSimulation);

    // Initial update
    updateSimulation();

    // Table Filter Tabs
    filterTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        filterTabs.forEach(t => {
          t.classList.remove('bg-surface', 'text-on-surface', 'shadow-xs');
          t.classList.add('text-on-surface-variant');
        });
        tab.classList.add('bg-surface', 'text-on-surface', 'shadow-xs');
        tab.classList.remove('text-on-surface-variant');

        const filter = tab.getAttribute('data-filter');
        tableRows.forEach(row => {
          const rowStatus = row.getAttribute('data-status');
          if (filter === 'all' || rowStatus === filter) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        });
      });
    });

    // Form Submission Interaction
    submitBtn.addEventListener('click', () => {
      const typeText = leaveTypeSelect.options[leaveTypeSelect.selectedIndex].text;
      const count = calculatedDays.textContent;

      submitBtn.disabled = true;
      submitBtn.innerHTML = `
        <span class="inline-block animate-spin mr-2">⟳</span>
        Transmission en cours...
      `;

      setTimeout(() => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = `
          <span class="material-symbols-outlined text-[18px]">check_circle</span>
          <span>Demande transmise avec succès !</span>
        `;
        submitBtn.classList.remove('bg-primary-container', 'hover:bg-primary');
        submitBtn.classList.add('bg-tertiary-container', 'text-on-tertiary');

        setTimeout(() => {
          submitBtn.innerHTML = `
            <span class="material-symbols-outlined text-[18px]">send</span>
            <span>Transmettre pour Visa Manager (N+1)</span>
          `;
          submitBtn.classList.add('bg-primary-container', 'hover:bg-primary');
          submitBtn.classList.remove('bg-tertiary-container', 'text-on-tertiary');
        }, 3000);
      }, 700);
    });

    // Button to scroll to request drawer/card smoothly
    openRequestBtn.addEventListener('click', () => {
      requestCard.scrollIntoView({ behavior: 'smooth', block: 'start' });
      requestCard.classList.add('ring-2', 'ring-primary-container');
      setTimeout(() => {
        requestCard.classList.remove('ring-2', 'ring-primary-container');
      }, 1500);
    });
  })();
</script>
</x-collaborator-shell>
