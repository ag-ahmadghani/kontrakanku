<x-admin.layout>
    <!-- Main Content -->
    <section class="flex-1 bg-gray-200 p-6">
        <!-- Header -->
        <div class="flex justify-between items-center bg-white p-4 shadow rounded-lg mb-6">
            <h1 class="text-2xl font-semibold">Penyewa Kontrakan</h1>
            <div>
                <span class="text-gray-700">Admin</span>
            </div>
        </div>

        <!-- Table Content -->
        <div class="bg-white rounded-lg shadow overflow-x-auto">
            <table class="min-w-full bg-white border">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="w-10 py-3 px-6 text-left font-medium">No</th>
                        <th class="w-48 py-3 px-6 text-left font-medium">Nama Penyewa</th>
                        <th class="w-48 py-3 px-6 text-left font-medium">Kontrakan</th>
                        <th class="w-32 py-3 px-6 text-left font-medium">No Telp</th>
                        <th class="w-32 py-3 px-6 text-left font-medium">Tanggal Menyewa</th>
                        <th class="w-20 py-3 px-6 text-left font-medium">Bukti Screenshot</th>
                        <th class="w-20 py-3 px-6 text-left font-medium">Status</th>
                        <th class="w-32 py-3 px-6 text-left font-medium">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-6">1</td>
                        <td class="py-3 px-6">Jacob Marcus</td>
                        <td class="py-3 px-6">Kontrakan 1</td>
                        <td class="py-3 px-6">08123456789</td>
                        <td class="py-3 px-6">23/09/2022</td>
                        <td class="py-3 px-6">test</td>
                        <td class="py-3 px-6">
                            <span class="bg-green-100 text-green-700 py-1 px-3 rounded-full text-xs">Lunas</span>
                        </td>
                        <td class="py-3 px-6">
                            <button class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">Detail</button>
                        </td>
                    </tr>
                    <!-- Additional rows can be added here -->
                </tbody>
            </table>
        </div>
    </section>
</x-admin.layout>
