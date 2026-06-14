@props([
    'title' => 'Muntjes',
])
<!doctype html>
<html lang="en" data-theme="forest">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }}</title>
    @vite('resources/css/app.css')
    {{-- straight cdn tailwind & daisy ui. --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- for the themes --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="flex flex-col min-h-screen">
        <x-nav />
        <main class="max-w-3xl mx-auto flex-grow p-8">
            {{ $slot }}
        </main>
        <footer class="pt-4 bg-black text-gray-300 text-center mt-12">
            <p>&copy; 2026 Cornel. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>
