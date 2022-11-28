<?php
include 'coba2.php';

// $nama = "zhang";
// $kelas = "ti2";
// $nilai = 90 ;
$nama = $_GET['nama'];
$kelas = $_GET['kelas'];
$nilai = $_GET['nilai'];

$data = mysqli_query($koneksi,"INSERT INTO `coba1`(`nama`, `kelas`, `nilai`) VALUES ('$nama', '$kelas','$nilai')");


?>