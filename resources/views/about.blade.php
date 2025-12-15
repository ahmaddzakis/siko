<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siko - Welcome</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-[#1a1a1a] flex justify-center items-center min-h-screen font-sans">
    <!-- Main Card -->
    <div class="bg-[#222] w-full max-w-[400px] rounded-2xl p-8 shadow-2xl border border-gray-800 relative">

        <!-- Top Right Sign In (Absolute relative to body or fixed? Design shows it top right of screen usually) -->
        <!-- Actually, in the design it's top right of the screen. Let's place it outside or absolute in body.
             But to keep it simple, I'll put it in the card or simplified header.
             Wait, the design has a header "Luma ... Sign In".
             I will add a fixed header.
        -->
    </div>

    <!-- Fixed Header -->
    <div class="fixed top-0 left-0 w-full p-6 flex justify-between items-center z-50 pointer-events-none">
        <div class="text-white font-bold text-xl pointer-events-auto">Siko</div>
        <div class="flex gap-4 items-center pointer-events-auto">
            <span class="text-gray-400 text-sm">4:48 PM GMT+7</span>
            <a href="#" class="text-gray-400 text-sm hover:text-white transition">Explore Events ↗</a>
            <a href="/login" class="bg-[#333] hover:bg-[#444] text-white text-sm px-4 py-2 rounded-full transition">Sign
                In</a>
        </div>
    </div>

    <!-- Center Content -->
    <div
        class="bg-[#222] w-full max-w-[400px] rounded-3xl p-8 shadow-2xl border border-gray-800 flex flex-col items-center text-center z-10">

        <!-- Icon -->
        <div class="w-16 h-16 bg-[#333] rounded-full flex items-center justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white"
                class="w-8 h-8 opacity-80">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
            </svg>
        </div>

        <!-- Title -->
        <h1 class="text-white text-xl font-semibold mb-2">Welcome to Siko</h1>
        <p class="text-gray-400 text-sm mb-8">Please sign in or sign up below.</p>

        <!-- Form -->
        <form action="{{ route('login') }}" method="POST" class="w-full space-y-4">
            @csrf

            <!-- Email Input -->
            <div class="space-y-1 text-left">
                <div class="flex justify-between">
                    <label for="email" class="text-[#666] text-xs font-semibold uppercase tracking-wider">Email</label>
                    <span class="text-[#666] text-xs cursor-pointer hover:text-gray-400 flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3">
                            </path>
                        </svg>
                        Use Phone Number
                    </span>
                </div>
                <input type="email" id="email" name="email" placeholder="you@email.com"
                    class="w-full bg-[#1a1a1a] border border-gray-700 text-white text-sm rounded-lg px-4 py-3 focus:outline-none focus:border-white focus:ring-1 focus:ring-white transition placeholder-gray-600">
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-white hover:bg-gray-200 text-black font-semibold rounded-lg py-3 text-sm transition shadow-lg">
                Continue with Email
            </button>
        </form>

        <!-- Divider -->
        <div class="w-full h-px bg-gray-800 my-6"></div>

        <!-- Social Logins -->
        <div class="w-full space-y-3">
            <button
                class="w-full bg-[#333] hover:bg-[#3a3a3a] text-white text-sm font-medium rounded-lg py-3 flex items-center justify-center gap-3 transition border border-gray-700/50">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="white">
                    <path
                        d="M21.35 11.1H12v2.8h5.25c-.23 1.23-.9 2.28-1.93 2.97v2.48h3.13c1.83-1.68 2.88-4.15 2.88-6.95 0-.68-.06-1.33-.16-1.95z"
                        fill="#4285F4" />
                    <path
                        d="M12 21c2.7 0 4.96-.9 6.64-2.42l-3.13-2.48c-.9.6-2.04.95-3.51.95-2.73 0-5.06-1.87-5.89-4.39H2.89v2.52C4.57 18.67 8 21 12 21z"
                        fill="#34A853" />
                    <path
                        d="M6.11 12.66c-.19-.59-.3-1.22-.3-1.87s.11-1.28.3-1.87V6.39H2.89C2.17 7.85 1.76 9.48 1.76 12s.41 4.15 1.13 5.61l3.22-2.52z"
                        fill="#FBBC05" />
                    <path
                        d="M12 5.16c1.47 0 2.79.5 3.86 1.52l2.87-2.87C16.96 2.19 14.7 1.13 12 1.13 8 1.13 4.57 3.47 2.89 6.39l3.22 2.52c.83-2.52 3.16-4.39 5.89-4.39z"
                        fill="#EA4335" />
                </svg>
                Sign in with Google
            </button>
            <button
                class="w-full bg-[#333] hover:bg-[#3a3a3a] text-white text-sm font-medium rounded-lg py-3 flex items-center justify-center gap-3 transition border border-gray-700/50">
                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                </svg>
                Sign in with Passkey
            </button>
        </div>

    </div>

</body>

</html>