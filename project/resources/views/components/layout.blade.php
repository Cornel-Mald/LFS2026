@props([
    'title' => 'Muntjes',
])
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }}</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<div class="flex flex-col min-h-screen">

    <body class="bg-gray-700 min-h-screen flex flex-col text-gray-100 font-serif">
        <header class="bg-gray-800 p-4 shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-xl font-bold">{{ $title }}</h1>
                <nav class="space-x-4">
                    <a href="/" class="hover:underline">Welcome</a>
                    <a href="/about" class="hover:underline">About</a>
                    <a href="/contact" class="hover:underline">Contact</a>
                    <a href="/ideas" class="hover:underline">Ideas</a>
                </nav>
            </div>
        </header>
        <main class="flex-grow p-8">
            {{ $slot }}
        </main>
    </body>
    <footer class="pt-4 bg-black text-gray-300 text-center mt-12">
        <p>&copy; 2026 Cornel. All rights reserved.</p>
    </footer>
</div>

</html>
