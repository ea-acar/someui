@props(['icon', 'title', 'description'])

<div {{ $attributes->merge(['class' => 'bg-white border border-gray-200 rounded-lg shadow-sm p-4 font-techy flex items-center']) }}>
    <div>
        <img src="{{ $icon }}" alt="{{ $title }}" class="rounded w-12 h-12 mr-4">
    </div>
    <div>
        <h3 class="text-lg font-bold">{{ $title }}</h3>
        <p class="text-sm text-gray-500">{{ $description }}</p>
    </div>
</div>
