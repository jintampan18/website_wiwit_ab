<x-guest-layout>
    @section('title', 'Home')
    @push('css-internal')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @endpush
    {{-- Hero --}}
    <section class="relative flex items-center w-full"
        style="background-color:#E1ECF0; background-image: url('<?= asset('assets/SG-WIWIT-01.svg') ?>'); background-size: cover; background-position: right top">
        <div class="relative items-center w-full px-5 pt-20 pb-20 md:pb-0 mx-auto md:px-12 lg:px-14 max-w-7xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-4">
                    <div class="relative items-center gap-12 m-auto lg:inline-flex sm:order-first">
                        <div class="max-w-xl text-center lg:text-left">
                            <div class="text-bootom-scroll">
                                <p class="text-sm md:text-xl text-dark font-light">
                                    Hi, I’m Wiwit 👋
                                </p>
                                <p class="text-2xl font-bold tracking-tight text-dark sm:text-5xl">
                                    Risk Management Coach<span class="text-primary">.</span>
                                </p>
                                <p
                                    class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light max-w-xs">
                                    Ready to teach you strategies for broader business expansion. <br> Are you ready?
                                </p>
                            </div>
                            <div class="mt-10">
                                <a href={{ route('contact-me.index') }}>
                                    <button
                                        class="text-bootom-scroll inline-flex items-center justify-center text-sm px-8 py-3.5 mt-4 md:mt-0 rounded-full text-white bg-[#67BD65] hover:bg-dark focus:outline-none focus:text-white">
                                        More Info
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="order-first hidden md:block w-full mt-6 lg:mt-0">
                        <img class="text-left-scroll object-contain object-center w-full h-[450px] mx-auto lg:ml-auto"
                            alt="hero" src="{{ asset('assets/hero.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section>
        <div
            class="text-bootom-scroll relative items-center w-full px-5 py-28 mx-auto md:px-12 lg:px-14 md:px-0 max-w-6xl">
            <p class="text-2xl sm:text-4xl font-semibold tracking-tight text-dark max-w-sm mx-auto text-center">
                Solution for every
                business need<span class="text-primary">.</span>
            </p>
            <div class="text-bootom-scroll grid w-full grid-cols-1 mx-auto lg:grid-cols-4 mt-24 gap-4">
                <div class="max-w-lg p-6 mx-auto border border-gray-100 rounded-xl">
                    <ion-icon name="book" class="w-7 h-7 text-primary"></ion-icon>
                    <p class="mt-5 text-lg font-medium leading-6 text-dark">
                        Public Course
                    </p>
                    <p class="mt-3 text-sm md:text-md text-gray-500 line-clamp-3 hover:line-clamp-none">
                        Pentahelix public course that focuses on solutions to address pentahelix issues
                    </p>
                </div>
                <div class="max-w-lg p-6 mx-auto border border-gray-100 rounded-xl">
                    <ion-icon name="home" class="w-7 h-7 text-primary"></ion-icon>

                    <p class="mt-5 text-lg font-medium leading-6 text-dark">
                        In House Training
                    </p>
                    <p class="mt-3 text-sm md:text-md text-gray-500 line-clamp-3 hover:line-clamp-none">
                        Adjustment of Budget Design (RAB) & Work Reference Framework (KAK) in accordance with pentahelix
                        needs alongside the target of the established goal
                    </p>
                </div>
                <div class="max-w-lg p-6 mx-auto border border-gray-100 rounded-xl">
                    <ion-icon name="bar-chart" class="w-7 h-7 text-primary"></ion-icon>

                    <p class="mt-5 text-lg font-medium leading-6 text-dark">
                        Research & Project
                    </p>
                    <p class="mt-3 text-sm md:text-md text-gray-500 line-clamp-3 hover:line-clamp-none">
                        Research and projects for academics, government, nonprofit organizations, and communities
                    </p>
                </div>
                <div class="max-w-lg p-6 mx-auto border border-gray-100 rounded-xl">
                    <ion-icon name="easel" class="w-7 h-7 text-primary"></ion-icon>

                    <p class="mt-5 text-lg font-medium leading-6 text-dark">
                        Coaching & Training Executive
                    </p>
                    <p class="mt-3 text-sm md:text-md text-gray-500 line-clamp-3 hover:line-clamp-none">
                        Navigating leaders in managing organizational complexity, including handling multi-stakeholders
                        both within and outside the organization, and developing leadership in the aspects of
                        communication and interpersonal relationships
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Personalized --}}
    <section>
        <div
            class="text-bootom-scroll relative items-center w-full px-5 py-8 mx-auto md:px-12 lg:px-14 md:px-0 max-w-lg text-center">
            <p class="text-2xl sm:text-4xl font-semibold tracking-tight text-dark">
                Need a personalized solution<span class="text-primary">?</span>
            </p>
            <p class="text-sm md:text-md text-gray-500 mt-3 max-w-md mx-auto">
                I assist companies in developing and implementing effective risk management strategies.
            </p>
            <div class="mt-7">
                <a href="#personal-consultation"
                    class="inline-flex items-center justify-center text-sm px-8 py-3.5 mt-4 md:mt-0 rounded-full text-white bg-[#67BD65] hover:bg-dark focus:outline-none focus:text-white font-normal">
                    How I can help?
                </a>
            </div>
        </div>
    </section>

    {{-- Empower --}}
    <section>
        <div class="text-bootom-scroll relative items-center w-full px-5 py-24 mx-auto md:px-12 lg:px-16 max-w-6xl">
            <div class="w-full mx-auto text-left">
                <div class="relative flex-col items-center m-auto align-middle">
                    <div class="items-center gap-8 text-left lg:inline-flex">
                        <div class="text-left-scroll order-first block w-full mt-12 lg:mt-0">
                            <img class="object-cover object-center w-3/4 h-3/4 md:w-[452px] md:h-[536px] rounded-xl mx-auto lg:ml-auto"
                                alt="hero" src="{{ asset('assets/empower.jpg') }}">
                        </div>
                        <div class="text-right-scroll flex flex-col mt-6 lg:mt-0">
                            <div class="flex items-center justify-center">
                                <p
                                    class="text-2xl sm:text-4xl md:max-w-full max-w-md font-semibold tracking-tight text-dark text-center md:text-start">
                                    Empowering you to make sound financial decision.
                                </p>
                            </div>
                            <p class="mt-5 text-sm md:text-md leading-7 text-gray-500 text-center md:text-start">
                                My mission is to empower you with the knowledge and tools you need
                            </p>
                            <div class="mt-4 space-y-3 grid grid-flow-row">
                                <div
                                    class="inline-flex w-fit justify-center items-center py-3.5 px-12 bg-[#FAFBFD] text-dark rounded-lg md:w-full">
                                    <ion-icon name="checkmark-circle-outline" class="w-6 h-6 mr-2"></ion-icon>
                                    <span class="font-medium">Project Management</span>
                                </div>
                                <div
                                    class="inline-flex w-fit justify-center items-center py-3.5 px-12 bg-[#FAFBFD] text-dark rounded-lg md:w-full">
                                    <ion-icon name="checkmark-circle-outline" class="w-6 h-6 mr-2"></ion-icon>
                                    <span class="font-medium">Entrepreneurship</span>
                                </div>
                                <div
                                    class="inline-flex w-fit justify-center items-center py-3.5 px-12 bg-[#FAFBFD] text-dark rounded-lg md:w-full">
                                    <ion-icon name="checkmark-circle-outline" class="w-6 h-6 mr-2"></ion-icon>
                                    <span class="font-medium">Economy and Business</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial --}}
    <section class="bg-[#F9FAFC]">
        <div class="text-bootom-scroll relative items-center w-full px-5 py-24 mx-auto md:px-12 lg:px-16 max-w-7xl">
            <p class="text-2xl font-semibold tracking-tight text-dark sm:text-4xl max-w-md mx-auto text-center">
                No matter who you are,
                I’ve got what you need<span class="text-primary">.</span>
            </p>
            <div class="text-left-scroll grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-24">
                @foreach ($testimonials as $data)
                    <div class="rounded-xl border-[1.5px] bg-white border-[#EDEDED] p-6 custom-box-shadow">
                        <img src="{{ $data->avatar ? asset('storage/testimonial/' . $data->avatar) : asset('assets/default.png') }}"
                            class="bg-gray-300 rounded-full mx-auto border border-gray-100 mt-4 h-28 aspect-square object-center object-cover"
                            alt="">
                        <div class="text-xs md:text-sm px-4">
                            <p class="mt-8 text-gray-500 leading-7 line-clamp-5 hover:line-clamp-none">
                                “{{ $data->testimonial }}”
                            </p>
                            <p class="text-dark mt-7">
                            </p>
                            <span class="font-semibold">{{ $data->name }},</span>
                            <p class="text-gray-500">{{ $data->position }} at {{ $data->job }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>

    {{-- Partners --}}
    <section class="max-w-screen overflow-x-clip bg-[#F9FAFC]">
        <div class="text-bootom-scroll">
            <div class="px-4 x w-screen sm:px-6 lg:py-8 lg:px-8 mb-4 lg:mb-8">
                <div class="mt-6 gap-5 lg:mt-8 swiper-container">
                    <div class="grid mx-auto grid-flow-col swiper-wrapper">
                        @foreach ($partners as $partner)
                            <div class="swiper-slide flex justify-center col-span-1">
                                <img class="blur-mode w-full h-20 object-contain"
                                    src="{{ asset('storage/partner/' . $partner->logo) }}" alt="Partner Logo" />
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    @push('js-internal')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>


        <script>
            window.onload = function() {
                let swiper = new Swiper(".swiper-container", {
                    direction: "horizontal",
                    spaceBetween: 2,
                    loop: true,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 4,
                            spaceBetween: 40,
                        },
                        1024: {
                            slidesPerView: 5,
                            spaceBetween: 50,
                        },
                    },
                });
            }
        </script>
        <script>
            @if (Session::has('success'))
                Swal.fire(
                    'Success!',
                    '{{ Session::get('success') }}',
                    'success'
                )
            @endif

            @if (Session::has('error'))
                Swal.fire(
                    'Error!',
                    '{{ Session::get('error') }}',
                    'error'
                )
            @endif
        </script>

        <script>
            // scroll reveal
            ScrollReveal({
                distance: '100px',
                duration: 2000,
                delay: 200,
                reset: false,
            });

            ScrollReveal().reveal('.text-top-scroll', {
                origin: 'top'
            });
            ScrollReveal().reveal(
                '.text-bootom-scroll', {
                    origin: 'bottom'
                });
            ScrollReveal().reveal('.text-left-scroll', {
                origin: 'left'
            });
            ScrollReveal().reveal('.text-right-scroll', {
                origin: 'right'
            });
        </script>
    @endpush
</x-guest-layout>
