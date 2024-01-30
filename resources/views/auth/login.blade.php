<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Gestion Scolaire</title>
</head>
<body class="bg-gray-100 font-sans flex items-center justify-center h-screen">
    <div class="bg-white rounded-md shadow-md p-8 w-2/3 mx-auto">
        <h1 class="text-3xl font-semibold text-green-700 mb-6">Connexion</h1>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-4">
                <label class="font-semibold block" for="login">Votre identifiant</label>
                <input class="w-full h-10 border rounded-lg px-4" type="text" name="login" id="login" placeholder="Saisissez votre Login">
            </div>
            <div class="mb-4">
                <label class="font-semibold block" for="password">Mot de passe</label>
                <input class="w-full h-10 border rounded-lg px-4" type="password" name="password" id="password" placeholder="Saisissez votre mot de passe">
            </div>
            <button class="bg-blue-700 font-semibold hover:bg-blue-800 w-full text-white p-2 rounded-lg" type="submit">Se connecter</button>
        </form>
        <p class="text-center mt-4">Vous n'avez pas de compte ? <a href="{{ route('register') }}" class="text-blue-700 font-semibold">S'enregistrer</a></p>
    </div>
</body>
</html>
