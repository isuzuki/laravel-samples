<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Region Prefectures</title>
</head>
<body>
    @foreach ($regions as $region)
        <p>{{ $region->name }}</p>
        @foreach ($region->prefectures as $prefecture)
            @foreach ($prefecture->items as $item)
                <p>{{ $item->pivot->title }}</p>
            @endforeach
        @endforeach
    @endforeach
</body>
</html>
