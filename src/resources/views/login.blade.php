<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="/cache/css/base.css">
</head>
<body>
    <div class="login-container">
        <h2>ログイン</h2>
        @foreach ($errors->all() as $error)
            {{$error}}<br>
        @endforeach

        <form action="{{url('login/check')}}" method="post">
            @csrf
            <label for="username">ユーザー名</label>
            <input type="text" id="username" name="username">
            
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password">
            
            <button type="submit">ログイン</button>
        </form>
    </div>
</body>
</html>
