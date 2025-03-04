<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Foto</title>
    <style>
    /* Reset Dasar */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    /* Background Animasi Hijau-Hitam */
    body {
        background: linear-gradient(-45deg, #003300, #000000, #004d00, #001a00);
        background-size: 400% 400%;
        animation: moveBg 10s infinite ease-in-out;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        color: white;
        text-align: center;
        padding: 20px;
    }

    @keyframes moveBg {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    /* Kotak Form */
    .container {
        background: rgba(0, 0, 0, 0.85);
        padding: 25px;
        border-radius: 12px;
        width: 90%;
        max-width: 450px;
        box-shadow: 0 4px 15px rgba(0, 255, 0, 0.4);
        backdrop-filter: blur(5px);
    }

    h1 {
        font-size: 22px;
        margin-bottom: 15px;
        color: #3BF686;
    }

    label {
        display: block;
        text-align: left;
        margin-top: 10px;
        font-size: 14px;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #3BF686;
        border-radius: 8px;
        background: black;
        color: white;
        font-size: 16px;
        transition: all 0.3s ease-in-out;
    }

    input:focus,
    textarea:focus {
        border-color: #3BF686;
        box-shadow: 0 0 8px rgba(0, 255, 0, 0.5);
        outline: none;
    }

    .btn {
        display: inline-block;
        padding: 12px;
        font-size: 16px;
        border-radius: 8px;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        border: none;
        width: 100%;
        margin-top: 15px;
        text-align: center;
    }

    .btn-submit {
        background-color: #3BF686;
        color: black;
        font-weight: bold;
    }

    .btn-submit:hover {
        background-color: #2ECC71;
        transform: translateY(-2px);
    }

    .btn-back {
        background-color: #6c757d;
        color: white;
    }

    .btn-back:hover {
        background-color: #5a6268;
        transform: translateY(-2px);
    }
    </style>
</head>

<body>

    <div class="container">
        <h1>Tambah Foto Baru</h1>

        <!-- Form untuk Input Data Foto -->
        <form action="{{ route('beranda_foto.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto" required>

            <label for="nama">Nama Foto:</label>
            <input type="text" name="nama" id="nama" required>

            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi" required></textarea>

            <div class="mb-4">
                <label for="link_maps" class="block text-gray-700 font-bold mb-2">Link Google Maps</label>
                <input type="url" id="link_maps" name="link_maps" value="{{ old('link_maps', $foto->link_maps ?? '') }}"
                    class="border rounded-lg px-3 py-2 w-full" required>
            </div>

            <button type="submit" class="btn btn-submit">Tambah Foto</button>
            <a href="{{ route('layouts.adkon') }}" class="btn btn-back">Kembali</a>
        </form>
    </div>

</body>

</html>