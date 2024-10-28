<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/icon/logo-vertical.png') }}">
    <title>Autoagra</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="scroll-smooth">
    @include('frontend.components.navbar')
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>