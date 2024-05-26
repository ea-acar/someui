@props(['type' => 'info'])

@php
    $badgeClasses = [
        'info' => 'bg-blue-100 text-blue-700 border border-blue-700',
        'success' => 'bg-green-100 text-green-700 border border-green-700',
        'warning' => 'bg-yellow-100 text-yellow-700 border border-yellow-700',
        'danger' => 'bg-red-100 text-red-700 border border-red-700',
    ][$type];
@endphp

<span {{ $attributes->merge(['class' => "$badgeClasses text-xs font-bold mr-2 px-3 py-1 rounded-full font-techy"]) }}>
    {{ $slot }}
</span>
