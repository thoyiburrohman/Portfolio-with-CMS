@extends('layouts.app')
@section('content')
    <section id="projects" class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    All Project
                </h2>
                <div class="w-20 h-1 bg-teal-500 mx-auto mb-6"></div>
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
        </div>
    </section>
@endsection
