@extends('app')

@section('title', 'Kontak')

@section('content')
<section>

    <div class="bg-hitam text-white mt-20">
        <div class="flex flex-col items-center justify-center min-h-screen">
            <div class="relative bg-hitamKTK p-8 rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-3/4 mb-8">
                <h1 class="text-4xl font-bold mb-4">Kebijakan Privasi</h1>
                <i class="" style="display: inline-block; transform: translateY(-14px);">Terakhir di perbarui Senin, 2
                    Februari 2025</i>
                <p class="text-lg mb-4">Kami di website ini menghargai privasi anda. Kebijakan Privasi ini menjelaskan
                    bagaimana kami mengumpulkan, menggunakan dan melindungi informasi pribadi yang anda berikan saat
                    mengunjungi atau menggunakan situs web kami yang bertujuan untuk menginformasikan tentang wisata,
                    lingkungan dan kelurahan.</p>
                <div class="border-t-4 border-hijau w-1/4 mt-4"></div>
                <div class="absolute top-0 right-0 h-full w-full">
                    <div class="absolute top-0 right-0 border-t-4 border-r-4 border-biru w-16 h-16"></div>
                </div>
            </div>

            <div class="relative -ml-64 bg-hitamKTK p-8 rounded-lg shadow-lg w-11/12 md:w-3/4 lg:w-1/2 min-h-[1000px]">

                <h2 class="text-xl font-semibold mb-4">1. Informasi yang kami Kumpulkan</h2>
                <ol class="list-decimal list-inside space-y-4 pl-4">
                    <p class="text-lg">
                    <p class="text-lg inline">Kami mengumpulkan berbagai jenis informasi untuk menyediakan
                        layanan terbaik bagi pengunjung situs kami, termasuk untuk mengenalkan berbagai tempat.
                        Jenis informasi yang kami kumpulkan antara lain:</p>
                    <ul class="list-disc list-inside ml-4">
                        <li class="text-lg">Informasi Pribadi: Kami mengumpulkan informasi pribadi yang anda tahu ketika
                            mengisi formulir di situs kami, seperti nama, alamat email, serta informasi lainnya yang
                            relevan dengan kegiatan informasi mengenai wisata, lingkungan dan kelurahan.
                        </li>
                        <li class="text-lg">Informasi Penggunaan: Kami dapat mengumpulkan informasi mengenai
                            cara anda mengakses dan menggunakan situs kami, seperti alamat IP, jenis perangkat yang
                            digunakan, jenis browser dan halaman yang di akses. ini membantu kami untuk meningkatkan
                            kualitas pengalaman anda di situs kami.
                        </li>
                    </ul>
                    </p>
                </ol>
                <h2 class="text-xl font-semibold mb-4">2. Cara kami menggunakan informasi</h2>
                <ol class="list-decimal list-inside space-y-4 pl-4">
                    <p class="text-lg">
                    <p class="text-lg inline">Kami menggunakan informasi yang kami kumpulkan untuk berbagai tujuan,
                        termasuk tetapi tidak terbatas pada:</p>
                    <ul class="list-disc list-inside ml-4">
                        <li class="text-lg">Menyediakan dan meningkatkan layanan kami, termasuk promosi dan informasi
                            terkait desa dan wisata.
                        </li>
                        <li class="text-lg">Mengirimkan informasi atau pembaruan terkait dengan layanan yang kami
                            tawarkan, termasuk tentang destinasi wisata, lingkungan arau program informasi tempat.
                        </li>
                    </ul>
                    </p>
                </ol>
                <h2 class="text-xl font-semibold mb-4">3. Pembagian informasi</h2>
                <ol class="list-decimal list-inside space-y-4 pl-4">
                    <p class="text-lg">
                    <p class="text-lg inline">Kami menghargai privasi anda dan tidak menjual atau menawarkan, menyewakan
                        informasi pribadi anda kepada pihak ketiga. Namun, kami dapat membagikan informasi Anda dalam
                        situs berikut:</p>
                    <ul class="list-disc list-inside ml-4">
                        <li class="text-lg">Penyediaan layanan: kami dapat membagikan informasi yang terdapat di tempat
                            Anda dalam menjalankan situs kami dengan memberikan kami izin dengan maksud kepatuhan hukum
                            dengan penyediaan layanan hosting.
                        </li>
                    </ul>
                    </p>
                </ol>
                <h2 class="text-xl font-semibold mb-4">4. Keamanan Informasi</h2>
                <ol class="list-decimal list-inside space-y-4 pl-4">
                    <p class="text-lg">
                    <p class="text-lg inline">Kami menghargai privasi anda dan tidak menjual atau menawarkan, menyewakan
                        informasi pribadi anda kepada pihak ketiga. Namun, kami dapat membagikan informasi Anda dalam
                        situs berikut:</p>
                    <ul class="list-disc list-inside ml-4">
                        <li class="text-lg">Kami berkomitmen untuk melindungi informasi pribadi Anda. Kami menggunakan
                            langkah-langkah teknis dan organisasi yang sesuai untuk menjaga informasi Anda aman dan
                            terlindungi dari akses yang tidak sah atau pengungkapan yang tidak sah.
                            Namun, harap diingat bahwa meskipun kami berusaha dengan sebaik mungkin untuk
                            melindungi
                            informasi Anda, tidak ada sistem transmisi data melalui internet yang sepenuhnya aman, dan
                            kami tidak dapat menjamin keamanan absolut.
                        </li>
                    </ul>
                    </p>
                </ol>
                <h2 class="text-xl font-semibold mb-4">5. Hak Anda</h2>
                <ol class="list-decimal list-inside space-y-4 pl-4">
                    <p class="text-lg">
                    <p class="text-lg inline">Tergantung pada hukum yang berlaku di negara tempat tinggal Anda, Anda
                        mungkin memiliki hak untuk:</p>
                    <ul class="list-disc list-inside ml-4">
                        <li class="text-lg">Mengakses informasi pribadi yang kami miliki tentang Anda.
                        </li>
                        <li class="text-lg">Memperbarui atau mengoreksi informasi pribadi yang kami simpan.
                        </li>
                        <li class="text-lg">Menghapus atau membatasi penggunaan informasi pribadi Anda.
                        </li>
                        <li class="text-lg">Menarik persetujuan untuk pemrosesan data pribadi Anda, jika persetujuan
                            tersebut diperlukan.
                        </li>
                    </ul>
                    <p class="text-lg inline">Jika Anda ingin mengakses atau memperbarui informasi pribadi Anda, atau
                        jika Anda memiliki pertanyaan mengenai penggunaan data Anda, Anda dapat menghubungi kami melalui
                        kontak yang disediakan di bawah ini.</p>
                    </p>
                </ol>
                <h2 class="text-xl font-semibold mb-4">6. Kebijakan Perubahan Privasi</h2>
                <ol class="list-decimal list-inside space-y-4 pl-4">
                    <p class="text-lg">
                    <p class="text-lg inline">Kami berhak untuk memperbarui atau mengubah Kebijakan Privasi ini kapan
                        saja. Jika kami melakukan perubahan, kami akan memperbarui tanggal "Terakhir Diperbarui" di
                        bagian atas kebijakan ini dan memposting versi terbaru di situs kami. Kami mendorong Anda untuk
                        secara berkala memeriksa halaman ini untuk mengetahui pembaruan kebijakan privasi.</p>
                    </p>
                </ol>
                <h2 class="text-xl font-semibold mb-4">7. Kontak Kami</h2>
                <ol class="list-decimal list-inside space-y-4 pl-4">
                    <p class="text-lg">
                    <p class="text-lg inline">Jika Anda memiliki pertanyaan atau kekhawatiran mengenai Kebijakan Privasi
                        ini, atau ingin mengajukan permintaan terkait informasi pribadi Anda, Anda dapat menghubungi
                        kami di:</p>
                    <ul class="list-disc list-inside ml-4">
                        <li class="text-lg">Email: [email@example.com]
                        </li>
                        <li class="text-lg">Alamat: [Alamat lengkap]
                        </li>
                        <li class="text-lg">Nomor Telepon: [Nomor telepon]
                        </li>
                    </ul>
                </ol>
                <div class="absolute bottom-0 right-0 h-full w-full">
                    <div
                        class="absolute bottom-0 right-0 border-t-4 border-r-4 border-biru w-16 h-16 transform rotate-90">
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-40"></div>
    </div>
</section>

@endsection