<hr class="border-t-2 border-hitamH my-4">
<footer class="relative bg-hitam text-white py-20">
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-wrap items-center justify-center md:justify-between text-center md:text-left">
            <div class="flex items-center md:ml-48 flex-wrap">
                <img class="h-16 w-auto mr-4" src="{{ asset('images/gambar5.png') }}" alt="">
                <div>
                    <h2 class="text-xl font-bold font-IBMPlexSans">KKN TEMATIK 113</h2>
                    <p class="text-sm font-bold font-IBMPlexSans">UNIVERSITAS HASANUDDIN</p>
                    <p class="text-sm mt-2 font-IBMPlexSans text-putihT">📍Kel. Malino, Kec. Tinggimoncong, Kab. Gowa
                    </p>
                    <p class="text-sm mt-2 font-IBMPlexSans text-putihT">☎ (+62) 81342312267</p>
                    <p class="text-sm font-IBMPlexSans text-putihT">📞 081342312267</p>
                    <p class="text-sm mt-2 font-IBMPlexSans text-putihT">📧 kel.malinokab.gowa@gmail.com</p>
                </div>
            </div>

            <!-- Menu -->
            <div class="flex flex-wrap justify-center md:mr-48 gap-4 mt-6 md:mt-0">
                <a href="{{route('profile')}}"
                    class="hover:underline font-IBMPlexSans font-bold text-base text-lg">Tentang
                    Malino</a>
                <a href="{{route('wisata')}}"
                    class="hover:underline font-IBMPlexSans font-bold text-base text-lg">Informasi
                    Publik</a>
                <a href="{{route('kebijakan')}}"
                    class="hover:underline font-IBMPlexSans font-bold text-base text-lg">Kebijakan
                    Privasi</a>
                <a href="{{route('layanan')}}"
                    class="hover:underline font-IBMPlexSans font-bold text-base text-lg">Layanan
                    Terpadu</a>
                <a href="{{route('kontak')}}"
                    class="hover:underline font-IBMPlexSans font-bold text-base text-lg">Kontak</a>
            </div>
        </div>

        <!-- Sosial Media -->
        <div class="flex justify-center md:px-72 gap-4 mt-4">
            <a href="https://www.instagram.com/kknt113_desamalino?igsh=aDZkamc3emZiZDJn"
                class="text-white hover:text-gray-400" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-instagram text-2xl"></i>
            </a>
            <a href="https://www.facebook.com/pages/Malino,%20Tinggimoncong,%20Gowa/416724161791966/#"
                class="text-white hover:text-gray-400" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook text-2xl"></i>
            </a>
            <a href="https://www.tiktok.com/@kknt113_desamalino?_t=8sV1ig9ZbFP&_r=1&fbclid=PAY2xjawIuuuhleHRuA2FlbQIxMQABpiHMwGYuQxFz1nNlb047rnKTc7UpDzwEItKgI04GMFCX3HJPgfjjBrP4zw_aem_rp3iicB9tmunQhJt6rOmyA"
                class="text-white hover:text-gray-400" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-tiktok text-2xl"></i>
            </a>
        </div>
    </div>

    <!-- Logo Transparan di Latar Belakang -->
    <img src="{{ asset('images/gambar5.png') }}" alt="Logo Latar Belakang"
        class="absolute left-40 top-0 h-full object-contain opacity-10 z-0">
</footer>