<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../frontend/css/admin.css">
  </head>
  <body>

  <div class="mini-header">
     <h3></h3>
    </div>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="../frontend/img/TendorNet-logos_black.png" alt="" width="90" height="90"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav"> 
        <li class="nav-item">
          <a class="nav-link active ms-5" aria-current="page" href="akun.php">Akun</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-5" href="paket.php">Paket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-5" href="transaksi/laporan.php">Transaksi</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle ms-5" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="logout.php">log out</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
  
  </nav>
  
  <h3 class="mt-4" style="margin-left: 29%;"> Data Paket </h3>
  <h4 class="mt-4" style="margin-left: 29%;"><a href="tambah-stok.php"> Tambah Paket</a> </h4>
  
 
  <table border="1" cellpadding="10" style="margin-left:auto;margin-right:auto">
  
    <tr>
        <th bgcolor="yellow">No</th>
        <th bgcolor="yellow">ID</th>
        <th bgcolor="yellow">nama_paket </th>
        <th bgcolor="yellow">kategori_paket </th>
        <th bgcolor="yellow">harga_paket</th>
        <th bgcolor="yellow">stok</th>
        <th bgcolor="yellow" colspan="3">Aksi</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($conn,"select * from paket");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id]</td>
            <td>$tampil[nama_paket]</td>
            <td>$tampil[kategori_paket]</td>
            <td>$tampil[harga_paket]</td>
            <td>$tampil[stok]</td>
            <td><a href='?kode=$tampil[id]'> Hapus </a></td>
            <td><a href='ubah-paket.php?kode=$tampil[id]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
      </table>
      
      <?php
      include "koneksi.php";

      if(isset($_GET['kode'])){
        mysqli_query($conn,"delete from paket where id='$_GET[kode]'");
        
        echo "Data berhasil dihapus";
        echo "<meta http-equiv=refresh content=2;URL='paket.php'>";

      }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>