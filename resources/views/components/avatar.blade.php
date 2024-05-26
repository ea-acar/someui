@props(['src', 'alt' => '', 'size' => '10'])
<div>
<img src="{{ $src }}" alt="{{ $alt }}" class="rounded-full w-{{ $size }} h-{{ $size }} object-cover" />
</div>
