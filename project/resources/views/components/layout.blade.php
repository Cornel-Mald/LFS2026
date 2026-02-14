@props([
'title' => 'Muntjes'
])
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> {{ $title }}</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <style>
            nav {
                background-color: #f8f9fa;
                padding: 1rem;
            }
            nav a {
                margin-right: 1rem;
                text-decoration: none;
                color: #333;
            }
             nav a:hover {
                text-decoration: underline;
            }

            .max-w-400 {
                max-width: 400px;
            }
        
            .card { 
		        border: 1px solid #ccc;
		        padding: 16px;
		        border-radius: 8px;
            }


        </style>
    </head>
    <body class="bg-gray-700 p-6 max-w-xl">
        <nav>
            <a href="/">Welcome</a>
            <a href="/about">About us</a>
            <a href="/contact">Contact</a>
            <a href="/ideas">Ideas</a>
        </nav>
        {{ $slot }}
    </body>
</html>