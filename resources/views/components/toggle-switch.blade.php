@props(['checked' => false])

<label class="inline-flex items-center cursor-pointer">
    <input type="checkbox" class="hidden" {{ $checked ? 'checked' : '' }}>
    <span class="relative w-12 h-6 flex items-center bg-gray-300 rounded-full p-1 duration-300 ease-in-out">
        <span class="w-5 h-5 bg-white border-2 border-gray-300 rounded-full shadow-md transform duration-300 ease-in-out {{ $checked ? 'translate-x-6 bg-black border-black' : '' }}"></span>
    </span>
</label>
