<footer class="bg-gradient-to-r from-blue-600 to-blue-500 text-white py-6 px-6">
    <div class="container mx-auto px-4">
        <div class="flex flex-col tablet:flex-row justify-between items-center">
            <!-- Logo dan Nama -->
            <div class="mb-4 tablet:mb-0">
                <h2 class="text-lg font-bold">Kontrakanku</h2>
                <p class="text-sm">Tempat terbaik untuk mencari kontrakan.</p>
            </div>

            <!-- Navigasi -->
            <div class="mb-4 tablet:mb-0">
                <ul class="flex flex-col tablet:flex-row gap-4 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:underline">Beranda</a></li>
                    <li><a href="/tentang" class="hover:underline">Tentang</a></li>
                    <li><a href="{{ route('kontrakan.index') }}" class="hover:underline">Kontrakan</a></li>
                    <li><a href="/kontak" class="hover:underline">Kontak</a></li>
                </ul>
            </div>

            <!-- Sosial Media -->
            <div>
                <h3 class="font-bold text-sm mb-2">Ikuti Kami</h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center text-sm mt-6">
            &copy; {{ date('Y') }} Kontrakanku. Semua Hak Dilindungi.
        </div>
    </div>
</footer>
