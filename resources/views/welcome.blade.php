@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-linear-to-br from-slate-900 via-purple-900 to-slate-900">
    <!-- Navigation -->
    <nav class="bg-white/10 backdrop-blur-md border-b border-white/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="text-2xl font-bold text-white">DAHUG</div>
                <div class="hidden md:flex gap-8">
                    <a href="#features" class="text-white/80 hover:text-white transition">Features</a>
                    <a href="#about" class="text-white/80 hover:text-white transition">About</a>
                    <a href="#contact" class="text-white/80 hover:text-white transition">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center space-y-8">
            <h1 class="text-5xl md:text-7xl font-bold text-white">Welcome to DAHUG</h1>
            <p class="text-xl text-white/70 max-w-2xl mx-auto">Build amazing applications with modern design principles and cutting-edge technology</p>
            <div class="flex justify-center gap-4">
                <button class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-3 rounded-lg font-semibold transition">Get Started</button>
                <button class="border-2 border-white/30 hover:border-white text-white px-8 py-3 rounded-lg font-semibold transition">Learn More</button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <h2 class="text-4xl font-bold text-white text-center mb-16">Features</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 hover:bg-white/20 transition">
                <div class="text-4xl mb-4">🚀</div>
                <h3 class="text-xl font-bold text-white mb-3">Fast Performance</h3>
                <p class="text-white/60">Lightning-fast load times and smooth user experience</p>
            </div>
            <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 hover:bg-white/20 transition">
                <div class="text-4xl mb-4">🎨</div>
                <h3 class="text-xl font-bold text-white mb-3">Modern Design</h3>
                <p class="text-white/60">Beautiful and responsive interfaces for all devices</p>
            </div>
            <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 hover:bg-white/20 transition">
                <div class="text-4xl mb-4">🔒</div>
                <h3 class="text-xl font-bold text-white mb-3">Secure</h3>
                <p class="text-white/60">Enterprise-grade security and data protection</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white/5 border-t border-white/20 mt-20 py-8">
        <div class="max-w-7xl mx-auto px-4 text-center text-white/60">
            <p>&copy; 2024 DAHUG. All rights reserved.</p>
        </div>
    </footer>
</div>
@endsection