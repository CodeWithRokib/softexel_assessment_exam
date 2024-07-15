@extends('admin.layout.dashboard')

@section('content')

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Product List</h1>

        <a href="{{route('categroy.create')}}" class="bg-red-800 text-yellow-950 px-4 py-2 rounded">Add Ad Category</a>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="border px-4 py-2">{{ $category->id }}</td>
                    <td class="border px-4 py-2">{{ $category->name }}</td>  
                    <td>
                    <form action="{{ route('category.delete', $category->id) }}" method="DELETE" class="inline">
    @csrf
    @method('DELETE')
    <button type="submit"
        class="inline-flex items-center px-4 py-2 bg-red-500 hover:bg-red-700 text-white text-sm font-medium rounded-md">
        Delete
    </button>      
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection