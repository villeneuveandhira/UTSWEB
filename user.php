<?php
    //Connection to database
    include 'config/connection.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

        // Add/Insert data to table
        $sql = "INSERT INTO grup VALUES (0, '$gender', '$name', '$member', '$label', '$origin', '$status', '$fandom', '$debut', '$tahun', '$lagu', '$album', '$leader', '$comeback', '$worth')";

        // query to SQL
        $mysqli->query($sql) or die($mysqli->error);
        header('location: search.php');
    }

    include 'views/view_form.php';
?>