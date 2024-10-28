<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="/cache/css/base.css">
</head>
<body>
    <div class="login-container">
        <h2>HOME</h2>
        <label>ユーザー名</label>
        {{$username}}<br><br>

        <a href="{{url('logout')}}">ログアウト</a>
    </div>
</body>
</html>
