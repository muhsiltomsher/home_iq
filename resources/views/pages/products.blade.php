@extends('layouts.app')

@section('title', 'Products - HOME_IQ')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Our Products</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <div class="bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition duration-300">
            <img src="{{ asset('images/sample-product.jpg') }}" alt="Sample Product" class="w-full h-40 object-cover rounded-lg mb-4">
            <h2 class="text-xl font-semibold">Sample Product</h2>
            <p class="text-gray-600">This is a sample product description.</p>
            <a href="#" class="block mt-3 text-primary font-semibold hover:underline">View Details</a>
        </div>
    </div>
</div>
@endsection
