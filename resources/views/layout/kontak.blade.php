@extends('app')

@section('title', 'Kontak')

@section('content')

<section>
    <div class="bg-hitamk text-white min-h-screen flex items-center justify-center mt-20 px-4">
        <div class="container mx-auto py-12">
            <div class="mb-8">
                <div class="flex items-center space-x-2 mb-10">
                    <div class="w-16 h-1 bg-biru"></div>
                    <div class="w-16 h-1 bg-hijau transform -rotate-45"></div>
                    <div class="w-16 h-1 bg-biru"></div>
                    <div class="w-16 h-1 bg-hijau transform -rotate-45"></div>
                    <div class="w-16 h-1 bg-biru"></div>
                    <div class="w-16 h-1 bg-hijau transform -rotate-45"></div>
                    <div class="w-16 h-1 bg-biru"></div>
                </div>
                <h1 class="text-5xl font-bold mt-20">Kontak Kami</h1>
                <p class="text-gray-400 mt-4 text-lg">Apakah anda memiliki pencarian untuk kami atau umpan balik?
                    Silakan klik kategori yang paling sesuai dan isi formulir untuk menghubungi kami.</p>
            </div>
            <div class="max-w-2xl bg-hitam shadow-lg p-10 rounded-lg border-2 border-black w-full lg:ml-40">
                {{-- Notifikasi --}}
                @if(session('success'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
                    class="bg-green-500 text-white p-3 rounded mb-4 shadow-lg border-l-4 border-green-700">
                    {{ session('success') }}
                </div>
                @endif
                @if(session('error'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
                    class="bg-red-500 text-white p-3 rounded mb-4 shadow-lg border-l-4 border-red-700">
                    {{ session('error') }}
                </div>
                @endif
                @if ($errors->any())
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
                    class="bg-red-500 text-white p-3 rounded mb-4 shadow-lg border-l-4 border-red-700">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('kontak_pesan.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="mb-6">
                        <label class="block text-white mb-3" for="name">Nama Lengkap <span
                                class="text-red-500">*</span></label>
                        <input
                            class="w-full p-4 h-14 bg-hitamKTK text-putihT rounded border border-black shadow-lg focus:border-hijau focus:outline-none"
                            type="text" name="nama_lengkap" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-white mb-3" for="email">Email <span
                                class="text-red-500">*</span></label>
                        <input
                            class="w-full p-4 h-14 bg-hitamKTK text-putihT rounded border border-black shadow-lg focus:border-biru focus:outline-none"
                            type="email" name="email" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-white mb-3" for="subject">Subjek <span
                                class="text-red-500">*</span></label>
                        <input
                            class="w-full p-4 h-14 bg-hitamKTK text-putihT rounded border border-black shadow-lg focus:border-hijau focus:outline-none"
                            type="text" name="subjek" required>
                    </div>
                    <div class="mb-6">
                        <label class="block text-white mb-3" for="message">Isi Pesan <span
                                class="text-red-500">*</span></label>
                        <textarea
                            class="w-full p-4 min-h-[200px] bg-hitamKTK text-putihT rounded border border-black shadow-lg focus:border-biru focus:outline-none"
                            name="isi_pesan" required></textarea>
                    </div>
                    <div class="text-left">
                        <button class="bg-green-500 text-white px-8 py-3 rounded hover:bg-green-600"
                            type="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
            <div class="flex justify-end mt-10 pr-2 md:pr-40 lg:pr-80 xl:pr-[44rem]">
                <div class="h-2 w-40 rounded-l bg-gradient-to-r from-blue-500 to-green-500"></div>
            </div>
        </div>
    </div>
</section>
@endsection