<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit an Announcement</title>
</head>
<body>
<div class="max-w-md mx-auto mt-8">
    <h1 class="text-xl font-bold mb-4 text-center mb-[20px] text-blue-500 mb-10">Edit the Announcement with the ID: <?php echo $_POST['id']; ?></h1>

    <form action="edit_ann_traitment.php" method="post" class="bg-white p-6 rounded shadow-md">
        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold mb-2">Title:</label>
            <input name="title" type="text" value="<?php echo $_POST["title"];?>"
                   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-semibold mb-2">Category:</label>
            <input name="cat" type="text" value="<?php echo $_POST["cat"];?>"
                   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-semibold mb-2">Description:</label>
            <textarea name="desc" rows="4"
                      class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"> <?php echo $_POST["desc"];?></textarea>
        </div>
        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-semibold mb-2">Price:</label>
            <input name="price" type="number" value="<?php echo $_POST["price"];?>"
                   class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="text-center">
            <button name="edit" class="hover:opacity-80 font-bold transition-all bg-blue-500 text-white px-4 py-2 rounded-md cursor-pointer">EDIT</button>
        </div>
    </form>
</div>

</body>
</html>