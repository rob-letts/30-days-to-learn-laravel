<a href="{{ $href }}" class="{{ Request::path() == $href ? 'text-purple-500' : '' }}  hover:underline">
    {{ $slot }}
</a>
