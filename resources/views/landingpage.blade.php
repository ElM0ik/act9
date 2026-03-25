<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-900 to-indigo-800 min-h-screen text-white">

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-10 py-5 bg-black bg-opacity-30">
        <h1 class="text-2xl font-bold">🌐 MiSitio</h1>
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="bg-white text-blue-900 px-4 py-2 rounded font-semibold hover:bg-blue-100">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="border border-white px-4 py-2 rounded font-semibold hover:bg-white hover:text-blue-900">Registrarse</a>
        </div>
    </nav>

    <!-- Hero -->
    <div class="flex flex-col items-center justify-center text-center mt-32 px-6">
        <h2 class="text-5xl font-extrabold mb-6">Bienvenido a nuestra plataforma</h2>
        <p class="text-xl text-blue-200 max-w-xl mb-10">Esta es la página pública. Regístrate o inicia sesión para acceder al panel exclusivo.</p>
        <a href="{{ route('register') }}" class="bg-yellow-400 text-black font-bold px-8 py-3 rounded-full text-lg hover:bg-yellow-300 transition">
            Comenzar ahora →
        </a>
    </div>

</body>
</html>