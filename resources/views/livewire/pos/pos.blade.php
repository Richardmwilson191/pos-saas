<div>
    <div class="bg-gray-200 h-screen">
        <main class="h-screen w-full">
            <div class="flex p-5 gap-6 h-full mx-auto px-6">
                <div class="w-8/12 h-full rounded-lg overflow-hidden bg-white bg-cover bg-center">
                    <div class="w-full py-6 px-4 font-bold bg-blue-600">
                        <h1 class="text-white text-3xl">Products</h1>
                    </div>
                    <div class="h-full overflow-y-scroll px-5 pt-5">
                        <div class="flex justify-between text-gray-700 font-bold text-3xl mt-8 mb-4">
                            <h1>Select Product</h1>

                            <div class="relative text-gray-600">
                                <input type="search" wire:model="search" placeholder="Search"
                                    class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                                        y="0px" viewBox="0 0 56.966 56.966"
                                        style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                        width="512px" height="512px">
                                        <path
                                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <x-table.table>
                            <x-table.thead>

                                <x-table.table-head>First Name</x-table.table-head>
                                <x-table.table-head>Last Name</x-table.table-head>
                                <x-table.table-head>Birth Date</x-table.table-head>
                                <x-table.table-head>Gender</x-table.table-head>
                                <x-table.table-head>Email Address</x-table.table-head>
                                <x-table.table-head>Mobile</x-table.table-head>

                            </x-table.thead>
                            <x-table.tbody>

                                <x-table.table-row>
                                    <x-table.table-data responsiveName="First Name"></x-table.table-data>
                                    <x-table.table-data responsiveName="Last Name"></x-table.table-data>
                                    <x-table.table-data responsiveName="Date of Birth"></x-table.table-data>
                                    <x-table.table-data responsiveName="Gender"></x-table.table-data>
                                    <x-table.table-data responsiveName="Email"></x-table.table-data>
                                    <x-table.table-data responsiveName="Class">

                                        <x-table.button color="green">Edit</x-table.button>
                                        <x-table.button color="red">Delete</x-table.button>
                                    </x-table.table-data>

                                </x-table.table-row>


                            </x-table.tbody>
                        </x-table.table>

                        <div class="mt-3">
                            <x-table.button color="gray" class="py-3 px-6">Add Product</x-table.button>
                        </div>
                    </div>
                </div>


                <div class="w-4/12 bg-white h-full pb rounded-lg overflow-hidden bg-cover bg-center">
                    <div class="w-full py-6 px-4 bg-blue-600">
                        <h1 class="text-white font-bold text-3xl">Summary</h1>
                    </div>
                    <div class="p-5 h-full">
                        <div class="gap-6 flex flex-wrap justify-between">
                            <div class="flex justify-between w-3/6">
                                <span>Credit:</span>
                                <span>$0.00</span>
                            </div>
                            <div class="flex justify-between w-3/6">
                                <span>Sub Total:</span>
                                <span>$199.00</span>
                            </div>
                            <div class="flex justify-between w-1/2">
                                <span>Discount:</span>
                                <span>$0.00</span>
                            </div>
                            <div class="flex justify-between w-1/2">
                                <span>Sub Total:</span>
                                <span>$199.00</span>
                            </div>
                            <div class="flex justify-between w-1/2">
                                <span>Tip:</span>
                                <span>$0.00</span>
                            </div>
                            <div class="flex justify-between w-1/2">
                                <span>Sub Total:</span>
                                <span>$199.00</span>
                            </div>
                            <div class="flex justify-between w-1/2">
                                <span>Credit:</span>
                                <span>$0.00</span>
                            </div>
                            <div class="flex justify-between w-1/2">
                                <span>Sub Total:</span>
                                <span>$199.00</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </main>

    </div>
</div>