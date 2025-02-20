<x-app-layout>

    <div class="p-6">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-6">Mon Tableau de Bord</h1>
    
        <!-- Bouton pour créer un nouveau ticket -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Créer un Nouveau Ticket</h2>
            <button id="createTicketButton" class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition duration-200 ease-in-out">
                Nouveau Ticket
            </button>
        </section>
        
        <!-- Formulaire de création de ticket -->
        <section id="createTicketForm" class="hidden mb-6 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Détails du Ticket</h2>
            <form action="/tickets" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block text-lg font-medium text-gray-700 dark:text-gray-300">Titre</label>
                    <input type="text" id="title" name="title" class="mt-1 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:text-gray-300 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label for="category" class="block text-lg font-medium text-gray-700 dark:text-gray-300">Catégorie</label>
                    <select id="category" name="category" class="mt-1 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:text-gray-300 dark:focus:border-blue-500" required>
                        <option value="problème technique">Problème technique</option>
                        <option value="facturation">Facturation</option>
                        <option value="accès utilisateur">Accès utilisateur</option>
                        <!-- Ajoutez d'autres catégories ici -->
                    </select>
                </div>
                <div class="mb-6">
                    <label for="description" class="block text-lg font-medium text-gray-700 dark:text-gray-300">Description</label>
                    <textarea id="description" name="description" rows="4" class="mt-1 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:text-gray-300 dark:focus:border-blue-500" required></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-green-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-green-700 transition duration-200 ease-in-out">
                        Soumettre le Ticket
                    </button>
                    <button type="button" id="cancelButton" class="ml-4 bg-red-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-red-700 transition duration-200 ease-in-out">
                        Annuler
                    </button>
                </div>
            </form>
        </section>
        
    
        <!-- Statistiques des Tickets -->
        <section class="mb-6">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Statistiques</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-green-500 p-4 rounded-lg shadow">
                    <h3 class="font-bold text-white">Tickets Résolus</h3>
                    <p class="text-lg text-white">5</p>
                </div>
                <div class="bg-yellow-500 p-4 rounded-lg shadow">
                    <h3 class="font-bold text-white">Tickets En Cours</h3>
                    <p class="text-lg text-white">3</p>
                </div>
                <div class="bg-red-500 p-4 rounded-lg shadow">
                    <h3 class="font-bold text-white">Tickets Ouverts</h3>
                    <p class="text-lg text-white">2</p>
                </div>
            </div>
        </section>
    
        <!-- Liste des Tickets -->
        <section>
            <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-4">Mes Tickets</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow dark:bg-gray-800">
                    <thead class="bg-gray-200 dark:bg-gray-700">
                        <tr>
                            <th class="border px-4 py-2 text-left text-gray-900 dark:text-gray-100">Titre</th>
                            <th class="border px-4 py-2 text-left text-gray-900 dark:text-gray-100">Catégorie</th>
                            <th class="border px-4 py-2 text-left text-gray-900 dark:text-gray-100">Statut</th>
                            <th class="border px-4 py-2 text-left text-gray-900 dark:text-gray-100">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800">
                        <tr>
                            <td class="border px-4 py-2 text-gray-800 dark:text-gray-200">Problème de connexion</td>
                            <td class="border px-4 py-2 text-gray-800 dark:text-gray-200">Problème technique</td>
                            <td class="border px-4 py-2 text-yellow-600 dark:text-yellow-400">En cours</td>
                            <td class="border px-4 py-2"><a href="#" class="text-blue-600 hover:underline">Voir</a></td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 text-gray-800 dark:text-gray-200">Facture manquante</td>
                            <td class="border px-4 py-2 text-gray-800 dark:text-gray-200">Facturation</td>
                            <td class="border px-4 py-2 text-green-600 dark:text-green-400">Résolu</td>
                            <td class="border px-4 py-2"><a href="#" class="text-blue-600 hover:underline">Voir</a></td>
                        </tr>
                        <!-- Ajoutez d'autres tickets ici -->
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    
    <!-- JavaScript pour gérer l'affichage du formulaire -->
    <script>
        document.getElementById('createTicketButton').onclick = function() {
            document.getElementById('createTicketForm').classList.toggle('hidden');
        }
    
        document.getElementById('cancelButton').onclick = function() {
            document.getElementById('createTicketForm').classList.add('hidden');
        }
    </script>
    
    
    

</x-app-layout>