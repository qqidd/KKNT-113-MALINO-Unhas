@extends('app')

@section('title', 'Kontak')

@section('content')
<section>

    <div class="bg-hitam text-white mt-20">
        <div class="flex flex-col items-center justify-center min-h-screen">
            <div class="relative bg-hitamKTK p-8 rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-3/4 mb-8">
                <h1 class="text-4xl font-bold mb-4">Layanan Informasi</h1>
                <p class="text-lg mb-4">Layanan ini mengintegrasikan berbagai fitur penting untuk mempermudah wisatawan
                    mendapatkan informasi dan melakukan aktivitas yang relevan:</p>
                <div class="border-t-4 border-hijau w-1/4 mt-4"></div>
                <div class="absolute top-0 right-0 h-full w-full">
                    <div class="absolute top-0 right-0 border-t-4 border-r-4 border-biru w-16 h-16"></div>
                </div>
            </div>

            <div class="relative -ml-64 bg-hitamKTK p-8 rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-1/2 h-[600px]">

                <h2 class="text-2xl font-semibold mb-4">Layanan Terpadu:</h2>
                <ol class="list-decimal list-inside space-y-4 pl-4">
                    <li class="text-xl">
                        <p class="font-semibold inline">Informasi Destinasi Wisata:</p>
                        <ul class="list-disc list-inside ml-4">
                            <li class="text-lg leading-10">Menampilkan Deskripsi dan Foto</li>
                            <li class="text-lg leading-10">Menunjukkan tempat lokasi seperti: link lokasi tempat</li>
                        </ul>
                    </li>
                    <li class="text-xl">
                        <p class="font-semibold text-xl inline">Fitur Interaktif</p>
                        <ul class="list-disc list-inside ml-4">
                            <li class="text-lg leading-10">Membantu wisatawan dengan informasi atau pertanyaan umum</li>
                            <li class="text-lg leading-10">Rekomendasi tempat</li>
                        </ul>
                    </li>
                    <li class="text-xl">
                        <p class="font-semibold text-xl inline">Pengguna Ulasan</p>
                        <ul class="list-disc list-inside ml-4">
                            <li class="text-lg leading-10">Pengguna bisa membaca dan mengirim ulasan</li>
                        </ul>
                    </li>
                    <li class="text-xl">
                        <p class="font-semibold text-xl inline">Media Sosial</p>
                        <ul class="list-disc list-inside ml-4">
                            <li class=" text-lg leading-10">Integrasi dengan media sosial untuk membagikan promosi</li>
                            <li class=" text-lg leading-10">Konten secara langsung</li>
                        </ul>
                    </li>
                </ol>
                <div class="absolute bottom-0 right-0 h-full w-full">
                    <div
                        class="absolute bottom-0 right-0 border-t-4 border-r-4 border-biru w-16 h-16 transform rotate-90">
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-40"></div>
    </div>
</section>

@endsection