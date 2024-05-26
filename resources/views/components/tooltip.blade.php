@props(['text'])

<div class="relative flex items-center group font-techy">
    <span class="inline-block">
        {{ $slot }}
    </span>
    <div class="absolute bottom-full mb-2 hidden group-hover:block">
        <div class="relative bg-gray-700 text-white text-xs rounded py-1 px-2 shadow-lg">
            {{ $text }}
            <div class="absolute top-full left-1/2 -mt-1 w-3 h-3 transform -translate-x-1/2 rotate-45 bg-gray-700"></div>
        </div>
    </div>
</div>
