@include('layout.head')

<body class="flex bg-gray-100">

    {{-- SIDEBAR FIXED --}}
    <div class="fixed top-0 left-0 h-full">
        @include('layout.sidebar')
    </div>

    {{-- MAIN CONTENT --}}
    <main class="w-full ml-64 px-6 py-8">

        {{-- SEARCH BAR + CART --}}
        <div class="flex items-center justify-between mb-6">
            <form class="flex w-full max-w-2xl relative">
                <input type="search" placeholder="Paket Nutrisi.."
                    class="w-full p-4 ps-10 text-sm border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 rounded-lg text-sm px-4 py-2">
                    Search
                </button>
                <svg class="absolute left-3 top-4 w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-4.35-4.35m0 0a7 7 0 10-9.9 0 7 7 0 009.9 0z" />
                </svg>
            </form>

            <div class="ml-4 rounded-md border border-gray-300 bg-white p-2">
                <img src="{{ asset('images/cart.png') }}" class="w-8 h-8" alt="">
            </div>
        </div>
<div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            {{-- 1. Green Glow Bowl --}}
            <div class="w-full">
                <a href="#" class="block p-6 bg-white border rounded-lg shadow-sm hover:bg-gray-100">
                    <div class="flex justify-center mb-2">
                        <img src="{{ asset('images/products/images1.jpg') }}"
                            class="w-[180px] h-[180px] rounded-full object-cover shadow-md">
                    </div>
                    <h5 class="text-2xl font-bold text-gray-900">Green Glow Bowl</h5>
                    <p class="text-sm text-gray-600 mb-2">
                        Mix of fresh greens, quinoa, and creamy dressing for natural energy.
                    </p>
                    <p class="text-2xl font-bold text-right">$70</p>
                </a>
            </div>

            
            {{-- 3. Vegan Rainbow Bowl --}}
            <div class="w-full">
                <a href="#" class="block p-6 bg-white border rounded-lg shadow-sm hover:bg-gray-100">
                    <div class="flex justify-center mb-2">
                        <img src="{{ asset('images/products/olatte.png') }}"
                            class="w-[180px] h-[180px] rounded-full object-cover shadow-md">
                    </div>
                    <h5 class="text-2xl font-bold text-gray-900">Vegan Rainbow Bowl</h5>
                    <p class="text-sm text-gray-600 mb-2">
                        Colorful plant-based bowl filled with vitamins, fiber, and freshness.
                    </p>
                    <p class="text-2xl font-bold text-right">$68</p>
                </a>
            </div>

            {{-- 6. Mango Sunrise --}}
            <div class="w-full">
                <a href="#" class="block p-6 bg-white border rounded-lg shadow-sm hover:bg-gray-100">
                    <div class="flex justify-center mb-2">
                        <img src="{{ asset('images/products/images6.jpg') }}"
                            class="w-[180px] h-[180px] rounded-full object-cover shadow-md">
                    </div>
                    <h5 class="text-2xl font-bold text-gray-900">Mango Sunrise</h5>
                    <p class="text-sm text-gray-600 mb-2">
                        Sweet tropical mango blend to brighten your day with natural freshness.
                    </p>
                    <p class="text-2xl font-bold text-right">$52</p>
                </a>
            </div>

        </div>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    
</body>

</html>
