@props(['user'])

<div {{ $attributes->merge(['class' => 'flex gap-3 px-3 py-4 max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm font-techy']) }}>
    <div>
        <img src="{{ $user['avatar'] }}" alt="{{ $user['name'] }}" class="w-16 h-16 rounded-lg mr-4">
    </div>
    <div>
        <h2 class="text-lg font-bold">{{ $user['name'] }}</h2>
        <p class="text-sm text-gray-500">{{ $user['email'] }}</p>
        <p class="text-sm text-gray-500">{{ $user['role'] }}</p>
    </div>
</div>
