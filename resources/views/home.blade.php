@extends('layouts.app')
@section('title', 'Home')
@section('content')


<section id="banner" class="relative h-screen overflow-hidden">
    <!-- Background Image -->
    <img src="img/Rectangle_108.png" alt="banner" class="w-full h-full object-cover">

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-l from-transparent to-black/70">
        <!-- The gradient overlay from transparent to semi-transparent black (70%) -->
    </div>

    <!-- Text and Button Section -->
    <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-10 md:px-40 space-y-6">
        <h1 class="text-4xl md:text-5xl font-bold max-w-[733px]">
            Lorem ipsum dolor sit amet consectetur.
        </h1>
        <p class="text-lg md:text-xl max-w-[733px]">
            Lorem ipsum dolor sit amet consectetur. Malesuada orci donec dolor egestas.
        </p>
        <button class="px-6 py-3 bg-primary font-bold hover:bg-primary">
            Get a Quote
        </button>
    </div>
</section>

<section id="about_us" class="container mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Image Section -->
        <div>
            <img src="img/Rectangle_97.png" alt="About Us Image" class="w-full h-96">
        </div>

        <!-- Content Section -->
        <div>
            <h2 class="text-2xl font-bold mb-4">About Us</h2>
            <p class="text-gray-700 mb-4">
                Lorem ipsum dolor sit amet consectetur. In lacinia quisque quisque purus quis consequat pellentesque.
            </p>
            <p class="text-gray-600">
                Lorem ipsum dolor sit amet consectetur. Iaculis molestie ipsum urna adipiscing commodo enim morbi sed ut. Ultricies pulvinar odio ornare id quis vestibulum. Vestibulum at tempor scelerisque amet elit. A vulputate amet quam quis. In scelerisque sit faucibus pharetra leo aliquam egestas orci amet. Quam sollicitudin condimentum volutpat tristique arcu massa.
            </p>
        </div>
    </div>
</section>







@endsection
