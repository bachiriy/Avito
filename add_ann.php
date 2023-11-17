<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Add a New Announcement</title>
</head>
<body>
<div class="max-w-md mx-auto mt-8">
    <h1 class="text-3xl font-bold mb-4 text-center mb-[20px] text-blue-500 mb-10">Add a New Announcement</h1>

    <form action="add_ann_treatment.php" method="post" class="bg-white p-6 rounded shadow-md">
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold mb-2">Title:</label>
            <input type="text" id="title" name="title" required
                   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-semibold mb-2">Category:</label>
            <input type="text" id="category" name="category" required
                   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-semibold mb-2">Description:</label>
            <textarea id="description" name="description" rows="4" required
                      class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
        </div>
        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-semibold mb-2">Price:</label>
            <input type="number" id="price" name="price" required
                   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="text-center">
            <button name="add" class="hover:opacity-80 font-bold transition-all bg-blue-500 text-white px-4 py-2 rounded-md cursor-pointer">ADD</button>
        </div>
    </form>
</div>

</body>
</html>