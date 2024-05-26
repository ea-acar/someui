@props(['progress' => 0])

<div class="w-full bg-gray-200 rounded-full h-2.5 font-techy">
    <div class="bg-blue-600 h-2.5 rounded-full transition-all duration-300" style="width: {{ $progress }}%"></div>
</div>
