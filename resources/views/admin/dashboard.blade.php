<x-app-layout>
    <!-- Page Heading -->
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Dashboard Administrateur
            </h2>
        </div>
    </header>


    <div class="p-6">
        <!-- Statistiques Générales -->
        <section class="mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Tickets au total -->
                <div class="bg-blue-100 p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Tickets au total</h3>
                        <p class="text-2xl font-bold text-gray-800">150</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
    
                <!-- Tickets en attente -->
                <div class="bg-yellow-100 p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Tickets en attente</h3>
                        <p class="text-2xl font-bold text-gray-800">45</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
    
                <!-- Tickets en traitement -->
                <div class="bg-green-100 p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Tickets en traitement</h3>
                        <p class="text-2xl font-bold text-gray-800">65</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                </div>
    
                <!-- Tickets résolus -->
                <div class="bg-purple-100 p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Tickets résolus</h3>
                        <p class="text-2xl font-bold text-gray-800">40</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
        </section>
    
        <!-- Tickets Récents -->
        <section class="mb-8">
            <h2 class="text-xl font-semibold text-white mb-4">Tickets Récents</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-700">
                    <thead class="bg-gray-700">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Sujet</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Catégorie</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Statut</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Agent</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        <tr class="bg-gray-800 hover:bg-gray-700">
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">#1</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">Problème de connexion</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">Technique</td>
                            <td class="px-6 py-4 whitespace-nowrap text-yellow-300 font-medium">En attente</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">John Doe</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mr-2">Voir</button>
                                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Éditer</button>
                            </td>
                        </tr>
                        <tr class="bg-gray-800 hover:bg-gray-700">
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">#2</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">Erreur de facturation</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">Facturation</td>
                            <td class="px-6 py-4 whitespace-nowrap text-green-300 font-medium">En cours</td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-300">Jane Smith</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mr-2">Voir</button>
                                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Éditer</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

</x-app-layout>