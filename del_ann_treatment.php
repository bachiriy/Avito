<?php
include 'config.php';

if(isset($_POST["yes_btn"])) {

    $id = $_POST["id_input"];
    $sql = "DELETE FROM announcement WHERE ID = ?";
    $stmt = $connect->prepare($sql);

    $stmt->bind_param("i", $id);
    $result = $stmt->execute();

    if ($result == true) {
        header('location: index.php');
    }
}

?>