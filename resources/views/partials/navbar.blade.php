<nav class="fixed w-full z-50 backdrop-blur-md bg-opacity-80 bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="#" class="text-2xl font-bold text-teal-500">{{ $profile->name }}</a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-slate-300 hover:text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Desktop menu -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-center space-x-4">
                    <a href="{{ Route::currentRouteName('') !== 'index' ? route('index') : '' }}#home"
                        class="nav-link text-slate-300 hover:text-white px-3 py-2 active-nav">Home</a>
                    <a href="{{ Route::currentRouteName('') !== 'index' ? route('index') : '' }}#about"
                        class="nav-link text-slate-300 hover:text-white px-3 py-2">About
                    </a>
                    <a href="{{ Route::currentRouteName('') !== 'index' ? route('index') : '' }}#skills"
                        class="nav-link text-slate-300 hover:text-white px-3 py-2">Skills</a>
                    <a href="{{ Route::currentRouteName('') !== 'index' && Route::currentRouteName('') === 'all-project' ? route('all-project') : '#projects' }}"
                        class="nav-link text-slate-300 hover:text-white px-3 py-2">Projects</a>
                    <a href="{{ Route::currentRouteName('') !== 'index' ? route('index') : '' }}#contact"
                        class="nav-link text-slate-300 hover:text-white px-3 py-2">Contact</a>
                    <a href="{{ Route::currentRouteName('') !== 'index' ? route('index') : '' }}#contact"
                        class="ml-4 px-6 py-2 rounded-full bg-teal-500 text-white font-medium hover:bg-teal-700 transition-all duration-300">
                        Hire Me
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-slate-900">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ Route::currentRouteName('') !== 'index' ? route('index') : '' }}#home"
                class="block px-3 py-2 text-base font-medium text-slate-300 hover:text-white">Home</a>
            <a href="{{ Route::currentRouteName('') !== 'index' ? route('index') : '' }}#about"
                class="block px-3 py-2 text-base font-medium text-slate-300 hover:text-white">About</a>
            <a href="{{ Route::currentRouteName('') !== 'index' ? route('index') : '' }}#skills"
                class="block px-3 py-2 text-base font-medium text-slate-300 hover:text-white">Skills</a>
            <a href="{{ Route::currentRouteName('') !== 'index' && Route::currentRouteName('') === 'all-project' ? route('all-project') : '#projects' }}"
                class="block px-3 py-2 text-base font-medium text-slate-300 hover:text-white">Projects</a>
            <a href="{{ Route::currentRouteName('') !== 'index' ? route('index') : '' }}#contact"
                class="block px-3 py-2 text-base font-medium text-slate-300 hover:text-white">Contact</a>
            <a href="{{ Route::currentRouteName('') !== 'index' ? route('index') : '' }}#contact"
                class="block w-full text-center mt-2 px-6 py-2 rounded-full bg-teal-500 text-white font-medium hover:bg-teal-700 transition-all duration-300">
                Hire Me
            </a>
        </div>
    </div>
</nav>
