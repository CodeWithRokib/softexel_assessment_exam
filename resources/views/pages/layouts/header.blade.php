<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-white text-lg font-bold">Logo</a>
        <div class="hidden md:flex space-x-4">
            <a href="{{route('products.index')}}" class="text-gray-300 hover:text-white">Home</a>
            <a href="{{route('login.page')}}" class="text-gray-300 hover:text-white">Login</a>
            <a href="{{route('register')}}" class="text-gray-300 hover:text-white">Registration</a>
            <div class="relative group">
                <a href="{{route('products.index')}}" class="text-gray-300 hover:text-white">Products</a>
                <div class="absolute hidden group-hover:block bg-gray-700 text-gray-300 mt-2 rounded shadow-lg">
                    <div class="relative group">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-600">Category 1</a>
                        <div class="absolute hidden group-hover:block bg-gray-600 mt-2 ml-4 rounded shadow-lg">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-500">Subcategory 1.1</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-500">Subcategory 1.2</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-500">Subcategory 1.3</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-500">Subcategory 1.4</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-500">Subcategory 1.5</a>
                        </div>
                    </div>
                    <div class="relative group">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-600">Category 2</a>
                        <div class="absolute hidden group-hover:block bg-gray-600 mt-2 ml-4 rounded shadow-lg">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-500">Subcategory 2.1</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-500">Subcategory 2.2</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-500">Subcategory 2.3</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-500">Subcategory 2.4</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-500">Subcategory 2.5</a>
                        </div>
                    </div>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-600">Category 3</a>
                </div>
            </div>
        </div>
        <div class="md:hidden">
            <button id="nav-toggle" class="text-gray-300 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
    <div id="nav-content" class="hidden md:hidden">
        <a href="#" class="block px-4 py-2 text-gray-300 hover:text-white">Home</a>
        <a href="#" class="block px-4 py-2 text-gray-300 hover:text-white">About</a>
        <a href="#" class="block px-4 py-2 text-gray-300 hover:text-white">Services</a>
        <a href="#" class="block px-4 py-2 text-gray-300 hover:text-white">Products</a>
    </div>
</nav>

<script>
    document.getElementById('nav-toggle').onclick = function() {
        var navContent = document.getElementById('nav-content');
        if (navContent.classList.contains('hidden')) {
            navContent.classList.remove('hidden');
        } else {
            navContent.classList.add('hidden');
        }
    };
</script>