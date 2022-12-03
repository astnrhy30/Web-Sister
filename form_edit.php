<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
    </head>
    <body>
        <?php
        include "koneksi.php";
        $id=$_GET['ID'];
        $sql = "SELECT * FROM tbl_customer WHERE ID=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "Query Salah";
        }
        ?>
        <h1>Toko Backery</h1>
        <h3>Melayani dengan totalitas dan hasil terbaik!</h3> <hr>
        <p>PERBARU DATA CUSTOMER</p>
        <?php
        while ($row = mysqli_fetch_array($hasil))
        {
        ?>
        <form method="post" action="update.php">
        <input type="hidden" name="ID" value="<?php echo $row['ID']?>">
        <table>
            <tr class="form-group">
                <td>
                    <label>Nama</label>
                </td>
                <td>
                    <input type="text" name="Nama" value="<?php echo $row['Nama']?>" placeholder="Input Nama disini !" ruqueired>
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    <label>Order</label>
                </td>
                <td>
                    <input type="text" name="Order" value="<?php echo $row['Order']?>" placeholder="Input Order disini !" ruqueired>
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    <label>Email</label>
                </td>
                <td>
                    <input type="text" name="Email" value="<?php echo $row['Email']?>" placeholder="Input Email disini !" ruqueired>
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    <label>Alamat</label>
                </td>
                <td>
                    <input type="text" name="Alamat" value="<?php echo $row['Alamat']?>" placeholder="Input Alamat disini !" ruqueired>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="simpan">Update</button>
                </td>
            </tr>
       </table>
        </form>
        <?php } ?>
    </body>
</html>