<?php

include 'coba2.php';

$data = mysqli_query($koneksi,"SELECT * FROM `coba`");

// 	if ($data == true) {
// 	echo "koneksi berhasil";
// 	}else{
// 	echo "koneksi gagal";
// }

foreach ($data as $data) {
	echo $data['nama']."&nbsp";
	echo $data['kelas']."&nbsp";
	echo $data['nilai']."<br";
}

?>