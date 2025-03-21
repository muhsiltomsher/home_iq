@extends('layouts.app')

@section('title', 'Wishlist - HOME_IQ')

@section('content')

<div class="container mx-auto py-12 px-6 lg:px-12">
    <!-- Section Title -->
    <h2 class="text-3xl md:text-4xl text-left">
        My Wishlist</span>
    </h2>

    <!-- Products Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-[20px] gap-y-[30px] mt-[40px]">

        <div class="relative group cursor-pointer bg-transparent transition duration-300 overflow-hidden rounded-lg">

  <svg class="absolute top-4 right-4 z-50   text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
  </svg>


    <a href="http://127.0.0.1:8000/products/001" class="block">
        <div class="overflow-hidden rounded-lg">
            <img src="http://127.0.0.1:8000/images/products/ecoheat-5000.jpeg" alt="Google Nest Learning Thermostat 4th Gen with Sensor" class="w-full h-[300px] object-cover rounded-lg transition-transform duration-[400ms] ease-in-out group-hover:scale-[1.05]">
        </div>
    </a>

    <div class="absolute bottom-[55px] left-[10px] right-[10px] flex justify-between items-center py-[6px] bg-transparent z-[1]">
        <span class="text-[#41B6E8] py-[7px] px-[10px] rounded-full font-semibold text-sm shadow-sm bg-white/80 backdrop-blur-sm">
            AED 239
        </span>

        <a class="bg-[#41B6E8] py-[7px] px-[10px] rounded-full font-semibold text-sm shadow-sm text-white backdrop-blur-sm">
            Move to cart
</a>

        <button class="w-[35px] h-[35px] flex items-center justify-center bg-secondary hover:bg-[#41B6E8] text-white hover:text-white rounded-full shadow-md transition duration-[300ms]" aria-label="Add to Cart">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" width="20" height="20">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
            </svg>
        </button>
    </div>

    <p class="mt-[10px] text-left text-sm font-medium text-gray-800">Google Nest Learning Thermostat 4th Gen with Sensor</p>
</div>

        <div class="relative group cursor-pointer bg-transparent transition duration-300 overflow-hidden rounded-lg">

        <svg class="absolute top-4 right-4 z-50   text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
  </svg>


    <a href="http://127.0.0.1:8000/products/002" class="block">
        <div class="overflow-hidden rounded-lg">
            <img src="http://127.0.0.1:8000/images/products/thermasense-x1.jpeg" alt="ThermaSense X1" class="w-full h-[300px] object-cover rounded-lg transition-transform duration-[400ms] ease-in-out group-hover:scale-[1.05]">
        </div>
    </a>

    <div class="absolute bottom-[55px] left-[10px] right-[10px] flex justify-between items-center py-[6px] bg-transparent z-[1]">
        <span class="text-[#41B6E8] py-[7px] px-[10px] rounded-full font-semibold text-sm shadow-sm bg-white/80 backdrop-blur-sm">
            AED 289
        </span>

        <a class="bg-[#41B6E8] py-[7px] px-[10px] rounded-full font-semibold text-sm shadow-sm text-white backdrop-blur-sm">
            Move to cart
</a>

        <button class="w-[35px] h-[35px] flex items-center justify-center bg-secondary hover:bg-[#41B6E8] text-white hover:text-white rounded-full shadow-md transition duration-[300ms]" aria-label="Add to Cart">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" width="20" height="20">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
            </svg>
        </button>
    </div>

    <p class="mt-[10px] text-left text-sm font-medium text-gray-800">ThermaSense X1</p>
</div>

          
        
    

            



        

        <div class="relative group cursor-pointer bg-transparent transition duration-300 overflow-hidden rounded-lg">

        <svg class="absolute top-4 right-4 z-50   text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
  </svg>


    <a href="http://127.0.0.1:8000/products/003" class="block">
        <div class="overflow-hidden rounded-lg">
            <img src="http://127.0.0.1:8000/images/products/frostwave-elite.jpeg" alt="FrostWave Elite" class="w-full h-[300px] object-cover rounded-lg transition-transform duration-[400ms] ease-in-out group-hover:scale-[1.05]">
        </div>
    </a>

    <div class="absolute bottom-[55px] left-[10px] right-[10px] flex justify-between items-center py-[6px] bg-transparent z-[1]">
        <span class="text-[#41B6E8] py-[7px] px-[10px] rounded-full font-semibold text-sm shadow-sm bg-white/80 backdrop-blur-sm">
            AED 189
        </span>

        <a class="bg-[#41B6E8] py-[7px] px-[10px] rounded-full font-semibold text-sm shadow-sm text-white backdrop-blur-sm">
            Move to cart
</a>

        <button class="w-[35px] h-[35px] flex items-center justify-center bg-secondary hover:bg-[#41B6E8] text-white hover:text-white rounded-full shadow-md transition duration-[300ms]" aria-label="Add to Cart">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" width="20" height="20">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
            </svg>
        </button>
    </div>

    <p class="mt-[10px] text-left text-sm font-medium text-gray-800">FrostWave Elite</p>
</div>

          
        
    

            



        

        <div class="relative group cursor-pointer bg-transparent transition duration-300 overflow-hidden rounded-lg">

        <svg class="absolute top-4 right-4 z-50   text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
  </svg>


    <a href="http://127.0.0.1:8000/products/004" class="block">
        <div class="overflow-hidden rounded-lg">
            <img src="http://127.0.0.1:8000/images/products/sentinel-vision-x.jpeg" alt="Sentinel Vision X" class="w-full h-[300px] object-cover rounded-lg transition-transform duration-[400ms] ease-in-out group-hover:scale-[1.05]">
        </div>
    </a>

    <div class="absolute bottom-[55px] left-[10px] right-[10px] flex justify-between items-center py-[6px] bg-transparent z-[1]">
        <span class="text-[#41B6E8] py-[7px] px-[10px] rounded-full font-semibold text-sm shadow-sm bg-white/80 backdrop-blur-sm">
            AED 319
        </span>

        <a class="bg-[#41B6E8] py-[7px] px-[10px] rounded-full font-semibold text-sm shadow-sm text-white backdrop-blur-sm">
            Move to cart
</a>

        <button class="w-[35px] h-[35px] flex items-center justify-center bg-secondary hover:bg-[#41B6E8] text-white hover:text-white rounded-full shadow-md transition duration-[300ms]" aria-label="Add to Cart">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" width="20" height="20">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
            </svg>
        </button>
    </div>

    <p class="mt-[10px] text-left text-sm font-medium text-gray-800">Sentinel Vision X</p>
</div>



        

        <div class="relative group cursor-pointer bg-transparent transition duration-300 overflow-hidden rounded-lg">

        <svg class="absolute top-4 right-4 z-10   text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
  </svg>


    <a href="http://127.0.0.1:8000/products/005" class="block">
        <div class="overflow-hidden rounded-lg">
            <img src="http://127.0.0.1:8000/images/products/keylessguard-2.jpeg" alt="KeylessGuard 2.0" class="w-full h-[300px] object-cover rounded-lg transition-transform duration-[400ms] ease-in-out group-hover:scale-[1.05]">
        </div>
    </a>

    <div class="absolute bottom-[55px] left-[10px] right-[10px] flex justify-between items-center py-[6px] bg-transparent z-[1]">
        <span class="text-[#41B6E8] py-[7px] px-[10px] rounded-full font-semibold text-sm shadow-sm bg-white/80 backdrop-blur-sm">
            AED 259
        </span>

        <a class="bg-[#41B6E8] py-[7px] px-[10px] rounded-full font-semibold text-sm shadow-sm text-white backdrop-blur-sm">
            Move to cart
</a>

        <button class="w-[35px] h-[35px] flex items-center justify-center bg-secondary hover:bg-[#41B6E8] text-white hover:text-white rounded-full shadow-md transition duration-[300ms]" aria-label="Add to Cart">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" width="20" height="20">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
            </svg>
        </button>
    </div>

    <p class="mt-[10px] text-left text-sm font-medium text-gray-800">KeylessGuard 2.0</p>
</div>

          


            



            </div>

    
</div>


@endsection
