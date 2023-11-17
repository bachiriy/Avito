<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Deleting Confirmation</title>
</head>
<body>

<div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md mt-8 absolute top-52 inset-x-96">
    <p class="mb-4 text-lg">Are you sure you want to delete this announcement?</p>

    <form  action="del_ann_treatment.php" method="post"  class="flex justify-end space-x-4" id="yes-no-btns">

        <input type="hidden" value="<?php echo $_POST['id']; ?>" name="id_input">
        <button name="yes_btn" type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-700 transition-all">Yes</button>
    </form>
    <a href="index.php" type="button" class="bg-gray-300 text-gray-800 py-2 px-4 rounded-md hover:bg-gray-400 transition-all">No</a>
</div>
</body>
</html>





