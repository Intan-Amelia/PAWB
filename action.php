<?php
include "koneksi.php";

$Nama = $_POST['Nama'];
$NIM = $_POST['NIM'];
$Prodi = $_POST['Prodi'];
$Fakultas = $_POST['Fakultas'];
$Universitas = $_POST['Universitas'];

$sql = "INSERT INTO tbl_138 VALUES(null,'$Nama','$NIM','$Prodi','$Fakultas','$Universitas')";
$hasil =mysqli_query($koneksi, $sql);
if ($hasil){
    echo "Eksekusi tambah data mahasiswa berhasil<br>";
    echo "<a href='index.php?page=Data'>Show data</a>";
}else{
    echo "Eksekusi tambah data mahasiswa gagal";
}

?>