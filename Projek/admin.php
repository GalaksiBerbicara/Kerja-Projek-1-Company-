<?php
include("config.php");
if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $pw = $_POST['pw'];

    $sql = "SELECT * FROM `admin` WHERE nama = '$nama' AND pw = '$pw'";
    $result = $db->query($sql);

    if ($result) {
        session_start();
        $_SESSION['result'] = $result;
        header("Location: dashboard.php?status=sukses");
    } else {
        header("Location: login.php?status=gagal");
        exit() ;
    }

} else{
    die("Akses dilarang...");

}
?>