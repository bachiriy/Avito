<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>CRUD Template</title>
</head>
<body class="bg-gray-100 p-8">

<div class="max-w-3xl mx-auto">
    <!-- Create Form -->
        <h1 class="text-3xl font-bold mb-4 text-center mb-[20px] text-blue-500 mb-10">Welcome to Avito!</h1>
    <div class="flex justify-between my-6">
        <h3 class="text-xl font-semibold mb-4">Explore our latest listings and find great deals.</h3>
        <a href="add_ann.php" type="submit" class="bg-blue-500 text-white px-4 rounded hover:opacity-70 transition-all flex items-center cursor-pointer">Add a New Announcement</a>
    </div>


    <!-- Table -->
    <table class="w-full bg-white border">
        <thead>
        <tr>
            <th class="border">ID</th>
            <th class="border">Title</th>
            <th class="border">Category</th>
            <th class="border">Description</th>
            <th class="border">Price</th>
            <th class="border">Actions</th>
        </tr>
        </thead>
        <tbody>
        <!-- Example Row -->
        <tr class="h-12">
            <td class="border text-center">1</td>
            <td class="border text-center">Sample Item</td>
            <td class="border text-center">Sample Item</td>
            <td class="border text-center">Sample Item</td>
            <td class="border text-center">Sample Item</td>
            <td class="border text-center">
                <button class="text-white p-1 px-2 rounded hover:opacity-70 transition-all mx-1 bg-blue-500">Edit</button>
                <button class="bg-red-500 text-white hover:opacity-70 transition-all mx-1 rounded p-1">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
</div>


</body>
</html>
