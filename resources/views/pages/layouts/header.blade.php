<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-white text-lg font-bold">Logo</a>
        <div class="hidden md:flex space-x-4">
            <a href="#" class="text-gray-300 hover:text-white">Home</a>
            <a href="#" class="text-gray-300 hover:text-white">About</a>
            <a href="#" class="text-gray-300 hover:text-white">Services</a>
            <a href="#" class="text-gray-300 hover:text-white">Contact</a>
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
        <a href="#" class="block px-4 py-2 text-gray-300 hover:text-white">Contact</a>
    </div>
</nav>

<script>
    const navToggle = document.getElementById('nav-toggle');
    const navContent = document.getElementById('nav-content');

    navToggle.addEventListener('click', () => {
        navContent.classList.toggle('hidden');
    });
</script>