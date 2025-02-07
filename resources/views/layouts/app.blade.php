<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name',    'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-72 bg-hijau text-black min-h-screen p-4">
            <h2 class="text-3xl font-inter font-bold">Admin Panel</h2>
            <ul class="text-2xl mt-16 space-y-4">
                <li>
                    <a href="#" class="flex items-center space-x-2 font-inter text-xl p-2 hover:text-biru">
                        <i class="opacity-75 fas fa-home"></i>
                        <span>Beranda</span>
                    </a>
                </li>
                <hr class="border-hitamH ">
                <li>
                    <a href="#" class="flex items-center space-x-2 font-inter text-xl p-2 hover:text-biru">
                        <i class="opacity-75 ms-1 fa fa-user"></i>
                        <span>Profil</span>
                    </a>
                </li>
                <hr class="border-hitamH ">
                <li>
                    <a href="#" class="flex items-center space-x-2 font-inter text-xl p-2 hover:text-biru">
                        <i class="opacity-75 fas fa-map-marked-alt"></i>
                        <span>Wisata</span>
                    </a>
                </li>
                <hr class="border-hitamH ">
                <li>
                    <a href="#" class="flex items-center space-x-3 font-inter text-xl p-2 hover:text-biru">
                        <i class="opacity-75 ms-1 fas fa-building"></i>
                        <span>Kantor</span>
                    </a>
                </li>
                <hr class="border-hitamH ">
                <li>
                    <a href="#" class="flex items-center space-x-2 font-inter text-xl p-2 hover:text-biru">
                        <i class="opacity-75 fas fa-images"></i>
                        <span>Galeri</span>
                    </a>
                </li>
                <hr class="border-hitamH ">
                <li>
                    <a href="#"
                        class="flex items-center space-x-2 font-inter text-xl p-2 hover:text-biru active:text-black active:font-bold">
                        <i class="opacity-75 fas fa-phone"></i>
                        <span>Kontak</span>
                    </a>
                </li>
                <hr class="border-hitamH ">
                <div class="pt-10">
                    <p class="text-lg text-hitamK hover:text-black transition-colors duration-300">KKNT 113 UNHAS
                        © 2024
                        Kel. Malino, Kec, Tinggimoncong, Kab. Gowa
                    <p>
                </div>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 bg-hitam min-h-screen">
            <x-banner />
            @livewire('navigation-menu')

            <main>
                <div class="container mx-auto">
                    <div class="mt-10 m-10 text-white">
                        <h1 class="text-4xl font-sora font-bold text-transparent text-white bg-clip-text leading-tight">
                            Beranda
                        </h1>
                        <div class="flex items-center gap-2">
                            <div class="h-1 w-32 rounded-lg bg-gradient-to-r from-hijau to-biru"></div>
                            /<span class="text-hijau font-bold">Gambar</span>
                        </div>
                    </div>

                    <div class="mt-10 m-10 mb-4">
                        <label class="text-white">Pencarian:</label>
                        <input type="text" class="bg-hitamKTK text-white rounded p-2 ml-2" placeholder="Beranda 1">
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border border-gray-700">
                            <thead>
                                <tr class="bg-hitamKTK">
                                    <th class="p-2 border border-gray-700">NO</th>
                                    <th class="p-2 border border-gray-700">FOTO</th>
                                    <th class="p-2 border border-gray-700">NAMA</th>
                                    <th class="p-2 border border-gray-700">DESKRIPSI</th>
                                    <th class="p-2 border border-gray-700">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data contoh -->
                                <tr class="bg-gray-hitamKTK">
                                    <td class="p-2 border border-gray-700 text-center">1</td>
                                    <td class="p-2 border border-gray-700 text-center">
                                        <div class="w-10 h-10 bg-gray-300 rounded-full mx-auto"></div>
                                    </td>
                                    <td class="p-2 border border-gray-700">Foto Beranda 1</td>
                                    <td class="p-2 border border-gray-700">Foto yang berada dalam lingkaran</td>
                                    <td class="p-2 border border-gray-700 flex space-x-2 justify-center">
                                        <button class="bg-green-500 text-white px-3 py-1 rounded flex items-center"><i
                                                class="fa fa-edit mr-1"></i>Edit</button>
                                        <button class="bg-red-500 text-white px-3 py-1 rounded flex items-center"><i
                                                class="fa fa-trash mr-1"></i>Delete</button>
                                        <button class="bg-blue-500 text-white px-3 py-1 rounded flex items-center"><i
                                                class="fa fa-upload mr-1"></i>Import</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 border border-gray-600 rounded">&lt;</button>
                            <button class="px-3 py-1 border border-gray-600 bg-blue-500 text-white rounded">1</button>
                            <button class="px-3 py-1 border border-gray-600 rounded">2</button>
                            <button class="px-3 py-1 border border-gray-600 rounded">3</button>
                            <button class="px-3 py-1 border border-gray-600 rounded">4</button>
                            <button class="px-3 py-1 border border-gray-600 rounded">5</button>
                            <button class="px-3 py-1 border border-gray-600 rounded">&gt;</button>
                        </div>
                    </div>
                    <div>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded flex items-center">
                            <i class="fa fa-plus mr-1"></i>Tambah gambar
                        </button>
                    </div>
                </div>
            </main>
        </div>
    </div>

    @livewireScripts
</body>

</html>