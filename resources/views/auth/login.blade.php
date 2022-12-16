<x-guest-layout>

    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" class="" action="{{ route('login') }}">
            @csrf
            <div id="centralIndexModule" class="flex flex-col p-6">                  
                <div id="flex flex-col">
                    <div class="flex justify-center mt-4">
                        <img alt="obackpage" title="obackpage" src="https://obackpage.com/assets/frontend/img/logo.png">
                    </div>
                    <div class="flex justify-center mt-4">
                    <span class="text-gray-800 text-xl font-bold">Login / Signup</span>
                    </div>
                </div>
                <div class="flex justify-center">
                <a href="{{ url('authorized/google') }}" class="p-4">
                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
                </a>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
