<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_kgotdjba.json"
                    background="transparent" speed="1" style="width: 150px; margin-bottom: -10px; margin-top: -50px;"
                    loop autoplay>
                </lottie-player>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Showing Password -->
            <div class="block mt-4">
                <label for="show_password" class="inline-flex items-center">
                    <input id="show_password" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="show_password" onclick="showPassword()">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Show Password') }}</span>
                </label>
            </div>

            <!-- Remember Me -->
            {{-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}


            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('register'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __("Don't have an account yet?") }}
                    </a>
                @endif

                <x-button class="ml-3" name="attributes">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
<script>
    function showPassword() {
        let show = document.querySelector('#password');
        if (show.type === 'password') {
            show.type = 'text';
        } else {
            show.type = 'password';
        }
    }
</script>
