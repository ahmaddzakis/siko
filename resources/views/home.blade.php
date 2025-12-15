<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiketIn - Events</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-[#1a1a2e] min-h-screen font-sans">

    <!-- Header -->
    <header class="bg-[#16213e] border-b border-gray-700">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Left: Logo -->
            <div class="flex items-center gap-8">
                <div class="text-2xl font-bold text-white">TiketIn</div>

                <!-- Navigation -->
                <nav class="flex gap-6 text-sm">
                    <a href="/home" class="text-white font-medium flex items-center gap-2 border-b-2 border-white pb-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Events
                    </a>
                    <a href="/calendars" class="text-gray-400 hover:text-white transition flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Calendars
                    </a>
                    <a href="/discover" class="text-gray-400 hover:text-white transition flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                        Discover
                    </a>
                </nav>
            </div>

            <!-- Right: Actions -->
            <div class="flex items-center gap-4">
                <span class="text-gray-400 text-sm">5:20 PM GMT+7</span>
                <a href="/create-event"
                    class="bg-white hover:bg-gray-100 text-black text-sm font-medium px-4 py-2 rounded transition">
                    Create Event
                </a>
                <button class="p-2 hover:bg-gray-700 rounded-full transition">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <button class="p-2 hover:bg-gray-700 rounded-full transition">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
                @auth
                    <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center cursor-pointer">
                        <span class="text-white text-sm font-medium">{{ substr(auth()->user()->name, 0, 1) }}</span>
                    </div>
                @else
                    <a href="/login"
                        class="w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center cursor-pointer hover:bg-gray-500 transition">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-6 py-8">

        <!-- Page Title and Tabs -->
        <div class="mb-8">
            <h1 class="text-white text-4xl font-bold mb-6">Events</h1>

            <!-- Tabs -->
            <div class="flex gap-4 border-b border-gray-700">
                <button class="text-white font-medium px-4 py-2 border-b-2 border-white -mb-px">
                    Upcoming
                </button>
                <button class="text-gray-400 hover:text-white font-medium px-4 py-2">
                    Past
                </button>
            </div>
        </div>

        <!-- Empty State -->
        <div class="flex flex-col items-center justify-center py-20">

            <!-- Calendar Icon with Zero Badge -->
            <div class="mb-6 relative">
                <svg class="w-32 h-32 text-gray-600" viewBox="0 0 100 100" fill="currentColor">
                    <!-- Calendar base -->
                    <rect x="20" y="25" width="60" height="55" rx="6" fill="currentColor" opacity="0.3" />
                    <!-- Calendar header -->
                    <rect x="20" y="25" width="60" height="12" rx="6" fill="currentColor" opacity="0.5" />
                    <!-- Calendar grid -->
                    <rect x="28" y="42" width="8" height="8" rx="2" fill="currentColor" opacity="0.4" />
                    <rect x="40" y="42" width="8" height="8" rx="2" fill="currentColor" opacity="0.4" />
                    <rect x="52" y="42" width="8" height="8" rx="2" fill="currentColor" opacity="0.4" />
                    <rect x="28" y="54" width="8" height="8" rx="2" fill="currentColor" opacity="0.4" />
                    <rect x="40" y="54" width="8" height="8" rx="2" fill="currentColor" opacity="0.4" />
                    <rect x="52" y="54" width="8" height="8" rx="2" fill="currentColor" opacity="0.4" />
                    <rect x="28" y="66" width="8" height="8" rx="2" fill="currentColor" opacity="0.4" />
                    <rect x="40" y="66" width="8" height="8" rx="2" fill="currentColor" opacity="0.4" />
                    <!-- Zero badge -->
                    <circle cx="70" cy="30" r="15" fill="currentColor" opacity="0.5" />
                    <text x="70" y="37" text-anchor="middle" font-size="20" font-weight="bold" fill="#1a1a2e">0</text>
                </svg>
            </div>

            <!-- No Events Title -->
            <h2 class="text-gray-300 text-2xl font-semibold mb-2">
                No Upcoming Events
            </h2>

            <!-- Subtitle -->
            <p class="text-gray-400 text-base mb-8">
                You have no upcoming events. Why not host one?
            </p>

            <!-- Create Event Button -->
            <a href="/create-event"
                class="bg-[#2a2a3e] hover:bg-[#3a3a4e] text-gray-200 font-medium px-5 py-2.5 rounded-md transition flex items-center gap-2 border border-gray-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Create Event
            </a>

        </div>

    </main>

</body>

</html>