<x-guest-layout>
    @section('title', 'Material')
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
                                Material
                            </p>
                            <p class="text-2xl font-bold tracking-tight text-dark sm:text-5xl">
                                Empower yourself <br>for success<span class="text-primary">.</span>
                            </p>
                            <p class="mx-auto lg:mx-0 mt-3 text-xl tracking-tight leading-8 text-gray-600 font-light">
                                Unlock your success potential with our transformative business courses
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Learning Resources --}}
    <section class="relative flex items-center w-full">
        <div class="relative items-center w-full px-5 pt-20 py-20 mx-auto md:px-12 lg:px-14 xl:px-0 max-w-7xl">
            <div class="mb-8 flex flex-col lg:flex-row items-start lg:items-center">
                <p class="text-left-scroll text-3xl 2xl:text-3xl font-semibold text-dark">
                    Discover the best learning resources<span class="text-primary">.</span>
                </p>

                <div class="text-right-scroll search-wrapper lg:ml-auto mt-8 lg:mt-0">
                    <div class="mb-0">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Cari Buku
                            Disini</label>
                            <div class="flex">
                                <input type="text" id="title" name="title"
                                class="bg-gray-100 border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:bg-white focus:border-primary"
                                placeholder="Search Buku">
                                <button id="run-search" name="run-search" type="submit"
                                class="ml-2 px-2 md:px-4 py-2 bg-primary hover:bg-[#15cc43] text-sm md:font-medium text-white rounded-md focus:outline-none">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="block md:grid md:grid-cols-6 md:gap-8 mt-16">
                <div class="text-left-scroll block mb-8 md:col-span-2 lg:col-span-1">
                    <div class="mb-6 ">
                        <label for="year" class="block mb-2 text-sm font-medium text-dark">Year</label>
                        <select name="year" id="year"
                            class="bg-gray-50 border-none text-dark text-sm rounded-lg focus:outline-none min-w-full py-3">
                            <option id="" name="" value="" selected>Any year</option>
                            @for ($i = 2023; $i >= 2000; $i--)
                                <option id="{{ $i }}" name="{{ $i }}" value="{{ $i }}">
                                    {{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="category" class="block mb-2 text-sm font-medium text-dark">Category</label>
                        <select name="category" id="category"
                            class="bg-gray-50 border-none text-dark text-sm rounded-lg focus:outline-none min-w-full py-3">
                            <option value="" selected>All</option>
                            @foreach ($materialCategories as $data)
                                <option id="{{ $data->id }}" name="{{ $data->id }}" value="{{ $data->id }}">
                                    {{ $data->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button id="run-filter" name="run-filter"
                        class="inline-flex w-full items-center justify-center text-sm px-8 py-3.5 rounded-full text-white bg-dark hover:bg-[#435660] font-medium">
                        Run filter
                    </button>
                </div>

                <div class="text-bootom-scroll col-span-4 lg:col-span-5">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8" id="material-list">
                        @foreach ($materialsPaginated as $data)
                            <div class="bg-white shadow-sm p-4 rounded-xl border border-gray-100">
                                <div class="flex gap-3 items-start">
                                    <div>
                                        <span
                                            class="text-sm text-primary font-bold">{{ $data->materialCategory->name }}</span>
                                        <span
                                            class="text-sm text-gray-500">{{ ' ' . '-' . ' ' . $data->created_at->diffForHumans() }}</span>
                                        <p class="text-md font-bold text-dark mt-3"> {{ $data->title }} </p>
                                        <p class="text-sm font-normal text-gray-500 mb-3">
                                            {{ $data->author }}
                                        </p>
                                        <p class="text-sm font-normal text-gray-500 mb-5 text-justify">
                                            {{ Str::limit($data->description, 200) }}
                                        </p>
                                        <div class="flex justify-between items-center">
                                            <a href="{{ route('user.material.detail', $data->id) }}">
                                                <button
                                                    class="detail-button inline-flex items-center justify-center text-sm px-8 py-2 rounded-full text-white bg-primary hover:bg-[#15cc43] font-medium">
                                                    Detail Materi
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Tampilkan tautan navigasi halaman -->
                    <div class="mt-8">
                        {{ $materialsPaginated->links() }}
                    </div>
                </div>

            </div>
        </div>
    </section>

    @push('js-internal')
        <script>
            $(document).on('click', '#run-search', function() {
                var title = $('#title').val(); // Ambil nilai pencarian nama

                $.ajax({
                    url: "{{ route('material.search') }}",
                    type: "GET",
                    data: {
                        title: title
                    },
                    success: function(data) {
                        if (data.trim() === '') {
                            // Jika data kosong, tampilkan pesan "not found" di tengah
                            $('#material-list').html(
                                `<div class="flex items-center justify-center h-40"><div class="text-gray-600">Data Not found</div></div>`
                            );
                        } else {
                            // Jika data tidak kosong, tampilkan data yang ditemukan
                            $('#material-list').html(data);
                        }
                        $('#title').val('');
                    },
                    error: function() {
                        // Jika terjadi kesalahan saat melakukan permintaan AJAX, tampilkan pesan error
                        $('#material-list').html(
                            `<div class="text-red-600 text-center">Error fetching data</div>`);
                    }
                });
            });

            $(document).on('click', '#run-filter', function() {
                var year = $('#year').val();
                var category = $('#category').val();
                var download = $('#download').val();

                $.ajax({
                    url: "{{ route('material.filter') }}",
                    type: "GET",
                    data: {
                        year: year,
                        category: category,
                        download: download,
                    },
                    success: function(data) {
                        if (data.trim() === '') {
                            // Jika data kosong, tampilkan pesan "not found" di tengah
                            $('#material-list').html(
                                `<div class="flex items-center justify-center h-40"><div class="text-gray-600">Data Not found</div></div>`
                            );
                        } else {
                            // Jika data tidak kosong, tampilkan data yang ditemukan
                            $('#material-list').html(data);
                        }
                        $('#year').val('');
                        $('#category').val('');
                    },
                    error: function() {
                        // Jika terjadi kesalahan saat melakukan permintaan AJAX, tampilkan pesan error
                        $('#material-list').html(
                            `<div class="text-red-600 text-center">Error fetching data</div>`
                        );
                    }
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
