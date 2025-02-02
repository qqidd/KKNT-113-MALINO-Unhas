<hr class="border-t-2 border-hitamH my-4">
<footer class="relative bg-hitam text-white py-20">
    <div class="container mx-auto px-6 relative z-10">
        <!-- Konten Footer -->
        <div class="flex flex-col md:flex-row items-center justify-between">
            <!-- Kiri: Logo dan Informasi (Gambar dan Teks Berdampingan) -->
            <div class="flex ml-48">
                <!-- Gambar -->
                <img class="h-16 w-auto mr-4" src=" {{ asset('images/gambar5.png') }}" alt="">
                <!-- Teks -->
                <div>
                    <h2 class="text-xl font-bold font-IBMPlexSans">KKN TEMATIK 113</h2>
                    <p class="text-sm  font-bold font-IBMPlexSans">UNIVERSITAS HASANUDDIN</p>
                    <p class="text-sm mt-2 font-IBMPlexSans text-putihT">📍Kel. Malino, Kec. Tinggimoncong, Kab. Gowa
                    </p>
                    <p class="text-sm mt-2 font-IBMPlexSans text-putihT">📞 091432430295</p>
                    <p class="text-sm font-IBMPlexSans text-putihT">📞 (62) 81342339025</p>
                    <p class="text-sm mt-2 font-IBMPlexSans text-putihT">📧 muhrifkyaqid@gmail.com</p>
                </div>
            </div>

            <!-- Tengah: Menu -->
            <div class="flex flex-col md:flex-row items-center md:gap-8 text-sm mt-6 mr-48 md:mt-0">
                <a href="{{route('profile')}}" class="hover:underline font-IBMPlexSans font-bold text-base">Tentang
                    Malino</a>
                <a href="#" class="hover:underline font-IBMPlexSans font-bold text-base">Informasi Publik</a>
                <a href="#" class="hover:underline font-IBMPlexSans font-bold text-base">Kebijakan Privasi</a>
                <a href="#" class="hover:underline font-IBMPlexSans font-bold text-base">Layanan Terpadu</a>
                <a href="{{route('kontak')}}" class="hover:underline font-IBMPlexSans font-bold text-base">Kontak</a>
            </div>
        </div>

        <!-- Sosial Media di bawah menu -->
        <div class="flex items-center px-72 gap-4 mt-4">
            <a href="#" class="text-white hover:text-gray-400">
                <i class="fab fa-instagram text-2xl"></i>
            </a>
            <a href="#" class="text-white hover:text-gray-400">
                <i class="fab fa-facebook text-2xl"></i>
            </a>
            <a href="#" class="text-white hover:text-gray-400">
                <i class="fab fa-tiktok text-2xl"></i>
            </a>
        </div>
    </div>

    <!-- Logo Transparan di Latar Belakang -->
    <img src="{{ asset('images/gambar5.png') }}" alt="Logo Latar Belakang"
        class="absolute left-40 top-0 h-full object-contain opacity-10 z-0">
</footer>