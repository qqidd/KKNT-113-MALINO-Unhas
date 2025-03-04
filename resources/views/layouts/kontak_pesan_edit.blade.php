<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pesan</title>
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
        max-width: 400px;
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
        <h1>Edit Pesan</h1>

        <!-- Form untuk Edit Data Pesan -->
        <form action="{{ route('kontak_pesan.update', $pesan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $pesan->nama_lengkap }}" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $pesan->email }}" required>

            <label for="subjek">Subjek:</label>
            <input type="text" name="subjek" id="subjek" value="{{ $pesan->subjek }}" required>

            <label for="isi_pesan">Isi Pesan:</label>
            <textarea name="isi_pesan" id="isi_pesan" required>{{ $pesan->isi_pesan }}</textarea>

            <button type="submit" class="btn btn-submit">Update Pesan</button>
            <a href="{{ route('layouts.adkon') }}" class="btn btn-back">Kembali</a>
        </form>
    </div>

</body>

</html>