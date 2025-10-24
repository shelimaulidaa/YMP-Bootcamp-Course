<nav id="navbar" class="bg-black fixed top-0 left-0 right-0 z-50 py-2 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-2">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/logoymp.png') }}" alt="Logo" class="h-10 w-28 object-fill">
                </a>
            </div>

            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="text-gray-200 hover:text-yellow-400 font-medium">Home</a>
                <a href="{{ route('about') }}" class="text-gray-200 hover:text-yellow-400 font-medium">About</a>
                <a href="{{ route('bootcamp') }}" class="text-gray-200 hover:text-yellow-400 font-medium">Bootcamp Class</a>
                <a href="{{ route('contact') }}" class="text-gray-200 hover:text-yellow-400 font-medium">Contact</a>
            </div>

            <div class="hidden md:flex space-x-3">
                <a href="{{ route('login') }}" 
                   class="px-4 py-2 rounded-lg border border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-white transition">
                   Login
                </a>
                <a href="https://wa.me/6282119205610?text=Hallo%20Saya%20Mau%20Daftar%20Bootcamp"
                   target="_blank" rel="noopener noreferrer"
                   class="px-4 py-2 bg-yellow-400 rounded-lg border border-yellow-400 text-white hover:bg-yellow-300 transition"
                   aria-label="Chat WhatsApp: Hallo Saya Mau Daftar Bootcamp">
                    Register
                </a>

            </div>

            <div class="md:hidden flex items-center">
                <button id="menu-toggle" class="text-white hover:text-blue-400 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden hidden bg-black/90 border-t border-gray-700">
        <div class="flex flex-col px-4 py-2 space-y-2">
            <a href="{{ route('home') }}" class="text-gray-200 hover:bg-gray-800 py-2 px-2 rounded">Home</a>
            <a href="{{ route('about') }}" class="text-gray-200 hover:bg-gray-800 py-2 px-2 rounded">About</a>
            <a href="{{ route('bootcamp') }}" class="text-gray-200 hover:bg-gray-800 py-2 px-2 rounded">Bootcamp Class</a>
            <a href="{{ route('contact') }}" class="text-gray-200 hover:bg-gray-800 py-2 px-2 rounded">Contact</a>
            <hr class="border-gray-700">
            <a href="{{ route('login') }}" 
               class="block w-full text-center border border-blue-600 text-blue-400 py-2 rounded-lg hover:bg-blue-600 hover:text-white transition">
               Login
            </a>
            <a href="{{ route('register') }}" 
               class="block w-full text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
               Register
            </a>
        </div>
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-black/80', 'shadow-md');
                navbar.classList.remove('bg-black');
            } else {
                navbar.classList.remove('bg-black', 'shadow-md');
                navbar.classList.add('bg-black');
            }
        });
    </script>
</nav>
<div class="h-16"></div>
