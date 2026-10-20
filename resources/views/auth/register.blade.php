<x-auth-shell tab="register" title="Créer un compte">
    <div class="mb-5">
        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Créer votre compte Entreprise</h1>
        <p class="text-sm text-slate-500 mt-1">Essai gratuit 14 jours, sans carte bancaire requise. Conforme Code du Travail Tunisien.</p>
    </div>

    <form class="space-y-3.5" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
            <!-- Name -->
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1" for="reg-fullname">Nom &amp; Prénom</label>
                <input class="block w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-900 placeholder-slate-400 text-sm focus:ring-2 focus:ring-brand-600 focus:border-brand-600 transition-colors" id="reg-fullname" name="name" placeholder="ex: Karim Ben Amor" required autofocus type="text" value="{{ old('name') }}" autocomplete="name"/>
                @error('name')
                    <p class="mt-1 text-xs font-medium text-rose-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1" for="reg-email">Email Professionnel</label>
                <input class="block w-full px-3 py-2.5 rounded-lg border border-slate-300 text-slate-900 placeholder-slate-400 text-sm focus:ring-2 focus:ring-brand-600 focus:border-brand-600 transition-colors" id="reg-email" name="email" placeholder="directeur.rh@societe.tn" required type="email" value="{{ old('email') }}" autocomplete="username"/>
                @error('email')
                    <p class="mt-1 text-xs font-medium text-rose-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
            <!-- Password -->
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1" for="reg-password">Mot de passe fort</label>
                <div class="relative">
                    <input class="block w-full px-3 pr-10 py-2.5 rounded-lg border border-slate-300 text-slate-900 placeholder-slate-400 text-sm focus:ring-2 focus:ring-brand-600 focus:border-brand-600 transition-colors" id="reg-password" name="password" placeholder="8+ caractères" required type="password" autocomplete="new-password"/>
                    <button class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600" onclick="togglePasswordVisibility('reg-password', this)" type="button">
                        <span class="material-symbols-outlined text-[18px]">visibility_off</span>
                    </button>
                </div>
                @error('password')
                    <p class="mt-1 text-xs font-medium text-rose-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1" for="reg-password-confirmation">Confirmer le mot de passe</label>
                <div class="relative">
                    <input class="block w-full px-3 pr-10 py-2.5 rounded-lg border border-slate-300 text-slate-900 placeholder-slate-400 text-sm focus:ring-2 focus:ring-brand-600 focus:border-brand-600 transition-colors" id="reg-password-confirmation" name="password_confirmation" placeholder="8+ caractères" required type="password" autocomplete="new-password"/>
                    <button class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600" onclick="togglePasswordVisibility('reg-password-confirmation', this)" type="button">
                        <span class="material-symbols-outlined text-[18px]">visibility_off</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Terms -->
        <div class="pt-1">
            <label class="flex items-start gap-2.5 cursor-pointer">
                <input class="w-4 h-4 mt-0.5 rounded text-brand-600 border-slate-300 focus:ring-brand-500 cursor-pointer" required type="checkbox"/>
                <span class="text-xs text-slate-600 leading-snug">
                    J'accepte les <a class="text-brand-600 underline" href="#">Conditions Générales</a> et la <a class="text-brand-600 underline" href="#">Politique de Confidentialité</a> conforme aux directives RGPD &amp; INPDP Tunisie.
                </span>
            </label>
        </div>

        <div class="pt-2">
            <button class="w-full py-3.5 px-4 bg-brand-600 hover:bg-brand-700 active:bg-brand-800 text-white font-semibold text-sm rounded-lg shadow-md hover:shadow-lg transition-all duration-150 flex items-center justify-center gap-2" type="submit">
                <span>Démarrer l'essai gratuit HRM Pro (14 jours)</span>
                <span class="material-symbols-outlined text-[20px]">rocket_launch</span>
            </button>
        </div>
    </form>
</x-auth-shell>
