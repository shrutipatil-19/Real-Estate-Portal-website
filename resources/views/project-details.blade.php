@extends('layouts.app')
@section('title', 'Projects')
@section('content')


    <div class="project-details">
        <h1>{{ $project->name }}</h1>
        <p>{{ $project->location }}</p>
        <p>{{ $project->price ? $project->price . ' onwards' : 'Price not available' }}</p>
         <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->location }}" class="object-cover object-center w-full lg:h-auto h-[255px] group-hover:brightness-50 transition duration-500">
        <!-- Add more details as required -->
    </div>


<style>
    .img-height{
        height:330px;
    }
     img{
        /*height:50%;*/
            width: 50% !important;
    }
</style>

@endsection