<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Inscription</title>
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md w-full sm:w-96">
            <h1 class="text-2xl font-semibold mb-6">Inscription</h1>

            @if(session('success'))
            <div class="bg-green-100 border-green-400 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
            @endif

            <form action="{{ route('register') }}" method="post">
                @csrf

                <div class="mb-4">
                    <label for="type" class="block text-gray-700 text-sm font-bold mb-2">Type</label>
                    <input type="text" name="type" id="type" class="border border-gray-300 p-2 w-full">
                    @error('type')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="login" class="block text-gray-700 text-sm font-bold mb-2">Login</label>
                    <input type="text" name="login" id="login" class="border border-gray-300 p-2 w-full">
                    @error('login')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Mot de passe</label>
                    <input type="password" name="password" id="password" required value="{{ old('password') }}" class="border border-gray-300 p-2 w-full">
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded w-full">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>