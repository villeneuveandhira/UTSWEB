<?php
    // Connection to database
    include 'config/connection.php';

    // get value from key
    $id=$_GET['id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name       = $_POST['name'];
        $gender     = $_POST['gender'];
        $member     = $_POST['member'];
        $label      = $_POST['label'];
        $origin     = $_POST['origin'];
        $status     = $_POST['status'];
        $fandom     = $_POST['fandom'];
        $debut      = $_POST['debut'];
        $tahun      = $_POST['tahun'];
        $lagu       = $_POST['lagu'];
        $album      = $_POST['album'];
        $leader     = $_POST['leader'];
        $comeback   = $_POST['comeback'];
        $worth      = $_POST['worth'];

        // if empty, then program stop
        if (empty($name)) {
            die("Enter Group's Name");
        }
        else if (empty($gender)) {
            die("Enter Group's Gender");
        }
        else if (empty($member)) {
            die("Enter Number of Members");
        }
        else if (empty($label)) {
            die("Enter Group's Label Name");
        }
        else if (empty($origin)) {
            die("Enter your group's origin");
        }
        else if (empty($status)) {
            die("Enter Group's status");
        }
        else if (empty($fandom)) {
            die("Enter your group's fan name");
        }
        else if (empty($debut)) {
            die("Enter the year of group's debut");
        }
        else if (empty($tahun)) {
            die("How long the group still active?");
        }
        else if (empty($lagu)) {
            die("Enter your group's first song");
        }
        else if (empty($album)) {
            die("How many albums the group had?");
        }
        else if (empty($leader)) {
            die("Enter group leader's name");
        }
        else if (empty($comeback)) {
            die("Recent comeback");
        }
        else if (empty($worth)) {
            die("Enter Group's Net Worth");
        }

        // Change/Update data from table
        $sql = "UPDATE grup SET
        nama_grup = '$name',
        jenis_grup = '$gender',
        jumlah_member = '$member', 
        label = '$label',
        origin = '$origin',
        status_active = '$status',
        fandom = '$fandom',
        debut = '$debut',
        tahun = '$tahun',
        lagu = '$lagu',
        album = '$album',
        leader = '$leader',
        comeback = '$comeback',
        worth = '$worth'
        WHERE id_grup = $id";

        // query to SQL
        $mysqli->query($sql) or die($mysqli->error);
        // redirect to page
        header('location: search.php');
    }

    // checking key or redirect to page
    if(empty($id)) header('location : search.php');

    // show data from table by key
    $sql    = "SELECT * FROM grup WHERE id_grup = '$id' ";
    $query  = $mysqli->query($sql);

    // take query first line
    $grups  = $query->fetch_array();

    // checking the data from table
    if(empty($grups))header('location : search.php');

    include 'views/view_form.php';
?>