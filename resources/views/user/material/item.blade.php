@foreach ($materials as $data)
    <div class="bg-white shadow-sm p-4 rounded-xl border border-gray-100">
        <div class="flex gap-3 items-start">
            <div>
                <span class="text-sm text-primary font-bold">{{ $data->materialCategory->name }}</span>
                <span class="text-sm text-gray-500">{{ ' ' . '-' . ' ' . $data->created_at->diffForHumans() }}</span>
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
