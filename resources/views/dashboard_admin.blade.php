<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bringova - Order History Dashboard (Tailwind)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                'bringova-red': '#f75d5d', /* Warna merah dari logo */
                'bringova-light': '#ffeaea', /* Warna latar belakang aktif */
                'gray-text': '#6c757d',
              }
            }
          }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* CSS Kustom Minor untuk Tampilan Sidebar */
        #sidebar-wrapper {
            transition: margin-left .3s ease;
        }
    </style>
</head>
<body class="bg-gray-50">

<div class="flex min-h-screen">
    <div id="sidebar-wrapper" class="w-64 bg-white border-r border-gray-200 fixed h-full flex flex-col shadow-lg">
        <div class="text-center py-4 border-b border-gray-100 text-xl font-bold text-bringova-red">
            <i class="fas fa-box-open mr-2"></i> bringova
        </div>
        
        <nav class="flex-grow">
            <ul class="py-2">
                <li class="relative">
                    <a href="#" class="flex items-center p-3 my-1 mx-3 text-bringova-red font-semibold bg-bringova-light rounded-lg">
                        <i class="fas fa-history mr-3 w-5"></i> Order History
                    </a>
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-bringova-red rounded-l-lg"></div>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 my-1 mx-3 text-gray-700 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-boxes mr-3 w-5 text-gray-text"></i> Live Orders
                    </a>
                </li>
                 <li>
                    <a href="#" class="flex items-center p-3 my-1 mx-3 text-gray-700 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-tags mr-3 w-5 text-gray-text"></i> Offers
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 my-1 mx-3 text-gray-700 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-cog mr-3 w-5 text-gray-text"></i> Settings
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="p-4 border-t border-gray-100">
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-text">Busy Mode</span>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-bringova-red"></div>
                </label>
            </div>
        </div>
    </div>
    <div id="page-content-wrapper" class="flex-grow ml-64">
        <nav class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-10">
            <div class="flex items-center justify-between p-4">
                <div class="relative w-full max-w-sm">
                    <input type="search" placeholder="Search" class="py-2 pl-10 pr-4 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-bringova-red">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>

                <div class="flex items-center space-x-4">
                    <span class="px-3 py-1 text-sm font-medium text-white bg-green-500 rounded-full">Open For Order</span>
                    <a href="#" class="text-gray-600 hover:text-bringova-red"><i class="fas fa-bell"></i></a>
                    <div class="flex items-center">
                        <img src="avatar.jpg" alt="Avatar" class="w-8 h-8 rounded-full mr-2">
                        <span class="font-semibold text-gray-800">Lubomir Dvořák</span>
                    </div>
                </div>
            </div>
        </nav>
        <div class="p-6">
            <h2 class="text-2xl font-semibold mb-6 text-gray-800">Order History</h2>

            <div class="flex items-center justify-between border-b border-gray-200 mb-4">
                <div class="flex space-x-6">
                    <button class="pb-3 text-black font-bold border-b-2 border-bringova-red">All Order</button>
                    <button class="pb-3 text-gray-text hover:text-gray-800">Summary</button>
                    <button class="pb-3 text-gray-text hover:text-gray-800">Completed</button>
                    <button class="pb-3 text-gray-text hover:text-gray-800">Cancelled</button>
                </div>
                
                <div class="flex items-center space-x-2 text-sm text-gray-600">
                    <input type="date" value="2021-03-09" class="p-2 border border-gray-300 rounded-md focus:ring-bringova-red focus:border-bringova-red">
                    <span>To</span>
                    <input type="date" value="2021-03-11" class="p-2 border border-gray-300 rounded-md focus:ring-bringova-red focus:border-bringova-red">
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-text uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-text uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-text uppercase tracking-wider">Payment</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-text uppercase tracking-wider">Time remaining</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-text uppercase tracking-wider">Type</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-text uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-text uppercase tracking-wider">Total</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-text uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">#2632</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 flex items-center">
                                    <img src="brooklyn.jpg" class="w-6 h-6 rounded-full mr-2"> Brooklyn Zoe
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Cash</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">53 min</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Delivery</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Delivered
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-900">£12.00</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="relative inline-block text-left group">
                                        <button type="button" class="text-gray-500 hover:text-gray-800 p-1">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">#2632</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 flex items-center">
                                    <img src="alice.jpg" class="w-6 h-6 rounded-full mr-2"> Alice Krejčová
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Paid</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600">49 min</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Collection</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Collected
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-900">£14.00</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="relative inline-block text-left group">
                                        <button type="button" class="text-gray-500 hover:text-gray-800 p-1">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block z-20">
                                            <div class="py-1">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Refund</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Message</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">#2632</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 flex items-center">
                                    <img src="junioon.jpg" class="w-6 h-6 rounded-full mr-2"> Junioon Von
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Cash</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">57 min</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Delivery</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Cancelled
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-900">£18.00</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                     <div class="relative inline-block text-left group">
                                        <button type="button" class="text-gray-500 hover:text-gray-800 p-1">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block z-20">
                                            <div class="py-1">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Message</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
            
        </div>
        </div>
    </div>

<script>
    // Fungsionalitas dropdown (opsional, karena Tailwind tidak menyediakan JS built-in)
    document.querySelectorAll('.group').forEach(group => {
        const button = group.querySelector('button');
        const menu = group.querySelector('div.absolute');
        
        if (button && menu) {
            // Kita akan menggunakan event click alih-alih hover
            button.addEventListener('click', (e) => {
                e.stopPropagation(); // Mencegah klik menyebar ke body
                
                // Tutup semua menu lain
                document.querySelectorAll('.absolute').forEach(otherMenu => {
                    if (otherMenu !== menu) {
                        otherMenu.classList.add('hidden');
                    }
                });

                // Toggle menu saat ini
                menu.classList.toggle('hidden');
            });
        }
    });

    // Tutup menu jika klik di luar
    document.addEventListener('click', () => {
        document.querySelectorAll('.absolute').forEach(menu => {
            menu.classList.add('hidden');
        });
    });
</script>
</body>
</html>