<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHM - Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Mobile menu styles */
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }

        .mobile-menu.open {
            transform: translateX(0);
        }

        .menu-overlay {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease-in-out;
        }

        .menu-overlay.open {
            opacity: 1;
            visibility: visible;
        }
    </style>
</head>

<body class="antialiased bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 min-h-screen">
    <!-- Mobile Menu Button -->
    <button id="mobileMenuButton" class="lg:hidden fixed top-4 left-4 z-50 p-2 bg-blue-800/80 backdrop-blur-sm rounded-lg text-white">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    <!-- Mobile Menu Overlay -->
    <div id="menuOverlay" class="menu-overlay lg:hidden fixed inset-0 bg-black/50 z-40"></div>

    <!-- Mobile Sidebar Menu -->
    <div id="mobileMenu" class="mobile-menu lg:hidden fixed top-0 left-0 w-64 h-full bg-blue-900/95 backdrop-blur-md z-50 border-r border-blue-700/50">
        <div class="p-6 border-b border-blue-700/50">
            <div class="flex items-center space-x-3">
                <div class="text-2xl font-bold">
                    <span class="text-white">S</span><span class="text-red-500">H</span><span class="text-white">M</span>
                </div>
                <span class="text-white text-lg font-medium">Menu</span>
            </div>
        </div>

        <div class="p-4 space-y-4">
            <a href="{{ route('dashboard') }}" class="block text-white font-medium hover:text-blue-200 transition-colors duration-200 text-base py-2 px-3 rounded-lg hover:bg-blue-800/50">
                TENTANG
            </a>
            <a href="#" class="block text-white font-bold hover:text-blue-200 transition-colors duration-200 text-base py-2 px-3 rounded-lg hover:bg-blue-800/50">
                DATA UJI
            </a>
            <a href="#" class="block text-white font-medium hover:text-blue-200 transition-colors duration-200 text-base py-2 px-3 rounded-lg hover:bg-blue-800/50">
                PENGATURAN
            </a>

            <!-- User Info in Mobile Menu -->
            <div class="pt-4 border-t border-blue-700/50">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center shadow-lg">
                        <span class="font-bold text-white text-sm">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                    </div>
                    <div class="text-left">
                        <p class="text-white font-medium text-sm">{{ Auth::user()->name }}</p>
                        <p class="text-blue-200 text-xs">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="mt-3">
                    @csrf
                    <button type="submit" class="w-full px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-colors duration-200 text-sm font-medium shadow-lg">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="bg-blue-900/50 backdrop-blur-md border-b border-blue-700/50 sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo - Hidden on mobile, shown on desktop -->
                <div class="hidden lg:flex items-center space-x-3">
                    <div class="text-3xl font-bold">
                        <span class="text-white">S</span><span class="text-red-500">H</span><span class="text-white">M</span>
                    </div>
                    <span class="text-white text-xl font-medium">Welcome</span>
                </div>

                <!-- Navigation Menu - Hidden on mobile -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('dashboard') }}" class="text-white font-medium hover:text-blue-200 transition-colors duration-200 text-base">
                        TENTANG
                    </a>
                    <a href="#" class="text-white font-bold hover:text-blue-200 transition-colors duration-200 text-base">
                        DATA UJI
                    </a>
                    <a href="#" class="text-white font-medium hover:text-blue-200 transition-colors duration-200 text-base">
                        PENGATURAN
                    </a>
                </div>

                <!-- User Section - Hidden on mobile -->
                <div class="hidden lg:flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-white font-medium text-sm">{{ Auth::user()->name }}</p>
                        <p class="text-blue-200 text-xs">{{ Auth::user()->email }}</p>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center shadow-lg">
                        <span class="font-bold text-white text-lg">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="ml-2 px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-colors duration-200 text-sm font-medium shadow-lg">
                            Logout
                        </button>
                    </form>
                </div>

                <!-- Mobile Logo -->
                <div class="lg:hidden flex-1 flex justify-center">
                    <div class="text-2xl font-bold">
                        <span class="text-white">S</span><span class="text-red-500">H</span><span class="text-white">M</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer with watermark -->
    <div class="fixed bottom-0 left-0 right-0 pointer-events-none">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <p class="text-blue-300/20 text-2xl sm:text-4xl lg:text-6xl font-bold text-center tracking-wider">
                STRUCTURAL HEALTH MONITORING
            </p>
        </div>
    </div>

    <script>
        // Mobile menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const mobileMenu = document.getElementById('mobileMenu');
            const menuOverlay = document.getElementById('menuOverlay');

            function toggleMenu() {
                mobileMenu.classList.toggle('open');
                menuOverlay.classList.toggle('open');
                document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
            }

            mobileMenuButton.addEventListener('click', toggleMenu);
            menuOverlay.addEventListener('click', toggleMenu);

            // Close menu when clicking on links
            const menuLinks = mobileMenu.querySelectorAll('a');
            menuLinks.forEach(link => {
                link.addEventListener('click', toggleMenu);
            });
        });
    </script>
</body>

</html>