@props(['name' => '', 'icon' => '', 'route' => '', 'active' => false])

<li>
    <a href="{{ $route }}"
        class="flex text-xs 2xl:text-sm font-normal items-center py-3 pl-6 nav-item hover:text-primary rounded-md {{ $active == true ? 'text-primary bg-white' : 'text-gray-500' }}">
        <i
            class="{{ $icon }} w-4 h-4 transition duration-75  group-hover:text-primary {{ $active == true ? 'text-primary' : 'text-gray-500' }}"></i>
        <span class="ml-3">{{ $name }}</span>
    </a>
</li>
