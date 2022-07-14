<x-app-layout>
    <h1>Contact</h1>
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
                                    Name</th>
                                <th class="px-6 py-2 text-xs text-gray-500 overflow:hidden">
                                    Email
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Subject </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Message </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($item as $items)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $items->id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900 overflow-hidden">
                                            {{ $items->name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500 overflow-hidden">
                                            <p>{{ $items->email }}</p>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500 overflow-hidden">
                                            <p>{{ $items->subject }}</p>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500 overflow-hidden">
                                            <p>{{ $items->message }}</p>
                                        </div>
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
