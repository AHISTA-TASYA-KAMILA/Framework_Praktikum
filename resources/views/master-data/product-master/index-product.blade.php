<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="container p-4 mx-auto">
        <div class="overflow-x-auto">
            <a href="{{ route('product-create')}}">
                <button
                    class="px-6 py-4 text-white bg-green-500 border border-green-500 rounded-lg shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                    Add product data
                </button>
            </a>
            <a href="{{ route('product-export-excel')}}">
                <button
                    class="px-6 py-4 text-white bg-green-500 border border-green-500 rounded-lg shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                    Export to Excel
                </button>
            </a>
            <a href="{{ route('product-export-pdf')}}">
                <button
                    class="px-6 py-4 text-white bg-green-500 border border-green-500 rounded-lg shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                    Export to PDF
                </button>
            </a>
            <div class="flex mt-4">
                <form method="GET" action="{{ route('product-index') }}" class="mb-4 flex items-center">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari produk..." class=" rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <button type="submit" class="ml-2 rounded-lg bg-green-500 px-6 py-2 text-white shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Cari</button>
                </form>

            </div>
            <x-auth-session-status class="mb-4" :status="session('success')" />
            <table class="min-w-full mt-4 border border-gray-collapse border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">ID</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Product Name</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Unit</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Type</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">information</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">qty</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">producer</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Supplier Name</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                    <tr class="bg-white">
                        <td class="px-4 py-2 border border-gray-200">{{ $item->id  }}</td>
                        <td class="px-4 py-2 border border-gray-200">
                            <a href="{{route('product-detail', $item->id)}}">
                                {{ $item->product_name}}
                            </a>
                        </td>
                        <td class="px-4 py-2 border border-gray-200">{{ $item->unit }}</td>
                        <td class="px-4 py-2 border border-gray-200">{{ $item->type }}</td>
                        <td class="px-4 py-2 border border-gray-200">{{ $item->information }}</td>
                        <td class="px-4 py-2 border border-gray-200">{{ $item->qty }}</td>
                        <td class="px-4 py-2 border border-gray-200">{{ $item->producer }}</td>
                        <td class="px-4 py-2 border border-gray-200">{{ $item->supplier->supplier_name ??'-' }}</td>
                        <td class="px-4 py-2 border border-gray-200">
                            <a href="{{ route('product-edit', $item->id) }}"
                                class="px-2 text-blue-600 hover:text-blue-800">Edit</a>
                            <button class="px-2 text-red-600 hover:text-red-800"
                                onclick="confirmDelete('{{ route('product-delete', $item->id) }}')">Delete</button>
                        </td>
                    </tr>
                    @empty
                    <p class="mb-4 text-center text-2xl font-bold text-red-600"> No Product Found</p>
                    @endforelse
                    <!-- @foreach ($data as $product)
                        <tr class="bg-white">
                            <td class="border border-gray-200 px-4 py-2">{{$product->id}}</td>
                            <td class="border-gray-200 px-4 py-2 hover:text-blue-500 hover:underline">
                                <a href="{{route('product-detail', $product->id)}}">
                                    {{ $product->product_name}}
                                </a>
                            </td>
                            <td>
                                <a href="{{route('product-detail', $product->id)}}">
                                    {{$product->product_name}}
                                </a>
                            </td>
                        </tr>
                    @endforeach -->


                </tbody>
            </table>
        </div>
    </div>


    <script>
        function confirmDelete(deleteUrl) {
            console.log(deleteUrl);

            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                // Jika user mengonfirmasi, kita dapat membuat form dan mengirimkan permintaan delete
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = deleteUrl;

                // Tambahkan CSRF token
                let csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = '{{ csrf_token() }}';
                form.appendChild(csrfInput);

                // Tambahkan method spoofing untuk DELETE (karena HTML form hanya mendukung GET dan POST)
                let methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';
                form.appendChild(methodInput);

                // Tambahkan form ke body dan submit
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>




</x-app-layout>