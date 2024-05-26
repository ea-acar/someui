@props(['links'])

<aside class="w-64 bg-white border-r border-gray-200 h-screen font-techy">
    <div class="px-4 py-6">
        <h1 class="text-2xl font-bold">universe</h1>
    </div>
    <nav class="px-4">
        <ul>
            @foreach ($links as $link)
                <li class="mb-4">
                    <a href="{{ $link['url'] }}" class="block py-2 px-4 rounded hover:bg-gray-100 text-gray-700 font-bold transition-all duration-200">
                        {{ $link['name'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</aside>
