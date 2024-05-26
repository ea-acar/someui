@props(['label', 'options' => []])

<div class="relative inline-block text-left group font-techy">
    <button type="button" class="inline-flex justify-center w-full px-4 py-2 bg-white text-sm font-medium text-gray-700 border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        {{ $label }}
    </button>
    <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block group-hover:ml-auto group-hover:sticky group-focus-within:block">
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            @foreach ($options as $option)
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">{{ $option }}</a>
            @endforeach
        </div>
    </div>
</div>
