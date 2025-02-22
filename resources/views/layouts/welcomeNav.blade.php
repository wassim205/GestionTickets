<nav class="fixed w-full z-50 backdrop-blur-md bg-white/75 shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex-1 flex items-center justify-between">
                <div class="flex-shrink-0 flex items-center">
                    <h1
                        class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 text-transparent bg-clip-text">
                        TicketFlow
                    </h1>
                </div>

                <!-- Menu principal -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/register"
                        class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-200">
                        S'inscrire
                    </a>
                    <a href="/login"
                        class="border border-indigo-600 text-indigo-600 px-4 py-2 rounded-lg hover:bg-indigo-50 transition duration-200">
                        Connexion
                    </a>
                </div>
                
                

                <!-- Bouton menu mobile -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-indigo-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path v-if="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu mobile -->
    <transition name="fade">
        <div v-show="mobileMenuOpen" class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="/register"
                    class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-200 transform hover:scale-105">
                    Commencer
                </a>
                <a href="/login"
                    class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-200 transform hover:scale-105">
                    Connecter
                </a>
            </div>
        </div>
    </transition>
</nav>