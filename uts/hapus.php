<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM tabel_138 WHERE id_138=$id";
$hasil=mysqli_query($konek, $sql);
if ($hasil){
    echo "Data berhasil dihapus<br>";
    echo "<a href = 'data_138.php'>Lihat Data Tabel</a><br>";
}else{
    echo "Data gagal dihapus";
}

?>