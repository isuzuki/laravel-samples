<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Site Items</title>
</head>
<body>
    @foreach ($items as $item)
        {{ $item->name }}
    @endforeach
</body>
</html>
