<?php
include 'config.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $category = $_POST['cat'];
    $description = $_POST['desc'];
    $price = $_POST['price'];

    $result = $prepare->execute();

    if ($result == true) {
        header('location: index.php');
    }

}
