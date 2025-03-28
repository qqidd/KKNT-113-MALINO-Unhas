<hr class="border-t-2 border-hitamH my-4">
<footer class="relative bg-hitam text-white py-10 md:py-20">
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-wrap items-center justify-center md:justify-between text-center md:text-left">
            <div class="flex flex-col md:flex-row items-center md:ml-48 text-center md:text-left">
                <img class="h-16 w-auto mb-4 md:mb-16 md:mr-2" src="{{ asset('images/gambar5.png') }}" alt="Logo">
                <div>
                    <h2 class="text-lg md:text-xl font-bold font-IBMPlexSans">KKN TEMATIK 113</h2>
                    <p class="text-sm font-bold font-IBMPlexSans">UNIVERSITAS HASANUDDIN</p>
                    <p class="text-sm mt-2 font-IBMPlexSans text-putihT">📍 Kel. Malino, Kec. Tinggimoncong, Kab. Gowa
                    </p>
                    <p class="text-sm font-IBMPlexSans text-putihT">☎ 081342312267</p>
                    <p class="text-sm mt-2 font-IBMPlexSans text-putihT">📧 kel.malinokab.gowa@gmail.com</p>
                </div>
            </div>

            <!-- Menu -->
            <div class="flex flex-wrap justify-center md:mr-48 gap-4 mt-6 md:mt-0">
                <a href="{{route('profile')}}"
                    class="hover:underline font-IBMPlexSans font-bold text-sm md:text-lg">Tentang Malino</a>
                <a href="{{route('wisata')}}"
                    class="hover:underline font-IBMPlexSans font-bold text-sm md:text-lg">Informasi Publik</a>
                <a href="{{route('kebijakan')}}"
                    class="hover:underline font-IBMPlexSans font-bold text-sm md:text-lg">Kebijakan Privasi</a>
                <a href="{{route('layanan')}}"
                    class="hover:underline font-IBMPlexSans font-bold text-sm md:text-lg">Layanan Terpadu</a>
                <a href="{{route('kontak')}}"
                    class="hover:underline font-IBMPlexSans font-bold text-sm md:text-lg">Kontak</a>
            </div>
        </div>

        <!-- Sosial Media -->
        <div class="flex justify-center gap-6 mt-6">
            <a href="https://www.instagram.com/kknt113_desamalino?igsh=aDZkamc3emZiZDJn"
                class="text-white hover:text-gray-400 text-2xl" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/pages/Malino,%20Tinggimoncong,%20Gowa/416724161791966/#"
                class="text-white hover:text-gray-400 text-2xl" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.tiktok.com/@kknt113_desamalino?_t=8sV1ig9ZbFP&_r=1&fbclid=PAY2xjawIuuuhleHRuA2FlbQIxMQABpiHMwGYuQxFz1nNlb047rnKTc7UpDzwEItKgI04GMFCX3HJPgfjjBrP4zw_aem_rp3iicB9tmunQhJt6rOmyA"
                class="text-white hover:text-gray-400 text-2xl" target="_blank">
                <i class="fab fa-tiktok"></i>
            </a>
        </div>
    </div>

    <!-- Logo Transparan di Latar Belakang -->
    <img src="{{ asset('images/gambar5.png') }}" alt="Logo Latar Belakang"
        class="absolute left-1/2 md:left-60 top-0 transform -translate-x-1/2 md:translate-x-0 h-full object-contain opacity-10 z-0">
</footer>