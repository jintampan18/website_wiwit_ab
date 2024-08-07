<x-guest-layout>
    @section('title', 'Blog')
    {{-- Hero --}}
    <section class="relative flex items-center w-full bg-[#E1ECF0]"
        style="background-color:#E1ECF0; background-image: url('<?= asset('assets/SG-WIWIT-01.svg') ?>'); background-size: cover; background-position: right top">
        <div
            class="text-bootom-scroll relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="relative items-center m-auto lg:inline-flex sm:order-first col-span-2">
                    <div class="text-center lg:text-left">
                        <div>
                            <p class="text-sm 2xl:text-lg text-primary font-light">
                                Blog
                            </p>
                            <p class="text-2xl font-bold tracking-tight text-dark sm:text-5xl">
                                Develop <br>your potential<span class="text-primary">.</span>
                            </p>
                            <p class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light">
                                Discover expert tips and strategies here
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Header Blog --}}
    <section>
        <div class="relative items-center w-full px-5 pt-20 py-16 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="text-left-scroll "
                    onclick="window.location.href='{{ route('blog.detail', $blogs->take(1)->first()->slug) }}'">
                    <img src="{{ $blogs->take(1)->first()->thumbnail
                        ? asset('storage//blogs/thumbnail/' . $blogs->take(1)->first()->thumbnail)
                        : asset('assets/default.png') }}"
                        class="rounded-2xl custom-box-shadow mb-5 border border-gray-100 w-full h-80 object-center object-cover"
                        alt="">
                    <div class="flex gap-3 items-center mb-6">
                        <div
                            class="flex items-center rounded-lg justify-center py-2 px-4 text-xs 2xl:text-sm text-white bg-primary">
                            <span>
                                {{ $blogs->take(1)->first()->blogCategory->name ?? 'Uncategorized' }}
                            </span>
                        </div>
                        <p class="text-xs 2xl:text-sm text-dark"> •
                            {{ $blogs->take(1)->first()->created_at->format('d F Y') }} •
                        <div class="flex items-center gap-2 text-xs 2xl:text-sm text-gray-400"><ion-icon
                                name="eye-outline"></ion-icon>{{ $blogs->take(1)->first()->view_count }}
                        </div>
                        </p>
                    </div>
                    <p
                        class="line-clamp-3 cursor-pointer font-semibold text-xl tracking-tight leading-7 text-dark mb-3">
                        {{ $blogs->take(1)->first()->title }}
                    </p>
                    {{-- <p class="line-clamp-2 text-gray-500 text-xs 2xl:text-sm leading-6 font-light"
                        style="color: slategray !important">
                        {!! Str::limit($blogs->take(1)->first()->content, 100) !!}
                    </p> --}}
                </div>
                <div class="text-right-scroll space-y-6">
                    @php
                        $color = ['bg-purple-600', 'bg-blue-600', 'bg-green-600', 'bg-yellow-600', 'bg-red-600'];
                    @endphp
                    @foreach ($blogs->skip(1)->take(3) as $data)
                        <div class="inline-flex gap-3 items-start"
                            onclick="window.location.href='{{ route('blog.detail', $data->slug) }}'">
                            <div class="flex-shrink-0">
                                <img src="{{ $data->thumbnail ? asset('storage//blogs/thumbnail/' . $data->thumbnail) : asset('assets/default.png') }}"
                                    class="w-28 h-28 object-cover border border-gray-100 rounded-lg bg-gray-50 mr-4"
                                    alt="Blog Thumbnail">
                            </div>
                            <div>
                                <div class="flex gap-3 items-center mb-2">
                                    <div
                                        class="flex items-center rounded-lg justify-center py-2 text-sm px-6 text-white  bg-primary">
                                        <span>
                                            {{ $data->blogCategory->name ?? 'Uncategorized' }}
                                        </span>
                                    </div>
                                    {{-- mobile --}}
                                    <div class="flex md:hidden min-w-max">
                                        <div class="grid grid-cols-1">
                                            <p class="text-xs 2xl:text-sm text-dark">
                                            {{ date('d F Y', strtotime($data->published_date)) }}
                                                <div class="flex items-center gap-2 text-xs 2xl:text-sm text-gray-400">
                                                    <ion-icon name="eye-outline"></ion-icon> {{ $data->view_count }}
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                    {{-- tab + --}}
                                    <div class="md:flex hidden space-x-3">
                                        <p class="text-xs 2xl:text-sm text-dark">
                                            • {{ date('d F Y', strtotime($data->published_date)) }} •
                                            <div class="flex items-center gap-2 text-xs 2xl:text-sm text-gray-400">
                                                <ion-icon name="eye-outline"></ion-icon> {{ $data->view_count }}
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                <div class="cursor-pointer">
                                    <p
                                        class="line-clamp-2 font-semibold text-md hover:line-clamp-none tracking-tight leading-7 text-dark mb-2">
                                        {{ $data->title }}
                                    </p>
                                    {{-- <p class="line-clamp-2 text-gray-500 text-xs 2xl:text-sm leading-6 font-light">
                                        {!! Str::limit($data->content, 100) !!}
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    {{-- Latest Blog --}}
    <section>
        <div
            class="text-bootom-scroll relative items-center w-full px-5 pt-0 py-20 mx-auto md:px-12 lg:px-14 xl:px-24 max-w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8 ml-0 md:ml-0 lg:ml-0 xl:ml-10 2xl:ml-20">
                @foreach ($blogs->skip(4) as $data)
                    <div class="inline-flex gap-3 items-start"
                        onclick="window.location.href='{{ route('blog.detail', $data->slug) }}'">
                        <div class="flex-shrink-0">
                            <img src="{{ $data->thumbnail ? asset('storage//blogs/thumbnail/' . $data->thumbnail) : asset('assets/default.png') }}"
                                class="w-28 h-28 object-cover border border-gray-100 rounded-lg bg-gray-50 mr-4"
                                alt="Blog Thumbnail">
                        </div>
                        <div>
                            <div class="flex gap-3 items-center mb-2">
                                <div
                                    class="flex items-center rounded-lg justify-center py-2 text-sm px-6 text-white bg-primary">
                                    <span>
                                        {{ $data->blogCategory->name ?? 'Uncategorized' }}
                                    </span>
                                </div>
                                <p class="text-xs 2xl:text-sm text-dark">
                                    • {{ date('d F Y', strtotime($data->published_date)) }}
                                </p>
                            </div>
                            <div>
                                <p
                                    class="line-clamp-2 cursor-pointer font-medium text-sm hover:line-clamp-none tracking-tight leading-7 text-dark mb-3">
                                    {{ $data->title }}
                                </p>
                                {{-- <p class="line-clamp-2 text-gray-500 text-xs 2xl:text-sm leading-6 font-light">
                                    {!! Str::limit($data->content, 100) !!}
                                </p> --}}
                                <div class="flex items-center gap-2 text-xs 2xl:text-sm text-gray-400 mt-3">
                                    <ion-icon name="eye-outline"></ion-icon> {{ $data->view_count }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @push('js-internal')
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
