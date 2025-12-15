<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>TiketIn - Create Event</title>
</head>

<body class="bg-[#1a1a1a] flex justify-center items-center min-h-screen font-sans">
    <!-- Main Container -->
    <div class="w-full max-w-[1200px] bg-white mx-auto overflow-hidden shadow-2xl relative min-h-screen">

        <!-- Header -->
        <header class="flex justify-between items-center px-8 py-4 bg-white shadow-sm sticky top-0 z-50">

            <!-- Left: Logo -->
            <div class="text-3xl font-bold tracking-tight text-[#2D82D8]">TiketIn</div>

            <!-- Center: Navigation -->
            <nav
                class="flex gap-8 text-lg font-medium text-black items-center absolute left-1/2 transform -translate-x-1/2">
                <a href="/about" class="hover:text-blue-600 transition">About</a>
                <a href="/home" class="hover:text-blue-600 transition">Home</a>
                <a href="/event" class="hover:text-blue-600 transition">Event</a>
            </nav>

            <!-- Right: Actions (Create Event, Search, Notif, Profile) -->
            <div class="flex items-center gap-6">
                <!-- Create Event Link -->
                <a href="/create-event" class="text-blue-600 font-bold transition">Create Event</a>

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
                    <a href="/profile"
                        class="w-8 h-8 bg-yellow-300 rounded-full flex items-center justify-center cursor-pointer hover:ring-2 hover:ring-offset-2 hover:ring-yellow-400 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-yellow-700">
                            <path fill-rule="evenodd"
                                d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                @else
                    <a href="/login"
                        class="bg-[#2D82D8] hover:bg-blue-700 text-white text-sm font-medium px-6 py-2 rounded shadow transition">
                        Login
                    </a>
                @endauth
            </div>
        </header>

        <!-- Main Content Section (Blue Background) -->
        <main class="bg-gradient-to-br from-[#9AC5EB] to-[#7AB5E0] m-4 mt-0 p-12 min-h-[calc(100vh-80px)]">

            <!-- Title Section -->
            <div class="text-center mb-10">
                <h1 class="text-black text-3xl font-bold mb-2">Create Your Event</h1>
                <p class="text-gray-700 text-base">Fill in the details below to create an amazing event</p>
            </div>

            <!-- Form Container -->
            <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-2xl p-10">
                <form action="/create-event" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- Event Name -->
                    <div>
                        <label for="event_name" class="block text-sm font-semibold text-gray-700 mb-2">
                            Event Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="event_name" name="event_name" required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-[#2D82D8] focus:ring-2 focus:ring-[#2D82D8]/20 outline-none transition duration-200"
                            placeholder="Enter your event name">
                    </div>

                    <!-- Event Description -->
                    <div>
                        <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                            Event Description <span class="text-red-500">*</span>
                        </label>
                        <textarea id="description" name="description" rows="4" required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-[#2D82D8] focus:ring-2 focus:ring-[#2D82D8]/20 outline-none transition duration-200 resize-none"
                            placeholder="Describe your event in detail..."></textarea>
                    </div>

                    <!-- Date and Time Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Event Date -->
                        <div>
                            <label for="event_date" class="block text-sm font-semibold text-gray-700 mb-2">
                                Event Date <span class="text-red-500">*</span>
                            </label>
                            <input type="date" id="event_date" name="event_date" required
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-[#2D82D8] focus:ring-2 focus:ring-[#2D82D8]/20 outline-none transition duration-200">
                        </div>

                        <!-- Event Time -->
                        <div>
                            <label for="event_time" class="block text-sm font-semibold text-gray-700 mb-2">
                                Event Time <span class="text-red-500">*</span>
                            </label>
                            <input type="time" id="event_time" name="event_time" required
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-[#2D82D8] focus:ring-2 focus:ring-[#2D82D8]/20 outline-none transition duration-200">
                        </div>
                    </div>

                    <!-- Location -->
                    <div>
                        <label for="location" class="block text-sm font-semibold text-gray-700 mb-2">
                            Location <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="location" name="location" required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-[#2D82D8] focus:ring-2 focus:ring-[#2D82D8]/20 outline-none transition duration-200"
                            placeholder="Event venue or address">
                    </div>

                    <!-- Event Image Upload -->
                    <div>
                        <label for="event_image" class="block text-sm font-semibold text-gray-700 mb-2">
                            Event Banner/Image
                        </label>
                        <div class="relative">
                            <input type="file" id="event_image" name="event_image" accept="image/*"
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-[#2D82D8] focus:ring-2 focus:ring-[#2D82D8]/20 outline-none transition duration-200 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#2D82D8] file:text-white hover:file:bg-blue-700 file:cursor-pointer">
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Upload an image for your event (JPG, PNG, max 5MB)</p>
                    </div>

                    <!-- Ticket Price and Max Attendees Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Ticket Price -->
                        <div>
                            <label for="ticket_price" class="block text-sm font-semibold text-gray-700 mb-2">
                                Ticket Price (Rp)
                            </label>
                            <input type="number" id="ticket_price" name="ticket_price" min="0" step="1000"
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-[#2D82D8] focus:ring-2 focus:ring-[#2D82D8]/20 outline-none transition duration-200"
                                placeholder="0 (Free event)">
                            <p class="text-xs text-gray-500 mt-1">Leave empty or 0 for free events</p>
                        </div>

                        <!-- Maximum Attendees -->
                        <div>
                            <label for="max_attendees" class="block text-sm font-semibold text-gray-700 mb-2">
                                Maximum Attendees <span class="text-red-500">*</span>
                            </label>
                            <input type="number" id="max_attendees" name="max_attendees" min="1" required
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-[#2D82D8] focus:ring-2 focus:ring-[#2D82D8]/20 outline-none transition duration-200"
                                placeholder="e.g., 100">
                        </div>
                    </div>

                    <!-- Event Category -->
                    <div>
                        <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">
                            Event Category <span class="text-red-500">*</span>
                        </label>
                        <select id="category" name="category" required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-[#2D82D8] focus:ring-2 focus:ring-[#2D82D8]/20 outline-none transition duration-200 bg-white">
                            <option value="">Select a category</option>
                            <option value="music">Music & Concerts</option>
                            <option value="sports">Sports & Fitness</option>
                            <option value="arts">Arts & Culture</option>
                            <option value="food">Food & Drink</option>
                            <option value="business">Business & Professional</option>
                            <option value="technology">Technology</option>
                            <option value="education">Education</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex gap-4 pt-6">
                        <button type="submit"
                            class="flex-1 bg-[#2D82D8] hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                            Create Event
                        </button>
                        <a href="/event"
                            class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 px-6 rounded-lg shadow transition duration-300 text-center">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>

            <!-- Additional Info Section -->
            <div class="max-w-3xl mx-auto mt-8 text-center">
                <p class="text-sm text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 inline-block mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    All fields marked with <span class="text-red-500">*</span> are required
                </p>
            </div>

        </main>
    </div>

    <script>
        // Image preview functionality
        document.getElementById('event_image').addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    // You can add image preview logic here if needed
                    console.log('Image selected:', file.name);
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>