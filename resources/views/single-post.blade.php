<x-layout>
    <section>
        <!-- Container -->
        <div class="container mx-auto laptop:px-6 py-10">

            <!-- Single Post Section -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden h-full p-6">

                <div class="flex flex-col gap-5">
                    <!-- Back Button -->
                    <a href="/kontrakans" class="text-md font-bold text-blue-500">
                        <i class="fa-solid fa-arrow-left"></i> Back
                    </a>
                    <!-- Judul -->
                    <h1 class="text-2xl font-bold">{{ $kontrakan->nama_kontrakan }}</h1>

                    <div class="flex handphone:max-laptop:flex-col gap-6">
                        <!-- Gambar -->
                        @if ($kontrakan->foto1 === null)
                            <img src="{{ asset('images/images.png') }}" class="w-full laptop:w-2/3 object-cover">
                        @else
                            <img src="{{ Storage::url($kontrakan->foto1) }}" class="w-full laptop:w-2/3 object-cover">
                        @endif

                        <!-- Konten -->
                        <div class="flex flex-col min-w-[500px] max-w-[500px]">

                            <h2 class="font-bold text-lg">Alamat:</h2>
                            <p class="text-gray-600 mb-6">
                                {{ $kontrakan->alamat }}
                            </p>

                            <div class="grid grid-cols-1 tablet:grid-cols-2 gap-4 mb-6">
                                <div>
                                    <h2 class="font-bold text-lg">Harga:</h2>
                                    <p class="text-gray-700">Rp {{ number_format($kontrakan->harga, 0, ',', '.') }} /
                                        Tahun</p>
                                </div>
                            </div>

                            <!-- Deskripsi -->
                            <h2 class="font-bold text-lg mb-2">Deskripsi:</h2>
                            <p class="text-gray-600 text-justify">
                                {{ $kontrakan->deskripsi }}
                            </p>

                            <!-- Action Button -->
                            <div class="flex mt-6 gap-5">
                                <a href="/kontak"
                                    class="px-4 py-2 border border-blue-500 text-blue-500 rounded hover:bg-gray-200">
                                    Hubungi Pemilik
                                </a>
                                <a href=" {{ route('pembayaran.create', $kontrakan->id) }} "
                                    class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
                                    Sewa
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex py-6 gap-6 images-kontrakan flex-wrap">
                        @if ($kontrakan->foto2)
                            <div class="image">
                                <img src="{{ Storage::url($kontrakan->foto2) }}" class="w-full h-40 object-cover">
                            </div>
                        @endif
                        @if ($kontrakan->foto3)
                            <div class="image">
                                <img src="{{ Storage::url($kontrakan->foto3) }}" class="w-full h-40 object-cover">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
