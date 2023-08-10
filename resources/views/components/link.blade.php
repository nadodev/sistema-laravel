@props(['href', 'active', 'disabled' => false])

<a href="{{ $href }}" class="flex gap-2 px-4  py-4">
    {{ $slot }}
</a>
