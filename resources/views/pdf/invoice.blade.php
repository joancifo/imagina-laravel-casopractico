<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h1>Factura del curso {{ $curso->getTranslation('nombre', 'es') }}</h1>
<h2>{{ $curso->estadoTexto }}</h2>
</body>
</html>
