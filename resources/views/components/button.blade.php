<button {{ $attributes->merge(['class' => 'font-techy rounded relative px-4 py-2 bg-white text-black border border-black inline-block transition-all duration-300 group hover:bg-black hover:text-white hover:border-transparent']) }}>
    {{ $slot }}
    <div class="font-techy absolute rounded inset-0 border border-black bg-black transform translate-x-1 translate-y-1 -z-10 transition-all duration-300 group-hover:translate-x-0 group-hover:translate-y-0 group-hover:rounded-md"></div>
</button>
