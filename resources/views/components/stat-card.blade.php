@props(['title', 'value', 'description'])

<div {{ $attributes->merge(['class' => 'bg-white border border-gray-200 rounded-lg shadow-sm p-4 font-techy']) }}>
    <h3 class="text-lg font-bold mb-2">{{ $title }}</h3>
    <p class="text-2xl font-bold text-gray-900">{{ $value }}</p>
    <p class="text-sm text-gray-500">{{ $description }}</p>
</div>
