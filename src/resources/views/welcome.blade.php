<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>ようこそ</title>
</head>
<body>
    <main>
        @if (Route::has('login'))
            <div class="container mt-0 mb-0">
                <div class="row justify-content-center">
                    @auth
                        <div class="col-md">
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark">Dashboard</a>
                        </div>
                    @else
                        <div class="col-2">
                            <a href="{{ route('login') }}" class="btn btn-outline-dark">ログイン</a>
                        </div>
            
                        @if (Route::has('register'))
                            <div class="col-2">
                                <a href="{{ route('register') }}" class="btn btn-outline-dark">会員登録はこちら</a>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        @endif
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
