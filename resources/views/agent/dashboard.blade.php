<x-app-layout>

    {{-- <x-slot:header>
        Agent wassim
    </x-slot:header> --}}

    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-blue-600 text-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">Tickets en attente</h3>
                <p class="text-3xl font-bold">5</p>
            </div>
            <div class="bg-yellow-600 text-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">Tickets en cours</h3>
                <p class="text-3xl font-bold">8</p>
            </div>
            <div class="bg-green-600 text-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">Tickets résolus</h3>
                <p class="text-3xl font-bold">15</p>
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Mes tickets assignés</h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300 dark:border-gray-700">
                    <thead>
                        <tr class="bg-gray-200 dark:bg-gray-700">
                            <th class="border border-gray-300 dark:border-gray-700 px-6 py-3 text-left">ID</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-6 py-3 text-left">Sujet</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-6 py-3 text-left">Statut</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-6 py-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-gray-300 dark:border-gray-700">
                            <td class="px-6 py-4">#1234</td>
                            <td class="px-6 py-4">Problème de connexion</td>
                            <td class="px-6 py-4">
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">En attente</span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-blue-600 hover:text-blue-900 dark:text-blue-400">Voir détails</a>
                            </td>
                        </tr>
                        <tr class="border-t border-gray-300 dark:border-gray-700">
                            <td class="px-6 py-4">#5678</td>
                            <td class="px-6 py-4">Erreur de facturation</td>
                            <td class="px-6 py-4">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">En cours</span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-blue-600 hover:text-blue-900 dark:text-blue-400">Voir détails</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>