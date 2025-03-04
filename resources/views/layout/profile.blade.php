@extends('app')

@section('title', 'Profil')

@section('content')

<section class="px-5 md:px-32 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:pr-20">
        <div class="text-white" data-aos="fade-left">
            <h1
                class="text-5xl font-inter font-bold text-transparent bg-gradient-to-l from-hijau to-biru bg-clip-text leading-tight">
                Sejarah Malino
            </h1>
            <p class="mt-10 text-xl">Malino Terkenal karna <span class="text-hijau font-bold">apa?</span>.</p>
            <p class="text-lg mt-3 font-sora text-putihT text-justify leading-8">
                Malino, selain terkenal dengan berbagai spot wisata yang menarik, juga dikenal sebagai kota bunga. Hal
                ini karena banyak tanaman bunga yang tumbuh subur di kawasan ini, menjadikan Malino sebagai tempat yang
                sangat indah untuk dinikmati.
            </p>
        </div>

        <div class="flex justify-center md:justify-end w-full p-4" data-aos="fade-down">
            <div
                class="bg-hitamK w-full max-w-sm md:max-w-md lg:max-w-lg rounded-lg shadow-lg border-8 border-hitamK overflow-hidden">
                <img src="images/profile.jpg" alt="Deskripsi Profil Our"
                    class="w-full h-auto object-cover rounded-lg transition-transform duration-500 ease-in-out hover:scale-110" />
            </div>
        </div>

        <div class="flex justify-center md:justify-end w-full" data-aos="fade-up">
            <div
                class="m-5 h-2 w-40 rounded-lg max-w-md bg-gradient-to-r from-hijau to-biru mt-2 mx-auto md:mx-40 md:-mt-32 md:mr-2">
            </div>
        </div>
    </div>

    <div class="text-putihT md:pr-20">
        <p class="text-lg md:text-lg font-inter text-justify leading-8 m-20" data-aos="fade-left">
            Malino dalam bahasa Makassar berarti tidak berangin. Sebelum berganti nama menjadi Malino, penduduk setempat
            menyebut desa itu dengan sebutan Lapparak yang berarti datar. Kota Malino mulai dikenal dan semakin populer
            sejak zaman penjajahan Belanda, terutama setelah Gubernur Jenderal Caron pada tahun 1927 memerintah di
            "Celebes on Onderhorighodon" dan menjadikan Malino pada tahun 1927 sebagai tempat peristirahatan bagi
            pegawai pemerintah.
            <br><br>
            Malino pada zaman Tumannurunga (1320), tidak termasuk kerajaan Gowa. Kawasan yang meliputi 9 kasuwiang ini
            tetap utuh sejak masa pemerintahan raja Gowa pertama Tumanurunga tahun 1320 hingga raja Gowa V “Karapang ri
            Gowa” tahun 1420-1445 “Abd Razak Daeng Patunru”. Setelah masa pemerintahan raja Gowa VI Tunatangkalopi, ada
            upaya untuk memperluas wilayahnya, dengan menaklukkan wilayah sekitarnya, Gowa Tallo akan menjadi Kerajaan
            Kembar.
            <br><br>
            Sumber:
            <a class="text-white focus:text-blue-500 active:text-blue-500 hover:text-biru" data-aos="zoom-in"
                href="https://id.wikipedia.org/wiki/Malino,_Tinggimoncong,_Gowa" target="_blank"
                rel="noopener noreferrer">
                Malino, Tinggimoncong, Gowa
            </a>
        </p>

        <div class="flex justify-center md:justify-end w-full" data-aos="fade-up">
            <div
                class="m-5 h-2 w-40 rounded-lg max-w-md bg-gradient-to-r from-hijau to-biru mt-2 mx-auto md:mx-20 md:-mt-16 md:ml-32">
            </div>
        </div>
    </div>

    <div data-aos="fade-left" class="md:pr-20">
        <h2 class="font-inter m-10 text-4xl font-bold text-transparent bg-gradient-to-r text-white">
            Lingkungan Kelurahan Malino
        </h2>
        <p class="font-inter m-10 px-14 -mt-10 text-white text-lg">
            Kelurahan Malino Terbagi menjadi 3 Lingkungan:
            <br> 1. &nbsp;Malino
            <br> 2. Karampuang
            <br> 3. Batulapisi
        </p>
    </div>
</section>

@endsection