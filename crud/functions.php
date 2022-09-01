<?php 

$conn = mysqli_connect("localhost", "root", "", "tugas");

function query ($query) {
    global $conn;
    $hasil = mysqli_query($conn, $query);
    $hasils = [];
    while ($hasils = mysqli_fetch_assoc($hasil)) {
        $isi [] = $hasils;
    }
    return $isi;
}

function tambah($data) {
    global $conn;
    if(isset($_POST["submit"])){
        $Nama = $data["Nama"];
        $Kelas = $data["Kelas"];
        $Jurusan = $data["Jurusan"];

        $query = "INSERT INTO murid VALUES('', '$Nama', '$Kelas', '$Jurusan')";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}

function hapus ($id) {
    global $conn;
    // $id = $data["id"];
    mysqli_query($conn, "DELETE FROM murid WHERE id='$id'");
    return mysqli_affected_rows($conn);
}

function ubah ($data) {
    global $conn;
    if(isset($data["submit"])) {
        $id = $_POST["id"];
        $Nama = $_POST["Nama"];
        $Kelas = $_POST["Kelas"];
        $Jurusan = $_POST["Jurusan"];
        $query = "UPDATE murid SET Nama='$Nama', Kelas='$Kelas', Jurusan='$Jurusan' WHERE id='$id'";
        // $query = "UPDATE murid SET Nama='$Nama', Kelas='$Kelas', Jurusan='$Jurusan' WHERE id='$id'";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}

?>