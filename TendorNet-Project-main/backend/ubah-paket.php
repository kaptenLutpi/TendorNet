<?php
include "koneksi.php";
$sql=mysqli_query($conn,"select * from paket where id='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<h3> Ubah Data Paket </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> ID Paket </td>
        <td> <input type="text" name="id_paket" value="<?php echo $data['id']; ?>"> </td>
    </tr>
    <tr>
        <td> Nama Paket </td>
        <td> <input type="text" name="nama_paket" value="<?php echo $data['nama_paket']; ?>"> </td>
    </tr>
    <tr>
        <td> Kategori Paket </td>
        <td> <input type="text" name="kategori_paket" value="<?php echo $data['kategori_paket']; ?>"> </td>
    </tr>
    <tr>
        <td> Harga Paket </td>
        <td> <input type="text" name="harga_paket" value="<?php echo $data['harga_paket']; ?>"> </td>
    </tr>
    <tr>
        <td> stok </td>
        <td> <input type="text" name="stok" value="<?php echo $data['stok']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
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
mysqli_query($conn, "update paket set  
nama_paket = '$_POST[nama_paket]',
kategori_paket = '$_POST[kategori_paket]',
harga_paket = '$_POST[harga_paket]',
stok = '$_POST[stok]'
where id = '$_GET[kode]'");

echo "Data Paket telah diubah";
echo "<meta http-equiv=refresh content=1;URL='paket.php'>";

}

?>