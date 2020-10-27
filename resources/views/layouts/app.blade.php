<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>

<body>
    <main class="container">
        @yield("content")
    </main>
</body>

</html>
