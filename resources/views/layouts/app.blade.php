<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white"> <!-- Ubah background menjadi putih -->
            @include('layouts.navigation')

            <!-- Menu Berdasarkan Peran -->
            <nav>
                @if(Auth::user()->roles == 'administrator')
                    <!-- Menu untuk administrator -->
                    <ul>
                        <li><a href="{{ route('admin.dashboard') }}"></a></li>
                        <li><a href="{{ route('admin.users.index') }}"></a></li>
                        <li><a href="{{ route('attacker') }}"></a></li>
                        <li><a href="{{ route('sandbox') }}"></a></li>
                        <li><a href="{{ route('profile.edit') }}"></a></li>
                    </ul>
                @elseif(Auth::user()->roles == 'attacker')
                    <!-- Menu untuk attacker -->
                    <ul>
                        <li><a href="{{ route('attacker.dashboard') }}"></a></li>
                        <li><a href="{{ route('sandbox') }}"></a></li>
                        <li><a href="{{ route('profile.edit') }}"></a></li>
                    </ul>
                @elseif(Auth::user()->roles == 'defender')
                    <!-- Menu untuk defender -->
                    <ul>
                        <li><a href="{{ route('defender.dashboard') }}"></a></li>
                        <li><a href="{{ route('sandbox') }}"></a></li>
                        <li><a href="{{ route('profile.edit') }}"></a></li>
                    </ul>
                @endif
            </nav>

            <!-- Page Heading -->
            @if (isset($header))
            <header class="bg-gray-100 shadow"> <!-- Ubah background menjadi terang -->
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @yield('content') <!-- Tempatkan yield ini untuk konten utama -->
            </main>
        </div>
    </body>
</html>
