@props(['product'])

<div class="w-full bg-gray-50 p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800">Product Description</h2>
    <p class="text-gray-700 mt-4 leading-relaxed">
        {{ $product['description'] ?? 'No description available.' }}
    </p>
</div>
