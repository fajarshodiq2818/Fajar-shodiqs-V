<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>
            Web Page
        </title>
        <script src="https://cdn.tailwindcss.com">
        </script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet"/>
        <style>
        body {
                    font-family: 'Inter', sans-serif;
                }
        </style>
    </head>
    <body class="bg-gray-900 text-white">
        <header class="bg-white text-black py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="text-2xl font-bold">
            Fajar_official
            </div>
            <!-- <nav class="space-x-8">
                <a class="hover:text-gray-500" href="#">
                    Website
                </a>
                <a class="hover:text-gray-500" href="#">
                    Toko Online
                </a>
                <a class="hover:text-gray-500" href="#">
                    Template
                </a>
                <a class="hover:text-gray-500" href="#">
                    Harga
                </a>
                <a class="hover:text-gray-500" href="#">
                    Semua produk
                </a>
            </nav> -->
            <div class="flex items-center space-x-4">
                <a class="hover:text-gray-500" href="#">
                    ID
                </a>
                <a class="hover:text-gray-500" href="#">
                    Login
                </a>
                <button class="border border-black px-4 py-2 rounded-full hover:bg-gray-200">
                    DAFTAR
                </button>
            </div>
        </div>
        </header>
        <main class="flex flex-col items-center text-center py-20 px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Website ini dibuat dengan sistem CRUD dengan framework laravel 11
            </h1>
            <p class="text-lg md:text-xl mb-8">
                Fajar Shodiq
            </p>
            <a href="/users">
                <button class="bg-pink-500 text-white px-6 py-3 rounded-full text-lg font-bold hover:bg-pink-600" href="/users">
                    MASUK KE HALAMAN CRUD
                </button>
            </a>
            <div class="relative mt-16">
                <img alt="Laptop with website preview" class="w-full max-w-4xl mx-auto" height="400" src="image/engko'.jpg" width="800"/>
                <div class="absolute left-0 top-1/2 transform -translate-y-1/2 space-y-4">
                    <a class="block text-white hover:text-gray-400" href="#">
                        <i class="fab fa-amazon">
                        </i>
                    </a>
                    <a class="block text-white hover:text-gray-400" href="#">
                        <i class="fab fa-instagram">
                        </i>
                    </a>
                    <a class="block text-white hover:text-gray-400" href="#">
                        <i class="fab fa-facebook">
                        </i>
                    </a>
                    <a class="block text-white hover:text-gray-400" href="#">
                        <i class="fab fa-google">
                        </i>
                    </a>
                </div>
                <div class="absolute right-0 top-1/2 transform -translate-y-1/2 space-y-4">
                    <a class="block text-white hover:text-gray-400" href="#">
                        <i class="fas fa-palette">
                        </i>
                    </a>
                    <a class="block text-white hover:text-gray-400" href="#">
                        <i class="fas fa-envelope">
                        </i>
                    </a>
                    <a class="block text-white hover:text-gray-400" href="#">
                        <i class="fas fa-map-marker-alt">
                        </i>
                    </a>
                </div>
            </div>
        </main>
    </body>
</html>
