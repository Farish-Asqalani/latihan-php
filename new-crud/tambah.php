<?php 
require "functions.php";

if (isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "<script>alert('sukses')</script>";
    } else {
        echo "<script>alert('gagal')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul, li {
            list-style: none;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <br>
                <input type="tel" name="nama" id="nama" placeholder="Masukkan nama">
            </li>
            <li>
                <label for="kelas">Kelas</label>
                <br>
                <input type="text" name="kelas" id="kelas" placeholder="Masukkan kelas">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <br>
                <input type="text" name="jurusan" id="jurusan">
            </li>
        </ul>
        <button type="submit" id="submit">Tambah</button>
    </form>
</body>
</html>