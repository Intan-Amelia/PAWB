<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Mahasiswa</font></center>
		<hr>
		<a href="index.php?page=Add Data"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
	<table width="85%" border="1" class="table table-striped jambo_table bulk_action">
		<thead>
		<tr>
			<td>ID</td>
			<td>NAMA</td>
			<td>NIM</td>
			<td>PRODI</td>
			<td>FAKULTAS</td>
			<td>UNIVERSITAS</td>
			<td>ACTION</td>
		</tr>
		</thead>
		<tbody>
		<?php
		include 'koneksi.php';
		$query="SELECT * FROM tbl_138";
		$hasil=mysqli_query($koneksi,$query);

		while ($baris=mysqli_fetch_array($hasil)){
		?>
		<tr>
			<td><?php echo $baris['ID']?></td>
			<td><?php echo $baris['Nama']?></td>
			<td><?php echo $baris['NIM']?></td>
			<td><?php echo$baris['Prodi']?></td>
			<td><?php echo$baris['Fakultas']?></td>
			<td><?php echo$baris['Universitas']?></td>
			<td><a href="edit.php?ID=<?=$baris['ID']?>" class="btn btn-secondary btn-sm">Edit</a><a href="delete.php?ID=<?=$baris['ID']?>" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a></td>
		</tr>
	<?php }
	?>
	</tbody>
	</table>
</body>
</html>