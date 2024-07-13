<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white h-screen">
        <div class="p-4">
            <h1 class="text-2xl font-bold">Dashboard</h1>
        </div>
        <nav class="mt-10">
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Home</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Profile</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">Settings</a>
        </nav>
    </div>

    <!-- Main content -->
    <div class="flex-1 flex flex-col">
        <!-- Topbar -->
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <h1 class="text-2xl font-semibold">Dashboard</h1>
            <div>
                <input type="text" placeholder="Search..." class="border rounded p-2">
                <a href="#" class="ml-4">Logout</a>
            </div>
        </header>

        <!-- Content -->
        <main class="p-4">
            <h2 class="text-xl font-semibold mb-4">Welcome to your dashboard</h2>
            <div class="bg-white p-4 rounded shadow">
                <p>Your content goes here...</p>
            </div>
        </main>
    </div>
</body>
</html>