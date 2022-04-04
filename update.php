<?php
include 'koneksi.php';

$ID = $_POST['ID'];
$Nama = $_POST['Nama'];
$NIM = $_POST['NIM'];
$Prodi = $_POST['Prodi'];
$Fakultas = $_POST['Fakultas'];
$Universitas = $_POST['Universitas'];

$sql = "UPDATE tbl_138 set Nama = '$Nama', NIM='$NIM', Prodi='$Prodi', Fakultas='$Fakultas', Universitas='$Universitas' where ID='$ID'";
$hasil =mysqli_query($koneksi, $sql);
if ($hasil){
    echo "Eksekusi update data mahasiswa berhasil<br>";
    echo "<a href='index.php?page=Data'>Show data</a>";
}else{
    echo "Eksekusi update data mahasiswa gagal";
}

?>