@extends('app')

@section('title', 'Kontak')

@section('content')

<section>
    <div class="bg-hitamk text-white min-h-screen flex items-center justify-center ml-10 mt-20">
        <div class="container mx-auto py-12 px-4">
            <div class="mb-8 m-10">
                <div class="flex item-center space-x-2 mb-10">
                    <div class="w-16 h-1 bg-biru"></div>
                    <div class="w-16 h-1 bg-hijau transform -rotate-45"></div>
                    <div class="w-16 h-1 bg-biru"></div>
                    <div class="w-16 h-1 bg-hijau transform -rotate-45"></div>
                    <div class="w-16 h-1 bg-biru"></div>
                    <div class="w-16 h-1 bg-hijau transform -rotate-45"></div>
                    <div class="w-16 h-1 bg-biru"></div>
                </div>
                <h1 class="text-5xl font-bold mt-20">Kontak Kami</h1>
                <p class="text-gray-400 mt-4 ml-10 text-lg">Apakah anda memiliki pencarian untuk kami atau umpan balik?
                    Silakan
                    klik
                    kategori yang paling sesuai dan isi formulir untuk menghubungi kami.</p>
            </div>
            <div class="max-w-2xl bg-hitam shadow-lg p-10 rounded-lg border-2 border-black ml-40">
                <form>
                    <div class="mb-6">
                        <!-- Jarak antar input diperbesar -->
                        <label class="block text-white mb-3" for="name">Nama Lengkap <span
                                class="text-red-500">*</span></label>
                        <input
                            class="w-full p-4 h-14 bg-hitamKTK text-putihT rounded border border-black shadow-lg focus:border-hijau focus:outline-none"
                            type="text" id="name" required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-white mb-3" for="email">Email <span
                                class="text-red-500">*</span></label>
                        <input
                            class="w-full p-4 h-14 bg-hitamKTK text-putihT rounded border border-black shadow-lg focus:border-biru focus:outline-none"
                            type="email" id="email" required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-white mb-3" for="subject">Subjek <span
                                class="text-red-500">*</span></label>
                        <input
                            class="w-full p-4 h-14 bg-hitamKTK text-putihT rounded border border-black shadow-lg focus:border-hijau focus:outline-none"
                            type="text" id="subject" required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-white mb-3" for="message">Isi Pesan <span
                                class="text-red-500">*</span></label>
                        <textarea
                            class="w-full p-4 min-h-[200px] bg-hitamKTK text-putihT rounded border border-black shadow-lg focus:border-biru focus:outline-none"
                            id="message" required></textarea>
                    </div>

                    <div class="text-left">
                        <button class="bg-green-500 text-white px-8 py-3 rounded hover:bg-green-600"
                            type="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
            <div class="flex justify-center ml-10 -mt-4">
                <!-- Geser sedikit dari kiri -->
                <div class="m-10 h-2 w-40 rounded-l bg-gradient-to-r from-blue-500 to-green-500 mt-10"></div>
            </div>

        </div>
    </div>
</section>

@endsection