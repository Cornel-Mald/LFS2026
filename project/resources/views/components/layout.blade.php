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
<body class="bg-gray-700 min-h-screen flex flex-col text-gray-100 font-serif">
        <div class="flex flex-col min-h-screen">
        <header class="bg-gray-800 p-4 shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-xl font-bold">{{ $title }}</h1>
                <nav class="space-x-4">
                    <a href="/" class="hover:underline {{ request()->is('/') ? 'nav-active' : 'nav-link' }}">Welcome</a>
                    <a href="/about" class="hover:underline {{ request()->is('about*') ? 'nav-active' : 'nav-link' }}">About</a>
                    <a href="/contact" class="hover:underline {{ request()->is('contact*') ? 'nav-active' : 'nav-link' }}">Contact</a>
                    <a href="/ideas" class="hover:underline {{ request()->is('ideas*') ? 'nav-active' : 'nav-link' }}">Ideas</a>
                </nav>
            </div>
        </header>
        <main class="flex-grow p-8">
            {{ $slot }}
        </main>
        <footer class="pt-4 bg-black text-gray-300 text-center mt-12">
            <p>&copy; 2026 Cornel. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>
