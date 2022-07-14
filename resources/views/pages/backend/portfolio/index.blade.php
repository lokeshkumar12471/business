<x-app-layout>
    <h1>Portfolio</h1>
    <a href="{{ route('admin.portfolio.create') }}" class="container flex justify-center">
        <x-backend.submit-button>
            {{ __('Add') }}
        </x-backend.submit-button>
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
                                    App </th>
                                <th class="px-6 py-2 text-xs text-gray-500 overflow:hidden">
                                    Web
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Cards </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    View
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Edit
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete
                                </th>
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
                                            <img src="{{ asset('Upload/images/portfolio/app/' . $items->app) }}"
                                                width="70px" height="100px" alt="">
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500 overflow-hidden">
                                            <img src="{{ asset('Upload/images/portfolio/card/' . $items->card) }}"
                                                width="70px" height="100px" alt="">

                                        </div>
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <img src="{{ asset('Upload/images/portfolio/web/' . $items->web) }}"
                                            width="70px" height="100px" alt="">
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('admin.portfolio.view', $items->id) }}"
                                            class="px-4 py-1 text-sm text-white  rounded">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAADhUlEQVRYhe3WX2jVZRgH8M97tnSWJtVWQRlEN0l/8Q9uF8qIKMidJdgqMnHmRQkR6E21zWVjG9qFESFI0KZrhiFEnKODvFE02aYm5IX0BworunALVNT9wXPeLs4PG8ezNenCm30vn/d5vs/3+7zv731/zGAGM7jFCNNNrJF+NIovkFpEfAL3Yn6yfBHncQany4S+4zI//W8BtRrmjhjbEMQ3sXC6YhOcxa6rxrrOOHTlpgQ0aCj73djbQWzF3Ul4CH2BYznhh8Afc1y6CCPunB9ZUCY+FVmOlahM6v5G2wIVO/fbn/tPAdVWLozKvgzi0xA5muLjB1VkSxFMZuBPI/WkNkVxeRI+HVjTL/vjpAJqpFdFejAPvwQ298seKG7Q1T78Ygg2YUnCclI+7ljfUpW90VB9PXEHHsElwtoBmcwNAqrVvULYizL0VqjYeMT+y8WE3R3D2/BuSetR5/qWyubicK2GuaPGdhHXIBeFxkGZ3usClql7KQj7kuYtA7IdpfgT599gPARbcmWxF1LXwlq0YVYMMf1GU9UNU4Ma6dbIh8gRXh6Q+bq82sqFhO6k+XsDsttLukMydmhtbKr8aMLS9u6OYdgmhs0oKaBftq1a+ho6iLtrpM+mSPViLvZM1RwCi6Fc7IHujuHjuzuGjoHb8nuSnCVTcQzIdkahB/Oi0JuasBanKpyI8fLC1gUxH6UipMZTZdPkCaEwbZAi/zquoLFG/ftTVcbgFNf3XGNz1fL1zfesgHzK2gJ9IWcyVKv/gLgmciHwanII06sDXykoax6Q7SxV3N0+lBZCBuNozZfHLyYIasOsINY1NlcdLOV8mfTWwBbEKKYHHeib8BnWryN2Faai96qxt0pdod3twx2CplICQ9Te2FK5pTj+pOfuuN3sz/AaxqOwblBmH0UXUXJp7FU4lL9FYcOgzOFiwq7OoToxbE6xFGJwIsS4o5TzhPNTPITLkdWDsoeuiy4uWCr9WDm7I0siFwZl7yrldioU3pLRVXgnsCIJf5eX23BC388Tc0s+RrVqy0fN2xi42i/7ecFJugkPE7/PS50qPEazr1Qx8pex+6L4QE58PAjP4Fncn9CdR/uAxTvZmi/uNe3/gWrpIf++cNPB2Sh8MselniOOjE6WVD5dtiDU5OWfD8JiLEIV5iicl6HIuSCeI3U0J/ftSQd/vQmxM5jBDG4d/gFcdzg7JMJPAAAAAABJRU5ErkJggg==">
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('admin.portfolio.edit', $items->id) }}"
                                            class="px-4 py-1 text-sm text-white  rounded">
                                            <img
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAtklEQVRIie3VMQ6CMBTG8X+c3FyNV2B14BC6yElI3GH0MOjsPZw9goQb1IE0NE1aGPpKSN6XvKWQ/niPpAXNxlMDPfABzrnQFjBODUDpv7TL8CEH4E2mzv2uDePYRaB2Bv9JoHbzGF5LoTHcX0uO2nqkhJaiYvgS1ACNoooqalMArxk06Ynk5hJBk3fq5rgGanMCrkxjFxnvHrgHnhVSKECF8O0SSsf0H0Odi+QLPIEb49g1288fFcGTp8Rx7bMAAAAASUVORK5CYII=">
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('admin.portfolio.delete', $items->id) }}"
                                            class="px-4 py-1 text-sm text-white  rounded"
                                            onclick="return confirm('are u sure do u want to delete this user?');">
                                            <span x-on:click="open = true">
                                                <img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAABmJLR0QA/wD/AP+gvaeTAAAB/0lEQVRYhe2XyUoDQRCGPzXowX2Ly0EQQc+aJ9AH8CaefAAVRMXoI/gE3lwuPoCCoBdxOSt6ExQRBIkbiqA5BEM8TA1pxp7NbuPB/NB0papS9Vd3Tc80lPHPMA4cA+8yjoCxvyBSCawBBZ+xKj4lw6ySfAtnVcaAbUU/UyoyVcCDJF3X2DfEluEHq5TQ6CaAbpGrgZzH3gokRf4Aljz2d5k7gWXgJSD/HbAZRHAQ/774rTGoEvCu0AXONvQAfUAv8AqcBlURAymgGbgBroFbyRkJ8zgVnFkiA3AuMef8HIKaLiNzl0VCbqyMn0MQoXuZ29E3f1wkgDZP7FiEMopPUmMfANJAvaJrEF2/xj+p5PMlFIRGik/CkMa+I7YFRZcW3Y7GP6XEa/RLGrRCb0BWZF0f1cpcp9HV8h1ujKzEjk0Iiktro7FDGxr+hlBg/4QRcqvpNKZjaYVsnkVuUeUt84P1LaswIFMBdNgkVAM0GRBqkRjGhNT9Nukj9b9GPfQE5EMIFXxkFe525YFnE0J54FFkb2Pv4bwCDhTdoeh2Pb5uMY8UC/wxTvn+Eo2LRYlxEuYY5VZg4yyKdAZBNEKXMus+QaIiJfNVmGOUs2UE2Bd5Bedb5zMikQQwCkzK72GcPjPGOubXnVUbRFxUAtM425ePQSKHc2uZosR3/TJKhi9wxajqqZlPHgAAAABJRU5ErkJggg==">
                                        </a>
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
