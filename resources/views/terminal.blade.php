@extends('layouts.app')

@section('content')

<style>
    .sidebar {
        height: 100vh; /* Full height */
        overflow-y: auto; /* Enable vertical scrolling */
    }

    .content-section {
        display: none; /* Hide content sections by default */
    }

    .content-section.active {
        display: block; /* Show active content section */
    }

    .fullscreen-btn {
        margin: 10px 0;
        padding: 10px;
        background-color: #1d4ed8; /* Indigo Shade */
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<div class="container mx-auto py-6">
    <h1 class="text-xl font-bold mb-4">Web Terminal</h1>
    
    <!-- Contoh integrasi terminal berbasis web menggunakan iframe -->
    <button class="fullscreen-btn" onclick="window.open('https://10.33.102.250:4200/', '_blank');">RUN TERMINAL</button>
    <iframe src="https://10.33.102.250:4200/" width="100%" height="600px" style="border: none;">
        Your browser does not support iframes.
    </iframe>
</div>


<!-- <script>
    // Membuka tab baru secara otomatis saat halaman dimuat
    window.onload = function() {
        window.open('https://10.33.102.250:4200/', '_blank');
    };
</script> -->
@endsection
