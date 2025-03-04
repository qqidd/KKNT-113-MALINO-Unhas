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

    /* Background Animasi Hijau-Hitam */
    body {
        background: linear-gradient(-45deg, #003300, #000000, #004d00, #001a00);
        background-size: 400% 400%;
        animation: moveBg 10s infinite ease-in-out;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        color: white;
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
        background: rgba(0, 0, 0, 0.8);
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
    }

    input,
    textarea {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #004d00;
        border-radius: 8px;
        background: black;
        color: white;
        font-size: 16px;
        transition: border 0.3s ease-in-out;
    }

    input:focus,
    textarea:focus {
        border-color: #3BF686;
        outline: none;
    }

    .preview-container {
        margin-top: 10px;
        display: flex;
        justify-content: center;
    }

    img {
        width: 200px;
        height: auto;
        border-radius: 8px;
        border: 2px solid #3BF686;
    }

    .btn {
        display: inline-block;
        padding: 10px;
        font-size: 16px;
        border-radius: 8px;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        border: none;
        width: 100%;
        margin-top: 10px;
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
        <h1>Edit Foto</h1>

        <!-- Form untuk Edit Data Foto -->
        <form action="{{ route('kantor.tugu_foto.update', $tugu->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="nama">Nama Foto:</label>
            <input type="text" name="nama" id="nama" value="{{ $tugu->nama }}" required>

            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi" required>{{ $tugu->deskripsi }}</textarea>

            <label for="kategori">Kategori:</label>
            <select name="kategori" id="kategori" required>
                <option value="profil" {{ $tugu->kategori == 'profil' ? 'selected' : '' }}>Profil</option>
                <option value="wisata" {{ $tugu->kategori == 'wisata' ? 'selected' : '' }}>Wisata</option>
                <option value="lainnya" {{ $tugu->kategori == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
            </select>

            <label for="foto">Foto Baru:</label>
            <input type="file" name="foto" id="foto">
            <div class="preview">
                <img src="{{ asset('storage/' . $tugu->foto) }}" alt="Foto Lama">
            </div>

            <button type="submit" class="btn btn-submit">Update Foto</button>
            <a href="{{ route('kantor.admintugu') }}" class="btn btn-back">Kembali</a>
        </form>
    </div>

</body>

</html>