<x-guest-layout>

<div class="login-container">

    <div class="login-card">

        <div class="login-header">

            <div class="logo-text">
                SIWAK
            </div>

            <h2>
                Login Admin
            </h2>

            <p>
                Sistem Informasi Wisata & UMKM Kebumen
            </p>

        </div>


        <!-- Session Status -->
        <x-auth-session-status 
            class="mb-4" 
            :status="session('status')" 
        />


        <form method="POST" action="{{ route('login') }}">
            @csrf


            <!-- Email / Username -->
            <div class="form-group">

                <x-input-label 
                    for="email" 
                    :value="__('Email')" 
                />

                <x-text-input 
                    id="email"
                    class="login-input"
                    type="email"
                    name="email"
                    :value="old('email')"
                    placeholder="Masukkan email"
                    required
                    autofocus
                />

                <x-input-error 
                    :messages="$errors->get('email')" 
                    class="mt-2"
                />

            </div>



            <!-- Password -->
            <div class="form-group">

                <x-input-label 
                    for="password" 
                    :value="__('Password')" 
                />


                <x-text-input 
                    id="password"
                    class="login-input"
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                />


                <x-input-error 
                    :messages="$errors->get('password')" 
                    class="mt-2"
                />

            </div>



            <!-- Remember -->
            <div class="remember-box">

                <label>

                    <input 
                        type="checkbox"
                        name="remember"
                    >

                    <span>
                        Ingat saya
                    </span>

                </label>

            </div>



            <!-- Button -->
            <div class="login-button">

                <x-primary-button>
                    Login
                </x-primary-button>

            </div>


        </form>


    </div>

</div>

</x-guest-layout>