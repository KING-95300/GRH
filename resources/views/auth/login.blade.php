<x-auth-shell tab="login" title="Connexion">
    <div class="mb-6">
        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Bon retour parmi nous</h1>
        <p class="text-sm text-slate-500 mt-1.5">Accédez à votre espace de gestion des ressources humaines, paie et pointage.</p>
    </div>

    @if (session('status'))
        <div class="mb-4 rounded-lg bg-emerald-50 border border-emerald-200 px-4 py-3 text-sm text-emerald-800" role="status">
            {{ session('status') }}
        </div>
    @endif

    <form class="space-y-4" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Field -->
        <div>
            <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-1.5" for="signin-email">
                Adresse Email Professionnelle
            </label>
            <div class="relative rounded-lg shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <span class="material-symbols-outlined text-[20px]">mail</span>
                </div>
                <input class="block w-full pl-10 pr-4 py-3 rounded-lg border border-slate-300 text-slate-900 placeholder-slate-400 text-sm focus:ring-2 focus:ring-brand-600 focus:border-brand-600 transition-colors" id="signin-email" name="email" placeholder="nom@entreprise.tn" required autofocus type="email" value="{{ old('email') }}" autocomplete="username"/>
            </div>
            @error('email')
                <p class="mt-1.5 text-xs font-medium text-rose-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password Field -->
        <div>
            <div class="flex items-center justify-between mb-1.5">
                <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider" for="signin-password">
                    Mot de passe
                </label>
            </div>
            <div class="relative rounded-lg shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <span class="material-symbols-outlined text-[20px]">lock</span>
                </div>
                <input class="block w-full pl-10 pr-12 py-3 rounded-lg border border-slate-300 text-slate-900 placeholder-slate-400 text-sm focus:ring-2 focus:ring-brand-600 focus:border-brand-600 transition-colors" id="signin-password" name="password" placeholder="••••••••••••" required type="password" autocomplete="current-password"/>
                <button aria-label="Afficher ou masquer mot de passe" class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none" onclick="togglePasswordVisibility('signin-password', this)" type="button">
                    <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                </button>
            </div>
            @error('password')
                <p class="mt-1.5 text-xs font-medium text-rose-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Extras: Remember Me & Forgot Password -->
        <div class="flex items-center justify-between pt-1">
            <label class="flex items-center gap-2 cursor-pointer select-none">
                <input class="w-4 h-4 rounded text-brand-600 border-slate-300 focus:ring-brand-500 cursor-pointer" id="signin-remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}/>
                <span class="text-xs sm:text-sm text-slate-600">Se souvenir de moi pendant 30 jours</span>
            </label>
            @if (Route::has('password.request'))
                <a class="text-xs sm:text-sm font-semibold text-brand-600 hover:text-brand-700 transition-colors hover:underline" href="{{ route('password.request') }}">
                    Mot de passe oublié ?
                </a>
            @endif
        </div>

        <!-- Primary Submit Button -->
        <div class="pt-2">
            <button class="w-full py-3.5 px-4 bg-brand-600 hover:bg-brand-700 active:bg-brand-800 text-white font-semibold text-sm rounded-lg shadow-md hover:shadow-lg transition-all duration-150 flex items-center justify-center gap-2 group" type="submit">
                <span>Se connecter à l'espace RH</span>
                <span class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </button>
        </div>
    </form>

    <!-- Divider -->
    <div class="relative my-6">
        <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-slate-200"></div>
        </div>
        <div class="relative flex justify-center text-xs uppercase">
            <span class="bg-white px-3 text-slate-400 font-medium">ou continuer avec</span>
        </div>
    </div>

    <!-- Social / SSO Buttons -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
        <button class="w-full flex items-center justify-center gap-2.5 py-2.5 px-3 border border-slate-300 rounded-lg bg-white hover:bg-slate-50 text-slate-700 text-xs font-semibold shadow-sm transition-colors" type="button">
            <svg class="w-4 h-4" viewBox="0 0 24 24">
                <path d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" fill="#4285F4"></path>
                <path d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.26v3.13C3.27 21.37 7.34 24 12 24z" fill="#34A853"></path>
                <path d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.14-1.57.38-2.29V6.57H1.26C.46 8.17 0 9.99 0 12s.46 3.83 1.26 5.43l4.02-3.14z" fill="#FBBC05"></path>
                <path d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.27 2.63 1.26 6.57l4.02 3.14c.95-2.83 3.6-4.96 6.72-4.96z" fill="#EA4335"></path>
            </svg>
            <span>Google Workspace</span>
        </button>
        <button class="w-full flex items-center justify-center gap-2.5 py-2.5 px-3 border border-slate-300 rounded-lg bg-white hover:bg-slate-50 text-slate-700 text-xs font-semibold shadow-sm transition-colors" type="button">
            <span class="material-symbols-outlined text-[18px] text-slate-500">fingerprint</span>
            <span>SSO Entreprise (SAML)</span>
        </button>
    </div>
</x-auth-shell>
