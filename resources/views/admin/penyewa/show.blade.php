<x-admin.layout>
    <div class="container mx-auto my-12 p-6 max-w-4xl bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold text-blue-600 mb-6">Detail Penyewa</h1>
        <!-- Detail -->
        <div class="mb-4">
            <h2 class="text-lg font-bold">Nama Penyewa</h2>
            <p>{{ $penyewa->user->name }}</p>
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-bold">Nama Kontrakan</h2>
            <p>{{ $penyewa->kontrakan->nama_kontrakan }}</p>
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-bold">Status</h2>
            <form action="{{ route('penyewa.update', $penyewa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <select name="status" class="border px-2 py-1">
                    <option value="pending" {{ $penyewa->status == 'pending' ? 'selected' : '' }}>
                        Pending
                    </option>
                    <option value="aktif" {{ $penyewa->status == 'aktif' ? 'selected' : '' }}>Aktif
                    </option>
                    <option value="ditolak" {{ $penyewa->status == 'ditolak' ? 'selected' : '' }}>
                        Ditolak
                    </option>
                </select>
                <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700">
                    Update
                </button>
            </form>
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-bold">Harga</h2>
            <img src="{{ Storage::url($penyewa->pembayaran->screenshot) }}" alt="Foto 3"
                class="w-full h-auto rounded mb-4">
        </div>

        <!-- Tombol Kembali -->
        <a href="{{ route('penyewa.index') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
            Kembali
        </a>
    </div>
</x-admin.layout>
