<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql = "DELETE FROM tbl_customer WHERE ID=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Data gagal dihapus";
}
else {
    echo "Data berhasil dihapus <br>";
    echo "<a href='data_083.php'>Tampilkan Data </a>";
}

?>