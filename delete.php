<?php
include 'coba2.php';

$nama = "zhang";
$data = mysqli_query($koneksi, "DELETE FROM `coba1` WHERE nama = '$nama'");

?>