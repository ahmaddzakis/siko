<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>TiketIn - Events</title>
</head>

<body class="bg-[#1a1a1a] flex justify-center items-center min-h-screen font-sans">
    <!-- Main Container -->
    <div class="w-full max-w-[1200px] bg-white mx-auto overflow-hidden shadow-2xl relative min-h-[800px]">

        <!-- Header -->
        <header class="flex justify-between items-center px-8 py-4 bg-white shadow-sm sticky top-0 z-50">

            <!-- Left: Logo -->
            <div class="text-3xl font-bold tracking-tight text-[#2D82D8]">TiketIn</div>

            <!-- Center: Navigation -->
            <nav
                class="flex gap-8 text-lg font-medium text-black items-center absolute left-1/2 transform -translate-x-1/2">
                <a href="/about" class="hover:text-blue-600 transition">About</a>
                <a href="/home" class="hover:text-blue-600 transition">Home</a>
                <a href="/event" class="text-blue-600 font-bold transition">Event</a>
            </nav>

            <!-- Right: Actions (Create Event, Search, Notif, Profile) -->
            <div class="flex items-center gap-6">
                <!-- Create Event Link -->
                <a href="/create-event" class="text-gray-600 font-medium hover:text-black transition">Create Event</a>

                <!-- Search Icon -->
                <button class="p-1 hover:bg-gray-100 rounded-full transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </button>

                <!-- Notif Icon -->
                <button class="p-1 hover:bg-gray-100 rounded-full transition relative">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </button>

                <!-- Profile / Login -->
                @auth
                    <!-- Profile Icon (Yellow Circle) -->
                    <div
                        class="w-8 h-8 bg-yellow-300 rounded-full flex items-center justify-center cursor-pointer hover:ring-2 hover:ring-offset-2 hover:ring-yellow-400 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-yellow-700">
                            <path fill-rule="evenodd"
                                d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0NM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                @else
                    <a href="/login"
                        class="bg-[#2D82D8] hover:bg-blue-700 text-white text-sm font-medium px-6 py-2 rounded shadow transition">
                        Login
                    </a>
                @endauth
            </div>
        </header>

        <!-- Main Content Section (Blue Background) -->
        <main class="bg-[#9AC5EB] m-4 mt-0 p-12 min-h-[700px] flex flex-col items-center">

            <!-- Title -->
            <h1 class="text-black text-2xl tracking-widest uppercase mb-2 mt-4 font-normal">OUR NEXT EVENT</h1>

            <!-- Subtitle -->
            <p class="text-black text-base max-w-lg text-center leading-relaxed mb-12">
                get an interesting and suitable event for you or your family, yes,
                we will prepare it easily, choose what you like
            </p>

            <!-- Event Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-12 w-full max-w-4xl px-8">

                <!-- Card 1 -->
                <a href="/create-event" class="flex flex-col items-center hover:scale-105 transition duration-300">
                    <!-- Image Placeholder -->
                    <div class="w-full h-40 bg-[#D9D9D9] mb-3 shadow-sm rounded-sm"></div>
                    <!-- Title -->
                    <h3 class="text-black text-lg mb-3">taylor swift</h3>
                    <!-- Bottom Placeholders -->
                    <div class="flex gap-4 w-full">
                        <div class="h-6 bg-[#D9D9D9] flex-1 rounded-sm"></div>
                        <div class="h-6 bg-[#D9D9D9] flex-1 rounded-sm"></div>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="/create-event" class="flex flex-col items-center hover:scale-105 transition duration-300">
                    <div class="w-full h-40 bg-[#D9D9D9] mb-3 shadow-sm rounded-sm"></div>
                    <h3 class="text-black text-lg mb-3">taylor swift</h3>
                    <div class="flex gap-4 w-full">
                        <div class="h-6 bg-[#D9D9D9] flex-1 rounded-sm"></div>
                        <div class="h-6 bg-[#D9D9D9] flex-1 rounded-sm"></div>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="/create-event" class="flex flex-col items-center hover:scale-105 transition duration-300">
                    <div class="w-full h-40 bg-[#D9D9D9] mb-3 shadow-sm rounded-sm"></div>
                    <h3 class="text-black text-lg mb-3">taylor swift</h3>
                    <div class="flex gap-4 w-full">
                        <div class="h-6 bg-[#D9D9D9] flex-1 rounded-sm"></div>
                        <div class="h-6 bg-[#D9D9D9] flex-1 rounded-sm"></div>
                    </div>
                </a>

                <!-- Card 4 (Highlighted as per image, maybe?) - Keeping it uniform for now -->
                <a href="/create-event"
                    class="flex flex-col items-center relative hover:scale-105 transition duration-300">
                    <!-- Highlight border example -->
                    <div
                        class="w-full h-40 bg-[#D9D9D9] mb-3 shadow-sm rounded-sm border-4 border-[#2D82D8] box-border">
                    </div>
                    <h3 class="text-black text-lg mb-3">taylor swift</h3>
                    <div class="flex gap-4 w-full">
                        <div class="h-6 bg-[#D9D9D9] flex-1 rounded-sm"></div>
                        <div class="h-6 bg-[#D9D9D9] flex-1 rounded-sm"></div>
                    </div>
                </a>

            </div>

        </main>
    </div>
</body>

</html>