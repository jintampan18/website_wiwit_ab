<x-guest-layout>
    @section('title', 'Portfolio')
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    {{-- Hero --}}
    <section class="relative flex items-center w-full bg-[#E1ECF0]"
        style="background-color:#E1ECF0; background-image: url('<?= asset('assets/SG-WIWIT-01.svg') ?>'); background-size: cover; background-position: right top">
        <div
            class="relative md:flex md:justify-center lg:block items-center w-full px-5 mt-14 mb-16 md:pb-0 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="relative flex-col items-start m-0 align-middle">
                <div class="relative items-center gap-12 m-auto lg:inline-flex sm:order-first">
                    <div class="text-bootom-scroll max-w-xl text-center lg:text-left">
                        <div>
                            <p class="text-sm 2xl:text-lg text-primary font-light">
                                Portfolio
                            </p>
                            <p class="text-2xl font-bold tracking-tight text-dark sm:text-5xl">
                                Transforming your business into
                                a breakthrough at once<span class="text-primary">.</span>
                            </p>
                            <p
                                class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-[#435660] font-light max-w-xs">
                                Unleash your true potential with a reliable business coach
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Work Experience versi mobile --}}
    <section class="md:hidden">
        <div class="text-top-scroll relative items-center w-full py-8 mx-auto text-center">
            <p class="text-2xl font-semibold text-dark">
                My Work Experience<span class="text-primary">.</span>
            </p>
        </div>

        {{-- component --}}
        <div class="flex justify-start items-start">
            <div class="grid grid-cols-1">
                <div class="">
                    @foreach ($experiences as $data)
                        <div class="container mx-auto max-w-full min-w-full">
                            <div class="flex justify-center items-center">
                                <div class="grid grid-cols-1 text-center w-16">
                                    <div class="flex justify-center items-center  text-top-scroll">
                                        <span
                                            class="h-[80px] w-[3px] bg-gradient-to-t from-5% to-80% rounded-full from-emerald-500 to-emerald-100"></span>
                                    </div>
                                    <span class="text-emerald-500 text-xl text-top-scroll">
                                        <ion-icon name="radio-button-on-outline"></ion-icon>
                                    </span>
                                </div>
                            </div>
                            <div class="flex justify-center items-center min-w-max right-timeline">
                                {{-- Left Timeline --}}
                                <div class="py-4 text-center">
                                    <h3 class="mb-3 text-left-scroll font-semibold text-dark text-xl">
                                        {{ $data->company }}, {{ $data->job_type }}</h3>
                                    <p class="text-sm text-right-scroll mt-3 font-normal text-[#757575]">
                                        @if ($data->start_date && $data->end_date)
                                            @if (date('F Y', strtotime($data->start_date)) == date('F Y', strtotime($data->end_date)))
                                                {{ date('F Y', strtotime($data->start_date)) }}
                                            @else
                                                {{ date('F Y', strtotime($data->start_date)) }} -
                                                {{ date('F Y', strtotime($data->end_date)) }}
                                            @endif
                                        @elseif ($data->start_date && !$data->end_date)
                                            {{ date('F Y', strtotime($data->start_date)) }} -
                                            present
                                        @else
                                            -
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <div class="flex justify-center items-center">
                                {{-- <div
                        class="z-20 flex items-center order-1 bg-white border-2 w-10 h-10 rounded-full relative">
                                    <div
                                        class=" bg-dark w-5 h-5  rounded-full flex items-center justify-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    </div>
                                </div> --}}
                                <!-- right timeline -->
                                <div class="text-center p-3">
                                    <div
                                        class="border-collapse shadow-md border-t border-1 mb-4 shadow-emerald-100 rounded-lg border-1 p-4">
                                        <h3 class="mb-3 text-left-scroll font-semibold text-dark text-xl">
                                            {{ $data->position }}</h3>
                                        <p
                                            class="text-sm mb-4 text-right-scroll mt-3 text-center font-normal text-[#757575]">
                                            {{ $data->description }}</p>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>


    {{-- my work experience versi tab + --}}
    <section class="hidden md:block">
        <div
            class="text-top-scroll relative items-center w-full mt-16 px-5 py-8 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-lg text-center">
            <p class="text-2xl 2xl:text-3xl font-semibold text-dark">
                My Work Experience<span class="text-primary">.</span>
            </p>
        </div>

        <div>
            <!-- component -->
            <div class="container mx-auto max-w-6xl w-full h-full">
                <div class="relative wrap overflow-hidden p-10 h-full">
                    <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border" style="left: 50%">
                    </div>
                    <div>
                        @foreach ($experiences as $data)
                            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                                {{-- Left Timeline --}}
                                <div class="text-left-scroll order-1 w-5/12 px-6 py-4 item">
                                    <h3 class="mb-3 font-semibold text-dark text-xl">
                                        {{ $data->company }}, {{ $data->job_type }}</h3>
                                    <p class="text-sm mt-3 font-normal leading-snug tracking-wide text-[#757575]">
                                        @if ($data->start_date && $data->end_date)
                                            @if (date('F Y', strtotime($data->start_date)) == date('F Y', strtotime($data->end_date)))
                                                {{ date('F Y', strtotime($data->start_date)) }}
                                            @else
                                                {{ date('F Y', strtotime($data->start_date)) }} -
                                                {{ date('F Y', strtotime($data->end_date)) }}
                                            @endif
                                        @elseif ($data->start_date && !$data->end_date)
                                            {{ date('F Y', strtotime($data->start_date)) }} -
                                            present
                                        @else
                                            -
                                        @endif
                                    </p>
                                </div>
                                <div
                                    class="z-20 flex items-center order-1 bg-white border-2 w-10 h-10 rounded-full relative">
                                    <div
                                        class=" bg-dark w-5 h-5  rounded-full flex items-center justify-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    </div>
                                </div>
                                <!-- right timeline -->
                                <div class="text-right-scroll order-1 w-5/12 px-6 py-4">
                                    <h3 class="mb-3 font-semibold text-dark text-xl">{{ $data->position }}</h3>
                                    <p class="text-sm mt-3 font-normal leading-snug tracking-wide text-[#757575]">
                                        {{ $data->description }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </section>


    {{-- My Latest work --}}
    <section class="relative flex items-center w-full bg-[#F9FAFC]">
        <div class="relative w-full px-5 mt-0 mb-16 md:pb-0 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-6xl">
            <div class="flex flex-col items-start justify-between lg:flex-row">
                <div class="max-w-xl mt-16 text-left">
                    <div class="text-bootom-scroll">
                        <p class="text-2xl 2xl:text-3xl font-semibold text-dark">
                            My Latest Work<span class="text-primary">.</span>
                        </p>
                        <p class="font-light text-[#757575] text-sm">
                            Perfect solution for digital transformation
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-bootom-scroll">
                <div class="items-center mt-14">
                    <div class="justify-center w-full max-auto">

                        {{-- TAB PC --}}
                        <div class="hidden md:block">
                            <div class="flowbite-tabs">
                                <div class="flowbite-tabs-navigation mb-8">
                                    <div class="flex justify-between">
                                        @foreach ($workCategories as $index => $data)
                                            <a href="#"
                                                class="text-sm shadow-md bg-[#67BD65] text-black font-bold rounded-3xl w-64  text-center py-3 px-4 mr-4 work-tab transition-transform duration-300 hover:scale-105"
                                                data-tab="tab{{ $index + 1 }}">
                                                {{ $data->name }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- TAB MOBILE --}}
                        <div class="md:hidden">
                            <div class="flowbite-tabs">
                                <div class="flowbite-tabs-navigation grid grid-cols-2 gap-4">
                                    @foreach ($workCategories as $index => $data)
                                        <a href="#"
                                            class="text-sm shadow-md bg-[#67BD65] text-black font-bold rounded-3xl w-full text-center py-3 px-4 mb-4 work-tab transition-transform duration-300 hover:scale-105"
                                            data-tab="tab{{ $index + 1 }}">
                                            {{ $data->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                        {{-- TAB MOBILE --}}
                        <!-- Show tab content -->
                        <div class="flowbite-tabs-content py-4 mt-10 md:hidden">
                            @foreach ($workCategories as $index => $category)
                                <div id="tab{{ $index + 1 }}" class="work-content text-gray-500"
                                    style="display: none;">
                                    <!-- Show card view -->
                                    @if ($category->name !== 'Professional' && $category->name !== 'Reviewer')
                                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"
                                            id="course-list">
                                            {{-- Sort data by end_date --}}
                                            @php
                                                $sortedWorks = $category->works->sortByDesc(function ($work) {
                                                    return $work->end_date ?? $work->date;
                                                });
                                            @endphp

                                            @if ($sortedWorks->isEmpty())
                                                <div
                                                    class="border rounded-lg overflow-hidden shadow-md bg-white p-4 mb-4">
                                                    <h5 class="text-md font-medium text-gray-900">
                                                        {{ $category->name }}
                                                    </h5>
                                                    <img src="{{ asset('assets/disable.png') }}" alt="Category Image"
                                                        class="w-10 mt-2">
                                                    <p class="text-sm text-gray-500 mt-4">
                                                        No data available</p>
                                                </div>
                                            @endif

                                            @foreach ($sortedWorks as $data)
                                                @if ($data->photo !== null)
                                                    <div
                                                        class="border rounded-lg overflow-hidden shadow-md shadow-gray-300 bg-white">
                                                        <div class="p-2 rounded-lg">
                                                            <img class="object-cover w-full h-44 max-h-44 rounded-xl overflow-hidden transition-all transform duration-300 hover:scale-90 cursor-pointer"
                                                                src="{{ asset('storage/works/' . $data->photo) }}"
                                                                alt="" data-fancybox=""
                                                                data-src="{{ asset('storage/works/' . $data->photo) }}" />
                                                        </div>
                                                        <div class="p-5">
                                                            <div class="flex justify-between items-center mb-3">
                                                                <h5
                                                                    class="text-md font-bold text-gray-900 line-clamp-2 overflow-hidden hover:line-clamp-none">
                                                                    {{ $data->title }}
                                                                </h5>
                                                            </div>
                                                            <p
                                                                class="text-sm text-gray-500 line-clamp-3 overflow-hidden hover:line-clamp-none">
                                                                {{ $data->description }}
                                                            </p>
                                                            <ul class="mt-2 space-y-1 text-sm text-gray-500">
                                                                <li class="flex items-center space-x-3">
                                                                    <ion-icon name="calendar"
                                                                        class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                                                    <span>{{ date('d F Y', strtotime($data->date)) }}</span>
                                                                </li>
                                                                <li class="flex items-center space-x-3">
                                                                    <ion-icon name="navigate"
                                                                        class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                                                    <span>{{ $data->location }}</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif

                                    <!-- Show list view -->
                                    @if ($category->name === 'Professional' || $category->name === 'Reviewer')
                                        <div class="py-4 pt-2 mt-8 mx-auto content">
                                            <!-- Show tab content -->
                                            <div x-show="tab === 'tab{{ $index + 1 }}'">
                                                <!-- Show list view -->
                                                @if ($category->works->isEmpty())
                                                    {{-- No data available --}}
                                                    <div
                                                        class="border rounded-lg overflow-hidden shadow-md bg-white p-4 mb-4">
                                                        <h5 class="text-md font-medium text-gray-900">
                                                            {{ $category->name }}
                                                        </h5>
                                                        <img src="{{ asset('assets/disable.png') }}"
                                                            alt="Category Image" class="w-10 mt-2">
                                                        <p class="text-sm text-gray-500 mt-4">
                                                            No data available
                                                        </p>
                                                    </div>
                                                @else
                                                    {{-- Sort data by end_date --}}
                                                    @php
                                                        $sortedWorks = $category->works->sortByDesc(function ($work) {
                                                            return $work->end_date ?? $work->date;
                                                        });
                                                    @endphp

                                                    {{-- Show data --}}
                                                    <div
                                                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                                        @foreach ($sortedWorks as $data)
                                                            <div
                                                                class="border rounded-lg overflow-hidden shadow-md bg-white p-4">
                                                                <p class="text-lg font-bold text-gray-400">
                                                                    {{ date('Y', strtotime($data->end_date ?? $data->date)) }}
                                                                    @if ($data->end_date)
                                                                        -
                                                                        {{ date('Y', strtotime($data->end_date)) }}
                                                                    @else
                                                                        - present
                                                                    @endif
                                                                </p>
                                                                <p class="text-md mt-2 font-bold text-gray-900">
                                                                    {{ $data->title }}
                                                                </p>
                                                                <p class="text-sm mt-2 text-gray-400">
                                                                    {{ $data->location }}
                                                                </p>
                                                                <p
                                                                    class="text-sm mt-4 from-neutral-950 text-black line-clamp-4 hover:line-clamp-none">
                                                                    {{ $data->description }}
                                                                </p>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            @endforeach
                        </div>

                        {{-- TAB PC --}}
                        <div class="flowbite-tabs-content py-4 mt-8 p-8 mr-8 hidden md:block">
                            @foreach ($workCategories as $index => $category)
                                <div id="tab{{ $index + 1 }}" class="work-content text-gray-500"
                                    style="display: none;">
                                    <!-- Show card view -->
                                    @if ($category->name !== 'Professional' && $category->name !== 'Reviewer')
                                        <div
                                            class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-6">
                                            {{-- Sort data by end_date --}}
                                            @php
                                                $sortedWorks = $category->works->sortByDesc(function ($work) {
                                                    return $work->end_date ?? $work->date;
                                                });
                                            @endphp

                                            @if ($sortedWorks->isEmpty())
                                                <div
                                                    class="border rounded-lg overflow-hidden shadow-md bg-white p-4 mb-4">
                                                    <h5 class="text-md font-medium text-gray-900">
                                                        {{ $category->name }}
                                                    </h5>
                                                    <img src="{{ asset('assets/disable.png') }}" alt="Category Image"
                                                        class="w-10 mt-2">
                                                    <p class="text-sm text-gray-500 mt-4">No data available</p>
                                                </div>
                                            @endif

                                            @foreach ($sortedWorks as $key => $data)
                                                @if ($data->photo !== null)
                                                    <div
                                                        class="border container border-gray-300 rounded-lg overflow-hidden shadow-md bg-white flex flex-col md:flex-row @if ($key % 2 == 0) md:flex-row-reverse @endif">
                                                        <div class="w-full p-6 md:w-1/2">
                                                            <img class="object-contain w-full rounded-xl overflow-hidden transition-all transform duration-300 hover:scale-90 cursor-pointer"
                                                                src="{{ asset('storage/works/' . $data->photo) }}"
                                                                alt="" data-fancybox=""
                                                                data-src="{{ asset('storage/works/' . $data->photo) }}" />
                                                        </div>
                                                        <div class="w-full md:w-1/2 p-8">
                                                            <div class="flex justify-between items-center mb-3">
                                                                <h5
                                                                    class="text-md font-bold text-gray-900 line-clamp-2 overflow-hidden hover:line-clamp-none">
                                                                    {{ $data->title }}
                                                                </h5>
                                                            </div>
                                                            <p
                                                                class="text-sm text-justify text-gray-500 line-clamp-3 overflow-hidden hover:line-clamp-none">
                                                                {{ $data->description }}
                                                            </p>
                                                            <ul class="mt-2 space-y-1 text-sm text-gray-500">
                                                                <li class="flex items-center space-x-3">
                                                                    <ion-icon name="calendar"
                                                                        class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                                                    <span>{{ date('d F Y', strtotime($data->date)) }}</span>
                                                                </li>
                                                                <li class="flex items-center space-x-3">
                                                                    <ion-icon name="navigate"
                                                                        class="flex-shrink-0 w-3.5 h-3.5 text-gray-400"></ion-icon>
                                                                    <span>{{ $data->location }}</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif

                                    <!-- Show list view -->
                                    @if ($category->name === 'Professional' || $category->name === 'Reviewer')
                                        <div class="mx-auto content">
                                            <!-- Show tab content -->
                                            @if ($category->works->isEmpty())
                                                {{-- No data available --}}
                                                <div
                                                    class="border rounded-lg overflow-hidden shadow-md bg-white p-4 mb-4">
                                                    <h5 class="text-md font-medium text-gray-900">
                                                        {{ $category->name }}
                                                    </h5>
                                                    <img src="{{ asset('assets/disable.png') }}" alt="Category Image"
                                                        class="w-10 mt-2">
                                                    <p class="text-sm text-gray-500 mt-4">No data available</p>
                                                </div>
                                            @else
                                                {{-- Sort data by end_date --}}
                                                @php
                                                    $sortedWorks = $category->works->sortByDesc(function ($work) {
                                                        return $work->end_date ?? $work->date;
                                                    });
                                                @endphp

                                                {{-- Show data --}}
                                                <div
                                                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                                                    @foreach ($sortedWorks as $data)
                                                        <div
                                                            class="border rounded-lg overflow-hidden shadow-md bg-white p-4 lg:pr-8">
                                                            <p class="text-lg font-bold text-gray-400">
                                                                {{ date('Y', strtotime($data->end_date ?? $data->date)) }}
                                                                @if ($data->end_date)
                                                                    -
                                                                    {{ date('Y', strtotime($data->end_date)) }}
                                                                @else
                                                                    - present
                                                                @endif
                                                            </p>
                                                            <p class="text-md mt-2 font-bold text-gray-900">
                                                                {{ $data->title }}
                                                            </p>
                                                            <p class="text-sm mt-2 text-gray-400">
                                                                {{ $data->location }}
                                                            </p>
                                                            <p
                                                                class="text-sm text-justify mt-4 line-clamp-4 hover:line-clamp-none from-neutral-950 text-black">
                                                                {{ $data->description }}
                                                            </p>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- =================================== --}}


    {{-- Business Insight --}}
    <section class="w-fullflex md:justify-between md:mx-auto md:px-12 lg:px-0 xl:px-0  md:max-w-6xl py-24">
        <div class="grid grid-cols-1 md:grid-cols-2">
            {{-- Haeding --}}
            <div class="md:flex md:justify-start justify-center md:order-1">
                <div class="text-top-scroll md:col-span-3 grid grid-cols-1">
                    <p class="font-bold text-3xl mt-12 md:mt-0 text-black text-center">On The Cutting Edge<span
                            class="text-primary">.</span></p>
                    <p
                        class="font-normal text-center max-w-lg p-2  text-sm md:text-md text-[#757575] mt-3 mx-auto leading-relaxed">
                        With
                        over
                        22 years of
                        valuable experience, my portfolio website reflects a journey marked by continuous growth and
                        expertise in my field. xThese numbers aren't just statistics—they represent a wealth of
                        relationships and a
                        testament to the depth of my company relations, each one contributing to a narrative of success
                        and
                        shared accomplishments.</p>
                </div>
            </div>
            {{-- Penilaian --}}
            <div class="text-top-scroll grid grid-cols-2 p-4 text-center md:order-3">
                <div>
                    <div>
                        <p class="font-semibold text-xl text-dark">22+ </p>
                        <p class="mt-5 text-[#757575] text-normal text-sm">Years Of Experience</p>
                    </div>


                    <div class="mt-12">
                        <p class="font-semibold text-xl text-dark">100+</p>
                        <p class="mt-5 text-[#757575] text-normal text-sm">Client</p>
                    </div>
                </div>
                <div>
                    <div>
                        <p class="font-semibold text-xl text-dark">1,000+</p>
                        <p class="mt-5 text-[#757575] text-normal text-sm">Connections</p>
                    </div>

                    <div class="mt-12">
                        <p class="font-semibold text-xl text-dark">1,000+</p>
                        <p class="mt-5 text-[#757575] text-normal text-sm">Company Relation</p>

                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="text-bootom-scroll flex md:flex-col justify-center items-center order-first md:order-2">
                <img src="{{ asset('assets/business insight.svg') }}" class="w-64 h-64 object-contain"
                    alt="">
            </div>

            {{--  --}}
            <div class="flex justify-center items-center md:order-4 text-bootom-scroll">
                <div class="grid grid-cols-1">
                    <p class="font-semibold text-2xl mt-8 items-start tracking-normal text-dark">
                        Business Insights
                    </p>
                    <p
                        class="mt-4 text-[#757575] text-normal text-sm md:text-md max-w-xs 2xl:max-w-lg md:max-w-md leading-relaxed">
                        Engage with compelling
                        narratives and
                        discover a tapestry of
                        perspectives that
                        inform, entertain, and spark meaningful conversations. Welcome to a corner of the digital realm
                        where ideas take flight. </p>
                </div>
            </div>
        </div>
        <div class="flex justify-center md:justify-end ml-auto lg:mr-12 text-bootom-scroll">
            <a href="{{ route('blog.index') }}"
                class="bg-[#67BD65] text-white rounded-3xl px-9 transition-all transform hover:scale-110 duration-300 text-xs 2xl:text-sm flex items-center w-fit mt-8 py-3.5">
                Read The Blog</a>
        </div>
    </section>

    @push('js-internal')
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Fancybox JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/alpine.js" defer></script>

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

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabs = document.querySelectorAll('.work-tab');
                const contents = document.querySelectorAll('.work-content');

                function setActiveTab(activeTab) {
                    tabs.forEach(tab => {
                        if (tab === activeTab) {
                            tab.classList.add('shadow-gray-300', 'bg-[#67BD65]', 'text-white');
                            tab.classList.remove('text-[#757575]', 'bg-white');
                        } else {
                            tab.classList.remove('shadow-gray-300', 'bg-[#67BD65]', 'text-white');
                            tab.classList.add('text-[#757575]', 'bg-white');
                        }
                    });
                }

                tabs.forEach(tab => {
                    tab.addEventListener('click', function(e) {
                        e.preventDefault();
                        const targetTab = tab.getAttribute('data-tab');

                        contents.forEach(content => {
                            content.style.display = content.id === targetTab ? 'block' : 'none';
                        });

                        setActiveTab(tab);
                    });
                });

                if (tabs.length > 0) {
                    setActiveTab(tabs[0]);
                    contents.forEach(content => {
                        content.style.display = content.id === tabs[0].getAttribute('data-tab') ? 'block' :
                            'none';
                    });
                }
            });
        </script>
    @endpush
</x-guest-layout>
