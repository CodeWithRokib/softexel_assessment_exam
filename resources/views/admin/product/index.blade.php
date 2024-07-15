@extends('admin.layout.dashboard')

@section('content')

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Product List</h1>

        <a href="{{route('product.create')}}" class="bg-red-800 text-yellow-950 px-4 py-2 rounded">Add Product</a>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Image</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="border px-4 py-2">{{ $product->id }}</td>
                    <td class="border px-4 py-2">{{ $product->name }}</td>
                    <td class="border px-4 py-2">{{ $product->description }}</td>
                    <td class="border px-4 py-2">${{ number_format($product->price, 2) }}</td>
                    <td class="border px-4 py-2">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-16 h-16 object-cover">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                    <a href="{{ route('product.edit', $product->id) }}"
    class="inline-flex items-center px-4 py-2 bg-yellow-500 hover:bg-yellow-700 text-white text-sm font-medium rounded-md">
    Edit
</a>
<form action="{{ route('product.delete', $product->id) }}" method="DELETE" class="inline">
    @csrf
    @method('DELETE')
    <button type="submit"
        class="inline-flex items-center px-4 py-2 bg-red-500 hover:bg-red-700 text-white text-sm font-medium rounded-md">
        Delete
    </button>
</form>
                    </td>
                  
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection