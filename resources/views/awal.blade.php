<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHM - Structural Health Monitoring</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased overflow-y-auto">

    <!-- Main Container -->
    <div class="min-h-screen bg-gradient-to-br from-blue-800 via-blue-900 to-blue-950 relative overflow-hidden">

        <!-- Navigation -->
        <nav class="relative z-10 px-4 py-4 md:px-12">
            <div class="flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto">
                <!-- Logo -->
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="text-3xl font-bold">
                        <span class="text-black">S</span><span class="text-red-500">H</span><span class="text-black">M</span>
                    </div>
                    <span class="text-white ml-3 md:ml-5 text-2xl md:text-2xl">Welcome</span>
                </div>

                <!-- Auth Buttons -->
                <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('login') }}" class="text-white hover:text-blue-200 px-4 py-2 transition-colors duration-200">
                        LOG IN
                    </a>
                    <button class="text-white text-sm px-6 py-2 border border-white rounded hover:bg-white hover:text-blue-700 transition-all duration-200">
                        SIGN UP
                    </button>
                </div>


            </div>
        </nav>

        <!-- Background Pattern (Pointer-events none agar tidak menghalangi scroll) -->
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <div class="absolute top-20 right-20 w-24 h-24 sm:w-32 sm:h-32 border border-white rounded-full"></div>
            <div class="absolute top-40 right-40 w-12 h-12 sm:w-16 sm:h-16 border border-white rounded-full"></div>
            <div class="absolute bottom-32 left-20 w-20 h-20 sm:w-24 sm:h-24 border border-white rounded-full"></div>
            <div class="absolute bottom-20 right-40 w-6 h-6 sm:w-8 sm:h-8 bg-white rounded-full"></div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 px-4 md:px-12 py-12">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">

                    <!-- Left Content -->
                    <div class="space-y-6 lg:space-y-8 text-center lg:text-left">
                        <div>
                            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-medium text-white leading-tight">
                                STRUCTURAL<br>
                                HEALTH<br>
                                MONITORING
                            </h1>
                        </div>

                        <div class="space-y-1 sm:space-y-2">
                            <p class="text-white text-base sm:text-lg md:text-xl opacity-90">
                                Dengan Menggunakan Pengukuran
                            </p>
                            <p class="text-white text-base sm:text-lg md:text-xl opacity-90">
                                Strain Gauge dan Load Cell
                            </p>
                        </div>

                        <div class="pt-4">
                            <a href="{{ route('login') }}"
                                class="border-2 border-white text-white px-6 sm:px-8 py-3 sm:py-4 text-base sm:text-lg font-medium hover:bg-white hover:text-blue-700 transition-all duration-300 transform hover:scale-105 inline-block text-center">
                                GET STARTED
                            </a>

                        </div>
                    </div>

                    <!-- Right Content - Logo -->
                    <div class="flex justify-center items-center mt-12 lg:mt-0">
                        <div class="relative">
                            <!-- Large SHM Text -->
                            <div class="text-[6rem] sm:text-[10rem] md:text-[12rem] lg:text-[16rem] font-grey-600 text-white opacity-20 leading-none">
                                SHM
                            </div>

                            <!-- Overlay Text -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl font-bold">
                                        <span class="text-black">S</span><span class="text-red-500">H</span><span
                                            class="text-black">M</span>
                                    </div>
                                    <div class="text-white text-xs sm:text-sm md:text-base font-grey-700 tracking-widest opacity-80">
                                        STRUCTURAL HEALTH MONITORING
                                    </div>
                                </div>
                            </div>

                            <!-- Decorative Elements -->
                            <div class="absolute -top-4 -right-4 w-3 h-3 sm:w-4 sm:h-4 bg-red-500 rounded-full"></div>
                            <div class="absolute -bottom-2 -left-3 w-4 h-4 sm:w-6 sm:h-6 bg-blue-300 rounded-full opacity-70"></div>
                            <div class="absolute top-1/2 -right-6 w-1 h-1 sm:w-2 sm:h-2 bg-white rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Background Elements -->
        <div class="absolute bottom-0 left-0 w-full h-20 sm:h-32 bg-gradient-to-t from-slate-900 to-transparent pointer-events-none"></div>

        <!-- Floating Elements -->
        <div class="absolute top-1/4 left-1/4 w-1 h-1 sm:w-2 sm:h-2 bg-white rounded-full animate-pulse pointer-events-none"></div>
        <div class="absolute top-3/4 right-1/3 w-2 h-2 sm:w-3 sm:h-3 bg-blue-300 rounded-full animate-pulse delay-1000 pointer-events-none"></div>
        <div class="absolute top-1/2 left-1/6 w-1 h-1 bg-red-500 rounded-full animate-pulse delay-500 pointer-events-none"></div>
    </div>

</body>

</html>