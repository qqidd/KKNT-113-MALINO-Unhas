@extends('app')

@section('title', 'Wisata')

@section('content')
<section>
    <div class="mx-3 md:mx-10 my-6 space-y-4 mt-10 md:mt-20">
        <h1
            class="text-2xl md:text-5xl font-sora font-bold text-transparent bg-gradient-to-b from-hijau to-biru bg-clip-text leading-tight">
            Wisata Populer Tinggimoncong
        </h1>
    </div>

    <div class="mx-3 md:mx-10 my-6 space-y-4 mt-6">
        <h5 class="text-bold text-white font-inter text-base md:text-lg">Search your tourist attraction</h5>
    </div>

    <div class="flex mx-3 md:mx-10 items-center bg-hitamS rounded-lg shadow-lg overflow-hidden h-auto">
        <form action="{{ route('wisata') }}" method="GET" class="flex w-full">
            <input type="text" name="search"
                class="p-3 md:p-4 h-12 md:h-18 w-full md:w-[1540px] focus:outline-none placeholder:italic placeholder:text-hitamF"
                placeholder="Type your favorite tourist attraction....." value="{{ request('search') }}">
            <button type="submit" class="p-3 md:p-4 text-hijau hover:text-hijau">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </form>
    </div>

    <div class="m-3 md:m-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mt-6 md:mt-10">
            @if($berandaFotos->isEmpty())
            <div class="m-2 animate-bounce">
                <p class="text-merahRM text-base md:text-lg mt-4">Oops! Tidak ada hasil yang ditemukan.</p>
            </div>
            @else

            @foreach ($berandaFotos as $gambar)
            <div class="bg-hitamK h-72 md:h-80 w-full rounded-lg p-4 md:p-6 relative shadow-lg overflow-hidden">
                <!-- Gambar di belakang teks -->
                <img src="{{ Storage::url($gambar->foto) }}" alt="{{ $gambar->nama }}"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg opacity-40" />
                <!-- Teks dan Konten -->
                <div class="relative z-10">
                    <h2 class="text-lg md:text-2xl font-bold font-sora text-white">{{$gambar->nama}}</h2>
                    <p class="text-putihT font-inter text-xs md:text-sm mt-3">{{$gambar->deskripsi}}</p>
                    <p class="text-putihT font-inter text-xs md:text-sm mt-3">
                        Kunjungi
                        <a href="{{ $gambar->link_maps }}" target="_blank" class="text-blue-400 hover:underline">
                            Wisata Tersebut
                        </a>
                    </p>
                </div>
                <!-- Rating dan Logo Bundar -->
                <div class="absolute bottom-3 md:bottom-4 left-4 md:left-6 flex items-center gap-2 md:gap-3 z-10">
                    <div class="w-6 md:w-8 h-6 md:h-8 rounded-full bg-white flex items-center justify-center">
                        <i class="fas fa-tree text-black text-sm md:text-lg"></i>
                    </div>
                    <span class="text-xs md:text-sm font-inter text-white">Tourist attraction</span>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection