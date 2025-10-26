<footer class="bg-slate-900 py-12 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <a href="#" class="text-2xl font-bold text-teal-500">{{ $profile->name }}</a>
                <p class="text-slate-400 mt-2">
                    {{ $profile->motto }}
                </p>
            </div>
            <div class="flex flex-col items-center md:items-end">
                <div class="flex space-x-6 mb-4">
                    <a href="{{ $profile->github_url }}"
                        class="text-slate-400 hover:text-white transition-colors duration-300">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="{{ $profile->linkedin_url }}"
                        class="text-slate-400 hover:text-white transition-colors duration-300">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>

                    <a href="{{ $profile->instagram_url }}"
                        class="text-slate-400 hover:text-white transition-colors duration-300">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                </div>
                <p class="text-sm text-slate-500">
                    &copy; {{ Carbon\Carbon::now()->format('Y') }} Thoyiburrohman. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
