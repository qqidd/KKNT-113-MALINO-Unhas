@extends('app')

@section('title', 'Tugu')

@section('content')

<section>
    @foreach ($tugus1 as $tugu)
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 m-20">
        <div class="text-white text-center md:text-left" data-aos="fade-left">
            <h1
                class="text-4xl md:text-5xl font-sora font-bold text-transparent bg-gradient-to-r from-merahRM to-white bg-clip-text leading-tight">
                {{ $tugu->nama }} </h1>
            <!-- Tambahkan link lokasi di bawah judul -->
            <a href="https://maps.app.goo.gl/57KjhipRVcrCEZPN7" target="_blank"
                class="text-merahRM hover:text-white text-base font-semibold flex items-center gap-2 transition duration-300 hover:scale-105">
                <i class="fa fa-map-marker-alt"></i> Lihat Lokasi
            </a>
            <p class="font-inter text-putihT mt-6 md:mt-10 text-lg md:text-xl px-1 ">Keindahan <span
                    class="text-merahRM font-bold">{{ $tugu->nama }}</span>.
            </p>
            <p class="text-lg mt-3 font-inter text-putihT ml-10 text-justify leading-7">
                {{ $tugu->deskripsi }}
            </p> <!-- edit ini -->
        </div>
        <div class="flex justify-center" data-aos="fade-down">
            <!-- Wrapper dengan border gradient kuning-orange -->
            <div
                class="relative h-64 w-full md:w-1/2 rounded-lg overflow-hidden p-1 bg-gradient-to-r from-merahRM to-white">
                <!-- Inner div sebagai background utama -->
                <div class="bg-hitamK w-full h-full rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $tugu->foto) }}" alt="{{ $tugu->nama }}"
                        class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-110" />
                </div>
            </div>
        </div>
        <div class="flex justify-center md:justify-end mt-5" data-aos="fade-up">
            <div class="h-2 w-40 rounded-lg bg-gradient-to-r from-merahRM to-white -mt-5">
            </div>
            <!-- edit ini jika p dari selamat datang d tambahkakn -->
        </div>
    </div>
    @endforeach

    <div class="bg-hitam text-gray-300 font-inter p-6 md:p-10 mt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10" data-aos="fade-down">
            @foreach ($tugus2 as $tugu)
            <div class="bg-hitamK p-6 rounded-lg shadow-lg">
                <!-- Animasi -->
                <div class=" flex justify-center mb-4 shadow-lg">
                    <img alt="{{ $tugu->nama }}"
                        class="w-full h-auto bg-hitamK rounded-lg aspect-[16/9] transform transition-transform duration-300 ease-in-out hover:scale-105"
                        src="{{ asset('storage/' . $tugu->foto) }}" />
                </div>
                <!-- Teks -->
                @php
                // Ambil semua data dan tentukan urutannya berdasarkan created_at atau ID
                $tuguList = \App\Models\Tugu::orderBy('created_at')->get();
                // Cari posisi data saat ini dalam daftar
                $index = $tuguList->search(fn($item) => $item->id === $tugu->id);
                // Tentukan warna berdasarkan urutan (genap: putih, ganjil: merah)
                $warna = $index % 2 == 0 ? 'text-merahRM' : 'text-white';
                @endphp
                <h2 class="text-xl font-semibold font-sora {{ $warna }} mb-2" data-aos="zoom-in">
                    {{ $tugu->nama }}
                </h2>

                @if(str_contains($tugu->deskripsi, '|'))
                <ul class="list-disc pl-5 space-y-2 text-putihT font-inter leading-relaxed" data-aos="fade-left">
                    @foreach(explode('|', $tugu->deskripsi) as $item)
                    <li class="pl-2">{{ $item }}</li>
                    @endforeach
                </ul>
                @else
                <p class="text-putihT font-inter text-justify leading-relaxed" data-aos="fade-left">
                    {{ $tugu->deskripsi }}</p>
                @endif
            </div>
            @endforeach
        </div>

        <div class="text-right mt-10 flex justify-end gap-4 items-center" data-aos="fade-up">
            <a class="text-white text-lg font-semibold hover:text-merahRM" href="{{route('riss')}}">
                <i class="fas fa-chevron-left"></i> Sebelumnya
            </a>
            <span class="text-white">|</span> <!-- Simbol pemisah -->
            <a class="text-merahRM text-lg font-semibold hover:text-white" href="{{route('pasar')}}">Selanjutnya
                <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection