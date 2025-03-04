@extends('app')

@section('title', 'Hutan Pinus')

@section('content')
<section>

    @foreach ($hutans1 as $hutan)
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 m-20">
        <div class="text-white text-center md:text-left" data-aos="fade-left">
            <h1
                class="text-4xl md:text-5xl font-sora font-bold text-transparent bg-gradient-to-r from-hijau to-biru bg-clip-text leading-tight">
                {{ $hutan->nama }}
            </h1>
            <!-- Tambahkan link lokasi di bawah judul -->
            <a href="https://maps.app.goo.gl/9paPBRxbWCoBFkY76" target="_blank"
                class="text-biru hover:text-orangeM text-base font-semibold flex items-center gap-2 transition duration-300 hover:scale-105">
                <i class="fa fa-map-marker-alt"></i> Lihat Lokasi
            </a>
            <p class="text-putihT font-inter mt-4 md:mt-10 text-lg md:text-xl px-1"> Pesona Alam <span
                    class="text-hijau font-bold">{{ $hutan->nama }}</span>.</p>
            <p class="text-base md:text-lg mt-3 font-inter text-putihT ml-10 text-justify leading-7">
                {{ $hutan->deskripsi }}
            </p>
        </div>
        <div class="flex justify-center" data-aos="fade-down">
            <div
                class="relative h-64 w-full md:w-1/2 rounded-lg overflow-hidden p-1 bg-gradient-to-r from-hijau to-biru">
                <div class="bg-hitamK w-full h-full rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $hutan->foto) }}" alt="{{ $hutan->nama }}"
                        class="w-full h-full object-cover rounded-lg transition duration-500 ease-in-out transform hover:scale-105 hover:shadow-2xl" />
                </div>
            </div>
        </div>
        <div class="flex justify-center md:justify-end mt-5" data-aos="fade-up">
            <div class="h-2 w-40 rounded-lg bg-gradient-to-r from-hijau to-biru -mt-5"></div>
        </div>
    </div>
    @endforeach

    <div class="bg-hitam text-gray-300 font-inter p-6 md:p-10 mt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10" data-aos="fade-down">
            @foreach ($hutans2 as $hutan)
            <div class="bg-hitamK p-6 rounded-lg shadow-lg">
                <!-- Animasi -->
                <div class="flex justify-center mb-4 shadow-lg">
                    <img alt="{{ $hutan->nama }}"
                        class="w-full h-auto bg-hitamK rounded-lg aspect-[16/9] transform transition-transform duration-300 ease-in-out hover:scale-105"
                        src="{{ asset('storage/' . $hutan->foto) }}" />
                </div>

                <!-- Teks -->
                @php
                // Ambil semua data dan tentukan urutannya berdasarkan created_at atau ID
                $hutanList = \App\Models\Hutan::orderBy('created_at')->get();
                // Cari posisi data saat ini dalam daftar
                $index = $hutanList->search(fn($item) => $item->id === $hutan->id);
                // Tentukan warna berdasarkan urutan (genap: putih, ganjil: merah)
                $warna = $index % 2 == 0 ? 'text-hijau' : 'text-biru';
                @endphp
                <h2 class="text-xl font-semibold font-sora {{ $warna }} mb-2" data-aos="zoom-in">
                    {{ $hutan->nama }}
                </h2>

                @if(str_contains($hutan->deskripsi, '|'))
                <ul class="list-disc pl-5 space-y-2 text-putihT font-inter leading-relaxed" data-aos="fade-left">
                    @foreach(explode('|', $hutan->deskripsi) as $item)
                    <li class="pl-2">{{ $item }}</li>
                    @endforeach
                </ul>
                @else
                <p class="text-putihT font-inter text-justify leading-relaxed" data-aos="fade-left">
                    {{ $hutan->deskripsi }}</p>
                @endif
            </div>
            @endforeach
        </div>

        <div class="text-right mt-10 flex justify-end gap-4 items-center" data-aos="fade-up">
            <a class="text-biru text-lg font-semibold hover:text-hijau flex items-center gap-2"
                href="{{route('kelurahan')}}">
                <i class="fas fa-home"></i> <!-- Logo rumah -->
                Kelurahan
            </a>

            <span class="text-white">|</span> <!-- Simbol pemisah -->
            <div class="text-right">
                <a class="text-hijau text-lg font-semibold hover:text-biru" href="{{route('riss')}}">Selanjutnya
                    <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection