@props(['notifications' => 0])

<div>
    <button type="button" class="inline-flex items-center px-3 py-3 bg-white text-gray-700 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        <div>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.5V11a6.002 6.002 0 00-5-5.917V5a3 3 0 00-6 0v.083A6.002 6.002 0 002 11v3.5c0 .378-.214.725-.553.895L0 17h5m5 0v2a3 3 0 006 0v-2m-6 0h6"></path>
            </svg>
        </div>
    </button>
    @if ($notifications > 0)
        <span class="relative bottom-7 right-5 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-lg">{{ $notifications }}</span>
    @endif
</div>
