<?php

include 'coba2.php';

$nama = $_POST['nama'];
$data = mysqli_query($koneksi,"SELECT * FROM `coba1`");

	// if ($data == true) {
	// 	echo "koneksi berhasil";
	// 	}else{
	// 	echo "koneksi gagal";
	// }

foreach ($data as $data) {
	echo $data['nama']."&nbsp";
 	echo $data['kelas']."&nbsp";
 	echo $data['nilai'];
 	?>
 	<a href="proses.php?id=<?php echo $data['id'] ?>">delete</a><br>
 	<?php
 }

?>