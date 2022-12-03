<?php
include "koneksi.php";

$nama = $_POST['Nama'];
$order = $_POST['Order'];
$email = $_POST['Email'];
$alamat = $_POST['Alamat'];

$sql = "INSERT INTO tbl_customer VALUES(null, '$nama', '$order', '$email', '$alamat')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi tambah data gagal";
}
else{
    echo "eksekusi tambah data berhasil <br>";
    echo "<a href = 'data_083.php'>Tampilkan Data </a>";
}

?>