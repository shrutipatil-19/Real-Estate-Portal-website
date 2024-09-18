@extends('layouts.app')
@section('title', 'Home')
@section('content')


    <section id="banner" class="relative h-screen overflow-hidden">
        <!-- Background Image -->
        <img src="{{ Storage::url($banner->banner_image) }}" alt="banner" class="w-full h-full object-cover">

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-l from-transparent to-black/70">
            <!-- The gradient overlay from transparent to semi-transparent black (70%) -->
        </div>

        <!-- Text and Button Section -->
        <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-10 md:px-40 space-y-6">
            <h1 class="text-4xl md:text-5xl font-bold max-w-[733px]">
                {{ $banner->heading }}
            </h1>
            <p class="text-lg md:text-xl max-w-[733px]">
                {{ $banner->sub_heading }}
            </p>
            <button class="px-6 py-3 bg-primary font-bold hover:bg-primary">
                Get a Quote
            </button>
        </div>
    </section>
    <div class="container mx-auto px-8">
        <section id="about_us" class="py-28">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-11 items-center">
                <!-- Image Section -->
                <div>
                    <img src="{{ Storage::url($about_us->aboutUsImage) }}" alt="About Us Image" class="w-full">
                </div>

                <!-- Content Section -->
                <div>
                    <h2 class="text-5xl font-bold mb-8 lg:mb-12">About Us</h2>
                    <p class="text-3xl font-bold text-[#3C3B3B] mb-6 lg:mb-8">
                        {{ $about_us->title }}
                    </p>
                    <p class="text-lg text-[#727272] mb-8 lg:mb-12 leading-8">
                        {{ $about_us->description }}
                    </p>
                    <a href="#"
                        class="bg-primary text-white font-bold px-6 py-2 w-36 h-12 flex items-center justify-center gap-2 opacity-100 hover:bg-primary transition duration-300 mb-8 lg:mb-16">
                        Read More
                    </a>



                    <!-- Stats Section -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-12 lg:mt-12">
                        <!-- Stat 1 -->
                        <div class="flex items-center">
                            <div class="text-blue-600">
                                <img src="img/recommendation2.png" alt="" class="w-16 h-16">
                            </div>
                            <div class="ml-4 text-[#3C3B3B] font-bold">
                                <p class="text-3xl font-bold">{{ $about_us->year_of_experience }} +</p>
                                <p class="text-sm">Years of Experience</p>
                            </div>
                        </div>

                        <!-- Stat 2 -->
                        <div class="flex items-center justify-between">
                            <div class="text-blue-600">
                                <img src="img/customer-service.png" alt="" class="w-16 h-16">
                            </div>
                            <div class="ml-4 text-[#3C3B3B] font-bold">
                                <p class="text-3xl font-bold text-[#3C3B3B]">{{ $about_us->projects_completed }} +</p>
                                <p class="text-sm">Projects Completed</p>
                            </div>
                        </div>

                        <!-- Stat 3 -->
                        <div class="flex items-center">
                            <div class="text-blue-600">
                                <img src="img/sold.png" alt="" class="w-16 h-16">
                            </div>
                            <div class="ml-4 text-[#3C3B3B] font-bold">
                                <p class="text-3xl font-bold">{{ $about_us->awards_won }} +</p>
                                <p class="text-sm">Awards Won</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects">
            <div class="flex items-center justify-center mb-10">
                <span class="text-4xl font-bold leading-tight tracking-tight text-center">
                    Projects
                </span>
            </div>
            {{-- <div class="grid grid-cols-3 gap-12"> --}}
            {{-- @foreach ($projects as $key => $project) --}}
            <div class="mt-6 grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
                <div class="group relative">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-05-related-product-01.jpg"
                        alt="Payment application dashboard screenshot with transaction table, financial highlights, and main clients on colorful purple background."
                        class="object-cover object-center w-full h-full">
                    <div class="absolute inset-0 flex items-center justify-center p-4 opacity-0 group-hover:opacity-100"
                        aria-hidden="true">
                        <div
                            class="w-full rounded-md bg-white bg-opacity-75 px-4 py-2 text-center text-sm font-medium text-gray-900 backdrop-blur backdrop-filter">
                            View Product
                        </div>
                    </div>
                </div>
            </div>
            
                <!-- More products... -->
                {{-- @endforeach --}}
                

        </section>

    </div>












@endsection
