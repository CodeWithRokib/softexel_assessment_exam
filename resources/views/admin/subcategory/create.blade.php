@extends('admin.layout.dashboard')

@section('content')


    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Create Product</h1>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6">
                <strong class="font-bold">Whoops!</strong>
                <span class="block sm:inline">There were some problems with your input.</span>
                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('subcategory.store')}}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category_id" id="category_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline">Create Product</button>
            </div>
        </form>
    </div>


@endsection