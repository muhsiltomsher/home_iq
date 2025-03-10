@extends('layouts.app')

@section('title', $service['title'] . ' - HOME_IQ')

@section('content')
<section class="py-10 bg-white">
    <x-wrapper>
        <div class="max-w-2xl mx-auto">
            <img src="{{ asset('images/' . $service['image']) }}" alt="{{ $service['title'] }}" class="w-full h-60 object-cover rounded-lg shadow-md">
            <h2 class="mt-6 text-3xl font-semibold text-gray-800">{{ $service['title'] }}</h2>
            <p class="text-gray-600 mt-2">{{ $service['subtitle'] }}</p>
            <p class="text-gray-700 mt-4">{{ $service['description'] }}</p>
            <p class="mt-4 font-bold text-lg text-primary">AED {{ $service['price'] }}</p>
            <a href="{{ route('services.index') }}" class="mt-6 inline-block px-6 py-2 bg-black text-white rounded-full hover:bg-[#41B6E8] transition duration-300">
                Back to Services
            </a>
        </div>
    </x-wrapper>
</section>
@endsection
