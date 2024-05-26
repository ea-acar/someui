@props(['title', 'value', 'trend'])

<div {{ $attributes->merge(['class' => 'bg-white border border-gray-200 rounded-lg shadow-sm p-4 font-techy']) }}>
    <div class="flex justify-between gap-5 items-center mb-2">
        <h3 class="text-xl font-bold">{{ $title }}</h3>
        <span class="text-sm font-bold {{ $trend >= 0 ? 'text-green-500' : 'text-red-500' }}">{{ $trend }}%</span>
    </div>
    <p class="text-2xl font-bold text-gray-900">{{ $value }}</p>
</div>
