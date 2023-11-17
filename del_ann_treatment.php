<?php
include 'config.php';

if(isset($_POST["yes_btn"])) {

    $id = $_POST["id"];
    $sql = "DELETE FROM announcement WHERE ID = ?";
    $prepare = $connect->prepare($sql);

    $prepare->bind_param("i", $id);
    $result = $prepare->execute();

    if ($result == true) {
        header('location: index.php');
    }
}

?>