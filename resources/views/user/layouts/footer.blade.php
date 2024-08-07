<footer
    style="background-color:#E1ECF0; background-image: url('<?= asset('assets/SG-WIWIT-03.svg') ?>'); background-size: cover; background-position: top"
    aria-labelledby="footer-heading" id="footer">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="px-5 py-12 mx-auto max-w-6xl lg:py-16 lg:ml-20 md:px-12 lg:px-0">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            @php
                $socialMedias = \App\Models\SocialMedia::all();
                $contactPageSetting = \App\Models\ContactPageSetting::first();
            @endphp
            <p class="mt-2 text-sm font-normal text-[#757575]">Working Hours <br>
                {{ $contactPageSetting->working_hours }}</p>
            <div class="grid grid-cols-2 gap-8 mt-12 xl:mt-0 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="font-semibold text-base text-black ">
                            Overview
                        </h3>
                        <ul role="list" class="mt-4 space-y-3">
                            <li>
                                <a href="/" class="text-sm font-normal text-[#133D4F] mt-6 hover:text-green-700">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('portofolio.index') }}"
                                    class="text-sm font-normal text-[#133D4F] mt-5 hover:text-green-700">
                                    Portofolio
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('events.index') }}"
                                    class="text-sm font-normal text-[#133D4F] mt-5 hover:text-green-700">
                                    Events
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('material.index') }}"
                                    class="text-sm font-normal text-[#133D4F] mt-5 hover:text-green-700">
                                    Material
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact-me.index') }}"
                                    class="text-sm font-normal text-[#133D4F]  mt-5 hover:text-green-700">
                                    Contact Me
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact-me.index') }}"
                                    class="text-sm font-normal text-[#133D4F] mt-5 hover:text-green-700">
                                    Consultation
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <ul role="list" class="mt-10 space-y-4">
                            <li>
                                <a href="#" class="text-sm text-[#133D4F] hover:text-green-700">
                                    Offices
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('portofolio.index') }}"
                                    class="text-sm font-normal text-[#133D4F] mt-5 hover:text-green-700">
                                    Careers
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hidden lg:justify-end lg:mr-20 md:grid md:grid-cols-1">
                    <div class="w-full mt-12 md:mt-0">
                        <div class="mt-8 lg:justify-end xl:mt-0">
                            <h3 class="font-semibold text-sm text-black ">
                                Business Info
                            </h3>
                            <p class="mt-4 text-sm font-normal text-[#133D4F] lg:ml-auto">
                                {{ $contactPageSetting->address }}
                            </p>
                            <a href="https://wa.me/{{ \App\Models\ContactPageSetting::first()->contact_number }}"
                                target="_blank"
                                class="w-full mt-9 py-2 flex justify-center items-center bg-[#FAFBFD] font-normal rounded-md text-sm border-solid border-2  h-12 text-[#133D4F] border-[#F2F2F2]">
                                <ion-icon class="w-4 h-4 mr-3" name="call"></ion-icon>
                                {{ \App\Models\ContactPageSetting::first()->contact_number ?? '-' }}
                            </a>
                            <a href="mailto:{{ \App\Models\ContactPageSetting::first()->personal_email }}"
                                target="_blank"
                                class="w-full mt-5  py-2 items-center flex justify-center bg-[#FAFBFD] font-normal rounded-md border-solid  border-2 text-sm h-12 text-[#133D4F] border-[#F2F2F2]">
                                <ion-icon class="w-4 h-4 mr-3"
                                    name="mail"></ion-icon>{{ \App\Models\ContactPageSetting::first()->personal_email ?? '-' }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12 mx-auto border-t text-center max-w-7xl  sm:px-6  lg:px-20">
        <div class="flex justify-center md:order-last md:mb-0">
            @php
                $socialMedias = \App\Models\SocialMedia::all();
            @endphp
            @foreach ($socialMedias as $data)
                <span class="">
                    <a href="{{ $data->url }}" target="_blank"
                        class="w-6 h-6 px-2 transition text-[#435660] hover:text-green-700">
                        <span class="sr-only">{{ $data->name }}</span>
                        <ion-icon class="w-5 h-5 md hydrated" name="{{ $data->icon }}" role="img"
                            aria-label="logo {{ $data->name }}"></ion-icon>
                    </a>
                </span>
            @endforeach

        </div>

        <div class="py-12 mx-auto border-t text-center max-w-7xl  sm:px-6  lg:px-20">
            <div class="flex justify-center md:order-last md:mb-0">
                <button onclick="scrollToTop()"
                    class="bg-slate-100 h-11 rounded-full p-2 fixed z-10 bottom-1 right-2 border-2 transition-all transform hover:scale-105 duration-300 border-gray-400 md:bottom-4 md:right-4 hidden"
                    id="scrollToTopButton">
                    <ion-icon name="arrow-up-outline" class="w-6 h-6 text-green-500 rounded-full"></ion-icon>
                    {{-- <img src="{{ asset('assets/up-arrow.png') }}" alt="back" class="w-6 h-6"> --}}
                </button>
            </div>
        </div>
    </div>

    @push('js-internal')
        <script>
            window.addEventListener('scroll', function() {
                var scrollToTopButton = document.getElementById('scrollToTopButton');
                if (window.scrollY > 100) {
                    scrollToTopButton.classList.remove('hidden');
                } else {
                    scrollToTopButton.classList.add('hidden');
                }
            });

            function scrollToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        </script>
    @endpush

</footer>
