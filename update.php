<?php
include 'coba2.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nilai = $_POST['nilai'];

$data = mysqli_query($koneksi, "UPDATE `coba1` SET nama='$nama',kelas='$kelas',nilai='$nilai' WHERE id = '$id'");

?>