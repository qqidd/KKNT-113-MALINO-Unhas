<x-app-layout>

    <div class="font-sans antialiased">
        <div class="flex">
            <div class="w-72 bg-hijau text-black min-h-screen p-4">
            </div>

            <!-- Main Content -->
            <div class="flex-1 bg-hitam min-h-screen">
                <main>
                    <div class="container mx-auto">
                        <div class="mt-10 m-10 text-white">
                            <h1
                                class="text-4xl font-sora font-bold text-transparent text-white bg-clip-text leading-tight">
                                Galeri
                            </h1>
                            <div class="flex items-center gap-2">
                                <div class="h-1 w-32 rounded-lg bg-gradient-to-r from-hijau to-biru"></div>
                                /<span class="text-hijau font-bold">Gallery Database</span>
                            </div>
                        </div>
                        <div class="mt-10 m-10 mb-6 flex justify-end">
                            <form action="{{ route('adgel') }}" method="GET" class="flex items-center space-x-2">
                                <input type="text" name="search" placeholder="Cari Foto..."
                                    value="{{ request('search') }}"
                                    class="px-4 py-2 border rounded w-64 bg-hitam text-white placeholder-white">
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-500 text-white rounded flex items-center">
                                    <i class="fa fa-search mr-2"></i> Cari
                                </button>
                            </form>
                        </div>
                        <div class="overflow-x-auto max-w-[1200px] mx-auto">
                            <table class="w-full border border-putihA">
                                <thead>
                                    <tr class="bg-hitamKTK">
                                        <th class="p-2 border border-putihA text-white font-bold font-inter">NO</th>
                                        <th class="p-2 border border-putihA text-white font-bold font-inter">FOTO</th>
                                        <th class="p-2 border border-putihA text-white font-bold font-inter">NAMA</th>
                                        <th class="p-2 border border-putihA text-white font-bold font-inter">DESKRIPSI
                                        </th>
                                        <th class="p-2 border border-putihA text-white font-bold font-inter">AKSI</th>
                                    </tr>
                                </thead>
                                @if($adminFoto->isEmpty())
                                <p class="text-red-500 bg-hitam p-4 rounded-lg shadow-md text-center">
                                    <i class="fa fa-exclamation-circle mr-2 text-red-500 animate-pulse"></i> Tidak ada
                                    hasil yang ditemukan.
                                </p>
                                @else
                                @foreach ( $adminFoto as $gambar )
                                <tbody>
                                    <tr class="bg-gray-hitamKTK">
                                        <td class="p-6 text-2xl border border-putihA text-center text-white">
                                            {{ $loop->iteration }}</td>
                                        <td class="p-6 border border-putihA text-center">
                                            <div class="w-16 h-16 bg-putihA rounded-full mx-auto overflow-hidden">
                                                <img src="{{ Storage::url($gambar->foto) }}" alt="{{ $gambar->nama }}"
                                                    class="w-full h-full rounded-full object-cover">
                                            </div>
                                        </td>
                                        <td class="p-2 border pl-4 border-putihA text-white">{{ $gambar->nama }}</td>
                                        <td class="p-2 border pl-4 border-putihA text-white">{{ $gambar->deskripsi }}
                                        </td>
                                        <td class="p-2 border border-putihA text-center space-x-2">
                                            <div class="flex justify-center space-x-2">
                                                <!-- Tombol Edit -->
                                                <a href="{{ route('galeri_foto.edit', $gambar->id) }}"
                                                    class="shadow-lg bg-green-500 text-white px-3 py-1 rounded inline-block duration-200 active:bg-blue-500 active:text-green-500 flex items-center">
                                                    <i class="fa fa-edit mr-2"></i>Edit
                                                </a>

                                                <!-- Form Hapus -->
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
                                </tbody>
                                @endforeach
                                @endif
                            </table>
                        </div>

                        <div class="flex m-14 justify-end mt-12">
                            <!-- Tombol Tambah Gambar -->
                            <a href="{{ route('galeri_foto.create') }}"
                                class="bg-blue-500 text-white px-4 py-2 rounded flex items-center shadow-lg transition-transform duration-300 hover:scale-110 hover:rotate-3 hover:text-hijau">
                                <i class="fa fa-plus mr-1"></i> Tambah Data
                            </a>
                        </div>

                    </div>
                </main>
                <div class="mb-20 pb-20">
                    <!-- Tambah margin dan padding bawah -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>