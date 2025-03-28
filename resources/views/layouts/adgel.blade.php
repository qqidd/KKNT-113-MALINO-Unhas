<x-app-layout>
    <div class="font-sans antialiased">
        <div class="flex flex-col md:flex-row">
            <!-- Sidebar -->
            <div class="w-full md:w-72 bg-hijau text-black min-h-screen p-4 md:block hidden">
            </div>
            <!-- Main Content -->
            <div class="flex-1 bg-hitam min-h-screen p-4 md:p-0">
                <main>
                    <div class="container mx-auto">
                        <!-- Notifikasi Sukses Tambah/Edit -->
                        @if(session('success'))
                        <div id="success-alert"
                            class="fixed top-5 right-5 bg-biru text-white px-6 py-3 rounded-lg shadow-lg text-lg font-bold opacity-0 transform translate-y-[-20px] transition-all duration-500">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if(session('deleted'))
                        <div id="delete-alert"
                            class="fixed top-5 right-5 bg-merahRM text-white px-6 py-3 rounded-lg shadow-lg text-lg font-bold opacity-0 transform translate-y-[-20px] transition-all duration-500">
                            {{ session('deleted') }}
                        </div>
                        @endif

                        <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            let successAlert = document.getElementById('success-alert');
                            let deleteAlert = document.getElementById('delete-alert');

                            if (successAlert) {
                                setTimeout(() => {
                                    successAlert.classList.remove('opacity-0', 'translate-y-[-20px]');
                                    successAlert.classList.add('opacity-100', 'translate-y-0');
                                }, 100);

                                setTimeout(() => {
                                    successAlert.classList.add('opacity-0', 'translate-y-[-20px]');
                                    setTimeout(() => successAlert.remove(), 500);
                                }, 3000);
                            }

                            if (deleteAlert) {
                                setTimeout(() => {
                                    deleteAlert.classList.remove('opacity-0', 'translate-y-[-20px]');
                                    deleteAlert.classList.add('opacity-100', 'translate-y-0');
                                }, 100);

                                setTimeout(() => {
                                    deleteAlert.classList.add('opacity-0', 'translate-y-[-20px]');
                                    setTimeout(() => deleteAlert.remove(), 500);
                                }, 3000);
                            }
                        });
                        </script>
                        <div class="mt-6 md:mt-10 m-4 md:m-10 text-white">
                            <h1 class="text-3xl md:text-4xl font-sora font-bold text-white bg-clip-text leading-tight">
                                Galeri
                            </h1>
                            <div class="flex items-center gap-2">
                                <div class="h-1 w-32 rounded-lg bg-gradient-to-r from-hijau to-biru"></div>
                                /<span class="text-hijau font-bold">Gallery Database</span>
                            </div>
                        </div>

                        <!-- Search Form -->
                        <div class="mt-6 md:mt-10 m-4 md:m-10 flex justify-center md:justify-end">
                            <form action="{{ route('adgel') }}" method="GET"
                                class="flex items-center space-x-2  w-full md:w-auto">
                                <input type="text" name="search" placeholder="Cari Foto..."
                                    value="{{ request('search') }}"
                                    class="px-3 py-2 border rounded w-full md:w-64 bg-hitam text-white placeholder-white text-sm">
                                <button type="submit"
                                    class="px-3 py-2 bg-biru text-white rounded flex items-center text-sm">
                                    <i class="fa fa-search mr-2"></i> Cari
                                </button>
                            </form>
                        </div>

                        <!-- Table -->
                        <div
                            class="mt-6 overflow-x-auto  max-w-[1200px] mx-auto scrollbar-hide scroll-smooth scroll-snap-x">
                            <table class="w-full border border-putihA text-sm md:text-base">
                                <thead>
                                    <tr class="bg-hitamKTK text-white text-center">
                                        <th class="p-2 border border-putihA">NO</th>
                                        <th class="p-2 border border-putihA">FOTO</th>
                                        <th class="p-2 border border-putihA">NAMA</th>
                                        <th class="p-2 border border-putihA">DESKRIPSI</th>
                                        <th class="p-2 border border-putihA">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($adminFoto->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-red-500 bg-hitam p-4 text-center">
                                            <i class="fa fa-exclamation-circle mr-2 text-red-500 animate-pulse"></i>
                                            Tidak ada hasil yang ditemukan.
                                        </td>
                                    </tr>
                                    @else
                                    @foreach ($adminFoto as $gambar)
                                    <tr class="bg-gray-hitamKTK text-white text-center">
                                        <td class="p-4 border border-putihA">{{ $loop->iteration }}</td>
                                        <td class="p-4 border border-putihA">
                                            <div
                                                class="w-12 h-12 md:w-16 md:h-16 bg-putihA rounded-full mx-auto overflow-hidden">
                                                <img src="{{ Storage::url($gambar->foto) }}" alt="{{ $gambar->nama }}"
                                                    class="w-full h-full object-cover">
                                            </div>
                                        </td>
                                        <td class="p-2 border border-putihA">{{ $gambar->nama }}</td>
                                        <td class="p-2 border border-putihA">{{ $gambar->deskripsi }}</td>
                                        <td class="p-2 border border-putihA space-x-2">
                                            <div class="flex justify-center space-x-2">
                                                <a href="{{ route('galeri_foto.edit', $gambar->id) }}"
                                                    class="bg-green-500 text-white px-3 py-1 rounded flex items-center">
                                                    <i class="fa fa-edit mr-2"></i>Edit
                                                </a>
                                                <form action="{{ route('galeri_foto.destroy', $gambar->id) }}"
                                                    method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-500 text-white px-3 py-1 rounded flex items-center">
                                                        <i class="fa fa-trash mr-1"></i>Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>

                        <!-- Button Tambah Data -->
                        <div class="flex m-4 md:m-14 justify-end md:justify-end mt-8 md:mt-12">
                            <a href="{{ route('galeri_foto.create') }}"
                                class="bg-blue-500 text-white px-3 py-2 rounded flex items-center shadow-lg hover:scale-110 hover:rotate-3 hover:text-hijau text-xs md:text-base">
                                <i class="fa fa-plus mr-1"></i> Tambah Data
                            </a>
                        </div>
                    </div>
                </main>
                <div class="mb-20 pb-20"></div>
            </div>
        </div>
    </div>
</x-app-layout>