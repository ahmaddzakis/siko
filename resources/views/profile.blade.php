<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiketIn - Profile</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-[#9AC5EB] text-[#222] min-h-screen font-sans">

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto mt-20 px-6">

        <!-- User Header -->
        <div class="flex items-center gap-8 mb-16 border-b border-[#2D82D8]/30 pb-12">
            <!-- Large Avatar -->
            <div
                class="w-32 h-32 rounded-full bg-gradient-to-br from-[#9AC5EB] to-[#2D82D8] flex items-center justify-center text-5xl shadow-2xl relative">
                <div class="text-white font-bold mb-1"></div>
            </div>

            <!-- Info -->
            <div>
                <h1 class="text-3xl font-bold mb-2">Mustika</h1>
                <div class="flex items-center gap-2 text-gray-500 text-sm mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0h18M5 10.5h.008v.008H5V10.5Zm0 3h.008v.008H5V13.5Zm0 3h.008v.008H5V16.5Zm3-6h.008v.008H8V10.5Zm0 3h.008v.008H8V13.5Zm0 3h.008v.008H8V16.5Zm3-6h.008v.008H11V10.5Zm0 3h.008v.008H11V13.5Zm0 3h.008v.008H11V16.5Zm3-6h.008v.008H14V10.5Zm0 3h.008v.008H14V13.5Zm0 3h.008v.008H14V16.5Z" />
                    </svg>
                    Joined October 2024
                </div>
                <div class="flex gap-4 text-sm font-medium">
                    <span class="text-[#222]">1 <span class="text-gray-600 font-normal">Hosted</span></span>
                    <span class="text-[#222]">5 <span class="text-gray-600 font-normal">Attended</span></span>
                </div>
            </div>
        </div>

        <!-- Past Events Section -->
        <div>
            <h2 class="text-lg font-semibold mb-6 flex items-center gap-2">
                Past Events
                <!-- Filter Grid Icon -->
                <div class="ml-auto flex gap-2">
                    <button class="text-gray-600 hover:text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                    </button>
                </div>
            </h2>

            <!-- Event Card -->
            <div class="flex gap-4">
                <div
                    class="bg-white rounded-xl p-4 flex gap-4 hover:shadow-lg transition cursor-pointer group w-full max-w-md border border-transparent">
                    <!-- Image Placeholder -->
                    <div
                        class="w-24 h-24 bg-gradient-to-tr from-green-900 via-black to-blue-900 rounded-lg flex-shrink-0 relative overflow-hidden">
                        <div class="absolute inset-0 bg-[url('/path/to/noise.png')] opacity-20"></div>
                        <!-- Abstract lines for decoration -->
                        <div class="absolute bottom-0 left-0 right-0 h-1/2 flex items-end justify-center gap-1 pb-1">
                            <div class="w-1 h-4 bg-green-500/50"></div>
                            <div class="w-1 h-8 bg-green-500/50"></div>
                            <div class="w-1 h-6 bg-green-500/50"></div>
                            <div class="w-1 h-3 bg-green-500/50"></div>
                        </div>
                    </div>

                    <!-- Details -->
                    <div class="flex flex-col justify-center">
                        <h3 class="font-bold text-[#222] mb-2 group-hover:text-[#2D82D8] transition">Event ULTAH WIDY
                        </h3>
                        <div class="flex items-center gap-2 text-xs text-gray-400 mb-1">
                            <div class="w-4 h-4 rounded-full bg-[#2D82D8]"></div>
                            By Mustika
                        </div>
                        <div class="text-xs text-gray-500">
                            Today, 3:00 PM
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Floating Action Button (Matches Screenshot) -->
    <div class="fixed right-10 top-1/2 transform -translate-y-1/2 flex flex-col gap-4">
        <!-- Only if needed, empty for now based on image cleanup -->
    </div>

    <div class="fixed right-6 top-[40%] flex flex-col gap-4">
        <!-- Grid Icon? -->
    </div>

    <div class="fixed bottom-10 right-10">
        <div
            class="w-10 h-10 bg-[#eba5a5] rounded-full flex items-center justify-center text-xs font-bold text-red-900 cursor-pointer shadow-lg hover:bg-red-300 transition">
            CH
        </div>
    </div>

</body>

</html>