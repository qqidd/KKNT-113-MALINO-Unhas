<x-guest-layout>
    <x-authentication-card class="bg-black text-white">
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="bg-gray-900 p-6 rounded-lg shadow-lg">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" class="text-green-400" />
                <x-input id="name" class="block mt-1 w-full bg-gray-800 text-white border-gray-600" type="text"
                    name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" class="text-green-400" />
                <x-input id="email" class="block mt-1 w-full bg-gray-800 text-white border-gray-600" type="email"
                    name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-green-400" />
                <x-input id="password" class="block mt-1 w-full bg-gray-800 text-white border-gray-600" type="password"
                    name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="text-green-400" />
                <x-input id="password_confirmation" class="block mt-1 w-full bg-gray-800 text-white border-gray-600"
                    type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required class="bg-gray-800 border-gray-600" />
                        <div class="ms-2 text-gray-400">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                class="underline text-green-400 hover:text-green-300">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                class="underline text-green-400 hover:text-green-300">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-400 hover:text-green-400" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4 bg-green-500 hover:bg-green-600 text-black">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>