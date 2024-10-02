<footer class="bg-primary text-white">
    <div class="container mx-auto lg:px-16 px-4 lg:pt-[52px] pt-8">
        <div class="grid lg:grid-cols-5 lg:gap-8 gap-5">
            <!-- Company Info -->
            <div class="block lg:hidden">
                <!-- Company Logo -->
                <img src="img/adcore logo-2.png" alt="Company Logo" class="lg:mb-6 mb-5 w-40">
                <!-- Company Info Text -->
                <p class="text-sm lg:text-base leading-[18.18px] w-[292px]">
                    Lorem ipsum dolor sit amet consectetur. In ut fusce ut odio. Nisl neque ultrices eu amet enim
                    aliquet
                    vulputate. Eget sed integer cras nibh vel. Quam interdum libero lectus eget aliquet et commodo
                    praesent.
                </p>
            </div>

            <div class="col-span-2 hidden lg:block">
                <!-- Company Logo -->
                <img src="img/adcore logo-2.png" alt="Company Logo" class="lg:mb-6 mb-5 w-40">
                <!-- Company Info Text -->
                <p class="text-sm lg:text-base leading-[18.18px] w-[292px]">
                    Lorem ipsum dolor sit amet consectetur. In ut fusce ut odio. Nisl neque ultrices eu amet enim
                    aliquet
                    vulputate. Eget sed integer cras nibh vel. Quam interdum libero lectus eget aliquet et commodo
                    praesent.
                </p>
            </div>

            <!-- Sitemap Links -->
            <div class="hidden lg:block">
                <h3 class="text-base font-sans mb-6">SITEMAP</h3>
                <ul class="space-y-3 text-base">
                    <li><a href="/" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('about-us.index') }}" class="hover:underline">About Us</a></li>
                    <li><a href="{{ route('projects.index') }}" class="hover:underline">Projects</a></li>
                    <li><a href="{{route('buyers_guide.index')}}" class="hover:underline">Buyers Guide</a></li>
                    <li><a href="{{ route('testimonials.index') }}" class="hover:underline">Testimonials</a></li>
                    <li><a href="{{ route('media.index') }}" class="hover:underline">Media</a></li>
                </ul>
            </div>

            <!-- Important Links -->
            <div class="hidden lg:block">
                <h3 class="text-base font-sans mb-6">IMPORTANT LINKS</h3>
                <ul class="space-y-3 text-base">
                    <li><a href="buyers-guide#LoanCalculator_" class="hover:underline">Loan Calculator</a></li>
                    <li><a href="{{route('ContactUs.index')}}" class="hover:underline">Contact Us</a></li>
                </ul>
            </div>

            <!-- Subscribe Section -->
            <div>
                <h3 class="text-base font-sans mb-6 hidden lg:block">LOREM IPSUM DOLOR</h3>
                <p class="text-base mb-4 hidden lg:block">Lorem ipsum dolor sit amet consectetur.</p>
                <form>
                    <input type="email" placeholder="Lorem ipsum"
                        class="w-full h-[42px] bg-transparent border border-white p-2 lg:mb-4 mb-3 text-base placeholder-white focus:outline-none">
                    <button type="submit"
                        class="w-[154px] h-12 bg-[#FBB249] text-white py-2 px-4 font-sans hover:bg-buttonColor">SUBSCRIBE</button>
                    <div class="py-4 lg:flex lg:items-center lg:justify-between text-white">
                        <div class="flex items-center  space-x-4 lg:order-2">
                            <a href="#" class="text-white">
                                <span class="sr-only">Instagram</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 16C13.0609 16 14.0783 15.5786 14.8284 14.8284C15.5786 14.0783 16 13.0609 16 12C16 10.9391 15.5786 9.92172 14.8284 9.17157C14.0783 8.42143 13.0609 8 12 8C10.9391 8 9.92172 8.42143 9.17157 9.17157C8.42143 9.92172 8 10.9391 8 12C8 13.0609 8.42143 14.0783 9.17157 14.8284C9.92172 15.5786 10.9391 16 12 16Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 16V8C3 6.67392 3.52678 5.40215 4.46447 4.46447C5.40215 3.52678 6.67392 3 8 3H16C17.3261 3 18.5979 3.52678 19.5355 4.46447C20.4732 5.40215 21 6.67392 21 8V16C21 17.3261 20.4732 18.5979 19.5355 19.5355C18.5979 20.4732 17.3261 21 16 21H8C6.67392 21 5.40215 20.4732 4.46447 19.5355C3.52678 18.5979 3 17.3261 3 16Z" stroke="white" stroke-width="1.5"/>
                                    <path d="M17.5 6.51002L17.51 6.49902" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                            </a>
                            <a href="#" class="text-white">
                                <span class="sr-only">Facebook</span>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 0.25C8.07164 0.25 6.18657 0.821828 4.58319 1.89317C2.97982 2.96451 1.73013 4.48726 0.992179 6.26884C0.254225 8.05042 0.061142 10.0108 0.437348 11.9021C0.813554 13.7934 1.74215 15.5307 3.10571 16.8943C4.46928 18.2579 6.20656 19.1865 8.09787 19.5627C9.98919 19.9389 11.9496 19.7458 13.7312 19.0078C15.5127 18.2699 17.0355 17.0202 18.1068 15.4168C19.1782 13.8134 19.75 11.9284 19.75 10C19.7473 7.41498 18.7192 4.93661 16.8913 3.10872C15.0634 1.28084 12.585 0.25273 10 0.25ZM10.75 18.2153V12.25H13C13.1989 12.25 13.3897 12.171 13.5303 12.0303C13.671 11.8897 13.75 11.6989 13.75 11.5C13.75 11.3011 13.671 11.1103 13.5303 10.9697C13.3897 10.829 13.1989 10.75 13 10.75H10.75V8.5C10.75 8.10218 10.908 7.72064 11.1893 7.43934C11.4706 7.15804 11.8522 7 12.25 7H13.75C13.9489 7 14.1397 6.92098 14.2803 6.78033C14.421 6.63968 14.5 6.44891 14.5 6.25C14.5 6.05109 14.421 5.86032 14.2803 5.71967C14.1397 5.57902 13.9489 5.5 13.75 5.5H12.25C11.4544 5.5 10.6913 5.81607 10.1287 6.37868C9.56608 6.94129 9.25 7.70435 9.25 8.5V10.75H7C6.80109 10.75 6.61033 10.829 6.46967 10.9697C6.32902 11.1103 6.25 11.3011 6.25 11.5C6.25 11.6989 6.32902 11.8897 6.46967 12.0303C6.61033 12.171 6.80109 12.25 7 12.25H9.25V18.2153C7.13575 18.0223 5.17728 17.0217 3.78198 15.4215C2.38667 13.8214 1.66195 11.7449 1.75855 9.62409C1.85515 7.50324 2.76564 5.50127 4.30064 4.0346C5.83563 2.56793 7.87696 1.74947 10 1.74947C12.1231 1.74947 14.1644 2.56793 15.6994 4.0346C17.2344 5.50127 18.1449 7.50324 18.2415 9.62409C18.3381 11.7449 17.6133 13.8214 16.218 15.4215C14.8227 17.0217 12.8643 18.0223 10.75 18.2153Z" fill="white"/>
                                    </svg>

                            </a>
                            <a href="#" class="text-white">
                                <span class="sr-only">YouTube </span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.386 8.35696C10.2722 8.28865 10.1423 8.25176 10.0096 8.25006C9.87686 8.24837 9.74607 8.28192 9.63056 8.3473C9.51505 8.41268 9.41896 8.50755 9.3521 8.62221C9.28524 8.73687 9.25001 8.86723 9.25 8.99996V15C9.25001 15.1327 9.28524 15.263 9.3521 15.3777C9.41896 15.4924 9.51505 15.5872 9.63056 15.6526C9.74607 15.718 9.87686 15.7515 10.0096 15.7499C10.1423 15.7482 10.2722 15.7113 10.386 15.643L15.386 12.643C15.497 12.5763 15.5889 12.4821 15.6526 12.3694C15.7164 12.2567 15.7499 12.1294 15.7499 12C15.7499 11.8705 15.7164 11.7432 15.6526 11.6305C15.5889 11.5179 15.497 11.4236 15.386 11.357L10.386 8.35696ZM13.542 12L10.75 13.675V10.325L13.542 12Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0348 4.64077C13.6866 4.37886 10.323 4.37886 6.97479 4.64077L4.73379 4.81677C4.07162 4.86838 3.44577 5.14009 2.95593 5.58862C2.46608 6.03715 2.14041 6.6367 2.03079 7.29177C1.51057 10.4089 1.51057 13.5907 2.03079 16.7078C2.14041 17.3628 2.46608 17.9624 2.95593 18.4109C3.44577 18.8594 4.07162 19.1312 4.73379 19.1828L6.97379 19.3588C10.3228 19.6208 13.6868 19.6208 17.0358 19.3588L19.2758 19.1828C19.938 19.1312 20.5638 18.8594 21.0537 18.4109C21.5435 17.9624 21.8692 17.3628 21.9788 16.7078C22.4988 13.5908 22.4988 10.4088 21.9788 7.29177C21.8692 6.6367 21.5435 6.03715 21.0537 5.58862C20.5638 5.14009 19.938 4.86838 19.2758 4.81677L17.0348 4.64077ZM7.09179 6.13677C10.3628 5.88085 13.6488 5.88085 16.9198 6.13677L19.1598 6.31177C19.8358 6.36477 20.3888 6.87177 20.4998 7.53977C20.9943 10.4925 20.9943 13.507 20.4998 16.4598C20.4456 16.7847 20.2843 17.0821 20.0414 17.3047C19.7986 17.5272 19.4882 17.6621 19.1598 17.6878L16.9198 17.8628C13.6488 18.1187 10.3628 18.1187 7.09179 17.8628L4.85179 17.6878C4.52339 17.6621 4.21302 17.5272 3.97017 17.3047C3.72732 17.0821 3.56595 16.7847 3.51179 16.4598C3.01724 13.507 3.01724 10.4925 3.51179 7.53977C3.56595 7.21484 3.72732 6.9174 3.97017 6.69485C4.21302 6.47229 4.52339 6.33743 4.85179 6.31177L7.09179 6.13677Z" fill="white"/>
                                    </svg>

                            </a>

                            <a href="#" class="text-white">
                                <span class="sr-only">X</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1579_725)">
                                    <mask id="mask0_1579_725" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="5" y="5" width="14" height="14">
                                    <path d="M5 5H19V19H5V5Z" fill="white"/>
                                    </mask>
                                    <g mask="url(#mask0_1579_725)">
                                    <path d="M16.025 5.65601H18.172L13.482 11.03L19 18.344H14.68L11.294 13.909L7.424 18.344H5.275L10.291 12.594L5 5.65701H9.43L12.486 9.71001L16.025 5.65601ZM15.27 17.056H16.46L8.78 6.87701H7.504L15.27 17.056Z" fill="white"/>
                                    </g>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_1579_725">
                                    <rect width="14" height="14" fill="white" transform="translate(5 5)"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                            </a>
                        </div>
                    </div>
                </form>

                <!-- Sitemap Links -->

                    <!-- Sitemap Section -->
                    <div class="block lg:hidden">
                        <div class="flex justify-between cursor-pointer" onclick="toggleSection('sitemap')">
                            <div class="text-lg font-sans mb-4">SITEMAP</div>
                            <div id="sitemap-icon" class="text-2xl font-bold text-white">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="7.5" y1="2.18557e-08" x2="7.5" y2="14" stroke="white"/>
                                    <line x1="-4.37114e-08" y1="7" x2="15" y2="7" stroke="white"/>
                                    </svg>
                            </div>
                        </div>
                        <ul id="sitemap" class="space-y-2 text-sm hidden">
                            <li><a href="/" class="hover:underline">Home</a></li>
                            <li><a href="{{ route('about-us.index') }}" class="hover:underline">About Us</a></li>
                            <li><a href="{{ route('projects.index') }}" class="hover:underline">Projects</a></li>
                            <li><a href="{{route('buyers_guide.index')}}" class="hover:underline">Buyers Guide</a></li>
                            <li><a href="{{ route('testimonials.index') }}" class="hover:underline">Testimonials</a></li>
                            <li><a href="{{ route('media.index') }}" class="hover:underline">Media</a></li>
                        </ul>
                    </div>

                    <!-- Important Links Section -->
                    <div class="block lg:hidden">
                        <div class="flex justify-between  cursor-pointer" onclick="toggleSection('important-links')">
                            <h3 class="text-lg font-sans mb-4">IMPORTANT LINKS</h3>
                            <span id="important-links-icon" class="text-2xl font-bold text-white">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="7.5" y1="2.18557e-08" x2="7.5" y2="14" stroke="#FFFFFF"/>
                                    <line x1="-4.37114e-08" y1="7" x2="15" y2="7" stroke="#FFFFFF"/>
                                    </svg>
                            </span>
                        </div>
                        <ul id="important-links" class="space-y-2 text-sm hidden">
                            <li><a href="buyers-guide#LoanCalculator_" class="hover:underline">Loan Calculator</a></li>
                            <li><a href="{{route('ContactUs.index')}}" class="hover:underline">Contact Us</a></li>
                        </ul>
                    </div>
                <!-- Social Icons -->

            </div>
        </div>
        <!-- Bottom Footer -->
    </div>
    <div class="border-t border-white lg:py-5 py-3 lg:mt-[45px] mt-8 text-sm text-left">
        <p class="container mx-auto lg:px-16 px-4">Copyright © {{ date('Y') }} by <a href="{{ request()->getHost() }}">{{ config('app.name') }}</a></p>
    </div>
</footer>
<script>
     function toggleSection(sectionId) {
        const section = document.getElementById(sectionId);
        const icon = document.getElementById(sectionId + '-icon');

        if (section.classList.contains('hidden')) {
    section.classList.remove('hidden');
    icon.innerHTML = `<svg width="15" height="1" viewBox="0 0 15 1" fill="none" xmlns="http://www.w3.org/2000/svg">
    <line x1="0" y1="0.5" x2="15" y2="0.5" stroke="white"/>
    </svg>`; // Change to minus when open
} else {
    section.classList.add('hidden');
    icon.innerHTML = `<svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
    <line x1="7.5" y1="0" x2="7.5" y2="14" stroke="white"/>
    <line x1="0" y1="7" x2="15" y2="7" stroke="white"/>
    </svg>`;  // Change to plus when closed
}

    }
</script>
