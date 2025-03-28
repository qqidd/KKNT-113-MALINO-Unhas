@extends('app')

@section('title', 'Kantor')

@section('content')

<section>
    <div class="mx-5 md:mx-10 my-8 space-y-5 mt-20" data-aos="fade-left">
        <h1
            class="text-2xl sm:text-3xl md:text-5xl lg:text-5xl font-sora font-bold text-transparent bg-gradient-to-l from-hijau to-biru bg-clip-text leading-tight">
            Kantor Lurah Malino-Gowa, Sulawesi Selatan
        </h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-10 m-3 sm:m-5 md:m-10 mt-6 sm:mt-10 md:mt-20"
        data-aos="fade-down">
        <div class="bg-hitamK w-full rounded-lg shadow-lg p-4 sm:p-6">
            <h2 class="font-inter font-bold text-lg sm:text-xl text-white    text-center mb-4 sm:mb-5 text-shadow-md">
                Kantor Lurah Malino Gowa
            </h2>
            <p
                class="font-inter text-putihT bg-biruK text-sm sm:text-lg px-4 sm:px-5 py-2 sm:py-3 text-shadow-lg rounded-lg flex">
                <span class="font-semibold w-32 sm:w-48">Alamat lokasi :</span>
                <span class="flex-1">
                    Malino, Kec. Tinggimoncong, Kabupaten Gowa, Sulawesi Selatan 92174, Indonesia.
                </span>
            </p>
            <p class="font-inter text-putihT text-sm sm:text-lg px-4 sm:px-5 my-2 sm:my-3 text-shadow-lg flex">
                <span class="font-semibold w-32 sm:w-48">Nomor Telepon :</span>
                <span class="flex-1">-</span>
            </p>
            <p
                class="font-inter text-putihT bg-biruK py-2 sm:py-3 text-sm sm:text-lg px-4 sm:px-5 my-2 sm:my-3 text-shadow-lg rounded-lg flex">
                <span class="font-semibold w-32 sm:w-48">Kode Pos :</span>
                <span class="flex-1">92174</span>
            </p>
            <p class="font-inter text-putihT text-sm sm:text-lg px-4 sm:px-5 my-2 sm:my-3 text-shadow-lg flex">
                <span class="font-semibold w-32 sm:w-48">Lokasi :</span>
                <a href="https://maps.app.goo.gl/teVXzf7CNNhVpHp89" target="_blank"
                    class="text-blue-400 hover:underline flex-1">
                    Klik di sini
                </a>
            </p>
        </div>
        @foreach ($kantors1 as $profil)
        <div
            class="bg-hitam h-auto sm:h-52 md:h-72 lg:h-80 w-full sm:w-5/6 md:w-3/4 lg:w-2/3 mx-auto rounded-lg flex items-center justify-center overflow-hidden group">
            <img src="{{ asset('storage/' . $profil->foto) }}" alt="GambarProfil"
                class="max-h-full max-w-full object-scale-down transition-transform duration-500 group-hover:scale-105">
        </div>

        @endforeach
    </div>

    <div class="mt-10 md:mt-20 mx-5 md:mx-10" data-aos="fade-left">
        <h3 class="text-white font-inter text-l font-bold">Deskripsi</h3>
        <p
            class="text-putihT font-inter p-2 leading-7 md:leading-8 text-justify md:mr-60 hyphens-auto max-w-full text-sm md:text-lg">
            Kantor Lurah Malino melayani masyarakat dalam memenuhi kebutuhan administrasi kependudukan. Termasuk di
            antaranya
            perizinan-perizinan seperti pekerjaan umum, perizinan umum kelurahan, perizinan pendidikan, kesehatan warga
            kelurahan
            Kantor Lurah Malino, perumahan, penataan ruang, perhubungan, lingkungan hidup, pertanahan yang menjadi
            kewenangan daerah
            serta pemberdayaan perempuan dan <span class="text-hijau">perlindungan anak</span>.
            <br>
            Secara lebih detail kantor kelurahan atau lurah yang berada di wilayah
            Kabupaten Gowa ini
            melayani izin untuk pengurusan surat keterangan domisili, pengurusan NPWP, Surat Kelakuan Baik, Surat Pindah
            Keluar, Surat
            Keterangan Tidak Mampu Kantor Lurah Malino, Surat Keterangan Usaha, Surat Usaha Mikro, dan Surat Pernyataan
            Miskin, surat
            domisili sementara dan lainnya.
            Segera kunjungi Kantor Lurah Malino ini untuk informasi lainnya terkait administrasi kependudukan, acara
            rakyat, info
            penyuluhan pada daerahnya. Anda juga bisa menghubungi kontak telepon dengan mengunjungi website kelurahan.
            Kategori: <span class="text-biru">Kantor Pemerintahan, Gowa</span>.
        </p>
    </div>
    <div class="flex flex-row-reverse mx-0 md:mx-64" data-aos="fade-up">
        <div class="m-8 h-2 w-40 rounded-l bg-gradient-to-r from-biru to-hijau mt-10 animate-gradient"></div>
    </div>

    <div>
        <h1 class="text-xl sm:text-2xl md:text-4xl font-bold font-sora text-white mt-10 mx-5 md:mx-10"
            data-aos="fade-down">
            Tempat Wisata Malino
        </h1>
        @foreach ($kantors2 as $wisata)
        @php
        // Tentukan route berdasarkan kategori
        $route = match ($wisata->kategori) {
        'GambarHutan' => 'hutan',
        'GambarRiss' => 'riss',
        'GambarTugu' => 'tugu',
        'GambarPasar' => 'pasar',
        default => 'home', // Fallback route jika kategori tidak dikenal
        };
        @endphp
        <div class="flex flex-col sm:flex-row gap-5 items-start mt-10 m-5 sm:m-10" data-aos="fade-left">
            <a href="{{ route($route) }}" class="block">
                <div
                    class="bg-hitamK h-48 sm:h-56 md:h-72 w-64 sm:w-80 md:w-96 rounded-lg flex-shrink-0 relative shadow-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $wisata->foto) }}" alt="{{ $wisata->nama }}"
                        class="w-full h-full object-cover rounded-lg transform transition-transform duration-300 hover:scale-110">
                    <span class="absolute top-2 left-2 bg-red-500 text-white px-3 py-1 text-xs sm:text-sm rounded-full">
                        New
                    </span>
                </div>
            </a>
            <div class="flex-1">
                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-white mt-4">
                    <a href="{{ route($route) }}" class="hover:text-hijau transition-colors duration-300">
                        {{ $wisata->nama }}
                    </a>
                </h2>
                <p class="text-white text-sm sm:text-base mt-2 text-justify max-w-md hyphens-auto sm:mr-0">
                    {{ Str::limit($wisata->deskripsi, 70, '...') }}
                    <a href="{{ route($route) }}" class="text-blue-500">Selengkapnya</a>
                </p>
            </div>
        </div>
        @endforeach
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