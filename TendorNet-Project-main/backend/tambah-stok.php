<h3> Tambah Stok Paket </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Nama Paket </td>
        <td> <input type="text" name="nama_paket"> </td>
    </tr>
    <tr>
        <td> Kategori Paket </td>
        <td> <input type="text" name="kategori_paket"> </td>
    </tr>
    <tr>
        <td> Harga Paket </td>
        <td> <input type="text" name="harga_paket"> </td>
    </tr>
    <tr>
        <td> Stok </td>
        <td> <input type="text" name="stok"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
    <tr>
        <td></td>
        <td><a href="paket.php"></a><input type="submit" name="proses" value="kembali"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($conn, "insert into paket set  
nama_paket = '$_POST[nama_paket]',
kategori_paket = '$_POST[kategori_paket]',
harga_paket = '$_POST[harga_paket]',
stok = '$_POST[stok]'");

echo "Data barang baru telah tersimpan";
echo "<meta http-equiv=refresh content=1;URL='paket.php'>";

}

?>