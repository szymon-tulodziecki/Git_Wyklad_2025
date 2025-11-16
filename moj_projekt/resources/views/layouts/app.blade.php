<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kalkulator IP')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    @include('components.header')
    
    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>
    
    @include('components.footer')
</body>
</html>
