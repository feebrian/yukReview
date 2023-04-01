<header class="fixed top-0 left-0 right-0">
    <nav class="shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        <a href="/" class="flex items-center py-4 px-2">
                            <span class="font-bold text-gray-500 text-lg italic">YukReview.</span>
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="/"
                            class="py-4 px-2 font-semibold hover:text-soft-red transition duration-100 {{ $active === 'home' ? 'text-soft-red' : 'text-white' }}">Home</a>
                        <a href="/movies"
                            class="py-4 px-2 font-semibold hover:text-soft-red transition duration-100 {{ $active === 'movies' ? 'text-soft-red' : 'text-white' }}">Movies</a>
                        <a href="/categories"
                            class="py-4 px-2 font-semibold hover:text-soft-red transition duration-100 {{ $active === 'categories' ? 'text-soft-red' : 'text-white' }}">Categories</a>
                        <a href="/news"
                            class="py-4 px-2 font-semibold hover:text-soft-red transition duration-100 {{ $active === 'news' ? 'text-soft-red' : 'text-white' }}">News</a>
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                @guest
                    <div class="hidden md:flex items-center space-x-3 ">
                        <a href="/login"
                            class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-soft-red hover:text-white transition duration-300">Log
                            In</a>
                        <a href="/register"
                            class="py-1.5 px-2 font-medium text-white bg-soft-red rounded hover:bg-[#952e35] transition duration-300">Sign
                            Up</a>
                    </div>
                @endguest
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-gray-500 hover:text-white " x-show="!showMenu" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden mobile-menu">
            <ul class="">
                <li class="active"><a href="index.html"
                        class="block text-sm px-2 py-4 text-white hover:bg-soft-red transition duration-300">Home</a>
                </li>
                <li><a href="/services"
                        class="block text-sm px-2 py-4 text-white hover:bg-soft-red transition duration-300">Services</a>
                </li>
                <li><a href="/about"
                        class="block text-sm px-2 py-4 text-white hover:bg-soft-red transition duration-300">About</a>
                </li>
                <li><a href="/contact"
                        class="block text-sm px-2 py-4 text-white hover:bg-soft-red transition duration-300">Contact
                        Us</a>
                </li>
                <li>
                    <a href="/login"
                        class="block text-sm px-2 py-4 text-white hover:bg-soft-red transition duration-300">
                        Login
                    </a>
                    <a href="/register"
                        class="block text-sm px-2 py-4 text-white hover:bg-soft-red transition duration-300">
                        Register
                    </a>
                </li>
            </ul>
        </div>
        <script>
            const btn = document.querySelector("button.mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        </script>
    </nav>
</header>
