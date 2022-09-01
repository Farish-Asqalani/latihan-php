<?php 
// untuk mengkoneksikan ke database kita simpan mysqli_connect nya kedalam variable
// agar mudah untuk dipanggil dan mudah untuk kita ubah jika ada perubahan kedepannya
$conn = mysqli_connect("localhost", "root", "", "todo_list");

function query($query) {
    // global $conn untuk bisa mengakses variable $conn didalam function
    global $conn;
    // buat variable untuk menampung query yang kita lakukan
    $hasil = mysqli_query($conn, $query);
    // variable tipe data array kosong untuk menampung isi dari database
    $hasils = [];
    // lakukan perulangan untuk memasukkan isi database berdasarkan array associative kedalam
    while($hasils = mysqli_fetch_assoc($hasil)){
        // variable isi
        $isi [] = $hasils;
    }
    // return $isi
    return $isi;
}

// function tambah data
function tambah ($data) {
    // untuk bisa mengakses variable $conn
    global $conn;
    // lakukan percabangan jika tombol dengan tipe submit telah ditekan maka lakukan
    // perintah berikut
    if (isset($_POST["submit"])) {
    // tangkap todo menggunakan variabla 
    $todo = $data["todo"];
    // lakukan query insert into nama Database Values value yang kita masukan
    $query = "INSERT INTO todo VALUES('', '$todo')";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    }
}

// function hapus untuk menghapus sesuai id
function hapus($id) {
    global $conn;
    // tangkap id dari database kedalam variable
    $id = $_GET["id"];
    // lakukan query delete from nama database where id
    // karena kita mau menghapus id nya
    mysqli_query($conn, "DELETE FROM todo WHERE id='$id'");
}


?>