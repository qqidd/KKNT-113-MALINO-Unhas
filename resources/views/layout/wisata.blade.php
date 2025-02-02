@extends('app')

@section('title', 'Wisata')

@section('content')
<section>
    <div class="mx-10 my-8 space-y-5 mt-20">
        <h1 class="text-5xl font-sora font-bold text-white">Wisata Populer Tinggimoncong</h1>
    </div>
    <div class="mx-10 my-8 space-y-5 mt-10">
        <h5 class="text-bold text-white font-inter text-lg">Search your tourist attraction
        </h5>
    </div>

    <div class="flex mx-10 items-center bg-hitamS rounded-lg shadow-lg overflow-hidden h-auto mr-10">
        <input type="text" class="p-4 h-18 w-full focus:outline-none placeholder:italic placeholder:text-hitamF"
            placeholder="Type your favorite tourist attraction.....">
        <button class="p-4 text-hijau hover:text-hijau">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <div class="grid grid-cols-2 gap-10 m-10">
        <div class="bg-hitamK h-72 w-full rounded-lg relative p-6 shadow-lg">
            <h3 class="font-sora font-bold text-white text-2xl">The River Malino</h3>
            <p class="font-inter text-putihT mt-4">
                Malino memiliki gunung-gunung yang kaya akan pemandangan batu kapur, pinus, dan tanaman tropis yang
                indah.
            </p>
            <span class="absolute bottom-4 left-6 bg-white w-6 h-6 rounded-full"></span>
            <div class="absolute bottom-4 right-6 flex items-center text-yellow-400">
                <span class="material-icons text-base">star</span>
                <span class="text-sm font-inter text-white ml-2">5 Stars</span>
            </div>
        </div>
        <div class="bg-hitamK h-72 w-full rounded-lg relative p-6 shadow-lg">
            <h3 class="font-sora font-bold text-white text-2xl">Malino Highlands</h3>
            <p class="font-inter text-putihT mt-4">
                Wisata kebun teh baru di Sulawesi Selatan yang menawarkan pemandangan indah dan hewan konservasi.
            </p>
            <span class="absolute bottom-4 left-6 bg-white w-6 h-6 rounded-full"></span>
            <div class="absolute bottom-4 right-6 flex items-center text-yellow-400">
                <span class="material-icons text-base">star</span>
                <span class="text-sm font-inter text-white ml-2">4.5 Stars</span>
            </div>
        </div>
        <div class="bg-hitamK h-72 w-full rounded-lg relative p-6 shadow-lg">
            <h3 class="font-sora font-bold text-white text-2xl">Air Terjun Takapala</h3>
            <p class="font-inter text-putihT mt-4">
                Malino juga menyimpan sejarah menarik yang dapat ditemukan di kampung tradisional sekitar.
            </p>
            <span class="absolute bottom-4 left-6 bg-white w-6 h-6 rounded-full"></span>
            <div class="absolute bottom-4 right-6 flex items-center text-yellow-400">
                <span class="material-icons text-base">star</span>
                <span class="text-sm font-inter text-white ml-2">4 Stars</span>
            </div>
        </div>
        <div class="bg-hitamK h-72 w-full rounded-lg relative p-6 shadow-lg">
            <h3 class="font-sora font-bold text-white text-2xl">Sierra Sky View</h3>
            <p class="font-inter text-putihT mt-4">
                Nikmati beragam makanan khas daerah dengan cita rasa yang autentik dan segar di Malino.
            </p>
            <span class="absolute bottom-4 left-6 bg-white w-6 h-6 rounded-full"></span>
            <div class="absolute bottom-4 right-6 flex items-center text-yellow-400">
                <span class="material-icons text-base">star</span>
                <span class="text-sm font-inter text-white ml-2">4.7 Stars</span>
            </div>
        </div>
        <div class="bg-hitamK h-72 w-full rounded-lg relative p-6 shadow-lg">
            <h3 class="font-sora font-bold text-white text-2xl">Hutan Pinus Malino</h3>
            <p class="font-inter text-putihT mt-4">
                Nikmati beragam makanan khas daerah dengan cita rasa yang autentik dan segar di Malino.
            </p>
            <span class="absolute bottom-4 left-6 bg-white w-6 h-6 rounded-full"></span>
            <div class="absolute bottom-4 right-6 flex items-center text-yellow-400">
                <span class="material-icons text-base">star</span>
                <span class="text-sm font-inter text-white ml-2">4.7 Stars</span>
            </div>
        </div>
        <div class="bg-hitamK h-72 w-full rounded-lg relative p-6 shadow-lg">
            <h3 class="font-sora font-bold text-white text-2xl">Puncak Kebun Teh Malino</h3>
            <p class="font-inter text-putihT mt-4">
                Nikmati beragam makanan khas daerah dengan cita rasa yang autentik dan segar di Malino.
            </p>
            <span class="absolute bottom-4 left-6 bg-white w-6 h-6 rounded-full"></span>
            <div class="absolute bottom-4 right-6 flex items-center text-yellow-400">
                <span class="material-icons text-base">star</span>
                <span class="text-sm font-inter text-white ml-2">4.7 Stars</span>
            </div>
        </div>
    </div>

</section>
@endsection