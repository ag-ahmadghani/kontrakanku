<x-admin.layout>
    <!-- Main Content -->
    <x-admin.header>{{ $header }}</x-admin.header>
    <div class="grid grid-cols-1 tablet:grid-cols-3 gap-4">
        <div class="flex flex-col gap-6 bg-blue-100 p-4 rounded-lg shadow-md">
            <h3 class="text-3xl font-semibold">Total Kontrakan</h3>
            <div>

                <p>Jumlah kontrakan</p>
                <p class="text-2xl font-semibold">{{ $kontrakan->count() }}</p>
            </div>
        </div>
        <div class="flex flex-col gap-6 bg-green-100 p-4 rounded-lg shadow-md">
            <h3 class="text-3xl font-semibold">Total Penyewa</h3>
            <div>

                <p>Jumlah penyewa aktif</p>
                <p class="text-2xl font-semibold">{{ $penyewa_aktif->count() }}</p>
            </div>
        </div>
    </div>
</x-admin.layout>
