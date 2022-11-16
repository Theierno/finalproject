<link rel="stylesheet" href="{{asset('css/app.css')}}">
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- matricule de solde -->
            <div class="mt-4">
                <x-label for="matricule" :value="__('Matricule')" />

                <x-input id="matricule" class="block mt-1 w-full" type="number" name="matricule" :value="old('matricule')" required />
            </div>

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
             <!-- PreNom -->
             <div>
                <x-label for="prenom" :value="__('Prenom')" />

                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('Prenom')" required autofocus />
            </div>
             <!-- Role -->
            <div class="relative ">
        <select name="role" class="block  mt-4 w-full  border-gray-200 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
        <option selected>ROLE</option>
          <option value="RH">RH</option>
          <option value="DAGE">DAGE</option>
          <option value="Employe simple" >Employe simple</option>
        </select>
        
      </div>
       <!--  Address -->
       <div class="mt-4">
                <x-label for="adress" :value="__('Adresse')" />

                <x-input id="adress" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
        

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
<link rel="stylesheet" href="{{asset('js/app.js')}}">
