@extends('app')

@section('title', 'Home')

@section('content')
<section>
    <div class="flex flex-row-reverse mx-10 mt-8 space-x-5">
        <img class="h-16 w-auto" src=" {{ asset('images/gambar1.png') }}" alt="">
        <img class="h-16 w-auto" src=" {{ asset('images/gambar2.png') }}" alt="">
        <img class="h-16 w-auto" src=" {{ asset('images/gambar3.png') }}" alt="">
        <img class="h-16 w-auto" src=" {{ asset('images/gambar4.png') }}" alt="">
    </div>


    <div class="mx-10 my-8 space-y-5 mt-20">
        <h1
            class="text-5xl font-sora font-bold text-transparent bg-gradient-to-r from-hijau to-biru bg-clip-text leading-tight">
            Malino, Tinggimoncong, Gowa, Sulawesi Selatan
        </h1>
        <h2
            class="text-3xl font-sora font-bold text-transparent bg-gradient-to-r from-hijau to-biru bg-clip-text leading-tight">
            Jl. Sultan Hasanuddin Malino No.62
        </h2>
    </div>

    <div class="flex items-center space-x-6 bg-hitam p-6 rounded-lg mt-32 m-10">
        <!-- Gradient Border Circle -->
        <div class="relative w-48 h-48">
            <div class="absolute -inset-1 rounded-full bg-gradient-to-r from-biru via-hijau to-teal-500"></div>
            <div class="relative rounded-full w-48 h-48 overflow-hidden">
                <img src="images/profile.jpg" alt="Deskripsi Gambar"
                    class="w-full h-full object-cover rounded-full hover:scale-110 transition-transform duration-300">
            </div>
        </div>

        <!-- Description Text -->
        <div class="text-white font-inter">
            <h1 class="text-2xl font-bold">Malino</h1>
            <p class="text-lg mt-2">Malino adalah nama kelurahan yang terletak <br>di Kecamatan Tinggimoncong, Kabupaten
                Gowa, Sulawesi Selatan. <br><span class="text-blue-400">Sebelum</span> dikenal dengan sebutan Malino,
                <br>masyarakat mengenalnya dengan nama <span class="text-green-400">Kampung Lappak</span>.
            </p>
        </div>
    </div>


    <div class="grid grid-cols-2 m-10 mt-20">
        <div class="text-white">
            <h1 class="text-3xl font-sora mt-10 font-bold">Wisata Malino</h1>
            <p class="leading-10  ">
                Malino memiliki beragam tempat <span class="text-hijau">wisata</span>, mulai panorama alam
                dengan udara sejuk khas pegunungan hingga wahana permainan. Wilayah Malino juga kaya tanaman khas
                pegunungan, seperti hutan
                pinus, kebun teh, anggur, agrowisata stroberi, dan lain sebagainya. Untuk itu, <span
                    class="text-biru">Malino dijuliki Kota Bunga</span>. </p>
        </div>
        <div class="flex gap-7 m-10">
            <div class="bg-hitamK h-64 w-1/2 rounded-lg shadow-lg">
                <div>
                    <h2 class="font-sora text-white text-center mt-12 text-xl font-SemiBold">Panorama Alam</h2>
                    <p class="text-center leading-8 p-2 text-hitamF">Malino memiliki gunung-gunung yang kaya akan
                        pemandangan batu kapur pinus dan dipenuhi tanaman tropis yang indah. </p>
                </div>
            </div>
            <div class="bg-hitamK h-64 w-1/2 rounded-lg shadow-lg">
                <div>
                    <h2 class="font-sora text-white text-center mt-12 text-xl font-SemiBold">Malino Highlands</h2>
                    <p class="text-center leading-8 p-2 text-hitamF ">Wisata kebun teh baru di Sulawesi Selatan yang
                        juga menawarkan kesempatan untuk melihat hewan-hewan konservasi. </p>
                </div>
            </div>
        </div>


        <div>
            <h1 class="text-4xl font-bold font-sora text-white mt-20">Tempat Wisata Malino</h1>
            <div class="flex gap-5 items-start mt-10">
                <a>
                    <div class="bg-hitamK h-72 w-96 rounded-lg flex-shrink-0 relative shadow-lg overflow-hidden">
                        <!-- Gambar dengan Animasi Hover -->
                        <img src="Images/profile.jpg" alt="Deskripsi Gambar"
                            class="w-full h-full object-cover rounded-lg transform transition-transform duration-300 hover:scale-110">
                        -
                        <!-- Elemen "New" -->
                        <span
                            class="absolute top-2 left-2 bg-red-500 text-white px-3 py-1 text-sm rounded-full">New</span>
                        <!-- Titik di Sudut Bawah -->
                        <div class="absolute bottom-2 right-2 flex gap-2">
                            <span class="bg-gray-300 w-4 h-4 rounded-full"></span>
                            <span class="bg-gray-300 w-4 h-4 rounded-full"></span>
                        </div>
                    </div>
                </a>
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-white font-sora mt-4">
                        <a class="hover:text-hijau transition-colors duration-300">Hutan Pinus</a>
                    </h2>
                    <p class="text-putihT font-inter mt-2 text-justify">
                        Kawasan Hutan Pinus yang ada di Malino adalah salah satu spot wisata yang paling terkenal
                        di Malino. Daerah ini tak pernah sepi oleh pengunjung terutama di saat musim liburan.
                    </p>
                </div>
            </div>
            <div class="flex gap-5 items-start mt-10">
                <a>
                    <div class="bg-hitamK h-72 w-96 rounded-lg flex-shrink-0 relative shadow-lg overflow-hidden">
                        <!-- Gambar dengan Animasi Hover -->
                        <img src="Images/profile.jpg" alt="Deskripsi Gambar"
                            class="w-full h-full object-cover rounded-lg transform transition-transform duration-300 hover:scale-110">
                        <!-- Elemen "New" -->
                        <span
                            class="absolute top-2 left-2 bg-red-500 text-white px-3 py-1 text-sm rounded-full">New</span>
                        <!-- Titik di Sudut Bawah -->
                        <div class="absolute bottom-2 right-2 flex gap-2">
                            <span class="bg-gray-300 w-4 h-4 rounded-full"></span>
                            <span class="bg-gray-300 w-4 h-4 rounded-full"></span>
                        </div>
                    </div>
                </a>
                <div class="flex-1">
                    <h2 class="text-3xl font-bold font-sora text-white mt-4">
                        <a class="hover:text-hijau transition-colors duration-300">Risstroberi</a>
                    </h2>
                    <p class="text-putihT font-inter mt-2 text-justify">
                        Salah satu agrowisata stroberi yang terdapat di batulapisi malino.
                    </p>
                </div>
            </div>
            <div class="flex mt-4">
                <a href="{{route('kelurahan')}}"
                    class="bg-hitamK text-hijau px-4 py-2 rounded-lg flex items-center gap-2 font-sora hover:text-biru transition-colors duration-300">
                    <span class="material-icons text-hijau hover:text-biru transition-colors duration-300">menu</span>
                    See More
                </a>
            </div>
        </div>
    </div>

    <div class="m-10">
        <h1 class="text-4xl font-bold font-sora text-white mt-20">Populer Tinggimoncong</h1>
        <div class="grid grid-cols-2 gap-8 mt-10">
            <div class="bg-hitamK h-72 w-full rounded-lg p-6 relative shadow-lg">
                <!-- Gambar di belakang teks -->
                <img src="images/profile.jpg" alt="Malino Highland"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg opacity-40" />
                <!-- Teks dan Konten -->
                <div class="relative z-10">
                    <h2 class="text-2xl font-bold font-sora text-white">Malino Highland</h2>
                    <p class="text-putihT font-inter text-sm mt-4">Blablablablabla.</p>
                </div>
                <!-- Rating dan Logo Bundar -->
                <div class="absolute bottom-4 left-6 flex items-center gap-3 z-10">
                    <span class="bg-white w-6 h-6 rounded-full"></span>
                    <div class="flex items-center text-yellow-400">
                        <span class="material-icons text-base">star</span>
                        <span class="text-sm font-inter text-white ml-2">5 Stars</span>
                    </div>
                </div>
            </div>
            <div class="bg-hitamK h-72 w-full rounded-lg p-6 relative shadow-lg">
                <img src="images/profile.jpg" alt="Malino Highland"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg opacity-40" />
                <h2 class="text-2xl font-bold font-sora text-white">The River Malino</h2>
                <p class="text-putihT font-inter text-sm mt-4">Blablablablabla.</p>
                <div class="absolute bottom-4 left-6 flex items-center gap-3">
                    <span class="bg-white w-6 h-6 rounded-full"></span>
                    <div class="flex items-center text-yellow-400">
                        <span class="material-icons text-base">star</span>
                        <span class="text-sm font-inter text-white ml-2">5 Stars</span>
                    </div>
                </div>
            </div>
            <div class="bg-hitamK h-72 w-full rounded-lg p-6 relative shadow-lg">
                <img src="images/profile.jpg" alt="Malino Highland"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg opacity-40" />
                <h2 class="text-2xl font-bold font-sora text-white">Air Terjun Takapala</h2>
                <p class="text-putihT font-inter text-sm mt-4">Blablablablabla.</p>
                <div class="absolute bottom-4 left-6 flex items-center gap-3">
                    <span class="bg-white w-6 h-6 rounded-full"></span>
                    <div class="flex items-center text-yellow-400">
                        <span class="material-icons text-base">star</span>
                        <span class="text-sm font-inter text-white ml-2">5 Stars</span>
                    </div>
                </div>
            </div>
            <div class="bg-hitamK h-72 w-full rounded-lg p-6 relative shadow-lg">
                <img src="images/profile.jpg" alt="Malino Highland"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg opacity-40" />
                <h2 class="text-2xl font-bold font-sora text-white">Sierra Sky View</h2>
                <p class="text-putihT text-sm font-inter mt-4">Blablablablabla.</p>
                <div class="absolute bottom-4 left-6 flex items-center gap-3">
                    <span class="bg-white w-6 h-6 rounded-full"></span>
                    <div class="flex items-center text-yellow-400">
                        <span class="material-icons text-base">star</span>
                        <span class="text-sm font-inter text-white ml-2">5 Stars</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex mt-4">
            <a href="{{route('kelurahan')}}"
                class="bg-hitamK text-hijau px-4 py-2 rounded-lg flex items-center gap-2 font-sora hover:text-biru transition-colors duration-300">
                <span class="material-icons text-hijau hover:text-biru transition-colors duration-300">menu</span>
                See More
            </a>
        </div>
    </div>

</section>
@endsection