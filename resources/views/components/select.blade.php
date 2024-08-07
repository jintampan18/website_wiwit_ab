@props([
    'id' => '',
    'name' => '',
    'label' => '',
    'required' => false,
])

<div class="">
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-dark">
        {{ $label }} {!! $required ? '<span class="text-red-600">*</span>' : '' !!}
    </label>
    <select id="{{ $id }}" name="{{ $name }}" required="{{ $required ? 'required' : '' }}"
        class="bg-gray-50 border-2 border-gray-200 text-dark text-sm rounded-lg focus:outline-none min-w-full py-3">
        {{ $slot }}
    </select>

    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
