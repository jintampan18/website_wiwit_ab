<x-app-layout>
    <div class="bg-white p-2 md:p-8 border rounded-md shadow-md w-full">
        <div class="flex items-start justify-between p-4 border-b rounded-t">
            <h3 class="text-md font-semibold text-gray-900">
                Add material
            </h3>
        </div>
        <div class="grid grid-cols-1">
            <form action="{{ route('material.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Modal body -->
                <div class="lg:flex lg:flex-row">
                    <div class="md:basis-1/2 basis-full">
                        <div class="p-2 md:p-6 space-y-6">
                            <x-select id="material_category_id" label="Kategori Materi" required
                                name="material_category_id">
                                <option value="" disabled selected>- - Pilih kategori - -</option>
                                @foreach ($materialCategories as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </x-select>
                            <x-input id="title" type="text" label="Judul Materi" required name="title"
                                value="" placeholder="" class="" />
                            <x-input id="author" type="text" label="Pembuat Materi" required name="author"
                                value="" placeholder="" class="" />
                            <x-input id="year" type="text" label="Tahun Terbit" required name="year"
                                value="" placeholder="" class="" />
                            <x-textarea id="description" label="Deskripsi Materi" required name="description"
                                value="" placeholder="" class="" />
                        </div>
                    </div>
                    <div class="md:basis-1/2 basis-full">
                        <div class="p-6 space-y-6">
                            <div>
                                <label class="block text-gray-600 text-sm font-medium">Jenis Materi</label>
                                <div class="flex space-x-4 py-3">
                                    <input type="radio" id="radioMateri" class="mt-1" name="type" value="materi"
                                        {{ isset($materialCategory) && $materialCategory->name == 'E-Book' ? 'checked' : '' }}
                                        onClick="disabledRadio('radioJurnal', 'E-Book');">
                                    <label for="radioMateri" class="text-md">Materi Biasa</label>

                                    <input type="radio" id="radioJurnal" class="mt-1" name="type" value="jurnal"
                                        {{ isset($materialCategory) && $materialCategory->name == 'Artikel Ilmiah' ? 'checked' : '' }}
                                        onClick="disabledRadio('radioMateri', 'Artikel Ilmiah');">
                                    <label for="radioJurnal" class="text-md">Jurnal Publikasi</label>
                                </div>
                            </div>

                            <div id="materiaInput" class="hidden">
                                <div class="pt-3 md:p-6 space-y-6">
                                    <x-input id="file" type="file" label="File" required name="file"
                                        value="" placeholder="" class="" />
                                    <x-input id="thumbnail" type="file" label="Thumbnail" required name="thumbnail"
                                        value="" placeholder="" class="" />
                                </div>
                            </div>

                            <div id="jurnalInput" class="hidden">
                                <div class="pt-3 space-y-6">
                                    <x-input id="jurnal" type="text" label="Jurnal" required name="jurnal"
                                        value="" placeholder="" class="" />
                                    <x-input id="volume" type="text" label="volume" required name="volume"
                                        value="" placeholder="" class="" />
                                    <x-input id="nomor" type="text" label="nomor" required name="nomor"
                                        value="" placeholder="" class="" />
                                    <x-input id="halaman" type="text" label="Halaman" required name="halaman"
                                        value="" placeholder="" class="" />
                                    <x-input id="penerbit" type="text" label="Penerbit" required name="penerbit"
                                        value="" placeholder="" class="" />
                                    <x-input id="link" type="text" label="Link Google Scholar" required
                                        name="link" value="" placeholder="" class="" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                    <button type="submit"
                        class="text-white bg-dark hover:bg-dark transition-all transform duration-300 hover:scale-105 focus:ring-4 focus:outline-none focus:ring-dark font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                    <a href="{{ route('admin.material.index') }}"
                        class="text-red-500 hover:text-white border border-red-500 hover:bg-danger transition-all transform hover:scale-105 duration-300 focus:ring-4 focus:outline-none focus:ring-dark font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const materialCategorySelect = document.getElementById('material_category_id');
            materialCategorySelect.addEventListener('change', function() {
                const selectedCategory = materialCategorySelect.options[materialCategorySelect
                    .selectedIndex].text;
                if (selectedCategory === 'E-Book') {
                    document.getElementById('radioMateri').checked = true;
                    document.getElementById('radioJurnal').disabled = true;
                    showInput('materiaInput');
                } else if (selectedCategory === 'Artikel Ilmiah') {
                    document.getElementById('radioJurnal').checked = true;
                    document.getElementById('radioMateri').disabled = true;
                    showInput('jurnalInput');
                } else {
                    document.getElementById('radioMateri').disabled = false;
                    document.getElementById('radioJurnal').disabled = false;
                }
            });
        });

        function showInput(inputType) {
            document.getElementById('materiaInput').style.display = 'none';
            document.getElementById('jurnalInput').style.display = 'none';
            document.getElementById(inputType).style.display = 'block';
        }
    </script>
</x-app-layout>
