@props(['title'])

<details class="border font-techy border-gray-200 rounded-lg overflow-hidden transition-all duration-500">
    <summary class="flex justify-between items-center w-full px-4 py-2 text-left text-gray-800 bg-gray-100 cursor-pointer focus:outline-none rounded-lg">
        <span>{{ $title }}</span>
        <svg class="w-6 h-6 transform transition-transform duration-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </summary>
    <div class="px-4 py-2 transition-all duration-500 ease-in-out max-h-0 overflow-hidden">
        {{ $slot }}
    </div>
</details>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const detailsElements = document.querySelectorAll('details');
        detailsElements.forEach(detail => {
            detail.addEventListener('toggle', () => {
                const summary = detail.querySelector('summary svg');
                const content = detail.querySelector('div');
                if (detail.open) {
                    summary.classList.add('rotate-180');
                    content.style.maxHeight = content.scrollHeight + 'px';
                } else {
                    summary.classList.remove('rotate-180');
                    content.style.maxHeight = null;
                }
            });
        });
    });
</script>
