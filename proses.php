<?php

	// $nama_depan = $_POST['nama_depan'];
	// $nama_belakang = $_POST['nama_belakang'];
	// echo $nama_depan.$nama_belakang;

	$nama_depan = $_GET['nama_depan'];
	$nama_belakang = $_GET['nama_belakang'];

	if ($nama_depan == "A") {
	echo "LULUS"."<br>";
		}elseif($nama_depan == "B") {
	echo "BAIK"."<br>";
		}else{
	echo "GAGAL"."<br>";
}

	if ($nama_belakang == "A") {
	echo "LULUS"."<br>";
		}elseif($nama_belakang == "B") {
	echo "BAIK"."<br>";
		}else{
	echo "GAGAL"."<br>";
}
?>