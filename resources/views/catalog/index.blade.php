<!DOCTYPE html>
<html>
<head>
    <title>Catalog</title>
</head>
<body>
    <h1>Catalog</h1>
    <ul>
        @foreach ($catalogs as $catalog)
            <li>
                <a href="{{ route('catalog.show', $catalog->id) }}">{{ $catalog->skills }}</a>
                <p>{{ $catalog->description }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
