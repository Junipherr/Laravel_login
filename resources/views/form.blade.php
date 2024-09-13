<x-htm-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container mt-5 col-7">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" align="center">
                        <h1>Login</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="container">
                                <div class="mt-4 form-group">
                                    <x-inputs :value="__('Email')" type="email" name="email"
                                        placeholder="Enter your email" value="{{ old('email') }}" />
                                </div>
                                <div class="mt-4 form-group">
                                    <x-inputs :value="__('Password')" type="password" name="password"
                                        placeholder="Enter your password" value="{{ old('password') }}" required
                                        autocomplete="current-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <x-button>
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-htm-layout>