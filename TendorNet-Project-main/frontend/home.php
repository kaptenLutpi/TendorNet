<?php 

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TendorNet</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="mini-header">
      <h3></h3>
    </div>
    <header>
        <div class="container">
          
          <div class="header-left">
            <img  class="logo" src="img/TendorNet-logos_black.png" />
          </div>
          <img class="menu-icon" src="img/icons-menu.png"></span>
            <div class="header-right">
              <ul>
                <li><a href = "home.php">Home</a></li>
                <li><a href = "paketInternetTv.php">Produk</a></li>
                <li><a href = "promo.php">Promo</a></li>
                <li><a href = "news.php">Berita</a></li>
                <li><a href = "contactus.php">Bantuan</a></li>
                <li><a href = "infoTendorNet.php">Info</a></li>
                <li><a href = "faq.php">FAQ</a>
            </div>
            
          </div>
          <div class="btn-group mt-4 ms-5">
            <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Pembeli
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item ms-4" href="../backend/logout.php" >Logout</a></li>
            </ul>
          </div>
        </div>
    </header>
    <div class="top-wrapper">
      <div class="container cover"></div>
    </div>

    <div class="body-wrapper">
      <div class="text-left">
        <h2>Selamat Datang di TendorNet</h2>
        <h4>Layanan Digital Cerdas, Cepat dan  Berkualitas
          <br>Untuk Aktifitas Sehari-hari Anda</h4>
      </div>
      <div class="text-right">
        <p>merupakan layanan digital<br> 
          dengan internet ultra cepat hingga 200 mbps <br>
          dan bebas akses serta TV Home Cable bebas<br>
          menonton di banyak channel<br>
          dan jangan khawatir dengan Telepon<br>
          Rumah bebas nelpon sepuasnya.</p> 
        <div class="btn-info">
          <span> <a  href = "infoTendorNet.php" >Info Detail</a></span>
        </div>
      </div>
      <div class="btn-bungkus">
        <div class="btn-paket">
          <span><a  href = "paketInternetTv.php" >Pilih Paket</a></span>
        </div>
        <div class="btn-paket">
          <span> <a  href = "contactus.php"!')" > Cek Cakupan Area</a></span>
        </div>
        <div class="btn-paket">
          <span> <a  href = "promo.php"" > Promo Menarik</a></span>
        </div>
      </div>
      
    </div>


    <div class="protokol">
      <h2 class="protokol-title">TendorNet Menawarkan</h2>
      <div class="protokol-content">
        <img src="img/tv1.png">
        <h4>Internet</h4>
        <p>Internet dengan kecepatan up to 200 Mbps
            <br> bebas akses
        </p>
      </div>
      <div class="protokol-content">
        <img src="img/tipi.png">
        <h4>TV</h4>
        <p>Beragam tayangan menarik <br>dari HBO, Disney+ Hotstar<br>
          Netflix dengan  fitur <br> menarik 
          </p>
      </div>
      <div class="protokol-content">
        <img src="img/telepon.png">
        <h4>Telepon</h4>
        <p>Telepon bebas akses kemana saja tanpa
          <br>biaya tambahan</p>
      </div>
    </div>


    <form class="form">
      <div class="container">
        <h3 style="text-align: center; font-size: 32px">Contact Us</h3>
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" placeholder="Nama Lengkap">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email">

        <label for="pesan">Pesan</label>
        <textarea name="subject" id="subject" placeholder="Tulis sesuatu" style="height: 200px"></textarea>

        <input type="submit" value="Kirim">
      </div>
    </form>

    <footer>
      <div class="container">
        
        <div class="footer-left">
          <img  class="logo" src="img/TendorNet-logos_black.png" />
        </div>
        <img class="menu-icon" src="img/icons-menu.png"></span>
          <div class="footer-right">
            <ul>
              <li><a  href = "contactus.php" >Hubungi Kami</a></li>
              <li><a  href = "promo.php" >Syarat dan Ketentuan</a></li>
              <li><a  href = "news.php" >Berita Teknologi</a></li>
              <li><a  href = "infoTendorNet.php" >Info TendorNet</li>
            </ul>
          </div>
          
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
      function myalert() { 
            alert("Selamat datang "); 
        } 
    </script>
  </body>
</html>
