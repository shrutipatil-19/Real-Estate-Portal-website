@extends('layouts.app')
@section('title', 'Buyers Guide')
@section('content')

    <div class="relative">
        <img src="img/buyers_guide.png" alt="Buyers Guide Banner" class="mx-auto w-full h-auto object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-4 space-y-[6px]">
            <h1 class="text-2xl xl:text-[40px] font-bold">Buyers Guide</h1>
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
            <span class="text-sm text-[#3C3B3B]">Buyers Guide</span>
        </div>

        <div class="py-28 grid grid-cols-2 gap-8">
            <div class="py-10">
                <h1 class="text-[42px] font-bold text-[#3C3B3B]  mb-10">Choosing The Right Location</h1>
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
                <img src="img/buyers_guide-1.png" alt="" class="w-full h-full">
            </div>

        </div>
    </div>

    <div class="bg-primary text-white mb-28 py-6">
        <div class="container mx-auto flex justify-between items-center text-center">
            <div class="flex-1 border-r border-white">
                <h2 id="experience" class=" text-4xl"></h2>
                <p class="mt-2 text-2xl font-bold">Year's Of Experience</p>
            </div>
            <div class="flex-1 border-r border-white">
                <h2 id="amenities" class=" text-4xl"></h2>
                <p class="mt-2 text-2xl font-bold">Amenities</p>
            </div>
            <div class="flex-1 border-r border-white">
                <h2 id="clients" class=" text-4xl"></h2>
                <p class="mt-2 text-2xl font-bold">Happy Clients</p>
            </div>
            <div class="flex-1">
                <h2 id="houses" class=" text-4xl"></h2>
                <p class="mt-2 text-2xl font-bold">House Sold</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto xl:px-16 px-4">
        <div>

            <h1 class="text-[42px] font-bold text-customGray mb-3">Home Loan</h1>

            <p class="text-2xl text-customBorder mb-10">
                Lorem ipsum dolor sit amet consectetur. Amet pellentesque dictum montes urna tempus et a eu in. Purus
                pretium
                aenean pulvinar massa donec. Justo proin nam gravida in. Cursus nam in fusce sed purus at euismod ultrices
                egestas.
            </p>
            <p class="text-customGray text-xl">Lorem ipsum dolor sit amet,</p>
            <ul class="list-disc list-inside text-customBorder space-y-3 mt-3">
                <li>Lorem Ipsum Dolor Sit Amet</li>
                <ul class="list-disc list-inside">
                    <li>Lorem Ipsum Dolor Sit Amet</li>
                </ul>
            </ul>

            <div class="space-y-7 text-gray-700 mt-3">
                <p>Lorem Ipsum Dolor Sit Amet,</p>
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur</p>
                <p>Lorem Ipsum Dolor Sit Amet Consectetur..</p>
                <p>Lorem Ipsum Dolor Sit Amet Consectetur. Molestie</p>
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</p>
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</p>
                <p>Lorem Ipsum Dolor Sit Amet Consectetur.</p>
            </div>
        </div>



        <div class="py-28">
            <h1 class="text-[42px] font-bold text-customGray mb-6">Tax Benefits</h1>
            <ul class="list-disc pl-6 space-y-4 text-customBorder text-base">
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


        <div class="mb-28">
            <h1 class="text-[42px] font-bold text-customGray mb-3">Loan Calculator</h1>
            <p class="text-customGray mb-6 text-2xl">Lorem ipsum dolor sit amet consectetur. Amet pellentesque dictum montes
                urna
                tempus et a eu in</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <!-- Loan Form -->
                <div>
                    <form id="loanForm" class="space-y-4 mt-4">
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
                <div class="border border-[#FBB249]">
                    <div class="p-28 text-center">
                        <h2 class="text-[#3C3B3B] text-base mb-2">Your Total Payment Will Be</h2>
                        <p id="totalPayment" class="text-4xl text-[#666666]">₹ 0.00</p>


                        <div class="flex justify-center gap-12 mt-[53px]">
                            <div class="text-center">
                                <div class="text-gray-600 text-base mb-2">Principle Amount</div>
                                <div id="principleAmount" class="text-base font-bold text-[#666666]">₹ 74,786</div>
                            </div>

                            <div class="text-center">
                                <div class="text-gray-600 text-base mb-2">Interest</div>
                                <div id="interestAmount" class="text-base font-bold text-[#666666]">12%</div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>


        <div class="">
            <!-- NRI Info Section -->
            <h1 class="text-[42px] font-bold text-[#3C3B3B] mb-10">NRI Info</h1>
            <p class="text-[#666666] text-2xl">
                Lorem ipsum dolor sit amet consectetur. Vulputate commodo ullamcorper praesent ac blandit est morbi
                tincidunt nulla. Elementum interdum bibendum non risus. Venenatis platea ut tristique feugiat sodales
                facilisi mi neque. Condimentum lacus vel sapien velit aenean accumsan a interdum. Adipiscing commodo pretium
                pharetra pulvinar urna commodo. Purus risus odio tellus lobortis at est risus vitae sagittis. Enim consequat
                velit libero suscipit dui tempus mi orci. Et dolor vitae mauris morbi a convallis viverra ullamcorper.
            </p>

            <div class="py-[42px]">
                <!-- Documents Required Section -->
                <h2 class="text-2xl  text-[#3C3B3B] mb-7">Documents Required for NRIs to Purchase Property</h2>
                <ul class="list-disc list-inside text-[#666666] mb-8 space-y-4">
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                    <li>Lorem Ipsum Dolor Sit Amet,</li>
                </ul>

                <!-- Payment and Repayment Section -->
                <h2 class="text-2xl  text-[#3C3B3B] mb-7">Payment and Repayment</h2>
                <ul class="list-disc list-inside text-[#666666] space-y-4">
                    <li>Lorem Ipsum Dolor Sit Amet Consectetur. Sed Consectetur Tellus Consequat Erat Semper Lorem Lacus.
                    </li>
                    <li>Lorem Ipsum Dolor Sit Amet Consectetur. Sed Consectetur Tellus Consequat Erat Semper Lorem Lacus.
                    </li>
                    <li>Lorem Ipsum Dolor Sit Amet Consectetur. Sed Consectetur Tellus Consequat Erat Semper Lorem Lacus.
                    </li>
                    <li>Lorem Ipsum Dolor Sit Amet Consectetur. Sed Consectetur Tellus Consequat Erat Semper Lorem Lacus.
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
            document.getElementById('interestAmount').textContent = `${interestRate}%`;
        }
    }
</script>
