<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>

    header {
      background: #fff;
      padding: 12px 40px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo img {
      height: 45px;
    }

    .nav-wrapper {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex: 1;
      margin-left: 40px;
    }

    nav {
      display: flex;
      align-items: center;
      gap: 24px;
    }

    .nav-link,
    .dropdown-toggle {
      color: #000 !important;
      font-weight: 600;
      text-transform: uppercase;
      font-size: 14px;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .nav-link:hover,
    .dropdown-toggle:hover {
      color: #6D28D9 !important;
      text-decoration: underline;
      text-underline-offset: 3px;
    }

    .nav-link.active,
    .dropdown-toggle.active {
      color: #6D28D9 !important;
      border-bottom: 2px solid #6D28D9;
    }

    .auth-buttons {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-left: 24px;
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

    .dropdown {
      position: relative;
    }

    .dropdown-toggle {
      background: none;
      border: none;
      cursor: pointer;
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

    .dropdown:hover .dropdown-menu-custom {
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
    </style>
 <header>
    <div class="logo">
      <img src="{{asset ('img/logo 1.png')}}" alt="Campus Digital">
    </div>
    <nav>
      <a class="nav-link" href="/">Beranda</a>
      <a class="nav-link" href="/tentang-kami">Tentang Kami</a>
      <a class="nav-link" href="#">Galeri</a>

      <!-- Dropdown Program tanpa icon -->
      <div class="dropdown">
        <a href="/program" class="dropdown-toggle" id="programDropdown">PROGRAM</a>
        <div class="dropdown-menu-custom" id="dropdownMenu">
          <a href="/program/reguler" style="font-weight:bold; color:#000;">Reguler</a>
          <a href="/program/corporate" style="font-weight:bold; color:#000;">Coorporated</a>
          <a href="/program/profesi" style="font-weight:bold; color:#000;">Profesi</a>
          <a href="/program/sertifikasi" style="font-weight:bold; color:#000;">Sertifikasi</a>
          <a href="/program/magang" style="font-weight:bold; color:#000;">Magang</a>
        </div>
      </div>

      <a class="nav-link" href="/Afiliasi">Afiliasi</a>
      <a class="nav-link" href="/artikel">Artikel</a>
      <a class="nav-link" href="/hubungi-kami">Hubungi Kami</a>
      <a href="#" class="btn-nav">DAFTAR</a>
      <a href="#" class="btn-nav-daf">LOGIN</a>
    </nav>
  </header>
    <script>

    document.addEventListener("DOMContentLoaded", function () {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll(".nav-link, .dropdown-toggle");

    navLinks.forEach(link => {
      const href = link.getAttribute("href");

      if (!href) return;

      // Khusus untuk beranda "/"
      if (href === "/" && currentPath === "/") {
        link.classList.add("active");
      }

      // Untuk selain "/"
      else if (href !== "/" && currentPath.startsWith(href)) {
        link.classList.add("active");
      }
    });
  });
  
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