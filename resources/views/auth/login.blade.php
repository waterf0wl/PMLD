
    <!-- Embedded CSS -->
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        html, body {
            height: 100%;
            width: 100%;
            background-color: #f2f5ff;
            color: #222;
            overflow: hidden; 
        }

        /* Fullscreen Login Container */
        .login-container {
            display: flex;
            height: 100vh;
            width: 100vw;
        }

        .left-section {
            background-color: #2f3c85;
            color: white;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .left-section h2 {
            font-size: 24px;
            line-height: 1.5;
            text-align: center;
        }

        .right-section {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right-section h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .right-section p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 14px;
            color: #222;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            padding: 10px;
            font-size: 14px;
            border: 2px solid #1d1d70;
            border-radius: 5px;
            width: 100%;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
        }

        .forgot-password {
            color: #ff0000;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }



        .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .create-account-link {
            color: #ff0000;
            text-decoration: none;
        }

        .create-account-link:hover {
            text-decoration: underline;
        }

        /* Buttons */
        .btn {
            background-color: #1d1d70;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        .btn:hover {
            background-color: #141458;
        }
    </style>

    <!-- Login Container -->
    <div class="login-container">
        
        <!-- Left Section -->
        <div class="left-section">
            <h2>Explore Weaknesses, Strengthen Security: Penetration Testing Made Simple</h2>
        </div>

        <!-- Right Section -->
        <div class="right-section">
            <h2>Login</h2>
            <p>Silakan isi formulir di bawah ini untuk masuk akun Anda di situs Sipentest - TRI.</p>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Field -->
                <label for="email">Email<span class="required">*</span></label>
                <input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" />

                <!-- Password Field -->
                <label for="password">Password<span class="required">*</span></label>
                <input type="password" id="password" name="password" required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" />

                <!-- Remember Me and Forgot Password -->
                <div class="options">
                    <label>
                        <input type="checkbox" name="remember"> Ingat saya
                    </label>
                    <!-- @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-password">Lupa Password?</a>
                    @endif -->
                </div>


                <!-- Login Button -->
                <button type="submit" class="btn">Login</button>

                <!-- Register Link -->
                <p class="register-link">Belum punya akun? 
                    <a href="{{ route('register') }}" class="create-account-link">Buat akun disini</a>
                </p>
            </form>
        </div>
    </div>

