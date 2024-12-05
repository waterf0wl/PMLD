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
        <h3 class="font-semibold">Forensics</h3>
        <ul>
            <li><a href="javascript:void(0)" onclick="showContent('content-virustotal')" class="text-blue-500 hover:underline">VIRUSTOTAL</a></li>
            <li><a href="javascript:void(0)" onclick="showContent('content-exifmeta')" class="text-blue-500 hover:underline">EXIF META</a></li>
            <li><a href="javascript:void(0)" onclick="showContent('content-photopea')" class="text-blue-500 hover:underline">PHOTOPEA</a></li>
            <li><a href="javascript:void(0)" onclick="showContent('content-mobsf')" class="text-blue-500 hover:underline">MobSF</a></li>
        </ul>
        <h3 class="font-semibold mt-4">Cryptography</h3>
        <ul>
            <li><a href="javascript:void(0)" onclick="showContent('content-md5decrypt')" class="text-blue-500 hover:underline">MD5DECRYPT</a></li>
            <li><a href="javascript:void(0)" onclick="showContent('content-cyberchef')" class="text-blue-500 hover:underline">CYBERCHEF</a></li>        </ul>        
    </div>

    <!-- Section 2: Main Content -->
    <div class="main-content flex-1 p-4">
        <div id="content-virustotal" class="content-section">
            <h2>VIRUSTOTAL</h2>
            <button class="fullscreen-btn" onclick="window.open('https://www.virustotal.com/gui/', '_blank');">Open VIRUSTOTAL</button>
            <iframe id="iframe-virustotal" src="https://www.virustotal.com/gui/" width="100%" height="600px" style="border: none"></iframe>
        </div>
        <div id="content-exifmeta" class="content-section">
            <h2>EXIF META</h2>
            <button class="fullscreen-btn" onclick="window.open('https://exifmeta.com/', '_blank');">Open EXIFMETA</button>
            <iframe id="iframe-exifmeta" src="https://exifmeta.com/" width="100%" height="600px" style="border: none"></iframe>
        </div>
        <div id="content-photopea" class="content-section">
            <h2>PHOTOPEA</h2>
            <button class="fullscreen-btn" onclick="window.open('https://www.photopea.com/', '_blank');">Open PHOTOPEA</button>
            <iframe id="iframe-photopea" src="https://www.photopea.com/" width="100%" height="600px" style="border: none"></iframe>
        </div>
        <div id="content-mobsf" class="content-section">
            <h2>MobSF</h2>
            <button class="fullscreen-btn" onclick="window.open('http://10.33.102.107:8000/', '_blank');">Open MobSF</button>
            <iframe id="iframe-mobsf" src="http://10.33.102.107:8000/" width="100%" height="600px" style="border: none;"></iframe>
        </div>

        <div id="content-md5decrypt" class="content-section">
            <h2>MD5DECRYPT</h2>
            <button class="fullscreen-btn" onclick="window.open('https://md5decrypt.net/', '_blank');">Open MD5DECRYPT</button>
            <iframe id="iframe-md5decrypt" src="https://md5decrypt.net/" width="100%" height="600px" style="border: none"></iframe>
        </div>
        <div id="content-cyberchef" class="content-section">
            <h2>CYBERCHEF</h2>
            <button class="fullscreen-btn" onclick="window.open('https://gchq.github.io/CyberChef/', '_blank');">Open CYBERCHEF</button>
            <iframe id="iframe-cyberchef" src="https://gchq.github.io/CyberChef/" width="100%" height="600px" style="border: none"></iframe>
        </div>

    </div>
</div>

<script>
    function showContent(contentId) {
        // Hide all content sections
        const sections = document.querySelectorAll('.content-section');
        sections.forEach(section => {
            section.classList.remove('active'); // Remove active class to hide
            section.style.display = "none"; // Hide all sections
        });

        // Show the selected content section
        const activeSection = document.getElementById(contentId);
        if (activeSection) {
            activeSection.classList.add('active'); // Add active class to show
            activeSection.style.display = "block"; // Show the selected section
        }
    }

    function toggleFullscreen(iframeId) {
        const iframe = document.getElementById(iframeId);
        if (iframe.requestFullscreen) {
            iframe.requestFullscreen();
        } else if (iframe.mozRequestFullScreen) { // Firefox
            iframe.mozRequestFullScreen();
        } else if (iframe.webkitRequestFullscreen) { // Chrome, Safari, and Opera
            iframe.webkitRequestFullscreen();
        } else if (iframe.msRequestFullscreen) { // IE/Edge
            iframe.msRequestFullscreen();
        }
    }

    // Optionally, show the first section by default
    document.addEventListener('DOMContentLoaded', function() {
        showContent('content-cyberchef'); // Change this to whichever section should show by default
    });
</script>
@endsection
