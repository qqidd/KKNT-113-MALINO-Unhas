@extends('app')

@section('title', 'Wisata')

@section('content')
<section>

    <div class="grid grid-cols-2 m-20">
        <div class="text-white">
            <h1
                class="text-5xl font-sora font-bold text-transparent bg-gradient-to-r from-hijau to-biru bg-clip-text leading-tight">
                Hutan Pinus Malino</h1>
            <p class="mt-10 text-xl px-1 ">Pesona Alam Hutan Pinus <span class="text-hijau font-bold">Malino</span>.
            </p>
            <p class="text-lg mt-3 font-inter text-putihT ml-10 text-justify leading-7">
                Nikmati keindahan Hutan Pinus Malino, tempat yang penuh dengan pemandangan alam yang memukau.
                Dikelilingi pepohonan pinus yang hijau dan udara sejuk, hutan ini menawarkan suasana tenang yang
                sempurna untuk bersantai atau berfoto. Terletak dekat dengan Makassar, Hutan Pinus Malino adalah
                destinasi yang ideal untuk rekreasi keluarga dan para pencinta alam.

                Ayo, jelajahi Hutan Pinus Malino dan temukan kedamaian di tengah alam yang asli!
            </p> <!-- edit ini -->
        </div>
        <div class="flex items-start w-full">
            <div class="bg-hitamK h-64 w-1/2 rounded-lg shadow-lg transform mx-40 mt-28 relative border-4">
                <img src="images/kotak1.jpeg" alt="Deskripsi Profil Our"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg" />
            </div>
        </div>
        <div class="flex flex-row-reverse mx-40">
            <div class="m-5 h-2 w-40 rounded-lg bg-gradient-to-r from-hijau to-biru -mt-10 translate-x-44">
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
                        src="images/gambar6.jpg" />
                </div>
                <!-- Teks tetap berada di posisi semula -->
                <h2 class="text-xl font-semibold text-hijau mb-2">Penampilan</h2>
                <ul class="list-disc list-inside text-putihT space-y-2">
                    <li>Daya Tarik Utama: Tampilkan keunikan hutan pinus, seperti:</li>
                    <li>Lanskap yang indah dengan barisan pohon tinggi menjulang.</li>
                    <li>Udara segar dan suasana yang tenang, cocok untuk relaksasi.</li>
                    <li>Spot foto Instagramable, seperti jembatan kayu, hammock, atau ayunan.</li>
                    <li>Aktivitas Menarik: Promosikan kegiatan seperti trekking, bersepeda, piknik, camping, atau
                        fotografi.</li>
                </ul>
            </div>

            <!-- Card 2 -->
            <div class="bg-hitamK p-6 rounded-lg shadow-lg">
                <!-- Gambar dengan animasi saat hover -->
                <div class="flex justify-center mb-4 shadow-lg">
                    <img alt="Gambar 1"
                        class="w-full h-auto bg-hitamK rounded-lg aspect-[16/9] transform transition-transform duration-300 ease-in-out hover:scale-105"
                        src="images/gambar6.jpg" />
                </div>
                <!-- Teks tetap berada di posisi semula -->
                <h2 class="text-xl font-semibold mb-2 text-biru">Penampilan</h2>
                <ul class="list-disc list-inside space-y-2 text-putihT">
                    <li>Daya Tarik Utama: Tampilkan keunikan hutan pinus, seperti:</li>
                    <li>Lanskap yang indah dengan barisan pohon tinggi menjulang.</li>
                    <li>Udara segar dan suasana yang tenang, cocok untuk relaksasi.</li>
                    <li>Spot foto Instagramable, seperti jembatan kayu, hammock, atau ayunan.</li>
                    <li>Aktivitas Menarik: Promosikan kegiatan seperti trekking, bersepeda, piknik, camping, atau
                        fotografi.</li>
                </ul>
            </div>

            <!-- Card 3 -->
            <div class="bg-hitamK p-6 rounded-lg shadow-lg">
                <!-- Gambar dengan animasi saat hover -->
                <div class="flex justify-center mb-4 shadow-lg">
                    <img alt="Gambar 1"
                        class="w-full h-auto bg-hitamK rounded-lg aspect-[16/9] transform transition-transform duration-300 ease-in-out hover:scale-105"
                        src="images/gambar6.jpg" />
                </div>
                <!-- Teks tetap berada di posisi semula -->
                <h2 class="text-xl font-semibold mb-2 text-hijau">Penampilan</h2>
                <ul class="list-disc list-inside space-y-2 tetx-putihT">
                    <li>Daya Tarik Utama: Tampilkan keunikan hutan pinus, seperti:</li>
                    <li>Lanskap yang indah dengan barisan pohon tinggi menjulang.</li>
                    <li>Udara segar dan suasana yang tenang, cocok untuk relaksasi.</li>
                    <li>Spot foto Instagramable, seperti jembatan kayu, hammock, atau ayunan.</li>
                    <li>Aktivitas Menarik: Promosikan kegiatan seperti trekking, bersepeda, piknik, camping, atau
                        fotografi.</li>
                </ul>
            </div>
        </div>

        <div class="text-right mt-10 flex justify-end gap-4 items-center">
            <a class="text-biru text-lg font-semibold hover:text-hijau flex items-center gap-2"
                href="{{route('kelurahan')}}">
                <i class="fas fa-home"></i> <!-- Logo rumah -->
                Kelurahan
            </a>

            <span class="text-white">|</span> <!-- Simbol pemisah -->
            <div class="text-right">
                <a class="text-hijau text-lg font-semibold hover:text-biru" href="{{route('tugu')}}">Selanjutnya
                    <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
                </a>
            </div>

        </div>


    </div>
</section>

@endsection