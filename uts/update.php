<?php
include "koneksi.php";

$id_138 = $_POST['id_138'];
$nama = $_POST['nama_138'];
$email = $_POST['email_138'];

$sql = "UPDATE tabel_138 set nama_138 = '$nama', email_138 = '$email' WHERE id_138 = $id_138";
$hasil = mysqli_query($konek, $sql);
if ($hasil){
	echo "Update Data Berhasil<br>";
	echo "<a href='data_138.php'>Lihat Data Tabel</a>";
}else{
	echo "Update Data Gagal";
}
?>