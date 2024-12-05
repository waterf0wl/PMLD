@extends('layouts.app')

@section('content')
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Arial", sans-serif;
            background-color: #f0f8ff;
            color: #333;
        }

        header {
            background-color: #0e1e3a;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-size: 18px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* About Section */
        .about {
            background-color: white;
            padding: 50px;
            text-align: left;
            margin: auto;
            position: relative;
        }

        .about h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #0e1e3a;
        }

        .about p {
            font-size: 18px;
            color: #666;
        }

        /* System Architecture Section */
        .architecture {
            background-color: #e9f6ff;
            padding: 50px;
            margin: auto;
            border-radius: 10px;
        }

        .architecture h2 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: left;
        }

        .architecture-content {
            display: contents;
            justify-content: space-between;
            align-items: center;
        }

        .architecture img {
            max-width: 45%;
            height: auto;
        }

        .architecture p {
            max-width: 45%;
            font-size: 16px;
            color: #666;
            text-align: left;
        }

        /* Roles Section (Attacker, Defender, Sandbox) */
        .roles {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .roles h2 {
            font-size: 26px;
            text-align: center;
            margin-bottom: 40px;
        }

        .role-cards {
            display: flex;
            justify-content: space-around;
            gap: 30px;
        }

        .role-item {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 30%;
        }

        .role-item img {
            height: 80px;
            margin-bottom: 20px;
        }
    </style>

    <!-- About Section -->
    <section class="about bg-white py-16 px-8 text-left mx-auto">
    <h1 class="text-4xl font-bold text-blue-900 mb-4">About Sypentest</h1>
    <p class="text-lg text-gray-600">
        Sypentest is a web application designed to simplify the process of network security analysis, particularly penetration testing. This application enables users to perform various types of tests on network systems to identify and evaluate potential vulnerabilities.
    </p>
    <p class="text-lg text-gray-600">
        Sypentest helps security teams efficiently manage network testing activities. Key features include systematic analysis of security threats, automated tools for identifying vulnerabilities, and comprehensive reports of test results. The ultimate goal is to ensure that the tested network meets optimal security standards and is protected from cyber-attacks that could potentially damage data or disrupt network operations.
    </p>
</section>


    <!-- System Architecture Section -->
    <section class="architecture bg-blue-100 py-16 px-8 rounded-lg mx-auto">
        <h2 class="text-3xl font-bold mb-6">System Architecture</h2>
        <div class="flex justify-between items-center">
            <img src="{{ asset('assets/topologi1.png') }}" alt="System Architecture Diagram" class="w-1/2" />
            <p class="text-lg text-gray-600 w-1/2 ml-8">
                The user connects to the UGM network via UGM's wifi or can connect
                through OpenVPN. Being connected to the UGM network allows the user to
                access the server at 10.33.102.231 where they can create an account or
                login. Users can engage in various Cyber Security simulations
                (Attacker and Defender) utilizing provided and categorized tools. They
                can practice using Mutillidae and DVWA on the lab VPS embedded in the
                Sypentest VPS.
            </p>
        </div>
    </section>

    <!-- Attacker, Defender, Sandbox Section -->
    <section class="roles py-16 px-8 max-w-screen-xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-10">Understanding Attacker, Defender, and Sandbox in Cyber Security</h2>
        <div class="flex justify-around gap-8">
            <div class="role-item text-center bg-white p-8 rounded-lg shadow-lg w-1/3">
                <img src="{{ asset('assets/AttackerLogo.png') }}" alt="Attacker" class="h-20 mx-auto mb-4" />
                <h3 class="text-xl font-semibold mb-2">Attacker</h3>
                <p>Learn the tools and methods used by attackers.</p>
            </div>
            <div class="role-item text-center bg-white p-8 rounded-lg shadow-lg w-1/3">
                <img src="{{ asset('assets/DefenderLogo.png') }}" alt="Defender" class="h-20 mx-auto mb-4" />
                <h3 class="text-xl font-semibold mb-2">Defender</h3>
                <p>Understand the defender's strategies in mitigating attacks.</p>
            </div>
            <div class="role-item text-center bg-white p-8 rounded-lg shadow-lg w-1/3">
                <img src="{{ asset('assets/DefenderLogo.png') }}" alt="Sandbox" class="h-20 mx-auto mb-4" />
                <h3 class="text-xl font-semibold mb-2">Sandbox</h3>
                <p>Explore the sandbox environment for safe testing.</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="p-6 bg-white mt-4">
        <div class="footer-content text-center">
            <p class="text-gray-600">
                &copy; 2024 System Penetration Testing - Teknologi Rekayasa Internet
            </p>
            <address class="mt-2">
                <p>Email: <a href="mailto:sypentesttri@gmail.com" class="text-blue-500">sypentesttri@gmail.com</a></p>
                <p>Phone: 0000.0000.0000</p>
            </address>
        </div>
    </footer>

    <script src="script.js"></script>
@endsection
