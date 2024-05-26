@props(['currentPage', 'lastPage'])

<div class="flex items-center justify-between border-t border-gray-200 px-4 py-3 sm:px-6 font-techy">
    <div class="flex-1 flex justify-between sm:hidden">
        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">Previous</a>
        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">Next</a>
    </div>
    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
        <div>
            <p class="text-sm text-gray-700">
                Showing
                <span class="font-medium">{{ ($currentPage - 1) * 10 + 1 }}</span>
                to
                <span class="font-medium">{{ min($currentPage * 10, $lastPage * 10) }}</span>
                of
                <span class="font-medium">{{ $lastPage * 10 }}</span>
                results
            </p>
        </div>
        <div>
            <nav class="relative z-0 inline-flex shadow-sm -space-x-px" aria-label="Pagination">
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Previous</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.707 14.707a1 1 0 01-1.414 0L6 9.414 7.414 8l4.293 4.293 4.293-4.293L18 9.414l-5.293 5.293a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
                @for ($i = 1; $i <= $lastPage; $i++)
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium {{ $currentPage == $i ? 'z-10 bg-indigo-50 border-indigo-500 text-indigo-600' : 'text-gray-500 hover:bg-gray-50' }}">{{ $i }}</a>
                @endfor
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 001.414 0L13 10.414 11.586 9 7.293 13.293 3 9.414 1.586 8 6 12.414l1.293 1.293a1 1 0 000 1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </nav>
        </div>
    </div>
</div>
