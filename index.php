<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVITO</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

<div class="div mx-16 my-6">
    <!-- Create Form -->
    <h1 class="text-3xl font-bold mb-4 text-center mb-[20px] text-blue-500 mb-10">Welcome to Avito!</h1>
    <div class="flex justify-between my-6">
        <h3 class="text-xl font-semibold mb-4">Explore our latest listings and find great deals.</h3>
        <form class="flex" method="post" action="del_all.php">
            <button name="delete" class="mr-4 bg-red-500 text-white px-4 rounded hover:opacity-70 transition-all flex items-center cursor-pointer">Delet All</button>
            <a href="add_ann.php" class="bg-blue-500 text-white px-4 rounded hover:opacity-70 transition-all flex items-center cursor-pointer">Add a New Announcement</a>
        </form>
    </div>
</div>


<div class="div container mx-auto my-8 p-8 bg-white shadow-lg rounded-lg">
    <h1 class="text-2xl font-semibold mb-6">Announcements</h1>

    <!-- Table -->
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
        <tr class="w-full">
            <th class="py-2 px-4 border-b bg-gray-100 text-center w-14">ID</th>
            <th class="py-2 px-4 border-b bg-gray-100 text-center w-40">Title</th>
            <th class="py-2 px-4 border-b bg-gray-100 text-center w-40">Category</th>
            <th class="py-2 px-4 border-b bg-gray-100 text-center">Description</th>
            <th class="py-2 px-4 border-b bg-gray-100 text-center w-40">Price</th>
            <th class="py-2 px-4 border-b bg-gray-100 text-center w-40">Actions</th>
        </tr>
        </thead>
        <tbody>
            </td>
        </tr>
        <?php } ?>

        </tbody>
    </table>
</div>
</body>
</html>
