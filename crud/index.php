<?php 
require "functions.php";

$murid = query("SELECT * FROM murid");



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
    <h1><a href="tambah.php">Tambah data</a></h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Update</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($murid as $data) : ?>
            <tr>
            <td><?= $i ?></td>
            <td><?= $data["Nama"] ?></td>
            <td><?= $data["Kelas"] ?></td>
            <td><?= $data["Jurusan"] ?></td>
            <td>
                <a href="update.php?id=<?= $data["id"] ?>">Update</a>
                <a href="hapus.php?id=<?= $data["id"] ?>" onclick="return('yakin?')">Hapus</a>
            </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>