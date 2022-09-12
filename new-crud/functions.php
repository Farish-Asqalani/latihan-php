<?php  

$conn = mysqli_connect("localhost", "root", "farish", "tugas");

function query($query){
    global $conn;
    $hasil = mysqli_query($conn, $query);
    $hasils = [];
    while($hasils = mysqli_fetch_assoc($hasil)){
        $isi [] = $hasils;
    }
    return $isi;
}

function tambah($data){
    global $conn;  
    if(isset($_POST["submit"])){
        $nama = $data["nama"];
        $kelas = $data["kelas"];
        $jurusan = $data["jurusan"];

        $query = "INSERT INTO "
    }
}