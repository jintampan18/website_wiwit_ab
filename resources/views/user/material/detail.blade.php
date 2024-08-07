<x-guest-layout>
    @section('title', 'Material')
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fancybox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    {{-- Hero --}}
    <section class="relative flex items-center w-full p-0 bg-[#E1ECF0]"
        style="background-color:#E1ECF0; background-image: url('<?= asset('assets/SG-WIWIT-01.svg') ?>'); background-size: cover; background-position: right top">
        <div class="relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="flex justify-end">
                {{-- <img src="{{ Storage::url($material->thumbnail) }}" alt="Thumbnail"
                    class="hidden lg:sm:block max-w-sm max-h-64 h-auto object-cover mb-4 mr-8 justify-center items-center border border-gray-300 rounded-lg shadow-md transition-all transform hover:scale-110 duration-300 cursor-pointer landscape-thumbnail"> --}}
                <div class="text-bootom-scroll container flex flex-col items-center md:lg:items-start">
                    <p class="text-center sm:text-left 2xl:text-lg text-primary font-light">
                        <span>{{ $material->materialCategory->name }}</span>
                        <span class="text-gray-500">{{ ' ' . '-' . ' ' . $material->created_at->diffForHumans() }}</span>
                    </p>
                    <p class="text-center sm:text-left text-2xl font-bold tracking-tight text-dark sm:text-5xl">
                        {{ $material->title }}<span class="text-primary">.</span>
                    </p>
                    <p
                        class="text-center sm:text-left mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light">
                        {{ $material->author }}
                    </p>
                </div>
                {{-- <img src="{{ Storage::url($material->thumbnail) }}" alt="Thumbnail"
                    class="hidden lg:sm:block max-w-sm mt-6 max-h-80 h-auto object-cover mb-4 mr-8 justify-center items-center border border-gray-300 rounded-lg shadow-md transition-all transform hover:scale-110 duration-300 cursor-pointer landscape-thumbnail"> --}}

                @if ($material->type == 'materi')
                    <div class="text-right-scroll">
                        {{-- <img src="{{ Storage::url($material->thumbnail) }}" alt="Thumbnail" --}}
                        <img src="{{ asset('storage/materials/' . $material->thumbnail) }}" alt="Thumbnail"
                            class="hidden lg:sm:block max-w-sm mt-4 max-h-80 h-auto object-cover mb-4 mr-2 justify-center items-center border border-gray-300 rounded-lg shadow-md transition-all transform hover:scale-110 duration-300 cursor-pointer landscape-thumbnail"
                            data-fancybox="gallery"
                            data-src="{{ asset('storage/materials/' . $material->thumbnail) }}" />
                    </div>
                @endif
            </div>
        </div>
    </section>


    {{-- Learning Resources --}}
    <section class="relative flex items-center w-full">
        <div
            class="text-bootom-scroll relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="relative items-center m-auto lg:inline-flex sm:order-first col-span-2">
                    <div class="text-center lg:text-left">
                        <div class="text-right-scroll ">
                            @if ($material->type == 'materi')
                                <img src="{{ asset('storage/materials/' . $material->thumbnail) }}" alt="Thumbnail"
                                    class="md:lg:hidden sm:block w-80 h-auto mx-auto lg:mx-0 justify-center items-center border border-gray-300 rounded-lg shadow-md mb-4 transition-all transform hover:scale-110 duration-300"
                                    data-fancybox="gallery"
                                    data-src="{{ asset('storage/materials/' . $material->thumbnail) }}" />
                            @endif
                        </div>
                        <div>
                            <p class="text-xl mt-3 font-bold tracking-tight text-dark text-justify">
                                Tahun Terbit
                            </p>
                            <p
                                class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light text-justify">
                                {{ $material->year }}
                            </p>
                            @if ($material->type == 'materi')
                                <!-- Hanya tampilkan Jenis Materi jika materinya adalah materi -->
                                <p class="text-xl mt-3 font-bold tracking-tight text-dark text-justify">
                                    Jenis Materi
                                </p>
                                <p
                                    class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light text-justify">
                                    {{ ucfirst($material->type) }}
                                </p>
                            @endif
                            @if ($material->type == 'jurnal')
                                <p class="text-xl mt-3 font-bold tracking-tight text-dark text-justify">
                                    Jurnal
                                </p>
                                <p
                                    class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light text-justify">
                                    {{ $material->jurnal }}
                                </p>
                                <p class="text-xl mt-3 font-bold tracking-tight text-dark text-justify">
                                    Volume
                                </p>
                                <p
                                    class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light text-justify">
                                    {{ $material->volume }}
                                </p>
                                <p class="text-xl mt-3 font-bold tracking-tight text-dark text-justify">
                                    Nomor
                                </p>
                                <p
                                    class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light text-justify">
                                    {{ $material->nomor }}
                                </p>
                                <p class="text-xl mt-3 font-bold tracking-tight text-dark text-justify">
                                    Halaman
                                </p>
                                <p
                                    class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light text-justify">
                                    {{ $material->halaman }}
                                </p>
                                <p class="text-xl mt-3 font-bold tracking-tight text-dark text-justify">
                                    Penerbit
                                </p>
                                <p
                                    class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light text-justify">
                                    {{ $material->penerbit }}
                                </p>
                            @endif
                            <p class="text-xl mt-3 font-bold tracking-tight text-dark text-justify">
                                Abstrak
                            </p>
                            <p
                                class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light text-justify">
                                {{ $material->description }}
                            </p>
                            @if ($material->type == 'materi')
                                <a href="{{ route('material.download', $material->id) }}">
                                    <button id="run-filter" name="run-filter"
                                        class="inline-flex items-center justify-center text-xl mt-5 px-8 py-2 rounded-full text-white bg-primary hover:bg-[#15cc43] font-medium">
                                        Download E-Book
                                    </button>
                                </a>
                            @elseif($material->type == 'jurnal')
                                @php
                                    $material_link = $material->link;
                                @endphp
                                <a href="{{ $material->link }}" target="_blank">
                                    <button id="run-filter" name="run-filter"
                                        class="inline-flex items-center justify-center text-xl mt-5 px-8 py-2 rounded-full text-white bg-primary hover:bg-[#15cc43] font-medium">
                                        Download Artikel
                                    </button>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @push('js-internal')
        <script>
            $(document).ready(function() {
                // Inisialisasi Fancybox
                $('[data-fancybox="images"]').fancybox({
                    // Opsi tambahan sesuai kebutuhan Anda
                });
            });
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
