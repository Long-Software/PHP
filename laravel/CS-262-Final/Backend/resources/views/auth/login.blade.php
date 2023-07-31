<link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />

<x-guest-layout>
    <x-auth-card>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input type="hidden" name='ip' id='ip' />
            <input type="hidden" inputmode="decimal" id="lng" name="lng" pattern="[0-9]*[.,]?[0-9]*">
            <input type="hidden" inputmode="decimal" id="lat" name="lat" pattern="[0-9]*[.,]?[0-9]*">
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <ul>
                    <li class='d-flex justify-between align-center'>
                        <p>Enable Geometric</p>
                        <button id='geo' type="button" class='btn bg-danger btn-danger'>Check</button>
                    </li>
                    <li class='d-flex justify-between align-center mt-3'>
                        <p>Waiting for IP Addresses</p>
                        <p id='d-ip' class='text-success'></p>
                    </li>
                </ul>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3" id="login">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
        <script src="{{ asset('assets/js/login.js') }}"></script>
    </x-auth-card>
</x-guest-layout>
