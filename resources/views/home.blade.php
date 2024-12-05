<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SYPENTEST-TRI</title>
  <link rel="stylesheet" href="index.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body class="bg-gray-100 text-gray-800">
  <!-- Header and Navbar -->
  <header class="bg-white shadow-md p-4 flex justify-between items-center">
    <div class="flex items-center space-x-3">
      <img src="assets/logo.png" alt="SYPENTEST logo" class="h-10" />
      <h1 class="text-2xl font-bold">SYPENTEST</h1>
    </div>
    <nav class="-mx-3 flex flex-1 justify-end">
      @if (Route::has('login'))
        @auth
          <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Dashboard</a>
        @else
          <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Log in</a>
          @if (Route::has('register'))
            <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Register</a>
          @endif
        @endauth
      @endif
    </nav>
  </header>

  <!-- Landing Section -->
  <section class="relative h-screen flex items-center justify-center">
    <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover z-0">
      <source src="assets/bumi.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
    <div class="relative z-10 text-center text-white p-6 bg-black bg-opacity-50 rounded-lg">
      <h2 class="text-4xl font-bold mb-4"><span class="text-yellow-400">SYPENTEST-TRI</span></h2>
      <p class="text-lg mb-6">System Penetration Testing Teknologi Rekayasa Internet</p>
      <div class="flex justify-center space-x-4">
        <a href="register" class="bg-yellow-400 text-black px-4 py-2 rounded hover:bg-yellow-500 transition">Register Now</a>
        <a href="#about-section" class="bg-transparent border border-yellow-400 text-yellow-400 px-4 py-2 rounded hover:bg-yellow-500 hover:text-black transition">About Us</a>
      </div>
    </div>
    <p class="absolute bottom-8 text-white text-xl">Securing Tomorrow, One Test at a Time</p>
  </section>

  <!-- About Section -->
  <section id="about-section" class="py-16 bg-gray-50">
    <div class="text-center mb-8">
      <h2 class="text-3xl font-bold">SYPENTEST-TRI</h2>
    </div>
    <div class="max-w-3xl mx-auto text-center text-lg space-y-4">
      <p>Discover the state-of-the-art in cybersecurity with SYPENTEST, an extensive system penetration testing tool created by Universitas Gadjah Mada's Internet Engineering Technology Program.</p>
      <p>SYPENTEST offers an environment and tools for practicing, experimenting, and improving your abilities in network security, vulnerability testing, and cyber defense strategies.</p>
    </div>
    <div class="relative mt-12">
      <img src="assets/aset2.png" alt="Aset Top Right" class="absolute top-0 right-0 w-32 opacity-75" />
      <img src="assets/aset3.png" alt="Aset Bottom Left" class="absolute bottom-0 left-0 w-32 opacity-75" />
    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto text-center">
      <h3 class="text-4xl font-bold mb-12">WHY CHOOSE US?</h3>
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Integrated Security -->
        <div class="flex flex-col items-center">
          <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mb-4"></div>
          <h4 class="text-xl font-semibold mb-2">Integrated Security</h4>
          <p class="text-center">We ensure that all aspects of your system work together to create a robust security framework.</p>
        </div>

        <!-- Commitment to System Security -->
        <div class="flex flex-col items-center">
          <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mb-4"></div>
          <h4 class="text-xl font-semibold mb-2">Commitment to System Security</h4>
          <p class="text-center">We are dedicated to providing top-quality system security solutions.</p>
        </div>

        <!-- Ongoing Consultation Services -->
        <div class="flex flex-col items-center">
          <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mb-4"></div>
          <h4 class="text-xl font-semibold mb-2">Ongoing Consultation Services</h4>
          <p class="text-center">We are committed to providing long-term support.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-8">
    <div class="max-w-6xl mx-auto flex justify-between items-start space-y-4 flex-wrap">
      <div class="flex items-center space-x-3">
        <img src="assets/aset4.png" alt="SYPENTEST Logo" class="h-12" />
        <div>
          <h3 class="text-xl font-bold">System Penetration Testing</h3>
          <p>Teknologi Rekayasa Internet</p>
        </div>
      </div>
      <ul class="space-y-2">
        <li class="flex items-center space-x-2">
          <img src="assets/email-icon.png" alt="Email Icon" class="h-5" />
          <a href="mailto:sypentesttri@gmail.com" class="hover:underline">sypentesttri@gmail.com</a>
        </li>
        <li class="flex items-center space-x-2">
          <img src="assets/location-icon.png" alt="Location Icon" class="h-5" />
          <span>Kampus Jl. Yacaranda Sekip Unit IV, Yogyakarta 55281</span>
        </li>
        <li class="flex items-center space-x-2">
          <img src="assets/phone-icon.png" alt="Phone Icon" class="h-5" />
          <span>0000.0000.0000</span>
        </li>
      </ul>
    </div>
    <div class="text-center text-sm mt-4">
      <p>Copyright 2024 © Sypentest. All Rights Reserved.</p>
    </div>
  </footer>
  
  <script src="script.js"></script>
</body>
</html>
