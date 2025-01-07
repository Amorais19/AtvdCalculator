<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora de Juros</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="imagem">
            <img class="mb-4 img" src="{{ asset('storage/imagem/animal.jpeg') }}" alt="" width="90" height="90">
        </div>

        @hasSection('content')
            @yield('content')
        @endif
    </div>
</body>
</html>