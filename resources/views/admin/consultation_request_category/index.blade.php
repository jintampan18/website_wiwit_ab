<x-app-layout>
    @section('title', 'Consultation Request Category')
    <div class="relative overflow-x-auto rounded-lg custom-box-shadow  overflow-y-auto">
        <div class="md:flex items-center space-y-3 md:space-y-0 justify-between p-4 bg-white ">
            <div>
                <button data-modal-target="default-modal" data-modal-toggle="default-modal" onclick="btnAdd()"
                    class="block transition-all transform hover:scale-105 duration-300 text-white bg-dark hover:bg-dark focus:ring-4 focus:outline-none focus:ring-dark font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    type="button">
                    Add Consultation Request Category
                </button>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search-users"
                class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-72 md:w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 focus:outline-none"
                placeholder="Search...">
                </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($consultationRequestCategories as $data)
                    <tr class="even:bg-white odd:bg-blue-50 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $data->name }}
                        </th>
                        <td class="px-6 py-4 space-x-3">
                            <ion-icon name="create" title="edit" class="transition-all transform hover:scale-105 duration-300 w-6 h-6 text-blue-600 cursor-pointer"
                                data-modal-target="default-modal" data-modal-toggle="default-modal"
                                onclick="btnEdit('{{ $data->id }}')"></ion-icon>
                            <ion-icon name="trash-bin" title="delete" class="transition-all transform hover:scale-105 duration-300 w-6 h-6 text-red-600 cursor-pointer"
                                data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                onclick="$('#popup-modal form').attr('action', '{{ route('admin.consultation-request-category.destroy', $data->id) }}')"></ion-icon>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
                        Add Consultation Request Category
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.consultation-request-category.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <x-input id="name" type="text" label="Name" required name="name" value=""
                            placeholder="" class="" />

                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="submit"
                            class="text-white transition-all transform hover:scale-105 duration-300 bg-dark hover:bg-dark focus:ring-4 focus:outline-none focus:ring-dark font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                        <button data-modal-hide="default-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Decline</button>
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
                            cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('js-internal')
    <script>
        $(document).ready(function () {
            $('#table-search-users').on('input', function () {
                var searchText = $(this).val().toLowerCase();
                $('tbody tr').each(function () {
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
            function btnAdd() {
                $('#default-modal form').trigger('reset');
                let url = "{{ route('admin.consultation-request-category.store') }}";
                $('#default-modal form').attr('action', url);
            }

            function btnEdit(id) {
                let url = "{{ route('admin.consultation-request-category.update', ':id') }}";
                url = url.replace(':id', id);
                $.ajax({
                    url: "{{ route('admin.consultation-request-category.show', ':id') }}".replace(':id', id),
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        $('#default-modal form').attr('action', url);
                        $('#default-modal form').trigger('reset');
                        $('#default-modal form #name').val(data.name);

                    },
                    error: function() {
                        Swal.fire(
                            'Error!',
                            'Something went wrong!.',
                            'error'
                        )
                    }
                });
            }

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
    @endpush
</x-app-layout>
