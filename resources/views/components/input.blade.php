@props([
    'id' => '',
    'type' => 'text',
    'label' => '',
    'required' => false,
    'name' => '',
    'value' => '',
    'placeholder' => '',
    'disabled' => false,
    'readonly' => false,
])

<div>
    <label for="{{ $id }}" class="block mb-2 text-sm text-dark">
        {{ $label }} @if ($required)
            <span class="text-red-500">*</span>
        @endif
    </label>
    <input id="{{ $id }}" type="{{ $type }}"
        class="bg-gray-50 border-2 border-gray-200 text-dark text-sm rounded-lg focus:outline-none block w-full py-3"
        placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ $value }}"
        {{ $disabled ? 'disabled' : '' }} {{ $readonly ? 'readonly' : '' }}>

    @error($name)
        <div class="text-red-500 mt-2 text-sm">
            {{ $message }}
        </div>
    @enderror
</div>
