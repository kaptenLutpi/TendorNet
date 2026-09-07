document.addEventListener("DOMContentLoaded", function () {
  const target = document.getElementById("navbar");
  if (target) target.innerHTML = `
<div class="mini-header">
  <h3></h3>
</div>

<header class="main-header">
  <div class="container">
    <div class="header-left">
      <a href="home.html">
        <img class="logo" src="img/TendorNet-logos_black.png" alt="TendorNet">
      </a>
    </div>

    <img class="menu-icon" src="img/icons-menu.png" alt="Menu">

    <nav class="header-right">
      <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="paketInternetTv.html">Produk</a></li>
        <li><a href="promo.html">Promo</a></li>
        <li><a href="news.html">Berita</a></li>
        <li><a href="contactus.html">Bantuan</a></li>
        <li><a href="infoTendorNet.html">Info</a></li>
        <li><a href="faq.html">FAQ</a></li>
      </ul>
    </nav>

    <div class="navbar-user">
      <div class="navbar-dropdown">
        <button type="button" class="navbar-user-button" onclick="this.parentElement.classList.toggle('open')">
          Pembeli <span class="dropdown-arrow">▼</span>
        </button>
        <div class="navbar-dropdown-menu">
          <a href="#" onclick="alert('Logout hanya tersedia saat backend PHP dijalankan.'); return false;">Logout</a>
        </div>
      </div>
    </div>
  </div>
</header>
`;
});
