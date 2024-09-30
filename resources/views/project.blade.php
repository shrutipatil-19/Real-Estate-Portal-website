@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <div class="relative">
        <img src="img/projects.png" alt="Projects Banner" class="mx-auto w-full h-auto object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-4 space-y-[6px]">
            <h1 class="text-2xl xl:text-[40px] font-bold">Projects</h1>
            <span class="text-base xl:text-2xl mt-2 text-center">Lorem ipsum dolor sit amet consectetur.</span>
        </div>
    </div>
    <section class="container mx-auto xl:px-16 px-4 mt-7">
        <div class="flex gap-3 items-center">
            <span class="text-base text-customGray">Home</span>
            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.66667 6.9852L0 13.3488L0.651163 14L8 6.9852L0.651163 0L0 0.621565L6.66667 6.9852Z"
                    fill="#3C3B3B" />
            </svg>
            <span class="text-sm text-customGray">Projects</span>
        </div>

        <section id="projects" class="xl:mt-[119px] mt-[57px]">
            <div class="flex items-center justify-center xl:space-x-10 space-x-5">
                <!-- Ongoing tab (active) -->
                <span class="relative text-gray-800 xl:text-xl text-base font-medium cursor-pointer">
                    Ongoing
                    <span class="absolute left-0 right-0 -bottom-1 h-1 bg-orange-500"></span>
                    <!-- Underline for active tab -->
                </span>

                <!-- Completed tab -->
                <span class="relative text-gray-500 xl:text-xl text-base font-medium cursor-pointer hover:text-gray-800">
                    Completed
                </span>

                <!-- Upcoming tab -->
                <span class="relative text-gray-500 xl:text-xl text-base font-medium cursor-pointer hover:text-gray-800">
                    Upcoming
                </span>
            </div>


            <div class="grid grid-cols-1 md:gap-12 gap-2 md:grid-cols-2 lg:grid-cols-3 md:gap-y-10  md:py-10 py-5">
                @foreach ($projects as $key => $project)
                    <div class="group relative">
                        <img src="{{ Storage::url($project->image) }}" alt="{{ $project->location }}"
                            class="object-cover object-center w-auto h-auto">
                        <div class="hidden md:block absolute  inset-0 lg:px-2.5 px-8 flex items-center justify-center  opacity-0 group-hover:opacity-100"
                            aria-hidden="true">
                            <div class="w-full bg-white text-center md:mt-20 lg:mt-0 xl:mt-20 2xl:mt-28 lg:p-4 ">
                                <span class="block text-xl text-customGray">{{ $project->name }}</span>
                                <div class="flex items-center justify-center gap-1 text-[#727272] text-md my-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    {{ $project->location }}
                                </div>
                                <span
                                    class="block text-2xl text-customGray font-bold flex items-center justify-center gap-1"><span
                                        class="mt-1 font-normal">₹</span>{{ $project->price ? $project->price . ' onwards' : '' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="block md:hidden w-full bg-white text-center py-2">
                        <span class="block text-xl text-customGray">{{ $project->name }}</span>
                        <div class="flex items-center justify-center gap-1 text-[#727272] text-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            {{ $project->location }}
                        </div>
                        <span
                            class="block text-2xl text-customGray font-bold flex items-center justify-center gap-1"><span
                                class="mt-1 font-normal">₹</span>{{ $project->price ? $project->price . ' onwards' : '' }}</span>
                    </div>
                @endforeach
            </div>
            <div class="flex flex-col items-center justify-center xl:mb-14 mb-7">
                {{ $projects->links('vendor.pagination.tailwind') }}
            </div>

        </section>
    </section>


@endsection
