<x-layout>
    <section class="container mx-auto my-12 px-4">
        <div class="bg-white rounded-lg shadow-tablet p-8 tablet:flex">
            <!-- Contact Information -->
            <div class="tablet:w-1/2 tablet:pr-8">
                <h2 class="text-2xl font-bold mb-4 text-blue-600">Hubungi Kami</h2>
                <p class="text-gray-600 mb-6">
                    Ada pertanyaan atau butuh bantuan? Silakan isi formulir di sebelah atau hubungi kami melalui email
                    dan telepon.
                </p>
                <p class="text-gray-700"><strong>Email:</strong> info@kontrakanbapaqa.com</p>
                <p class="text-gray-700"><strong>Telepon:</strong> +62 812 3456 7890</p>
            </div>

            <!-- Contact Form -->
            <div class="tablet:w-1/2">
                <form action="#" method="POST" class="space-y-4">
                    <div class="flex space-x-4">
                        <div class="flex-1">
                            <label class="block text-gray-700 mb-1" for="first_name">Nama Depan</label>
                            <input type="text" id="first_name" name="first_name" placeholder="Nama Depan"
                                class="w-full p-2 border rounded">
                        </div>
                        <div class="flex-1">
                            <label class="block text-gray-700 mb-1" for="last_name">Nama Belakang</label>
                            <input type="text" id="last_name" name="last_name" placeholder="Nama Belakang"
                                class="w-full p-2 border rounded">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1" for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="youremail@example.com"
                            class="w-full p-2 border rounded">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-1" for="message">Pesan Anda</label>
                        <textarea id="message" name="message" rows="4" placeholder="Apa yang bisa kami bantu?"
                            class="w-full p-2 border rounded"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Kirim</button>
                </form>
            </div>
        </div>
    </section>

</x-layout>
