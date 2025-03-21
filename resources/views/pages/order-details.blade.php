@extends('layouts.app')
@section('title', 'Cart - HOME_IQ')
@section('content')
<section class="container mx-auto py-12 px-6 lg:px-12">
<div class="max-w-4xl mx-auto p-5">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Order Tracking</h2>
            <div class="border-l-4 border-blue-500 pl-4">
                <div class="mb-6">
                    <p class="font-semibold">Order Placed</p>
                    <p class="text-sm text-gray-600">Your order has been placed successfully.</p>
                </div>
                <div class="mb-6">
                    <p class="font-semibold">Processing</p>
                    <p class="text-sm text-gray-600">Your order is being prepared.</p>
                </div>
                <div class="mb-6">
                    <p class="font-semibold">Shipped</p>
                    <p class="text-sm text-gray-600">Your order is on the way.</p>
                </div>
                <div class="mb-6">
                    <p class="font-semibold">Delivered</p>
                    <p class="text-sm text-gray-600">Your order has been delivered.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection