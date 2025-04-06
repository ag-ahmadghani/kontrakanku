<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kontrakanku</title>
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Masuk</h2>
        <form action="{{ route('login') }}" method="POST" class="mt-4">
            @csrf
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full border rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full border rounded p-2" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">Login</button>
        </form>
        <p class="text-center mt-4">Belum punya akun? <a href="{{ route('register.form') }}"
                class="text-blue-500">Daftar</a></p>
    </div>
</body>

</html>
