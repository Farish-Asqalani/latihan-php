<?php 
require "functions.php";

$id = $_GET["id"];

$murid = mysqli_query($conn, "SELECT * FROM murid WHERE id='$id'");

if(isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil diubah');
        </script>";
    } else {
        echo "<script>
            alert('Data gagal diubah');
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
    <?php while ($data = mysqli_fetch_array($murid)) :  ?>
    <form action="" method="POST">
        <ul>
            <li><input type="hidden" name="id" id="id" value="<?= $data["id"] ?>"></li>
            <li><input type="text" name="Nama" id="Nama" placeholder="Nama" value="<?= $data["Nama"]; ?>"></li>
            <li><input type="text" name="Kelas" id="Kelas" placeholder="Kelas" value="<?= $data["Kelas"] ?>"></li>
            <li><input type="text" name="Jurusan" id="Jurusan" placeholder="Jurusan" value="<?= $data["Jurusan"] ?>"></li>
            <button type="submit" name="submit" id="submit">Tambah</button>
        </ul>
    </form>
    <?php endwhile; ?>
</body>
</html>