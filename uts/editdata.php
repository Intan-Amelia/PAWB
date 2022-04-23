<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM tabel_138 where id_138 = $id";
	$hasil = mysqli_query($konek, $sql);
	if(!$hasil){
		echo "query salah";
	}
	?>
	<h1>Edit Data Buku</h1>
	<?php
	while ($baris = mysqli_fetch_array($hasil)) {
	?>
	<form method="post" action="update.php">
		<input type="hidden" name="id_138" value="<?php echo $baris['id_138']?>">
		Nama : <input type="text" name="nama_138" value="<?php echo $baris['nama_138']?>"><br>
		Email : <input type="text" name="email_138" value="<?php echo $baris['email_138']?>"><br>
		<button type="submit">Update</button>
	</form>
<?php } ?>
</body>
</html>