<?php
include("config.php");
if (isset($_POST['submit'])) {
    $tanggal = date('Y-m-d');
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];
    // buat query
    $sql = "INSERT INTO komen (tanggal, email, nama, pesan) VALUES ('$tanggal', '$email','$nama','$pesan')";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>