@props(['product'])

<div class="w-full md:w-1/2">
    <h1 class="text-3xl font-semibold text-gray-800">{{ $product['name'] }}</h1>
    <p class="text-gray-600 mt-2 text-lg">{{ $product['category'] }}</p>

    <!-- Price & Discount -->
    <div class="flex items-center gap-3 mt-4">
        <span class="text-3xl font-bold text-primary">${{ $product['price'] }}</span>
        @if (!empty($product['discount']))
        <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-md">
            {{ $product['discount'] }} OFF
        </span>
        @endif
    </div>


    <!-- Include Product Specifications -->
    <x-products.product-specifications :product="$product" />

    <!-- Action Buttons -->
    <div class="mt-6">
        <a href="#" class="bg-primary text-white px-6 py-3 rounded-lg text-lg font-medium hover:bg-secondary transition-all">
            Add to Cart
        </a>
        <a href="{{ route('products.index') }}" class="ml-4 text-gray-600 hover:text-primary">
            Back to Products
        </a>
    </div>
</div>
