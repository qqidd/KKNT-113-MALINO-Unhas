<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- mengimpor font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Bangers&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Sora:wght@100..800&display=swap"
        rel="stylesheet">
    <!-- warna -->
    <style>
    .custom-background {
        background-color: #272727;
    }
    </style>
    <!-- font -->
    <style>
    .sora-font {
        font-family: 'Sora', sans-serif;
    }

    .bangers-font {
        font-family: 'Bangers', cursive;
    }

    .plex-font {
        font-family: 'IBM Plex Sans', sans-serif;
    }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen custom-background">
    <section class="w-96 p-8 bg-gradient-to-b from-white to-green-400 shadow-lg rounded-lg">
        <div>
            <div class="flex items-center mb-6">
                <div class="text-2xl font-bold text-black sora-font">LOGIN</div>
            </div>
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/gambar1.png') }}" alt="Logo" class="h-24">
            </div>

            <x-validation-errors class="mb-4" />

            @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
            @endsession

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label for="email" class="block plex-font text-black">Email</label>
                    <input id="email"
                        class="block mt-1 w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                        type="email" name="email" required autofocus autocomplete="username">
                </div>

                <div class="mt-4">
                    <label for="password" class="block plex-font text-black">Password</label>
                    <input id="password"
                        class="block mt-1 w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                        type="password" name="password" required autocomplete="current-password">
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" class="mr-2">
                        <span class="text-sm plex-font text-gray-600">Remember me</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                    <a class="underline plex-font text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                    @endif

                    <button class="ms-4 p-2 text-white bg-blue-500 rounded hover:bg-blue-600 sora-font">Log in</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>