<x-admin.layout>
    <!-- Main Content -->
    <x-admin.header>{{ $header }}</x-admin.header>

    <div class="add mb-6">
        <a class="bg-blue-600 p-4 rounded text-white font-medium hover:bg-blue-500"
            href="{{ route('kontrakan.create') }}">Tambah</a>
    </div>

    <!-- Table Content -->
    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="min-w-full bg-white border">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="w-10 py-6 px-6 text-left font-medium">No</th>
                    <th class="w-32 py-6 px-6 text-left font-medium">Nama Kontrakan</th>
                    <th class="w-48 py-6 px-6 text-left font-medium">Deskripsi</th>
                    <th class="w-48 py-6 px-6 text-left font-medium">Harga</th>
                    <th class="w-32 py-6 px-6 text-left font-medium">Alamat</th>
                    <th class="w-20 py-6 px-6 text-left font-medium">Pemilik</th>
                    <th colspan="2" class="w-20 py-6 px-6 text-left font-medium">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kontrakans as $kontrakan)
                    <!-- Row 1 -->
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-4">{{ $loop->iteration }}</td>
                        <td class="py-3 px-4">{{ $kontrakan->nama_kontrakan }}</td>
                        <td class="py-3 px-4">{{ $kontrakan->alamat }}</td>
                        <td class="py-3 px-4">{{ Str::limit($kontrakan->deskripsi, 50, '...') }}</td>
                        <td class="py-3 px-4">Rp {{ $kontrakan->harga }}</td>
                        <td class="py-3 px-4">{{ $kontrakan->user->name }}</td>
                        <td class="py-3 px-4">
                            <div class="mb-4">
                                <a href="{{ route('kontrakan.show', $kontrakan->id) }}"
                                    class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">
                                    Detail</a>
                            </div>
                            <div>
                                <a href="{{ route('kontrakan.edit', $kontrakan->id) }}"
                                    class="bg-yellow-500 text-white px-4 py-1 rounded hover:bg-yellow-600">
                                    Edit</a>
                            </div>
                        </td>
                        <td class="py-3 px-4">
                            <form action="{{ route('kontrakan.destroy', $kontrakan->id) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus kontrakan ini?');">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-admin.layout>
