<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<!-- <form action="proses.php" method="POST">
	<input type="text" name="nama_depan">
	<input type="text" name="nama_belakang">
	<input type="submit" value="kirim">
</form> -->
<!-- <form action="percabangan.php" method="GET">
	<input type="text" name="nama_depan">
	<input type="text" name="nama_belakang">
	<input type="submit" value="kirim">
</form> -->
<!--  <form action="coba1.php" method="POST">
	<input type="text" name="nama">
	<input type="submit" value="kirim">
</form> -->
	<!-- <form action="create_data.php" method="GET">
	<input type="text" name="nama"  placeholder="isi nama"> <br>
	<input type="text" name="kelas" placeholder="isi kelas"><br>
	<input type="text" name="nilai" placeholder="isi nilai"><br>
	<input type="submit" value="kirim"> -->

		<?php 
			$id = $_GET['id'];

			include 'coba2.php';
			$data = mysqli_query($koneksi, "SELECT * FROM `coba1` WHERE id = '$id'");
			$tampil = mysqli_fetch_array($data);
		?>

	<form action="coba1.php" method="post">
	<input type="text" name="id" hidden value="<?php echo $tampil['id'];?>">
	<b>Nama</b><br>
	<input type="text" name="nama" value="<?php echo $tampil['nama'];?>"> <br>
	<b>kelas</b><br>
	<input type="text" name="kelas" value="<?php echo $tampil['kelas'];?>"><br>
	<b>Nilai</b><br>
	<input type="text" name="nilai" value="<?php echo $tampil['nilai'];?>"><br>
	<input type="submit" value="kirim">
</body>
</html>