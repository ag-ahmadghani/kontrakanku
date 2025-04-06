<x-admin.layout>
    <div class="container mx-auto my-12 p-6 max-w-4xl bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold text-blue-600 mb-6">Detail Kontrakan</h1>

        <!-- Gambar -->
        <div class="mb-6">
            @if ($kontrakan->foto1)
                <img src="{{ Storage::url($kontrakan->foto1) }}" alt="Foto 1" class="w-full h-auto rounded mb-4">
            @endif
            @if ($kontrakan->foto2)
                <img src="{{ Storage::url($kontrakan->foto2) }}" alt="Foto 2" class="w-full h-auto rounded mb-4">
            @endif
            @if ($kontrakan->foto3)
                <img src="{{ Storage::url($kontrakan->foto3) }}" alt="Foto 3" class="w-full h-auto rounded mb-4">
            @endif
        </div>

        <!-- Detail -->
        <div class="mb-4">
            <h2 class="text-lg font-bold">Nama Kontrakan</h2>
            <p>{{ $kontrakan->nama_kontrakan }}</p>
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-bold">Alamat</h2>
            <p>{{ $kontrakan->alamat }}</p>
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-bold">Deskripsi</h2>
            <p>{{ $kontrakan->deskripsi }}</p>
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-bold">Harga</h2>
            <p>Rp {{ number_format($kontrakan->harga, 0, ',', '.') }}</p>
        </div>

        <!-- Tombol Kembali -->
        <a href="{{ route('kontrakan.index') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
            Kembali
        </a>
    </div>
</x-admin.layout>
