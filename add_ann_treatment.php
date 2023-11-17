<?php
include 'config.php';

if (isset($_POST['add'])) {

    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    include "test.sql";

    $sql = "INSERT INTO announcement (Title, Category, Description, Price) VALUES (?,?,?,?);";
    $stm = $connect->prepare($sql);
    $stm->bind_param('sssi',$title, $category, $description, $price);
    $result =$stm->execute();

    if ($result == true) {
        header('location:index.php');
    }
}

?>