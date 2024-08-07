@props([
    'id' => '',
    'label' => '',
    'required' => false,
    'name' => '',
    'value' => '',
    'placeholder' => '',
    'disabled' => false,
    'readonly' => false,
])

<div>
    <label for="{{ $id }}" class="block mb-2 text-sm text-dark ">{{ $label }}</label>
    <textarea id="{{ $id }}" rows="8" name="{{ $name }}"
        class="block p-2.5 w-full bg-gray-50 border-2 border-gray-200 text-dark text-sm rounded-lg focus:outline-none "
        placeholder="{{ $placeholder }}" @if ($required) required @endif
        @if ($disabled) disabled @endif @if ($readonly) readonly @endif>{{ $value }}</textarea>
</div>
