<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Program</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background-color: #f9f5ff;
    }

     header {
      padding: 15px 40px;
      background: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .logo img {
      height: 45px;
    }

    nav {
      display: flex;
      align-items: center;
      gap: 24px;
    }

    .nav-link {
      color: #000 !important;
      font-weight: 600;
      text-transform: uppercase;
      font-size: 14px;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .nav-link:hover,
    .nav-link:focus {
      color: #6D28D9 !important;
      text-decoration: underline;
      text-underline-offset: 3px;
    }

    .nav-link.active {
      color: #6D28D9 !important;
      border-bottom: 2px solid #6D28D9;
    }

    .btn-nav {
      background: #FACC15;
      color: #000;
      font-weight: 600;
      padding: 6px 18px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 14px;
    }

    .btn-nav-daf {
      background: #fff;
      color: #6D28D9;
      font-weight: 600;
      border: 2px solid #6D28D9;
      padding: 6px 18px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 14px;
    }

    /* Dropdown khusus */
    .dropdown {
      position: relative;
    }

    .dropdown-toggle {
      font-weight: bold;
      border: none;
      background: none;
      cursor: pointer;
      padding: 0;
      font-size: 14px;
      color: #000;
      text-transform: uppercase;
      text-decoration: none;
    }

    .dropdown-toggle.active {
      color: #6D28D9 !important;
      border-bottom: 2px solid #6D28D9;
    }

    .dropdown-menu-custom {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #fff;
      min-width: 180px;
      box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
      border-radius: 4px;
      padding: 10px 0;
      z-index: 1000;
    }

    .dropdown-menu-custom a {
      display: block;
      padding: 8px 16px;
      font-size: 14px;
      font-weight: bold;
      text-decoration: none;
      color: #000;
    }

    .dropdown-menu-custom a:hover {
      background-color: #f1f1f1;
    }

    .dropdown.show .dropdown-menu-custom {
      display: block;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }

      nav {
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 10px;
      }
    }
    .footer-section {
      background: linear-gradient(90deg, #7f00ff, #e100ff);
      color: #fff;
      padding: 40px 20px 20px;
      font-family: Arial, sans-serif;
    }

    .footer-section h5,
    .footer-section h6 {
      color: #fff;
      margin-bottom: 16px;
    }

    .footer-section p {
      font-size: 14px;
      color: #eee;
      line-height: 1.6;
    }

    .footer-links {
      list-style: none;
      padding: 0;
      font-size: 14px;
    }

    .footer-links li {
      margin-bottom: 8px;
      color: #eee;
    }

    .social-icons a {
      color: #fff;
      font-size: 18px;
      margin-right: 12px;
      transition: 0.3s;
    }

    .social-icons a:hover {
      color: #ffce00;
    }

    .map-img {
      width: 100%;
      max-width: 250px;
      border-radius: 8px;
      margin-top: 10px;
    }

    .footer-bottom {
      color: #ccc;
      font-size: 13px;
    }

    @media (max-width: 768px) {
      .footer-section .row > div {
        margin-bottom: 24px;
      }

      .map-img {
        max-width: 100%;
      }
    }
    </style>
</head>
<body>
     <header>
    <div class="logo">
      <img src="img/Logo 1.png" alt="Campus Digital">
    </div>
    <nav>
      <a class="nav-link" href="/">Beranda</a>
      <a class="nav-link" href="/tentang-kami">Tentang Kami</a>
      <a class="nav-link" href="#">Galeri</a>

      <!-- Dropdown Program tanpa icon -->
      <div class="dropdown">
        <a href="/program" class="dropdown-toggle" id="programDropdown">PROGRAM</a>
        <div class="dropdown-menu-custom" id="dropdownMenu">
          <a href="#" style="font-weight:bold; color:#000;">Reguler</a>
          <a href="#" style="font-weight:bold; color:#000;">Coorporated</a>
          <a href="#" style="font-weight:bold; color:#000;">Profesi</a>
          <a href="#" style="font-weight:bold; color:#000;">Sertifikasi</a>
          <a href="#" style="font-weight:bold; color:#000;">Magang</a>
        </div>
      </div>

      <a class="nav-link" href="#">Afiliasi</a>
      <a class="nav-link" href="#">Artikel</a>
      <a class="nav-link" href="#">Hubungi Kami</a>
      <a href="#" class="btn-nav">DAFTAR</a>
      <a href="#" class="btn-nav-daf">LOGIN</a>
    </nav>
  </header>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("programDropdown");
    const parentDropdown = toggle.closest(".dropdown");

    toggle.addEventListener("click", function (e) {
      e.preventDefault(); // Biar nggak langsung ke "/program"
      parentDropdown.classList.toggle("show");
    });

    // Tutup dropdown kalau klik di luar
    document.addEventListener("click", function (e) {
      if (!parentDropdown.contains(e.target)) {
        parentDropdown.classList.remove("show");
      }
    });
  });
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  </script>

    <footer class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5><strong>CAMPUSDIGITAL</strong></h5>
          <p>
            Campusdigital adalah lembaga kursus pelatihan di bidang digital yang tersertifikasi BNSP, serta tempat pelatihan unggulan yang relevan dengan kebutuhan industri saat ini.
          </p>
          <div class="social-icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>

        <div class="col-md-4">
          <h6><strong>Program Pelatihan BNSP</strong></h6>
          <ul class="footer-links">
            <li>Pelatihan Digital Marketing</li>
            <li>Pelatihan Content Creator</li>
            <li>Pelatihan Desain Grafis</li>
            <li>Pelatihan Operator Komputer Muda</li>
            <li>Pelatihan Junior Web Programmer</li>
          </ul>
        </div>

        <div class="col-md-4">
          <h6><strong>Temukan Kami</strong></h6>
          <p>Jl. Tamanrejo, RT.05 RW.10, Blok 50A, Kelurahan Mangunharjo, Kecamatan Tugu, Kota Semarang</p>
          <img src="img/map-lokasi.jpg" alt="Peta Lokasi" class="map-img">
        </div>
      </div>

      <div class="footer-bottom text-center mt-4">
        <hr />
        <p>&copy; 2019 - 2025 Campusdigital.id. All rights reserved</p>
      </div>
    </div>
  </footer>
</body>
</html>