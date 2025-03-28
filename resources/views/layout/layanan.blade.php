@extends('app')

@section('title', 'Layanan Terpadu')

@section('content')
<section>
    <div class="bg-hitam text-white mt-20">
        <div class="flex flex-col items-center justify-center min-h-screen gap-8 container mx-auto px-4">
            <div class="relative bg-hitamKTK p-8 rounded-lg shadow-lg w-full max-w-4xl">
                <h1 class="text-4xl font-bold mb-4">Layanan Informasi</h1>
                <p class="text-lg">Layanan ini mengintegrasikan berbagai fitur penting untuk mempermudah wisatawan
                    mendapatkan informasi dan melakukan aktivitas yang relevan:</p>
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
                <h2 class="text-2xl font-semibold mb-4">Layanan Terpadu:</h2>
                <ol class="list-decimal list-inside space-y-4 pl-4">
                    <li class="text-xl font-semibold">Informasi Destinasi Wisata
                        <ul class="list-disc list-inside ml-4">
                            <li class="text-lg leading-7">Menampilkan Deskripsi dan Foto</li>
                            <li class="text-lg leading-7">Menunjukkan tempat lokasi seperti: link lokasi tempat</li>
                        </ul>
                    </li>
                    <li class="text-xl font-semibold">Fitur Interaktif
                        <ul class="list-disc list-inside ml-4">
                            <li class="text-lg leading-7">Membantu wisatawan dengan informasi atau pertanyaan umum</li>
                            <li class="text-lg leading-7">Rekomendasi tempat</li>
                        </ul>
                    </li>
                    <li class="text-xl font-semibold">Pengguna Ulasan
                        <ul class="list-disc list-inside ml-4">
                            <li class="text-lg leading-7">Pengguna bisa membaca dan mengirim ulasan</li>
                        </ul>
                    </li>
                    <li class="text-xl font-semibold">Media Sosial
                        <ul class="list-disc list-inside ml-4">
                            <li class="text-lg leading-7">Integrasi dengan media sosial untuk membagikan promosi</li>
                            <li class="text-lg leading-7">Konten secara langsung</li>
                        </ul>
                    </li>
                </ol>
                <div class="absolute bottom-0 right-0 border-t-4 border-r-4 border-biru w-16 h-16 rotate-90"></div>
            </div>
        </div>
        <div class="mb-40"></div>
    </div>
</section>
@endsection