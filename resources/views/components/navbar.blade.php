<!-- Header -->
<header class="bg-white shadow-md sticky top-5" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center p-4">
        <h1 class="text-xl font-bold text-blue-600">Kontrakanku</h1>
        <nav class="flex items-center">
            <div class="nav-link flex gap-6 items-center handphone:max-laptop:hidden">
                <a href="/" class="text-gray-600 hover:text-gray-900">Home</a>
                <a href="/kontrakans" class="text-gray-600 hover:text-gray-900">Kontrakan</a>
                <a href="/kontak" class="text-gray-600 hover:text-gray-900">Contact</a>
                <a href="/tentang" class="text-gray-600 hover:text-gray-900">Tentang</a>
                @guest
                    <a href="{{ route('login.form') }}"
                        class="px-4 py-2 border border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-white rounded">Masuk</a>
                @endguest
                @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit"
                            class="px-4 py-2 border border-red-500 text-red-500 hover:bg-red-500 hover:text-white rounded">
                            Logout
                        </button>
                    </form>
                @endauth
            </div>
            <div class="hamburger-menu">
                <button class="laptop:hidden" x-on:click="open = ! open">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </nav>
    </div>
    <div class="sidebar bg-white right-0 flex fixed top-0 opacity-90 min-h-svh w-2/3" x-show="open"
        class="absolute top-0 left-0 w-64 h-full bg-white shadow-md p-4">
        <div class="containner flex flex-col  pt-6 px-4 gap-10">
            <div class="button-back">
                <button x-on:click="open = ! open">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
            <nav class="flex items-center">
                <div class="nav-link flex flex-col gap-4 text-left">
                    <a href="/" class="text-gray-600 hover:text-gray-900">Home</a>
                    <a href="/kontrakans" class="text-gray-600 hover:text-gray-900">Kontrakan</a>
                    <a href="/kontak" class="text-gray-600 hover:text-gray-900">Contact</a>
                    <a href="/tentang" class="text-gray-600 hover:text-gray-900">Tentang</a>
                </div>
            </nav>
            @guest
                <a href="{{ route('login.form') }}"
                    class="px-4 py-2 border border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-white rounded">Masuk</a>
            @endguest
            @auth
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class="px-4 py-2 border border-red-500 text-red-500 hover:bg-red-500 hover:text-white rounded">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </div>
</header>
