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
    <div class="flex items-center space-x-6 bg-hitam p-6 rounded-lg mt-32 m-10 scale-90 md:scale-100">
        <!-- Gradient Bingkai Bundar -->
        <div class="relative w-36 h-36 md:w-48 md:h-48 ml-[-65px] md:ml-0" data-aos="zoom-in">
            <div class="absolute -inset-1 rounded-full bg-gradient-to-r from-biru via-hijau to-teal-500"></div>
            <div class="relative rounded-full w-36 h-36 md:w-48 md:h-48 overflow-hidden">
                <img src="{{ asset('storage/' . $content->foto) }}" alt="{{ $content->nama }}"
                    class="w-full h-full object-cover rounded-full hover:scale-110 transition-transform duration-300">
            </div>
        </div>

        <!-- Deskripsi -->
        <div class="text-white font-inter max-w-sm md:max-w-lg lg:max-w-xl leading-relaxed space-y-2"
            data-aos="zoom-in">
            <h1 class="text-xl md:text-2xl font-bold">{{ $content->nama }}</h1>
            <p class="text-base md:text-lg text-justify line-clamp-4 md:line-clamp-none">
                {{ $content->deskripsi }}
            </p>
        </div>
    </div>
    @endforeach

    <div class="grid grid-cols-1 md:grid-cols-2 m-5 md:m-10 mt-10 md:mt-20 gap-6">
        <!-- Deskripsi -->
        <div class="text-white max-w-2xl" data-aos="fade-up">
            <h1 class="text-xl md:text-3xl font-sora mt-5 md:mt-10 font-bold">Wisata Malino</h1>
            <p class="leading-7 md:leading-8 font-inter text-putihT mt-4 text-base md:text-lg">
                Malino memiliki beragam tempat <span class="text-hijau">wisata</span>, mulai dari panorama alam
                dengan udara sejuk khas pegunungan hingga wahana permainan. Wilayah Malino juga kaya akan tanaman khas
                pegunungan, seperti hutan pinus, kebun teh, anggur, agrowisata stroberi, dan lain sebagainya.
                Untuk itu, <span class="text-biru">Malino dijuluki Kota Bunga</span>.
            </p>
        </div>

        <!-- Kartu Wisata -->
        <div class="flex gap-5 md:gap-7 m-5 md:m-10 md:ml-0 overflow-x-auto scrollbar-hide scroll-smooth scroll-snap-x"
            data-aos="fade-up">
            <div class="flex gap-5 md:gap-7 flex-nowrap">
                <div
                    class="bg-hitamK h-56 md:h-64 w-72 md:w-96 rounded-lg shadow-lg p-4 flex flex-col justify-center text-center flex-shrink-0 scroll-snap-align-start">
                    <h2 class="font-sora text-white text-lg md:text-xl font-semibold">Panorama Alam</h2>
                    <p class="leading-relaxed text-hitamF mt-2 text-sm md:text-lg">
                        Malino memiliki gunung-gunung yang kaya akan pemandangan batu kapur, pinus, dan dipenuhi tanaman
                        tropis yang indah.
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

    <div class="m-5 md:m-10 mt-20 md:mt-20" data-aos="fade-up">
        <h1 class="text-2xl md:text-4xl font-bold font-sora text-white mt-5 md:mt-10 md:text-left">
            Tempat Wisata Malino
        </h1>
        @foreach ($contents2 as $content)
        <div class="flex flex-row flex-wrap md:flex-nowrap gap-3 md:gap-5 mt-5 md:mt-10" data-aos="fade-up">

            <!-- Gambar -->
            <a href="{{ route('kelurahan', $content->id) }}" class="flex-shrink-0">
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

            <!-- Text di samping gambar saat Mobile & Desktop -->
            <div class="flex-1">
                <h2 class="text-lg md:text-2xl font-bold text-white font-sora">
                    <a class="hover:text-hijau transition-colors duration-300">{{ $content->nama }}</a>
                </h2>
                <p class="text-putihT font-inter mt-1 md:mt-2 text-justify text-xs md:text-base max-w-xs md:max-w-lg">
                    {{ $content->deskripsi }}
                </p>
            </div>

        </div>
        @endforeach
        <div class="flex mt-3 md:mt-4" data-aos="zoom-in">
            <a href="{{route('kelurahan')}}"
                class="bg-hitamK text-hijau px-3 md:px-4 py-1.5 md:py-2 rounded-lg flex items-center gap-1 md:gap-2 text-sm md:text-base font-sora hover:text-biru transition-colors duration-300">
                <span
                    class="material-icons text-hijau hover:text-biru transition-colors duration-300 text-base md:text-lg">menu</span>
                See More
            </a>
        </div>
    </div>

    <div class="m-10" data-aos="fade-left">
        <h1 class="text-4xl font-bold font-sora text-white mt-20">Populer Tinggimoncong</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mt-10">

            <div class="bg-hitamK h-72 w-full rounded-lg p-6 relative shadow-lg">
                <img src="images/profile.jpg" alt="Malino Highland"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg opacity-40" />
                <h2 class="text-2xl font-bold font-sora text-white">Malino Highland</h2>
                <p class="text-putihT font-inter text-sm mt-4">
                    "Malino Highlands – Pesona Alam di Puncak Ketinggian! Nikmati keindahan alam pegunungan dengan
                    hamparan kebun teh yang luas..."
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
                <h2 class="text-2xl font-bold font-sora text-white">Air Terjun Takapala</h2>
                <p class="text-putihT font-inter text-sm mt-4">
                    "Pesona Air Terjun Takapala - Nikmati keajaiban alam di Air Terjun Takapala, tempat di mana gemuruh
                    air yang jatuh dari ketinggian menciptakan suasana damai..."
                </p>
                <a href="{{route('wisata')}}" class="text-blue-500 font-semibold mt-2 inline-block relative z-10">Baca
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

            <div class="bg-hitamK h-72 w-full rounded-lg p-6 relative shadow-lg">
                <img src="images/profile.jpg" alt="Malino Highland"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg opacity-40" />
                <h2 class="text-2xl font-bold font-sora text-white">Air Terjun Takapala</h2>
                <p class="text-putihT font-inter text-sm mt-4">
                    "Pesona Air Terjun Takapala - Nikmati keajaiban alam di Air Terjun Takapala, tempat di mana gemuruh
                    air yang jatuh dari ketinggian menciptakan suasana damai..."
                </p>
                <a href="{{route('wisata')}}" class="text-blue-500 font-semibold mt-2 inline-block relative z-10">Baca
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

            <div class="bg-hitamK h-72 w-full rounded-lg p-6 relative shadow-lg">
                <img src="images/profile.jpg" alt="Malino Highland"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg opacity-40" />
                <h2 class="text-2xl font-bold font-sora text-white">Sierra Sky View</h2>
                <p class="text-putihT font-inter text-sm mt-4">
                    "Sierra Sky View - Pesona Alam dari Ketinggian! Rasakan pengalaman tak terlupakan di Sierra Sky
                    View, tempat sempurna untuk menikmati keindahan panorama dari ketinggian..."
                </p>
                <a href="{{route('wisata')}}" class="text-blue-500 font-semibold mt-2 inline-block relative z-10">Baca
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
            <a href="{{route('wisata')}}"
                class="bg-hitamK text-hijau px-4 py-2 rounded-lg flex items-center gap-2 font-sora hover:text-biru transition-colors duration-300">
                <span class="material-icons text-hijau hover:text-biru transition-colors duration-300">menu</span>
                See More
            </a>
        </div>
    </div>

</section>
@endsection