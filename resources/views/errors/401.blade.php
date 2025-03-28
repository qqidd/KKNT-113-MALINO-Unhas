<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>401 - Unauthorized</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
        animation: fade 0.5s infinite alternate;
    }

    p {
        font-size: 20px;
        margin-top: -10px;
    }

    .tree {
        position: absolute;
        bottom: -50px;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        height: 200px;
        background: url('https://i.imgur.com/KxOlY85.png') no-repeat bottom center / cover;
        animation: float 4s infinite alternate ease-in-out;
    }

    @keyframes fade {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0.6;
        }
    }

    .forest {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 200px;
        background: url('https://i.imgur.com/GEWzL3H.png') repeat-x bottom;
        animation: moveForest 8s infinite linear;
    }

    .leaf {
        position: absolute;
        width: 30px;
        height: 30px;
        background: rgba(144, 238, 144, 0.8);
        border-radius: 50%;
        animation: fall linear infinite;
    }

    @keyframes shake {
        0% {
            transform: translateX(-5px);
        }

        100% {
            transform: translateX(5px);
        }
    }

    @keyframes float {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(15px);
        }
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
    <h1 class="error">401</h1>
    <p class="text-lg">Oops! Anda tersesat di hutan dan tidak memiliki izin untuk masuk ke sini.</p>
    <a href="{{ url('/') }}"
        class="mt-5 px-6 py-3 bg-white text-green-800 rounded-full shadow-md hover:bg-gray-200 transition">
        Kembali ke Beranda
    </a>

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