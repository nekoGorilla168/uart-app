<x-base title="ホーム">
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
    <x-slot name="header">
        <x-header></x-header>
    </x-slot>
    @endif

    <div class="container">
        <div class="d-flex justify-content-center">
            <a href="{{ Route('post') }}" class="btn btn-primary">投稿テスト</a>
        </div>
    </div>
    <!-- 検索 -->
    <section>
        <div class="container">
            <div class="d-flex">
                {{-- <form action="" method="get"> --}}
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="検索したいワードを入力">
                        <button class="btn btn-outline-dark">検索</button>
                    </div>
                {{-- </form> --}}
            </div>
        </div>
    </section>

    <!-- 投稿一覧 -->
    <section>
        <div>
        </div>
    </section>

    {{-- <div class="card mx-auto" style="width: 30rem">
        <img src="" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text">wwwwwwwwwwwwwwwwwwwwwwwwwwwww</p>
        </div>
    </div> --}}
    {{-- <div class="position-relative">
        <div class="position-absolute bottom-0 end-0">
            <a class="btn btn-dark rounded-circle" href="">+</a>
        </div>
    </div> --}}
</x-base>