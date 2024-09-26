<footer class="bg-[#2A4D69] text-white py-6">
    <div class="container mx-auto lg:px-16 px-4 mt-4">
        <div class="grid lg:grid-cols-5 gap-8">
            <!-- Company Info -->
            <div class="col-span-2">
                <!-- Company Logo -->
                <img src="img/adcore logo-2.png" alt="Company Logo" class="mb-4 w-40">
                <!-- Company Info Text -->
                <p class="text-sm leading-relaxed w-[292px]">
                    Lorem ipsum dolor sit amet consectetur. In ut fusce ut odio. Nisl neque ultrices eu amet enim
                    aliquet
                    vulputate. Eget sed integer cras nibh vel. Quam interdum libero lectus eget aliquet et commodo
                    praesent.
                </p>
            </div>

            <!-- Sitemap Links -->
            <div class="hidden lg:block">
                <h3 class="text-lg font-sans mb-4">SITEMAP</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('about-us.index') }}" class="hover:underline">About Us</a></li>
                    <li><a href="{{ route('projects.index') }}" class="hover:underline">Projects</a></li>
                    <li><a href="#" class="hover:underline">Buyers Guide</a></li>
                    <li><a href="{{ route('testimonials.index') }}" class="hover:underline">Testimonials</a></li>
                    <li><a href="{{ route('media.index') }}" class="hover:underline">Media</a></li>
                </ul>
            </div>

            <!-- Important Links -->
            <div class="hidden lg:block">
                <h3 class="text-lg font-sans mb-4">IMPORTANT LINKS</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:underline">Loan Calculator</a></li>
                    <li><a href="#" class="hover:underline">Contact Us</a></li>
                </ul>
            </div>

            <!-- Subscribe Section -->
            <div>
                <h3 class="text-lg font-sans mb-4">LOREM IPSUM DOLOR</h3>
                <p class="text-sm mb-4">Lorem ipsum dolor sit amet consectetur.</p>
                <form>
                    <input type="email" placeholder="Lorem ipsum"
                        class="w-full bg-transparent border border-white p-2 mb-4 text-sm placeholder-white focus:outline-none">
                    <button type="submit"
                        class="w-full bg-orange-500 text-white py-2 px-4 font-sans hover:bg-orange-600">SUBSCRIBE</button>
                    <div class="mt-4 lg:flex lg:items-center lg:justify-between text-white">
                        <div class="flex space-x-4 lg:order-2">
                            <a href="#" class="text-white">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-white">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-white">
                                <span class="sr-only">X</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
                                </svg>
                            </a>

                            <a href="#" class="text-white">
                                <span class="sr-only">YouTube</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </form>

                <!-- Sitemap Links -->

                    <!-- Sitemap Section -->
                    <div class="mb-4 block lg:hidden">
                        <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('sitemap')">
                            <h3 class="text-lg font-sans mb-4">SITEMAP</h3>
                            <span id="sitemap-icon" class="text-2xl font-bold">+</span>
                        </div>
                        <ul id="sitemap" class="space-y-2 text-sm hidden">
                            <li><a href="/" class="hover:underline">Home</a></li>
                            <li><a href="{{ route('about-us.index') }}" class="hover:underline">About Us</a></li>
                            <li><a href="{{ route('projects.index') }}" class="hover:underline">Projects</a></li>
                            <li><a href="#" class="hover:underline">Buyers Guide</a></li>
                            <li><a href="{{ route('testimonials.index') }}" class="hover:underline">Testimonials</a></li>
                            <li><a href="{{ route('media.index') }}" class="hover:underline">Media</a></li>
                        </ul>
                    </div>

                    <!-- Important Links Section -->
                    <div class="block lg:hidden">
                        <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('important-links')">
                            <h3 class="text-lg font-sans mb-4">IMPORTANT LINKS</h3>
                            <span id="important-links-icon" class="text-2xl font-bold">+</span>
                        </div>
                        <ul id="important-links" class="space-y-2 text-sm hidden">
                            <li><a href="#" class="hover:underline">Loan Calculator</a></li>
                            <li><a href="#" class="hover:underline">Contact Us</a></li>
                        </ul>
                    </div>
                <!-- Social Icons -->

            </div>
        </div>
        <!-- Bottom Footer -->
    </div>
    <div class="border-t border-white mt-10 pt-6 text-sm text-left px-20 ml-1.5">
        <p>Copyright © 2024 by ADCORE.IN</p>
    </div>
</footer>
<script>
     function toggleSection(sectionId) {
        const section = document.getElementById(sectionId);
        const icon = document.getElementById(sectionId + '-icon');

        if (section.classList.contains('hidden')) {
            section.classList.remove('hidden');
            icon.textContent = '−';  // Change to minus when open
        } else {
            section.classList.add('hidden');
            icon.textContent = '+';  // Change to plus when closed
        }
    }
</script>
