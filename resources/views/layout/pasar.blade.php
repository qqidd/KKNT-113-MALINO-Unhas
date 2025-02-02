@extends('app')

@section('title', 'Wisata')

@section('content')
<section>

    <div class="grid grid-cols-2 m-20">
        <div class="text-white">
            <h1
                class="text-5xl font-sora font-bold text-transparent bg-gradient-to-l from-orangeM to-hijauM bg-clip-text leading-tight">
                Pasar Malino</h1>
            <p class="mt-10 text-xl px-1 ">Temukan Keajaiban di Risstroberi <span
                    class="text-hijauM font-bold">Malino!</span>.
            </p>
            <p class="text-lg mt-3 font-inter text-putihT ml-10 text-justify leading-7">
                Rasakan Keindahan dan Kesegaran di Risstroberi Malino!
                Nikmati petualangan seru di Risstroberi Malino, tempat yang menawarkan stroberi segar langsung dari
                kebun, pemandangan indah, dan spot foto instagramable. Cicipi berbagai olahan stroberi yang menggugah
                selera dan buat kenangan manis bersama teman dan keluarga!

                Kunjungi sekarang dan rasakan sensasi yang tak terlupakan!
            </p> <!-- edit ini -->
        </div>
        <div class="flex items-start w-full">
            <div class="bg-hitamK h-64 w-1/2 rounded-lg shadow-lg transform mx-40 mt-28 relative border-4">
                <img src="images/Risstroberi/ppR.jpg" alt="Deskripsi Profil Our"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg" />
            </div>
        </div>
        <div class="flex flex-row-reverse mx-40">
            <div class="m-5 h-2 w-40 rounded-lg bg-gradient-to-r from-hijauM to-orangeM -mt-10 translate-x-44">
            </div>
            <!-- edit ini jika p dari selamat datang d tambahkakn -->
        </div>
    </div>

    <div class="bg-hitam text-gray-300 font-inter p-6 m-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Card 1 -->
            <div class="bg-hitamK p-6 rounded-lg shadow-lg">
                <!-- Gambar dengan animasi saat hover -->
                <div class="flex justify-center mb-4 shadow-lg">
                    <img alt="Gambar 1"
                        class="w-full h-auto bg-hitamK rounded-lg aspect-[16/9] transform transition-transform duration-300 ease-in-out hover:scale-105"
                        src="images/Risstroberi/beri1.jpg" />
                </div>
                <!-- Teks tetap berada di posisi semula -->
                <h2 class="text-xl font-semibold text-orangeM mb-2">Waktu dan Musim</h2>
                <ul class="list-disc list-inside text-putihT space-y-2">
                    <li>Warna: Warna buah sering menjadi indikator kematangan. Contoh:</li>
                    Stroberi yang segar ada di batulapisi.
                    Stroberi bisa mengubah hidumu.
                    <li> Permukaan: Perhatikan apakah ada bercak, kerutan, atau jamur pada kulit. Hindari buah yang
                        terlihat
                        busuk atau memiliki noda hitam besar, tidak adaji kalau dsni.</li>
                </ul>
            </div>

            <!-- Card 2 -->
            <div class="bg-hitamK p-6 rounded-lg shadow-lg">
                <!-- Gambar dengan animasi saat hover -->
                <div class="flex justify-center mb-4 shadow-lg">
                    <img alt="Gambar 1"
                        class="w-full h-auto bg-hitamK rounded-lg aspect-[16/9] transform transition-transform duration-300 ease-in-out hover:scale-105"
                        src="images/Risstroberi/beri2.jpg" />
                </div>
                <!-- Teks tetap berada di posisi semula -->
                <h2 class="text-xl font-semibold mb-2 text-hijauM">Tempat</h2>
                <ul class="list-disc list-inside space-y-2 text-putihT">
                    <li>Kekenyalan: Tekan perlahan permukaan buah.</li>
                    <li>Apel dan pir yang segar terasa keras.</li>
                    <li>Alpukat matang terasa sedikit lunak tetapi tidak lembek.</li>
                    <li>Kulit: Kulit yang keriput pada beberapa buah (seperti jeruk) bisa menjadi tanda sudah terlalu
                        lama disimpan.</li>
                    <li>Tapi ini tentang stroberi!!.</li>
                </ul>
            </div>

            <!-- Card 3 -->
            <div class="bg-hitamK p-6 rounded-lg shadow-lg">
                <!-- Gambar dengan animasi saat hover -->
                <div class="flex justify-center mb-4 shadow-lg">
                    <img alt="Gambar 1"
                        class="w-full h-auto bg-hitamK rounded-lg aspect-[16/9] transform transition-transform duration-300 ease-in-out hover:scale-105"
                        src="images/Risstroberi/beri3.jpg" />
                </div>
                <!-- Teks tetap berada di posisi semula -->
                <h2 class="text-xl font-semibold mb-2 text-orangeM">Spot Menarik</h2>
                <ul class="list-disc list-inside space-y-2 tetx-putihT">
                    <li>Tempat pembelian</li>
                    <li>Membeli buah dari tempat yang menjaga kebersihan, seperti pasar petani, supermarket terpercaya,
                        atau langsung dari petani, biasanya lebih aman dan berkualitas.</li>
                    <li>Hanya di batulapsi lokasi nanti di kasih capek mau bobo</li>
                </ul>
            </div>
        </div>

        <div class="text-right mt-10 flex justify-end gap-4 items-center">
            <a class="text-orangeM text-lg font-semibold hover:text-hijauM" href="{{route('tugu')}}">
                <i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i> Sebelumnya
            </a>

            <span class="text-white">|</span> <!-- Simbol pemisah -->
            <a class="text-hijauM text-lg font-semibold hover:text-orangeM flex items-center gap-2"
                href="{{route('kelurahan')}}">
                <i class="fas fa-home"></i> <!-- Logo rumah -->
                Kelurahan
            </a>
        </div>

    </div>
</section>

@endsection