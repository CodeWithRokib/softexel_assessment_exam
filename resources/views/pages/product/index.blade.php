@extends('pages.layouts.app')
@section('title')
    product
@endsection

@section('content')

<div class="bg-gray-900 flex items-center justify-center min-h-screen">
  <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
          <!-- Product Card 1 -->
          <div class="max-w-sm rounded overflow-hidden shadow-lg bg-gray-800">
              <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400" alt="Product Image">
              <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2 text-white">Product Name</div>
                  <p class="text-gray-400 text-base">Category: <span class="text-gray-200">Category Name</span></p>
                  <p class="text-gray-400 text-base">Subcategory: <span class="text-gray-200">Subcategory Name</span></p>
              </div>
              <div class="px-6 pt-4 pb-2">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                      Buy Now
                  </button>
              </div>
          </div>
          <!-- Product Card 2 -->
          <div class="max-w-sm rounded overflow-hidden shadow-lg bg-gray-800">
              <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400" alt="Product Image">
              <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2 text-white">Product Name</div>
                  <p class="text-gray-400 text-base">Category: <span class="text-gray-200">Category Name</span></p>
                  <p class="text-gray-400 text-base">Subcategory: <span class="text-gray-200">Subcategory Name</span></p>
              </div>
              <div class="px-6 pt-4 pb-2">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                      Buy Now
                  </button>
              </div>
          </div>
          <!-- Product Card 3 -->
          <div class="max-w-sm rounded overflow-hidden shadow-lg bg-gray-800">
              <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400" alt="Product Image">
              <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2 text-white">Product Name</div>
                  <p class="text-gray-400 text-base">Category: <span class="text-gray-200">Category Name</span></p>
                  <p class="text-gray-400 text-base">Subcategory: <span class="text-gray-200">Subcategory Name</span></p>
              </div>
              <div class="px-6 pt-4 pb-2">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                      Buy Now
                  </button>
              </div>
          </div>
          <!-- Product Card 4 -->
          <div class="max-w-sm rounded overflow-hidden shadow-lg bg-gray-800">
              <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400" alt="Product Image">
              <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2 text-white">Product Name</div>
                  <p class="text-gray-400 text-base">Category: <span class="text-gray-200">Category Name</span></p>
                  <p class="text-gray-400 text-base">Subcategory: <span class="text-gray-200">Subcategory Name</span></p>
              </div>
              <div class="px-6 pt-4 pb-2">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                      Buy Now
                  </button>
              </div>
          </div>
                    <!-- Product Card 3 -->
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-gray-800">
                      <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400" alt="Product Image">
                      <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2 text-white">Product Name</div>
                          <p class="text-gray-400 text-base">Category: <span class="text-gray-200">Category Name</span></p>
                          <p class="text-gray-400 text-base">Subcategory: <span class="text-gray-200">Subcategory Name</span></p>
                      </div>
                      <div class="px-6 pt-4 pb-2">
                          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                              Buy Now
                          </button>
                      </div>
                  </div>
                            <!-- Product Card 3 -->
          <div class="max-w-sm rounded overflow-hidden shadow-lg bg-gray-800">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400" alt="Product Image">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-white">Product Name</div>
                <p class="text-gray-400 text-base">Category: <span class="text-gray-200">Category Name</span></p>
                <p class="text-gray-400 text-base">Subcategory: <span class="text-gray-200">Subcategory Name</span></p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Buy Now
                </button>
            </div>
        </div>
      </div>
  </div>
</div>

@endsection