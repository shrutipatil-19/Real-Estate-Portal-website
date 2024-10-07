@extends('layouts.app')
@section('title', 'Projects')
@section('content')

    <div class="relative">
        <img src="img/projects.png" alt="Projects Banner" class="mx-auto w-full lg:h-auto h-[177px] object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-4">
            <h1 class="text-2xl lg:text-[40px] lg:mb-3 mb-[6px]">Projects</h1>
            <span class="text-base lg:text-2xl text-center">Lorem ipsum dolor sit amet consectetur.</span>
        </div>
    </div>
    <section class="container mx-auto xl:px-16 px-4 lg:mt-6 mt-[14px]">
        <div class="flex gap-3 items-center">
            <a href="/" class="lg:text-base text-sm text-customGray">Home</a>
            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.66667 6.9852L0 13.3488L0.651163 14L8 6.9852L0.651163 0L0 0.621565L6.66667 6.9852Z" fill="#3C3B3B"/>
                </svg>
                <span class="lg:text-base text-sm text-customGray">Projects</span>
        </div>

        <section id="projects" class="xl:mt-[112px] mt-[56px]">
            <div class="flex items-center justify-center lg:space-x-[42px] space-x-6">
                <!-- Ongoing tab (active) -->
                <span class="relative text-customGray lg:text-xl text-base cursor-pointer">
                    Ongoing
                    <span class="absolute left-0 right-0 -bottom-1 h-0.5 bg-[#FBB249]"></span>
                    <!-- Underline for active tab -->
                </span>

                <!-- Completed tab -->
                <span class="relative text-customBorder lg:text-xl text-base cursor-pointer hover:text-customBorder">
                    Completed
                </span>

                <!-- Upcoming tab -->
                <span class="relative text-customBorder lg:text-xl text-base cursor-pointer hover:text-customBorder">
                    Upcoming
                </span>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 sm:gap-y-10 lg:gap-10 lg:mt-0 mt-[32px] lg:mb-0 mb-3 lg:py-[42px]">
                @foreach ($projects as $key => $project)



                    <div class="group relative">
                        <!-- Project Image -->
                        <img src="{{ Storage::url($project->image) }}" alt="{{ $project->location }}" class="object-cover object-center w-full lg:h-auto h-[255px] group-hover:brightness-50 transition duration-500">

                        <!-- Hidden Info Section for Larger Screens -->
                        <div class="hidden md:flex absolute inset-0 items-center justify-center opacity-0 group-hover:opacity-100 transition duration-700" aria-hidden="true">
                            <div class="bg-white text-center p-8 h-[194px]">
                                <span class="block text-[22px] text-customGray">{{ $project->name }}</span>
                                <div class="flex items-center justify-center gap-1 text-customBorder text-base my-4">
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
            <div class="flex flex-col items-center justify-center xl:mb-14 mb-7">
                {{ $projects->links('vendor.pagination.tailwind') }}
            </div>

        </section>
    </section>


@endsection
