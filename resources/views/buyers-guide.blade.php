@extends('layouts.app')
@section('title', 'Buyers Guide')
@section('content')

    <div class="relative">
        <img src="img/buyers_guide.png" alt="Buyers Guide Banner" class="mx-auto w-full lg:h-auto h-[177px] object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-4 space-y-[6px]">
            <h1 class="text-2xl xl:text-[40px] font-bold lg:mb-3 mb-[6px]">Buyers Guide</h1>
            <span class="text-base xl:text-2xl text-center">Lorem ipsum dolor sit amet consectetur.</span>
        </div>
    </div>


    <div class="container mx-auto xl:px-16 px-4 lg:mt-6 mt-[14px]">
        <div class="flex gap-3 items-center">
            <a href="/" class="lg:text-base text-sm text-customGray">Home</a>
            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.66667 6.9852L0 13.3488L0.651163 14L8 6.9852L0.651163 0L0 0.621565L6.66667 6.9852Z" fill="#3C3B3B"/>
                </svg>
                <span class="lg:text-base text-sm text-customGray">Buyers Guide</span>
        </div>

        <div class="lg:py-28 py-14  lg:grid grid-cols-2 gap-8">

            <div class="block lg:hidden">
                <img src="img/buyers_guide-1.png" alt="" class="w-full h-auto">
            </div>


            <div class="lg:py-10 block lg:hidden">
                <h1 class="lg:text-[42px] text-2xl font-bold text-customGray  lg:mb-10 mb-3">Choosing The Right Location</h1>
                <p class="lg:text-base text-sm text-[#666666] leading-7">Lorem ipsum dolor sit amet consectetur. At est facilisis eleifend
                    adipiscing cursus nam. A risus eu feugiat tempor urna quam felis. Id sem ultrices ornare tortor
                    vestibulum. Et facilisis cursus nisl rutrum duis gravida. Quisque massa donec euismod lectus malesuada
                    risus vel nunc. Cras quis molestie urna dapibus enim scelerisque ut. Turpis at et molestie vitae ut. A
                    risus eu feugiat tempor urna quam felis. Id sem ultrices ornare tortor vestibulum. Et facilisis cursus
                    nisl rutrum duis gravida. Quisque massa donec euismod lectus malesuada risus vel nunc.Turpis at et
                    molestie vitae ut. A risus eu feugiat tempor urna quam felis. Lorem ipsum dolor sit amet consectetur. At
                    est facilisis eleifend adipiscing cursus nam. A risus eu feugiat tempor urna quam felis. Id sem ultrices
                    ornare tortor vestibulum. Et facilisis cursus nisl rutrum duis gravida. Quisque massa donec euismod
                    lectus malesuada risus vel nunc. Cras quis molestie urna dapibus enim scelerisque ut. Turpis at et
                    molestie vitae ut.
                </p>
            </div>


            <div class="lg:py-10 hidden lg:block">
                <h1 class="text-[42px] font-bold text-customGray  mb-10">Choosing The Right Location</h1>
                <p class="text-base text-[#666666] leading-7">Lorem ipsum dolor sit amet consectetur. At est facilisis eleifend
                    adipiscing cursus nam. A risus eu feugiat tempor urna quam felis. Id sem ultrices ornare tortor
                    vestibulum. Et facilisis cursus nisl rutrum duis gravida. Quisque massa donec euismod lectus malesuada
                    risus vel nunc. Cras quis molestie urna dapibus enim scelerisque ut. Turpis at et molestie vitae ut. A
                    risus eu feugiat tempor urna quam felis. Id sem ultrices ornare tortor vestibulum. Et facilisis cursus
                    nisl rutrum duis gravida. Quisque massa donec euismod lectus malesuada risus vel nunc.Turpis at et
                    molestie vitae ut. A risus eu feugiat tempor urna quam felis. Lorem ipsum dolor sit amet consectetur. At
                    est facilisis eleifend adipiscing cursus nam. A risus eu feugiat tempor urna quam felis. Id sem ultrices
                    ornare tortor vestibulum. Et facilisis cursus nisl rutrum duis gravida. Quisque massa donec euismod
                    lectus malesuada risus vel nunc. Cras quis molestie urna dapibus enim scelerisque ut. Turpis at et
                    molestie vitae ut.
                </p>
            </div>


            <div>
                <img src="img/buyers_guide-1.png" alt="" class="w-full h-full hidden lg:block">
            </div>

        </div>
    </div>

    <div class="bg-primary text-white lg:mb-28 mb-14 lg:py-6 py-4">
        <div class="container mx-auto grid  grid-cols-2 lg:grid-cols-4 items-center text-center lg:gap-0 gap-4">
            <div class="flex-1 lg:border-r lg:border-white">
                <h2 id="experience" class="lg:text-[40px] text-[32px]"></h2>
                <p class="mt-3 lg:text-2xl text-sm font-bold">Year's Of Experience</p>
            </div>
            <div class="flex-1 lg:border-r lg:border-white">
                <h2 id="amenities" class=" lg:text-[40px] text-[32px]"></h2>
                <p class="mt-3 lg:text-2xl text-sm font-bold">Amenities</p>
            </div>
            <div class="flex-1 lg:border-r lg:border-white">
                <h2 id="clients" class=" lg:text-[40px] text-[32px]"></h2>
                <p class="mt-3 lg:text-2xl text-sm font-bold">Happy Clients</p>
            </div>
            <div class="flex-1">
                <h2 id="houses" class=" lg:text-[40px] text-[32px]"></h2>
                <p class="mt-3 lg:text-2xl text-sm font-bold">House Sold</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto xl:px-16 px-4">
        <div>

            <h1 class="lg:text-[42px] text-2xl font-bold text-customGray mb-3">Home Loan</h1>

            <p class="lg:text-2xl text-base text-customBorder lg:mb-[42px] mb-6">
                Lorem ipsum dolor sit amet consectetur. Amet pellentesque dictum montes urna tempus et a eu in. Purus
                pretium
                aenean pulvinar massa donec. Justo proin nam gravida in. Cursus nam in fusce sed purus at euismod ultrices
                egestas.
            </p>
            <p class="text-customGray lg:text-xl text-sm">Lorem ipsum dolor sit amet,</p>
            <ul class="list-disc list-inside text-customBorder space-y-3 mt-3 lg:text-lg text-sm">
                <li>Lorem Ipsum Dolor Sit Amet</li>
                <ul class="list-disc list-inside">
                    <li>Lorem Ipsum Dolor Sit Amet</li>
                </ul>
            </ul>

            <div class="space-y-5 text-customGray mt-3 lg:text-xl text-sm">
                <p>Lorem Ipsum Dolor Sit Amet,</p>
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur</p>
                <p>Lorem Ipsum Dolor Sit Amet Consectetur..</p>
                <p>Lorem Ipsum Dolor Sit Amet Consectetur. Molestie</p>
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</p>
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</p>
                <p>Lorem Ipsum Dolor Sit Amet Consectetur.</p>
            </div>
        </div>



        <div class="lg:py-28 py-14">
            <h1 class="lg:text-[42px] text-2xl font-bold text-customGray lg:mb-[42px] mb-[14px]">Tax Benefits</h1>
            <ul class="list-disc pl-6 space-y-4 text-customBorder lg:text-lg text-sm">
                <li>Lorem ipsum dolor sit amet consectetur. Non leo risus diam id sed scelerisque. Ultricies aliquam
                    habitant diam at tempus nibh. Eget hendrerit velit eu aliquam.</li>
                <li>Ut commodo massa urna cursus viverra et sit ornare mauris. Aliquam sed sem mauris libero vel massa. Eu
                    arcu aliquam feugiat sed.</li>
                <li>Ultricies aliquam habitant diam at tempus nibh. Eget hendrerit velit eu aliquam. Proin bibendum nunc eu
                    magna eget felis.</li>
                <li>Eu arcu aliquam feugiat sed. Amet amet adipiscing ornare ac massa vitae commodo.</li>
                <li>Eget hendrerit velit eu aliquam. Proin bibendum nunc eu magna eget felis. Ut commodo massa urna cursus
                    viverra et sit ornare mauris.</li>
            </ul>
        </div>


        <div class="lg:mb-28 mb-14" id="LoanCalculator_">
            <h1 class="lg:text-[42px] text-2xl font-bold text-customGray mb-3">Loan Calculator</h1>
            <p class="text-customGray lg:mb-[42px] mb-6 lg:text-2xl text-sm">Lorem ipsum dolor sit amet consectetur. Amet pellentesque dictum montes
                urna
                tempus et a eu in</p>

            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-16 gap-6">
                <!-- Loan Form -->
                <div>
                    <form id="loanForm" class="space-y-[22px]">
                        <div>
                            <label for="loan" class="block text-customGray font-medium mb-3">Loan</label>
                            <input type="number" id="loan" name="loan"
                                class="w-full border border-customGray h-[53px]" placeholder="00.00">
                        </div>

                        <div>
                            <label for="interestRate" class="block text-customGray font-medium mb-3">Interest
                                Rate(%)</label>
                            <input type="number" id="interestRate" name="interestRate"
                                class="w-full border border-customGray h-[53px]" placeholder="00.00">
                        </div>

                        <div>
                            <label for="years" class="block text-customGray font-medium mb-3">No. of Years</label>
                            <input type="number" id="years" name="years"
                                class="w-full border border-customGray h-[53px]" placeholder="00.00">
                        </div>

                        <button type="button" id="calculateBtn"
                            class="bg-primary text-white font-bold px-6 py-3  opacity-100 hover:bg-primary-400 transition duration-300">Calculate</button>
                    </form>
                </div>

                <!-- Result Section -->
                <div class="border border-[#FBB249] lg:h-[375px]">
                    <div class="lg:p-28 p-5 text-center">
                        <h2 class="text-customGray text-base mb-2">Your Total Payment Will Be</h2>
                        <p id="totalPayment" class="text-4xl text-[#666666]">₹ 0.00</p>


                        <div class="flex justify-center gap-12 mt-[53px]">
                            <div class="text-center">
                                <div class="text-gray-600 text-base mb-2">Principle Amount</div>
                                <div id="principleAmount" class="text-base font-bold text-[#666666]">₹ 0.00</div>
                            </div>

                            <div class="text-center">
                                <div class="text-gray-600 text-base mb-2">Interest</div>
                                <div id="interestAmount" class="text-base font-bold text-[#666666]">% 0</div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>


        <div class="">
            <!-- NRI Info Section -->
            <h1 class="lg:text-[42px] text-[28px] font-bold text-customGray lg:mb-[42px] mb-[14px]">NRI Info</h1>
            <p class="text-[#666666] lg:text-2xl text-sm lg:mb-0 mb-[14px]">
                Lorem ipsum dolor sit amet consectetur. Vulputate commodo ullamcorper praesent ac blandit est morbi
                tincidunt nulla. Elementum interdum bibendum non risus. Venenatis platea ut tristique feugiat sodales
                facilisi mi neque. Condimentum lacus vel sapien velit aenean accumsan a interdum. Adipiscing commodo pretium
                pharetra pulvinar urna commodo. Purus risus odio tellus lobortis at est risus vitae sagittis. Enim consequat
                velit libero suscipit dui tempus mi orci. Et dolor vitae mauris morbi a convallis viverra ullamcorper.
            </p>

            <div class="lg:py-[56px] lg:mb-0 mb-[33px]">
                <!-- Documents Required Section -->
                <h2 class="lg:text-2xl text-xl  text-customGray lg:mb-7 mb-[14px]">Documents Required for NRIs to Purchase Property</h2>
                <ul class="list-disc list-inside text-[#666666] mb-8 space-y-4 lg:text-xl text-sm">
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                </ul>

                <!-- Payment and Repayment Section -->
                <h2 class="lg:text-2xl text-xl  text-customGray lg:mb-7 mb-[14px]">Payment and Repayment</h2>
                <ul class="list-disc list-inside text-[#666666] space-y-4 lg:text-xl text-sm">
                    <li>Lorem Ipsum Dolor Sit Amet Consectetur.
                    </li>
                    <li>Lorem Ipsum Dolor Sit Amet Consectetur.
                    </li>
                    <li>Lorem Ipsum Dolor Sit Amet Consectetur.
                    </li>
                    <li>Lorem Ipsum Dolor Sit Amet Consectetur.
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection
<script type="module">
    import {
        CountUp
    } from 'https://cdn.jsdelivr.net/npm/countup.js@2.0.7/dist/countUp.min.js';

    function kFormatter(num) {
        return num >= 1000 ? Math.floor(num / 1000) + 'k+' : num;
    }

    const experience = new CountUp('experience', 7, {
        suffix: '+'
    });
    const amenities = new CountUp('amenities', 15, {
        suffix: '+'
    });
    const clients = new CountUp('clients', 13000, {
        formattingFn: kFormatter
    });
    const houses = new CountUp('houses', 15000, {
        formattingFn: kFormatter
    });

    experience.start();
    amenities.start();
    clients.start();
    houses.start();



    window.onload = function() {
        document.getElementById("calculateBtn").onclick = calculateLoan;

        function calculateLoan() {
            const loan = parseFloat(document.getElementById('loan').value);
            const interestRate = parseFloat(document.getElementById('interestRate').value);
            const years = parseFloat(document.getElementById('years').value);

            if (!loan || !interestRate || !years) {
                alert("Please fill all fields correctly");
                return;
            }

            const interest = (loan * (interestRate / 100)) * years;
            const total = loan + interest;

            // Update the UI
            document.getElementById('totalPayment').textContent = `₹ ${total.toFixed(2)}`;
            document.getElementById('principleAmount').textContent = `₹ ${loan.toFixed(2)}`;
            document.getElementById('interestAmount').textContent = `${interestRate} %`;
        }
    }
</script>
