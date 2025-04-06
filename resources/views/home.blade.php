<x-layout>
    <!-- Main Image Section -->
    <section class="mt-9 px-6">
        <div class="container bg-white mx-auto w-full">
            <img src="{{ asset('images/download (1).jpeg') }}" alt="Gambar Kontrakan"
                class="h-[523px] handphone:max-laptop:h-[350px] object-cover w-full">
        </div>
    </section>

    <!-- Description Section -->
    <section class="py-8 px-8 flex flex-col mt-9">
        <div class="container mx-auto flex flex-col gap-4  w-full">
            <h1 class="text-blue-600 font-bold text-4xl">Temukan Kontrakan Impian Anda dengan Mudah!</h1>
            <p class="text-white font-medium">Selamat datang di <span class="text-blue-600">Kontrakanku</span>,
                Platform Terbaik untuk Menemukan Kontrakan Impian Anda

                Mencari tempat tinggal yang nyaman dan sesuai anggaran tidak pernah semudah ini. <span
                    class="text-blue-600">Kontrakanku</span>
                hadir untuk membantu Anda menemukan kontrakan terbaik dengan berbagai pilihan yang sesuai dengan
                kebutuhan dan gaya hidup Anda..</p>
        </div>
    </section>

    <!-- Features Section -->
    <section class="flex flex-col gap-8 py-8 px-8">
        <h1 class="text-blue-600 font-bold text-4xl text-center">Mengapa Pilih Kami?</h1>
        <div class="container mx-auto grid grid-cols-1 tablet:grid-cols-3 gap-4">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="text-2xl mb-2">📍</div>
                <p>Terletak dekat dengan Stasiun Cawang dan jalan raya MT Haryono</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="text-2xl mb-2">🏢</div>
                <p>Terletak dekat dengan Pusat Perkantoran Pancoran</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="text-2xl mb-2">🏠</div>
                <p>Harga Bersaing dan Fasilitas Lengkap</p>
            </div>
        </div>
    </section>
</x-layout>
