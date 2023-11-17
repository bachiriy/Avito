<?php
include 'config.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $category = $_POST['cat'];
    $description = $_POST['desc'];
    $price = $_POST['price'];

    $sql = "UPDATE announcement SET Title = ?, Category = ?, Description = ?, Price = ? WHERE ID = ?;";
    $prepare = $connect->prepare($sql);
    $prepare->bind_param('sssii', $title, $category, $description, $price, $id);
    $result = $prepare->execute();

    if ($result == true) {
        header('location: index.php');
    }

}
