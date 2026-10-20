@php
    $user = auth()->user();
    $nameParts = preg_split('/\s+/', trim($user->name));
    $firstName = $nameParts[0] ?? $user->name;
    $initials = strtoupper(substr($nameParts[0] ?? '', 0, 1) . substr($nameParts[1] ?? '', 0, 1));
@endphp

<x-collaborator-shell active="dashboard" title="Mon Tableau de bord">

        <div class="flex flex-col w-full">
            <div class="px-4 sm:px-margin py-space-xl flex flex-col gap-space-xl max-w-[1536px] w-full mx-auto">

                <!-- Top Identity & Punch Status Bar -->
                <div class="relative overflow-hidden rounded-xl bg-surface-container-lowest p-space-xl shadow-sm flex flex-col lg:flex-row lg:items-center justify-between gap-space-lg">
                    <div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-primary-fixed/30 blur-3xl pointer-events-none"></div>
                    <div class="flex flex-col gap-space-xs z-10">
                        <div class="flex flex-wrap items-center gap-space-sm text-on-surface-variant font-label-md text-label-md">
                            <span class="flex items-center gap-1 font-semibold text-primary">
                                <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                                {{ \Carbon\Carbon::now()->locale('fr')->translatedFormat('l j F Y') }}
                            </span>
                            <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                            <span>Pôle Ingénierie &amp; Tech</span>
                            <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                            <span>Site Lac 2, Tunis</span>
                        </div>
                        <div class="flex items-center gap-space-sm">
                            <h1 class="font-display-lg text-display-lg text-on-surface tracking-tight">Bonjour {{ $firstName }} 👋</h1>
                            <span class="inline-flex items-center gap-1.5 px-space-sm py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-label-sm font-semibold">
                                <span class="w-2 h-2 rounded-full bg-tertiary-container animate-pulse"></span>
                                En poste aujourd'hui
                            </span>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Badge biométrique validé à <span class="font-numeric-md text-numeric-md font-semibold text-on-surface">08:28:14</span> • Borne Entrée B2 (Lac 2) • Durée prévue: 8h30
                        </p>
                    </div>
                    <!-- Quick Punch Control Box -->
                    <div class="z-10 flex flex-wrap sm:flex-nowrap items-center gap-space-sm shrink-0 bg-surface-container-low p-space-sm rounded-xl">
                        <div class="flex items-center gap-space-sm px-space-md py-space-xs">
                            <div class="w-10 h-10 rounded-xl bg-primary-container text-on-primary flex items-center justify-center shadow-sm">
                                <span class="material-symbols-outlined text-[22px]">timer</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Session active</span>
                                <span class="font-numeric-md text-numeric-md font-semibold text-on-surface" id="sessionTimer">04h 12m 35s</span>
                            </div>
                        </div>
                        <div class="h-8 w-px bg-surface-container-high hidden sm:block"></div>
                        <div class="flex items-center gap-space-xs w-full sm:w-auto">
                            <button class="flex-1 sm:flex-initial h-9.5 px-space-md rounded-xl bg-surface-container-lowest text-on-surface hover:bg-surface-variant font-label-lg text-label-lg flex items-center justify-center gap-space-xs shadow-sm transition-all active:scale-95" id="punchOutBtn" type="button">
                                <span class="material-symbols-outlined text-[18px] text-error">logout</span>
                                <span>Pointer Départ</span>
                            </button>
                            <button class="flex-1 sm:flex-initial h-9.5 px-space-md rounded-xl bg-surface-container-high text-on-secondary-container hover:bg-surface-variant font-label-lg text-label-lg flex items-center justify-center gap-space-xs transition-all" type="button">
                                <span class="material-symbols-outlined text-[18px]">home_work</span>
                                <span>Déclarer TT</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- 4 High-Density KPI Metric Tiles -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-space-lg">
                    <!-- KPI 1: Solde Congés -->
                    <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between gap-space-md hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-space-xs">
                                <div class="w-8 h-8 rounded-lg bg-surface-container-high text-primary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[18px]">beach_access</span>
                                </div>
                                <span class="font-label-md text-label-md text-on-surface-variant font-medium">Solde Congés Payés</span>
                            </div>
                            <span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-[10px]">Loi TN</span>
                        </div>
                        <div class="flex items-baseline gap-space-xs">
                            <span class="font-display-lg text-display-lg text-on-surface tracking-tight">16.0</span>
                            <span class="font-label-lg text-label-lg text-on-surface-variant">Jours restants</span>
                        </div>
                        <div class="flex flex-col gap-1.5 pt-space-xs">
                            <div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden flex">
                                <div class="bg-primary-container h-full rounded-full" style="width: 72.7%"></div>
                            </div>
                            <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-[11px]">
                                <span>Acquis: 22.0j (Pris: 6.0j)</span>
                                <span class="text-primary font-medium">Prochain: 28 Mars</span>
                            </div>
                        </div>
                    </div>

                    <!-- KPI 2: Salaire Net -->
                    <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between gap-space-md hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-space-xs">
                                <div class="w-8 h-8 rounded-lg bg-secondary-container text-on-secondary-fixed flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[18px]">account_balance_wallet</span>
                                </div>
                                <span class="font-label-md text-label-md text-on-surface-variant font-medium">Dernier Salaire Net (Fév)</span>
                            </div>
                            <span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-[10px] font-semibold">Viré</span>
                        </div>
                        <div class="flex items-baseline gap-space-xs">
                            <span class="font-display-lg text-display-lg text-on-surface font-numeric-md tracking-tight">3,535.000</span>
                            <span class="font-label-lg text-label-lg text-on-surface-variant">TND</span>
                        </div>
                        <div class="flex items-center justify-between pt-space-xs font-label-sm text-[11px] text-on-surface-variant">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px] text-secondary">account_balance</span>
                                Amen Bank (RIB ...8421)
                            </span>
                            <a class="text-primary hover:underline font-semibold flex items-center gap-0.5" href="#">
                                <span>Fiche</span>
                                <span class="material-symbols-outlined text-[13px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>

                    <!-- KPI 3: Assiduité -->
                    <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between gap-space-md hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-space-xs">
                                <div class="w-8 h-8 rounded-lg bg-surface-container-high text-tertiary-container flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[18px]">rule</span>
                                </div>
                                <span class="font-label-md text-label-md text-on-surface-variant font-medium">Assiduité Mars 2025</span>
                            </div>
                            <span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-[10px] font-semibold">Impeccable</span>
                        </div>
                        <div class="flex items-baseline gap-space-xs">
                            <span class="font-display-lg text-display-lg text-on-surface tracking-tight">100%</span>
                            <span class="font-label-lg text-label-lg text-on-surface-variant">Présence validée</span>
                        </div>
                        <div class="flex items-center justify-between pt-space-xs font-label-sm text-[11px] text-on-surface-variant">
                            <span class="flex items-center gap-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>
                                0 Retard constaté
                            </span>
                            <span class="font-numeric-md text-on-surface font-semibold bg-surface-container-high px-1.5 py-0.5 rounded">
                                +4.5h sup. validées
                            </span>
                        </div>
                    </div>

                    <!-- KPI 4: Demandes en cours -->
                    <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between gap-space-md hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-space-xs">
                                <div class="w-8 h-8 rounded-lg bg-surface-container-high text-primary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[18px]">pending_actions</span>
                                </div>
                                <span class="font-label-md text-label-md text-on-surface-variant font-medium">Demandes en attente</span>
                            </div>
                            <span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-[10px] font-semibold">1 Active</span>
                        </div>
                        <div class="flex items-baseline gap-space-xs">
                            <span class="font-display-lg text-display-lg text-on-surface tracking-tight">01</span>
                            <span class="font-label-lg text-label-lg text-on-surface-variant">En revue N+1</span>
                        </div>
                        <div class="flex items-center justify-between pt-space-xs font-label-sm text-[11px] text-on-surface-variant">
                            <span class="truncate max-w-[160px]">Congé Annuel (5j fin Mars)</span>
                            <span class="text-secondary font-medium">Soumis hier</span>
                        </div>
                    </div>
                </div>

                <!-- Main Content Layout -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl">
                    <!-- Left Column (Wide) -->
                    <div class="lg:col-span-8 flex flex-col gap-space-xl">
                        <!-- Section: Mes Demandes Récentes -->
                        <div class="p-space-xl rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-lg">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-xs">
                                <div class="flex items-center gap-space-sm">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container-high text-primary flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[18px]">assignment_turned_in</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <h2 class="font-headline-sm text-headline-sm text-on-surface">Mes Demandes Récentes &amp; Suivi RH</h2>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Statut en direct de vos requêtes administratives</span>
                                    </div>
                                </div>
                                <a class="self-start sm:self-auto text-primary hover:text-on-primary-fixed-variant font-label-md text-label-md font-semibold flex items-center gap-1 transition-colors" href="{{ route('conges.index') }}">
                                    <span>Voir tout l'historique (14)</span>
                                    <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                                </a>
                            </div>

                            <div class="flex flex-col gap-space-sm">
                                <!-- Item 1: Congé Annuel (Pending) -->
                                <div class="p-space-md rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
                                    <div class="flex items-start gap-space-md">
                                        <div class="w-10 h-10 rounded-xl bg-surface-container-lowest text-primary flex items-center justify-center shrink-0 shadow-sm mt-0.5">
                                            <span class="material-symbols-outlined text-[20px]">flight_takeoff</span>
                                        </div>
                                        <div class="flex flex-col">
                                            <div class="flex flex-wrap items-center gap-space-xs">
                                                <span class="font-label-lg text-label-lg font-semibold text-on-surface">Demande de Congé Annuel</span>
                                                <span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-[10px]">Réf. CONG-2025-089</span>
                                            </div>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                                Période : <strong class="text-on-surface font-medium">18 Mars 2025 → 22 Mars 2025</strong> (5 jours ouvrables)
                                            </span>
                                            <div class="flex items-center gap-space-xs mt-1 text-on-surface-variant font-label-sm text-[11px]">
                                                <span class="material-symbols-outlined text-[13px]">person</span>
                                                <span>Validateur : Amel Ben Salah (Director of Engineering)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex sm:flex-col items-center sm:items-end justify-between sm:justify-center gap-space-xs shrink-0">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-label-sm font-medium">
                                            <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                            En attente validation N+1
                                        </span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Soumis le 17 Mars 14:10</span>
                                    </div>
                                </div>

                                <!-- Item 2: Attestation de Salaire -->
                                <div class="p-space-md rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
                                    <div class="flex items-start gap-space-md">
                                        <div class="w-10 h-10 rounded-xl bg-surface-container-lowest text-tertiary-container flex items-center justify-center shrink-0 shadow-sm mt-0.5">
                                            <span class="material-symbols-outlined text-[20px]">verified</span>
                                        </div>
                                        <div class="flex flex-col">
                                            <div class="flex flex-wrap items-center gap-space-xs">
                                                <span class="font-label-lg text-label-lg font-semibold text-on-surface">Attestation de Salaire &amp; Travail</span>
                                                <span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-[10px]">Réf. DOC-2025-034</span>
                                            </div>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                                Motif : Formalité Visa Schengen Ambassade de France • Cachet électronique certifié TUNTRUST
                                            </span>
                                            <div class="flex items-center gap-space-xs mt-1 text-on-surface-variant font-label-sm text-[11px]">
                                                <span class="material-symbols-outlined text-[13px]">schedule</span>
                                                <span>Délivrée le 14 Mars 2025 par RH Carthage Tech</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex sm:flex-col items-center sm:items-end justify-between sm:justify-center gap-space-xs shrink-0">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-label-sm font-semibold">
                                            <span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>
                                            Prête au téléchargement
                                        </span>
                                        <button class="text-primary hover:underline font-label-sm text-label-sm font-semibold flex items-center gap-1" type="button">
                                            <span class="material-symbols-outlined text-[14px]">download</span>
                                            <span>Télécharger PDF (0.4 Mo)</span>
                                        </button>
                                    </div>
                                </div>

                                <!-- Item 3: Note de Frais -->
                                <div class="p-space-md rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
                                    <div class="flex items-start gap-space-md">
                                        <div class="w-10 h-10 rounded-xl bg-surface-container-lowest text-primary flex items-center justify-center shrink-0 shadow-sm mt-0.5">
                                            <span class="material-symbols-outlined text-[20px]">receipt_long</span>
                                        </div>
                                        <div class="flex flex-col">
                                            <div class="flex flex-wrap items-center gap-space-xs">
                                                <span class="font-label-lg text-label-lg font-semibold text-on-surface">Note de Frais - Déplacement Client Sousse</span>
                                                <span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-[10px]">Réf. NDF-2025-012</span>
                                            </div>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                                Audit infrastructure datacenter • Indemnités péage, carburant &amp; hébergement : <strong class="font-numeric-md text-on-surface">284.500 TND</strong>
                                            </span>
                                            <div class="flex items-center gap-space-xs mt-1 text-on-surface-variant font-label-sm text-[11px]">
                                                <span class="material-symbols-outlined text-[13px]">done_all</span>
                                                <span>Approuvé Direction Financière • Intégré virement paie de Mars</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex sm:flex-col items-center sm:items-end justify-between sm:justify-center gap-space-xs shrink-0">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-label-sm font-semibold">
                                            <span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>
                                            Approuvé (Paiement Mars)
                                        </span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Traité le 11 Mars 2025</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section: Planning de mon équipe -->
                        <div class="p-space-xl rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-lg">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
                                <div class="flex items-center gap-space-sm">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container-high text-primary flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[18px]">group</span>
                                    </div>
                                    <div>
                                        <h2 class="font-headline-sm text-headline-sm text-on-surface">Planning de mon équipe (Squad Core Platform)</h2>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Visibilité des disponibilités et modes de travail cette semaine</span>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center gap-space-xs text-on-surface-variant font-label-sm text-[11px]">
                                    <span class="inline-flex items-center gap-1">
                                        <span class="w-2 h-2 rounded-full bg-primary-container"></span> Bureau Lac 2
                                    </span>
                                    <span class="inline-flex items-center gap-1 ml-2">
                                        <span class="w-2 h-2 rounded-full bg-secondary-container"></span> Télétravail (TT)
                                    </span>
                                    <span class="inline-flex items-center gap-1 ml-2">
                                        <span class="w-2 h-2 rounded-full bg-outline-variant"></span> Congé / Férié
                                    </span>
                                </div>
                            </div>

                            <div class="overflow-x-auto -mx-space-xl px-space-xl">
                                <div class="min-w-[620px] flex flex-col gap-space-xs">
                                    <div class="grid grid-cols-6 gap-space-xs text-center py-space-xs font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                        <div class="text-left pl-space-sm">Collaborateur</div>
                                        <div class="p-1 rounded bg-surface-container-high text-on-surface font-semibold">Mar 18 (Auj.)</div>
                                        <div>Mer 19</div>
                                        <div class="text-secondary font-semibold">Jeu 20 (Férié)</div>
                                        <div>Ven 21</div>
                                        <div>Sam 22</div>
                                    </div>

                                    <!-- Row: current user -->
                                    <div class="grid grid-cols-6 items-center gap-space-xs p-space-sm rounded-xl bg-surface-container-low">
                                        <div class="flex items-center gap-space-xs">
                                            <div class="w-7 h-7 rounded-full bg-primary text-on-primary font-label-sm text-[11px] flex items-center justify-center font-bold">{{ $initials ?: 'U' }}</div>
                                            <div class="flex flex-col truncate">
                                                <span class="font-label-md text-label-md font-semibold text-on-surface truncate">{{ $user->name }} (Moi)</span>
                                                <span class="font-label-sm text-[10px] text-on-surface-variant truncate">Collaborateur</span>
                                            </div>
                                        </div>
                                        <div class="py-1.5 px-2 rounded-lg bg-primary-container text-on-primary text-center font-label-sm text-[11px] font-medium">
                                            Site Lac 2
                                        </div>
                                        <div class="py-1.5 px-2 rounded-lg bg-secondary-container text-on-secondary-fixed text-center font-label-sm text-[11px]">
                                            Télétravail
                                        </div>
                                        <div class="py-1.5 px-2 rounded-lg bg-surface-container-high text-on-surface-variant text-center font-label-sm text-[11px]">
                                            Indépendance
                                        </div>
                                        <div class="py-1.5 px-2 rounded-lg bg-primary-container text-on-primary text-center font-label-sm text-[11px] font-medium">
                                            Site Lac 2
                                        </div>
                                        <div class="py-1.5 px-2 rounded-lg bg-surface-container-lowest text-on-surface-variant text-center font-label-sm text-[11px]">
                                            Repos
                                        </div>
                                    </div>

                                    <!-- Row: Yasmine Trabelsi -->
                                    <div class="grid grid-cols-6 items-center gap-space-xs p-space-sm rounded-xl hover:bg-surface-container-low transition-colors">
                                        <div class="flex items-center gap-space-xs">
                                            <div class="w-7 h-7 rounded-full bg-secondary text-on-secondary font-label-sm text-[11px] flex items-center justify-center font-bold">YT</div>
                                            <div class="flex flex-col truncate">
                                                <span class="font-label-md text-label-md font-medium text-on-surface truncate">Yasmine Trabelsi</span>
                                                <span class="font-label-sm text-[10px] text-on-surface-variant truncate">DevOps Engineer</span>
                                            </div>
                                        </div>
                                        <div class="py-1.5 px-2 rounded-lg bg-secondary-container text-on-secondary-fixed text-center font-label-sm text-[11px]">Télétravail</div>
                                        <div class="py-1.5 px-2 rounded-lg bg-primary-container text-on-primary text-center font-label-sm text-[11px] font-medium">Site Lac 2</div>
                                        <div class="py-1.5 px-2 rounded-lg bg-surface-container-high text-on-surface-variant text-center font-label-sm text-[11px]">Indépendance</div>
                                        <div class="py-1.5 px-2 rounded-lg bg-secondary-container text-on-secondary-fixed text-center font-label-sm text-[11px]">Télétravail</div>
                                        <div class="py-1.5 px-2 rounded-lg bg-surface-container-lowest text-on-surface-variant text-center font-label-sm text-[11px]">Astreinte</div>
                                    </div>

                                    <!-- Row: Mehdi Zghal -->
                                    <div class="grid grid-cols-6 items-center gap-space-xs p-space-sm rounded-xl hover:bg-surface-container-low transition-colors">
                                        <div class="flex items-center gap-space-xs">
                                            <div class="w-7 h-7 rounded-full bg-surface-container-high text-on-surface font-label-sm text-[11px] flex items-center justify-center font-bold">MZ</div>
                                            <div class="flex flex-col truncate">
                                                <span class="font-label-md text-label-md font-medium text-on-surface truncate">Mehdi Zghal</span>
                                                <span class="font-label-sm text-[10px] text-on-surface-variant truncate">Backend Go/Nest</span>
                                            </div>
                                        </div>
                                        <div class="py-1.5 px-2 rounded-lg bg-primary-container text-on-primary text-center font-label-sm text-[11px] font-medium">Site Lac 2</div>
                                        <div class="py-1.5 px-2 rounded-lg bg-primary-container text-on-primary text-center font-label-sm text-[11px] font-medium">Site Lac 2</div>
                                        <div class="py-1.5 px-2 rounded-lg bg-surface-container-high text-on-surface-variant text-center font-label-sm text-[11px]">Indépendance</div>
                                        <div class="py-1.5 px-2 rounded-lg bg-surface-container-high text-on-surface-variant text-center font-label-sm text-[11px]">Congé Annuel</div>
                                        <div class="py-1.5 px-2 rounded-lg bg-surface-container-lowest text-on-surface-variant text-center font-label-sm text-[11px]">Repos</div>
                                    </div>

                                    <!-- Row: Tarek Mansour -->
                                    <div class="grid grid-cols-6 items-center gap-space-xs p-space-sm rounded-xl hover:bg-surface-container-low transition-colors">
                                        <div class="flex items-center gap-space-xs">
                                            <div class="w-7 h-7 rounded-full bg-tertiary-container text-on-tertiary font-label-sm text-[11px] flex items-center justify-center font-bold">TM</div>
                                            <div class="flex flex-col truncate">
                                                <span class="font-label-md text-label-md font-medium text-on-surface truncate">Tarek Mansour</span>
                                                <span class="font-label-sm text-[10px] text-on-surface-variant truncate">Frontend React</span>
                                            </div>
                                        </div>
                                        <div class="py-1.5 px-2 rounded-lg bg-secondary-container text-on-secondary-fixed text-center font-label-sm text-[11px]">Télétravail</div>
                                        <div class="py-1.5 px-2 rounded-lg bg-secondary-container text-on-secondary-fixed text-center font-label-sm text-[11px]">Télétravail</div>
                                        <div class="py-1.5 px-2 rounded-lg bg-surface-container-high text-on-surface-variant text-center font-label-sm text-[11px]">Indépendance</div>
                                        <div class="py-1.5 px-2 rounded-lg bg-primary-container text-on-primary text-center font-label-sm text-[11px] font-medium">Site Lac 2</div>
                                        <div class="py-1.5 px-2 rounded-lg bg-surface-container-lowest text-on-surface-variant text-center font-label-sm text-[11px]">Repos</div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-space-sm rounded-xl bg-surface-container-low flex items-center justify-between text-on-surface-variant font-label-sm text-[12px]">
                                <span class="flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px] text-primary">info</span>
                                    Présence physique minimum requise : 2 jours / semaine sur le site Carthage Tech.
                                </span>
                                <a class="text-primary hover:underline font-semibold shrink-0" href="#">Modifier mes jours de TT</a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column (Sidebar Widgets) -->
                    <div class="lg:col-span-4 flex flex-col gap-space-xl">
                        <!-- Widget: Bulletin de Paie -->
                        <div class="p-space-xl rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-lg relative overflow-hidden">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-space-xs">
                                    <div class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[18px]">receipt</span>
                                    </div>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Bulletin de Paie</h2>
                                </div>
                                <span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-[11px] font-semibold">Février 2025</span>
                            </div>
                            <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-sm">
                                <div class="flex items-center justify-between pb-space-xs border-b border-surface-container-high">
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Salaire de Base Brut</span>
                                    <span class="font-numeric-md text-numeric-md font-semibold text-on-surface">4,200.000 TND</span>
                                </div>
                                <div class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
                                    <span class="flex items-center gap-1">
                                        <span>Retenue CNSS (9.18%)</span>
                                        <span class="material-symbols-outlined text-[14px]" title="Cotisation obligatoire sécurité sociale">help</span>
                                    </span>
                                    <span class="font-numeric-md text-numeric-md text-error">- 417.690 TND</span>
                                </div>
                                <div class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
                                    <span>Retenue IRPP &amp; CSS (1%)</span>
                                    <span class="font-numeric-md text-numeric-md text-error">- 247.310 TND</span>
                                </div>
                                <div class="flex items-center justify-between pt-space-xs border-t border-surface-container-high">
                                    <span class="font-label-lg text-label-lg font-bold text-on-surface">Net à payer en compte</span>
                                    <span class="font-numeric-md text-headline-sm font-bold text-tertiary-container">3,535.000 TND</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-space-xs">
                                <button class="w-full h-10 rounded-xl bg-primary-container text-on-primary font-label-lg text-label-lg flex items-center justify-center gap-space-xs hover:bg-primary shadow-sm transition-all" type="button">
                                    <span class="material-symbols-outlined text-[18px]">download</span>
                                    <span>Télécharger Bulletin PDF Certifié</span>
                                </button>
                                <div class="flex items-center justify-center gap-1 text-on-surface-variant font-label-sm text-[11px] pt-1">
                                    <span class="material-symbols-outlined text-[14px] text-tertiary-container">lock</span>
                                    <span>Horodatage légal INPDP et code QR d'intégrité</span>
                                </div>
                            </div>
                        </div>

                        <!-- Widget: Actions Rapides -->
                        <div class="p-space-xl rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center gap-space-xs">
                                <div class="w-8 h-8 rounded-lg bg-surface-container-high text-primary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[18px]">bolt</span>
                                </div>
                                <h2 class="font-headline-sm text-headline-sm text-on-surface">Actions Rapides Collaborateur</h2>
                            </div>
                            <div class="flex flex-col gap-space-xs">
                                <a class="p-space-sm rounded-xl bg-surface-container-low hover:bg-surface-container flex items-center justify-between text-on-surface transition-all group" href="#">
                                    <div class="flex items-center gap-space-sm">
                                        <span class="w-8 h-8 rounded-lg bg-surface-container-lowest text-primary flex items-center justify-center shadow-sm group-hover:scale-105 transition-transform">
                                            <span class="material-symbols-outlined text-[18px]">request_quote</span>
                                        </span>
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-md font-semibold">Demander un acompte sur salaire</span>
                                            <span class="font-label-sm text-[11px] text-on-surface-variant">Plafond conventionnel : 50% du net</span>
                                        </div>
                                    </div>
                                    <span class="material-symbols-outlined text-[18px] text-on-surface-variant group-hover:translate-x-0.5 transition-transform">chevron_right</span>
                                </a>
                                <a class="p-space-sm rounded-xl bg-surface-container-low hover:bg-surface-container flex items-center justify-between text-on-surface transition-all group" href="#">
                                    <div class="flex items-center gap-space-sm">
                                        <span class="w-8 h-8 rounded-lg bg-surface-container-lowest text-tertiary-container flex items-center justify-center shadow-sm group-hover:scale-105 transition-transform">
                                            <span class="material-symbols-outlined text-[18px]">medical_services</span>
                                        </span>
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-md font-semibold">Déposer un arrêt maladie / certificat</span>
                                            <span class="font-label-sm text-[11px] text-on-surface-variant">Délai réglementaire : 48h ouvrées</span>
                                        </div>
                                    </div>
                                    <span class="material-symbols-outlined text-[18px] text-on-surface-variant group-hover:translate-x-0.5 transition-transform">chevron_right</span>
                                </a>
                                <a class="p-space-sm rounded-xl bg-surface-container-low hover:bg-surface-container flex items-center justify-between text-on-surface transition-all group" href="#">
                                    <div class="flex items-center gap-space-sm">
                                        <span class="w-8 h-8 rounded-lg bg-surface-container-lowest text-primary flex items-center justify-center shadow-sm group-hover:scale-105 transition-transform">
                                            <span class="material-symbols-outlined text-[18px]">description</span>
                                        </span>
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-md font-semibold">Attestation d'affiliation CNSS</span>
                                            <span class="font-label-sm text-[11px] text-on-surface-variant">Historique des trimestres cotisés</span>
                                        </div>
                                    </div>
                                    <span class="material-symbols-outlined text-[18px] text-on-surface-variant group-hover:translate-x-0.5 transition-transform">chevron_right</span>
                                </a>
                            </div>
                        </div>

                        <!-- Widget: Annonces Entreprise & RH -->
                        <div class="p-space-xl rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-space-xs">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container-high text-primary flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[18px]">campaign</span>
                                    </div>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Flash Infos RH Carthage Tech</h2>
                                </div>
                                <span class="w-2 h-2 rounded-full bg-error" title="1 nouvelle note non lue"></span>
                            </div>
                            <div class="flex flex-col gap-space-sm">
                                <div class="p-space-md rounded-xl bg-secondary-container/40 flex flex-col gap-1">
                                    <div class="flex items-center justify-between">
                                        <span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-[10px] font-semibold uppercase">Férié officiel</span>
                                        <span class="font-label-sm text-[11px] text-on-surface-variant">Ce jeudi</span>
                                    </div>
                                    <span class="font-label-lg text-label-lg font-bold text-on-surface">Fête de l'Indépendance (20 Mars)</span>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        L'entreprise sera fermée le jeudi 20 Mars 2025 (jour férié chômé et payé selon le Code du Travail tunisien).
                                    </p>
                                </div>
                                <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-1">
                                    <div class="flex items-center justify-between">
                                        <span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-[10px] font-semibold uppercase">Assurance Groupe</span>
                                        <span class="font-label-sm text-[11px] text-on-surface-variant">Jeu 27 Mars</span>
                                    </div>
                                    <span class="font-label-md text-label-md font-semibold text-on-surface">Permanence Délégué STAR Santé</span>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Dépôt des bulletins de soins et adhésions nouveaux ayants droit à la salle de réunion Carthage (10h-13h).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script>
    // Live mini session punch timer simulation
    let seconds = 35;
    let minutes = 12;
    let hours = 4;
    const timerEl = document.getElementById('sessionTimer');

    if (timerEl) {
        setInterval(() => {
            seconds++;
            if (seconds >= 60) {
                seconds = 0;
                minutes++;
                if (minutes >= 60) {
                    minutes = 0;
                    hours++;
                }
            }
            const h = hours < 10 ? '0' + hours : hours;
            const m = minutes < 10 ? '0' + minutes : minutes;
            const s = seconds < 10 ? '0' + seconds : seconds;
            timerEl.textContent = `${h}h ${m}m ${s}s`;
        }, 1000);
    }

    const punchBtn = document.getElementById('punchOutBtn');
    if (punchBtn) {
        punchBtn.addEventListener('click', () => {
            const confirmPunch = confirm("Confirmer l'enregistrement de votre départ pour la journée ?");
            if (confirmPunch) {
                punchBtn.innerHTML = `<span class="material-symbols-outlined text-[18px] text-tertiary-container">check_circle</span><span>Pointage effectué</span>`;
                punchBtn.classList.add('bg-tertiary-fixed', 'text-on-tertiary-fixed-variant');
            }
        });
    }
</script>
</x-collaborator-shell>
