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

<div class="container flex">
    <!-- Section 1: Sidebar -->
    <div class="sidebar w-64 bg-white border-r border-gray-300 p-4">
        <h3 class="font-semibold">VULN LABS</h3>
        <ul>
            <li><a href="javascript:void(0)" onclick="showContent('content-dvwa')" class="text-blue-500 hover:underline">DVWA</a></li>
            <li><a href="javascript:void(0)" onclick="showContent('content-mutillidae')" class="text-blue-500 hover:underline">MUTILLIDAE</a></li>
            <li><a href="javascript:void(0)" onclick="showContent('content-juice-shop')" class="text-blue-500 hover:underline">JUICE-SHOP</a></li>
        </ul>
    </div>

    <!-- Section 2: Main Content -->
    <div class="main-content flex-1 p-4">
        <div id="content-dvwa" class="content-section active">
            <h2>DVWA <small>(Open in new window for login)</small></h2>
            <h2><small>(Username : admin)</small></h2>
            <h2><small>(Password : password)</small></h2>
            <button class="fullscreen-btn" onclick="window.open('http://10.33.102.107:1000/index.php', '_blank');">Open DVWA</button>
            <iframe id="iframe-mutillidae" src="http://10.33.102.107:1000/" width="100%" height="600" style="border: none;"></iframe>
            <!-- <a href="http://10.33.102.107:1000/index.php" target="_blank" class="text-blue-500 hover:underline">Open DVWA in New Window</a> -->
        </div>
        <div id="content-mutillidae" class="content-section">
            <h2>MUTILLIDAE</h2>
            <button class="fullscreen-btn" onclick="window.open('http://10.33.102.107:2000/mutillidae/', '_blank');">Open Mutillidae</button>
            <iframe id="iframe-mutillidae" src="http://10.33.102.107:2000/mutillidae/" width="100%" height="600" style="border: none;"></iframe>
        </div>
        <div id="content-juice-shop" class="content-section">
            <h2>JUICE-SHOP<small>(Open in new window for login)</small></h2>
            <button class="fullscreen-btn" onclick="window.open('http://10.33.102.107:3000/#/', '_blank');">Open OWASP-JUICE</button>
            <iframe id="iframe-juice-shop" src="http://10.33.102.107:3000/#/" width="100%" height="600" style="border: none;"></iframe>
        </div>
      </div>
</div>

<script>
    function showContent(contentId) {
        // Hide all content sections
        const sections = document.querySelectorAll('.content-section');
        sections.forEach(section => {
            section.style.display = 'none'; // Hide all sections
        });

        // Show the selected content section
        const activeSection = document.getElementById(contentId);
        if (activeSection) {
            activeSection.style.display = 'block'; // Show the selected section
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        showContent('content-dvwa');
    });
    document.addEventListener('DOMContentLoaded', function() {
        showContent('content-juice-shop');
    });
    document.addEventListener('DOMContentLoaded', function() {
        showContent('content-mutillidae');
    });
</script>
@endsection
