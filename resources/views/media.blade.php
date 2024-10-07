@extends('layouts.app')
@section('title', 'Media')
@section('content')

    <div class="relative">
        <img src="img/Media.png" alt="Media Banner" class="mx-auto w-full lg:h-auto h-[177px] object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-4">
            <h1 class="text-2xl xl:text-[40px] font-bold lg:mb-3 mb-[6px]">Media</h1>
            <span class="text-base xl:text-2xl text-center">Lorem ipsum dolor sit amet consectetur.</span>
        </div>
    </div>


    <section class="container mx-auto xl:px-16 px-4 mt-[14px]">
        <div class="flex gap-3 items-center">
            <a href="/" class="lg:text-base text-sm text-customGray">Home</a>
            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.66667 6.9852L0 13.3488L0.651163 14L8 6.9852L0.651163 0L0 0.621565L6.66667 6.9852Z"
                    fill="#3C3B3B" />
            </svg>
            <span class="lg:text-base text-sm text-customGray">Media</span>
        </div>

        <section id="projects" class="xl:mt-[112px] mt-[56px]">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-14">
                <div class="space-y-6  hidden lg:block">
                    <h1 class="text-[42px] font-bold mb-[42px] text-[#3C3B3B]">Latest Articles</h1>
                    @foreach ($media as $mediaValue)
                        <div class="bg-white flex gap-3">
                            <img class="w-[100px] h-auto object-cover"
                                src="{{ Storage::url($mediaValue->image) ?? 'https://via.placeholder.com/150x150' }}"
                                alt="Media Image" style="height: 90px;">
                            <div class="">
                                <h4 class="text-lg text-[#3C3B3B]">{{ $mediaValue->title }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="space-y-6 col-span-2  hidden lg:block">
                    <h1 class="text-[42px] font-bold mb-[42px] text-[#3C3B3B]">Media</h1>
                    @foreach ($mediaLimit as $mediaLimitValue)
                        <div class="bg-white flex gap-5">
                            <img class="w-full h-[166px] object-cover"
                                src="{{ Storage::url($mediaLimitValue->image) ?? 'https://via.placeholder.com/150x150' }}"
                                alt="Media Image">
                            <div class="">
                                <h4 class="text-2xl text-[#3C3B3B] mb-2">{{ $mediaLimitValue->title }}</h4>
                                <p class="text-[#666666] text-sm">
                                    {{ Str::limit($mediaLimitValue->description, 200) }}
                                    <a href="{{ route('media.view', ['media_id' => $mediaLimitValue->id]) }}"
                                        class="text-primary hover:underline font-bold">Read More</a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex items-center justify-center py-10 ml-[500px] hidden lg:block">
                {{ $mediaLimit->links('vendor.pagination.tailwind') }}
            </div>

            <div class="lg:hidden block">

                <div class="flex items-center justify-center space-x-10">
                    <!-- Ongoing tab (active) -->
                    <a href="/media" class="relative text-[#3C3B3B] text-lg cursor-pointer">
                        Media
                        @if(request('short_by') != 'desc')
                        <span class="absolute left-0 right-0 -bottom-1 h-0.5 bg-[#FBB249]"></span>
                        @endif
                        <!-- Underline for active tab -->
                    </a>

                    <!-- Completed tab -->

                    <a href="?short_by=desc" class="relative text-[#666666] text-lg cursor-pointer hover:text-[#666666]">
                        Latest Articles
                        @if(request('short_by') == 'desc')
                        <span class="absolute left-0 right-0 -bottom-1 h-0.5 bg-[#FBB249]"></span>
                        @endif
                    </a>
                </div>

                <div class="grid grid-cols-1 gap-4 py-6">
                    <h1 class="text-2xl font-bold text-[#3C3B3B]">Media</h1>
                    @foreach ($mediaLimit as $mediaLimitValue)
                        <div class="bg-white">
                            <img class="w-full h-44 object-cover"
                                src="{{ Storage::url($mediaLimitValue->image) ?? 'https://via.placeholder.com/150x150' }}"
                                alt="Media Image">

                            <h4 class="text-lg mb-2 text-[#3C3B3B]">{{ $mediaLimitValue->title }}</h4>
                            <p class="text-[#666666] text-base">
                                {{ Str::limit($mediaLimitValue->description, 150) }}
                                <a href="{{ route('media.view', ['media_id' => $mediaLimitValue->id]) }}"
                                    class="text-primary hover:underline font-bold">Read More</a>
                            </p>
                        </div>
                    @endforeach

                    <div class="flex items-center justify-center py-10 ml-[500px] hidden lg:block">
                        {{ $mediaLimit->links('vendor.pagination.tailwind') }}
                    </div>
                </div>
                <div class="flex items-center justify-center mb-5">
                    {{ $mediaLimit->links('vendor.pagination.tailwind') }}
                </div>
            </div>


        </section>
    </section>

@endsection
