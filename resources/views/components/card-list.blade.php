@props(['items'])

<div {{ $attributes->merge(['class' => 'bg-white border border-gray-200 rounded-lg max-w-xs shadow-sm px-4 py-2 font-techy']) }}>
    <ul class="divide-y divide-gray-200">
        @foreach ($items as $item)
            <li class="py-2">
                <div class="flex items-center align-middle py-1">
                    <div>
                        <img src="{{ $item['icon'] }}" alt="{{ $item['title'] }}" class="rounded w-6 h-6 mr-3">
                    </div>
                    <span class="font-bold text-gray-700">{{ $item['title'] }}</span>
                </div>
                <p class="text-sm flex py-3 justify-center text-gray-500">{{ $item['description'] }}</p>
            </li>
        @endforeach
    </ul>
</div>
