<x-htm-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container mt-5 col-7">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" align="center">
                        <h1>Register</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="container">
                                <!-- Name Input -->
                                <div class="mt-4 form-group">
                                    <x-inputs :value="__('Name')" type="text" name="name"
                                        placeholder="Enter your full name" value="{{ old('name') }}" required />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Input -->
                                <div class="mt-4 form-group">
                                    <x-inputs :value="__('Email')" type="email" name="email"
                                        placeholder="Enter your email" value="{{ old('email') }}" required />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password Input -->
                                <div class="mt-4 form-group">
                                    <x-inputs :value="__('Password')" type="password" name="password"
                                        placeholder="Enter your password" value="{{ old('password') }}" required />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Password Confirmation Input -->
                                <div class="mt-4 form-group">
                                    <x-inputs :value="__('Confirm Password')" type="password" name="password_confirmation"
                                        placeholder="Confirm your password" required />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <!-- Submit Button -->
                                <x-button>
                                    {{ __('Register') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-htm-layout>
