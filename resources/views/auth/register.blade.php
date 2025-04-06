<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register - Kontrakanku</title>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100 py-10">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Daftar</h2>
        <form action="{{ route('register') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-4 flex gap-4">
                <div class="w-1/2">
                    <label for="nama_depan" class="block text-gray-700">Nama Depan</label>
                    <input type="text" name="nama_depan" id="nama_depan" class="w-full border rounded p-2" required>
                    @error('nama_depan')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label for="nama_belakang" class="block text-gray-700">Nama Belakang</label>
                    <input type="text" name="nama_belakang" id="nama_belakang" class="w-full border rounded p-2"
                        required>
                    @error('nama_belakang')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full border rounded p-2" required>
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="jenis_kelamin" class="block text-gray-700">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="w-full border rounded p-2">
                    <option value="L">Laki - Laki</option>
                    <option value="P">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full border rounded p-2" required>
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="w-full border rounded p-2" required>
                @error('password_confirmation')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            {{-- <div class="mb-4">
                <label for="role" class="block text-gray-700">Role</label>
                <select name="role" id="role" class="w-full border rounded p-2">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div> --}}
            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded w-full hover:bg-blue-400">Daftar</button>
        </form>
        <p class="text-center mt-4">Sudah punya akun? <a href="{{ route('login.form') }}"
                class="text-blue-500">Login</a></p>
    </div>
</body>

</html>
