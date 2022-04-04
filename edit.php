<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
</head>
<body>
	<?php
	include 'koneksi.php';
	$ID=$_GET['ID'];
	$sql="SELECT * FROM tbl_138 WHERE ID='$ID'";
	$hasil=mysqli_query($koneksi,$sql);
	if(!$hasil){
		echo "Query Salah";
	}
	?>
	<h1>Edit Data Mahasiswa</h1>
	<?php
	while ($baris=mysqli_fetch_array($hasil)){
	?>
	<form method="post" action="update.php">
        <input type="hidden" name="ID" value="<?php echo $baris['ID']?>">
        Nama : <input type="text" name="Nama" value="<?php echo $baris['Nama']?>"><br/>
        NIM : <input type="text" name="NIM" value="<?php echo $baris['NIM']?>"><br/>
        PRODI : <input type="text" name="Prodi" value="<?php echo $baris['Prodi']?>"><br/>
        FAKULTAS : <input type="text" name="Fakultas" value="<?php echo $baris['Fakultas']?>"><br/>
        UNIVERSITAS : <input type="text" name="Universitas" value="<?php echo $baris['Universitas']?>"><br/>
        <button type="submit">Update</button>
    </form>
<?php } ?>
</body>
</html>