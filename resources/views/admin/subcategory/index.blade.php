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
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection