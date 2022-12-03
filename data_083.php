<?php
include  'koneksi.php';
$sql="SELECT * FROM tbl_customer";
$hasil = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>
    <body>
        <h1>Toko Backery</h1>
        <h3>Melayani dengan totalitas dan hasil terbaik!</h3> <hr>
        <p>TAMPIL DATA CUSTOMER</p>
        <a href="form_083.php">Tambah Data </a> 
        <table width="90%" border="1" cellspacing="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Order</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM tbl_customer";
                $hasil = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($hasil))
                {
                ?>
                <tr>
                    <td><?=$row['ID'];?></td>
                    <td><?=$row['Nama'];?></td>
                    <td><?=$row['Order'];?></td>
                    <td><?=$row['Email'];?></td>
                    <td><?=$row['Alamat'];?></td>
                    <td> <a href="form_edit.php?ID=<?php echo $row['ID']?>">Edit | <a href="delete.php?ID=<?php echo $row['ID']?>"> Delete</td>
                </tr>
                <?php }
                ?>
        </table>
    </body>
</html>