<x-layout>
    <section class="container mx-auto my-8 laptop:p-4 min-h-screen">
        <div class="w-full bg-white rounded p-8 flex flex-col gap-4">
            <h2 class="text-3xl font-bold text-blue-500">Daftar Kontrakan</h2>
            <div class="flex gap-4">
                <a href="{{ route('kontrakans.index', ['status' => 'ready']) }}"
                    class="px-4 py-2 border border-none text-white bg-blue-500 rounded hover:bg-blue-700 {{ $status === 'ready' ? 'font-bold' : '' }}">
                    Ready
                </a>
                <a href="{{ route('kontrakans.index', ['status' => 'status']) }}"
                    class="px-4 py-2 border border-none text-white bg-blue-500 rounded hover:bg-blue-700 {{ $status === 'status' ? 'font-bold' : '' }}">
                    Status
                </a>
            </div>
            <div class="grid grid-cols-1 tablet:grid-cols-2 laptop:grid-cols-3 gap-4">
                @forelse ($kontrakans as $kontrakan)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        @if ($kontrakan->foto1 === null)
                            <img src="{{ asset('images/images.png') }}" alt="Gambar Kontrakan"
                                class="w-full h-48 object-cover">
                        @else
                            <img src="{{ Storage::url($kontrakan->foto1) }}" alt="Gambar Kontrakan"
                                class="w-full h-48 object-cover">
                        @endif
                        <div class="flex flex-col p-4 gap-3">
                            <div>
                                <h3 class="text-xl font-semibold">{{ $kontrakan->nama_kontrakan }}</h3>
                                <p class="text-gray-600">{{ $kontrakan->alamat }}</p>
                                <p class="font-bold text-lg mt-4">Rp {{ number_format($kontrakan->harga, 0, ',', '.') }}
                                </p>
                            </div>
                            <div class="flex gap-3 items-center">
                                <a href="{{ route('kontrakan_detail', $kontrakan->id) }}"
                                    class="px-4 py-2 border border-blue-500 text-blue-500 rounded hover:bg-gray-300">Detail</a>
                                @if ($status === 'ready')
                                    <a href="{{ route('pembayaran.create', $kontrakan->id) }}"
                                        class="px-4 py-2 border border-none text-white bg-blue-500 rounded hover:bg-blue-700">Sewa</a>
                                @endif
                                @if ($status === 'status')
                                    <p>Status: {{ $kontrakan->pembayaran->penyewa->status }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Tidak ada kontrakan tersedia.</p>
                @endforelse
            </div>

        </div>
    </section>

</x-layout>
