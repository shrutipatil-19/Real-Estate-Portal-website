@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <div class="relative">
        <img src="img/contact-us.png" alt="Contact Us Banner" class="mx-auto w-full h-auto object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-4 space-y-[6px]">
            <h1 class="text-2xl xl:text-[40px] font-bold">Contact Us</h1>
            <span class="text-base xl:text-2xl mt-2 text-center">Lorem ipsum dolor sit amet consectetur.</span>
        </div>
    </div>


    <div class="container mx-auto xl:px-16 px-4 mt-7">
        <div class="flex gap-3 items-center">
            <span class="text-base text-[#3C3B3B]">Home</span>
            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.66667 6.9852L0 13.3488L0.651163 14L8 6.9852L0.651163 0L0 0.621565L6.66667 6.9852Z"
                    fill="#3C3B3B" />
            </svg>
            <span class="text-sm text-[#3C3B3B]">Contact Us</span>
        </div>

        <div class="xl:mt-[112px] mt-[56px]">
            <h1 class="lg:text-[42px] text-2xl font-bold text-customGray">Get In Touch</h1>

            <div class="lg:flex items-center lg:px-24 justify-between lg:mt-[42px] mt-6 space-y-8">
                <!-- Stat 1 -->
                <div class="flex items-center">
                    <div class="">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.5784 15.2081L16.9717 15.8121C16.9717 15.8121 15.5277 17.2467 11.5877 13.3294C7.64775 9.41205 9.09175 7.97739 9.09175 7.97739L9.47308 7.59605C10.4157 6.66005 10.5051 5.15605 9.68241 4.05739L8.00241 1.81339C6.98375 0.453387 5.01708 0.273388 3.85041 1.43339L1.75708 3.51339C1.17975 4.08939 0.793079 4.83339 0.839745 5.66005C0.959746 7.77605 1.91708 12.3267 7.25575 17.6361C12.9184 23.2654 18.2317 23.4894 20.4037 23.2867C21.0917 23.2227 21.6891 22.8734 22.1704 22.3934L24.0637 20.5107C25.3437 19.2401 24.9837 17.0601 23.3464 16.1707L20.7997 14.7854C19.7251 14.2027 18.4184 14.3734 17.5784 15.2081Z"
                                fill="#FBB249" />
                        </svg>

                    </div>
                    <div class="ml-4">
                        <p class="lg:text-2xl text-xl font-bold text-[#3C3B3B]">Phone</p>
                        <p class="text-base text-[#666666]">(+91) 740 821 55 79</p>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="flex items-center">
                    <div class="">
                        <svg width="21" height="28" viewBox="0 0 21 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.5 0C4.97937 0 0.5 4.03188 0.5 9C0.5 17 10.5 28 10.5 28C10.5 28 20.5 17 20.5 9C20.5 4.03188 16.0206 0 10.5 0ZM10.5 14C9.70887 14 8.93552 13.7654 8.27772 13.3259C7.61992 12.8864 7.10723 12.2616 6.80448 11.5307C6.50173 10.7998 6.42252 9.99556 6.57686 9.21964C6.7312 8.44372 7.11216 7.73098 7.67157 7.17157C8.23098 6.61216 8.94372 6.2312 9.71964 6.07686C10.4956 5.92252 11.2998 6.00173 12.0307 6.30448C12.7616 6.60723 13.3864 7.11992 13.8259 7.77772C14.2654 8.43552 14.5 9.20887 14.5 10C14.4988 11.0605 14.077 12.0773 13.3271 12.8271C12.5773 13.577 11.5605 13.9988 10.5 14Z"
                                fill="#FBB249" />
                        </svg>

                    </div>
                    <div class="ml-4">
                        <p class="lg:text-2xl text-xl text-[#3C3B3B] font-bold">Location</p>
                        <p class="text-base text-[#666666]">Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="flex items-center">
                    <div class="">
                        <svg width="27" height="22" viewBox="0 0 27 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.1719 0.333252H2.83854C1.37187 0.333252 0.185208 1.53325 0.185208 2.99992L0.171875 18.9999C0.171875 20.4666 1.37187 21.6666 2.83854 21.6666H24.1719C25.6385 21.6666 26.8385 20.4666 26.8385 18.9999V2.99992C26.8385 1.53325 25.6385 0.333252 24.1719 0.333252ZM24.1719 5.66659L13.5052 12.3333L2.83854 5.66659V2.99992L13.5052 9.66659L24.1719 2.99992V5.66659Z"
                                fill="#FBB249" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="lg:text-2xl text-xl font-bold text-[#3C3B3B]">Email</p>
                        <p class="text-base text-[#666666]">info@Lorem ipsum.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-b border-[#D9D9D9] lg:mt-6 hidden lg:block"></div>

    <div class="container mx-auto lg:px-16 px-4">
        <div class="xl:py-[112px] py-[40px] lg:grid grid-cols-2 lg:gap-44">
            <div class="lg:py-[140px] py-[40px]">
                <h2 class="lg:text-[42px] text-2xl  font-bold text-customGray">Contact us</h2>
                <p class="lg:text-2xl text-base text-customGray mt-3">Lorem ipsum dolor sit amet consectetur. Libero integer integer
                    viverra enim.</p>
                <p class="mt-[42px] text-customBorder lg:text-base text-sm">Lorem ipsum dolor sit amet consectetur. Ultricies at morbi
                    at sed. Integer posuere at risus gravida eu.Lorem ipsum dolor sit amet consectetur. Ultricies at morbi
                    at sed. Integer posuere at risus gravida eu.</p>
            </div>

            <div>

                <form class="space-y-4  rounded bg-white shadow-lg shadow-[#888C851F]/50 lg:py-16 py-8 lg:px-[46px] px-8">
                    <!-- Full Name Input -->
                    <div>
                        <input type="text" placeholder="Enter Full name"
                            class="text-base border border-customGray w-full lg:h-[53px] h-[37px]">
                    </div>

                    <!-- Email Address Input -->
                    <div>
                        <input type="email" placeholder="Email Address"
                            class="text-base border border-customGray w-full lg:h-[53px] h-[37px]">
                    </div>

                    <!-- Message Textarea -->
                    <div>
                        <textarea rows="4" placeholder="Message" class="text-base border border-customGray w-full lg:h-[140px] h-[81px]"></textarea>
                    </div>

                    <!-- Terms and Conditions Checkbox -->
                    <div class="flex items-center">
                        <input type="checkbox" id="terms" class="mr-2">
                        <label for="terms" class="text-sm text-gray-600">Please Accept the Terms & Conditions</label>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="bg-primary text-white font-bold px-6 py-3  opacity-100 hover:bg-primary-400 transition duration-300">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="flex flex-col items-center text-center justify-cente space-y-4">
            <h3 class="text-2xl lg:text-[40px] font-bold">
                Lorem ipsum dolor sit
            </h3>
            <p class="text-lg lg:text-2xl lg:w-[855px] text-[#666666]">
                Lorem ipsum dolor sit amet consectetur. Amet pellentesque dictum montes urna tempus et a eu in..
            </p>
        </div>

        <div class="py-[56px]">
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31098.109393530864!2d73.0583821!3d19.2094103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7958ef72d8707%3A0x84bf6ab96e280b08!2sDombivli%2C%20Maharashtra%2C%20India!5e0!3m2!1sen!2sus!4v1695804071977!5m2!1sen!2sus"
            class="w-full lg:h-[565px] h-[264px]"
            style="border:0;"
            allowfullscreen="allowfullscreen"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>


        </div>


    </div>
@endsection
