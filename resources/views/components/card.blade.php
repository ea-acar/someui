@props(['name', 'description', 'buttonText'])

<div {{ $attributes->merge(['class' => 'bg-white border border-gray-200 rounded-lg shadow-sm p-4 font-techy relative max-w-md md:max-w-lg lg:max-w-xl']) }}>
    <div class="mb-4">
        <h2 class="text-lg font-bold">{{ $name }}</h2>
        <p class="text-sm text-gray-500">{{ $description }}</p>
    </div>
    <div class="text-base mb-12">
        {{ $slot }}
    </div>
    <div class="absolute bottom-4 right-4">
        <x-button>
            {{ $buttonText }}
        </x-button>
    </div>
</div>
