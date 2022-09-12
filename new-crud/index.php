<?php 
require "functions.php";

$murid = query("SELECT * FROM crud");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <p><a href="tambah.php">Tambah</a></p>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Update</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach($murid as $data) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $data["nama"] ?></td>
                <td><?= $data["kelas"] ?></td>
                <td><?= $data["jurusan"] ?></td>
                <td>
                    <a href="ubah.php?id=<?= $data["id"] ?>">Ubah</a>
                    <a href="hapus.php?id=<?= $data["id"] ?>">Hapus</a>
                </td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>