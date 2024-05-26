@props(['type' => 'info', 'message'])

@php
    $notificationClasses = [
        'info' => 'bg-blue-100 text-blue-700 border-blue-500',
        'success' => 'bg-green-100 text-green-700 border-green-500',
        'warning' => 'bg-yellow-100 text-yellow-700 border-yellow-500',
        'danger' => 'bg-red-100 text-red-700 border-red-500',
    ][$type];
@endphp

<div {{ $attributes->merge(['class' => "border-l-4 p-4 $notificationClasses rounded-md font-techy"]) }}>
    <div class="flex items-center">
        <div class="ml-3">
            <p class="text-sm font-bold">{{ $message }}</p>
        </div>
        <button class="ml-auto text-gray-600 hover:text-gray-900" onclick="this.parentElement.parentElement.remove();">&times;</button>
    </div>
</div>
