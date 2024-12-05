@extends('layouts.app')

@section('content')
<style>
    .sidebar {
        height: 100vh;
        overflow-y: auto;
    }

    .content-section {
        display: none; 
    }

    .content-section.active {
        display: block; 
    }

    .fullscreen-btn {
        margin: 10px 0;
        padding: 10px;
        background-color: #1d4ed8; 
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<div class="container flex">
    <!-- Section 1: Sidebar -->
    <div class="sidebar w-64 bg-white border-r border-gray-300 p-4">
        <h3 class="font-semibold">Information Gathering</h3>
        <ul>
            <li><a href="javascript:void(0)" onclick="showContent('content-nikto')" class="text-blue-500 hover:underline">NIKTO</a></li>
            <li><a href="javascript:void(0)" onclick="showContent('content-nmap')" class="text-blue-500 hover:underline">NMAP</a></li>
        </ul>
    </div>

<!-- Section 2: Main Content -->
    <div class="main-content flex-1 p-4">
        <div id="content-nikto" class="content-section">
            <h2>NIKTO</h2>
            <button class="fullscreen-btn" onclick="window.open('https://nikto.online/', '_blank');">Open NIKTO</button>
            <iframe id="iframe-nikto" src="https://nikto.online/" width="100%" height="600" style="border: none;"></iframe>
        </div>
        <div id="content-nmap" class="content-section">
            <h2>NMAP</h2>
            <button class="fullscreen-btn" onclick="window.open('https://nmap.org', '_blank');">Open NMAP</button>
            <iframe id="iframe-nmap" src="https://nmap.org/" width="100%" height="600" style="border: none;"></iframe>
        </div>
    </div>
</div>
<script>
    function showContent(contentId) {
        const sections = document.querySelectorAll('.content-section');
        sections.forEach(section => {
            section.classList.remove('active'); 
            section.style.display = "none"; 
        });
        const activeSection = document.getElementById(contentId);
        if (activeSection) {
            activeSection.classList.add('active'); 
            activeSection.style.display = "block"; 
        }
    }
</script>
@endsection
