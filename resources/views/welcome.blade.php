<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketFlow - Système de Support</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <style>
        .fade-enter-active, .fade-leave-active {
            transition: opacity 0.5s ease;
        }
        .fade-enter-from, .fade-leave-to {
            opacity: 0;
        }
        .slide-fade-enter-active {
            transition: all 0.3s ease-out;
        }
        .slide-fade-leave-active {
            transition: all 0.3s cubic-bezier(1, 0.5, 0.8, 1);
        }
        .slide-fade-enter-from,
        .slide-fade-leave-to {
            transform: translateY(20px);
            opacity: 0;
        }
    </style>
</head>
<body class="bg-slate-100">
    <div id="app">
        <!-- Navigation moderne avec transition -->
        
        @include('layouts.welcomeNav')
        <!-- Hero Section avec animations -->
        <div class="relative overflow-hidden bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pt-32 pb-16 sm:pt-40 sm:pb-24 lg:pb-32">
                    <div class="mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                        <div class="sm:max-w-lg">
                            <transition name="slide-fade">
                                <h1 v-show="showHero" class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                    Votre support client
                                    <span class="block text-indigo-600">plus intelligent</span>
                                </h1>
                            </transition>
                            <transition name="slide-fade">
                                <p v-show="showHero" class="mt-4 text-xl text-gray-500">
                                    Une solution moderne pour gérer vos tickets de support et améliorer la satisfaction de vos clients.
                                </p>
                            </transition>
                        </div>
                        <div class="mt-10">
                            <div class="flex space-x-4">
                                <a href="/register" class="bg-indigo-600 text-white px-8 py-3 rounded-xl hover:bg-indigo-700 transition duration-200 transform hover:scale-105">
                                    Démarrer
                                </a>
                                <button class="border-2 border-indigo-600 text-indigo-600 px-8 py-3 rounded-xl hover:bg-indigo-50 transition duration-200">
                                    En savoir plus
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section des fonctionnalités -->
        <div class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-900">Fonctionnalités principales</h2>
                    <p class="mt-4 text-lg text-gray-500">Tout ce dont vous avez besoin pour un support client efficace</p>
                </div>

                <div class="mt-12 grid gap-8 md:grid-cols-3">
                    <!-- Carte 1 -->
                    <div class="relative group bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="h-12 w-12 rounded-xl bg-indigo-100 group-hover:bg-indigo-600 transition-colors duration-300 flex items-center justify-center">
                            <svg class="h-6 w-6 text-indigo-600 group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                            </svg>
                        </div>
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">Gestion des tickets</h3>
                        <p class="mt-2 text-gray-500">Gérez facilement tous vos tickets de support dans une interface unifiée.</p>
                    </div>

                    <!-- Carte 2 -->
                    <div class="relative group bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="h-12 w-12 rounded-xl bg-indigo-100 group-hover:bg-indigo-600 transition-colors duration-300 flex items-center justify-center">
                            <svg class="h-6 w-6 text-indigo-600 group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">Suivi en temps réel</h3>
                        <p class="mt-2 text-gray-500">Suivez l'état de vos tickets et recevez des notifications instantanées.</p>
                    </div>

                    <!-- Carte 3 -->
                    <div class="relative group bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="h-12 w-12 rounded-xl bg-indigo-100 group-hover:bg-indigo-600 transition-colors duration-300 flex items-center justify-center">
                            <svg class="h-6 w-6 text-indigo-600 group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="mt-4 text-xl font-semibold text-gray-900">Analyses détaillées</h3>
                        <p class="mt-2 text-gray-500">Obtenez des insights précieux sur la performance de votre support.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section statistiques -->
        <div class="bg-indigo-600 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid gap-8 md:grid-cols-3">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-white">98%</div>
                        <div class="mt-2 text-indigo-100">Satisfaction client</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-white">&lt; 2h</div>
                        <div class="mt-2 text-indigo-100">Temps de réponse</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-white">24/7</div>
                        <div class="mt-2 text-indigo-100">Support disponible</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        const { createApp } = Vue;

        createApp({
            data() {
                return {
                    mobileMenuOpen: false,
                    showHero: false
                }
            },
            mounted() {
                this.showHero = true;
            }
        }).mount('#app');
    </script> --}}
</body>
</html>