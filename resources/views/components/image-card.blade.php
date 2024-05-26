@props(['title', 'description', 'image', 'buttonText'])

<div {{ $attributes->merge(['class' => 'bg-white border border-gray-200 rounded-lg shadow-sm p-4 font-techy max-w-md md:max-w-lg lg:max-w-xl flex flex-col justify-between']) }}>
    <div>
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-64 object-cover rounded-t-lg">
    </div>
    <div class="my-4">
        <h2 class="text-lg font-bold">{{ $title }}</h2>
        <p class="text-sm text-gray-500">{{ $description }}</p>
    </div>
    <div class="flex justify-end">
        <x-button>
            {{ $buttonText }}
        </x-button>
    </div>
</div>
