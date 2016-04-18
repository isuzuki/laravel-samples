<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>input</title>
</head>
<body>
    <p>Please your name input</p>
    <form action="{{ route('prg.submit') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="text" name="name">
        <input type="submit">
    </form>
</body>
</html>
