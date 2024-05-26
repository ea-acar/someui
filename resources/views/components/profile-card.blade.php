@props(['user'])

<div {{ $attributes->merge(['class' => 'max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm p-4 font-techy']) }}>
    <div class="flex items-center mb-4">
        <img class="w-16 h-16 rounded-full mr-4" src="{{ $user['avatar'] }}" alt="{{ $user['name'] }}">
        <div>
            <h2 class="text-lg font-bold">{{ $user['name'] }}</h2>
            <p class="text-sm text-gray-500">{{ $user['email'] }}</p>
        </div>
    </div>
    <div>
        <x-button class="w-full">Send Message</x-button>
    </div>
</div>
