<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <nav class="bg-blue-600 text-white p-4">
        <a href="{{ url('/') }}" class="mr-4">Inicio</a>
        <a href="{{ url('/category') }}" class="mr-4">Categorías</a>
        <a href="{{ url('/login') }}">Login</a>
    </nav>

    <div class="p-6">
        @yield('content')
    </div>

</body>
</html>