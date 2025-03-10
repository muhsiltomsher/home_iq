@extends('layouts.app')

@section('title', 'Our Services - HOME_IQ')

@section('content')
<section id="services-section" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12">
        <h2 class="text-3xl md:text-4xl font-normal text-center">
            Expert <span class="text-[#41B6E8] font-semibold">Installation</span> for a Smarter Home
        </h2>
        <p class="text-gray-600 mt-4 text-center">
            Our professionals ensure a seamless setup for your smart home devices. <br>
            Enjoy secure and hassle-free installation tailored to your needs.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
            @foreach($services as $category)
                <div class="col-span-1">
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">{{ $category['name'] }}</h3>
                    @foreach($category['services'] as $service)
                        <div class="group p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition duration-300">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800 group-hover:text-[#41B6E8] transition duration-300">
                                        {{ $service['title'] }}
                                    </h3>
                                    <p class="text-sm text-gray-500 mt-1">{{ $service['description'] }}</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <img src="{{ asset('images/' . $service['image']) }}" alt="{{ $service['title'] }}" class="w-full h-40 object-cover rounded-lg">
                            </div>
                            <div class="flex justify-between items-center mt-6 border-t pt-4">
                                <a href="{{ route('services.show', ['id' => $service['id']]) }}" 
                                   class="inline-flex items-center px-[14px] py-[8px] border border-gray-300 rounded-full hover:bg-gray-100 transition duration-300">
                                    Learn More
                                    <span class="ml-[10px] w-[20px] h-[20px] flex items-center justify-center bg-black text-white rounded-full">+</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection











<!-- @extends('layouts.app')

@section('title', 'Our Services - HOME_IQ')

@section('content')
    <section id="services-section" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-normal text-center">
                Expert <span class="text-[#41B6E8] font-semibold">Installation</span> for a Smarter Home
            </h2>
            <p class="text-gray-600 mt-4 text-center">
                Our professionals ensure a seamless setup for your smart home devices. <br>
                Enjoy secure and hassle-free installation tailored to your needs.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
                @foreach($services as $service)
                    <div class="group p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition duration-300">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-[#41B6E8] transition duration-300">
                                    {{ $service['title'] }}
                                </h3>
                                <p class="text-sm text-gray-500 mt-1">{{ $service['subtitle'] }}</p>
                            </div>
                            <span class="text-sm font-medium text-[#41B6E8]">{{ $service['duration'] }}</span>
                        </div>
                        <p class="mt-4 text-sm text-gray-600">{{ $service['description'] }}</p>
                        <div class="flex justify-between items-center mt-6 border-t pt-4">
                            <span class="text-lg font-bold">AED {{ number_format($service['price'], 2) }}</span>
                            <a href="{{ route('services.show', ['id' => $service['id']]) }}" 
                               class="inline-flex items-center px-[14px] py-[8px] border border-gray-300 rounded-full hover:bg-gray-100 transition duration-300">
                                Learn More
                                <span class="ml-[10px] w-[20px] h-[20px] flex items-center justify-center bg-black text-white rounded-full">+</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-[40px] flex justify-center">
                <a href="{{ route('services.index') }}" 
                   class="inline-block px-[30px] py-[12px] bg-black text-white rounded-full shadow-md hover:bg-[#41B6E8] transition duration-300">
                    View All Services
                </a>
            </div>
        </div>
    </section>
@endsection -->
