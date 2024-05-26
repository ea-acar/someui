<form {{ $attributes->merge(['class' => 'relative flex items-center max-w-md']) }}>
    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-full focus:ring focus:ring-gray-200 focus:border-gray-500 font-techy" placeholder="Search...">
    <button type="submit" class="absolute right-2 bg-black text-white px-4 py-2 rounded-full hover:bg-gray-800 hover:right-0 transition-all duration-300">Search</button>
</form>
