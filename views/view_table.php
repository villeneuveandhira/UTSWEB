<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Design Web</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis&display=swap">
</head>
<body>
    <div class="showstab">
        <!-- Back -->
        <br>
        <a href="http://localhost/kuliah/designweb/uts-web/" class="back">Back to Home</a>
        <a href="search.php" class="back">REFRESH</a>
        <a href="user.php" class="back">REGISTER</a>
        <br><br><br>
        <!-- Table -->
        <table class="my_table">
            <tr>
                <th scope="col">Group's</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Number of Members</th>
                <th scope="col">Label</th>
                <th scope="col">Origin</th>
                <th scope="col">Status</th>
                <th scope="col">Fandom's Name</th>
                <th scope="col">Debut Year</th>
                <th scope="col">until</th>
                <th scope="col">Debut Song</th>
                <th scope="col">Album</th>
                <th scope="col">Leader</th>
                <th scope="col">Recent Comeback</th>
                <th scope="col">Worth</th>
                <th scope="col">#</th>
            </tr>
            <?php
                $i = 1;
                while ($data = @$list->fetch_array()) {
            ?>
            <tr align="center">
                <td><?= $i++ ?></td>
                <td><?= $data['nama_grup'] ?></td>
                <td><?= $data['jenis_grup'] ?></td>
                <td><?= $data['jumlah_member'] ?></td>
                <td><?= $data['label'] ?></td>
                <td><?= $data['origin'] ?></td>
                <td><?= $data['status_active'] ?></td>
                <td><?= $data['fandom'] ?></td>
                <td><?= $data['debut'] ?></td>
                <td><?= $data['tahun'] ?></td>
                <td><?= $data['lagu'] ?></td>
                <td><?= $data['album'] ?></td>
                <td><?= $data['leader'] ?></td>
                <td><?= $data['comeback'] ?></td>
                <td><?= $data['worth'] ?></td>
                <td>
                <div class="flex">
                <!-- Update -->
                    <p class="operations">
                        <a href="update.php?id=<?= $data['id_grup'] ?>" onclick="return confirm('Somethings wrong with this group?');"><img src="img/menu.png"></a>
                    </p>
                    <!-- Delete -->
                    <p class="operations">
                        <a href="delete.php?id=<?= $data['id_grup'] ?>" onclick="return confirm('DISBAND this group??');"><img src="img/toppng.com-edit-delete-icon-delete-icon-980x980.png"></a>
                    </p>
                </div>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
