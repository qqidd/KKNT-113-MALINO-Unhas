<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Foto</title>
    <style>
    /* Reset Dasar */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Arial', sans-serif;
    }

    /* Background dengan efek animasi ringan */
    body {
        background: radial-gradient(circle at center, #004d00 10%, #000000 90%);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    /* Efek Grid Tanpa Gambar */
    .background::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: 50px 50px;
        background-image: linear-gradient(rgba(0, 255, 0, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 255, 0, 0.05) 1px, transparent 1px);
        animation: moveBg 6s linear infinite;
        z-index: -1;
    }

    @keyframes moveBg {
        0% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(-50px, -50px);
        }
    }

    /* Kotak Form */
    .container {
        background: rgba(0, 0, 0, 0.9);
        padding: 25px;
        border-radius: 12px;
        width: 90%;
        max-width: 450px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0, 255, 0, 0.3);
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
        color: #b2ffb2;
    }

    input,
    textarea,
    select {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #004d00;
        border-radius: 8px;
        background: black;
        color: white;
        font-size: 16px;
        transition: border 0.3s ease-in-out, transform 0.2s ease-in-out;
    }

    input:focus,
    textarea:focus,
    select:focus {
        border-color: #3BF686;
        box-shadow: 0 0 8px rgba(0, 255, 0, 0.5);
        outline: none;
        transform: scale(1.03);
    }

    /* Preview Foto */
    .preview {
        margin-top: 15px;
        display: flex;
        justify-content: center;
    }

    .preview img {
        width: 150px;
        height: auto;
        border-radius: 8px;
        border: 2px solid #3BF686;
        transition: transform 0.3s ease-in-out;
    }

    .preview img:hover {
        transform: scale(1.05);
    }

    /* Tombol */
    .btn {
        display: block;
        padding: 12px;
        font-size: 16px;
        border-radius: 8px;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        border: none;
        width: 100%;
        margin-top: 10px;
        font-weight: bold;
        text-align: center;
    }

    .btn-submit {
        background-color: #3BF686;
        color: black;
    }

    .btn-submit:hover {
        background-color: #2ECC71;
        transform: translateY(-2px);
    }

    .btn-back {
        background-color: transparent;
        color: #3BF686;
        border: 2px solid #3BF686;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .btn-back:hover {
        background-color: #3BF686;
        color: black;
        transform: translateY(-2px);
    }

    .btn-back svg {
        width: 18px;
        height: 18px;
        fill: currentColor;
    }
    </style>
</head>

<body>

    <!-- Latar belakang animasi grid ringan -->
    <div class="background"></div>

    <div class="container">
        <h1>Edit Foto</h1>

        <!-- Form Edit Foto -->
        <form action="{{ route('profil_foto.update', $foto->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="foto">Foto Baru:</label>
            <input type="file" name="foto" id="foto">

            <!-- Preview Foto Lama -->
            <div class="preview">
                <img src="{{ asset('storage/' . $foto->foto) }}" alt="Foto Lama">
            </div>

            <label for="nama">Nama Foto:</label>
            <input type="text" name="nama" id="nama" value="{{ $foto->nama }}" required>

            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi" required>{{ $foto->deskripsi }}</textarea>

            <label for="kategori">Kategori:</label>
            <select name="kategori" id="kategori" required>
                <option value="profil" {{ $foto->kategori == 'profil' ? 'selected' : '' }}>Profil</option>
                <option value="wisata" {{ $foto->kategori == 'wisata' ? 'selected' : '' }}>Wisata</option>
                <option value="lainnya" {{ $foto->kategori == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
            </select>

            <button type="submit" class="btn btn-submit">Update Foto</button>

            <!-- Tombol Kembali -->
            <a href="{{ route('layouts.adkon') }}" class="btn btn-back">
                <svg viewBox="0 0 24 24">
                    <path d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali
            </a>
        </form>
    </div>

</body>

</html>