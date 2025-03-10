@extends('layouts.app')

@section('title', $product['name'] . ' - HOME_IQ')

@section('content')
<div class="container mx-auto py-12 px-6 lg:px-12">
    <div class="flex flex-col md:flex-row gap-10">
        <!-- Product Image Slider -->
        <x-products.image-slider :product="$product" />

        <!-- Product Info & Specifications -->
        <x-products.product-info :product="$product" />
    </div>

    <!-- Full-Width Product Description -->
    <div class="mt-10">
        <x-products.product-description :product="$product" />
    </div>

    <!-- Related Products -->
    <x-products.related-products :relatedProducts="$relatedProducts" />
</div>
@endsection
