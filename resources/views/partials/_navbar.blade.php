 <!-- Bottom Navbar with Bottom Border -->
 <nav class="bg-white">
     <div class="container mx-auto flex justify-between items-center px-16 py-2 text-xl text-customGray">
         <div class="flex items-center font-normal">
             <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path
                     d="M3.23335 4.87492V4.33325C3.09376 4.33325 2.95989 4.39032 2.86119 4.4919C2.76248 4.59348 2.70703 4.73126 2.70703 4.87492H3.23335ZM22.1807 4.87492H22.707C22.707 4.73126 22.6516 4.59348 22.5529 4.4919C22.4542 4.39032 22.3203 4.33325 22.1807 4.33325V4.87492ZM3.23335 5.41659H22.1807V4.33325H3.23335V5.41659ZM21.6544 4.87492V17.8749H22.707V4.87492H21.6544ZM20.0755 19.4999H5.33861V20.5833H20.0755V19.4999ZM3.75966 17.8749V4.87492H2.70703V17.8749H3.75966ZM5.33861 19.4999C4.91985 19.4999 4.51824 19.3287 4.22213 19.024C3.92602 18.7192 3.75966 18.3059 3.75966 17.8749H2.70703C2.70703 18.5932 2.98429 19.2821 3.4778 19.79C3.97132 20.2979 4.64067 20.5833 5.33861 20.5833V19.4999ZM21.6544 17.8749C21.6544 18.3059 21.488 18.7192 21.1919 19.024C20.8958 19.3287 20.4942 19.4999 20.0755 19.4999V20.5833C20.7734 20.5833 21.4427 20.2979 21.9363 19.79C22.4298 19.2821 22.707 18.5932 22.707 17.8749H21.6544Z"
                     fill="#3C3B3B" />
                 <path d="M3.23438 5.4165L12.7081 15.1665L22.1817 5.4165" stroke="#3C3B3B" stroke-linecap="round"
                     stroke-linejoin="round" />
             </svg>
             <span>info@Loremipsum.com</span>
         </div>
         <div>
             <img src="img/adcore_logo-01.png" alt="Logo" class="h-14 object-contain">
             <!-- Replace with actual logo -->
         </div>
         <div>
             <span>(+91) 740 821 55 79</span>
         </div>
     </div>

     <div class="border-b  border-customBorder"></div>

     <!-- Mobile Menu Toggle Button -->
     {{-- <div class="container mx-auto flex justify-between items-center px-4 lg:hidden">
        <button id="menu-toggle" class="text-gray-600 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div> --}}

     <!-- Desktop & Mobile Menu -->
     <div class="container mx-auto flex-col lg:flex lg:flex-row lg:justify-center lg:space-x-8 hidden lg:flex py-3 gap-28 text-customGray text-sm"
         id="menu">
         <a href="#" class="text-gray-600 hover:text-gray-900">Home</a>
         <a href="#" class="text-gray-600 hover:text-gray-900">About us</a>
         <div class="relative">
             <button class="text-gray-600 hover:text-gray-900 inline-flex items-center">
                 Projects
                 <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                 </svg>
             </button>
             <!-- Dropdown -->
             <div class="absolute hidden bg-white shadow-lg mt-2 py-2 w-40 text-sm text-gray-600">
                 <a href="#" class="block px-4 py-2 hover:bg-gray-100">Project 1</a>
                 <a href="#" class="block px-4 py-2 hover:bg-gray-100">Project 2</a>
             </div>
         </div>
         <div class="relative">
             <button class="text-gray-600 hover:text-gray-900 inline-flex items-center">
                 Buyers Guide
                 <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                 </svg>
             </button>
             <!-- Dropdown -->
             <div class="absolute hidden bg-white shadow-lg mt-2 py-2 w-40 text-sm text-gray-600">
                 <a href="#" class="block px-4 py-2 hover:bg-gray-100">Guide 1</a>
                 <a href="#" class="block px-4 py-2 hover:bg-gray-100">Guide 2</a>
             </div>
         </div>
         <a href="#" class="text-gray-600 hover:text-gray-900">Media</a>
     </div>
 </nav>
 {{-- @yield('scripts')
<script>
    const toggleButton = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    toggleButton.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script> --}}
