<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Profile') }}
        </h2>
        <div class="max-w-xl">
            @include('profile.partials.update-profile-information-form')
        </div>
        <div class="max-w-xl">
            @include('profile.partials.update-password-form')
        </div>
        <div class="max-w-xl">
            @include('profile.partials.delete-user-form')
        </div>
    </x-slot>
</x-app-layout>
