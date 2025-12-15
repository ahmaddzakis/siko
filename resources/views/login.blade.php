<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siko - Login</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="bg-[#121212] flex flex-col min-h-screen font-['Inter'] text-white">

    <!-- Navbar -->
    <header class="w-full flex justify-between items-center px-6 py-4 fixed top-0 left-0 z-10">
        <div class="text-xl font-bold tracking-tight">Siko</div>
        <div class="flex items-center gap-4 text-sm font-medium text-gray-400">
            <!-- Time/Date placeholder if needed, otherwise just Sign In -->
            <span>{{ now()->format('g:i A') }} GMT+7</span>
            <a href="#" class="hover:text-white transition">Explore Events ↗</a>
            <a href="{{ route('login') }}" class="bg-[#222] hover:bg-[#333] text-white px-4 py-2 rounded-lg transition">Sign In</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center relative px-4">
        
        <!-- Login Card -->
        <div class="bg-[#1E1E1E] w-full max-w-[400px] rounded-2xl p-8 border border-[#333] shadow-2xl relative z-20">
            
            <!-- Icon -->
            <div class="flex justify-center mb-6">
                <div class="w-12 h-12 rounded-full border border-[#333] flex items-center justify-center text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                    </svg>
                </div>
            </div>

            <!-- Title -->
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold mb-2">Welcome to Siko</h1>
                <p class="text-gray-500 text-sm">Please sign in or sign up below.</p>
            </div>

            <!-- Form -->
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                
                <!-- Email Input Group -->
                <div class="space-y-1">
                    <div class="flex justify-between items-center text-xs uppercase tracking-wider font-semibold text-gray-500 mb-1">
                        <label for="email">Email</label>
                        <button type="button" class="flex items-center gap-1 hover:text-gray-300 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>
                            Use Phone Number
                        </button>
                    </div>
                    <input type="email" id="email" name="email" placeholder="you@email.com" 
                        class="w-full bg-[#161616] border border-[#333] text-white rounded-lg px-4 py-3 focus:outline-none focus:border-white transition placeholder-gray-600">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-white hover:bg-gray-200 text-black font-semibold rounded-lg py-3 transition">
                    Continue with Email
                </button>
            </form>

            <div class="my-4 border-t border-[#333]"></div>

            <!-- Social Buttons -->
            <div class="space-y-3">
                <button class="w-full bg-[#262626] hover:bg-[#333] text-white font-medium rounded-lg py-3 flex items-center justify-center gap-2 border border-[#333] transition">
                    <span class="font-bold font-serif">G</span>
                    Sign in with Google
                </button>
                <button class="w-full bg-[#262626] hover:bg-[#333] text-white font-medium rounded-lg py-3 flex items-center justify-center gap-2 border border-[#333] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-gray-400">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                    </svg>
                    Sign in with Passkey
                </button>
            </div>

        </div>
    </main>
    
    <!-- Floating Action / Footer Icons if any -->
    <div class="fixed right-6 bottom-1/2 translate-y-1/2 flex flex-col gap-4">
        <!-- Icons from original image -->
        <button class="text-gray-500 hover:text-white transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
            </svg>
        </button>
        <button class="w-8 h-8 rounded-full bg-pink-400/20 flex items-center justify-center text-pink-400 text-xs font-bold border border-pink-400/30">
            中
        </button>
    </div>

</body>
</html>