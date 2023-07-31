<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('store.admin') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="user_name" :value="__('Name')" />

                <x-input id="user_name" class="block mt-1 w-full" type="text" name="user_name" :value="old('user_name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-label for="level" :value="__('Privileage')" />
                <x-select id="select" class="block w-full" name="type">
                    <option value="0" selected disabled hidden>{{ __('Choose an option') }}</option>
                    @foreach ($level as $lvl)
                        <option value={{ $lvl->level_id }}>{{ $lvl->level_description }}</option>
                    @endforeach
                </x-select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>
            <input type="hidden" name="account_type" value='a'>
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
