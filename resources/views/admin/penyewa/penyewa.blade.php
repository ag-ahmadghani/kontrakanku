<x-admin.layout>
    <!-- Main Content -->
    <x-admin.header>{{ $header }}</x-admin.header>
    <!-- Table Content -->
    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="min-w-full bg-white border">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="w-10 py-6 px-6 text-left font-medium">No</th>
                    <th class="w-48 py-6 px-6 text-left font-medium">Nama Penyewa</th>
                    <th class="w-48 py-6 px-6 text-left font-medium">Kontrakan</th>
                    {{-- <th class="w-32 py-6 px-6 text-left font-medium">No Telp</th> --}}
                    <th class="w-32 py-6 px-6 text-left font-medium">Waktu Penyewaan Selesai</th>
                    {{-- <th class="w-20 py-6 px-6 text-left font-medium">Bukti Screenshot</th> --}}
                    <th class="w-20 py-6 px-6 text-left font-medium">Status</th>
                    <th class="w-32 py-6 px-6 text-left font-medium">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penyewa as $item)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $item->user->name }}</td>
                        <td class="px-4 py-2">{{ $item->kontrakan->nama_kontrakan }}</td>
                        {{-- <td class="px-4 py-2">{{ $item->user->no_telepon }}</td> --}}
                        <td class="px-4 py-2">{{ $item->tanggal_selesai }}</td>
                        <td class="px-4 py-2">{{ ucfirst($item->status) }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('penyewa.show', $item->id) }}"
                                class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">
                                Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
