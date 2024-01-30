<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Creation d'un eleve</title>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Sidebar -->
    <aside class="bg-blue-800 text-white w-1/5 p-4 shadow-md min-h-screen">
        <h1 class="text-2xl font-bold mb-4 mt-32">Tableau de Bord</h1>
        <ul>
            <li class="mb-2 flex p-3 border rounded-lg">
                <svg class="mr-2 w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                </svg>
                <a href="{{ route('Home') }}" class="hover:text-gray-300">Référentiel</a>
            </li>
            <li class="mb-2 flex p-3 border rounded-lg">
                <svg class="mr-2 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
                <a href="{{ route('Eleves') }}" class="hover:text-gray-300">Élèves</a>
            </li>
            <li class="mb-2 flex p-3 border rounded-lg">
                <svg class="mr-2 w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
                <a href="#" class="hover:text-gray-300">Classes</a>
            </li>
            <li class="mb-2 flex p-3 border rounded-lg">
                <svg class="mr-2 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <a href="#" class="hover:text-gray-300">Paiement</a>
            </li>
            <li class="mb-2 flex p-3 border rounded-lg">
                <svg class="mr-2 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1 0 12.728 0M12 3v9" />
                </svg>

                <a href="#" class="hover:text-gray-300">Déconnexion</a>
            </li>
        </ul>
    </aside>
    <div class="w-4/5 p-10">
        <a class="flex items-center mb-6" href="{{ route('Eleves') }}" class="hover:text-gray-300"><svg class="mr-2 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
            </svg>
            Retour</a>
        <!-- Contenu de la page -->
        <h2 class="text-2xl font-bold mb-4">Enregister un Élève</h2>

        @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded-md mb-6 text-center font-bold text-lg shadow">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('eleves.store') }}" method="post">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4">
                    <label for="matricule" class="block text-sm font-semibold text-gray-600">Matricule</label>
                    <input type="text" name="matricule" id="matricule" class="border rounded-md px-3 py-2 w-full" required>
                </div>
                <div class="mb-4">
                    <label for="nom" class="block text-sm font-semibold text-gray-600">Nom de l'élève</label>
                    <input type="text" name="nom" id="nom" class="border rounded-md px-3 py-2 w-full" required>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4">
                    <label for="prenom" class="block text-sm font-semibold text-gray-600">Prénom de l'élève</label>
                    <input type="text" name="prenom" id="prenom" class="border rounded-md px-3 py-2 w-full" required>
                </div>

                <div class="mb-4">
                    <label for="date_naissance" class="block text-sm font-semibold text-gray-600">date de naissance</label>
                    <input type="date" name="date_naissance" id="date_naissance" class="border rounded-md px-3 py-2 w-full" required>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4">
                    <label for="lieu_naissance" class="block text-sm font-semibold text-gray-600">Lieu de naissance</label>
                    <input type="text" name="lieu_naissance" id="lieu_naissance" class="border rounded-md px-3 py-2 w-full" required>
                </div>
                <div class="mb-4">
                    <label for="adresse" class="block text-sm font-semibold text-gray-600">Adresse</label>
                    <input type="text" name="adresse" id="adresse" class="border rounded-md px-3 py-2 w-full" required>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4">
                    <label for="telephone" class="block text-sm font-semibold text-gray-600">Telephone</label>
                    <input type="text" name="telephone" id="telephone" class="border rounded-md px-3 py-2 w-full" required>
                </div>
                <div class="mb-4">
                    <label for="sexe" class="block text-sm font-semibold text-gray-600">Sexe</label>
                    <select name="sexe" id="sexe" class="border rounded-md px-3 py-2 w-full">
                        <option value="masculin">Masculin</option>
                        <option value="feminin">Féminin</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-gray-600">Email</label>
                    <input type="email" name="email" id="email" class="border rounded-md px-3 py-2 w-full" required>
                </div>
                <div class="mb-4">
                    <label for="nationalite" class="block text-sm font-semibold text-gray-600">Nationalite</label>
                    <input type="text" name="nationalite" id="nationalite" class="border rounded-md px-3 py-2 w-full" required>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">

                <div class="mb-4">
                    <label for="classe_id" class="block text-sm font-semibold text-gray-600">Classe</label>
                    <select name="classe_id" id="classe_id" class="border rounded-md px-3 py-2 w-full">
                        <option value="" disabled selected>Choisissez une classe</option>
                        @if(isset($classes))
                        @foreach ($classes as $classe)
                        <option value="{{ $classe->id }}">{{ $classe->nom }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="mb-4">
                    <label for="employe_id" class="block text-sm font-semibold text-gray-600">Employé</label>
                    <select name="employe_id" id="employe_id" class="border rounded-md px-3 py-2 w-full">
                        <option value="" disabled selected>Choisissez un employé</option>
                        @if(isset($employes))
                        @foreach ($employes as $employe)
                        <option value="{{ $employe->id }}">{{ $employe->nom }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>

            <div class="mb-4">
                <label for="photo" class="block text-sm font-semibold text-gray-600">Photo</label>
                <input type="file" name="photo" id="photo" class="border rounded-md px-3 py-2 w-full">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Sauvegarder</button>
        </form>
    </div>
</body>

</html>