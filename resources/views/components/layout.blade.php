<!DOCTYPE html>
<html lang="fr" data-theme="aqua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/favicon.png">
    <title>Port Russell</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col">
    <header class="flex justify-center">
        <x-nav />
    </header>

    <main
        class="flex flex-1 justify-center items-center bg-cover bg-center bg-white/80 bg-blend-lighten"
        style="background-image: url('/assets/img/background.png'); background-attachment: fixed;"
    >
        {{ $slot }}
    </main>

    <footer>
        <x-footer />
    </footer>
    
</body>
</html>