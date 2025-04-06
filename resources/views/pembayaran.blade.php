<x-layout>
    <div class="container mx-auto my-12 p-6 max-w-4xl bg-white shadow-md rounded-lg flex flex-col gap-10">
        <h1 class="text-2xl font-bold text-blue-600 mb-6">Form Pembayaran</h1>
        <h2 class="block text-gray-700 font-bold mb-2 text-center">Pembayaran Dilakukan Lewat Transfer, Silahkan Transfer
            dan Kirim Bukti Transfernya</h2>
        <div class="flex m-auto gap-10">
            <div class="bca border shadow-md px-6 pb-3">
                <img src="{{ asset('assets/bca.png') }}" alt="" class="bg-cover w-[200px] h-[150px]">
                <h3>BCA A/N USER</h3>
                <p>01000230</p>
            </div>
            <div class="mandiri border shadow-md px-6 pb-3">
                <img src="{{ asset('assets/mandiri.png') }}" alt="" class="bg-cover w-[200px] h-[150px]">
                <h3>Mandiri A/N USER</h3>
                <p>01000230</p>
            </div>
        </div>
        <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="kontrakan_id" value="{{ $kontrakan->id }}">

            <div class="mb-4">
                <label for="screenshot" class="block text-gray-700 font-bold mb-2">Bukti Transfer</label>
                <input type="file" id="screenshot" name="screenshot"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    accept="image/*" required />
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Ajukan Pembayaran
                </button>
            </div>
        </form>
    </div>
</x-layout>
