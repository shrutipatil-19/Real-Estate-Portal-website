@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="relative">
    <img src="img/about-us-banner.png" alt="About Us Banner" class="mx-auto w-full md:h-auto h-full object-cover">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-4">
        <h1 class="text-3xl md:text-4xl lg:text-6xl font-bold">About Us</h1>
        <span class="text-lg md:text-xl lg:text-2xl mt-2 text-center">Lorem ipsum dolor sit amet consectetur.</span>
    </div>
</div>



<section class="container mx-auto lg:px-16 px-4 mt-7">
    <div class="flex gap-3 items-center">
        <span class="text-base text-[#3C3B3B]">Home</span>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.66667 6.9852L0 13.3488L0.651163 14L8 6.9852L0.651163 0L0 0.621565L6.66667 6.9852Z" fill="#3C3B3B"/>
            </svg>
            <span class="text-sm text-[#3C3B3B]">About Us</span>
    </div>

     <!-- Overview Section -->
     <div class="md:mb-12 grid md:grid-cols-2 py-14 md:py-28">
        <div class="lg:px-[114px] mt-6 md:mt-[48px]">
            <h2 class="text-3xl md:text-5xl font-bold text-[#3C3B3B] mb-6 md:mb-11">Overview</h2>
            <p class="text-base md:text-lg mt-4 md:mt-10">Lorem ipsum dolor sit amet consectetur. Volutpat tortor convallis donec</p>
        </div>
        <div class="">
            <p class="text-[#666666] leading-8 mb-6 md:mb-9">
                Lorem ipsum dolor sit amet consectetur. Placerat nunc ut in lectus. Volutpat erat donec fringilla nibh purus tellus et. Facilisis eget tincidunt nisl id. Nunc consequat turpis mattis nunc aliquam ac tortor mauris. Porttitor eleifend amet id non lectus cras ultrices.
            </p>
            <p class="text-[#666666] leading-8">
                Lorem ipsum dolor sit amet consectetur. Placerat nunc ut in lectus. Volutpat erat donec fringilla nibh purus tellus et. Facilisis eget tincidunt nisl id. Nunc consequat turpis mattis nunc aliquam ac tortor mauris. Porttitor eleifend amet id non lectus cras ultrices.
            </p>
        </div>
    </div>

     <!-- Our Mission Section -->
     <section class="md:mb-28  grid md:grid-cols-2 md:gap-8 relative">
        <div class="relative  lg:px-24 md:mb-0 mb-24">
            <!-- The first image positioned normally -->
            <img src="img/Rectangle 120.png" alt="Our Mission Image 1" class="object-cover h-[256px] w-[216px] md:h-[335px] md:w-[262px] relative z-10">
            <!-- The second image overlapping the first one using negative margin -->
            <img src="img/Rectangle 121.png" alt="Our Mission Image 2" class="object-cover h-[256px] w-[216px] md:h-[335px] md:w-[262px] absolute md:left-[300px] left-[80px] top-[70px] z-20">
        </div>
        <div class="flex flex-col justify-center">
            <h2 class="text-3xl font-bold mb-6 text-[#3C3B3B]">Our Mission</h2>
            <p class="text-[#666666] text-base leading-7">
                Lorem ipsum dolor sit amet consectetur. Placerat nunc id in lorem. Vulputate erat donec fringilla etiam purus nibh in.
                Faucibus eget tincidunt ridiculus et id. Nunc nonummy turpis mattis metus vulputate eu tristique hendrerit. Placerat efficitur
                erat id non laoreet vitae cura ultricies. Magna non bibendum egestas pretium sed non tincidunt. Orna aliquam ac non lorem maecenas.
            </p>
        </div>
    </section>

    <!-- Our Vision Section -->
    <div class="grid md:grid-cols-2 items-center lg:px-[114px] gap-8 md:py-28 py-14">
        <div class="md:order-first order-last md:pr-8">
            <h2 class="text-3xl font-bold mb-6 md:mb-8 text-[#3C3B3B]">Our Vision</h2>
            <p class="text-[#666666] text-base leading-7 md:leading-8">
                Lorem ipsum dolor sit amet consectetur. Volutpat tortor convallis donec elementum sollicitudin tincidunt donec facilisis. Fermentum varius aenean amet sem non neque faucibus laoreet placerat. Convallis posuere augue diam enim sagittis leo. Ultricies pellentesque et volutpat adipiscing pellentesque vitae felis. Placerat ut ipsum aliquam aenean. Quis enim turpis arcu vel erat at hendrerit sit auctor. Vitae eget consectetur arcu eget mattis molestie auctor est.
            </p>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <img src="img/OurVision-1.png" alt="Our Vision Image 1" class="w-full h-auto object-cover">
            <img src="img/OurVision-2.png" alt="Our Vision Image 2" class="w-full h-auto object-cover">
            <img src="img/OurVision-3.png" alt="Our Vision Image 3" class="w-full col-span-2 h-auto object-cover">
        </div>
    </div>

</section>

<section class="lg:py-28 py-14">
    <div class="w-full h-[586px] bg-fixed bg-no-repeat bg-cover flex items-center justify-center"
        style="background-image: url('img/about-us-banner-2.png');">
        <div class="text-center text-white">
            <p class="text-base lg:text-4xl max-w-lg">
                Lorem ipsum dolor sit amet consectetur. Dignissim morbi
            </p>
        </div>
    </div>
</section>



<section id="Achievements" class="container mx-auto lg:px-16 px-4">
    <div class="flex flex-col items-center justify-center mb-3">
        <span class="lg:text-5xl text-2xl font-bold leading-tight tracking-tight text-center text-[#3C3B3B] mb-3">
            Meet Our Team
        </span>
        <div class="flex items-center justify-center text-center text-[#666666] md:text-2xl text-base">
            Lorem ipsum dolor sit amet consectetur. In lacinia quisque.
        </div>
    </div>

    <div class="swiper my-10">
        <!-- Wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($achievement->achievement_images_details as $achievement)
                <div class="swiper-slide flex flex-col items-center justify-center">
                    <!-- Image wrapped in a circle -->
                    <div class="w-[216px] h-[216px] rounded-full bg-gray-300 flex items-center justify-center">
                        <img src="{{ Storage::url($achievement['image']) }}" alt="{{ $achievement['image_title'] }}"
                            class="w-full h-full object-cover rounded-full">
                    </div>
                    <!-- Title -->
                    <span class="mt-4 text-lg font-semibold">{{ $achievement['image_title'] }}</span>
                    <!-- Subtitle -->
                    <span class="text-gray-500">{{ $achievement['image_sub_title'] }}</span>
                </div>
            @endforeach
        </div>
        <!-- Navigation buttons -->
        <div class="flex justify-center items-center mt-10 space-x-10 ">
            <div class="swiper-button-prev bg-white border border-[#2A4D69]  cursor-pointer">

            </div>
            <div class="swiper-button-next bg-white border border-[#2A4D69]  cursor-pointer">
            </div>
        </div>
    </div>
</section>






@endsection
<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

    const swiper = new Swiper('.swiper', {
        loop: true, // Enable looping
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 4, // Default to show 5 slides

        breakpoints: {
            // Mobile devices
            320: {
                slidesPerView: 1, // Show 1 slide for mobile
            },
            // Small tablets
            480: {
                slidesPerView: 2, // Show 2 slides for small tablets
            },
            // Tablets
            640: {
                slidesPerView: 3, // Show 3 slides for tablets
            },
            // Small desktops
            768: {
                slidesPerView: 3, // Show 4 slides for small desktops
            },
            // Large desktops
            1024: {
                slidesPerView: 4, // Show 5 slides for large desktops
            },
        },
    });
</script>
<style>
    .swiper-button-next,
    .swiper-button-prev {

        border: none !important;

    }

    /* Override Swiper navigation buttons */
    .swiper-button-next,
    .swiper-button-prev {
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


    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-family: swiper-icons;
        text-transform: none !important;
        letter-spacing: 0;
        font-variant: initial;
        line-height: 1;
        font-size: 18px !important;
    }
</style>
