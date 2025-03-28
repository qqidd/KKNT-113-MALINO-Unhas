@extends('app')

@section('title', 'Galeri')

@section('content')

<section>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 m-10 md:m-20">
        <div class="text-white text-center md:text-left" data-aos="fade-left">
            <h1
                class="mx-5 md:-mx-10 text-3xl font-sora font-bold text-transparent bg-gradient-to-t from-hijau to-biru bg-clip-text leading-tight">
                KKN-T UNHAS GEL. 113 <br class="hidden md:block"> DESA MALINO 2024-2025
            </h1>
            <p class="mt-6 text-xl">
                Universitas <span class="text-hijau font-bold">Hasanuddin</span>.
            </p>
            <p class="text-lg mt-4 font-sora text-putihT md:ml-10 max-w-md leading-relaxed">
                Berikut adalah cerita menarik tentang pengabdian KKN Unhas 113 di Kelurahan Malino dengan narasi yang
                lebih mendalam dan penuh semangat. 🎓🌿✨
            </p>
            <p class="text-lg font-sora text-putihT mt-4 italic">
                "Enjoy our memories together in Malino."
            </p>
        </div>
        <div class="flex items-center justify-center w-full" data-aos="fade-down">
            <div
                class="relative bg-hitamK h-64 w-full md:w-1/2 rounded-lg shadow-lg transform rotate-1 overflow-hidden border-gradient">
                <img src="images/kotak1.jpeg" alt="Deskripsi Profil Our"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-110" />
            </div>
        </div>
        <!-- edit ini jika p dari selamat datang d tambahkakn -->
        <div class="flex flex-row-reverse md:mr-64 -mt-8" data-aos="zoom-in">
            <div class="m-5 h-2 w-40 rounded-lg bg-gradient-to-r from-hijau to-biru animate-gradient"></div>
        </div>
    </div>

    <div class="mx-6 sm:mx-10 md:mx-20 text-putihT text-justify text-lg leading-normal tracking-tight hyphens-auto"
        data-aos="fade-up">
        <h2 class="text-2xl text-left font-bold">Pengabdian Tanpa Batas: Perjalanan KKN Unhas 113 di
            Kelurahan
            Malino</h2>
        <p class="ml-2 mt-2">
            Di tengah sejuknya udara pegunungan dan keindahan alam Malino yang memesona,
            <strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">Kuliah Kerja Nyata (KKN)
                Universitas Hasanuddin ke-113</strong>
            memulai kisah pengabdiannya. Sejak
            <strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">18 Desember 2024</strong>,
            para mahasiswa dengan penuh semangat melangkahkan kaki di Kelurahan Malino, membawa harapan untuk
            berkontribusi
            dan meninggalkan jejak bermakna bagi masyarakat setempat.
        </p>

        <h3 class="text-xl text-left font-semibold mt-6">Struktur Tim KKN 113: Sinergi dalam Pengabdian
        </h3>
        <p class="mt-2 ml-2">
            Di bawah bimbingan <strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">Dosen
                Pendamping KKN,
                Saharuddin, S.IP., M.Si.</strong>, tim KKN 113 bekerja dengan penuh dedikasi dan koordinasi yang solid.
            Kepemimpinan yang dipegang oleh <strong
                class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">Koordinator Desa,
                Muhammad Nur Allim</strong>, memastikan setiap program berjalan sesuai rencana.
        </p>
        <p class="ml-2">
            <strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">Bendahara, Qailah
                Virgianna Eka</strong>, mengelola keuangan dengan cermat,
            sementara <strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">Sekretaris,
                Sarah Zhafirah Hidayat</strong>, memastikan administrasi berjalan lancar.
            Tim juga didukung oleh <strong
                class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">Koordinator Humas, Ely Putri
                Jamila Darsyam</strong>,
            bersama anggotanya <strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">Suci
                Ramadani Darwawan</strong>, yang berperan dalam membangun
            hubungan baik dengan masyarakat.
        </p>
        <p class="ml-2">
            <strong class=" bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">Koordinator Publikasi
                dan
                Dokumentasi, Mutmainnah Gusman</strong>,
            bertanggung jawab dalam mengabadikan setiap momen berharga selama pengabdian.
            Di sisi lain, <strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">Koordinator
                Perlengkapan, Muhammad Alif Fahrezi P.</strong>,
            dan anggotanya <strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">Muhammad
                Rifky Aqid</strong>,
            memastikan kebutuhan logistik selalu terpenuhi.
        </p>

        <h3 class="text-xl text-left font-semibold mt-6">Program Unggulan: Meningkatkan Kesejahteraan dan Inovasi
            Teknologi</h3>
        <ul class="list-disc pl-5 mt-2 space-y-2">
            <li><strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">🌱 Peningkatan
                    Produktivitas Pertanian</strong>: Edukasi penggunaan alat pengukur pH tanah untuk hasil panen lebih
                optimal.</li>
            <li><strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">📍 Instalasi Papan
                    Penanda RT/RW</strong>: Memudahkan navigasi dan administrasi wilayah.</li>
            <li><strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">💡 Transformasi
                    Digital Desa</strong>: Sosialisasi pemasaran digital bagi UMKM dan petani lokal.</li>
            <li><strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">🏫 Pengabdian di
                    Sekolah Dasar</strong>: Pembelajaran interaktif untuk meningkatkan minat belajar siswa.</li>
            <li><strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">🩺 Sosialisasi Pola
                    Hidup Sehat</strong>: Edukasi gizi, kebersihan, dan olahraga untuk meningkatkan kualitas hidup
                masyarakat.</li>
            <li><strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">🏥 Revitalisasi
                    Posyandu</strong>: Restorasi posyandu agar terlihat bagus kepada masyarakat sekitar.</li>
            <li><strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">🌿 Teknologi
                    Biopori</strong>: Solusi inovatif dalam pengelolaan limbah organik dan kesuburan tanah.</li>
            <li><strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">📢 Promosi Wisata &
                    Hasil Panen Lokal</strong>: Mengangkat potensi wisata dan produk lokal Malino.</li>
            <li><strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">🚦 Keselamatan
                    Berkendara Usia Dini</strong>: Edukasi pentingnya keselamatan di jalan sejak dini.</li>
        </ul>

        <h3 class="text-xl font-semibold mt-6 text-left" data-aos="fade-up">Akhir Perjalanan: Kenangan Tak Terlupakan
        </h3>
        <p class="mt-2 ml-2" data-aos="fade-up">
            Setelah hampir dua bulan penuh menjalankan berbagai program, tibalah saatnya bagi tim KKN 113 untuk
            berpamitan pada
            <strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">12 Februari 2025</strong>.
            Air mata haru bercampur bangga mengiringi perpisahan antara mahasiswa dan masyarakat Malino. Banyak kisah,
            pengalaman, serta pelajaran hidup yang mereka bawa pulang—sebuah bukti bahwa pengabdian tidak hanya tentang
            memberi,
            tetapi juga tentang menerima pelajaran berharga dari kehidupan masyarakat yang mereka layani.
        </p>
        <p class="ml-2" data-aos="fade-up">
            <strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">KKN Unhas 113 di Kelurahan
                Malino</strong>
            bukan sekadar program wajib akademik, tetapi sebuah perjalanan penuh makna, pengorbanan, dan harapan.
            <strong class="bg-gradient-to-r from-hijau to-biru bg-clip-text text-transparent">Terima kasih, Malino
                Khususnya juga Batulapisi! Terima Kasih! Sampai jumpa di cerita pengabdian berikutnya! 🚀✨</strong>
        </p>
    </div>

    <div class="mt-10 bg-hitam">
        <div class="relative w-full max-w-[1440px] mx-auto h-[400px] sm:h-[500px] md:h-[600px] bg-gray-800 rounded-lg shadow-lg overflow-hidden"
            data-aos="zoom-in">
            <!-- Wrapper Slider -->
            <div id="sliderContainer" class="overflow-hidden relative w-full h-full">
                <div id="slider" class="flex w-full transition-transform duration-500 ease-in-out">
                    <div
                        class="relative flex-shrink-0 w-full h-[400px] sm:h-[500px] md:h-[600px] flex items-center justify-center">
                        <img src="images/slider1.jpg" alt="Gambar 1"
                            class="absolute inset-0 w-full h-full object-cover" />
                        <div
                            class="absolute top-10 left-5 sm:left-20 text-white text-sm sm:text-lg md:text-xl font-medium">
                            KKNT 113 KELURAHAN MALINO KEREN<br>-------------------------------
                        </div>
                        <div
                            class="absolute bottom-10 left-5 sm:left-20 text-white text-sm sm:text-lg md:text-xl font-medium">
                            SEMINAR HASIL KELURAHAN MALINO<br>LINGKUNGAN BATULAPISI_VILLA
                            MAWAR<br>-------------------------
                        </div>
                    </div>

                    <div
                        class="relative flex-shrink-0 w-full h-[400px] sm:h-[500px] md:h-[600px] flex items-center justify-center">
                        <img src="images/slider2.jpg" alt="Gambar 2"
                            class="absolute inset-0 w-full h-full object-cover" />
                        <div
                            class="absolute top-10 left-5 sm:left-20 text-white text-sm sm:text-lg md:text-xl font-medium">
                            KKNT 113 KELURAHAN MALINO MANTAP<br>-------------------------------
                        </div>
                        <div
                            class="absolute bottom-10 left-5 sm:left-20 text-white text-sm sm:text-lg md:text-xl font-medium">
                            PENGABDIAN DI SEKOLAH<br>SEKOLAH INPRES BATULAPISI & SD INPRES
                            TASSA'LA<br>-------------------------
                        </div>
                    </div>

                    <div
                        class="relative flex-shrink-0 w-full h-[400px] sm:h-[500px] md:h-[600px] flex items-center justify-center">
                        <img src="images/slider3.jpg" alt="Gambar 3"
                            class="absolute inset-0 w-full h-full object-cover" />
                        <div
                            class="absolute top-10 left-5 sm:left-20 text-white text-sm sm:text-lg md:text-xl font-medium">
                            KKNT 113 KELURAHAN MALINO LUAR BIASA<br>-------------------------------
                        </div>
                        <div
                            class="absolute bottom-10 left-5 sm:left-20 text-white text-sm sm:text-lg md:text-xl font-medium">
                            GOTONG ROYONG KEPADA MASYARAKAT SEKITAR<br>BATULAPISI<br>-------------------
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Kiri -->
            <button id="prev"
                class="absolute left-2 sm:left-4 top-1/2 transform -translate-y-1/2 bg-white shadow-lg rounded-full p-2 sm:p-4 hover:bg-gray-200 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="black"
                    class="w-4 h-4 sm:w-6 sm:h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Tombol Kanan -->
            <button id="next"
                class="absolute right-2 sm:right-4 top-1/2 transform -translate-y-1/2 bg-white shadow-lg rounded-full p-2 sm:p-4 hover:bg-gray-200 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="black"
                    class="w-4 h-4 sm:w-6 sm:h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <div class="relative flex flex-col items-center mt-20 h-screen">
            <!-- Teks di atas Kotak -->
            <h1 class="absolute top-0 text-2xl sm:text-3xl md:text-4xl font-bold text-white drop-shadow-lg text-center w-full"
                data-aos="fade-up">
                KULIAH KERJA NYATA 113 UNHAS
            </h1>

            <!-- Teks di bawah Kotak -->
            <p class="absolute bottom-[-130px] sm:bottom-[-100px] md:bottom-[-210px] text-sm sm:text-lg md:text-xl text-white mt-4 drop-shadow-md text-center w-full"
                data-aos="fade-down">
                PAMIT UNDUR DIRI, SEMOGA BERMANFAAT
            </p>

            <!-- Teks di kiri Kotak -->
            <p class="absolute left-0 top-2/3 transform -translate-y-1/2 text-sm sm:text-lg md:text-xl font-semibold text-white drop-shadow-md pl-8 sm:pl-40"
                data-aos="fade-left">
                DADAH!!!
            </p>

            <!-- Teks di kanan Kotak -->
            <p class="absolute right-0 top-2/3 transform -translate-y-1/2 text-sm sm:text-lg md:text-xl font-semibold text-white drop-shadow-md pr-4 sm:pr-40"
                data-aos="fade-left">
                BYE BYE!!!
            </p>


            <div>
                <!-- Kotak Gambar dengan Foreach -->
                <div class="flex justify-center items-center min-h-screen mt-10 px-4" data-aos="fade-up">
                    <div
                        class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2 sm:gap-4 md:gap-18 lg:gap-20 w-full max-w-screen-xl mt-20 mx-auto">
                        @php
                        $transformClasses = ['rotate-12', '-rotate-12', '', '', 'rotate-12', '-rotate-12', '', ''];
                        @endphp
                        @foreach($adminFoto as $index => $gambar)
                        @php
                        // Default rotasi berdasarkan pola
                        $transformClass = $transformClasses[$index % count($transformClasses)];

                        // Gambar ke-9, 10, 13, dan 14 tidak boleh miring
                        if (in_array($index + 1, [9, 10, 13, 14])) {
                        $transformClass = '';
                        }

                        // Gambar ke-11, 12, 15, dan 16 harus memiliki efek rotasi
                        if (in_array($index + 1, [11, 12, 15, 16])) {
                        $transformClass = $index % 2 == 0 ? 'rotate-12' : '-rotate-12';
                        }
                        @endphp
                        <div
                            class="w-full h-24 sm:h-28 md:h-36 bg-gradient-to-r from-red-500 to-gray-500 rounded-md transform {{ $transformClass }}">
                            <img src="{{ Storage::url($gambar->foto) }}" alt="{{ $gambar->nama }}"
                                class="w-full h-full object-cover rounded-md transition duration-500 hover:scale-110 hover:-rotate-3" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-40 pb-20">
            <!-- Tambah margin dan padding bawah -->
        </div>
    </div>

    <!-- Script Slider -->
    <script>
    let currentIndex = 0;
    const slides = document.querySelectorAll("#slider > div");
    const totalSlides = slides.length;
    const slider = document.getElementById("slider");

    document.getElementById("prev").addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlider();
    });

    document.getElementById("next").addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
    });

    function updateSlider() {
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }
    </script>

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