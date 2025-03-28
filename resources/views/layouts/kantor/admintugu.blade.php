<x-app-layout>
    <div class="font-sans antialiased">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-72 bg-hijau text-black min-h-screen p-4 md:block hidden"></div>

            <!-- Main Content -->
            <div class="flex-1 bg-hitam min-h-screen p-4 md:p-0">
                <main>
                    <div class="container mx-auto">
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
                                Tugu
                            </h1>
                            <div class="flex items-center gap-2">
                                <div class="h-1 w-32 rounded-lg bg-gradient-to-r from-hijau to-biru"></div>
                                /<span class="text-hijau font-bold">Tugu Database</span>
                            </div>
                            <div class="mt-6 md:mt-10 m-4 md:m-10 flex justify-center md:justify-end">
                                <form action="{{ route('kantor.admintugu') }}" method="GET"
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
                        </div>

                        <div class="mt-6 overflow-x-auto max-w-[1200px] mx-auto scrollbar-hide scroll-smooth">
                            <table class="w-full border border-putihA text-sm md:text-base min-w-[600px]">
                                <thead>
                                    <tr class="bg-hitamKTK">
                                        <th class="p-2 border border-putihA text-white font-bold font-inter">NO</th>
                                        <th class="p-2 border border-putihA text-white font-bold font-inter">NAMA</th>
                                        <th class="p-2 border border-putihA text-white font-bold font-inter">DESKRIPSI
                                        </th>
                                        <th class="p-2 border border-putihA text-white font-bold font-inter">KATEGORI
                                        </th>
                                        <th class="p-2 border border-putihA text-white font-bold font-inter">FOTO</th>
                                        <th class="p-2 border border-putihA text-white font-bold font-inter">AKSI</th>
                                    </tr>
                                </thead>
                                @if($tugus->isEmpty())
                                <p class="text-red-500 bg-hitam p-4 rounded-lg shadow-md text-center">
                                    <i class="fa fa-exclamation-circle mr-2 text-red-500 animate-pulse"></i> Tidak ada
                                    hasil yang ditemukan.
                                </p>
                                @else
                                <tbody>
                                    @foreach ($tugus as $tugu)
                                    <tr class="bg-gray-hitamKTK">
                                        <td class="p-6 text-xl border border-putihA text-center text-white">
                                            {{ $loop->iteration }}</td>
                                        <td class="p-6 border border-putihA text-center text-white">
                                            {{ $tugu->nama }}
                                        </td>
                                        <td
                                            class="p-2 border pl-4 border-putihA text-white max-w-[300px] break-words overflow-hidden">
                                            <span class="md:hidden">{{ Str::limit($tugu->deskripsi, 50) }}</span>
                                            <span class="hidden md:block">{{ $tugu->deskripsi }}</span>
                                        </td>
                                        <td class="p-2 border pl-4 border-putihA text-white text-center">
                                            {{ $tugu->kategori }}
                                        </td>
                                        <td class="p-2 border border-putihA text-center">
                                            <img src="{{ Storage::url ($tugu->foto) }}" alt="Foto {{ $tugu->nama }}"
                                                class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 lg:w-20 lg:h-20 rounded-full mx-auto object-cover">
                                        </td>
                                        <td class="p-2 border border-putihA text-center">
                                            <div
                                                class="flex flex-col sm:flex-row justify-center sm:space-x-2 space-y-2 sm:space-y-0">
                                                <a href="{{ route('kantor.tugu_foto.edit', $tugu->id) }}"
                                                    class="bg-green-500 text-white px-4 py-2 text-sm sm:text-base rounded shadow-lg duration-200 hover:bg-green-600 flex items-center justify-center">
                                                    <i class="fa fa-edit mr-1"></i>Edit
                                                </a>
                                                <form action="{{ route('kantor.tugu_foto.destroy', $tugu->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-500 text-white px-4 py-2 text-sm sm:text-base rounded shadow-lg duration-200 hover:bg-red-600 flex items-center justify-center">
                                                        <i class="fa fa-trash mr-1"></i>Delete
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

                        <div
                            class="flex flex-col sm:flex-row m-6 sm:m-14 justify-between mt-6 sm:mt-12 space-y-3 sm:space-y-0 sm:space-x-4">
                            <!-- Tombol Kembali -->
                            <a href="{{ route('adkan') }}"
                                class="bg-gray-500 text-white px-6 py-3 text-sm sm:text-base rounded flex items-center justify-center shadow-lg transition-transform duration-300 hover:scale-110 hover:rotate-3 hover:text-hijau">
                                <i class="fa fa-arrow-left mr-1"></i> Kembali
                            </a>

                            <!-- Tombol Tambah Gambar -->
                            <a href="{{ route('kantor.tugu_foto.create') }}"
                                class="bg-blue-500 text-white px-6 py-3 text-sm sm:text-base rounded flex items-center justify-center shadow-lg transition-transform duration-300 hover:scale-110 hover:rotate-3 hover:text-hijau">
                                <i class="fa fa-plus mr-1"></i> Tambah gambar
                            </a>
                        </div>
                    </div>
                </main>
                <div class="mb-20 pb-20"></div>
            </div>
        </div>
    </div>
</x-app-layout>