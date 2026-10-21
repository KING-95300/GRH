@props(['active' => 'dashboard', 'title' => 'Portail Collaborateur'])

@php
    $user = auth()->user();
    $nameParts = preg_split('/\s+/', trim($user->name));
    $firstName = $nameParts[0] ?? $user->name;
    $initials = strtoupper(substr($nameParts[0] ?? '', 0, 1) . substr($nameParts[1] ?? '', 0, 1));
    $matricule = 'MAT-' . str_pad($user->id, 4, '0', STR_PAD_LEFT);

    $navBase = 'flex items-center gap-space-sm px-space-md py-space-sm rounded-xl font-label-lg text-label-lg transition-all';
    $navIdle = 'text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface';
    $navActive = 'bg-primary-container text-on-primary shadow-[0_1px_3px_0_rgba(15,23,42,0.05)]';

    $links = [
        ['key' => 'dashboard', 'label' => 'Mon Tableau de bord', 'icon' => 'dashboard', 'route' => 'dashboard'],
        ['key' => 'conges', 'label' => 'Mes Congés', 'icon' => 'event_available', 'route' => 'collaborator.conges'],
        ['key' => 'payslips', 'label' => 'Mes Fiches de Paie', 'icon' => 'payments', 'route' => 'collaborator.payslips'],
        ['key' => 'attendance', 'label' => 'Mon Pointage', 'icon' => 'timelapse', 'route' => 'collaborator.attendance'],
        ['key' => 'documents', 'label' => 'Mes Documents', 'icon' => 'folder_shared', 'route' => 'collaborator.documents'],
        ['key' => 'profile', 'label' => 'Mon Profil & Carrière', 'icon' => 'badge', 'route' => 'profile.edit'],
    ];
@endphp

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="{{ csrf_token() }}" name="csrf-token"/>
    <title>{{ $title }} — HRM Pro</title>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        body {
            overscroll-behavior: none;
        }
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-tertiary-fixed-variant": "#005236",
                        "on-secondary-fixed": "#0b1c30",
                        "outline-variant": "#c7c4d8",
                        "on-secondary": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-secondary-container": "#54647a",
                        "inverse-on-surface": "#eef0ff",
                        "on-secondary-fixed-variant": "#38485d",
                        "tertiary": "#005338",
                        "surface-dim": "#d2d9f4",
                        "secondary-container": "#d0e1fb",
                        "on-primary-fixed-variant": "#3323cc",
                        "secondary-fixed": "#d3e4fe",
                        "surface-bright": "#faf8ff",
                        "on-tertiary-container": "#67f4b7",
                        "on-primary-fixed": "#0f0069",
                        "error": "#ba1a1a",
                        "surface-variant": "#dae2fd",
                        "on-primary-container": "#dad7ff",
                        "tertiary-fixed": "#6ffbbe",
                        "primary-fixed": "#e2dfff",
                        "surface": "#faf8ff",
                        "on-error": "#ffffff",
                        "inverse-surface": "#283044",
                        "on-surface": "#131b2e",
                        "tertiary-container": "#006e4b",
                        "inverse-primary": "#c3c0ff",
                        "on-surface-variant": "#464555",
                        "background": "#faf8ff",
                        "outline": "#777587",
                        "primary-container": "#4f46e5",
                        "on-primary": "#ffffff",
                        "surface-container": "#eaedff",
                        "secondary": "#505f76",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-fixed": "#002113",
                        "surface-container-highest": "#dae2fd",
                        "primary-fixed-dim": "#c3c0ff",
                        "surface-tint": "#4d44e3",
                        "tertiary-fixed-dim": "#4edea3",
                        "surface-container-high": "#e2e7ff",
                        "surface-container-low": "#f2f3ff",
                        "primary": "#3525cd",
                        "on-background": "#131b2e",
                        "error-container": "#ffdad6",
                        "secondary-fixed-dim": "#b7c8e1"
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    spacing: {
                        "gutter": "1.25rem",
                        "space-md": "0.75rem",
                        "gutter-mobile": "0.75rem",
                        "space-xl": "1.5rem",
                        "space-xs": "0.25rem",
                        "margin-mobile": "1rem",
                        "space-lg": "1rem",
                        "space-sm": "0.5rem",
                        "margin": "2rem"
                    },
                    fontFamily: {
                        "display-lg": ["Inter"],
                        "headline-sm": ["Inter"],
                        "body-sm": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "label-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "label-md": ["Inter"],
                        "numeric-md": ["Inter"]
                    },
                    fontSize: {
                        "display-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.025em", "fontWeight": "700"}],
                        "headline-sm": ["16px", {"lineHeight": "24px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "body-sm": ["13px", {"lineHeight": "18px", "fontWeight": "400"}],
                        "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "600"}],
                        "headline-lg": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                        "headline-md": ["20px", {"lineHeight": "28px", "letterSpacing": "-0.015em", "fontWeight": "600"}],
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "label-lg": ["14px", {"lineHeight": "20px", "fontWeight": "500"}],
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "display-lg-mobile": ["26px", {"lineHeight": "34px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                        "numeric-md": ["14px", {"lineHeight": "20px", "fontWeight": "500"}]
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-surface font-body-md text-body-md text-on-surface overflow-x-hidden">

<!-- Sidebar -->
<aside class="fixed left-0 top-0 h-full w-64 bg-surface-container-low shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-50 hidden lg:flex flex-col justify-between py-space-lg">
    <div class="flex flex-col gap-space-lg">
        <div class="px-space-xl flex items-center gap-space-sm">
            <a class="w-9 h-9 rounded-xl bg-primary-container flex items-center justify-center text-on-primary shadow-sm" href="{{ route('dashboard') }}">
                <span class="material-symbols-outlined text-[22px]">corporate_fare</span>
            </a>
            <div class="flex flex-col">
                <div class="flex items-center gap-space-xs">
                    <span class="font-headline-sm text-headline-sm text-on-surface">HRM Pro</span>
                    <span class="px-1.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-fixed text-[10px] font-label-sm uppercase tracking-wider font-semibold">TN</span>
                </div>
                <span class="font-label-sm text-label-sm text-on-surface-variant leading-none">Portail Collaborateur</span>
            </div>
        </div>

        <div class="px-space-lg">
            <div class="px-space-sm py-space-xs rounded-xl bg-surface-container-high flex items-center justify-between">
                <div class="flex items-center gap-space-xs overflow-hidden">
                    <span class="material-symbols-outlined text-[16px] text-primary">apartment</span>
                    <span class="font-label-md text-label-md text-on-surface truncate">Carthage Tech Solutions</span>
                </div>
                <span class="w-2 h-2 rounded-full bg-tertiary-container shrink-0" title="Système actif"></span>
            </div>
        </div>

        <nav class="flex flex-col gap-1 px-space-md">
            @foreach ($links as $link)
                <a
                    class="{{ $navBase }} {{ $active === $link['key'] ? $navActive : $navIdle }}"
                    @if ($active === $link['key']) aria-current="page" @endif
                    href="{{ route($link['route']) }}"
                >
                    <span class="material-symbols-outlined text-[20px]">{{ $link['icon'] }}</span>
                    <span>{{ $link['label'] }}</span>
                </a>
            @endforeach
        </nav>
    </div>

    <div class="px-space-md flex flex-col gap-space-md">
        <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-[0_1px_3px_0_rgba(15,23,42,0.05)]">
            <div class="flex items-start gap-space-xs mb-1.5">
                <span class="material-symbols-outlined text-[16px] text-tertiary-container shrink-0">verified_user</span>
                <div class="font-label-md text-label-md text-on-surface font-semibold">Conformité RH Tunisie</div>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant leading-tight">Conforme au Code du Travail TN &amp; protection des données INPDP.</p>
        </div>
        <div class="flex items-center justify-between px-space-sm pt-space-xs text-on-surface-variant font-label-sm text-label-sm">
            <span>v2.4.1 (TN-Loi)</span>
            <span class="flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-tertiary-container"></span>Sécurisé</span>
        </div>
    </div>
</aside>

<!-- Main shell -->
<div class="lg:pl-64">
    <!-- Top Header -->
    <header class="fixed top-0 left-0 lg:left-64 right-0 h-16 bg-surface/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-40 flex items-center justify-between px-4 sm:px-6 gap-3">
        <div class="flex items-center gap-3 min-w-0">
            <!-- Mobile brand -->
            <a class="lg:hidden flex items-center gap-2 shrink-0" href="{{ route('dashboard') }}">
                <div class="w-9 h-9 rounded-xl bg-primary-container flex items-center justify-center text-on-primary shadow-sm">
                    <span class="material-symbols-outlined text-[20px]">corporate_fare</span>
                </div>
                <span class="font-label-lg font-semibold text-on-surface hidden sm:inline">HRM Pro</span>
            </a>
            <!-- Search -->
            <div class="hidden md:flex w-96 items-center gap-space-sm px-space-md py-space-xs rounded-xl bg-surface-container-low shadow-[0_1px_3px_0_rgba(15,23,42,0.05)] text-on-surface-variant">
                <span class="material-symbols-outlined text-[18px]">search</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant select-none">Rechercher un document, solde congé, fiche...</span>
                <span class="ml-auto font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface">⌘K</span>
            </div>
        </div>

        <div class="flex items-center gap-3 sm:gap-space-lg shrink-0">
            <a class="h-9.5 px-3 sm:px-space-lg rounded-xl bg-primary-container text-on-primary font-label-lg text-label-lg flex items-center gap-space-xs hover:bg-primary shadow-[0_1px_3px_0_rgba(15,23,42,0.05)] transition-all" href="{{ route('conges.create') }}">
                <span class="material-symbols-outlined text-[18px]">add</span>
                <span class="hidden sm:inline">Nouvelle Demande</span>
            </a>
            <div class="relative flex items-center justify-center">
                <button class="w-9 h-9 rounded-xl flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors" type="button">
                    <span class="material-symbols-outlined text-[20px]">notifications</span>
                </button>
                <span class="absolute top-1 right-1 w-4 h-4 rounded-full bg-error text-on-error font-label-sm text-[10px] flex items-center justify-center font-bold pointer-events-none">2</span>
            </div>
            <div class="flex items-center gap-space-md pl-space-sm">
                <div class="hidden sm:flex flex-col text-right">
                    <span class="font-label-lg text-label-lg text-on-surface font-semibold leading-tight">{{ $user->name }}</span>
                    <div class="flex items-center justify-end gap-space-xs">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Collaborateur</span>
                        <span class="px-1.5 py-0.5 rounded bg-surface-container-high text-on-secondary-container font-label-sm text-[10px]">{{ $matricule }}</span>
                    </div>
                </div>
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shrink-0">
                    <span class="text-on-primary text-[11px] font-bold">{{ $initials ?: 'U' }}</span>
                </div>
                <div class="relative">
                    <button class="w-6 h-6 rounded flex items-center justify-center text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors" title="Menu utilisateur" type="button" id="userMenuBtn">
                        <span class="material-symbols-outlined text-[18px]">keyboard_arrow_down</span>
                    </button>
                    <div class="hidden absolute right-0 mt-2 w-48 rounded-xl bg-surface-container-lowest shadow-lg border border-surface-container-high py-1 z-50" id="userMenu">
                        <a class="flex items-center gap-2 px-4 py-2 text-label-lg text-on-surface hover:bg-surface-container-low transition-colors" href="{{ route('profile.edit') }}">
                            <span class="material-symbols-outlined text-[18px]">person</span>
                            Mon profil
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="w-full flex items-center gap-2 px-4 py-2 text-label-lg text-error hover:bg-surface-container-low transition-colors text-left" type="submit">
                                <span class="material-symbols-outlined text-[18px]">logout</span>
                                Déconnexion
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="w-full pt-16 bg-surface min-h-screen">
        {{ $slot }}
    </main>
</div>

<script>
    // User menu dropdown
    const userMenuBtn = document.getElementById('userMenuBtn');
    const userMenu = document.getElementById('userMenu');
    if (userMenuBtn && userMenu) {
        userMenuBtn.addEventListener('click', (event) => {
            event.stopPropagation();
            userMenu.classList.toggle('hidden');
        });
        document.addEventListener('click', () => userMenu.classList.add('hidden'));
    }
</script>
</body>
</html>
