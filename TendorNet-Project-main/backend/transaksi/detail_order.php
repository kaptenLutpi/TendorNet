<?php
require_once 'koneksi.php';
require_once 'header.php';

if (!isset($_GET['id_order'])) {
  header('Location: laporan.php');
}

?>

<div class="container mt-5">
  <h4>Detail Transaksi</h4>
  <br>
  
  <a href="laporan.php">
    <button class="btn btn-success btn-sm">
      <i class="fa fa-arrow-left"></i> Kembali
    </button>
  </a>

  <table class="table table-bordered mt-3">
    <thead align="center">
      <tr>
        <th>#</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Pembelian</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM `detail_paket` INNER JOIN paket ON detail_paket.id_produk = paket.id WHERE id_order = '$_GET[id_order]'");
    $no = 1;

    while($detail = $query->fetch_assoc()) :
    ?>

      <tr>
        <td align="center"><?= $no++; ?></td>
        <td><?= $detail['nama_paket']; ?></td>
        <td><?= $detail['harga_paket']; ?></td>
        <td align="center"><?= $detail['pembelian']; ?></td>
      </tr>

    <?php endwhile; ?>

    </tbody>
  </table>
</div>