<div class="bg-cover bg-right-bottom"
    style="background-color:#E1ECF0; background-image: url('{{ asset('assets/SG-WIWIT-01.svg') }}');">
    <div class="w-full mx-auto lg:max-w-6xl">
        <div
            class="relative flex flex-col w-full p-4 md:items-center md:justify-between md:flex-row md:px-6 lg:px-14 xl:px-0">
            <!-- Hamburger -->
            <div class="flex flex-row items-center justify-between lg:justify-start">
                <button id="menu-toggle"
                    class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-black focus:outline-none focus:text-black md:hidden">
                    <svg id="menu-open-icon" class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="menu-close-icon" class="w-6 h-6 hidden" stroke="currentColor" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <nav id="navbar" class="items-center flex-grow hidden md:pb-0 md:block md:justify-between">
                <div class="flex-col items-center flex-grow hidden md:pb-0 md:flex md:justify-between md:flex-row">
                    <div class="hidden md:flex">
                        <a href="#footer" class="py-2 text-sm md:mr-4 text-[#435660] hover:text-[#67BD65]">OFFICES</a>
                        <a href="{{ route('portofolio.index') }}"
                            class="py-2 text-sm text-[#435660] hover:text-[#67BD65]">CAREERS</a>
                    </div>

                    <div class="hidden md:inline-flex items-center gap-2 list-none lg:ml-auto">
                        <a target="_blank"
                            class="flex items-center px-2 py-2 text-sm text-[#435660] lg:px-0 md:px-3 hover:text-[#67BD65]"
                            href="https://wa.me/{{ \App\Models\ContactPageSetting::first()->contact_number }}">
                            <ion-icon name="call" class="w-4 h-4 mr-2"></ion-icon>
                            {{ \App\Models\ContactPageSetting::first()->contact_number ?? '-' }}
                        </a>
                        <a target="_blank"
                            class="flex items-center px-2 py-2 text-sm text-[#435660] lg:px-6 md:px-3 hover:text-[#67BD65]"
                            href="mailto:{{ \App\Models\ContactPageSetting::first()->personal_email }}">
                            <ion-icon name="mail" class="w-4 h-4 mr-2"></ion-icon> Email Me
                        </a>
                    </div>

                    <div class="items-center gap-1 lg:ml-auto hidden md:inline-flex">
                        @php
                            $socialMedias = \App\Models\SocialMedia::all();
                        @endphp
                        @foreach ($socialMedias as $data)
                            <span class="gap-3 mx-auto">
                                <a href="{{ $data->url }}" target="_blank"
                                    class="flex items-center text-[#435660] hover:text-[#67BD65]">
                                    <span class="sr-only">{{ $data->name }}</span>
                                    <ion-icon class="w-4 h-4 mr-2" name="{{ $data->icon }}" role="img"
                                        aria-label="logo {{ $data->name }}"></ion-icon>
                                </a>
                            </span>
                        @endforeach
                    </div>
                </div>

                <hr class="h-px bg-[#DAE6EB] border-0 my-3 hidden md:block mb-6">

                <div class="flex flex-col py-5 px-2 md:px-0 md:py-0 md:justify-between md:flex-row">
                    <a class="{{ request()->is('/') ? 'text-green-600 border-primary font-medium' : 'border-transparent' }} py-4 px-2 text-sm text-[#435660] transition ease-in-out transform border-b-2 border-t-2 duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-[#67BD65] hover:text-[#67BD65]"
                        href="/">Home</a>
                    <a class="{{ request()->routeIs('portofolio.index') ? 'text-green-600 border-primary font-medium' : 'border-transparent' }} py-4 px-2 text-sm text-[#435660] transition ease-in-out transform border-b-2 border-t-2 duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-[#67BD65] hover:text-[#67BD65]"
                        href="{{ route('portofolio.index') }}">Portfolio</a>
                    <a class="{{ request()->routeIs('events.index') ? 'text-green-600 border-primary font-medium' : 'border-transparent' }} py-4 px-2 text-sm text-[#435660] transition ease-in-out transform border-b-2 border-t-2 duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-[#67BD65] hover:text-[#67BD65]"
                        href="{{ route('events.index') }}">Events</a>
                    <a class="{{ request()->routeIs('material.index') ? 'text-green-600 border-primary font-medium' : 'border-transparent' }} py-4 px-2 text-sm text-[#435660] transition ease-in-out transform border-b-2 border-t-2 duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-[#67BD65] hover:text-[#67BD65]"
                        href="{{ route('material.index') }}">Material</a>
                    <a class="{{ request()->routeIs('blog.index') ? 'text-green-600 border-primary font-medium' : 'border-transparent' }} py-4 px-2 text-sm text-[#435660] transition ease-in-out transform border-b-2 border-t-2 duration-650 focus:outline-none focus:shadow-none md:my-0 hover:border-[#67BD65] hover:text-[#67BD65]"
                        href="{{ route('blog.index') }}">Blog</a>
                    <div>
                        <a href="{{ route('contact-me.index') }}">
                            <button
                                class="{{ request()->routeIs('contact-me.index') ? 'text-green-600 border-primary font-medium' : 'border-transparent' }} inline-flex items-center justify-center text-sm px-8 py-3.5 mt-4 md:mt-0 rounded-full text-white bg-[#67BD65] hover:bg-dark focus:outline-none focus:text-white">Get
                                Consultation</button>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

@push('js-internal')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const menuOpenIcon = document.getElementById('menu-open-icon');
            const menuCloseIcon = document.getElementById('menu-close-icon');
            const navbar = document.getElementById('navbar');

            menuToggle.addEventListener('click', function() {
                navbar.classList.toggle('hidden');
                navbar.classList.toggle('flex');
                menuOpenIcon.classList.toggle('hidden');
                menuCloseIcon.classList.toggle('hidden');
            });
        });
    </script>
@endpush
