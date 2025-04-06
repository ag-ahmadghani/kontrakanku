<!-- Sidebar -->
<aside class="bg-blue-600 text-white flex flex-col px-4 pb-4 min-h-screen pt-10 transition-all items-center"
    x-data="{ toggle: true }" x-bind:class="toggle ? 'handphone:max-tablet:w-[50px]' : 'handphone:max-tablet:w-3/4 fixed'">
    <nav class="flex flex-col space-y-4">
        <div class="laptop:hidden flex gap-4 items-center">
            <button class="text-lg py-2 px-4 rounded hover:bg-blue-500" x-on:click="toggle = ! toggle">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        <div class="home flex gap-4 items-center">
            <a href="/admin" class="text-lg py-2 px-4 rounded hover:bg-blue-500"><i class="fa-solid fa-gauge"></i></a>
            <a href="/admin" class="text-lg py-2 px-4 rounded hover:bg-blue-500"
                x-bind:class="toggle ? 'handphone:max-tablet:hidden' : 'handphone:max-tablet:flex'">Dashboard</a>
        </div>
        <div class="penyewa flex gap-4 items-center">
            <a href="{{ route('kontrakan.index') }}" class="text-lg py-2 px-4 rounded hover:bg-blue-500"><i
                    class="fa-solid fa-table-columns"></i></a>
            <a href="{{ route('kontrakan.index') }}" class="text-lg py-2 px-4 rounded hover:bg-blue-500"
                x-bind:class="toggle ? 'handphone:max-tablet:hidden' : 'handphone:max-tablet:flex'">
                Kontrakan</a>
        </div>
        <div class="penyewa flex gap-4 items-center">
            <a href="{{ route('penyewa.index') }}" class="text-lg py-2 px-4 rounded hover:bg-blue-500"><i
                    class="fa-solid fa-table-columns"></i></a>
            <a href="{{ route('penyewa.index') }}" class="text-lg py-2 px-4 rounded hover:bg-blue-500"
                x-bind:class="toggle ? 'handphone:max-tablet:hidden' : 'handphone:max-tablet:flex'">
                Penyewa Kontrakan</a>
        </div>
        <div class="penyewa flex gap-4 items-center ">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-500 text-white hover:bg-red-600 rounded"
                    x-bind:class="toggle ? 'handphone:max-tablet:hidden' : 'handphone:max-tablet:flex'">
                    Logout
                </button>
            </form>
        </div>
    </nav>
</aside>
