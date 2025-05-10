<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Content Manager' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/typography@0.5.9/dist/typography.min.css" rel="stylesheet">
    @vite('resources/css/app.css') {{-- pas dit pad aan als je een andere CSS-bundler gebruikt --}}
</head>
<body class="bg-white text-gray-900 font-sans antialiased">

<main class="min-h-screen py-8 px-4">
    {{ $slot }}
</main>

</body>
</html>
