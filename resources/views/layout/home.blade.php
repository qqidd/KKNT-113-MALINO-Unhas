@extends('app')

@section('title', 'Beranda')

@section('content')

<section>
    <div class="flex flex-row-reverse flex-wrap mx-5 sm:mx-10 mt-8 space-x-3 sm:space-x-5" data-aos="fade-down">
        <img class="h-12 sm:h-14 md:h-16 w-auto" src="{{ asset('images/gambar1.png') }}" alt="">
        <img class="h-12 sm:h-14 md:h-16 w-auto" src="{{ asset('images/gambar2.png') }}" alt="">
        <img class="h-12 sm:h-14 md:h-16 w-auto" src="{{ asset('images/gambar3.png') }}" alt="">
        <img class="h-12 sm:h-14 md:h-16 w-auto" src="{{ asset('images/gambar4.png') }}" alt="">
    </div>

    <div class="mx-5 sm:mx-10 my-8 space-y-5 mt-20" data-aos="fade-left">
        <h1
            class="text-xl sm:text-3xl md:text-5xl font-sora font-bold text-transparent bg-gradient-to-r from-hijau to-biru bg-clip-text leading-tight">
            Malino, Tinggimoncong, Gowa, Sulawesi Selatan
        </h1>
        <h2
            class="text-lg sm:text-2xl md:text-3xl font-sora font-bold text-transparent bg-gradient-to-r from-hijau to-biru bg-clip-text leading-tight">
            Jl. Sultan Hasanuddin Malino No.62
        </h2>
    </div>

    @foreach ($contents1 as $content)
    <div
        class="flex items-center space-x-4 md:space-x-6 bg-hitam p-4 md:p-6 rounded-lg mt-20 md:mt-32 m-5 md:m-10 scale-95 md:scale-100">
        <div class="relative w-32 h-32 md:w-48 md:h-48" data-aos="zoom-in">
            <div
                class="absolute -inset-1 rounded-full bg-gradient-to-r from-biru via-hijau to-teal-500 animate-gradient">
            </div>
            <div class="relative rounded-full w-32 h-32 md:w-48 md:h-48 overflow-hidden">
                <img src="{{ asset('storage/' . $content->foto) }}" alt="{{ $content->nama }}"
                    class="w-full h-full object-cover rounded-full hover:scale-110 transition-transform duration-300">
            </div>
        </div>

        <div class="text-white font-inter max-w-xs md:max-w-lg lg:max-w-xl leading-relaxed space-y-2"
            data-aos="zoom-in">
            <h1 class="text-lg md:text-2xl font-bold">{{ $content->nama }}</h1>
            <p class="text-xs md:text-base leading-6 md:leading-8 max-w-xs md:max-w-2xl mx-0 md:mx-0">
                {{ $content->deskripsi }}
            </p>
        </div>
    </div>
    @endforeach

    <div class="grid grid-cols-1 md:grid-cols-2 m-5 md:m-10 mt-10 md:mt-20 gap-6">
        <div class="text-white max-w-2xl" data-aos="fade-up">
            <h1 class="text-xl md:text-3xl font-sora mt-5 md:mt-10 font-bold">Wisata Malino</h1>
            <p
                class="leading-7 md:leading-9 font-inter text-putihT mt-4 text-sm md:text-lg text-justify md:text-left max-w-xs md:max-w-2xl mx-10 md:mx-0">
                Malino memiliki beragam tempat <span class="text-hijau">wisata</span>, mulai dari panorama alam
                dengan udara sejuk khas pegunungan hingga wahana permainan. Wilayah Malino juga kaya akan tanaman khas
                pegunungan, seperti hutan pinus, kebun teh, anggur, agrowisata stroberi, dan lain sebagainya.
                Untuk itu, <span class="text-biru">Malino dijuluki Kota Bunga</span>.
            </p>
        </div>

        <div class="relative m-5 md:m-10 md:ml-0">
            <!-- Fade Shadow (Left) -->
            <div id="fade-left"
                class="absolute left-0 top-0 h-full w-12 bg-gradient-to-r from-hitam/40 to-transparent z-10 pointer-events-none hidden md:block">
            </div>

            <!-- Fade Shadow (Right) -->
            <div id="fade-right"
                class="absolute right-0 top-0 h-full w-12 bg-gradient-to-l from-hitam/40 to-transparent z-10 pointer-events-none hidden md:block">
            </div>

            <!-- Scrollable Content -->
            <div id="scroll-container"
                class="flex gap-5 md:gap-7 overflow-x-auto scrollbar-hide scroll-smooth scroll-snap-x"
                data-aos="fade-up">
                <div class="flex gap-5 md:gap-7 flex-nowrap">
                    <div
                        class="bg-hitamK h-56 md:h-64 w-72 md:w-96 rounded-lg shadow-lg p-4 flex flex-col justify-center text-center flex-shrink-0 scroll-snap-align-start">
                        <h2 class="font-sora text-white text-lg md:text-xl font-semibold">Panorama Alam</h2>
                        <p class="leading-relaxed text-hitamF mt-2 text-sm md:text-lg">
                            Malino memiliki gunung-gunung yang kaya akan pemandangan batu kapur, pinus, dan dipenuhi
                            tanaman tropis yang indah.
                        </p>
                    </div>
                    <div
                        class="bg-hitamK h-56 md:h-64 w-72 md:w-96 rounded-lg shadow-lg p-4 flex flex-col justify-center text-center flex-shrink-0 scroll-snap-align-start">
                        <h2 class="font-sora text-white text-lg md:text-xl font-semibold">Malino Highlands</h2>
                        <p class="leading-relaxed text-hitamF mt-2 text-sm md:text-base">
                            Wisata kebun teh baru di Sulawesi Selatan yang juga menawarkan kesempatan untuk melihat
                            hewan-hewan konservasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollContainer = document.getElementById("scroll-container");
            const fadeLeft = document.getElementById("fade-left");
            const fadeRight = document.getElementById("fade-right");

            function updateShadows() {
                if (scrollContainer.scrollLeft <= 0) {
                    fadeLeft.style.display = "none";
                } else {
                    fadeLeft.style.display = "block";
                }

                if (scrollContainer.scrollLeft + scrollContainer.clientWidth >= scrollContainer.scrollWidth) {
                    fadeRight.style.display = "none";
                } else {
                    fadeRight.style.display = "block";
                }
            }

            // Jalankan saat halaman dimuat
            updateShadows();

            // Jalankan setiap kali scroll
            scrollContainer.addEventListener("scroll", updateShadows);
        });
        </script>

    </div>

    <div class="m-5 md:m-10 mt-20 md:mt-20" data-aos="fade-up">
        <h1 class="text-xl md:text-4xl font-bold font-sora text-white mt-5 md:mt-20 md:text-left">
            Tempat Wisata Malino
        </h1>
        @foreach ($contents2 as $content)
        <div class="flex flex-wrap md:flex-nowrap gap-3 md:gap-5 mt-10 md:mt-10" data-aos="fade-up">
            <!-- Gambar -->
            <a href="{{ route('kelurahan', $content->id) }}" class="flex-shrink-0 mx-auto md:mx-0">
                <div class="bg-hitamK h-52 md:h-72 w-60 md:w-96 rounded-lg relative shadow-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $content->foto) }}" alt="{{ $content->nama }}"
                        class="w-full h-full object-cover rounded-lg transform transition-transform duration-300 hover:scale-110">
                    <span
                        class="absolute top-1 md:top-2 left-1 md:left-2 bg-red-500 text-white px-2 md:px-3 py-0.5 md:py-1 text-xs md:text-sm rounded-full">
                        New
                    </span>
                    <div class="absolute bottom-1 md:bottom-2 right-1 md:right-2 flex items-center gap-1 md:gap-2">
                        <div
                            class="w-5 md:w-6 h-5 md:h-6 rounded-full bg-white flex items-center justify-center shadow">
                            <i class="fas fa-tree text-black text-[10px] md:text-xs"></i>
                        </div>
                        <div class="relative w-5 md:w-6 h-5 md:h-6 flex items-center justify-center">
                            <div class="absolute inset-0 bg-gray-300 rounded-full"></div>
                            <div class="relative w-full h-full rounded-full bg-white overflow-hidden">
                                <img src="{{ asset('images/logohitam.png') }}" alt="Gambar"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <div class="w-full md:w-[420px] md:flex-2 text-center md:text-left mt-3 md:mt-2">
                <h2 class="text-lg md:text-2xl font-bold text-white font-sora">
                    <a class="hover:text-hijau transition-colors duration-300">{{ $content->nama }}</a>
                </h2>
                <p
                    class="text-putihT font-inter mt-1 md:mt-2 text-justify text-xs md:text-base max-w-xs md:max-w-lg mx-auto md:mx-0">
                    {{ $content->deskripsi }}
                </p>
            </div>

        </div>
        @endforeach

        <div class="flex mt-4 pl-4 md:pl-0" data-aos="zoom-in">
            <a href="{{route('kelurahan')}}" class="bg-hitamK text-hijau px-3 py-1 md:px-4 md:py-2 rounded-lg flex items-center gap-2 font-sora 
        text-sm md:text-base hover:text-biru transition-colors duration-300">
                <span class="material-icons text-hijau hover:text-biru transition-colors duration-300">
                    menu
                </span>
                See More
            </a>
        </div>

    </div>

    <div class="m-10" data-aos="fade-left">
        <h1 class="text-xl md:text-3xl font-bold font-sora text-white mt-20">Populer Tinggimoncong</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mt-10">

            <div class="bg-hitamK h-72 w-full rounded-lg p-6 relative shadow-lg">
                <img src="images/profile.jpg" alt="Malino Highland"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg opacity-40" />
                <h2 class="text-2xl font-bold font-sora text-white">Malino Highland</h2>
                <p class="text-putihT font-inter text-sm mt-4">
                    "Malino Highlands – Pesona Alam di Puncak Ketinggian! Nikmati keindahan alam pegunungan dengan
                    hamparan kebun teh yang luas...
                </p>
                <a href="{{route('wisata')}}" class="text-blue-500 font-semibold mt-2 inline-block relative z-10">Baca
                    Selengkapnya...</a>
                <div class="absolute bottom-4 left-6 flex items-center gap-3 z-10">
                    <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center">
                        <i class="fas fa-tree text-black text-lg"></i>
                    </div>
                    <div class="relative w-8 h-8 rounded-full bg-white overflow-hidden">
                        <img src="{{ asset('images/logohitam.png') }}" alt="Gambar" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center text-yellow-400">
                        <span class="text-sm font-inter text-white ml-2">Tourist attraction</span>
                    </div>
                </div>
            </div>

            <div class="bg-hitamK h-72 w-full rounded-lg p-6 relative shadow-lg">
                <img src="images/profile.jpg" alt="Malino Highland"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg opacity-40" />
                <h2 class="text-2xl font-bold font-sora text-white">Hutan Pinus Malino</h2>
                <p class="text-putihT font-inter text-sm mt-4">
                    "Nikmati udara segar, suasana tenang, dan keindahan alam di tengah rimbunnya pinus. Tempat sempurna
                    untuk....
                </p>
                <a href="{{route('wisata')}}" class="text-biru font-semibold mt-2 inline-block relative z-10">Baca
                    Selengkapnya...</a>
                <div class="absolute bottom-4 left-6 flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center">
                        <i class="fas fa-tree text-black text-lg"></i>
                    </div>
                    <div class="relative w-8 h-8 rounded-full bg-white overflow-hidden">
                        <img src="{{ asset('images/logohitam.png') }}" alt="Gambar" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center text-white">
                        <span class="text-sm font-inter text-white ml-2">Tourist attraction</span>
                    </div>
                </div>
            </div>

            <div class="bg-hitamK h-72 w-full rounded-lg p-6 relative shadow-lg">
                <img src="images/profile.jpg" alt="Malino Highland"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg opacity-40" />
                <h2 class="text-2xl font-bold font-sora text-white">Air Terjun Takapala</h2>
                <p class="text-putihT font-inter text-sm mt-4">
                    "Pesona Air Terjun Takapala – Keajaiban alam dengan gemuruh air yang menenangkan...
                </p>
                <a href="{{route('wisata')}}" class="text-biru font-semibold mt-2 inline-block relative z-10">Baca
                    Selengkapnya...</a>
                <div class="absolute bottom-4 left-6 flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center">
                        <i class="fas fa-tree text-black text-lg"></i>
                    </div>
                    <div class="relative w-8 h-8 rounded-full bg-white overflow-hidden">
                        <img src="{{ asset('images/logohitam.png') }}" alt="Gambar" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center text-white">
                        <span class="text-sm font-inter text-white ml-2">Tourist attraction</span>
                    </div>
                </div>
            </div>

            <div class="bg-hitamK h-72 w-full rounded-lg p-6 relative shadow-lg">
                <img src="images/profile.jpg" alt="Malino Highland"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg opacity-40" />
                <h2 class="text-2xl font-bold font-sora text-white">Sierra Sky View</h2>
                <p class="text-putihT font-inter text-sm mt-4">
                    "Sierra Sky View - Pesona Alam dari Ketinggian! Rasakan pengalaman tak terlupakan di Sierra Sky
                    View, tempat sempurna untuk menikmati keindahan panorama dari ketinggian...
                </p>
                <a href="{{route('wisata')}}" class="text-biru font-semibold mt-2 inline-block relative z-10">Baca
                    Selengkapnya...</a>
                <div class="absolute bottom-4 left-6 flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center">
                        <i class="fas fa-tree text-black text-lg"></i>
                    </div>
                    <div class="relative w-8 h-8 rounded-full bg-white overflow-hidden">
                        <img src="{{ asset('images/logohitam.png') }}" alt="Gambar" class="w-full h-full object-cover">
                    </div>
                    <div class="flex items-center text-yellow-400">
                        <span class="text-sm font-inter text-white ml-2">Tourist attraction</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex mt-4" data-aos="zoom-in">
            <a href="{{route('wisata')}}" class="bg-hitamK text-hijau px-3 py-1 md:px-4 md:py-2 rounded-lg flex items-center gap-2 font-sora 
        text-sm md:text-base hover:text-biru transition-colors duration-300">
                <span class="material-icons text-hijau hover:text-biru transition-colors duration-300">
                    menu
                </span>
                See More
            </a>
        </div>
    </div>
    <!-- Tambahkan di dalam Blade animate-gradient -->
    <style>
    @keyframes gradientMove {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .animate-gradient {
        background-size: 200% 200%;
        animation: gradientMove 3s linear infinite;
    }
    </style>
</section>
@endsection