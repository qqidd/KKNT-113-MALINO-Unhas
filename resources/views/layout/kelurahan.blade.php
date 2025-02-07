@extends('app')

@section('title', 'Kelurahan Malino')

@section('content')

<section>
    <div class="mx-10 my-8 space-y-5 mt-20">
        <h1
            class="text-5xl font-sora font-bold text-transparent bg-gradient-to-l from-hijau to-biru bg-clip-text leading-tight">
            Kantor Lurah Malino-Gowa,Sulawesi Selatan
        </h1>
    </div>
    <div class="grid grid-cols-2 gap-10 m-10 mt-20">
        <div class="bg-hitamK h-80 w-full rounded-lg shadow-lg">
            <h2 class="font-inter font-bold text-xl text-white text-center m-5 text-shadow-md">Kantor Lurah Malino Gowa
            </h2>
            <p class="font-inter text-putihT bg-biruK text-lg px-5 mt-8 text-shadow-lg">Alamat lokasi &nbsp;&nbsp;:
                Malino, Tinggimoncong, Gowa Regency, South Sulawesi 92174, Indonesia. </p>
            <p class="font-inter text-putihT text-lg px-5 my-5 text-shadow-lg">Nomor telpon &nbsp;: -</p>
            <p class="font-inter text-putihT bg-biruK py-3 text-lg px-5 my-5 text-shadow-lg">Kode Pos
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                92174</p>
            <p class="font-inter text-putihT text-lg px-5 my-5 text-shadow-lg">Lokasi
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                https://maps.app.goo.gl/</p>
        </div>
        <div class="bg-hitamK h-80 w-2/3 ml-20 rounded-lg shadow-lg"> </div>
    </div>

    <div class="mt-20 m-10">
        <h3 class="text-white font-inter text-l font-bold">Deskripsi</h3>
        <p class="text-putihT font-inter p-2 leading-8 text-justify mr-36">Kantor Lurah Malino melayani masyarakat
            dalam
            memenuhi
            kebutuhan
            administrasi kependudukan. Termasuk di antaranya perizinan-perizinan seperti pekerjaan umum, perizinan umum
            kelurahan, perizinan pendidikan, kesehatan warga kelurahan Kantor Lurah Malino, perumahan, penataan ruang,
            perhubungan, lingkungan hidup, pertanahan yang menjadi kewenangan daerah serta pemberdayaan perempuan dan
            perlindungan anak. <br>
            <span class="text-hijau">Secara lebih
                detail</span> kantor kelurahan atau lurah yang berada di wilayah
            Kabupaten
            Gowa
            ini
            melayani izin
            untuk pengurusan surat keterangan domisili, pengurusan NPWP, Surat Kelakuan Baik, Surat Pindah Keluar, Surat
            Keterangan Tidak Mampu Kantor Lurah Malino, Surat Keterangan Usaha, Surat Usaha Mikro, dan Surat Pernyataan
            Miskin, surat domisili sementara dan lainnya.
            Segera kunjungi Kantor Lurah Malino ini untuk informasi lainnya terkait administrasi kependudukan, acara
            rakyat, info penyuluhan pada daerahnya. Anda juga bisa menghubungi kontak telepon dengan mengunjungi website
            kelurahan.
            Kategori: <span class="text-biru">Kantor Pemerintahan,Gowa</span>.
        </p>
    </div>
    <div class="flex flex-row-reverse mx-40 ">
        <div class="m-10 h-2 w-40 rounded-l bg-gradient-to-r from-blue-500 to-green-500 -mt-10"></div>
    </div>

    <div>
        <h1 class="text-4xl font-bold font-sora text-white mt-20 m-10">Tempat Wisata Malino</h1>
        <div class="flex gap-5 items-start mt-10 m-10">
            <a href="{{route('hutan')}}" class="block">
                <div class="bg-hitamK h-72 w-96 rounded-lg flex-shrink-0 relative shadow-lg overflow-hidden">
                    <img src="images/profile.jpg" alt="Deskripsi Gambar"
                        class="w-full h-full object-cover rounded-lg transform transition-transform duration-300 hover:scale-110">
                    <i class="rounded-lg"></i>
                    <span class="absolute top-2 left-2 bg-red-500 text-white px-3 py-1 text-sm rounded-full">New</span>
                    <div class="absolute bottom-2 right-2 flex gap-2">
                        <span class="bg-gray-300 w-4 h-4 rounded-full"></span>
                        <span class="bg-gray-300 w-4 h-4 rounded-full"></span>
                    </div>
                </div>
            </a>
            <div class="flex-1">
                <h2 class="text-3xl font-bold text-white mt-4">
                    <a href="{{route('hutan')}}" class="hover:text-hijau transition-colors duration-300">
                        Hutan Pinus Malino
                    </a>
                </h2>
                <p class="text-white text-base mt-2 text-justify">
                    Kawasan Hutan Pinus yang ada di Malino adalah salah satu spot wisata yang paling terkenal di Malino.
                    <br>
                    Daerah ini tak pernah sepi oleh pengunjung terutama di saat musim liburan.
                    <a href="{{route('hutan')}}" class="text-blue-500">...Selengkapnya</a>
                </p>
            </div>
        </div>
        <div class="flex gap-5 items-start mt-10 m-10">
            <a href="{{route('riss')}}" class="block">
                <div class="bg-hitamK h-72 w-96 rounded-lg flex-shrink-0 relative shadow-lg overflow-hidden">
                    <!-- Animasi -->
                    <img src="Images/profile.jpg" alt="Deskripsi Gambar"
                        class="w-full h-full object-cover rounded-lg transform transition-transform duration-300 hover:scale-110">
                    <!-- Elemen "New" -->
                    <span class="absolute top-2 left-2 bg-red-500 text-white px-3 py-1 text-sm rounded-full">New</span>
                    <!-- Titik di Sudut Bawah -->
                    <div class="absolute bottom-2 right-2 flex gap-2">
                        <span class="bg-gray-300 w-4 h-4 rounded-full"></span>
                        <span class="bg-gray-300 w-4 h-4 rounded-full"></span>
                    </div>
                </div>
            </a>
            <div class="flex-1">
                <h2 class="text-3xl font-bold text-white mt-4">
                    <a href="{{route('riss')}}" class="hover:text-hijau transition-colors duration-300">
                        Risstroberi
                    </a>
                </h2>
                <p class="text-white text-base mt-2">
                    Salah satu agrowisata stroberi yang terdapat di batulapisi malino.
                    <a href="{{route('riss')}}" class="text-blue-500">...Selengkapnya</a>
                </p>
            </div>
        </div>
        <div class="flex gap-5 items-start mt-10 m-10">
            <a href="{{route('tugu')}}" class="block">
                <div class="bg-hitamK h-72 w-96 rounded-lg flex-shrink-0 relative shadow-lg overflow-hidden">
                    <!-- Animasi -->
                    <img src="Images/profile.jpg" alt="Deskripsi Gambar"
                        class="w-full h-full object-cover rounded-lg transform transition-transform duration-300 hover:scale-110">
                    <!-- Elemen "New" -->
                    <span class="absolute top-2 left-2 bg-red-500 text-white px-3 py-1 text-sm rounded-full">New</span>
                    <!-- Titik di Sudut Bawah -->
                    <div class="absolute bottom-2 right-2 flex gap-2">
                        <span class="bg-gray-300 w-4 h-4 rounded-full"></span>
                        <span class="bg-gray-300 w-4 h-4 rounded-full"></span>
                    </div>
                </div>
            </a>
            <div class="flex-1">
                <h2 class="text-3xl font-bold text-white mt-4">
                    <a href="{{route('tugu')}}" class="hover:text-hijau transition-colors duration-300">
                        Tugu Malino
                    </a>
                </h2>
                <p class="text-white text-base mt-2">
                    Salah satu agrowisata stroberi yang terdapat di batulapisi malino.
                    <a href="{{route('tugu')}}" class="text-blue-500">...Selengkapnya</a>
                </p>
            </div>
        </div>
        <div class="flex gap-5 items-start mt-10 m-10">
            <a href="{{route('pasar')}}" class="block">
                <div class="bg-hitamK h-72 w-96 rounded-lg flex-shrink-0 relative shadow-lg overflow-hidden">
                    <!-- Animasi -->
                    <img src="Images/profile.jpg" alt="Deskripsi Gambar"
                        class="w-full h-full object-cover rounded-lg transform transition-transform duration-300 hover:scale-110">
                    <!-- Elemen "New" -->
                    <span class="absolute top-2 left-2 bg-red-500 text-white px-3 py-1 text-sm rounded-full">New</span>
                    <!-- Titik di Sudut Bawah -->
                    <div class="absolute bottom-2 right-2 flex gap-2">
                        <span class="bg-gray-300 w-4 h-4 rounded-full"></span>
                        <span class="bg-gray-300 w-4 h-4 rounded-full"></span>
                    </div>
                </div>
            </a>
            <div class="flex-1">
                <h2 class="text-3xl font-bold text-white mt-4">
                    <a href="{{route('pasar')}}" class="hover:text-hijau transition-colors duration-300">
                        Pasar Malino
                    </a>
                </h2>
                <p class="text-white text-base mt-2">
                    Salah satu agrowisata stroberi yang terdapat di batulapisi malino.
                    <a href="{{route('pasar')}}" class="text-blue-500">...Selengkapnya</a>
                </p>
            </div>
        </div>>
    </div>

</section>


@endsection