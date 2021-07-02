<x-login-register-layout title="ログイン">
    <div class="container">
        <div class="d-flex justify-content-center mt-3 mb-3">
            <a href="">
                <x-application-logo />
            </a>
        </div>
        <div class="d-flex justify-content-center">
            <div class="card w-50">
                <div class="card-body">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <!-- Eメールアドレス -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-3 form-label">Eメールアドレス</label>
                            <div class="col-md-9">
                                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                            </div>
                        </div>
                        <!-- パスワード -->
                        <div class="row mb-3">
                            <label for="password" class="col-md-3 form-label">パスワード</label>
                            <div class="col-md-9">
                                <x-input id="password" class="form-control"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                            </div>
                        </div>
                        <!-- パスワード確認用 -->
                        <div class="row mb-3">
                            <label for="password_confirmation" class="col-md-3 form-label">パスワード（確認）</label>
                            <div class="col-md-9">
                                <x-input id="password_confirmation" class="form-control"
                                            type="password"
                                            name="password_confirmation" required />
                            </div>
                        </div>
                        <!-- パスワードを記憶する -->
                        <div class="form-check row mb-3 pe-0 me-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember_me">
                                <label for="remember_me" class="form-check-label" style="width: 8rem">パスワードを記憶する</label>
                            </div>
                        </div>
                        
                        <div class="d-flex">
                            <div class="me-auto">
                                <a href="{{ route('password.request') }}" class="btn btn-light">パスワードをお忘れの方はこちら</a>
                            </div>
                            <div class="ms-auto">
                                <button type="submit" class="btn btn-dark">ログイン</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-login-register-layout>


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
