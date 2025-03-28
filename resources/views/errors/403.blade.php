<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    body {
        background: linear-gradient(135deg, #2c7a7b, #2f855a);
        color: #fff;
        text-align: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        overflow: hidden;
        position: relative;
    }

    .error {
        font-size: 100px;
        font-weight: bold;
        color: #d4edda;
        text-shadow: 3px 3px 0px rgba(0, 0, 0, 0.3);
        animation: bounce 1.5s infinite alternate;
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    p {
        font-size: 20px;
        margin-top: -10px;
    }

    .forest {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 200px;
        background: url('https://i.imgur.com/GEWzL3H.png') repeat-x bottom;
        animation: moveForest 8s infinite linear;
    }

    @keyframes moveForest {
        0% {
            background-position: 0;
        }

        100% {
            background-position: -1000px;
        }
    }

    .leaf {
        position: absolute;
        width: 30px;
        height: 30px;
        background: rgba(144, 238, 144, 0.8);
        border-radius: 50%;
        animation: fall linear infinite;
    }

    @keyframes fall {
        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 1;
        }

        100% {
            transform: translateY(100vh) rotate(360deg);
            opacity: 0;
        }
    }
    </style>
</head>

<body>

    <div class="container error-container">
        <h1 class="error">403</h1>
        <h2 class="text-light">Akses Dilarang</h2>
        <p class="text-muted">Anda tidak memiliki izin untuk masuk ke hutan ini.</p>
        <a href="/" class="btn btn-light mt-3">Kembali ke Beranda</a>
    </div>

    <!-- Animasi hutan -->
    <div class="forest"></div>

    <!-- Daun berguguran -->
    <script>
    function createLeaf() {
        const leaf = document.createElement("div");
        leaf.classList.add("leaf");
        leaf.style.left = Math.random() * window.innerWidth + "px";
        leaf.style.animationDuration = Math.random() * 3 + 2 + "s";
        document.body.appendChild(leaf);
        setTimeout(() => leaf.remove(), 5000);
    }
    setInterval(createLeaf, 500);
    </script>

</body>

</html>