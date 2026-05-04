<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Admin Central') }} - Enterprise Multi-Tenant Management</title>
    <meta name="description" content="Professional multi-tenant management platform for ApiBrisas ecosystem. Secure, scalable, and enterprise-ready.">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', ui-sans-serif, system-ui; }
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            background-size: 200% 200%;
            animation: gradientShift 4s ease infinite;
        }
        .floating { animation: floating 3s ease-in-out infinite; }
        @keyframes floating { 0%, 100% { transform: translateY(0px) rotate(0deg); } 50% { transform: translateY(-15px) rotate(2deg); } }
        .fade-in { animation: fadeIn 1.2s cubic-bezier(0.4, 0, 0.2, 1); }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(40px) scale(0.95); } to { opacity: 1; transform: translateY(0) scale(1); } }
        .slide-in-left { animation: slideInLeft 1s cubic-bezier(0.4, 0, 0.2, 1); }
        @keyframes slideInLeft { from { opacity: 0; transform: translateX(-50px); } to { opacity: 1; transform: translateX(0); } }
        .slide-in-right { animation: slideInRight 1s cubic-bezier(0.4, 0, 0.2, 1); }
        @keyframes slideInRight { from { opacity: 0; transform: translateX(50px); } to { opacity: 1; transform: translateX(0); } }
        @keyframes gradientShift { 0%, 100% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } }
        .bg-pattern {
            background-image:
                radial-gradient(circle at 25px 25px, rgba(255,255,255,0.4) 2px, transparent 0),
                radial-gradient(circle at 75px 75px, rgba(255,255,255,0.3) 2px, transparent 0),
                radial-gradient(circle at 50px 100px, rgba(99, 102, 241, 0.1) 1px, transparent 0);
            background-size: 100px 100px;
        }
        .pulse-glow { animation: pulseGlow 2s ease-in-out infinite alternate; }
        @keyframes pulseGlow { from { box-shadow: 0 4px 20px rgba(99, 102, 241, 0.4); } to { box-shadow: 0 8px 40px rgba(139, 92, 246, 0.6); } }
        .text-shadow-sm { text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); }
        .text-shadow-lg { text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); }
        .backdrop-blur-xl { backdrop-filter: blur(24px); }
        .perspective-1000 { perspective: 1000px; }
        .preserve-3d { transform-style: preserve-3d; }
        .rotate-y-6 { transform: rotateY(6deg); }
        .hover-lift { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .hover-lift:hover { transform: translateY(-8px) scale(1.02); }
        .hidden { display: none; }
        .language-switcher { position: relative; z-index: 1000; }
    </style>
</head>
<body class="antialiased">
    <!-- Background with animated gradient -->
    <div class="fixed inset-0 bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-100 bg-pattern"></div>

    <!-- Floating background shapes -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 floating" style="animation-delay: 0s;"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 floating" style="animation-delay: 2s;"></div>
        <div class="absolute top-40 left-1/2 w-80 h-80 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 floating" style="animation-delay: 4s;"></div>
    </div>

    <div class="relative min-h-screen">
        <!-- Navigation -->
        <header class="relative backdrop-blur-xl bg-white/80 border-b border-white/30 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center group slide-in-left">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-600 via-purple-600 to-pink-500 rounded-2xl flex items-center justify-center mr-4 transform transition-all duration-500 group-hover:scale-110 group-hover:rotate-3 pulse-glow">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900 text-shadow-sm">Admin Central</h1>
                            <div class="flex items-center">
                                <span class="text-xs text-gray-500" data-en="Enterprise Multi-Tenant Platform" data-es="Plataforma Multi-Tenant Empresarial">Enterprise Multi-Tenant Platform</span>
                                <span class="ml-2 px-2 py-0.5 text-xs font-semibold bg-gradient-to-r from-emerald-400 via-blue-500 to-purple-600 text-white rounded-full animate-pulse">v1.0</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 slide-in-right">
                        <!-- Language Switcher -->
                        <div class="language-switcher">
                            <button onclick="toggleLanguage()"
                                    class="group flex items-center gap-2 px-3 py-2 rounded-xl bg-white/60 backdrop-blur-sm hover:bg-white/80 border border-white/50 transition-all duration-300 hover:shadow-lg transform hover:scale-105">
                                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                                </svg>
                                <span id="currentLang" class="text-sm font-medium text-gray-700">EN</span>
                                <svg class="w-3 h-3 text-gray-500 group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                        </div>

                        @if (Route::has('login'))
                            <nav class="flex items-center gap-3">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                       class="group bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 hover:from-blue-700 hover:via-purple-700 hover:to-pink-700 text-white px-6 py-2.5 rounded-xl font-semibold transition-all duration-500 shadow-xl hover:shadow-2xl transform hover:scale-105 hover:rotate-1">
                                        <svg class="w-4 h-4 inline mr-2 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                        <span data-en="Dashboard" data-es="Panel">Dashboard</span>
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                       class="text-gray-700 hover:text-gray-900 px-4 py-2 rounded-xl font-medium transition-all duration-300 hover:bg-white/60 backdrop-blur-sm border border-transparent hover:border-white/30">
                                        <span data-en="Sign In" data-es="Iniciar Sesión">Sign In</span>
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                           class="group bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 hover:from-blue-700 hover:via-purple-700 hover:to-pink-700 text-white px-6 py-2.5 rounded-xl font-semibold transition-all duration-500 shadow-xl hover:shadow-2xl transform hover:scale-105 hover:rotate-1">
                                            <span data-en="Get Started" data-es="Comenzar">Get Started</span>
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </div>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <main class="relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-16">
                <div class="text-center fade-in">
                    <div class="mb-8">
                        <span class="inline-flex items-center px-6 py-3 rounded-full text-sm font-semibold bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50 text-blue-800 border-2 border-blue-200/50 backdrop-blur-sm shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                            <svg class="w-5 h-5 mr-2 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            <span data-en="Powered by Laravel & VitalAccess" data-es="Impulsado por Laravel y VitalAccess">Powered by Laravel & VitalAccess</span>
                        </span>
                    </div>

                    <div class="perspective-1000 mb-6">
                        <h2 class="text-6xl md:text-7xl lg:text-8xl font-black text-gray-900 leading-tight text-shadow-lg preserve-3d hover:rotate-y-6 transition-transform duration-700">
                            <span class="gradient-text block" data-en="Multi-Tenant" data-es="Multi-Inquilino">Multi-Tenant</span>
                            <span class="block mt-2" data-en="Management" data-es="Gestión">Management</span>
                            <span class="text-gray-600 block mt-2 text-5xl md:text-6xl lg:text-7xl" data-en="Made Simple" data-es="Simplificado">Made Simple</span>
                        </h2>
                    </div>

                    <div class="mb-12 space-y-4">
                        <p class="text-xl md:text-2xl lg:text-3xl text-gray-700 max-w-5xl mx-auto leading-relaxed text-shadow-sm" data-en="The most advanced platform for managing isolated tenant environments." data-es="La plataforma más avanzada para gestionar entornos de inquilinos aislados.">
                            The most advanced platform for managing isolated tenant environments.
                        </p>
                        <p class="text-lg md:text-xl text-gray-600 max-w-4xl mx-auto">
                            <span class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600" data-en="Secure, scalable, and enterprise-ready" data-es="Seguro, escalable y listo para empresas">Secure, scalable, and enterprise-ready</span>
                            <span data-en="for your ApiBrisas ecosystem." data-es="para tu ecosistema ApiBrisas.">for your ApiBrisas ecosystem.</span>
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-6 justify-center mb-20">
                        @auth
                            <a href="{{ route('dashboard') }}"
                               class="group relative overflow-hidden bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 hover:from-blue-700 hover:via-purple-700 hover:to-pink-700 text-white px-12 py-5 rounded-3xl font-bold text-xl transition-all duration-500 shadow-2xl hover:shadow-pink-500/25 transform hover:scale-110 hover:rotate-1 hover-lift">
                                <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                <svg class="w-6 h-6 inline mr-3 group-hover:rotate-12 group-hover:scale-110 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                <span data-en="Go to Dashboard" data-es="Ir al Panel">Go to Dashboard</span>
                            </a>
                            <a href="{{ route('tenants.create') }}"
                               class="group relative overflow-hidden bg-white/90 backdrop-blur-xl hover:bg-white text-gray-900 px-12 py-5 rounded-3xl font-bold text-xl transition-all duration-500 shadow-2xl hover:shadow-blue-500/25 border-2 border-white/60 hover:border-blue-300/50 transform hover:scale-110 hover:-rotate-1 hover-lift">
                                <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                <svg class="w-6 h-6 inline mr-3 group-hover:rotate-180 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                                <span data-en="Create Tenant" data-es="Crear Inquilino">Create Tenant</span>
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                               class="group relative overflow-hidden bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 hover:from-blue-700 hover:via-purple-700 hover:to-pink-700 text-white px-12 py-5 rounded-3xl font-bold text-xl transition-all duration-500 shadow-2xl hover:shadow-pink-500/25 transform hover:scale-110 hover:rotate-1 hover-lift">
                                <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                <svg class="w-6 h-6 inline mr-3 group-hover:translate-x-2 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                                <span data-en="Get Started Free" data-es="Comenzar Gratis">Get Started Free</span>
                            </a>
                            <a href="#features"
                               class="group relative overflow-hidden bg-white/90 backdrop-blur-xl hover:bg-white text-gray-900 px-12 py-5 rounded-3xl font-bold text-xl transition-all duration-500 shadow-2xl hover:shadow-blue-500/25 border-2 border-white/60 hover:border-blue-300/50 transform hover:scale-110 hover:-rotate-1 hover-lift">
                                <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                <svg class="w-6 h-6 inline mr-3 group-hover:bounce transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span data-en="Learn More" data-es="Saber Más">Learn More</span>
                            </a>
                        @endauth
                    </div>

                    <!-- Live Demo Preview -->
                    <div class="relative max-w-5xl mx-auto">
                        <div class="bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-3xl p-1 shadow-2xl">
                            <div class="bg-white/90 backdrop-blur rounded-2xl p-8 shadow-inner">
                                <div class="flex items-center justify-between mb-6">
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-red-400 rounded-full mr-2"></div>
                                        <div class="w-3 h-3 bg-yellow-400 rounded-full mr-2"></div>
                                        <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                                    </div>
                                    <div class="text-sm text-gray-500 font-mono">admincentral.local</div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-4 border border-blue-200">
                                        <div class="flex items-center mb-3">
                                            <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center mr-3">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                            </div>
                                            <div>
                                                <div class="font-semibold text-blue-900 text-sm">Demo Company</div>
                                                <div class="text-blue-600 text-xs">demo.localhost</div>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <span class="text-xs text-blue-600 bg-blue-200 px-2 py-1 rounded-full">Active</span>
                                            <span class="text-xs text-blue-500">15 users</span>
                                        </div>
                                    </div>
                                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-4 border border-green-200">
                                        <div class="flex items-center mb-3">
                                            <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center mr-3">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                            </div>
                                            <div>
                                                <div class="font-semibold text-green-900 text-sm">API Company</div>
                                                <div class="text-green-600 text-xs">api.localhost</div>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <span class="text-xs text-green-600 bg-green-200 px-2 py-1 rounded-full">Active</span>
                                            <span class="text-xs text-green-500">32 users</span>
                                        </div>
                                    </div>
                                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-4 border border-purple-200">
                                        <div class="flex items-center mb-3">
                                            <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center mr-3">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                            </div>
                                            <div>
                                                <div class="font-semibold text-purple-900 text-sm">Test API Co.</div>
                                                <div class="text-purple-600 text-xs">testapi.localhost</div>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <span class="text-xs text-purple-600 bg-purple-200 px-2 py-1 rounded-full">Active</span>
                                            <span class="text-xs text-purple-500">8 users</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Grid -->
            <div id="features" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
                <div class="text-center mb-20 fade-in">
                    <div class="mb-6">
                        <span class="inline-block px-4 py-2 rounded-full text-sm font-semibold bg-gradient-to-r from-indigo-100 to-purple-100 text-indigo-800 border border-indigo-200 mb-4">
                            <span data-en="Why Choose Us?" data-es="¿Por Qué Elegirnos?">Why Choose Us?</span>
                        </span>
                    </div>
                    <h3 class="text-5xl md:text-6xl font-black text-gray-900 mb-6 text-shadow-lg">
                        <span data-en="Why Choose" data-es="Por Qué Elegir">Why Choose</span>
                        <span class="gradient-text block mt-2">Admin Central</span>?
                    </h3>
                    <div class="max-w-4xl mx-auto space-y-3">
                        <p class="text-2xl text-gray-700 leading-relaxed text-shadow-sm" data-en="Built by developers, for developers." data-es="Construido por desarrolladores, para desarrolladores.">
                            Built by developers, for developers.
                        </p>
                        <p class="text-xl text-gray-600" data-en="Every feature designed with security, scalability, and user experience in mind." data-es="Cada característica diseñada pensando en seguridad, escalabilidad y experiencia de usuario.">
                            Every feature designed with security, scalability, and user experience in mind.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="group bg-white/70 backdrop-blur-xl rounded-3xl p-8 hover:bg-white/90 transition-all duration-500 shadow-xl hover:shadow-2xl border border-white/60 transform hover:scale-105 hover:-rotate-1 hover-lift">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 via-blue-600 to-indigo-600 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 pulse-glow">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-900 mb-4 text-shadow-sm" data-en="Complete Tenant Isolation" data-es="Aislamiento Completo de Inquilinos">Complete Tenant Isolation</h4>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            <span data-en="Every tenant gets dedicated databases, custom subdomains, and completely isolated file storage." data-es="Cada inquilino obtiene bases de datos dedicadas, subdominios personalizados y almacenamiento de archivos completamente aislado.">Every tenant gets dedicated databases, custom subdomains, and completely isolated file storage.</span>
                            <span class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 block mt-2" data-en="Zero data leakage, guaranteed." data-es="Cero filtración de datos, garantizado.">Zero data leakage, guaranteed.</span>
                        </p>
                        <div class="mt-6 flex items-center text-blue-600 font-semibold text-lg group-hover:text-indigo-600 transition-colors duration-300">
                            <span data-en="Learn more" data-es="Saber más">Learn more</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 group-hover:scale-110 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="group bg-white/60 backdrop-blur rounded-2xl p-8 hover:bg-white/80 transition-all duration-300 shadow-lg hover:shadow-2xl border border-white/50 transform hover:scale-105">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Intuitive Management</h4>
                        <p class="text-gray-600 leading-relaxed">
                            Beautiful, responsive dashboard for monitoring all tenants.
                            <span class="font-semibold">Create, configure, and manage</span> with just a few clicks.
                        </p>
                        <div class="mt-4 flex items-center text-green-600 font-medium">
                            Learn more
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="group bg-white/60 backdrop-blur rounded-2xl p-8 hover:bg-white/80 transition-all duration-300 shadow-lg hover:shadow-2xl border border-white/50 transform hover:scale-105">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">VitalAccess RBAC</h4>
                        <p class="text-gray-600 leading-relaxed">
                            Enterprise-grade role-based access control with granular permissions.
                            <span class="font-semibold">Secure by design.</span>
                        </p>
                        <div class="mt-4 flex items-center text-purple-600 font-medium">
                            Learn more
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="group bg-white/60 backdrop-blur rounded-2xl p-8 hover:bg-white/80 transition-all duration-300 shadow-lg hover:shadow-2xl border border-white/50 transform hover:scale-105">
                        <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Lightning Fast</h4>
                        <p class="text-gray-600 leading-relaxed">
                            Built on Laravel and optimized for performance.
                            <span class="font-semibold">Sub-100ms response times</span> guaranteed.
                        </p>
                        <div class="mt-4 flex items-center text-orange-600 font-medium">
                            Learn more
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </div>
                    </div>

                    <!-- Feature 5 -->
                    <div class="group bg-white/60 backdrop-blur rounded-2xl p-8 hover:bg-white/80 transition-all duration-300 shadow-lg hover:shadow-2xl border border-white/50 transform hover:scale-105">
                        <div class="w-14 h-14 bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Developer Friendly</h4>
                        <p class="text-gray-600 leading-relaxed">
                            RESTful APIs, comprehensive documentation, and webhook support.
                            <span class="font-semibold">Built by developers, for developers.</span>
                        </p>
                        <div class="mt-4 flex items-center text-teal-600 font-medium">
                            Learn more
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </div>
                    </div>

                    <!-- Feature 6 -->
                    <div class="group bg-white/60 backdrop-blur rounded-2xl p-8 hover:bg-white/80 transition-all duration-300 shadow-lg hover:shadow-2xl border border-white/50 transform hover:scale-105">
                        <div class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Enterprise Scale</h4>
                        <p class="text-gray-600 leading-relaxed">
                            Unlimited tenants, auto-scaling infrastructure, and enterprise-grade monitoring.
                            <span class="font-semibold">Ready for any scale.</span>
                        </p>
                        <div class="mt-4 flex items-center text-indigo-600 font-medium">
                            Learn more
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
                <div class="relative overflow-hidden bg-gradient-to-r from-blue-600 via-purple-600 via-pink-600 to-indigo-700 rounded-[2rem] p-20 text-white text-center shadow-2xl transform hover:scale-[1.02] transition-all duration-700">
                    <!-- Animated background pattern -->
                    <div class="absolute inset-0 opacity-20">
                        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-white/10 to-transparent animate-pulse"></div>
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-5xl md:text-6xl font-black mb-6 text-shadow-lg" data-en="Trusted by Industry Leaders" data-es="Confiado por Líderes de la Industria">Trusted by Industry Leaders</h3>
                        <p class="text-2xl text-blue-100 mb-16 max-w-4xl mx-auto leading-relaxed" data-en="Join thousands of companies using Admin Central to manage their multi-tenant infrastructure" data-es="Únete a miles de empresas que usan Admin Central para gestionar su infraestructura multi-inquilino">
                            Join thousands of companies using Admin Central to manage their multi-tenant infrastructure
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-12">
                            <div class="group transform hover:scale-110 transition-all duration-300">
                                <div class="text-6xl md:text-7xl font-black mb-4 group-hover:text-yellow-300 transition-colors duration-300 text-shadow-lg">99.9%</div>
                                <div class="text-blue-200 font-semibold text-lg" data-en="Uptime SLA" data-es="SLA de Disponibilidad">Uptime SLA</div>
                            </div>
                            <div class="group transform hover:scale-110 transition-all duration-300">
                                <div class="text-6xl md:text-7xl font-black mb-4 group-hover:text-green-300 transition-colors duration-300 text-shadow-lg">&lt;100ms</div>
                                <div class="text-blue-200 font-semibold text-lg" data-en="Avg Response" data-es="Respuesta Promedio">Avg Response</div>
                            </div>
                            <div class="group transform hover:scale-110 transition-all duration-300">
                                <div class="text-6xl md:text-7xl font-black mb-4 group-hover:text-pink-300 transition-colors duration-300 text-shadow-lg">∞</div>
                                <div class="text-blue-200 font-semibold text-lg" data-en="Tenants" data-es="Inquilinos">Tenants</div>
                            </div>
                            <div class="group transform hover:scale-110 transition-all duration-300">
                                <div class="text-6xl md:text-7xl font-black mb-4 group-hover:text-purple-300 transition-colors duration-300 text-shadow-lg">24/7</div>
                                <div class="text-blue-200 font-semibold text-lg" data-en="Support" data-es="Soporte">Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @guest
            <!-- Demo Credentials -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                <div class="relative overflow-hidden bg-gradient-to-r from-amber-50 via-orange-50 to-yellow-50 border-2 border-amber-200/50 rounded-3xl p-12 shadow-2xl transform hover:scale-[1.02] transition-all duration-500 hover-lift">
                    <!-- Background pattern -->
                    <div class="absolute inset-0 bg-pattern opacity-30"></div>
                    <div class="relative z-10">
                        <div class="flex flex-col lg:flex-row items-start gap-8">
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-amber-400 via-orange-500 to-red-500 rounded-3xl flex items-center justify-center shadow-xl transform hover:rotate-12 transition-all duration-500 pulse-glow">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v-2H7v-2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-3xl md:text-4xl font-black text-amber-900 mb-4 text-shadow-sm">
                                    🚀 <span data-en="Try Demo Access" data-es="Prueba el Acceso Demo">Try Demo Access</span>
                                </h3>
                                <p class="text-amber-800 mb-8 text-xl leading-relaxed">
                                    <span data-en="Experience the full power of Admin Central with our demo environment." data-es="Experimenta todo el poder de Admin Central con nuestro entorno de demostración.">Experience the full power of Admin Central with our demo environment.</span>
                                    <span class="font-bold block mt-2" data-en="All features unlocked, no credit card required!" data-es="¡Todas las funciones desbloqueadas, no se requiere tarjeta de crédito!">All features unlocked, no credit card required!</span>
                                </p>
                                <div class="bg-white/80 backdrop-blur-xl rounded-2xl p-8 border-2 border-amber-200/50 shadow-inner">
                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div class="space-y-2">
                                            <label class="block text-sm font-bold text-amber-900" data-en="Email Address" data-es="Dirección de Correo">Email Address</label>
                                            <div class="bg-white p-4 rounded-xl border-2 border-gray-200 font-mono text-gray-800 text-lg shadow-sm">admin@admincentral.com</div>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="block text-sm font-bold text-amber-900" data-en="Password" data-es="Contraseña">Password</label>
                                            <div class="bg-white p-4 rounded-xl border-2 border-gray-200 font-mono text-gray-800 text-lg shadow-sm">AdminCentral2024!</div>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                                        <a href="{{ route('login') }}"
                                           class="flex-1 group bg-gradient-to-r from-amber-500 via-orange-500 to-red-500 hover:from-amber-600 hover:via-orange-600 hover:to-red-600 text-white px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-500 text-center shadow-xl hover:shadow-2xl transform hover:scale-105 hover:rotate-1">
                                            <svg class="w-6 h-6 inline mr-2 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                                            <span data-en="Login to Demo" data-es="Ingresar al Demo">Login to Demo</span>
                                        </a>
                                        <button onclick="copyCredentials()"
                                                class="flex-1 group bg-white hover:bg-gray-50 text-gray-700 px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-500 border-2 border-gray-300 hover:border-amber-300 shadow-lg hover:shadow-xl transform hover:scale-105 hover:-rotate-1">
                                            <svg class="w-6 h-6 inline mr-2 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                                            <span data-en="Copy Credentials" data-es="Copiar Credenciales">Copy Credentials</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endguest
        </main>

        <!-- Footer -->
        <footer class="relative bg-gradient-to-r from-gray-900 via-blue-900 to-purple-900 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div class="col-span-1 md:col-span-2">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-purple-500 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold">Admin Central</h3>
                                <p class="text-gray-300 text-sm">Enterprise Multi-Tenant Platform</p>
                            </div>
                        </div>
                        <p class="text-gray-300 leading-relaxed mb-6 max-w-md">
                            The most advanced platform for managing isolated tenant environments.
                            Secure, scalable, and enterprise-ready for your ApiBrisas ecosystem.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur rounded-lg flex items-center justify-center hover:bg-white/20 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur rounded-lg flex items-center justify-center hover:bg-white/20 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur rounded-lg flex items-center justify-center hover:bg-white/20 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-white/10 backdrop-blur rounded-lg flex items-center justify-center hover:bg-white/20 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                        <ul class="space-y-3">
                            <li><a href="#features" class="text-gray-300 hover:text-white transition-colors hover:underline">Features</a></li>
                            <li><a href="{{ route('login') }}" class="text-gray-300 hover:text-white transition-colors hover:underline">Demo Login</a></li>
                            <li><a href="{{ route('register') }}" class="text-gray-300 hover:text-white transition-colors hover:underline">Get Started</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors hover:underline">Documentation</a></li>
                        </ul>
                    </div>

                    <!-- Support -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4">Support</h4>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors hover:underline">Help Center</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors hover:underline">API Reference</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors hover:underline">Status Page</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition-colors hover:underline">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom Footer -->
                <div class="border-t border-white/20 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-300 text-sm">
                        &copy; {{ date('Y') }} Admin Central. All rights reserved. Built with ❤️ using Laravel & VitalAccess.
                    </div>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-300 hover:text-white text-sm transition-colors">Privacy Policy</a>
                        <a href="#" class="text-gray-300 hover:text-white text-sm transition-colors">Terms of Service</a>
                        <a href="#" class="text-gray-300 hover:text-white text-sm transition-colors">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Language switcher functionality
        let currentLanguage = 'en';

        const translations = {
            en: {
                langCode: 'EN',
                langName: 'English'
            },
            es: {
                langCode: 'ES',
                langName: 'Español'
            }
        };

        function toggleLanguage() {
            currentLanguage = currentLanguage === 'en' ? 'es' : 'en';
            updateLanguage();
        }

        function updateLanguage() {
            const langButton = document.getElementById('currentLang');
            if (langButton) {
                langButton.textContent = translations[currentLanguage].langCode;

                // Add a subtle animation to the button
                langButton.style.transform = 'scale(1.1)';
                setTimeout(() => {
                    langButton.style.transform = 'scale(1)';
                }, 150);
            }

            // Update all elements with data attributes
            document.querySelectorAll('[data-en]').forEach(element => {
                const englishText = element.getAttribute('data-en');
                const spanishText = element.getAttribute('data-es');

                if (englishText && spanishText) {
                    const newText = currentLanguage === 'en' ? englishText : spanishText;

                    // Animate text change
                    element.style.opacity = '0.7';
                    element.style.transform = 'translateY(-5px)';

                    setTimeout(() => {
                        element.textContent = newText;
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }, 150);
                }
            });

            // Store language preference
            localStorage.setItem('preferred-language', currentLanguage);

            // Update page title
            document.title = currentLanguage === 'en'
                ? 'Admin Central - Enterprise Multi-Tenant Management'
                : 'Admin Central - Gestión Multi-Inquilino Empresarial';
        }

        // Copy credentials to clipboard with language support
        function copyCredentials() {
            const credentialsEn = `Email: admin@admincentral.com\nPassword: AdminCentral2024!`;
            const credentialsEs = `Correo: admin@admincentral.com\nContraseña: AdminCentral2024!`;
            const credentials = currentLanguage === 'en' ? credentialsEn : credentialsEs;

            navigator.clipboard.writeText(credentials).then(function() {
                // Show success message
                const button = event.target;
                const originalText = button.innerHTML;
                const successTextEn = '<svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Copied!';
                const successTextEs = '<svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>¡Copiado!';

                button.innerHTML = currentLanguage === 'en' ? successTextEn : successTextEs;
                button.classList.add('bg-green-50', 'text-green-700', 'border-green-300');

                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.classList.remove('bg-green-50', 'text-green-700', 'border-green-300');
                }, 2000);
            });
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Advanced scroll animations
        function handleScrollAnimations() {
            const elements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
            const windowHeight = window.innerHeight;

            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0) translateX(0) scale(1)';
                }
            });
        }

        // Parallax effect for floating elements
        function handleParallax() {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelectorAll('.floating');
            const speed = 0.5;

            parallax.forEach((element, index) => {
                const yPos = -(scrolled * speed * (index + 1) * 0.1);
                element.style.transform = `translate3d(0, ${yPos}px, 0) translateY(${Math.sin(Date.now() * 0.001 + index) * 10}px)`;
            });
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            // Load saved language preference
            const savedLanguage = localStorage.getItem('preferred-language');
            if (savedLanguage && savedLanguage !== currentLanguage) {
                currentLanguage = savedLanguage;
                updateLanguage();
            }

            // Set up scroll event listeners
            window.addEventListener('scroll', () => {
                handleScrollAnimations();
                handleParallax();
            });

            // Initial scroll check
            handleScrollAnimations();

            // Add intersection observer for more advanced animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, observerOptions);

            // Observe all animatable elements
            document.querySelectorAll('.hover-lift, .feature-card').forEach(el => {
                observer.observe(el);
            });
        });

        // Enhanced keyboard navigation
        document.addEventListener('keydown', function(e) {
            // Toggle language with Alt+L
            if (e.altKey && e.key === 'l') {
                e.preventDefault();
                toggleLanguage();
            }
        });
    </script>
</body>
</html>