<x-admin.layout>
    <!-- Container -->
    <div class="container mx-auto my-12 p-6 max-w-4xl bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold text-blue-600 mb-6">Edit Kontrakan</h1>

        <!-- Form -->
        <form action="{{ route('kontrakan.update', $kontrakan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Token keamanan Laravel -->
            @method('PATCH') <!-- Mengubah metode menjadi PUT -->

            <!-- Nama -->
            <div class="mb-4">
                <label for="nama_kontrakan" class="block text-gray-700 font-bold mb-2">Nama Kontrakan</label>
                <input type="text" id="nama_kontrakan" name="nama_kontrakan"
                    value="{{ old('nama_kontrakan', $kontrakan->nama_kontrakan) }}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Alamat -->
            <div class="mb-4">
                <label for="alamat" class="block text-gray-700 font-bold mb-2">Alamat</label>
                <textarea id="alamat" name="alamat" rows="4"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('alamat', $kontrakan->alamat) }}</textarea>
            </div>

            <!-- Deskripsi -->
            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('deskripsi', $kontrakan->deskripsi) }}</textarea>
            </div>

            <!-- Harga -->
            <div class="mb-4">
                <label for="harga" class="block text-gray-700 font-bold mb-2">Harga (Rp)</label>
                <input type="number" id="harga" name="harga" value="{{ old('harga', $kontrakan->harga) }}"
                    step="1" min="0"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Foto 1 -->
            <div class="mb-4">
                <label for="foto1" class="block text-gray-700 font-bold mb-2">Foto 1</label>
                <div class="flex items-center gap-4">
                    <input type="file" id="foto1" name="foto1"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        accept="image/*" />
                    @if ($kontrakan->foto1)
                        <img src="{{ Storage::url($kontrakan->foto1) }}" alt="Foto 1" class="w-40 h-auto rounded">
                    @else
                        <p class="text-gray-500">Tidak ada foto.</p>
                    @endif
                </div>
            </div>

            <!-- Foto 2 -->
            <div class="mb-4">
                <label for="foto2" class="block text-gray-700 font-bold mb-2">Foto 2</label>
                <div class="flex items-center gap-4">
                    <input type="file" id="foto2" name="foto2"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        accept="image/*" />
                    @if ($kontrakan->foto2)
                        <img src="{{ Storage::url($kontrakan->foto2) }}" alt="Foto 2" class="w-40 h-auto rounded">
                    @else
                        <p class="text-gray-500">Tidak ada foto.</p>
                    @endif
                </div>
            </div>

            <!-- Foto 3 -->
            <div class="mb-4">
                <label for="foto3" class="block text-gray-700 font-bold mb-2">Foto 3</label>
                <div class="flex items-center gap-4">
                    <input type="file" id="foto3" name="foto3"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        accept="image/*" />
                    @if ($kontrakan->foto3)
                        <img src="{{ Storage::url($kontrakan->foto3) }}" alt="Foto 3" class="w-40 h-auto rounded">
                    @else
                        <p class="text-gray-500">Tidak ada foto.</p>
                    @endif
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-admin.layout>
