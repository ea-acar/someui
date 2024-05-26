@props(['title', 'value', 'percentage'])

<div class="bg-white border border-gray-200 rounded-lg shadow-sm px-3 py-4 font-techy">
    <div class="flex items-center">
        <div class="flex-1 mr-4">
            <h3 class="text-lg font-bold">{{ $title }}</h3>
            <p class="text-2xl font-bold text-gray-900">{{ $value }}</p>
        </div>
        <div>
            <span class="text-sm font-semibold {{ $percentage >= 0 ? 'text-green-500' : 'text-red-500' }}">
                {{ $percentage }}%
            </span>
        </div>
    </div>
</div>
