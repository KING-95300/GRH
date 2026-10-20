<x-admin-shell active="reports" title="Rapports & Tableaux de Bord Réglementaires">
<div class="flex flex-col w-full py-margin-mobile md:py-margin space-y-space-xl">
<!-- Top Navigation & Breadcrumb -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
<div class="flex flex-col space-y-space-xs">
<div class="flex items-center gap-space-xs font-label-sm text-label-sm text-on-surface-variant">
<a class="hover:text-primary transition-colors" href="#">Accueil</a>
<span class="material-symbols-outlined text-body-sm text-outline">chevron_right</span>
<span class="text-on-surface font-semibold">Rapports &amp; Analytique</span>
</div>
<h1 class="font-display-lg text-display-lg text-on-surface tracking-tight">Rapports &amp; Tableaux de Bord Réglementaires</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Génération conforme des états légaux tunisiens, déclarations CNSS et analyses RH directionnelles.</p>
</div>
<!-- Actions / Controls -->
<div class="flex flex-wrap items-center gap-space-sm">
<div class="relative flex items-center bg-surface-container-low px-space-md py-1.5 rounded-xl text-on-surface font-label-md text-label-md shadow-sm">
<span class="material-symbols-outlined text-body-md text-primary mr-space-xs">calendar_today</span>
<span class="font-semibold mr-space-xs">Période :</span>
<select class="bg-transparent border-none font-numeric-md text-numeric-md text-on-surface focus:outline-none cursor-pointer pr-space-md">
<option selected="" value="t1-2025">Exercice 2025 (T1 Trimestre)</option>
<option value="t4-2024">Exercice 2024 (T4 Clôture)</option>
<option value="annuel-2024">Bilan Global Annuel 2024</option>
<option value="mars-2025">Mois en cours (Mars 2025)</option>
</select>
</div>
<button class="h-10 px-space-lg rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface font-label-lg text-label-lg flex items-center gap-space-xs shadow-sm transition-all active:scale-[0.98]" type="button">
<span class="material-symbols-outlined text-body-md">tune</span>
<span>Filtres Avancés</span>
</button>
<button class="h-10 px-space-lg rounded-xl bg-primary-container hover:bg-primary text-on-primary font-label-lg text-label-lg flex items-center gap-space-xs shadow-md transition-all active:scale-[0.98]" type="button">
<span class="material-symbols-outlined text-body-md">add_chart</span>
<span>Générer un Rapport Personnalisé</span>
</button>
</div>
</div>
<!-- Compliance Banner with Micro Highlights -->
<div class="relative overflow-hidden bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
<div class="absolute -right-12 -top-12 w-48 h-48 bg-tertiary-fixed/30 rounded-full blur-3xl pointer-events-none"></div>
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md relative z-10">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded-xl bg-tertiary/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-tertiary text-headline-md" style="font-variation-settings: 'FILL' 1;">gavel</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-space-xs">
<span class="font-headline-sm text-headline-sm text-on-surface">Conformité Légale Tunisienne &amp; Inspection du Travail</span>
<span class="inline-flex items-center px-space-xs py-0.5 rounded-full bg-emerald-50 text-tertiary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary mr-1"></span> T1-2025 Calibré
            </span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
            Barème IRPP actualisé suivant la Loi de Finances 2025. Cotisations CNSS patronales (16.57%) et salariales (9.18%) intégrées sans dérogation.
          </p>
</div>
</div>
<div class="flex items-center gap-space-xl shrink-0 self-start lg:self-center bg-surface-container-low px-space-lg py-2.5 rounded-xl">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Échéance CNSS T1</span>
<span class="font-numeric-md text-numeric-md text-on-surface font-semibold">15 Avril 2025</span>
</div>
<div class="h-8 w-px bg-surface-container"></div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Statut Fichiers</span>
<span class="font-label-md text-label-md text-tertiary font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-body-sm">check_circle</span> Prêt au dépôt
          </span>
</div>
</div>
</div>
</div>
<!-- Primary Report Modules Bento Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-lg">
<!-- Card 1: Paie & Fiscalité Sociale -->
<div class="flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-xl shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
<div class="flex flex-col space-y-space-md">
<div class="flex items-start justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary-container group-hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-headline-sm">account_balance_wallet</span>
</div>
<div>
<span class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-widest">Réglementaire • Finances</span>
<h2 class="font-headline-md text-headline-md text-on-surface">Paie &amp; Fiscalité Sociale</h2>
</div>
</div>
<span class="px-2.5 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">
            Mensuel &amp; Trimestriel
          </span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
          Journal exhaustif des salaires, livre de paie légal paraphé, récapitulatif des retenues à la source IRPP et CSS, et état récapitulatif des cotisations patronales CNSS.
        </p>
<!-- KPI Metrics Split -->
<div class="grid grid-cols-2 gap-space-md pt-space-xs">
<div class="p-space-md bg-surface-container-low rounded-xl">
<span class="font-label-sm text-label-sm text-on-surface-variant">Masse Salariale Cumulée T1</span>
<div class="font-headline-md text-headline-md text-on-surface font-bold mt-1">428 550,000 <span class="font-label-sm text-label-sm font-normal text-on-surface-variant">TND</span></div>
<span class="font-label-sm text-label-sm text-tertiary flex items-center gap-1 mt-1 font-semibold">
<span class="material-symbols-outlined text-body-sm">trending_up</span> +3.8% vs T4 2024
            </span>
</div>
<div class="p-space-md bg-surface-container-low rounded-xl">
<span class="font-label-sm text-label-sm text-on-surface-variant">Cotisations CNSS Globales</span>
<div class="font-headline-md text-headline-md text-on-surface font-bold mt-1">167 010,800 <span class="font-label-sm text-label-sm font-normal text-on-surface-variant">TND</span></div>
<span class="font-label-sm text-label-sm text-secondary flex items-center gap-1 mt-1">
              Part Patr. 16.57% + Ouvr. 9.18%
            </span>
</div>
</div>
</div>
<div class="flex items-center justify-between pt-space-lg mt-space-lg border-t border-surface-container-low gap-space-sm">
<div class="flex items-center gap-space-xs font-label-sm text-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-body-sm text-tertiary">check</span> Certifié conforme audit
        </div>
<div class="flex items-center gap-space-sm">
<button class="h-9 px-space-md rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface font-label-md text-label-md flex items-center gap-1 transition-colors" type="button">
<span class="material-symbols-outlined text-body-md text-tertiary">table_view</span>
<span>Excel (.xlsx)</span>
</button>
<button class="h-9 px-space-md rounded-xl bg-primary-container hover:bg-primary text-on-primary font-label-md text-label-md flex items-center gap-1 transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">picture_as_pdf</span>
<span>Exporter PDF Officiel</span>
</button>
</div>
</div>
</div>
<!-- Card 2: Bilan Social & Effectifs -->
<div class="flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-xl shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
<div class="flex flex-col space-y-space-md">
<div class="flex items-start justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-secondary-container flex items-center justify-center text-primary group-hover:bg-primary-container group-hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-headline-sm">groups</span>
</div>
<div>
<span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-widest">Stratégie RH • Démographie</span>
<h2 class="font-headline-md text-headline-md text-on-surface">Bilan Social &amp; Effectifs</h2>
</div>
</div>
<span class="px-2.5 py-1 rounded-full bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">
            184 Collaborateurs
          </span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
          Pyramide des âges, répartition par genre et typologie de contrat (CDI, CDD, CIVP), ancienneté moyenne (3.2 ans) et turnover annuel consolidé.
        </p>
<!-- Department Mini Chart / Visual Headcount Miniature -->
<div class="p-space-md bg-surface-container-low rounded-xl space-y-space-sm">
<div class="flex items-center justify-between font-label-sm text-label-sm">
<span class="text-on-surface-variant">Ventilation Effectifs par Pôle</span>
<span class="font-numeric-md text-on-surface font-semibold">Parité : 58% H / 42% F</span>
</div>
<!-- Inline Distribution SVG Visual -->
<div class="w-full space-y-1.5 pt-1">
<div class="flex items-center gap-2">
<span class="w-24 font-label-sm text-label-sm text-on-surface-variant truncate">Ingénierie &amp; IT</span>
<div class="flex-1 bg-surface-container rounded-full h-2.5 overflow-hidden">
<div class="bg-primary-container h-full rounded-full" style="width: 48%;"></div>
</div>
<span class="font-numeric-md text-label-sm text-on-surface font-semibold w-8 text-right">88</span>
</div>
<div class="flex items-center gap-2">
<span class="w-24 font-label-sm text-label-sm text-on-surface-variant truncate">Opérations &amp; CS</span>
<div class="flex-1 bg-surface-container rounded-full h-2.5 overflow-hidden">
<div class="bg-primary-fixed-dim h-full rounded-full" style="width: 26%;"></div>
</div>
<span class="font-numeric-md text-label-sm text-on-surface font-semibold w-8 text-right">48</span>
</div>
<div class="flex items-center gap-2">
<span class="w-24 font-label-sm text-label-sm text-on-surface-variant truncate">Ventes &amp; Mktg</span>
<div class="flex-1 bg-surface-container rounded-full h-2.5 overflow-hidden">
<div class="bg-secondary-fixed-dim h-full rounded-full" style="width: 17%;"></div>
</div>
<span class="font-numeric-md text-label-sm text-on-surface font-semibold w-8 text-right">31</span>
</div>
<div class="flex items-center gap-2">
<span class="w-24 font-label-sm text-label-sm text-on-surface-variant truncate">Support &amp; Admin</span>
<div class="flex-1 bg-surface-container rounded-full h-2.5 overflow-hidden">
<div class="bg-tertiary-fixed-dim h-full rounded-full" style="width: 9%;"></div>
</div>
<span class="font-numeric-md text-label-sm text-on-surface font-semibold w-8 text-right">17</span>
</div>
</div>
</div>
</div>
<div class="flex items-center justify-between pt-space-lg mt-space-lg border-t border-surface-container-low gap-space-sm">
<div class="flex items-center gap-2 font-numeric-md text-label-sm text-on-surface-variant">
<span class="text-tertiary font-semibold">Turnover 4.1%</span> • Standard secteur
        </div>
<div class="flex items-center gap-space-sm">
<button class="h-9 px-space-md rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors" type="button">
            Consulter l'analyse
          </button>
<button class="h-9 px-space-md rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md flex items-center gap-1 transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">analytics</span>
<span>Rapport Direction</span>
</button>
</div>
</div>
</div>
<!-- Card 3: Assiduité & Congés -->
<div class="flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-xl shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
<div class="flex flex-col space-y-space-md">
<div class="flex items-start justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-tertiary-fixed/40 flex items-center justify-center text-tertiary group-hover:bg-tertiary group-hover:text-on-tertiary transition-colors">
<span class="material-symbols-outlined text-headline-sm">event_available</span>
</div>
<div>
<span class="font-label-sm text-label-sm text-tertiary font-bold uppercase tracking-widest">Temps &amp; Activité</span>
<h2 class="font-headline-md text-headline-md text-on-surface">Rapport d'Assiduité &amp; Congés</h2>
</div>
</div>
<span class="px-2.5 py-1 rounded-full bg-emerald-50 text-tertiary font-label-sm text-label-sm font-semibold">
            Taux présence : 96.4%
          </span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
          Cartographie de l'absentéisme selon les normes du Code du Travail (congés annuels payés, congés maladies contrôlés, autorisations d'absence pour maternité/paternité).
        </p>
<!-- Indicators Breakdown -->
<div class="grid grid-cols-3 gap-space-sm pt-space-xs">
<div class="p-space-sm bg-surface-container-low rounded-xl text-center">
<span class="font-label-sm text-label-sm text-on-surface-variant block">Jours Pris T1</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">142 j</span>
<span class="font-label-sm text-label-sm text-secondary-container-variant block text-on-surface-variant mt-0.5">Payés &amp; RTT</span>
</div>
<div class="p-space-sm bg-surface-container-low rounded-xl text-center">
<span class="font-label-sm text-label-sm text-on-surface-variant block">Taux Absentéisme</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">2.8%</span>
<span class="font-label-sm text-label-sm text-tertiary block mt-0.5 font-semibold">-0.4% vs T4</span>
</div>
<div class="p-space-sm bg-surface-container-low rounded-xl text-center">
<span class="font-label-sm text-label-sm text-on-surface-variant block">Reliquat Moyen</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">8.5 j</span>
<span class="font-label-sm text-label-sm text-on-surface-variant block mt-0.5">Par employé</span>
</div>
</div>
</div>
<div class="flex items-center justify-between pt-space-lg mt-space-lg border-t border-surface-container-low gap-space-sm">
<div class="flex items-center gap-space-xs font-label-sm text-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-body-sm text-secondary">update</span> Données pointage synchronisées
        </div>
<div class="flex items-center gap-space-sm">
<button class="h-9 px-space-md rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors" type="button">
            Synthèse Calendaire
          </button>
<button class="h-9 px-space-md rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md flex items-center gap-1 transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">download</span>
<span>État des Absences</span>
</button>
</div>
</div>
</div>
<!-- Card 4: Déclarations CNSS & Inspection -->
<div class="flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-xl shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
<div class="flex flex-col space-y-space-md">
<div class="flex items-start justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-primary-fixed flex items-center justify-center text-primary group-hover:bg-primary-container group-hover:text-on-primary transition-colors">
<span class="material-symbols-outlined text-headline-sm">description</span>
</div>
<div>
<span class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-widest">Obligations Légales</span>
<h2 class="font-headline-md text-headline-md text-on-surface">Déclarations CNSS &amp; Inspection</h2>
</div>
</div>
<span class="px-2.5 py-1 rounded-full bg-amber-50 text-amber-800 font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-amber-600"></span> Échéance 15 Avril
          </span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
          Fichier standard d'état trimestriel des salaires pour télé-déclaration portail CNSS Tunisie (DSN TN), bordereau récapitulatif des cotisations et Registre Obligatoire du Personnel.
        </p>
<!-- Status & Certification Box -->
<div class="p-space-md bg-surface-container-low rounded-xl flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-tertiary text-display-lg-mobile">task_alt</span>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-on-surface font-semibold">Fichier Format Normé CNSS (ASCII / EDI)</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">184 matricules CNSS validés • 0 anomalies détectées</span>
</div>
</div>
<span class="px-space-sm py-1 bg-surface-container-lowest rounded-lg font-numeric-md text-label-sm text-on-surface font-bold shadow-xs">
            V 2.4.1
          </span>
</div>
</div>
<div class="flex items-center justify-between pt-space-lg mt-space-lg border-t border-surface-container-low gap-space-sm">
<button class="h-9 px-space-md rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface font-label-md text-label-md flex items-center gap-1 transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">print</span>
<span>Bordereau Récap</span>
</button>
<button class="h-9 px-space-md rounded-xl bg-primary-container hover:bg-primary text-on-primary font-label-md text-label-md flex items-center gap-1.5 transition-colors" type="button">
<span class="material-symbols-outlined text-body-md">upload_file</span>
<span>Générer Fichier Télé-transmission CNSS</span>
</button>
</div>
</div>
</div>
<!-- Detailed Reporting / Scheduled Automated Exports Section -->
<div class="bg-surface-container-lowest rounded-xl p-space-xl shadow-sm flex flex-col space-y-space-lg">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm pb-space-xs">
<div>
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-body-lg">send</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Rapports Automatisés &amp; Exports Planifiés</h3>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
          Distribution récurrente sécurisée à la Direction Générale, Finance, et au Cabinet d'Expertise Comptable.
        </p>
</div>
<div class="flex items-center gap-space-sm">
<button class="h-8 px-space-md rounded-xl bg-surface-container-low hover:bg-surface-container text-on-surface font-label-md text-label-md flex items-center gap-1 transition-colors" type="button">
<span class="material-symbols-outlined text-body-sm">history</span>
<span>Historique des Envois</span>
</button>
<button class="h-8 px-space-md rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md flex items-center gap-1 transition-colors" type="button">
<span class="material-symbols-outlined text-body-sm">add</span>
<span>Nouvelle Planification</span>
</button>
</div>
</div>
<!-- Data Table Container -->
<div class="overflow-x-auto rounded-xl">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-on-surface-variant font-label-md text-label-md uppercase tracking-wider h-10">
<th class="py-2.5 px-space-md rounded-l-xl font-semibold">Intitulé du Rapport</th>
<th class="py-2.5 px-space-md font-semibold">Destinataires</th>
<th class="py-2.5 px-space-md font-semibold">Fréquence &amp; Déclencheur</th>
<th class="py-2.5 px-space-md font-semibold">Format</th>
<th class="py-2.5 px-space-md font-semibold">Dernier Envoi</th>
<th class="py-2.5 px-space-md font-semibold">Statut</th>
<th class="py-2.5 px-space-md rounded-r-xl text-right font-semibold">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-low font-body-sm text-body-sm text-on-surface">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-low/60 transition-colors h-14">
<td class="py-3 px-space-md font-medium">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-primary text-body-md">receipt_long</span>
<div>
<span class="font-label-lg text-label-lg text-on-surface font-semibold block">Journal de Paie Consolidé</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Livre mensuel &amp; Récapitulation IRPP</span>
</div>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex items-center gap-1.5">
<div class="w-6 h-6 rounded-full bg-primary-fixed flex items-center justify-center font-label-sm text-label-sm text-primary font-bold">DF</div>
<span class="font-body-sm text-on-surface-variant">Direction Financière (C. Khelil)</span>
</div>
</td>
<td class="py-3 px-space-md font-numeric-md">
<span class="text-on-surface">Mensuelle</span>
<span class="text-on-surface-variant block text-label-sm">Chaque 28 du mois</span>
</td>
<td class="py-3 px-space-md">
<span class="inline-flex items-center px-2 py-0.5 rounded bg-surface-container text-on-surface font-numeric-md text-label-sm">
                XLSX + PDF
              </span>
</td>
<td class="py-3 px-space-md font-numeric-md text-on-surface-variant">
              28 Fév 2025, 18:00
            </td>
<td class="py-3 px-space-md">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-emerald-50 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary mr-1.5"></span> Actif
              </span>
</td>
<td class="py-3 px-space-md text-right">
<div class="inline-flex items-center gap-1">
<button aria-label="Envoyer maintenant" class="p-1.5 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-primary transition-colors" title="Exécuter maintenant" type="button">
<span class="material-symbols-outlined text-body-md">send</span>
</button>
<button aria-label="Éditer" class="p-1.5 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="Modifier paramètres" type="button">
<span class="material-symbols-outlined text-body-md">edit</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-low/60 transition-colors h-14">
<td class="py-3 px-space-md font-medium">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-tertiary text-body-md">account_balance</span>
<div>
<span class="font-label-lg text-label-lg text-on-surface font-semibold block">Déclaration Trimestrielle CNSS</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Fichier télé-transmission &amp; Bordereau 51</span>
</div>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex items-center gap-1.5">
<div class="w-6 h-6 rounded-full bg-tertiary-fixed flex items-center justify-center font-label-sm text-label-sm text-tertiary font-bold">EC</div>
<span class="font-body-sm text-on-surface-variant">Cabinet Comptable &amp; Audit</span>
</div>
</td>
<td class="py-3 px-space-md font-numeric-md">
<span class="text-on-surface">Trimestrielle</span>
<span class="text-on-surface-variant block text-label-sm">J-5 avant fin trimestre</span>
</td>
<td class="py-3 px-space-md">
<span class="inline-flex items-center px-2 py-0.5 rounded bg-surface-container text-on-surface font-numeric-md text-label-sm">
                EDI / TXT
              </span>
</td>
<td class="py-3 px-space-md font-numeric-md text-on-surface-variant">
              10 Jan 2025, 09:30
            </td>
<td class="py-3 px-space-md">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-emerald-50 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary mr-1.5"></span> Actif
              </span>
</td>
<td class="py-3 px-space-md text-right">
<div class="inline-flex items-center gap-1">
<button aria-label="Envoyer maintenant" class="p-1.5 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-primary transition-colors" title="Exécuter maintenant" type="button">
<span class="material-symbols-outlined text-body-md">send</span>
</button>
<button aria-label="Éditer" class="p-1.5 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="Modifier paramètres" type="button">
<span class="material-symbols-outlined text-body-md">edit</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-low/60 transition-colors h-14">
<td class="py-3 px-space-md font-medium">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-secondary text-body-md">equalizer</span>
<div>
<span class="font-label-lg text-label-lg text-on-surface font-semibold block">Dashboard Présence &amp; Retards RH</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Taux d'absentéisme et heures supp.</span>
</div>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex items-center gap-1.5">
<div class="w-6 h-6 rounded-full bg-secondary-fixed flex items-center justify-center font-label-sm text-label-sm text-on-secondary-fixed font-bold">DG</div>
<span class="font-body-sm text-on-surface-variant">Amel Ben Salah &amp; Managers</span>
</div>
</td>
<td class="py-3 px-space-md font-numeric-md">
<span class="text-on-surface">Hebdomadaire</span>
<span class="text-on-surface-variant block text-label-sm">Chaque Lundi à 08:00</span>
</td>
<td class="py-3 px-space-md">
<span class="inline-flex items-center px-2 py-0.5 rounded bg-surface-container text-on-surface font-numeric-md text-label-sm">
                PDF Dynamique
              </span>
</td>
<td class="py-3 px-space-md font-numeric-md text-on-surface-variant">
              17 Mars 2025, 08:00
            </td>
<td class="py-3 px-space-md">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-emerald-50 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary mr-1.5"></span> Actif
              </span>
</td>
<td class="py-3 px-space-md text-right">
<div class="inline-flex items-center gap-1">
<button aria-label="Envoyer maintenant" class="p-1.5 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-primary transition-colors" title="Exécuter maintenant" type="button">
<span class="material-symbols-outlined text-body-md">send</span>
</button>
<button aria-label="Éditer" class="p-1.5 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="Modifier paramètres" type="button">
<span class="material-symbols-outlined text-body-md">edit</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-low/60 transition-colors h-14">
<td class="py-3 px-space-md font-medium">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-primary-fixed-dim text-body-md">badge</span>
<div>
<span class="font-label-lg text-label-lg text-on-surface font-semibold block">Registre Unique du Personnel (Inspection)</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Entrées / Sorties et visas contrats</span>
</div>
</div>
</td>
<td class="py-3 px-space-md">
<div class="flex items-center gap-1.5">
<div class="w-6 h-6 rounded-full bg-surface-container-high flex items-center justify-center font-label-sm text-label-sm text-on-surface font-bold">DR</div>
<span class="font-body-sm text-on-surface-variant">Direction des Ressources Humaines</span>
</div>
</td>
<td class="py-3 px-space-md font-numeric-md">
<span class="text-on-surface">Sur Événement</span>
<span class="text-on-surface-variant block text-label-sm">Notification Recrutement</span>
</td>
<td class="py-3 px-space-md">
<span class="inline-flex items-center px-2 py-0.5 rounded bg-surface-container text-on-surface font-numeric-md text-label-sm">
                PDF Paraphé
              </span>
</td>
<td class="py-3 px-space-md font-numeric-md text-on-surface-variant">
              03 Mars 2025, 14:12
            </td>
<td class="py-3 px-space-md">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-surface-container text-secondary font-label-sm text-label-sm font-semibold">
                En veille
              </span>
</td>
<td class="py-3 px-space-md text-right">
<div class="inline-flex items-center gap-1">
<button aria-label="Envoyer maintenant" class="p-1.5 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-primary transition-colors" title="Exécuter maintenant" type="button">
<span class="material-symbols-outlined text-body-md">send</span>
</button>
<button aria-label="Éditer" class="p-1.5 rounded-lg hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="Modifier paramètres" type="button">
<span class="material-symbols-outlined text-body-md">edit</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Table Footer / Quick Link Note -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between text-on-surface-variant font-body-sm text-body-sm pt-space-xs">
<div class="flex items-center gap-1 text-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-body-sm text-tertiary">lock</span>
<span>Chiffrement AES-256 actif sur l'ensemble des exports transmis aux tiers experts.</span>
</div>
<a class="text-primary hover:underline font-label-md text-label-md font-semibold mt-2 sm:mt-0 flex items-center gap-1" href="#">
<span>Gérer les autorisations d'accès aux rapports</span>
<span class="material-symbols-outlined text-body-sm">arrow_forward</span>
</a>
</div>
</div>
</div>
<script>
  // Simple micro-interaction for feedback on export buttons
  document.querySelectorAll('button').forEach(btn => {
    btn.addEventListener('click', function(e) {
      if (this.textContent.includes('Excel') || this.textContent.includes('Exporter') || this.textContent.includes('Générer') || this.textContent.includes('Télécharger')) {
        const originalText = this.innerHTML;
        this.innerHTML = '<span class="material-symbols-outlined text-body-md animate-spin">refresh</span> Génération en cours...';
        setTimeout(() => {
          this.innerHTML = originalText;
        }, 1200);
      }
    });
  });
</script>
</x-admin-shell>
