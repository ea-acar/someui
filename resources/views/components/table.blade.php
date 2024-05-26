@props(['headers', 'rows'])

<div class="overflow-x-auto font-techy">
    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
        <thead>
        <tr class="bg-gray-100 border-b border-gray-200">
            @foreach ($headers as $header)
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
                    {{ $header }}
                </th>
            @endforeach
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
        @foreach ($rows as $row)
            <tr>
                @foreach ($row as $cell)
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                        {{ $cell }}
                    </td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
