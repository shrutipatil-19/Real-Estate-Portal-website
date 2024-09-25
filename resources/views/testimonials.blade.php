@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <div class="relative">
        <img src="img/testimonials1.png" alt="Testimonials Banner" class="mx-auto w-full md:h-auto h-full object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-4">
            <h1 class="text-3xl md:text-4xl lg:text-6xl font-bold">Testimonials</h1>
            <span class="text-lg md:text-xl lg:text-2xl mt-2 text-center">Lorem ipsum dolor sit amet consectetur.</span>
        </div>
    </div>

    <section class="container mx-auto lg:px-16 px-4 mt-7">
        <div class="flex gap-3 items-center">
            <span class="text-base text-[#3C3B3B]">Home</span>
            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.66667 6.9852L0 13.3488L0.651163 14L8 6.9852L0.651163 0L0 0.621565L6.66667 6.9852Z"
                    fill="#3C3B3B" />
            </svg>
            <span class="text-sm text-[#3C3B3B]">Testimonials</span>
        </div>


            <div class="text-center mt-12 w-[530px]">
                <h2 class="lg:text-5xl text-2xl font-bold text-[#3C3B3B] text-left">Lorem ipsum dolor sit amet consectetur.</h2>
            </div>

            <!-- Swiper Slider -->
            <div class="swiper swiper_testimonial py-10">
                <div class="swiper-wrapper">
                    @foreach ($testimonial->testimonial_images_details as $item)
                        <div class="swiper-slide bg-white">
                            <!-- Testimonial Content -->
                            <div class="flex items-center">
                                <!-- Testimonial Image (circle) -->
                                <div class="w-24 h-24 lg:w-[371px] lg:h-[371px] rounded-full border-4 border-white overflow-hidden flex-shrink-0">
                                    <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover">
                                </div>

                                <!-- Testimonial Details -->
                                <div class="flex-grow p-20">
                                    <p class="text-gray-600 lg:text-2xl text-sm">Lorem ipsum dolor sit amet consectetur. Morbi facilisi et sem enim vulputate vestibulum vitae aliquet elit. Magnis aliquet sed amet neque. Morbi facilisi et sem enim vulputate vestibulum vitae</p>
                                    <div class="border-b border-customBorder opacity-15 my-4"></div>

                                    <!-- Testimonial Author -->
                                    <div class="py-6 flex justify-between items-center">
                                        <div>
                                            <span class="font-semibold lg:text-xl text-sm">{{ $item['name'] }}</span><br>
                                            <span class="text-gray-500 lg:text-xl text-xs">{{ $item['occupation'] }}</span>
                                        </div>

                                        <!-- Rating -->
                                        <div>
                                            @for ($i = 1; $i <= 5; $i++)
                                                <span class="{{ $i <= $item['star'] ? 'text-yellow-400' : 'text-gray-300' }} lg:text-xl text-sm">
                                                    {{ $i <= $item['star'] ? '★' : '☆' }}
                                                </span>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-end items-center space-x-4 mr-20">
                    <div class="swiper-button-prev1 bg-white border border-[#2A4D69] cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#3C3B3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                          </svg>

                    </div>
                    <div class="swiper-button-next1 bg-white border border-[#2A4D69] cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#3C3B3B" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                          </svg>

                    </div>
                </div>
            </div>


    </section>


@endsection


<script type="module">
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

    // Second Swiper for 2 slides
    const swiper2 = new Swiper('.swiper_testimonial', {
        loop: true, // Enable looping
        navigation: {
            nextEl: '.swiper-button-next1',
            prevEl: '.swiper-button-prev1',
        },
        breakpoints: {
            // Mobile devices
            320: {
                slidesPerView: 1, // Show 1 slide for mobile
            },
            375: {
                slidesPerView: 1, // Show 1 slide for mobile
            },
            425: {
                slidesPerView: 1, // Show 1 slide for mobile
            },
            // Small tablets
            480: {
                slidesPerView: 1, // Show 2 slides for small tablets
            },
            // Tablets
            640: {
                slidesPerView: 1, // Show 3 slides for tablets
            },
            // Small desktops
            768: {
                slidesPerView: 1, // Show 4 slides for small desktops
            },
            // Large desktops
            1024: {
                slidesPerView: 1, // Show 5 slides for large desktops
            },
        },
        spaceBetween: 100, // Add some spacing between slides if necessary
    });
</script>
<style>
    .swiper-button-next1,
    .swiper-button-prev1 {

        border: 1px solid #2A4D69 !important;
        /* Border color for design consistency */
        color: #2A4D69 !important;
        /* Border color for design consistency */
        background-color: white !important;
        /* Background color */
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border-radius: 100% !important;
        padding: 4px !important;
    }

    /* Override Swiper navigation buttons */
    .swiper-button-next1,
    .swiper-button-prev1 {
        position: relative !important;
        /* Ensures relative positioning */
        top: auto !important;
        /* Removes any top alignment */
        /* Add both margin-top values */
        margin-top: none !important;
        /* Override with static value */
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #2A4D69 !important;
        /* Maintain button color */
    }

    .swiper-wrapper {
        position: relative;
        width: 100%;
        height: auto !important;
        z-index: 1;
        display: flex;
        transition-property: transform;
        transition-timing-function: var(--swiper-wrapper-transition-timing-function, initial);
        box-sizing: content-box;
    }


    .swiper-button-next1:after,
    .swiper-button-prev1:after {
        font-family: swiper-icons;
        text-transform: none !important;
        letter-spacing: 0;
        font-variant: initial;
        line-height: 1;
        font-size: 18px !important;
    }
</style>