<header class="font-inter text-stone-300">
    <nav class="flex items-center mx-auto justify-between px-2 m-7">
        <div class="flex items-center ml-10 text-white font-sora text-xl font-bold">
            <h1>KKNT 113 MALINO</h1>
        </div>
        <div class="flex flex-row space-x-16 mr-10">
            <a href="{{route('home')}}"
                class="hover:text-white font-inter {{ request()->routeIs('home') ? 'text-hijau' : '' }}">Home</a>
            <a href="{{route('profile')}}"
                class="hover:text-white font-inter {{ request()->routeIs('profile') ? 'text-hijau' : '' }}">Profile</a>
            <a href="{{route('wisata')}}"
                class="hover:text-white font-inter {{ request()->routeIs('wisata') ? 'text-hijau' : '' }}">Wisata</a>
            <a href="{{route('kelurahan')}}"
                class="hover:text-white font-inter {{ request()->routeIs('kelurahan') ? 'text-hijau' : '' }}">Kelurahan
                Malino</a>
            <a href="{{route('galeri')}}"
                class="hover:text-white font-inter {{ request()->routeIs('galeri') ? 'text-hijau' : '' }}">Galery</a>
        </div>
    </nav>
    <hr class="border-t-2 border-hitamH my-4">
</header>