<?php
// Navbar bersama untuk seluruh halaman frontend TendorNet.
$isGuest = basename($_SERVER['PHP_SELF']) === 'index.php';
?>

<div class="mini-header">
    <h3></h3>
</div>

<header class="main-header">
    <div class="container">
        <div class="header-left">
            <a href="home.php">
                <img class="logo" src="img/TendorNet-logos_black.png" alt="TendorNet">
            </a>
        </div>

        <img class="menu-icon" src="img/icons-menu.png" alt="Menu">

        <nav class="header-right">
            <ul>
                <?php if ($isGuest): ?>
                    <li><a href="#" onclick="alert('Login/Daftar Terlebih dahulu!'); return false;">Home</a></li>
                    <li><a href="#" onclick="alert('Login/Daftar Terlebih dahulu!'); return false;">Produk</a></li>
                    <li><a href="#" onclick="alert('Login/Daftar Terlebih dahulu!'); return false;">Promo</a></li>
                    <li><a href="#" onclick="alert('Login/Daftar Terlebih dahulu!'); return false;">Berita</a></li>
                    <li><a href="#" onclick="alert('Login/Daftar Terlebih dahulu!'); return false;">Bantuan</a></li>
                    <li><a href="#" onclick="alert('Login/Daftar Terlebih dahulu!'); return false;">Info</a></li>
                    <li><a href="#" onclick="alert('Login/Daftar Terlebih dahulu!'); return false;">FAQ</a></li>
                <?php else: ?>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="paketInternetTv.php">Produk</a></li>
                    <li><a href="promo.php">Promo</a></li>
                    <li><a href="news.php">Berita</a></li>
                    <li><a href="contactus.php">Bantuan</a></li>
                    <li><a href="infoTendorNet.php">Info</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                <?php endif; ?>
            </ul>
        </nav>

        <div class="navbar-user">
            <?php if ($isGuest): ?>
                <a href="../backend/login.php" class="navbar-user-button">Daftar Sekarang</a>
            <?php else: ?>
                <div class="navbar-dropdown">
                    <button type="button" class="navbar-user-button" onclick="this.parentElement.classList.toggle('open')">
                        Pembeli <span class="dropdown-arrow">▼</span>
                    </button>
                    <div class="navbar-dropdown-menu">
                        <a href="../backend/logout.php">Logout</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>
