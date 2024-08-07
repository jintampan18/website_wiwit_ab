<x-guest-layout>
    @section('title', $blog->title)
    <section>
        <section class="relative flex items-center w-full bg-[#E1ECF0]">
            <div
                class="text-bootom-scroll flex items-center justify-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
                <div class="relative flex-col items-start m-auto align-middle">
                    <div class="relative items-center m-auto lg:inline-flex sm:order-first col-span-2">
                        <div class="text-center lg:text-center max-w-2xl">
                            <div>
                                <p class="2xl:text-sm  text-primary font-semibold">
                                    {{ $blog->blogCategory->title }}
                                </p>
                                <h1 class="mb-8 text-xl font-semibold tracking-tight text-dark md:text-2xl">
                                    {{ $blog->title }}
                                </h1>
                                <p class="text-sm font-semibold text-dark">
                                    {{ $blog->author }}
                                </p>
                                <p class="text-sm font-normal text-gray-500">
                                    {{ date('d M Y', strtotime($blog->published_date)) }}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-4xl mx-auto">
            <div class="text-bootom-scroll px-8 mx-auto transform -translate-y-10 sm:-translate-y-14">
                <img id="main-image" class="rounded-xl w-full ces mx-auto md:max-h-[500px] object-cover object-center"
                    src="{{ $blog->thumbnail ? asset('storage/blogs/thumbnail/' . $blog->thumbnail) : asset('assets/default.png') }}"
                    alt="">
            </div>

            <div class="text-bootom-scroll max-w-4xl mx-auto px-8 mt-4">
                <div class="leading-relaxed text-justify -tracking-tight text-sm 2xl:text-md"
                    style="text-align: justify">
                    {!! $blog->content !!}
                </div>
            </div>

            <div
                class="text-left-scroll mb-8 md:mb-14 flex items-center justify-center px-8 w-full mt-6 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-4xl">
                <div class="flex items-center justify-center mt-14">
                    <a href="{{ route('blog.index') }}"
                        class="flex items-center justify-center text-sm px-8 py-3.5 mt-4 md:mt-0 rounded-full text-grey-500 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:text-dark">
                        Kembali ke blog
                    </a>
                </div>
            </div>
        </section>

        @push('js-internal')
            <script>
                $(document).ready(function() {
                    // remove style in image except main image
                    $('img').not('#main-image').removeAttr('style');
                    // style img in content
                    $('img').not('#main-image, .related-image').addClass(
                        'blur-mode h-full mx-auto object-cover object-center border border-gray-200 rounded-xl'
                    );
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
