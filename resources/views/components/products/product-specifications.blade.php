@props(['product'])

<div class="mt-6 p-6 border rounded-lg bg-gray-50">
    <h2 class="text-xl font-semibold text-gray-800">Product Specifications</h2>
    <ul class="mt-3 text-gray-700 space-y-2">
        <li><strong>Category:</strong> {{ $product['category'] }}</li>
        <li><strong>Weight:</strong> {{ $product['weight'] }}</li>
        <li><strong>Dimensions:</strong> {{ $product['dimensions'] }}</li>
        <li><strong>Color Options:</strong> {{ $product['color_options'] }}</li>
        <li><strong>Material:</strong> {{ $product['material'] }}</li>
        <li><strong>Features:</strong>
            <ul class="ml-4 list-disc">
                @foreach ($product['features'] as $feature)
                    <li>{{ $feature }}</li>
                @endforeach
            </ul>
        </li>
    </ul>
</div>
