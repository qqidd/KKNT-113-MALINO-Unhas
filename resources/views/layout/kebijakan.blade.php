@extends('app')

@section('title', 'Kebijakan Privasi')

@section('content')
<section>
    <div class="bg-hitam text-white mt-20">
        <div class="flex flex-col items-center justify-center min-h-screen gap-8 container mx-auto px-4">
            <div class="relative bg-hitamKTK p-8 rounded-lg shadow-lg w-full max-w-4xl">
                <h1 class="text-4xl font-bold mb-4">Kebijakan Privasi</h1>
                <i class="text-sm">Terakhir diperbarui Senin, 2 Februari 2025</i>
                <p class="text-lg mt-4">Kami di website ini menghargai privasi Anda. Kebijakan Privasi ini menjelaskan
                    bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi Anda saat
                    mengunjungi atau menggunakan situs web kami.</p>
                <div id="glow-border" class="border-t-4 border-green-500 w-1/4 mt-4 transition-all duration-500"></div>
                <div class="absolute top-0 right-0 border-t-4 border-r-4 border-biru w-16 h-16"></div>
            </div>
            <script>
            function addGlowEffect() {
                const border = document.getElementById("glow-border");
                const box = document.getElementById("glow-box");
                setInterval(() => {
                    border.classList.toggle("shadow-[0_0_15px_#10b981]");
                    box.classList.toggle("shadow-[0_0_15px_#3b82f6]");
                }, 1000);
            }
            addGlowEffect();
            </script>

            <div class="relative bg-hitamKTK p-8 rounded-lg shadow-lg w-full max-w-3xl min-h-[600px]">
                <h2 class="text-xl font-semibold mb-4">1. Informasi yang Kami Kumpulkan</h2>
                <p class="text-lg">Kami mengumpulkan berbagai jenis informasi untuk menyediakan layanan terbaik bagi
                    pengunjung situs kami, seperti:</p>
                <ul class="list-disc list-inside ml-4 space-y-2">
                    <li class="text-lg">Informasi Pribadi: Nama, alamat email, dan informasi lainnya yang relevan.</li>
                    <li class="text-lg">Informasi Penggunaan: IP address, jenis perangkat, browser, dan halaman yang
                        diakses.</li>
                </ul>

                <h2 class="text-xl font-semibold mt-6 mb-4">2. Cara Kami Menggunakan Informasi</h2>
                <ul class="list-disc list-inside ml-4 space-y-2">
                    <li class="text-lg">Meningkatkan layanan kami, termasuk promosi dan informasi terkait desa dan
                        wisata.</li>
                    <li class="text-lg">Mengirimkan pembaruan dan informasi tentang destinasi wisata dan lingkungan.
                    </li>
                </ul>

                <h2 class="text-xl font-semibold mt-6 mb-4">3. Keamanan Informasi</h2>
                <p class="text-lg">Kami berkomitmen untuk melindungi informasi pribadi Anda menggunakan langkah-langkah
                    teknis dan organisasi yang sesuai.</p>

                <h2 class="text-xl font-semibold mt-6 mb-4">4. Hak Anda</h2>
                <ul class="list-disc list-inside ml-4 space-y-2">
                    <li class="text-lg">Mengakses dan memperbarui informasi pribadi Anda.</li>
                    <li class="text-lg">Menghapus atau membatasi penggunaan data Anda.</li>
                </ul>

                <h2 class="text-xl font-semibold mt-6 mb-4">5. Kontak Kami</h2>
                <ul class="list-disc list-inside ml-4 space-y-2">
                    <li class="text-lg">Email: [ kel.malinokab.gowa@gmail.com]</li>
                    <li class="text-lg">
                        Alamat: <span id="alamat" class="cursor-pointer text-biru hover:underline"
                            onclick="tampilkanAlamat()">Salin Lokasi</span>
                    </li>
                    <script>
                    function tampilkanAlamat() {
                        document.getElementById("alamat").innerText =
                            "[PVW3+XH2, Malino, Tinggimoncong, Gowa Regency, South Sulawesi 92174]";
                    }
                    </script>
                    <li class="text-lg">Nomor Telepon: [ (+62) 81342312267 ]</li>
                </ul>
                <div class="absolute bottom-0 right-0 border-t-4 border-r-4 border-biru w-16 h-16 rotate-90"></div>
            </div>
        </div>
        <div class="mb-40"></div>
    </div>
</section>
@endsection