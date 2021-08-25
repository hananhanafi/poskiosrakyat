<link rel="icon" type="image/png" sizes="16x16" href="{{url('img/logokiosrakyat.png')}}">
    <title>DAFTAR POS | KiosRakyat</title>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo"></br>
            <img src="{{url('img/logokiosrakyat.png')}}" alt="" class="brand-image img-circle"
                style="opacity: .8">
            <span class="brand-text font-weight-light" style="color: #000"><b>POS KiosRakyat</b></span>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ url('register/retailer') }}">
            @csrf

            <div>
                <x-jet-label for="nama_toko" value="{{ __('Nama Toko') }}" />
                <x-jet-input id="nama_toko" class="block mt-1 w-full" type="text" name="nama_toko"
                    :value="old('nama_toko')" required autofocus autocomplete="nama_toko" />
            </div>

            <div>
                <x-jet-label for="nama_pemilik" value="{{ __('Nama Pemilik') }}" />
                <x-jet-input id="nama_pemilik" class="block mt-1 w-full" type="text" name="nama_pemilik"
                    :value="old('nama_pemilik')" required autofocus autocomplete="nama_pemilik" />
            </div>

            <div>
                <x-jet-label for="no_hp" value="{{ __('Nomor HP') }}" />
                <x-jet-input id="no_hp" class="block mt-1 w-full" type="text" name="no_hp" :value="old('no_hp')"
                    required autofocus autocomplete="no_hp" />
            </div>

            <div>
                <x-jet-label for="username" value="{{ __('Username') }}" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username"
                    :value="old('username')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('MASUK?') }}
                </a>

                <x-jet-button class="ml-4" >
                    {{ __('DAFTAR') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
