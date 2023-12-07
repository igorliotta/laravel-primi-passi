<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <ul>
        <li>
            <a href="{{ route('introduzione') }}">INTRO</a>
        </li>
        <li>
            <a href="{{ route('chi-siamo') }}">CHI SIAMO</a>
        </li>
        <li>
            <a href="{{ route('shop') }}">SHOP</a>
        </li>
        <li>
            <a href="{{ route('social') }}">SOCIAL</a>
        </li>
    </ul>
</body>
</html>