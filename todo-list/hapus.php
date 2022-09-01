<?php 

require "functions.php";

// tangkap id dari databse
$id = $_GET["id"];

// lalu hapus
hapus($id);

header("location: index.php");

?>