<?php
// varibel menggunakan dollar
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "feedback";
$db = mysqli_connect($server, $user, $password, $nama_database);
// mysqli_connect untuk terhubung dengan database my sql
if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>