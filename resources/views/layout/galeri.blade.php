@extends('app')

@section('title', 'galeri')

@section('content')

<section>

    <div class="grid grid-cols-2 m-20">
        <div class="text-white">
            <h1
                class="text-5xl font-sora font-bold text-transparent bg-gradient-to-r from-hijau to-biru bg-clip-text leading-tight">
                Our Gallery M </h1>
            <p class="mt-10 text-xl  "> M??, M Adalah <span class="text-hijau font-bold">Malino</span>.</p>
            <p class="text-xl mt-3 font-sora text-putihT ml-10">
                Selamat datang di M semua tantang kami ada disini !!
                <br>
                Enjoy our memories together in Malino.
            </p> <!-- edit ini -->
        </div>
        <div class="flex items-start w-full">
            <div class="bg-hitamK h-64 w-1/2 rounded-lg shadow-lg transform rotate-1 relative border-4 border-transparent border-t-4 border-r-4 border-b-4 border-l-4"
                style="border-image: linear-gradient(to right, #4CA9FF,  #3BF686) 1;">
                <img src="images/kotak1.jpeg" alt="Deskripsi Profil Our"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg" />
            </div>
        </div>
        <div class="flex flex-row-reverse mx-40">
            <div class="m-5 h-2 w-40 rounded-lg bg-gradient-to-r from-hijau to-biru -mt-10 translate-x-16">
            </div>
            <!-- edit ini jika p dari selamat datang d tambahkakn -->
        </div>
    </div>

    <div class="bg-hitam">

        <!-- Container Utama -->
        <div class="relative w-full max-w-[1440px] mx-auto h-[600px] bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <!-- Gambar-Gambar dalam slider -->
            <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                <!-- Slide 1 -->
                <div
                    class=" relative flex-shrink-0 w-full h-[600px] bg-gradient-to-r from-red-500 to-gray-500 flex items-center justify-center text-white text-2xl font-bold">
                    Gambar 1
                    <img src="images/gambar6.jpg" alt="Gambar 1"
                        class="absolute top-0 left-0 w-full h-full object-cover" /> <!-- Masukkan Gambar -->
                    <div class="absolute top-10 left-20 text-white text-xl font-medium">
                        KKN MALINO FULL SENYUM<BR>
                        --------------
                    </div>
                    <div class="absolute bottom-40 left-20 text-white text-xl font-medium">
                        KEREEN TOH!! NGERIKO | D'QDIKO JANGAN<BR>
                        DI SCROOL KE BAWAH APA LAGI KE SAMPINg<BR>
                        ---------------
                    </div>
                </div>
                <!-- Slide 2 -->
                <div
                    class="relative flex-shrink-0 w-full h-[600px] bg-gradient-to-r from-blue-500 to-gray-500 flex items-center justify-center text-white text-2xl font-bold">
                    Gambar 2
                    <img src="images/gambar6.jpg" alt="Gambar 1"
                        class="absolute top-0 left-0 w-full h-full object-cover" /> <!-- Masukkan Gambar -->
                    <div class="absolute top-10 left-20 text-white text-xl font-medium">
                        HAHAHAHA
                    </div>
                    <div class="absolute bottom-40 left-20 text-white text-xl font-medium">
                        AWAS KENA'PRANK
                    </div>
                </div>
                <!-- Slide 3 -->
                <div
                    class="relative flex-shrink-0 w-full h-[600px] bg-gradient-to-r from-green-500 to-gray-500 flex items-center justify-center text-white text-2xl font-bold">
                    Gambar 3
                    <img src="images/gambar6.jpg" alt="Gambar 1"
                        class="absolute top-0 left-0 w-full h-full object-cover" /> <!-- Masukkan Gambar -->
                    <div class="absolute top-10 left-20 text-white text-xl font-medium">
                        YAHHHHH
                    </div>
                    <div class="absolute bottom-40 left-20 text-white text-xl font-medium">
                        NDAK ADA JI APA"
                    </div>
                </div>
            </div>

            <!-- Tombol Panah Kiri -->
            <button id="prev"
                class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white shadow-lg rounded-full p-4 hover:bg-gray-200 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="black" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Tombol Panah Kanan -->
            <button id="next"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white shadow-lg rounded-full p-4 hover:bg-gray-200 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="black" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <div class="flex justify-center items-center h-screen relative mt-40">
            <!-- Teks di atas Kotak -->
            <div class="absolute top-0 w-full text-center">
                <h1 class="text-4xl font-bold text-white drop-shadow-lg">JURUS SERBIU BAYANGAN</h1>
            </div>

            <!-- Teks di bawah Kotak -->
            <div class="absolute bottom-0 w-full text-center">
                <p class="text-xl text-white mt-4 drop-shadow-md">CINGG CINGG!!!</p>
            </div>

            <!-- Teks di kiri Kotak -->
            <div class="absolute left-0 top-1/2 transform -translate-y-1/2 text-left pl-8">
                <p class="text-xl font-semibold text-white drop-shadow-md">PIUH PIUH!!!</p>
            </div>

            <!-- Teks di kanan Kotak -->
            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 text-right pr-8">
                <p class="text-xl font-semibold text-white drop-shadow-md">CEELLUPPMBA!!!</p>
            </div>

            <div class="grid grid-cols-4 gap-32 mt-24">
                <!-- Kotak 1 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform rotate-12">
                    <img src="images/kotak1.jpeg" alt="Kotak 1"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 2 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform -rotate-12">
                    <img src="images/kotak1.jpeg" alt="Kotak 2"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 3 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform">
                    <img src="images/kotak1.jpeg" alt="Kotak 3"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 4 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform">
                    <img src="images/kotak1.jpeg" alt="Kotak 4"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 5 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform rotate-12">
                    <img src="images/kotak1.jpeg" alt="Kotak 5"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 6 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform -rotate-12">
                    <img src="images/kotak1.jpeg" alt="Kotak 6"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 7 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform">
                    <img src="images/kotak1.jpeg" alt="Kotak 7"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 8 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform">
                    <img src="images/kotak1.jpeg" alt="Kotak 8"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
            </div>
        </div>

        <div class="flex justify-center -mt-60 items-center h-screen relative">
            <!-- Teks di atas Kotak -->
            <div class="absolute top-0 w-full text-center">
                <h1 class="text-4xl font-bold text-white drop-shadow-lg">BOOMBAKUMBA!!!</h1>
            </div>

            <!-- Teks di bawah Kotak -->
            <div class="absolute bottom-0 w-full text-center">
                <p class="text-xl text-white mt-4 drop-shadow-md">YAHAHA JANGKO BANYAK MAU PUSINGKA!!!</p>
            </div>

            <!-- Teks di kiri Kotak -->
            <div class="absolute left-0 top-1/2 transform -translate-y-1/2 text-left pl-8">
                <p class="text-xl font-semibold text-white drop-shadow-md">YHUHUHUH!!!</p>
            </div>

            <!-- Teks di kanan Kotak -->
            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 text-right pr-8">
                <p class="text-xl font-semibold text-white drop-shadow-md">CIUHCIUHHHH!!!</p>
            </div>

            <div class="grid grid-cols-4 gap-32 mt-24">
                <!-- Kotak 1 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform">
                    <img src="images/kotak1.jpeg" alt="Kotak 1"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 2 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform">
                    <img src="images/kotak1.jpeg" alt="Kotak 2"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 3 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform rotate-12">
                    <img src="images/kotak1.jpeg" alt="Kotak 3"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 4 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform -rotate-12">
                    <img src="images/kotak1.jpeg" alt="Kotak 4"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 5 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform">
                    <img src="images/kotak1.jpeg" alt="Kotak 5"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 6 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform">
                    <img src="images/kotak1.jpeg" alt="Kotak 6"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 7 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform rotate-12">
                    <img src="images/kotak1.jpeg" alt="Kotak 7"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
                <!-- Kotak 8 -->
                <div class="w-56 h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform -rotate-12">
                    <img src="images/kotak1.jpeg" alt="Kotak 8"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-md" />
                </div>
            </div>
        </div>
    </div>


    <script>
    // JavaScript untuk Slider
    const slider = document.getElementById('slider');
    const prev = document.getElementById('prev');
    const next = document.getElementById('next');
    let currentIndex = 0;

    prev.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            slider.style.transform = `translateX(-${currentIndex * 1440}px)`;
        }
    });

    next.addEventListener('click', () => {
        if (currentIndex < 2) { // Sesuai jumlah gambar - 1
            currentIndex++;
            slider.style.transform = `translateX(-${currentIndex * 1440}px)`;
        }
    });
    </script>

    </div>


</section>

@endsection