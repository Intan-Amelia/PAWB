<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_intan";

$konek = mysqli_connect($host, $user, $password, $dbname);
if(!$konek){
	echo "Koneksi Gagal";
}
?>