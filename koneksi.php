<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "backerys"; 
$koneksi = mysqli_connect($host,$user,$password,$dbname);
if (!$koneksi) {
    echo "koneksi gagal";
}
?>