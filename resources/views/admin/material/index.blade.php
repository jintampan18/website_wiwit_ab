<x-app-layout>
    @section('title', 'Material')

    <div class="relative overflow-x-auto max-w-full rounded-lg custom-box-shadow overflow-y-auto">
        <div class="md:flex max-w-full items-center space-y-3 md:space-y-0 justify-between p-4 bg-white ">
            <div>
                @if ($materialCategories->count() > 0)
                    <a href="{{ route('material.add') }}">
                        <button data-modal-target="default-modal"
                            class="block text-white bg-dark transition-all transform-cpu hover:scale-105 duration-300 focus:ring-4 focus:outline-none focus:ring-dark font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                            type="button">
                            <span class="flex items-center justify-center"><img src="{{ asset('assets/page.png/') }}"
                                    alt="" class="w-5 h-5 flex justify-center items-center mr-2">
                                <p class="animate-pulse">Add material</p>
                            </span>
                        </button>
                    </a>
                @else
                    <a href="{{ route('admin.material-category.index') }}"
                        class="block text-white bg-dark hover:bg-dark focus:ring-4 focus:outline-none focus:ring-dark font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        type="button">
                        Add material category first
                    </a>
                @endif
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                {{-- search --}}
                <input type="text" id="table-search-users"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-72 md:w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 focus:outline-none"
                    placeholder="Search...">
            </div>
        </div>
        <div class="max-w-full  overflow-x-auto">
            <table class="text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 min-w-max">
                            <div class="w-[100px]">
                                Category
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3 min-w-max">
                            <div class="w-[300px]">
                                Title
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="w-[55px]">
                                Type
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="w-[55px]">
                                File
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3 min-w-max">
                            <div class="w-[100px]">
                                Author
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="min-w-max">
                                Download count
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="min-w-max">
                                Tahun Terbit
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="min-w-max">
                                Thumbnail
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="material-table-body">
                    @foreach ($materialsPaginated as $data)
                        <tr class="border-b even:bg-white odd:bg-blue-50">
                            <th scope="row" class="px-6 py-4 min-w-max font-medium text-gray-900 whitespace-nowrap">
                                <div class="w-[100px]">
                                    {{ $data->materialCategory->name }}
                                </div>
                            </th>
                            <td class="px-6 py-4 min-w-max">
                                <div class="w-[300px]">
                                    {{ $data->title }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-[55px]">
                                    <span class="btn btn-info">{{ $data->type }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-[55px]">
                                    @if (isset($data->file))
                                        <a href="{{ asset('storage/materials/' . $data->file) }}" target="_blank"
                                            class="text-blue-500 flex items-center">
                                            <ion-icon name="cloud-download-outline"
                                                class="w-6 h-6 transition-all transform hover:scale-110 duration-300"></ion-icon>
                                        </a>
                                    @else
                                        -
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 min-w-max">
                                <div class="w-[100px]">
                                    {{ $data->author }}
                                </div>
                            </td>
                            <td class="px-4 py-4 text-center">
                                {{ $data->download_count }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-center">
                                    {{ $data->year }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                {{-- @if (isset($data->thumbnail))
                                    <a href="{{ asset('storage/materials/' . $data->thumbnail) }}" data-fancybox=""
                                        title="show photo">
                                        <img src="{{ asset('storage/materials/' . $data->thumbnail) }}" alt=""
                                            class="w-20 h-20 object-center cursor-pointer object-cover rounded-md"
                                            title="show photo">
                                    </a>
                                @else
                                    -
                                @endif --}}
                                <div class="w-[55px]">
                                    @if (isset($data->thumbnail))
                                        <a href="{{ asset('storage/materials/' . $data->thumbnail) }}" data-fancybox=""
                                            title="show photo">
                                            <img src="{{ asset('storage/materials/' . $data->thumbnail) }}"
                                                alt=""
                                                class="w-20 h-20 object-center cursor-pointer object-cover rounded-md"
                                                title="show photo">
                                        </a>
                                    @else
                                        -
                                    @endif
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex space-x-5 justify-center items-center">
                                    <ion-icon name="create" title="edit"
                                        class="w-6 h-6 hover:animate-pulse text-blue-500 transition-all transform hover:scale-110 duration-300 cursor-pointer"
                                        onclick="window.location.href = '{{ route('admin.material.edit', $data->id) }}'"></ion-icon>
                                    <ion-icon name="trash-bin" title="delete"
                                        class="w-6 h-6 text-red-600 hover:animate-pulse transition-all transform hover:scale-110 duration-300 cursor-pointer"
                                        data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                        onclick="$('#popup-modal form').attr('action', '{{ route('admin.material.destroy', $data->id) }}')">
                                    </ion-icon>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-8">
            {{-- Paginate --}}
            {{ $materialsPaginated->links() }}
        </div>
    </div>

    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-md font-semibold text-gray-900">
                        Add material
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.material.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <x-select id="material_category_id" label="Material Category" required
                            name="material_category_id">
                            @foreach ($materialCategories as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </x-select>
                        <x-input id="title" type="text" label="Title" required name="title"
                            value="" placeholder="" class="" />
                        <x-input id="thumbnail" type="file" label="Thumbnail" required name="thumbnail"
                            value="" placeholder="" class="" />
                        <x-input id="file" type="file" label="File" required name="file"
                            value="" placeholder="" class="" />
                        <x-input id="author" type="text" label="Author" required name="author"
                            value="" placeholder="" class="" />
                        <x-input id="published_date" type="date" label="Published Date" required
                            name="published_date" value="" placeholder="" class="" />
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="submit"
                            class="text-white bg-dark hover:bg-dark focus:ring-4 focus:outline-none focus:ring-dark font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit
                        </button>
                        <button data-modal-hide="default-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Decline
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete modal -->

    <div id="popup-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-md font-normal text-gray-500 ">Are you sure you want to
                        delete this data?</h3>
                    <form action="" method="POST">
                        @csrf
                        <button type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">No,
                            cancel
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Di bagian head -->
    @push('js-internal')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#table-search-users').on('input', function() {
                    var searchText = $(this).val().toLowerCase();
                    $('tbody tr').each(function() {
                        var rowData = $(this).text().toLowerCase();
                        if (rowData.indexOf(searchText) === -1) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    });
                });
            });
        </script>
        <script>
            @this.on('triggerDelete', id => {
                $('#popup-modal form').attr('action', '{{ route('admin.material.destroy', '') }}' + '/' + id);
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- Inisialisasi SweetAlert2 -->
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2500,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
        </script>

        <!-- Script untuk menampilkan Toast jika ada session success -->
        @if (session('success'))
            <script>
                // Panggil fungsi Toast dari SweetAlert2
                Toast.fire({
                    icon: 'success',
                    title: '{{ session('success') }}',
                    background: '#B9FFF8',
                    iconColor: '#0C356A',
                    color: '#0C356A',
                });
            </script>
        @endif
    @endpush
</x-app-layout>
