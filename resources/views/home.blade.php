@extends('layouts.app')
@section('title', 'Home')
@section('content')


    <section id="banner" class="relative lg:h-screen  h-[800px] overflow-hidden">
        <!-- Background Image -->
        <img src="{{ Storage::url($banner->banner_image) }}" alt="banner" class="w-full h-full object-cover">

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-l from-transparent to-black/70">
            <!-- The gradient overlay from transparent to semi-transparent black (70%) -->
        </div>

        <!-- Text and Button Section -->
        <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-4 lg:px-40 lg:space-y-[42px] space-y-[22px]">
            <h1 class="text-2xl lg:text-[46px] font-bold max-w-[733px] lg:leading-[52px]">
                {{ $banner->heading }}
            </h1>
            <p class="text-[16px] lg:text-xl max-w-[733px]">
                {{ $banner->sub_heading }}
            </p>
            <a href="/contact-us#1" class="px-6 py-3 lg:h-12 h-[44px] lg:text-base text-sm bg-primary font-bold hover:bg-primary">
                Get a Quote
            </a>
        </div>
    </section>

    <div class="container mx-auto lg:px-16 px-4">
        <section id="about_us" class="lg:py-28 py-14">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[42px] items-center">
                <!-- Image Section -->
                <div>
                    <img src="{{ Storage::url($about_us->aboutUsImage) }}" alt="About Us Image" class="w-full lg:h-[574px] h-[387px]">
                </div>

                <!-- Content Section -->
                <div>
                    <h2 class="text-2xl lg:text-[42px]  font-bold mb-[14px] lg:mb-[42px] text-customGray">About Us</h2>
                    <p class="text-xl lg:text-2xl font-bold text-customBorder mb-[14px] lg:mb-6 leading-7">
                        {{ $about_us->title }}
                    </p>
                    <p class="text-base text-customBorder mb-[22px] lg:mb-[42px] leading-8">
                        {{ $about_us->description }}
                    </p>
                    <a href="/about-us"
                        class="bg-primary text-white lg:text-base text-sm font-bold px-6 py-2 w-36 lg:h-12 h-[44px] flex items-center justify-center gap-2 opacity-100 hover:bg-primary transition duration-300 lg:mb-[38px] mb-[22px]">
                        Read More
                    </a>



                    <!-- Stats Section -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-1 gap-3">
                        <!-- Stat 1 -->
                        <div class="flex items-center">
                            <div class="lg:w-16 w-12 lg:h-16 h-12">
                                <img src="img/recommendation2.png" alt="" class="bg-center">
                            </div>
                            <div class="ml-4 text-customGray font-bold">
                                <p class="lg:text-[32px] text-2xl font-bold">{{ $about_us->year_of_experience }} +</p>
                                <p class="text-sm">Years of Experience</p>
                            </div>
                        </div>

                        <!-- Stat 2 -->
                        <div class="flex items-center">
                            <div class="lg:w-16 w-12 lg:h-16 h-12">
                                <img src="img/customer-service2.png" alt="" class=" bg-center">
                            </div>
                            <div class="ml-4 text-customGray font-bold">
                                <p class="lg:text-[32px] text-2xl font-bold text-customGray">{{ $about_us->projects_completed }} +</p>
                                <p class="text-sm">Projects Completed</p>
                            </div>
                        </div>

                        <!-- Stat 3 -->
                        <div class="flex items-center">
                            <div class="lg:w-16 w-12 lg:h-16 h-12">
                                <img src="img/sold.png" alt="" class="bg-center">
                            </div>
                            <div class="ml-4 text-customGray font-bold">
                                <p class="lg:text-[32px] text-2xl font-bold">{{ $about_us->awards_won }} +</p>
                                <p class="text-sm">Awards Won</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects">
            <div class="flex flex-col items-center justify-center lg:mb-6 mb-[14px]">
                <span class="lg:text-[42px] text-2xl font-bold leading-[47.72px] text-center text-customGray">
                    Projects
                </span>
            </div>
            <div class="flex items-center justify-center space-x-8">
                <!-- Ongoing tab (active) -->
                <span class="relative text-customGray lg:text-base text-sm cursor-pointer">
                    Ongoing
                    <span class="absolute left-0 right-0 -bottom-1 h-1 bg-[#FBB249]"></span>
                    <!-- Underline for active tab -->
                </span>

                <!-- Completed tab -->
                <span class="relative text-customBorder lg:text-base text-sm cursor-pointer hover:text-customBorder">
                    Completed
                </span>

                <!-- Upcoming tab -->
                <span class="relative text-customBorder lg:text-base text-sm cursor-pointer hover:text-customBorder">
                    Upcoming
                </span>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 sm:gap-y-10 lg:gap-12 lg:mt-0 mt-[32px] lg:mb-0 mb-3 lg:py-[42px]">
                @foreach ($projects as $project)
                    <div class="group relative">
                        <!-- Project Image -->
                        <img src="{{ Storage::url($project->image) }}" alt="{{ $project->location }}" class="object-cover object-center w-full lg:h-auto h-[255px] group-hover:brightness-50 transition duration-500">

                        <!-- Hidden Info Section for Larger Screens -->
                        <div class="hidden md:flex absolute inset-0 items-center justify-center opacity-0 group-hover:opacity-100 transition duration-700" aria-hidden="true">
                            <div class="bg-white text-center p-8 h-[194px]">
                                <span class="block text-[22px] text-customGray">{{ $project->name }}</span>
                                <div class="flex items-center justify-center gap-1 text-[#727272] text-base my-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    {{ $project->location }}
                                </div>
                                <span class="block text-xl text-customGray font-bold flex items-center justify-center gap-1">
                                    <span class="mt-1 font-normal">₹</span>{{ $project->price ? $project->price . ' onwards' : '' }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Info Section for Smaller Screens -->
                    <div class="block md:hidden w-full bg-white text-center mt-3 mb-4">
                        <span class="block text-xl text-customGray">{{ $project->name }}</span>
                        <div class="flex items-center justify-center gap-1 text-customBorder text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            {{ $project->location }}
                        </div>
                        <span class="block text-base text-customGray font-bold flex items-center justify-center gap-1">
                            <span class="mt-1 font-normal">₹</span>{{ $project->price ? $project->price . ' onwards' : '' }}
                        </span>
                    </div>
                @endforeach
            </div>

            <div class="flex flex-col items-center justify-center">
                <a href="/projects"
                    class="bg-primary text-white lg:h-[48px] h-[44px] font-bold px-6 flex lg:text-base text-sm items-center justify-center gap-2 opacity-100 hover:bg-primary transition duration-300">
                    View All Properties
                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.6804 0.743386C11.8412 0.587538 12.059 0.5 12.2862 0.5C12.5133 0.5 12.7312 0.587538 12.8919 0.743386L19.7493 7.40115C19.9098 7.55719 20 7.76872 20 7.98925C20 8.20979 19.9098 8.42132 19.7493 8.57736L12.8919 15.2351C12.8134 15.3169 12.7188 15.3825 12.6137 15.428C12.5085 15.4734 12.395 15.4979 12.2799 15.4999C12.1648 15.5018 12.0505 15.4813 11.9438 15.4394C11.837 15.3976 11.7401 15.3353 11.6587 15.2562C11.5773 15.1772 11.5131 15.0831 11.47 14.9795C11.4269 14.8758 11.4057 14.7648 11.4078 14.6531C11.4098 14.5414 11.435 14.4312 11.4818 14.3291C11.5287 14.227 11.5962 14.1351 11.6804 14.0589L17.0749 8.82148H0.857175C0.629838 8.82148 0.411812 8.7338 0.251061 8.57772C0.0903092 8.42165 0 8.20997 0 7.98925C0 7.76854 0.0903092 7.55686 0.251061 7.40079C0.411812 7.24471 0.629838 7.15703 0.857175 7.15703H17.0749L11.6804 1.91959C11.5199 1.76355 11.4298 1.55203 11.4298 1.33149C11.4298 1.11095 11.5199 0.899427 11.6804 0.743386Z"
                            fill="white" />
                    </svg>

                </a>
            </div>
        </section>
    </div>

    <section class="lg:mt-28 mt-14">
        <div class="w-full lg:h-[586px] h-[208px] bg-fixed bg-no-repeat bg-cover"
            style="background-image: url({{ Storage::url($parallaxEffect->image) }});">
            <div class="flex flex-col items-center text-center justify-center text-white lg:space-y-6 space-y-3">
                <h1 class="text-base lg:text-[42px] font-bold lg:mt-56 mt-[66px]">
                    {{ $parallaxEffect->heading }}
                </h1>
                <p class="text-xs lg:text-2xl lg:w-[475.63px] w-[300px]">
                    {{ $parallaxEffect->sub_heading }}
                </p>
            </div>
        </div>
    </section>


    <section id="Achievements" class="container mx-auto lg:px-5 px-4 lg:py-28 py-14">
        <div class="flex flex-col items-center justify-center mb-3">
            <span class="lg:text-[42px] text-2xl font-bold leading-tight tracking-tight text-center text-customGray lg:mb-6 mb-[14px]">
                Achievements
            </span>
            <div class="flex items-center justify-center text-center text-customGray lg:w-[604px] lg:text-2xl text-base">
                {{ $achievement->heading }}
            </div>
        </div>

        <div class="swiper mt-[42px]">
            <!-- Wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($achievement->achievement_images_details as $achievement)
                    <div class="swiper-slide flex flex-col items-center justify-center">
                        <!-- Image wrapped in a circle -->
                        <div class="w-[216px] h-[216px] rounded-full  flex items-center justify-center">
                            <img src="{{ Storage::url($achievement['image']) }}" alt="{{ $achievement['image_title'] }}"
                                class="w-full h-full object-cover rounded-full">
                        </div>
                        <!-- Title -->
                        <span class="mt-3 lg:text-lg text-base font-semibold text-customGray">{{ $achievement['image_title'] }}</span>
                        <!-- Subtitle -->
                        <span class="text-customBorder mt-[6px] lg:text-base text-sm">{{ $achievement['image_sub_title'] }}</span>
                    </div>
                @endforeach
            </div>
            <!-- Navigation buttons -->
            <div class="flex justify-center items-center mt-14 space-x-10">
                <div class="swiper-button-prev bg-white border border-primary  cursor-pointer">

                </div>
                <div class="swiper-button-next bg-white border border-primary  cursor-pointer">
                </div>
            </div>
        </div>
    </section>

    <section id="Testimonials" class="bg-cover bg-center overflow-hidden h-531 md:h-auto"
        style="background-image: url('{{ asset('img/testimonial.png') }}');">

        <div class="text-center mt-[61px]">
            <h2 class="lg:text-[42px] text-2xl font-bold text-customGray">Testimonials</h2>
            <p class="mt-6 text-customGray lg:w-[1214px] mx-auto lg:text-2xl text-base">{{ $testimonial->heading }}</p>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper swiper_testimonial lg:py-28 py-12 container mx-auto lg:px-16 px-4">
            <div class="swiper-wrapper">
                @foreach ($testimonial->testimonial_images_details as $item)
                    <div class="swiper-slide bg-white lg:p-10 p-2 lg:space-x-10 space-x-8 space-y-[18px] relative">
                        <!-- Testimonial Image (circle) -->
                        <div class="lg:w-28 w-[52px] lg:h-28 h-[52px] rounded-full overflow-hidden  absolute lg:-top-16 -top-[26px]">
                            <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['name'] }}"
                                class="w-full h-full object-cover">
                        </div>

                        <!-- Testimonial Content -->
                        <p class="text-customGray lg:text-lg text-xs leading-8">{{ $item['description'] }}</p>

                        <div class="border-b  border-customBorder opacity-15"></div>

                        <!-- Testimonial Author -->
                        <div class="flex justify-between pb-5 items-center">
                            <div>
                                <span class="font-semibold lg:text-base text-sm text-customGray mb-1">{{ $item['name'] }}</span><br>
                                <span class="text-customBorder lg:text-sm text-xs">{{ $item['occupation'] }}</span>
                            </div>

                            <!-- Rating -->
                            <div class="items-center">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $item['star'])
                                        <span class="text-yellow-400 lg:text-xl text-sm">★</span>
                                    @else
                                        <span class="text-gray-300 lg:text-xl text-sm">★</span>
                                    @endif
                                @endfor
                            </div>

                        </div>


                    </div>
                @endforeach
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-center items-center py-14 space-x-10">
                <div class="swiper-button-prev bg-white border border-primary  cursor-pointer">
                </div>
                <div class="swiper-button-next bg-white border border-primary  cursor-pointer">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto lg:mt-28 mt-[30px] lg:px-16 px-4">
            <!-- Section Title -->
            <h2 class="text-center text-3xl font-bold text-customGray">Media</h2>

            <!-- Media Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:py-[42px] py-[22px]">
                <!-- Left Column: Two Large Media Cards -->

                <!-- First Large Media Card -->
                @foreach ($media as $key => $value)
                    <div class="bg-white  hidden lg:block">
                        <img
                            src="{{ $value->image ? Storage::url($value->image) : 'https://via.placeholder.com/600x400' }}"
                            alt="Media Image" class="w-full  h-[300px]">

                        <div class="mt-4">
                            <h3 class="text-xl text-customGray mb-2">{{ $value->title }}</h3>
                            <p class="text-customBorder text-sm mb-4">
                                {{ Str::limit($value->description, 196) }}
                                <a href="{{ route('media.view',['media_id' => $value->id]) }}" class="text-primary hover:underline font-bold">Read More</a>
                            </p>
                        </div>
                    </div>
                @endforeach


                    <div class="bg-white block lg:hidden">
                        <img
                            src="{{ $media[0]->image ? Storage::url($media[0]->image) : 'https://via.placeholder.com/600x400' }}"
                            alt="Media Image" class="w-full  h-[300px]">

                        <div class="mt-4">
                            <h3 class="text-xl text-customGray mb-2">{{ $media[0]->title }}</h3>
                            <p class="text-customBorder text-sm mb-4">
                                {{ Str::limit($media[0]->description, 196) }}
                                <a href="{{ route('media.view',['media_id' => $media[0]->id]) }}" class="text-primary hover:underline font-bold">Read More</a>
                            </p>
                        </div>
                    </div>


                <!-- Right Column: Four Small Media Cards -->
                {{-- https://via.placeholder.com/150x150 --}}
                <div class="space-y-6 hidden lg:block">
                    @foreach ($mediaLimit as $mediaLimitValue)
                        <div class="bg-white flex space-x-4">
                            <img class="w-36 lg:h-36 lg:[111px] object-cover"
                                src="{{ Storage::url($mediaLimitValue->image) ?? 'https://via.placeholder.com/150x150' }}"
                                alt="Media Image">
                            <div class="">
                                <h4 class="text-lg mb-2 text-customGray">{{ Str::limit($mediaLimitValue->title, 40) }}</h4>
                                <p class="text-customBorder text-sm">
                                    {{ Str::limit($mediaLimitValue->description, 100) }}
                                    <a href="{{ route('media.view',['media_id' => $mediaLimitValue->id]) }}" class="text-primary hover:underline font-bold">Read More</a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="space-y-6 block lg:hidden">
                    {{-- @foreach ($mediaLimit1 as $mediaLimitValue) --}}
                        <div class="bg-white flex space-x-4">
                            <img class="w-36 lg:h-36 h-[111px] object-cover"
                                src="{{ Storage::url($mediaLimit1->image) ?? 'https://via.placeholder.com/150x150' }}"
                                alt="Media Image">
                            <div class="">
                                <h4 class="text-lg mb-2 text-customGray">{{ Str::limit($mediaLimit1->title, 40) }}</h4>
                                <p class="text-customBorder text-sm">
                                    {{ Str::limit($mediaLimit1->description, 100) }}
                                    <a href="{{ route('media.view',['media_id' => $mediaLimit1->id]) }}" class="text-primary hover:underline font-bold">Read More</a>
                                </p>
                            </div>
                        </div>
                    {{-- @endforeach --}}
                </div>
            </div>

            <!-- View All Button -->
            <div class="flex flex-col items-center justify-center lg:pb-14 pb-7">
                <a href="/media"
                    class="bg-primary lg:h-12 h-[44px] text-white font-bold px-6 lg:text-base text-sm  py-2 flex items-center justify-center gap-2 opacity-100 hover:bg-primary transition duration-300">
                    View All
                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.6804 0.743386C11.8412 0.587538 12.059 0.5 12.2862 0.5C12.5133 0.5 12.7312 0.587538 12.8919 0.743386L19.7493 7.40115C19.9098 7.55719 20 7.76872 20 7.98925C20 8.20979 19.9098 8.42132 19.7493 8.57736L12.8919 15.2351C12.8134 15.3169 12.7188 15.3825 12.6137 15.428C12.5085 15.4734 12.395 15.4979 12.2799 15.4999C12.1648 15.5018 12.0505 15.4813 11.9438 15.4394C11.837 15.3976 11.7401 15.3353 11.6587 15.2562C11.5773 15.1772 11.5131 15.0831 11.47 14.9795C11.4269 14.8758 11.4057 14.7648 11.4078 14.6531C11.4098 14.5414 11.435 14.4312 11.4818 14.3291C11.5287 14.227 11.5962 14.1351 11.6804 14.0589L17.0749 8.82148H0.857175C0.629838 8.82148 0.411812 8.7338 0.251061 8.57772C0.0903092 8.42165 0 8.20997 0 7.98925C0 7.76854 0.0903092 7.55686 0.251061 7.40079C0.411812 7.24471 0.629838 7.15703 0.857175 7.15703H17.0749L11.6804 1.91959C11.5199 1.76355 11.4298 1.55203 11.4298 1.33149C11.4298 1.11095 11.5199 0.899427 11.6804 0.743386Z"
                            fill="white" />
                    </svg>

                </a>
            </div>
        </div>
    <section>

        @endsection


        <script type="module">
            import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

            const swiper = new Swiper('.swiper', {
                loop: true, // Enable looping
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                slidesPerView: 5, // Default to show 5 slides

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
                        slidesPerView: 5, // Show 5 slides for large desktops

                    },
                },
            });


            // Second Swiper for 2 slides
            const swiper2 = new Swiper('.swiper_testimonial', {
                loop: true, // Enable looping
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
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
                        slidesPerView: 2, // Show 4 slides for small desktops
                    },
                    // Large desktops
                    1024: {
                        slidesPerView: 2, // Show 5 slides for large desktops
                    },
                },
                spaceBetween: 100, // Add some spacing between slides if necessary
            });
        </script>
        <style>
            .swiper-button-next,
            .swiper-button-prev {

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
                border-radius: 26px !important;
                width: 70px !important;
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
