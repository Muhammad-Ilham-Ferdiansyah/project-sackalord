<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-2xl">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <x-auth-validation-success />
                    <form method="POST" action="{{ route('profile.update') }}">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Name')"></x-label>
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        value="{{ Auth::user()->name }}" autofocus></x-input>
                                </div>
                                <div>
                                    <x-label for="username" :value="__('Username')"></x-label>
                                    <x-input id="username" class="block mt-1 w-full" type="text" name="username"
                                        value="{{ Auth::user()->username }}" autofocus></x-input>
                                </div>
                                <div>
                                    <x-label for="email" :value="__('Email')"></x-label>
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        value="{{ Auth::user()->email }}" autofocus></x-input>
                                </div>
                            </div>
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="new_password" :value="__('New Password')"></x-label>
                                    <x-input id="new_password" class="block mt-1 w-full" type="password" name="password"
                                        autocomplete="new-password"></x-input>
                                </div>
                                <div>
                                    <x-label for="password_confirmation" :value="__('Confirm Password')"></x-label>
                                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                        name="password_confirmation" autocomplete="confirm-password"></x-input>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
