<!-- Header -->
<div class="flex justify-between items-center bg-white p-4 shadow rounded-lg mb-6">
    <h1 class="text-2xl font-semibold">{{ $slot }}</h1>
    <div>
        <span class="text-gray-700">{{ Auth::user()->name }}</span>
    </div>
</div>
