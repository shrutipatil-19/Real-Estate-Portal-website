@extends('layouts.app')
@section('title', 'Media Details')
@section('content')

    <div class="relative">
        <img src="{{ asset('storage/' . $media->image) }}" alt="Media Banner" class="mx-auto w-screen h-[317px] bg-cover bg-center">
    </div>


    <section class="container mx-auto xl:px-16 px-4 lg:mt-6 mt-[14px]">
        <div class="flex gap-3 items-center">
            <a href="/" class="lg:text-base text-sm text-customGray">Home</a>
            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.66667 6.9852L0 13.3488L0.651163 14L8 6.9852L0.651163 0L0 0.621565L6.66667 6.9852Z"
                    fill="#3C3B3B" />
            </svg>
            <span class="lg:text-base text-sm text-customGray">Media Details</span>
        </div>

        <div class="mt-14 xl:mt-28">
            <div class="flex gap-14">
                <div class="bg-white mb-14">
                    <div class="mt-4">
                        <h3 class="lg:text-2xl text-xl text-customGray md:mb-[42px] mb-3">{{ $media->title }}</h3>
                        <p class="text-[#666666] md:text-base text-sm">
                            {{ $media->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
