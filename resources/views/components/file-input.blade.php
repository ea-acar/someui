@props(['id', 'name'])

<div class="flex items-center font-techy">
    <input type="file" id="{{ $id }}" name="{{ $name }}" class="hidden">
    <label for="{{ $id }}" class="cursor-pointer px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Choose File
    </label>
    <span id="file-name" class="ml-3 text-sm text-gray-500"></span>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fileInput = document.getElementById('{{ $id }}');
        const fileName = document.getElementById('file-name');

        fileInput.addEventListener('change', function () {
            fileName.textContent = fileInput.files[0].name;
        });
    });
</script>
