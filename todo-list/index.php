<?php 
// require functions.php agar kita bisa mengakses function function yang ada didalam
// file functions.php
require "functions.php";

// lakukan query untuk memilih table mana yang mau kita ambil
$list = query("SELECT * FROM todo");

// function tambah untuk mengaktifkan function tambah
tambah($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: 2em auto;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .container {
            display: flex;
            justify-content: center;
        }

    </style>
</head>
<body>
    <div class="container">
    <form action="" method="POST">
        <label for="todo"></label>
        <input type="text" name="todo" id="todo">
        <button type="submit" id="submit" name="submit">Tambah</button>
    </form>
    </div>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>todo</th>
        </tr>
        <!-- lakukan perulagan array menggunakan foreach untuk menampilkan isi dari database -->
        <!-- yang sudah menjadi array associative -->
        <?php foreach ($list as $data) : ?>
        <tr>
            <td><a href="hapus.php?id=<?= $data["id"] ?>"><?= $data["list"] ?></a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>