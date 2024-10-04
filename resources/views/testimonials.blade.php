@extends('layouts.app')
@section('title', 'Testimonials')
@section('content')

    <div class="relative">
        <img src="img/testimonials1.png" alt="Testimonials Banner" class="mx-auto w-full lg:h-auto h-[177px] object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
            <h2 class="text-2xl lg:text-[40px] font-bold lg:mb-3 mb-[6px]">Testimonials</h2>
            <span class="text-base lg:text-2xl text-center">Lorem ipsum dolor sit amet consectetur.</span>
        </div>
    </div>

    <section class="container mx-auto lg:px-16 px-4 lg:mt-6 mt-[14px]">
        <div class="flex gap-3 items-center">
            <a href="/" class="lg:text-base text-sm text-customGray">Home</a>
            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.66667 6.9852L0 13.3488L0.651163 14L8 6.9852L0.651163 0L0 0.621565L6.66667 6.9852Z" fill="#3C3B3B"/>
                </svg>
                <span class="lg:text-base text-sm text-customGray">Testimonials</span>
        </div>


        <div class="text-center lg:mt-28 mt-14 lg:w-[530px] w-[293px] px-4">
            <h1 class="text-2xl lg:text-[42px] font-bold text-customGray text-left lg:leading-[47.72px] leading-[27.27px]">{{ $testimonial->heading }}</h1>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper swiper_testimonial lg:py-[42px] py-7">
            <div class="swiper-wrapper">
                @foreach ($testimonial->testimonial_images_details as $item)
                    <div class="swiper-slide bg-white">
                        <!-- Testimonial Content -->
                        <div class="flex flex-col lg:flex-row items-center lg:items-start">
                            <!-- Testimonial Image (circle) -->
                            <div class="w-[180px] h-[180px] lg:w-[371px] lg:h-[371px] rounded-full border-4 border-white overflow-hidden flex-shrink-0">
                                <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover">
                            </div>


                            <!-- Testimonial Details -->
                            <div class="lg:flex-grow p-4 lg:p-20">
                                <p class="text-customGray text-base lg:text-2xl leading-8 lg:mb-[38px] mb-5">{{ $item['description'] }}</p>
                                <div class="border-b border-customBorder opacity-15"></div>

                                <!-- Testimonial Author -->
                                <div class="flex  justify-between items-center lg:items-start lg:mt-[38px] mt-5">
                                    <div>
                                        <span class="font-semibold text-sm lg:text-xl">{{ $item['name'] }}</span><br>
                                        <span class="text-[#666666] text-xs lg:text-base">{{ $item['occupation'] }}</span>
                                    </div>

                                    <!-- Rating -->
                                    <div class="">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <span class="{{ $i <= $item['star'] ? 'text-yellow-400' : 'text-gray-300' }} text-sm lg:text-xl">
                                                {{ $i <= $item['star'] ? '★' : '★' }}
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
            <div class="flex justify-end items-center space-x-4 mr-6 lg:mr-20">
                <div class="swiper-button-prev1 bg-white border border-[#3C3B3B] cursor-pointer p-2 lg:p-0">
                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.31956 0.243386C8.15884 0.0875378 7.94098 0 7.71382 0C7.48667 0 7.26881 0.0875378 7.10809 0.243386L0.250683 6.90115C0.0901623 7.05719 0 7.26872 0 7.48925C0 7.70979 0.0901623 7.92132 0.250683 8.07736L7.10809 14.7351C7.18656 14.8169 7.28119 14.8825 7.38634 14.928C7.49148 14.9734 7.60499 14.9979 7.72008 14.9999C7.83518 15.0018 7.9495 14.9813 8.05623 14.9394C8.16297 14.8976 8.25992 14.8353 8.34132 14.7562C8.42271 14.6772 8.48688 14.5831 8.52999 14.4795C8.5731 14.3758 8.59428 14.2648 8.59225 14.1531C8.59022 14.0414 8.56502 13.9312 8.51817 13.8291C8.47132 13.727 8.40378 13.6351 8.31956 13.5589L2.92507 8.32148H19.1428C19.3702 8.32148 19.5882 8.2338 19.7489 8.07772C19.9097 7.92165 20 7.70997 20 7.48925C20 7.26854 19.9097 7.05686 19.7489 6.90079C19.5882 6.74471 19.3702 6.65703 19.1428 6.65703H2.92507L8.31956 1.41959C8.48008 1.26355 8.57024 1.05203 8.57024 0.831488C8.57024 0.610949 8.48008 0.399427 8.31956 0.243386Z" fill="#3C3B3B"/>
                        </svg>
                </div>
                <div class="swiper-button-next1 bg-white border border-[#3C3B3B] cursor-pointer p-2 lg:p-0">
                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6804 0.243386C11.8412 0.0875378 12.059 0 12.2862 0C12.5133 0 12.7312 0.0875378 12.8919 0.243386L19.7493 6.90115C19.9098 7.05719 20 7.26872 20 7.48925C20 7.70979 19.9098 7.92132 19.7493 8.07736L12.8919 14.7351C12.8134 14.8169 12.7188 14.8825 12.6137 14.928C12.5085 14.9734 12.395 14.9979 12.2799 14.9999C12.1648 15.0018 12.0505 14.9813 11.9438 14.9394C11.837 14.8976 11.7401 14.8353 11.6587 14.7562C11.5773 14.6772 11.5131 14.5831 11.47 14.4795C11.4269 14.3758 11.4057 14.2648 11.4078 14.1531C11.4098 14.0414 11.435 13.9312 11.4818 13.8291C11.5287 13.727 11.5962 13.6351 11.6804 13.5589L17.0749 8.32148H0.857175C0.629838 8.32148 0.411812 8.2338 0.251061 8.07772C0.0903092 7.92165 0 7.70997 0 7.48925C0 7.26854 0.0903092 7.05686 0.251061 6.90079C0.411812 6.74471 0.629838 6.65703 0.857175 6.65703H17.0749L11.6804 1.41959C11.5199 1.26355 11.4298 1.05203 11.4298 0.831488C11.4298 0.610949 11.5199 0.399427 11.6804 0.243386Z" fill="#3C3B3B"/>
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
        padding: 12px !important;
        width:50px;
height:50px;
padding: 10px 8px 10px 8px;
gap: 10px;
border-radius: 100%;
opacity: 0px;
angle: -180 deg;

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
