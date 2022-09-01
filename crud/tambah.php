<?php 
require "functions.php";

if(isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil ditambahkan');
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan');
        </script>";
    }
    header("location: index.php");
}


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
    <form action="" method="POST">
        <ul>
            <li><input type="text" name="Nama" id="Nama" placeholder="Nama"></li>
            <li><input type="text" name="Kelas" id="Kelas" placeholder="Kelas"></li>
            <li><input type="text" name="Jurusan" id="Jurusan" placeholder="Jurusan"></li>
            <button type="submit" name="submit" id="submit">Tambah</button>
        </ul>
    </form>
</body>
</html>