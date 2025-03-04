@extends('app')

@section('title', 'Wisata')

@section('content')
<section>
    <div class="mx-4 md:mx-10 my-8 space-y-5 mt-20">
        <h1
            class="text-3xl md:text-5xl font-sora font-bold text-transparent bg-gradient-to-b from-hijau to-biru bg-clip-text leading-tight">
            Wisata Populer Tinggimoncong
        </h1>
    </div>

    <div class="mx-4 md:mx-10 my-8 space-y-5 mt-10">
        <h5 class="text-bold text-white font-inter text-lg">Search your tourist attraction</h5>
    </div>

    <div class="flex mx-4 md:mx-10 items-center bg-hitamS rounded-lg shadow-lg overflow-hidden h-auto">
        <form action="{{ route('wisata') }}" method="GET" class="flex w-full">
            <input type="text" name="search"
                class="p-4 h-18 w-full md:w-[1540px] focus:outline-none placeholder:italic placeholder:text-hitamF"
                placeholder="Type your favorite tourist attraction....." value="{{ request('search') }}">
            <button type="submit" class="p-4 text-hijau hover:text-hijau">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </form>
    </div>

    <div class="m-4 md:m-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
            @if($berandaFotos->isEmpty())
            <div class="m-2 animate-bounce">
                <p class="text-merahRM text-lg mt-4">Oops! Tidak ada hasil yang ditemukan.</p>
            </div>
            @else

            @foreach ($berandaFotos as $gambar)
            <div class="bg-hitamK h-80 w-full rounded-lg p-6 relative shadow-lg overflow-hidden">
                <!-- Gambar di belakang teks -->
                <img src="{{ Storage::url($gambar->foto) }}" alt="{{ $gambar->nama }}"
                    class="absolute top-0 left-0 w-full h-full object-cover rounded-lg opacity-40" />
                <!-- Teks dan Konten -->
                <div class="relative z-10">
                    <h2 class="text-xl md:text-2xl font-bold font-sora text-white">{{$gambar->nama}}</h2>
                    <p class="text-putihT font-inter text-sm mt-4">{{$gambar->deskripsi}}</p>
                    <p class="text-putihT font-inter text-sm mt-4">
                        Kunjungi
                        <a href="{{ $gambar->link_maps }}" target="_blank" class="text-blue-400 hover:underline">
                            Wisata Tersebut
                        </a>
                    </p>
                </div>
                <!-- Rating dan Logo Bundar -->
                <div class="absolute bottom-4 left-6 flex items-center gap-3 z-10">
                    <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center">
                        <i class="fas fa-tree text-black text-lg"></i>
                    </div>
                    <span class="text-sm font-inter text-white">Tourist attraction</span>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection