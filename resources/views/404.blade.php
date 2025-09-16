<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página não encontrada</title>
    <script>
        // Redireciona após 3 segundos
        setTimeout(() => {
            window.location.href = "{{ url('principal') }}";
        }, 3000);
    </script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-red-600">404</h1>
        <p class="mt-4 text-lg text-gray-700">Ops! Página não encontrada.</p>
        <p class="mt-2 text-sm text-gray-500">Você será redirecionado para a página inicial em alguns segundos...</p>
        <a href="{{ route('principal') }}" 
           class="mt-6 inline-block bg-red-800 text-white px-6 py-2 rounded-lg shadow hover:bg-red-800 transition">
            Ir para Home agora
        </a>
    </div>
</body>
</html>
