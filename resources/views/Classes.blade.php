<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des classes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
    <div class="w-4/5 p-8">
        <h1 class="text-2xl font-bold mb-4">Gestion des classes</h1>

        <!-- Formulaire pour ajouter une classe -->
        <form action="{{ route('classes.store') }}" method="post" class="mb-6">
            @csrf
            <div class="flex items-center mb-4">
                <input type="text" name="nom" id="nom" placeholder="Nom de la classe" class="w-full px-4 py-2 border rounded-md mr-2">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Ajouter Classe</button>
            </div>
        </form>

        <!-- Liste des classes -->
        <div>
            <h2 class="text-lg font-bold mb-2">Liste des classes</h2>
            <ul>
                @foreach($classes as $classe)
                <!-- Dans votre boucle d'affichage des classes -->
                <li id="classe-{{ $classe->id }}" class="flex items-center justify-between px-4 py-2 bg-white shadow rounded-md mb-2">
                    <span>{{ $classe->nom }}</span>
                    <div>
                        <a href="{{ route('classes.edit', ['classe' => $classe->id]) }}" class="px-2 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 mr-2">Modifier</a>

                        <!-- Ajout du bouton de suppression -->
                        <button onclick="deleteClasse({{ $classe->id }})" class="px-2 py-1 bg-red-500 text-white rounded-md hover:bg-red-600">Supprimer</button>
                        <!-- bouton afficher le detail -->
                        <a href="{{ route('classes.show', ['classe' => $classe->id]) }}" class="px-2 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600">Afficher</a>
                    </div>
                </li>

                @endforeach
            </ul>
        </div>
        <!-- Afficher le message de succès -->
        @if(session('message'))
        <div class="bg-green-500 text-white p-4 rounded-md mb-6 text-center font-bold text-lg shadow ">
            {{ session('message') }}
        </div>
        @endif
    </div>



    <!-- Dans votre vue Blade -->
    <script>
        function deleteClasse(classeId) {
            if (window.confirm('Voulez-vous vraiment supprimer cette classe ?')) {
                // Envoyer une requête AJAX pour supprimer la classe
                fetch(`/Classes/${classeId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`Erreur HTTP! Statut: ${response.status}`);
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            // Mettre à jour la vue sans recharger la page
                            const classeElement = document.getElementById(`classe-${classeId}`);
                            if (classeElement) {
                                classeElement.parentNode.removeChild(classeElement);
                                alert('Classe supprimée avec succès.');
                            }
                        } else {
                            alert('Une erreur s\'est produite lors de la suppression de la classe.');
                        }
                    })
                    .catch(error => {
                        console.error('Erreur lors de la suppression de la classe :', error);
                        alert('Une erreur s\'est produite lors de la suppression de la classe.');
                    });
            }
        }
    </script>



</body>

</html>