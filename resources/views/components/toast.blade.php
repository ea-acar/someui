@props(['type' => 'info', 'message'])

@php
    $toastClasses = [
        'info' => 'bg-blue-500',
        'success' => 'bg-green-500',
        'warning' => 'bg-yellow-500',
        'danger' => 'bg-red-500',
    ][$type];
@endphp

<div class="fixed bottom-4 right-4 w-full max-w-xs mx-auto font-techy">
    <div class="flex items-center {{ $toastClasses }} text-white text-sm font-bold px-4 py-3 rounded-lg shadow-md" role="alert">
        <p>{{ $message }}</p>
        <button class="ml-auto text-white focus:outline-none" onclick="this.parentElement.parentElement.style.display='none';">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
