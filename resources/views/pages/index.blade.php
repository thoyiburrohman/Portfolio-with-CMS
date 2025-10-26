@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden pt-16">
        <div class="blob top-0 left-0"></div>
        <div class="blob bottom-0 right-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        Hi, I'm <span class="text-teal-500">{{ $profile->name }}</span>
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-semibold text-slate-300 mb-6">
                        <span class="text-white">{{ $profile->short_bio }}</span>
                    </h2>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="#projects"
                            class="px-8 py-3 rounded-full bg-teal-500 text-white font-medium hover:bg-teal-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                            View My Work
                        </a>
                        <a href="#contact"
                            class="px-8 py-3 rounded-full border-2 border-teal-500 text-teal-500 font-medium hover:bg-teal-500 hover:text-white transition-all duration-300">
                            Contact Me
                        </a>
                    </div>
                    <div class="mt-8 flex justify-center md:justify-start space-x-6">
                        <a href="{{ $profile->github_url }}"
                            class="text-white hover:text-teal-500 transition-colors duration-300">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                        <a href="{{ $profile->linkedin_url }}"
                            class="text-white hover:text-teal-500 transition-colors duration-300">
                            <i class="fab fa-linkedin text-2xl"></i>
                        </a>

                        <a href="{{ $profile->instagram_url }}"
                            class="text-white hover:text-teal-500 transition-colors duration-300">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                    </div>
                </div>
                <div class="relative flex justify-center">
                    <div class="relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96">
                        <div
                            class="absolute inset-0 rounded-full bg-gradient-to-r from-blue-500 to-teal-600 blur-xl opacity-30 animate-pulse">
                        </div>
                        <div
                            class="absolute inset-2 rounded-full bg-gradient-to-r from-blue-500 to-teal-600 blur-md opacity-20 animate-pulse delay-300">
                        </div>
                        <div
                            class="relative w-full h-full rounded-full overflow-hidden border-4 border-slate-700 shadow-xl">
                            <img src="{{ asset('storage/' . $profile->image_1) }}" alt="thoyiburrohman"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span class="text-teal-500">About</span>
                </h2>
                <div class="w-20 h-1 bg-teal-500 mx-auto mb-6"></div>
                <p class="text-lg text-slate-400 max-w-3xl mx-auto">
                    Tentang saya
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="flex justify-center">
                    <div class="relative w-full max-w-md">
                        <div
                            class="absolute -inset-4 bg-gradient-to-r from-blue-500 to-teal-600 rounded-2xl blur-lg opacity-30">
                        </div>
                        <div class="relative bg-slate-800 rounded-xl overflow-hidden shadow-xl border-2 border-teal-500">
                            <img src="{{ asset('storage/' . $profile->image_2) }}" alt="Working"
                                class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-6">Who am I?</h3>
                    <p class="text-slate-400 mb-6">
                        {!! $profile->long_bio !!}
                    </p>
                    <div class="grid grid-cols-2 gap-4 mt-4 mb-8">
                        <div class="flex items-center">
                            <div class="mr-3 text-teal-500">
                                <i class="fas fa-user-tie text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white">Name</h4>
                                <p class="text-slate-400 text-xs md:text-base truncate">{{ $profile->name }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-3 text-teal-500">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white">Email</h4>
                                <p class="text-slate-400 text-xs md:text-base truncate">{{ $profile->email }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-3 text-teal-500">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white">Location</h4>
                                <p class="text-slate-400 text-xs md:text-base truncate">{{ $profile->address }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-3 text-teal-500">
                                <i class="fas fa-briefcase text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white">Freelance</h4>
                                <p class="text-slate-400 text-xs md:text-base truncate">
                                    {{ $profile->is_available ? 'Available' : 'Not Available' }}</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('download.cv') }}"
                        class="inline-flex items-center px-6 py-3 rounded-full bg-teal-500 text-white font-medium hover:bg-teal-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Download CV <i class="fas fa-download ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    My <span class="text-teal-500">Skills</span>
                </h2>
                <div class="w-20 h-1 bg-teal-500 mx-auto mb-6"></div>
                <p class="text-lg text-slate-400 max-w-3xl mx-auto">
                    Keterampilan saya
                </p>
            </div>


            <div class="mt-16">
                <div class="flex flex-wrap justify-center gap-6">
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-html5 text-4xl text-orange-500 mb-2"></i>
                        <span class="text-sm text-slate-300">HTML5</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-css3-alt text-4xl text-blue-500 mb-2"></i>
                        <span class="text-sm text-slate-300">CSS3</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-js text-4xl text-yellow-400 mb-2"></i>
                        <span class="text-sm text-slate-300">JavaScript</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-php text-4xl text-blue-400 mb-2"></i>
                        <span class="text-sm text-slate-300">PHP</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-laravel text-4xl text-red-400 mb-2"></i>
                        <span class="text-sm text-slate-300">Laravel</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fas    fa-fire text-4xl text-red-400 mb-2"></i>
                        <span class="text-sm text-slate-300">Codeigniter</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-bootstrap text-4xl text-cyan-400 mb-2"></i>
                        <span class="text-sm text-slate-300">Bootstrap</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-css text-4xl  mb-2"></i>
                        <span class="text-sm text-slate-300">Tailwind CSS</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-node-js text-4xl text-green-600 mb-2"></i>
                        <span class="text-sm text-slate-300">Node.js</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fas fa-database text-4xl text-green-400 mb-2"></i>
                        <span class="text-sm text-slate-300">MySql</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fas fa-database text-4xl text-cyan-400 mb-2"></i>
                        <span class="text-sm text-slate-300">PostgreeSql</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-git-alt text-4xl text-orange-600 mb-2"></i>
                        <span class="text-sm text-slate-300">Git</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fas fa-code text-4xl text-indigo-600 mb-2"></i>
                        <span class="text-sm text-slate-300">VS Code</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-figma text-4xl text-purple-400 mb-2"></i>
                        <span class="text-sm text-slate-300">Figma</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-g text-4xl text-orange-400 mb-2"></i>
                        <span class="text-sm text-slate-300">Google Workspace</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    My <span class="text-teal-500">Projects</span>
                </h2>
                <div class="w-20 h-1 bg-teal-500 mx-auto mb-6"></div>
                <p class="text-lg text-slate-400 max-w-3xl mx-auto">
                    Project terbaru saya </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $item)
                    <!-- Project 1 -->
                    <div class="card-hover bg-slate-800 rounded-xl overflow-hidden shadow-lg">
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="E-commerce Dashboard"
                                class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-70">
                            </div>
                            <div class="absolute bottom-4 left-4">
                                @foreach ($item->tech as $value)
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold bg-teal-700 text-white rounded-full mb-2">{{ $value }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $item->name }}</h3>
                            <p class="text-slate-400 mb-4">
                                {{ Str::words($item->description, 15, '...') }}
                            </p>
                            <div class="flex justify-between items-center">
                                @if ($item->demo_url)
                                    <a href="{{ $item->demo_url }}"
                                        class="text-teal-500 hover:text-teal-700 transition-colors duration-300">
                                        <i class="fas fa-external-link-alt mr-1"></i> Live Demo
                                    </a>
                                @endif
                                @if ($item->github_url)
                                    <a href="{{ $item->github_url }}"
                                        class="text-blue-500 hover:text-blue-700 transition-colors duration-300">
                                        <i class="fab fa-github mr-1"></i> Code
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            @if ($projects->count() > 6)
                <div class="text-center mt-12">
                    <a href="{{ route('all-project') }}"
                        class="inline-flex items-center px-8 py-3 rounded-full bg-teal-500 text-white font-medium hover:bg-teal-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                        View All Projects <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Contact <span class="text-teal-500">Me</span>
                </h2>
                <div class="w-20 h-1 bg-teal-500 mx-auto mb-6"></div>
                <p class="text-lg text-slate-400 max-w-3xl mx-auto">
                    Hubungi saya </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold mb-6">Informasi kontak</h3>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="mr-4 mt-1 text-teal-500">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white mb-1">Email</h4>
                                <a href="mailto:hello@thoyiburrohman.com"
                                    class="text-slate-400 hover:text-teal-400 transition-colors duration-300">
                                    {{ $profile->email }}
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="mr-4 mt-1 text-teal-500">
                                <i class="fas fa-phone-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white mb-1">Phone</h4>
                                <a href="tel:+6281234567890"
                                    class="text-slate-400 hover:text-teal-400 transition-colors duration-300">
                                    {{ $profile->phone }}
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="mr-4 mt-1 text-teal-500">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white mb-1">Location</h4>
                                <p class="text-slate-400">
                                    {{ $profile->address }}
                                </p>
                            </div>
                        </div>


                    </div>

                    <div class="mt-8">
                        <h4 class="font-medium text-white mb-4">Follow Me</h4>
                        <div class="flex space-x-4">
                            <a href="{{ $profile->github_url }}"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 text-slate-300 hover:bg-blue-500 hover:text-white transition-colors duration-300">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="{{ $profile->linkedin_url }}"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 text-slate-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                            <a href="{{ $profile->instagram_url }}"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 text-slate-300 hover:bg-pink-600 hover:text-white transition-colors duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="bg-slate-800 rounded-xl p-8 shadow-lg">
                    <form id="formContact" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Nama
                                    Lengkap</label>
                                <input type="text" id="name" name="name"
                                    class="w-full px-4 py-3 rounded-lg input-field focus:ring-2 focus:ring-teal-500 focus:ring-opacity-50"
                                    required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email
                                    Aktif</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-4 py-3 rounded-lg input-field focus:ring-2 focus:ring-teal-500 focus:ring-opacity-50"
                                    required>
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-slate-300 mb-2">Whatsapp</label>
                            <input type="text" id="subject" name="phone"
                                class="w-full px-4 py-3 rounded-lg input-field focus:ring-2 focus:ring-teal-500 focus:ring-opacity-50"
                                required>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-slate-300 mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full px-4 py-3 rounded-lg input-field focus:ring-2 focus:ring-teal-500 focus:ring-opacity-50" required></textarea>
                        </div>
                        <button type="button" id="send-btn"
                            class="w-full px-6 py-3 rounded-full bg-teal-500 text-white font-medium hover:bg-teal-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Kirim Pesan <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
