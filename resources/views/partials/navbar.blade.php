<header class="fixed top-0 left-0 right-0 z-50 bg-soft-dark">
    <nav class="shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        <a href="/" class="flex items-center py-4 px-2 pl-0">
                            <span class="font-bold text-gray-500 text-lg italic">YukReview.</span>
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="/"
                            class="py-4 px-2 font-semibold hover:text-soft-red transition duration-100 {{ $active === 'home' ? 'text-soft-red' : 'text-white' }}">Home</a>
                        <a href="/reviews"
                            class="py-4 px-2 font-semibold hover:text-soft-red transition duration-100 {{ $active === 'reviews' ? 'text-soft-red' : 'text-white' }}">Reviews</a>
                        <a href="/movies"
                            class="py-4 px-2 font-semibold hover:text-soft-red transition duration-100 {{ $active === 'movies' ? 'text-soft-red' : 'text-white' }}">Movies</a>
                        <a href="/categories"
                            class="py-4 px-2 font-semibold hover:text-soft-red transition duration-100 {{ $active === 'categories' ? 'text-soft-red' : 'text-white' }}">Categories</a>
                        <a href="/news"
                            class="py-4 px-2 font-semibold hover:text-soft-red transition duration-100 {{ $active === 'news' ? 'text-soft-red' : 'text-white' }}">News</a>
                    </div>
                </div>

                @auth
                    <style>
                        .dropdown:hover .dropdown-menu {
                            display: block;
                        }
                    </style>
                    <div class="p-0 items-center">

                        <div class="dropdown inline-block top-2.5 relative">
                            <button
                                class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                                <span class="mr-1">{{ auth()->user()->name }}</span>
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </button>
                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                <li class="text-sm"><a
                                        class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                        href="#"><i class='bx bx-fw bxs-dashboard'></i>Dashboard</a></li>
                                <li class="text-sm"><a
                                        class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                        href="#"><i class='bx bx-fw bx-user-circle'></i>Profile</a></li>
                                <li>
                                    <hr>
                                </li>
                                <li class="text-sm">
                                    <form action="/logout" method="post"
                                        class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                        @csrf
                                        <button type="submit"><i class='bx bx-fw bx-log-out'></i>Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>

                    </div>
                @else
                    <!-- Secondary Navbar items -->
                    <div class="hidden md:flex items-center space-x-3">
                        <a href="/login"
                            class="py-1.5 px-2 font-medium text-gray-500 rounded hover:bg-soft-red hover:text-white transition duration-300 {{ $active === 'login' ? 'bg-soft-red text-white' : '' }}">Log
                            In</a>
                        <a href="/register"
                            class="py-1.5 px-2 font-medium text-gray-500 rounded hover:bg-soft-red hover:text-white transition duration-300 {{ $active === 'register' ? 'bg-soft-red text-white' : '' }}">Sign
                            Up</a>
                    </div>
                @endauth
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
