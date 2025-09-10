@props(['href'])
<a href="{{ $href }}" target="_blank" class="hover:opacity-70 transition-opacity duration-200 inline">{{ $slot }}</a>
