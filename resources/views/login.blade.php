<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHM - Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <!-- Main Container -->
    <div class="min-h-screen bg-gradient-to-br from-blue-800 via-blue-900 to-blue-950 relative overflow-hidden">

        <!-- Navigation -->
        <nav class="relative z-10 px-4 sm:px-6 md:px-12 py-4 sm:py-6">
            <div class="flex flex-col sm:flex-row justify-between items-center max-w-7xl mx-auto">
                <!-- Logo -->
                <div class="flex items-center mb-4 sm:mb-0">
                    <div class="text-2xl sm:text-3xl font-bold">
                        <span class="text-black">S</span><span class="text-red-500">H</span><span class="text-black">M</span>
                    </div>
                    <span class="text-white ml-2 sm:ml-3 text-lg sm:text-2xl">Welcome</span>
                </div>

                <!-- Auth Buttons -->
                <div class="flex space-x-2 sm:space-x-4 mt-2 sm:mt-0">
                    <!-- Tombol LOG IN diubah menjadi link aktif -->
                    <a href="{{ route('login') }}" class="bg-transparent border border-white text-white px-4 sm:px-6 py-1 sm:py-2 rounded hover:bg-white hover:text-blue-700 transition-all duration-200 text-sm sm:text-base">
                        LOG IN
                    </a>

                    <a href="{{ route('signup') }}" class="text-white hover:text-blue-200 px-3 sm:px-4 py-1 sm:py-2 transition-colors duration-200 font-semibold text-sm sm:text-base">
                        SIGN UP
                    </a>
                </div>
            </div>
        </nav>

        <!-- Background SHM Large Text -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <div class="text-[20rem] md:text-[25rem] lg:text-[30rem] font-black font-grey-00 text-white opacity-10 leading-none select-none">
                SHM
            </div>
        </div>

        <!-- Background Text -->
        <div class="absolute bottom-10 sm:bottom-16 left-1/2 transform -translate-x-1/2 text-center pointer-events-none">
            <div class="text-lg sm:text-2xl md:text-4xl font-bold text-white opacity-20 tracking-widest">
                STRUCTURAL HEALTH MONITORING
            </div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 flex items-center justify-center min-h-[calc(100vh-100px)] px-4 sm:px-6">
            <!-- Login Form -->
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-2xl shadow-2xl p-6 sm:p-10 w-full max-w-xs sm:max-w-sm">
                <!-- Title -->
                <div class="text-center mb-4 sm:mb-6">
                    <h2 class="text-xl sm:text-2xl font-bold text-black">LOG IN</h2>
                </div>

                <form method="POST" action="{{ route('login.post') }}" class="space-y-3 sm:space-y-4">
                    @csrf

                    <!-- Email Field -->
                    <!-- Email Field -->
                    <div>
                        <label class="block text-black text-sm sm:text-base mb-1">Email Address</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="w-full px-0 py-2 sm:py-2 text-black bg-transparent border-0 border-b border-gray-400 focus:border-black focus:outline-none focus:ring-0 transition-colors duration-200 text-sm sm:text-base"
                            required>
                        @error('email')
                        <span class="text-red-500 text-xs sm:text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>


                    <!-- Password Field -->
                    <div>
                        <label class="block text-black text-sm sm:text-base mb-1">Password</label>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="w-full px-0 py-2 sm:py-2 text-black bg-transparent border-0 border-b border-gray-400 focus:border-black focus:outline-none focus:ring-0 transition-colors duration-200 text-sm sm:text-base"
                            required>
                        @error('password')
                        <span class="text-red-500 text-xs sm:text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Forgot Password -->
                    <div class="text-right">
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-xs sm:text-sm underline transition-colors duration-200">
                            Forgot Password?
                        </a>
                    </div>

                    <!-- Login Button -->
                    <div class="pt-2">
                        <button
                            type="submit"
                            class="w-full bg-blue-900 text-white font-bold py-2 sm:py-3 px-4 sm:px-6 rounded-full text-sm sm:text-base transition-all duration-300 transform hover:scale-105 shadow-lg">
                            LOG IN
                        </button>
                    </div>

                    <!-- Sign Up Link -->
                    <div class="text-center pt-2 sm:pt-3">
                        <p class="text-gray-600 text-xs sm:text-sm mb-1">Doesn't have an account yet?</p>
                        <a href="{{ route('signup') }}" class="text-blue-600 hover:text-blue-800 font-medium text-xs sm:text-sm underline transition-colors duration-200">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-20 right-10 w-3 h-3 bg-white rounded-full opacity-30 animate-pulse"></div>
        <div class="absolute bottom-32 left-5 w-4 h-4 bg-blue-300 rounded-full opacity-40 animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 right-20 w-2 h-2 bg-white rounded-full opacity-50 animate-pulse delay-500"></div>
        <div class="absolute bottom-40 right-20 w-3 h-3 bg-blue-200 rounded-full opacity-30 animate-pulse delay-700"></div>
    </div>
</body>

</html>