<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- alpine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- font awsome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    @vite('resources/css/app.css')
    <title>Admin Dashboard - Kontrakanku</title>
</head>

<body class="font-poppins leading-normal tracking-normal">

    <div class="flex min-h-screen">
        <x-admin.sidebar></x-admin.sidebar>
        <section class="w-full flex-1 p-6">
            {{ $slot }}
        </section>
    </div>

</body>

</html>
