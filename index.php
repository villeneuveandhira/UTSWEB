<?php
    // Connection to database
    include 'config/connection.php';

    $sql = 'SELECT * FROM grup';
    $list = $mysqli->query($sql);

    include 'views/view_all.php';
?>