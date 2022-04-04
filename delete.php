<?php
include 'koneksi.php';
$ID=$_GET['ID'];

$sql="DELETE FROM tbl_138 WHERE ID='$ID'";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data gagal";
}else{
    echo "Data mahasiswa berhasil di delete<br>";
    echo "<a href='index.php?page=Data'>Show Data</a>";
}

?>