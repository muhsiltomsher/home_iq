@props(['services'])

<section id="services-section" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12">
        <!-- Section Title -->
        <h2 class="text-3xl md:text-4xl font-normal text-center">
            Expert <span class="text-primary font-semibold">Installation</span> for a Smarter Home
        </h2>
        <p class="text-gray-600 mt-4 text-center">
            Our professionals ensure a seamless setup for your smart home devices. <br>
            Enjoy secure and hassle-free installation tailored to your needs.
        </p>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10">
            @forelse($services as $service)
                <!-- Service Card -->
                <div class="group p-6 bg-[#f7f7f7] rounded-2xl transition duration-300 border border-gray-200 hover:border-primary relative overflow-hidden">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-semibold text-black group-hover:text-primary transition duration-300">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-sm text-black mt-1">{{ $service['subtitle'] }}</p>
                        </div>
                        <span class="text-sm font-medium text-primary">{{ $service['duration'] }}</span>
                    </div>
                    <p class="mt-4 text-sm text-black">
                        {{ $service['description'] }}
                    </p>
                   
                   
                    <div class="flex justify-between items-center mt-[100px] relative z-10">
                        <span class="text-[#41B6E8] py-[15px] px-[10px] rounded-full font-semibold text-sm shadow-sm bg-white/80 backdrop-blur-sm">AED {{ number_format($service['price'], 2) }}</span>
                      
                        <div class="flex items-center space-x-2">
                            <a href="{{ $service['link'] }}"
                               class="inline-flex items-center px-3 py-1 rounded-full transition duration-300 text-gray-600 border border-gray-600 text-xs font-medium"
                            >
                                Learn More
                            </a>

                            <button class="w-7 h-7 rounded-full bg-gray-800 text-white flex items-center justify-center">
                                +
                            </button>
                        </div>
           


                    </div>

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#E0F7FA] opacity-0 group-hover:opacity-70 transition duration-300 z-0 rounded-xl"></div>

                </div>
            @empty
                <!-- No Services Available Message -->
                <div class="col-span-full text-center text-gray-600 text-lg mt-6">
                    🚨 No services available at the moment.
                </div>
            @endforelse
        </div>

    </div>
</section>
