<!DOCTYPE html>
<html>
<head>
	<title>Tabel 138</title>
</head>
<body>
	<h1>Data 138</h1>
	<button><a href="tambah.php">Tambah Data</a></button>
	<table width="80%" border="1" cellspacing="1">
		<tr>
			<td>ID</td>
			<td>Nama</td>
			<td>Email</td>
			<td>Aksi</td>
		</tr>
		<?php
		include 'koneksi.php';
		$sql = "SELECT * FROM tabel_138";
		$hasil = mysqli_query($konek, $sql);
		while ($baris = mysqli_fetch_array($hasil)) {
		?>
		<tr>
			<td><?=$baris['id_138'];?></td>
			<td><?=$baris['nama_138'];?></td>
			<td><?=$baris['email_138'];?></td>
			<td><button><a href="editdata.php?id=<?=$baris['id_138']?>"> Edit </a></button> | <button><a href="hapus.php?id=<?=$baris['id_138']?>"> Hapus </a></button></td>
		</tr>
		<?php }
		?>
	</table>
</body>
</html>