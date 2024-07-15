@extends('admin.layout.dashboard')

@section('content')

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Product List</h1>

        <a href="{{route('subcategroy.create')}}" class="bg-red-800 text-yellow-950 px-4 py-2 rounded">Add SubCategory</a>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Category Name</th>
                <th class="px-4 py-2">SubCategory Name</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subcategories as $subcategory)
                <tr>
                    <td class="border px-4 py-2">{{ $subcategory->id }}</td>
                    <td class="border px-4 py-2">{{ $subcategory->category_id }}</td>            
                    <td class="border px-4 py-2">{{ $subcategory->name }}</td>
                    <td>
                    <form action="{{ route('subcategory.delete', $subcategory->id) }}" method="DELETE" class="inline">
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