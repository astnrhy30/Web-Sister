<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
</head>
<body>
    <h1>Toko Backery</h1>
    <h3>Melayani dengan totalitas dan hasil terbaik!</h3> <hr>
    <p>TAMBAH DATA CUSTOMER</p>
    <form method="post" action="action.php">
    <table>
            <tr class="form-group">
                <td>
                    <label>Nama</label>
                </td>
                <td>
                    <input type="text" name="Nama" value="" placeholder="Input Nama disini !" ruqueired>
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    <label>Order</label>
                </td>
                <td>
                    <input type="text" name="Order" value="" placeholder="Input Order disini !" ruqueired>
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    <label>Email</label>
                </td>
                <td>
                    <input type="text" name="Email" value="" placeholder="Input Email disini !" ruqueired>
                </td>
            </tr>
            <tr class="form-group">
                <td>
                    <label>Alamat</label>
                </td>
                <td>
                    <input type="text" name="Alamat" value="" placeholder="Input Alamat disini !" ruqueired>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="simpan">Update</button>
                </td>
            </tr>
       </table>
    </form>
</body>
</html>