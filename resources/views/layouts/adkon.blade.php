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
                        <div class="mt-6 md:mt-10 m-4 md:m-10 text-white">
                            <h1 class="text-3xl md:text-4xl font-sora font-bold text-white bg-clip-text leading-tight">
                                Kontak
                            </h1>
                            <div class="flex items-center gap-2">
                                <div class="h-1 w-32 rounded-lg bg-gradient-to-r from-hijau to-biru"></div>
                                /<span class="text-hijau font-bold">Contact Database</span>
                            </div>
                        </div>
                        <div class="mt-6 md:mt-10 m-4 md:m-10 flex justify-center md:justify-end">
                            <form action="{{ route('adkon') }}" method="GET"
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
                        <div
                            class="mt-6 overflow-x-auto  max-w-[1200px] mx-auto scrollbar-hide scroll-smooth scroll-snap-x">
                            <table class="w-full border border-putihA text-sm md:text-base">
                                <thead>
                                    <tr class="bg-hitamKTK text-white text-center">
                                        <th class="p-4 border border-putihA font-inter text-xl">NO</th>
                                        <th class="p-4 border border-putihA font-inter text-xl w-[300px]">Nama Lengkap
                                        </th>
                                        <th class="p-4 border border-putihA font-inter text-xl w-[150px]">Email</th>
                                        <th class="p-4 border border-putihA font-inter text-xl  w-[200px]">Subjek</th>
                                        <th class="p-4 border border-putihA font-inter text-xl w-[400px]">Isi Pesan</th>
                                        <th class="p-4 border border-putihA font-inter text-xl">Aksi</th>
                                        <!-- Tambah kolom aksi -->
                                    </tr>
                                </thead>
                                @if($pesan->isEmpty())
                                <p class="text-red-500 bg-hitam p-4 rounded-lg shadow-md text-center">
                                    <i class="fa fa-exclamation-circle mr-2 text-red-500 animate-pulse"></i> Tidak ada
                                    hasil yang ditemukan.
                                </p>
                                @else
                                @foreach ($pesan as $kontak)
                                <tbody>
                                    <tr class="bg-gray-hitamKTK">
                                        <td class="p-4 border border-putihA text-center text-white">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="p-4 border border-putihA text-white">
                                            {{ $kontak->nama_lengkap }}
                                        </td>
                                        <td class="p-4 border border-putihA text-white">{{ $kontak->email }}</td>
                                        <td class="p-8 border border-putihA text-white">{{ $kontak->subjek }}</td>
                                        <td class="p-4 border border-putihA text-white">{{ $kontak->isi_pesan }}</td>
                                        <td class="p-4 border border-putihA text-center">
                                            <div class="flex justify-center space-x-2">
                                                <a href="{{ route('kontak_pesan.edit', $kontak->id) }}"
                                                    class="shadow-lg bg-green-500 text-white px-3 py-1 rounded inline-block duration-200 active:bg-blue-500 active:text-green-500 flex items-center">
                                                    <i class="fa fa-edit mr-2"></i>Edit
                                                </a>
                                                <form action="{{ route('kontak_pesan.destroy', $kontak->id) }}"
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
                        <!-- Tombol Tambah di luar tabel -->
                        <div class="flex m-4 md:m-14 justify-end md:justify-end mt-8 md:mt-12">
                            <a href="{{ route('kontak_pesan.create') }}"
                                class="bg-blue-500 text-white px-3 py-2 rounded flex items-center shadow-lg hover:scale-110 hover:rotate-3 hover:text-hijau text-xs md:text-base">
                                <i class="fa fa-plus mr-1"></i> Tambah Data
                            </a>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>