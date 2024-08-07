<x-guest-layout>
    @section('title', 'Events')
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fancybox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <section class="relative flex items-center w-full bg-[#E1ECF0]"
        style="background-color:#E1ECF0; background-image: url('<?= asset('assets/SG-WIWIT-01.svg') ?>'); background-size: cover; background-position: right top">
        <div
            class="text-bootom-scroll relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 md:max-w-6xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="relative items-center m-auto lg:inline-flex sm:order-first col-span-2">
                    <div class="text-center lg:text-left">
                        <div>
                            <p class="text-sm 2xl:text-lg text-primary font-light">
                                Events
                            </p>
                            <p class="text-2xl font-bold tracking-tight text-dark sm:text-5xl">
                                Choose the best training <br> to boost your capacity<span class="text-primary">.</span>
                            </p>
                            <p
                                class="mx-auto lg:mx-0 mt-3 text-sm md:text-xl tracking-tight leading-8 text-gray-600 font-light">
                                Our training is designed to upgrade your hard skills and other related soft skills to
                                elevate your profession
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Events Cards --}}
    <section class="relative flex items-start w-full bg-white mt-8 mb-8 px-8 md:px-0">
        <div id="tab-container" class="w-full mx-auto max-w-6xl">
            {{-- Judul "My Events" --}}
            <div class="max-w-xl mt-16 text-left mb-8">
                <div class="text-bootom-scroll">
                    <p class="text-2xl 2xl:text-3xl font-semibold text-dark">
                        My Events<span class="text-primary">.</span>
                    </p>
                    <p class="font-light text-[#757575] text-sm">
                        Unveiling the Perfect Solution for Digital Transformation
                    </p>
                </div>
            </div>

            {{-- Category --}}
            <div class="text-top-scroll flex justify-evenly text-center gap-y-6 mb-4 py-8 space-x-4">
                <a onclick="changeTab(event, '{{ $eventCategories->first()->id }}')" href="#"
                    class="tab-link shadow-md text-sm bg-[#67BD65] text-[#757575] font-bold rounded-3xl w-80 text-center py-3 px-4 transition-transform duration-300 hover:scale-105"
                    id="tab-link-{{ $eventCategories->first()->id }}">
                    {{ $eventCategories->first()->name }}
                </a>

                @foreach ($eventCategories->skip(1) as $eventCategory)
                    <a onclick="changeTab(event, '{{ $eventCategory->id }}')" href="#"
                        class="tab-link shadow-md text-sm bg-[#67BD65] text-[#757575] font-bold rounded-3xl w-80 text-center py-3 px-4 transition-transform duration-300 hover:scale-105"
                        id="tab-link-{{ $eventCategory->id }}">
                        {{ $eventCategory->name }}
                    </a>
                @endforeach
            </div>

            <div class="text-left-scroll py-0 pt-4 mt-0 content">
                {{-- Events Cards --}}
                @foreach ($eventCategories as $eventCategory)
                    <div class="tab-content" id="tab-content-{{ $eventCategory->id }}">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"
                            id="event-list">
                            @foreach ($eventCategory->events as $event)
                                <div class="border rounded-lg overflow-hidden shadow-md shadow-gray-300 bg-white">
                                    <div class="p-2 rounded-lg">
                                        <a>
                                            <img class="object-cover w-full h-44 max-h-44 rounded-xl overflow-hidden transition-all transform duration-300 hover:scale-90 cursor-pointer"
                                                src="{{ $event->thumbnail ? asset('storage/event/' . $event->thumbnail) : asset('assets/default.png') }}"
                                                alt="" data-fancybox=""
                                                data-src="{{ asset('storage/event/' . $event->thumbnail) }}" />
                                        </a>
                                    </div>
                                    <div class="p-5">
                                        <div class="flex justify-between items-center mb-3">
                                            <h5
                                                class="text-md font-bold text-gray-900 line-clamp-2 overflow-hidden hover:line-clamp-none">
                                                {{ $event->name }}
                                            </h5>
                                        </div>
                                        <p class="text-sm text-gray-500 line-clamp-3">
                                            {{ $event->description }}
                                        </p>
                                        <ul class="mt-2 space-y-1 text-sm text-gray-500">
                                            <li class="flex items-center space-x-3">
                                                <ion-icon name="calendar"
                                                    class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                                <span>
                                                    {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}
                                                </span>
                                            </li>
                                            <li class="flex items-center space-x-3">
                                                <ion-icon name="navigate"
                                                    class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                                <span>
                                                    {{ $event->location }}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @push('js-internal')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const defaultTab = '{{ $eventCategories->first()->id }}';
                changeTab(null, defaultTab);

                // Initialize Fancybox
                $('[data-fancybox="images"]').fancybox({
                    // Additional options as needed
                });
            });

            function changeTab(event, tabId) {
                if (event) {
                    event.preventDefault();
                }

                document.querySelectorAll('.tab-content').forEach(content => {
                    content.style.display = content.id === 'tab-content-' + tabId ? 'block' : 'none';
                });

                document.querySelectorAll('.tab-link').forEach(link => {
                    if (link.id === 'tab-link-' + tabId) {
                        link.classList.add('shadow-gray-300', 'bg-[#67BD65]', 'text-white');
                    } else {
                        link.classList.remove('shadow-gray-300', 'bg-[#67BD65]', 'text-white');
                    }
                });
            }
        </script>

        <script src="https://unpkg.com/scrollreveal"></script>

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
