<?php
    // Connection to database
    include 'config/connection.php';

    // get value from key
    $id = $_GET["id"];
    if (!empty($id)) {
        $sql = "DELETE FROM grup where id_grup=$id";
        if($mysqli->query($sql)) {
            header('location: search.php'); // redirect to page
        } else {
            echo 'Failed to delete';
        }
    }
?>