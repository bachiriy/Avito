<?php
include 'config.php';

if (isset($_POST['delete'])) {

    $sql = "DELETE FROM announcement";
    $result =  mysqli_query($connect, $sql);
    if ($result == true) {
        $sql = "ALTER TABLE announcement AUTO_INCREMENT = 1";
        mysqli_query($connect, $sql);
        header('location: index.php');
    }
}

?>
