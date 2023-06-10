<?php
    // Connection to database
    $host   = 'localhost';
    $user   = 'root';
    $pass   = '';
    $db     = 'web_uts';

    $mysqli = mysqli_connect($host, $user, $pass, $db) or die ('Failed to connect');
?>