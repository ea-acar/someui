@props(['id', 'title'])

<div id="{{ $id }}" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="flex flex-col gap-3 bg-white rounded-lg shadow-lg w-1/3 p-6 font-techy relative">
        <div class="mb-4">
            <h2 class="text-lg font-bold">{{ $title }}</h2>
        </div>
        <div>
            {{ $slot }}
        </div>
        <div class="ml-auto bottom-4 right-4">
            <x-button onclick="document.getElementById('{{ $id }}').classList.add('hidden')">Close</x-button>
        </div>
    </div>
</div>
