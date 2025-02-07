@extends('app')

@section('title', 'Home')

@section('content')

<section>
    <div class="grid grid-cols-2 m-20">
        <div class="text-white">
            <h1
                class="text-5xl font-inter font-bold text-transparent bg-gradient-to-r from-hijau to-biru bg-clip-text leading-tight">
                Sejarah Malino </h1>
            <p class="mt-10 text-xl m-1  "> Malino Terkenal karna <span class="text-hijau font-bold">apa?</span>.</p>
            <p class="text-lg mt-3 font-sora text-putihT ml-5 text-justify leading-8">
                Malino, selain terkenal dengan berbagai spot wisata yang menarik, juga dikenal sebagai kota bunga. Hal
                ini karena banyak tanaman bunga yang tumbuh subur di kawasan ini, menjadikan Malino sebagai tempat yang
                sangat indah untuk dinikmati.
            </p> <!-- edit ini -->
        </div>
        <div class="flex items-start w-full">
            <div
                class="bg-hitamK h-64 w-1/2 rounded-lg shadow-lg transform ml-64 relative border-8 border-hitamK overflow-hidden">
                <img src="images/profile.jpg" alt="Deskripsi Profil Our"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg transition-transform duration-500 ease-in-out hover:scale-110" />
            </div>
        </div>
        <div class=" flex flex-row-reverse mx-40">
            <div class="m-5 h-2 w-40 rounded-lg bg-gradient-to-r from-hijau to-biru mt-2 translate-x-48">
            </div>
            <!-- edit ini jika p dari selamat datang d tambahkakn -->
        </div>
    </div>

    <div>
        <p class="text-lg mt-3 font-inter text-putihT ml-24 text-justify leading-8 m-40"> Malino dalam bahasa
            Makassar berarti
            tidak berangin. Sebelum berganti nama menjadi Malino, penduduk
            setempat
            menyebut desa itu dengan sebutan Lapparak yang berarti datar.Kota Malino mulai dikenal dan semakin
            populer
            sejak zaman penjajahan Belanda, terutama setelah Gubernur Jenderal Caron pada tahun 1927 memerintah di
            "Celebes on Onderhorighodon" dan menjadikan Malino pada tahun 1927 sebagai tempat peristirahatan bagi
            pegawai pemerintah.<br>
            Malino pada zaman Tumannurunga (1320), tidak termasuk kerajaan gowa.diri sembilan Kasuwiang atau lebih
            populer disebut Kasuwiang Salapanga dikoordinasikan oleh Pacallaya. Kawasan Kasuwiang Kesembilan merupakan
            bagian dari: Kasuwiang Tombolo, Likuang, Samata, Parang-parang, Data, Agang Je'ne, Bisei, Kalling, dan
            Sero.
            Kawasan yang meliputi 9 kasuwiang ini tetap utuh sejak masa pemerintahan raja Gowa pertama Tumanurunga tahun
            1320 hingga raja Gowa V “Karapang ri Gowa” tahun 1420-1445 “Abd Razak Daeng Patunru. Setelah masa
            pemerintahan raja Gowa VI Tunatangkalopi, ada upaya untuk memperluas wilayahnya, dengan menaklukkan wilayah
            sekitarnya, Gowa Tallo akan menjadi Kerajaan Kembar.
            <br><br>
            Sumber :<a class="text-white focus:text-blue-500 active:text-blue-500 hover:text-biru"
                href="https://id.wikipedia.org/wiki/Malino,_Tinggimoncong,_Gowa">
                Malino, Tinggimoncong, Gowa </a>
        </p>
        p <div class=" m-10flex -mt-28 flex-row-reverse" style="margin-left: 1010px; margin-right: 1010px;">
            <div class="m-5 h-2 w-40 rounded-lg bg-gradient-to-r from-hijau to-biru mt-2 translate-x-48">
            </div>
            <!-- edit ini jika p dari selamat datang d tambahkakn -->
        </div>
    </div>
    <div>
        <h2 class="font-inter m-24 text-4xl font-bold text-transparent bg-gradient-to-r text-white mt-30">Lingkungan
            Kelurahan
            Malino </h2>
        <p class="font-inter m-10 px-24 -mt-16 text-white text-lg">Kelurahan Malino Terbagi menjadi 3
            Lingkungan:
            <br>
            1. &nbsp;Malino <br>
            2. Karampuang <br>
            3. Batulapisi
        </p>
    </div>
</section>

@endsection