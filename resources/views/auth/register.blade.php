<style>
    /* Container for the whole layout */
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        background-color: #e8edf7;
        font-family: Arial, sans-serif;
    }

    /* Wrapper to split the left and right sections */
    .container {
        display: flex;
        width: 100%;
        max-width: 100%; /* Fullscreen width */
        height: 100vh; /* Fullscreen height */
        background-color: #ffffff;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    /* Left panel */
    .left-panel {
        background-color: #3949ab;
        color: #ffffff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 2rem;
        width: 40%;
        text-align: center;
    }

    .left-panel h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    /* Right panel (Form) */
    .form-container {
        background-color: #e8edf7;
        padding: 2rem;
        width: 60%;
        overflow-y: auto; /* Allow scrolling if content overflows */
    }

    /* Title and subtitle */
    .form-container h2 {
        font-size: 1.8rem;
        color: #1a237e;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .form-container p {
        color: #444;
        font-size: 1rem;
        margin-bottom: 1.5rem;
    }

    /* Form styles */
    form {
        display: flex;
        flex-direction: column;
    }

    form label {
        font-size: 1rem;
        color: #333;
        font-weight: 500;
        margin-bottom: 0.3rem;
    }

    form input[type="text"],
    form input[type="email"],
    form input[type="password"] {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #b0bec5;
        border-radius: 4px;
        margin-bottom: 1rem;
        font-size: 1rem;
        box-sizing: border-box;
    }

    /* Role dropdown */
    .role-container {
        margin-bottom: 1.5rem;
    }

    .role-container label {
        font-size: 1rem;
        font-weight: normal;
        color: #333;
        margin-right: 1rem;
    }

    /* Checkbox container */
    .checkbox-container {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        font-size: 1rem;
        color: #333;
    }

    .checkbox-container input[type="checkbox"] {
        width: auto;
        margin-right: 0.5rem;
    }

    /* Button styles */
    .btn-submit,
    .btn-back {
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
    }

    .btn-submit {
        background-color: #3949ab;
        color: #ffffff;
        width: 100%;
        margin-top: 1rem;
        text-align: center;
    }

    .btn-submit:hover {
        background-color: #303f9f;
    }

    .btn-back {
        background-color: #e0e0e0;
        color: #333;
        text-align: center;
        margin-right: auto;
    }

    .btn-back:hover {
        background-color: #d5d5d5;
    }

    /* Disclaimer or additional info box */
    .disclaimer-box {
        padding: 1rem;
        background-color: #f5f5f5;
        border: 1px solid #e0e0e0;
        border-radius: 4px;
        font-size: 0.9rem;
        color: #333;
        margin-bottom: 1.5rem;
    }
</style>

<!-- HTML structure based on your layout -->
<div class="container">
    <!-- Left panel content -->
    <div class="left-panel">
        <h1>Explore Weaknesses, Strengthen Security</h1>
        <p>Penetration Testing Made Simple</p>
    </div>

    <!-- Right panel (Form) -->
    <div class="form-container">
        <h2>Selamat Datang di Sipentest - TRI</h2>
        <p>Silakan isi formulir di bawah ini untuk mendaftar akun di situs Sipentest - TRI.</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Form fields -->
            <div>
                <label for="name">Nama*</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div>
                <label for="institution">Institusi Pendidikan*</label>
                <input type="text" id="institution" name="institution" required>
            </div>

            <div>
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="password">Password*</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div>
                <label for="password_confirmation">Konfirmasi Password*</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <!-- Role -->
            <div class="mt-4">
                <label for="roles">Role</label>
                <select id="roles" name="roles" class="block mt-1 w-full" required>
                    <option value="attacker">Attacker</option>
                    <option value="defender">Defender</option>
                </select>
            </div>

            <!-- Checkbox -->
            <div class="disclaimer-box">
                Apakah Anda sudah memastikan bahwa semua data diri yang Anda masukkan saat proses pembuatan akun di website Sipentest - TRI sudah benar dan sesuai? Mohon periksa kembali agar tidak ada kesalahan yang dapat memengaruhi kevalidan akun Anda.
                <div class="checkbox-container">
                    <input type="checkbox" id="confirm_data" name="confirm_data" required>
                    <label for="confirm_data">Ya, semua data diri sudah benar.</label>
                </div>
            </div>

            <!-- Buttons -->
            <button type="button" class="btn-back">Kembali</button>
            <button type="submit" class="btn-submit">Kirim</button>
        </form>
    </div>
</div>
