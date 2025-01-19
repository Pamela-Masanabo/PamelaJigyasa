<!DOCTYPE html>
<html>
<head>
    <title>Catalog Item</title>
</head>
<body>
    <h1>{{ $catalog->skills }}</h1>
    <p>{{ $catalog->description }}</p>
    <a href="{{ route('catalog.index') }}">Back to Catalog</a>
</body>
</html>
