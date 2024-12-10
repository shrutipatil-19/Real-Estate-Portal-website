<!-- Bottom Navbar with Bottom Border -->
<nav class="bg-white">
    <div class="container mx-auto flex justify-between items-center lg:px-16 px-4 py-2 text-xl text-customGray">
        <div class="flex items-center font-normal hidden lg:flex">
            <svg class="w-6 w-6" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3.23335 4.87492V4.33325C3.09376 4.33325 2.95989 4.39032 2.86119 4.4919C2.76248 4.59348 2.70703 4.73126 2.70703 4.87492H3.23335ZM22.1807 4.87492H22.707C22.707 4.73126 22.6516 4.59348 22.5529 4.4919C22.4542 4.39032 22.3203 4.33325 22.1807 4.33325V4.87492ZM3.23335 5.41659H22.1807V4.33325H3.23335V5.41659ZM21.6544 4.87492V17.8749H22.707V4.87492H21.6544ZM20.0755 19.4999H5.33861V20.5833H20.0755V19.4999ZM3.75966 17.8749V4.87492H2.70703V17.8749H3.75966ZM5.33861 19.4999C4.91985 19.4999 4.51824 19.3287 4.22213 19.024C3.92602 18.7192 3.75966 18.3059 3.75966 17.8749H2.70703C2.70703 18.5932 2.98429 19.2821 3.4778 19.79C3.97132 20.2979 4.64067 20.5833 5.33861 20.5833V19.4999ZM21.6544 17.8749C21.6544 18.3059 21.488 18.7192 21.1919 19.024C20.8958 19.3287 20.4942 19.4999 20.0755 19.4999V20.5833C20.7734 20.5833 21.4427 20.2979 21.9363 19.79C22.4298 19.2821 22.707 18.5932 22.707 17.8749H21.6544Z"
                    fill="#3C3B3B" />
                <path d="M3.23438 5.4165L12.7081 15.1665L22.1817 5.4165" stroke="#3C3B3B" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <a href="mailto:info@adcoredevelopers.com">info@adcoredevelopers.com</a>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <div class="lg:hidden">
            <button id="menu-toggle" class="text-customGray focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <a href="/">
            <img src="img/adcore-logo.png" alt="Logo" class="h-[52px] w-[148px] object-cover">
        </a>

        <div class="flex items-center">
            <!-- Phone Number for Mobile View -->
            <a href="tel: +912266332229" class="hidden lg:block text-xl text-customGray">(+91) 22 66332229
</a>

            <!-- SVG Icon, shown on desktop view -->
            <a href="tel:+917408215579">
                <svg class="block lg:hidden w-6 h-6" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.906 11.6428L17.1516 13.8885C17.6202 14.357 17.6202 15.1167 17.1516 15.5852C14.6184 18.1184 10.6081 18.4034 7.74209 16.2539L7.57502 16.1286C5.41317 14.5072 3.49275 12.5868 1.87137 10.425L1.74606 10.2579C-0.403413 7.39194 -0.118402 3.38156 2.41478 0.84838C2.88333 0.379833 3.64299 0.379832 4.11154 0.848379L6.3572 3.09404C6.97382 3.71066 6.97382 4.71039 6.3572 5.32701L4.84261 6.8416C4.528 7.15621 4.45 7.63685 4.64898 8.03481C5.79925 10.3353 7.66465 12.2007 9.96519 13.351C10.3632 13.55 10.8438 13.472 11.1584 13.1574L12.673 11.6428C13.2896 11.0262 14.2893 11.0262 14.906 11.6428Z"
                        fill="#3C3B3B" />
                </svg>

            </a>
        </div>
    </div>

    <div class="border-b border-customBorder hidden lg:block"></div>

    <!-- Mobile Menu -->
    <div id="menu"
        class="fixed z-10 left-0 top-0 w-[300px] h-full bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden">
        <button id="menu-close" class="text-customGray focus:outline-none p-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <ul class="mt-8 space-y-7 p-4">
            <!-- Home Link -->
            <li class="{{ request()->routeIs('home.index') ? 'bg-[#2A4D69] px-2 py-1.5' : 'px-2 py-1.5' }}">
                <a href="/"
                    class="{{ request()->routeIs('home.index') ? 'text-white px-1 py-1' : 'text-customGray hover:text-customGray-600' }}">
                    Home
                </a>
            </li>

            <!-- About Us Link -->
            <li class="{{ request()->routeIs('about-us.index') ? 'bg-[#2A4D69] px-2 py-1.5' : 'px-2 py-1.5' }}">
                <a href="{{ route('about-us.index') }}"
                    class="{{ request()->routeIs('about-us.index') ? 'text-white px-1' : 'text-customGray hover:text-customGray' }}">
                    About Us
                </a>
            </li>

            <!-- Projects with Dropdown -->
            <li x-data="{ open: false }">
                <!-- Main Projects Link -->
                <a href="/projects" @click="open = !open; if(!open) window.location.href='/projects';"
                    :class="open ? 'bg-[#2A4D69] text-white px-2 py-1.5' : 'text-customGray px-2 py-1.5'"
                    class="w-full text-left flex items-center transition-colors duration-300 focus:outline-none">
                    Projects
                    <svg :class="open ? 'rotate-90 text-white' : ''"
                        class="w-4 h-4 ml-1 transform transition-transform duration-300"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path :d="open ? 'M19.5 8.25L12 15.75L4.5 8.25' : 'M8.25 4.5L15.75 12L8.25 19.5'"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>


                <!-- Submenu for Projects -->
                <ul class="ml-4 mt-2 space-y-2" x-show="open" x-transition @click.away="open = false"
                    style="display: none;">
                    <li><a href="#" class="text-customGray hover:text-[#2A4D69]">Ongoing</a></li>
                    <li><a href="#" class="text-customGray hover:text-[#2A4D69]">Completed</a></li>
                    <li><a href="#" class="text-customGray hover:text-[#2A4D69]">Upcoming</a></li>
                </ul>
            </li>

            <!-- Buyer's Guide Link -->
            <!--<li class="{{ request()->routeIs('buyers_guide.index') ? 'bg-[#2A4D69] px-2 py-2' : 'px-2 py-1.5' }}">-->
            <!--    <a href="{{ route('buyers_guide.index') }}"-->
            <!--        class="{{ request()->routeIs('buyers_guide.index') ? 'text-white px-1 py-8' : 'text-customGray hover:text-customGray' }}">-->
            <!--        Buyer's Guide-->
            <!--    </a>-->
            <!--</li>-->

            <!-- Media Link -->
            <li class="{{ request()->routeIs('media.index') ? 'bg-[#2A4D69] px-2 py-1.5' : 'px-2 py-1.5' }}">
                <a href=""
                    class="{{ request()->routeIs('media.index') ? 'text-white px-1 py-8' : 'text-customGray hover:text-customGray' }}">
                    Gallery
                </a>
            </li>
             <li class="{{ request()->routeIs('media.index') ? 'bg-[#2A4D69] px-2 py-1.5' : 'px-2 py-1.5' }}">
                <a href=""
                    class="{{ request()->routeIs('media.index') ? 'text-white px-1 py-8' : 'text-customGray hover:text-customGray' }}">
                    Contact 
                </a>
            </li>
        </ul>

        <div class="absolute bottom-0">
            <div class="border-b border-customBorder"></div>
            <a href="mailto:info@Loremipsum.com"
                class="text-customGray flex items-center w-[300px] px-8 py-3 text-center">
                <svg class="w-6 w-6 " viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.23335 4.87492V4.33325C3.09376 4.33325 2.95989 4.39032 2.86119 4.4919C2.76248 4.59348 2.70703 4.73126 2.70703 4.87492H3.23335ZM22.1807 4.87492H22.707C22.707 4.73126 22.6516 4.59348 22.5529 4.4919C22.4542 4.39032 22.3203 4.33325 22.1807 4.33325V4.87492ZM3.23335 5.41659H22.1807V4.33325H3.23335V5.41659ZM21.6544 4.87492V17.8749H22.707V4.87492H21.6544ZM20.0755 19.4999H5.33861V20.5833H20.0755V19.4999ZM3.75966 17.8749V4.87492H2.70703V17.8749H3.75966ZM5.33861 19.4999C4.91985 19.4999 4.51824 19.3287 4.22213 19.024C3.92602 18.7192 3.75966 18.3059 3.75966 17.8749H2.70703C2.70703 18.5932 2.98429 19.2821 3.4778 19.79C3.97132 20.2979 4.64067 20.5833 5.33861 20.5833V19.4999ZM21.6544 17.8749C21.6544 18.3059 21.488 18.7192 21.1919 19.024C20.8958 19.3287 20.4942 19.4999 20.0755 19.4999V20.5833C20.7734 20.5833 21.4427 20.2979 21.9363 19.79C22.4298 19.2821 22.707 18.5932 22.707 17.8749H21.6544Z"
                        fill="#3C3B3B" />
                    <path d="M3.23438 5.4165L12.7081 15.1665L22.1817 5.4165" stroke="#3C3B3B" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span class="text-center"> info@adcoredevelopers.com</span>
            </a>
        </div>
    </div>

    <!-- Desktop & Mobile Menu -->
    <div
        class="container mx-auto flex-col lg:flex lg:flex-row lg:justify-center lg:space-x-8 hidden lg:flex py-3 gap-28 text-customGray text-sm">
        <a href="/" class="text-customGray hover:text-customGray-900">Home</a>
        <a href="{{ route('about-us.index') }}" class="text-customGray hover:text-customGray-900">About us</a>
        <div class="relative">
            <a href="{{ route('projects.index') }}"
                class="text-customGray hover:text-customGray-900 inline-flex items-center">
                Projects
                <svg class="w-4 h-4 ml-1 " fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
            <!-- Dropdown -->
            <div class="absolute hidden bg-white shadow-lg mt-2 py-2 w-40 text-sm text-customGray">
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Project 1</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Project 2</a>
            </div>
        </div>
        <div class="relative">
            <a href=""
                class="text-customGray hover:text-customGray-900 inline-flex items-center">
                Gallery
            </a>
            <!-- Dropdown -->
            <div class="absolute hidden bg-white shadow-lg mt-2 py-2 w-40 text-sm text-customGray">
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Guide 1</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Guide 2</a>
            </div>
        </div>
        <a href="{{route('ContactUs.index')}}" class="text-customGray hover:text-customGray-900">Contact </a>
    </div>



</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('-translate-x-full');
    });

    document.getElementById('menu-close').addEventListener('click', function() {
        document.getElementById('menu').classList.add('-translate-x-full');
    });
</script>
