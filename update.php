<?php
include "koneksi.php";

$id = $_POST['ID'];
$nama = $_POST['Nama'];
$order = $_POST['Order'];
$email = $_POST['Email'];
$alamat = $_POST['Alamat'];

$sql = "UPDATE tbl_customer SET Nama='$nama', Order='$order', Email='$email', Alamat='$alamat' WHERE ID=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Edit Data gagal";
}
else{
    echo "Edit Data berhasil <br>";
    echo "<a href = 'data_083.php'>Tampilkan Data </a>";
}

?> 