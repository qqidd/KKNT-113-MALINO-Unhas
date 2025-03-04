<x-app-layout>

    <div class="font-sans antialiased">
        <div class="flex">
            <div class="w-72 bg-hijau text-black min-h-screen p-4">
            </div>

            <!-- Main Content -->
            <div class="flex-1 bg-hitam min-h-screen text-white p-8">
                <div class="container mx-auto">
                    <h1 class="text-4xl font-sora font-bold text-transparent text-white bg-clip-text leading-tight">
                        Kontak
                    </h1>
                    <div class="flex items-center gap-2">
                        <div class="h-1 w-32 rounded-lg bg-gradient-to-r from-hijau to-biru"></div>
                        /<span class="text-hijau font-bold">Contact Database</span>
                    </div>
                    <div class="mt-10 m-10 mb-6 flex justify-end">
                        <form action="{{ route('adkon') }}" method="GET" class="flex items-center space-x-2">
                            <input type="text" name="search" placeholder="Cari Email..." value="{{ request('search') }}"
                                class="px-4 py-2 border rounded w-64 bg-hitam text-white placeholder-white">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded flex items-center">
                                <i class="fa fa-search mr-2"></i> Cari
                            </button>
                        </form>
                    </div>
                    <div class="overflow-x-auto max-w-[1200px] mx-auto">
                        <table class="w-full border border-putihA">
                            <thead class="bg-hitamKTK">
                                <tr>
                                    <th class="p-4 border border-putihA font-inter text-xl">NO</th>
                                    <th class="p-4 border border-putihA font-inter text-xl w-[300px]">Nama Lengkap</th>
                                    <th class="p-4 border border-putihA font-inter text-xl w-[150px]">Email</th>
                                    <th class="p-4 border border-putihA font-inter text-xl">Subjek</th>
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
                                <tr class="border border-putihA">
                                    <td class="p-4 text-center border-r font-bold text-lg border-putihA">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="p-4 border-r border-putihA">{{ $kontak->nama_lengkap }}</td>
                                    <td class="p-4 border-r border-putihA">{{ $kontak->email }}</td>
                                    <td class="p-4 border-r border-putihA">{{ $kontak->subjek }}</td>
                                    <td class="p-4 border-r border-putihA">{{ $kontak->isi_pesan }}</td>
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
                        <!-- Tombol Tambah di luar tabel -->
                        <div class="flex m-14 justify-end mt-12">
                            <a href="{{ route('kontak_pesan.create') }}"
                                class="bg-blue-500 text-white px-4 py-2 rounded flex items-center shadow-lg transition-transform duration-300 hover:scale-110 hover:rotate-3 hover:text-hijau">
                                <i class="fa fa-plus mr-1"></i> Tambah Data
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>