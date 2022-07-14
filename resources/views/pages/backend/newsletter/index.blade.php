<x-app-layout>
    <h1>Newsletter</h1>
    <a href="{{ route('admin.newsletter.create') }}" class="container flex justify-center">
    </a>
    <div class="container flex justify-center mx-auto w-screen">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table>
                        <thead class="bg-gray-50 w-screen ">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500 ">
                                    Id
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Email </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($item as $items)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $items->id }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $items->email }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
