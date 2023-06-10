<?php
    // Connection to database
    include 'config/connection.php';

    $sql = 'SELECT * FROM grup';

    // Searching
    $search = @$_GET['searchData'];
    // sql untuk mencari data
    if (!empty($search)) {
        $sql .= " WHERE
        nama_grup LIKE '%$search%' OR
        jumlah_member LIKE '%$search%' OR
        label LIKE '%$search%'";
    }
    $list = $mysqli->query($sql);

    include 'views/view_table.php';
?>