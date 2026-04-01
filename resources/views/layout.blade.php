<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'My Laravel App' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main class="page-shell">
        <h1 class="page-heading">{{ $pageHeading ?? $pageTitle ?? 'Page' }}</h1>
        @yield('content')
    </main>
</body>
</html>
