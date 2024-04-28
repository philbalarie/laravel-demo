@props(['active' => false])
<a {{ $attributes }} style="{{ $active ? 'color:red;' : 'color:black;' }}"
    aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</a>
