<header class="font-inter text-stone-300 bg-hitam">
    <nav class="flex items-center justify-between px-5 md:px-10 py-4 relative">
        <!-- Logo -->
        <div class="text-white font-sora text-xl md:text-2xl font-bold">
            <h1>KELURAHAN MALINO</h1>
        </div>

        <!-- Menu Navigasi (Desktop) -->
        <div class="hidden md:flex space-x-10 font-semibold">
            <a href="{{route('home')}}"
                class="hover:text-white font-inter {{ request()->routeIs('home') ? 'text-hijau' : '' }}">BERANDA</a>
            <a href="{{route('profile')}}"
                class="hover:text-white font-inter {{ request()->routeIs('profile') ? 'text-hijau' : '' }}">PROFIL</a>
            <a href="{{route('wisata')}}"
                class="hover:text-white font-inter {{ request()->routeIs('wisata') ? 'text-hijau' : '' }}">WISATA</a>
            <a href="{{route('kelurahan')}}"
                class="hover:text-white font-inter {{ request()->routeIs('kelurahan') ? 'text-hijau' : '' }}">KANTOR</a>
            <a href="{{route('galeri')}}"
                class="hover:text-white font-inter {{ request()->routeIs('galeri') ? 'text-hijau' : '' }}">GALERI</a>
        </div>

        <!-- Tombol Menu -->
        <button id="menu-toggle"
            class="block md:hidden text-white focus:outline-none hover:text-hijau transition duration-300 z-50">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Dropdown Menu -->
        <div id="mobile-menu"
            class="fixed inset-0 bg-hitamK bg-opacity-95 text-white flex flex-col items-center space-y-5 justify-center z-40 transition-all duration-300">
            <button id="close-menu"
                class="absolute top-5 right-5 text-merahRM font-sora font-bold text-4xl hover:text-hijau z-50">X</button>
            <a href="{{route('home')}}" class="hover:text-hijau">BERANDA</a>
            <a href="{{route('profile')}}" class="hover:text-hijau">PROFIL</a>
            <a href="{{route('wisata')}}" class="hover:text-hijau">WISATA</a>
            <a href="{{route('kelurahan')}}" class="hover:text-hijau">KANTOR</a>
            <a href="{{route('galeri')}}" class="hover:text-hijau">GALERI</a>
        </div>
    </nav>

    <hr class="border-t-2 border-hitamH">
</header>

<!-- Script Toggle Menu -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    let menuToggle = document.getElementById("menu-toggle");
    let closeMenu = document.getElementById("close-menu");
    let menu = document.getElementById("mobile-menu");

    // Fungsi untuk menampilkan menu
    menuToggle.addEventListener("click", function() {
        console.log("Tombol menu ditekan");
        menu.classList.toggle("show");
    });

    // Fungsi untuk menutup menu saat tombol X ditekan
    closeMenu.addEventListener("click", function() {
        console.log("Tombol close ditekan");
        menu.classList.remove("show");
    });

    // Fungsi untuk menutup menu jika klik di luar menu
    document.addEventListener("click", function(event) {
        if (!menu.contains(event.target) && !menuToggle.contains(event.target) && menu.classList
            .contains("show")) {
            console.log("Klik di luar menu, menutup menu.");
            menu.classList.remove("show");
        }
    });
});
</script>