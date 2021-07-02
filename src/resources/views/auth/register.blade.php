<x-login-register-layout title="会員登録">
    <div class="container">
        <div class="d-flex justify-content-center mt-3 mb-3">
            <a href="">
                <x-application-logo />
            </a>
        </div>
        <div class="d-flex justify-content-center">
            <div class="card w-50">
                <div class="card-body">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <!-- ユーザー名 -->
                        <div class="row mb-3">
                            <label for="user_name" class="col-md-3 col-form-label">ユーザー名</label>
                            <div class="col-md-9">
                                <x-input id="user_name" class="form-control" type="text" name="user_name" :value="old('user_name')" required autofocus />
                            </div>
                        </div>
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
                        <div class="d-flex">
                            <div class="me-auto">
                                <a href="{{ route('login') }}" class="btn btn-light">会員登録済みの方はこちら</a>
                            </div>
                            <div class="ms-auto">
                                <button type="submit" class="btn btn-dark">登録する</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-login-register-layout>
