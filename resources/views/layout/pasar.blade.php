@extends('app')

@section('title', 'Pasar')

@section('content')

<section>
    @foreach ($pasars1 as $pasar)
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 m-20">
        <div class="text-white text-center md:text-left" data-aos="fade-left">
            <h1
                class="text-4xl md:text-5xl font-sora font-bold text-transparent bg-gradient-to-r from-hijauM to-orangeM bg-clip-text leading-tight">
                {{ $pasar->nama }} </h1>
            <!-- Tambahkan link lokasi di bawah judul -->
            <a href="https://maps.app.goo.gl/zWBR4pUjXp5uykSKA" target="_blank"
                class="text-hijauM hover:text-orangeM text-base font-semibold flex items-center gap-2 transition duration-300 hover:scale-105">
                <i class="fa fa-map-marker-alt"></i> Lihat Lokasi
            </a>
            <p class="font-inter text-putihT mt-6 md:mt-10 text-lg md:text-xl px-1 ">Keindahan <span
                    class="text-orangeM font-bold">{{ $pasar->nama }}</span>.
            </p>
            <p class="text-lg mt-3 font-inter text-putihT ml-10 text-justify leading-7">
                {{ $pasar->deskripsi }}
            </p> <!-- edit ini -->
        </div>
        <div class="flex justify-center" data-aos="fade-down">
            <!-- Wrapper dengan border gradient kuning-orange -->
            <div
                class="relative h-64 w-full md:w-1/2 rounded-lg overflow-hidden p-1 bg-gradient-to-r from-hijauM to-orangeM">
                <!-- Inner div sebagai background utama -->
                <div class="bg-hitamK w-full h-full rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $pasar->foto) }}" alt="{{ $pasar->nama }}"
                        class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-110" />
                </div>
            </div>
        </div>
        <div class="flex justify-center md:justify-end mt-5" data-aos="fade-up">
            <div class="h-2 w-40 rounded-lg bg-gradient-to-r from-orangeM to-hijauM -mt-5">
            </div>
            <!-- edit ini jika p dari selamat datang d tambahkakn -->
        </div>
    </div>
    @endforeach

    <div class="bg-hitam text-gray-300 font-inter p-6 md:p-10 mt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10" data-aos="fade-down">
            @foreach ($pasars2 as $pasar)
            <div class="bg-hitamK p-6 rounded-lg shadow-lg">
                <!-- Animasi -->
                <div class=" flex justify-center mb-4 shadow-lg">
                    <img alt="{{ $pasar->nama }}"
                        class="w-full h-auto bg-hitamK rounded-lg aspect-[16/9] transform transition-transform duration-300 ease-in-out hover:scale-105"
                        src="{{ asset('storage/' . $pasar->foto) }}" />
                </div>
                <!-- Teks -->
                @php
                // Ambil semua data dan tentukan urutannya berdasarkan created_at atau ID
                $pasarList = \App\Models\Pasar::orderBy('created_at')->get();
                // Cari posisi data saat ini dalam daftar
                $index = $pasarList->search(fn($item) => $item->id === $pasar->id);
                // Tentukan warna berdasarkan urutan (genap: putih, ganjil: merah)
                $warna = $index % 2 == 0 ? 'text-hijauM' : 'text-orangeM';
                @endphp
                <h2 class="text-xl font-semibold font-sora {{ $warna }} mb-2" data-aos="zoom-in">
                    {{ $pasar->nama }}
                </h2>

                @if(str_contains($pasar->deskripsi, '|'))
                <ul class="list-disc pl-5 space-y-2 text-putihT font-inter leading-relaxed" data-aos="fade-left">
                    @foreach(explode('|', $pasar->deskripsi) as $item)
                    <li class="pl-2">{{ $item }}</li>
                    @endforeach
                </ul>
                @else
                <p class="text-putihT font-inter text-justify leading-relaxed" data-aos="fade-left">
                    {{ $pasar->deskripsi }}</p>
                @endif
            </div>
            @endforeach
        </div>

        <div class="text-right mt-10 flex justify-end gap-4 items-center" data-aos="fade-up">
            <a class="text-orangeM text-lg font-semibold hover:text-hijauM" href="{{route('tugu')}}">
                <i class="fas fa-chevron-left"></i> Sebelumnya
            </a>
            <span class="text-white">|</span> <!-- Simbol pemisah -->
            <a class="text-hijauM text-lg font-semibold hover:text-orangeM flex items-center gap-2"
                href="{{route('kelurahan')}}">
                <i class="fas fa-home"></i> <!-- Logo rumah -->
                Kelurahan
            </a>
        </div>
    </div>
</section>

@endsection