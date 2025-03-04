<x-app-layout>
    <div class="font-sans antialiased">
        <div class="flex">
            <div class="w-72 bg-hijau text-black min-h-screen p-4"></div>

            <!-- Main Content -->
            <div class="flex-1 bg-hitam min-h-screen">
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
                        <div class="mt-10 m-10 text-white">
                            <h1
                                class="text-4xl font-sora font-bold text-transparent text-white bg-clip-text leading-tight">
                                Pasar
                            </h1>
                            <div class="flex items-center gap-2">
                                <div class="h-1 w-32 rounded-lg bg-gradient-to-r from-hijau to-biru"></div>
                                /<span class="text-hijau font-bold">Market Database</span>
                            </div>
                            <div class="mt-10 m-10 mb-6 flex justify-end">
                                <form action="{{ route('kantor.adminpasar') }}" method="GET"
                                    class="flex items-center space-x-2">
                                    <input type="text" name="search" placeholder="Cari Foto..."
                                        value="{{ request('search') }}"
                                        class="px-4 py-2 border rounded w-64 bg-hitam text-white placeholder-white">
                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-500 text-white rounded flex items-center">
                                        <i class="fa fa-search mr-2"></i> Cari
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="overflow-x-auto max-w-[1200px] mx-auto">
                            <table class="w-full border border-putihA">
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
                                @if($pasars->isEmpty())
                                <p class="text-red-500 bg-hitam p-4 rounded-lg shadow-md text-center">
                                    <i class="fa fa-exclamation-circle mr-2 text-red-500 animate-pulse"></i> Tidak ada
                                    hasil yang ditemukan.
                                </p>
                                @else
                                <tbody>
                                    @foreach ($pasars as $pasar)
                                    <tr class="bg-gray-hitamKTK">
                                        <td class="p-6 text-2xl border border-putihA text-center text-white">
                                            {{ $loop->iteration }}</td>
                                        <td class="p-6 border border-putihA text-center text-white">
                                            {{ $pasar->nama }}
                                        </td>
                                        <td
                                            class="p-2 border pl-4 border-putihA text-white max-w-[300px] break-words overflow-hidden">
                                            {{ $pasar->deskripsi }}
                                        </td>
                                        <td class="p-2 border pl-4 border-putihA text-white text-center">
                                            {{ $pasar->kategori }}
                                        </td>
                                        <td class="p-2 border border-putihA text-center">
                                            <img src="{{ Storage::url ($pasar->foto) }}" alt="Foto {{ $pasar->nama }}"
                                                class="w-16 h-16 rounded-full mx-auto">
                                        </td>
                                        <td class="p-2 border border-putihA text-center">
                                            <div class="flex justify-center space-x-2">
                                                <a href="{{ route('kantor.pasar_foto.edit', $pasar->id) }}"
                                                    class="bg-green-500 text-white px-3 py-1 rounded shadow-lg duration-200 hover:bg-green-600">
                                                    <i class="fa fa-edit mr-1"></i>Edit
                                                </a>
                                                <form action="{{ route('kantor.pasar_foto.destroy', $pasar->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-500 text-white px-3 py-1 rounded shadow-lg duration-200 hover:bg-red-600">
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

                        <div class="flex m-14 justify-between mt-12">
                            <!-- Tombol Kembali -->
                            <a href="{{ route('adkan') }}"
                                class="bg-gray-500 text-white px-4 py-2 rounded flex items-center shadow-lg transition-transform duration-300 hover:scale-110 hover:rotate-3 hover:text-hijau">
                                <i class="fa fa-arrow-left mr-1"></i> Kembali
                            </a>

                            <!-- Tombol Tambah Gambar -->
                            <a href="{{ route('kantor.pasar_foto.create') }}"
                                class="bg-blue-500 text-white px-4 py-2 rounded flex items-center shadow-lg transition-transform duration-300 hover:scale-110 hover:rotate-3 hover:text-hijau">
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