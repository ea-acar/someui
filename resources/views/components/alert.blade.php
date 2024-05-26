@props(['type' => 'info'])

@php
    $alertClasses = [
        'info' => 'bg-blue-50 border-l-4 border-blue-500 text-blue-700',
        'success' => 'bg-green-50 border-l-4 border-green-500 text-green-700',
        'warning' => 'bg-yellow-50 border-l-4 border-yellow-500 text-yellow-700',
        'danger' => 'bg-red-50 border-l-4 border-red-500 text-red-700',
    ][$type];
@endphp

<div {{ $attributes->merge(['class' => "p-4 $alertClasses rounded-md font-techy"]) }}>
    <div class="flex">
        <div class="flex-shrink-0">
            <!-- You can add icons here if needed -->
        </div>
        <div class="ml-3">
            <p class="text-sm font-bold">{{ $slot }}</p>
        </div>
    </div>
</div>
