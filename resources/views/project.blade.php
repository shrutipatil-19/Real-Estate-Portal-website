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
               <!--<span class="tab-link relative text-customGray lg:text-xl text-base cursor-pointer" data-status="Ongoing">Ongoing-->
               <!--     <span class="absolute left-0 right-0 -bottom-1 h-0.5 bg-[#FBB249]"></span>-->
                    <!-- Underline for active tab -->
               <!-- </span>-->

                <!-- Completed tab -->
               <!--<span class="tab-link relative text-customBorder lg:text-xl text-base cursor-pointer" data-status="Completed">Completed</span>-->

                <!-- Upcoming tab -->
                <!--<span class="relative text-customBorder lg:text-xl text-base cursor-pointer hover:text-customBorder">-->
                <!--    Upcoming-->
                <!--</span>-->
            </div>
<div class="flex items-center justify-center lg:space-x-[42px] space-x-6">
    <!-- Ongoing tab -->
    <a href="{{ route('projects.index', ['status' => 'Ongoing']) }}" 
       class="relative text-{{ $status === 'Ongoing' ? 'customGray' : 'customBorder' }} lg:text-xl text-base cursor-pointer">
        Ongoing
        @if($status === 'Ongoing')
            <span class="absolute left-0 right-0 -bottom-1 h-0.5 bg-[#FBB249]"></span>
        @endif
    </a>

    <!-- Completed tab -->
    <a href="{{ route('projects.index', ['status' => 'Completed']) }}" 
       class="relative text-{{ $status === 'Completed' ? 'customGray' : 'customBorder' }} lg:text-xl text-base cursor-pointer">
        Completed
        @if($status === 'Completed')
            <span class="absolute left-0 right-0 -bottom-1 h-0.5 bg-[#FBB249]"></span>
        @endif
    </a>
</div>


<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 sm:gap-y-10 lg:gap-10 lg:mt-0 mt-[32px] lg:mb-0 mb-3 lg:py-[42px]">
    @foreach ($projects as $key => $project)
        <div class="group relative">
            <!-- Project Image -->
            <a 
                href="{{ $project->link ? $project->link : 'javascript:void(0);' }}" 
                class="group relative block img-height cursor-pointer"
                onclick="{{ !$project->link ? 'openPopup(' . $project->id . ', ' . json_encode($project->images) . ', \'' . $project->name . '\', \'' . $project->location . '\', \'' . $project->price . '\')' : '' }}"
            >
                @if(count($project->images) > 0)
                    <img src="{{ asset('storage/' . $project->images[0]['image'] )}}" alt="{{ $project->location }}" class="object-cover object-center w-full lg:h-auto h-[255px] lg:group-hover:brightness-50 lg:transition lg:duration-500">
                @else
                    <img src="{{ asset('storage/default-image.jpg') }}" alt="Default Project Image" class="object-cover object-center w-full lg:h-auto h-[255px] lg:group-hover:brightness-50 lg:transition lg:duration-500">
                @endif
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
                            <span class="mt-1 font-normal"></span>{{ $project->price ? $project->price . ' onwards' : '' }}
                        </span>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>


<!-- Popup Modal -->
<div id="projectPopup" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
   <div class="relative bg-white p-4 pt-0 max-w-[40rem] w-full mx-auto w-[1000px] h-[600px]">
     
        <button 
            class="absolute top-2 right-2 text-gray-600 text-4xl leading-6" style="line-height: 1.5rem !important; margin-top:-9px; margin-right:-10px;"
            onclick="closePopup()"
        >
            &times;
        </button>
   
        <!-- Image Slider -->
        <div class="relative">
           <img id="popupImage" src="" alt="Project Image" class="w-full h-[90%] p-[17px]">

            <!-- Slider Controls -->
            <button onclick="prevImage()" class="absolute left-0 top-1/2 transform -translate-y-1/2 text-white bg-gray-800 p-2" style="margin-left:-12px;">
                &lt;
            </button>
            <button onclick="nextImage()" class="absolute right-0 top-1/2 transform -translate-y-1/2 text-white bg-gray-800 p-2" style="margin-right:-12px;">
                &gt;
            </button>
           
        </div>
    <!-- Image Thumbnails -->
         <div class="flex mt-4 mb-4 justify-center space-x-4 absolute -bottom-[7px]">
            <div id="thumbnailContainer" class="flex space-x-4 ml-[18]">
                <!-- Thumbnails will be dynamically added here -->
            </div>
         </div>
        <!-- Project Details -->
        <div class="text-center mt-4">
            <h3 id="popupName" class="text-2xl font-bold text-gray-800"></h3>
            <p id="popupLocation" class="text-gray-600 mt-2"></p>
            <p id="popupPrice" class="text-lg text-gray-800 font-bold mt-4"></p>
        </div>

     
    </div>
</div>


<!-- Pagination -->
<div class="flex flex-col items-center justify-center xl:mb-14 mb-7">
    {{ $projects->links('vendor.pagination.tailwind') }}
</div>



        <!--</section>-->
    </section>
<style>
  .img-height{
        height:330px;
    }
     .img-height img{
        height:100%;
    }
  #projectPopup {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.4s ease-in-out;
        pointer-events: none; /* Prevent interaction when hidden */
    }

    #projectPopup.modal-show {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto; /* Allow interaction when visible */
    }

    #projectPopup.modal-hide {
        opacity: 0;
        transform: translateY(20px);
    }

    /* Optional: Add a background fade effect */
    #popupOverlay {
        opacity: 0;
        transition: opacity 0.4s ease-in-out;
        pointer-events: none;
    }

    #popupOverlay.overlay-show {
        opacity: 1;
        pointer-events: auto;
    }

    #popupOverlay.overlay-hide {
        opacity: 0;
    }
</style>

@endsection
<script>

let currentImageIndex = 0;
let projectImages = [];

function openPopup(id, images, name, location, price) {
    // Store images as an array
    projectImages = images;
    currentImageIndex = 0; // Start from the first image

    // Update the popup content
    // document.getElementById('popupName').innerText = name;
    // document.getElementById('popupLocation').innerText = location;
    // document.getElementById('popupPrice').innerText = price ? `₹ ${price} onwards` : 'Price not available';

    // Check if images exist and update the popup image
    if (projectImages.length > 0) {
        document.getElementById('popupImage').src = "{{ asset('storage/') }}/" + projectImages[currentImageIndex].image;
    } else {
        document.getElementById('popupImage').src = "{{ asset('storage/default-image.jpg') }}";
    }

    // Create thumbnails and display them below the main image
    const thumbnailContainer = document.getElementById('thumbnailContainer');
    thumbnailContainer.innerHTML = ''; // Clear any previous thumbnails

    projectImages.forEach((image, index) => {
        const thumb = document.createElement('img');
        thumb.src = "{{ asset('storage/') }}/" + image.image;
        thumb.alt = "Project Thumbnail";
        thumb.classList.add('w-20', 'h-20', 'object-cover', 'cursor-pointer', 'transition', 'transform', 'duration-200', 'hover:scale-110');
        if (index === currentImageIndex) {
            thumb.classList.add('border-2', 'border-customGray'); // Highlight active thumbnail
        }

        thumb.onclick = function() {
            currentImageIndex = index;
            updatePopupImage();
        };

        thumbnailContainer.appendChild(thumb);
    });

    // Show the popup with animation
    const popup = document.getElementById('projectPopup');
    popup.classList.remove('hidden', 'modal-hide');
    popup.classList.add('modal-show');
}

function closePopup() {
    const popup = document.getElementById('projectPopup');

    // Add the hide class for animation
    popup.classList.add('modal-hide');
    popup.classList.remove('modal-show');

    // Wait for the animation to complete before hiding
    setTimeout(() => {
        popup.classList.add('hidden');
    }, 300); // Match the transition duration
}

// Handle Escape key to close the popup
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closePopup();
    }
});

// Slider controls
function nextImage() {
    if (currentImageIndex < projectImages.length - 1) {
        currentImageIndex++;
        updatePopupImage();
    }
}

function prevImage() {
    if (currentImageIndex > 0) {
        currentImageIndex--;
        updatePopupImage();
    }
}

// Update the main image and highlight the active thumbnail
function updatePopupImage() {
    document.getElementById('popupImage').src = "{{ asset('storage/') }}/" + projectImages[currentImageIndex].image;

    // Highlight active thumbnail
    const thumbnails = document.querySelectorAll('#thumbnailContainer img');
    thumbnails.forEach((thumb, index) => {
        if (index === currentImageIndex) {
            thumb.classList.add('border-2', 'border-customGray');
        } else {
            thumb.classList.remove('border-2', 'border-customGray');
        }
    });
}

</script>
