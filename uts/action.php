<?php
include "koneksi.php";

$nama = $_POST['nama_138'];
$email = $_POST['email_138'];

$sql = "INSERT INTO tabel_138 VALUES(null, '$nama', '$email')";
$hasil = mysqli_query($konek, $sql);
if ($hasil){
	echo "Tambah Data Berhasil<br>";
	echo "<a href='data_138.php'>Lihat Data Tabel</a>";
}else{
	echo "Tambah Data Gagal";
}
?>