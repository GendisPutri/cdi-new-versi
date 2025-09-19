
@extends('layouts.main')

@section('title', 'Beranda - Campus Digital')

@section('content')

<style>
/* Responsive Breakpoint */
@media(min-width: 576px) { .col-6 { flex: 1 1 48%; } }
@media(min-width: 992px) {
  .col-4 { flex: 1 1 30bbbb%; }
  .col-6 { flex: 1 1 48%; }
  .col-12 { flex: 1 1 100%; }
}
    body {
      font-family: 'Poppins', sans-serif;
      background: #f9f5ff;
      color: #1E1B4B;
    }
   
    .hero {
      position: relative;
      padding: 60px 40px;
      background: #f9f5ff;
    }
    .hero h1 {
      font-size: 36px;
      font-weight: 600;
      color: #1E1B4B;
    }
    .hero p {
      font-size: 16px;
      color: #4B5563;
    }
    .decor-top-left{
      top:40px;
      left:20px;
    }
    .btn-daftar {
      background: #FACC15;
      color: #000;
      font-weight: 600;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
      margin-right: 10px;
    }
        .btn-daftar:hover {
            background: #000;
            color: #FACC15;
            transform: translateY(-2px);
        }
    .btn-kurikulum {
      background: #fff;
      color: #6D28D9;
      font-weight: 600;
      border: 2px solid #6D28D9;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
    }
      .btn-kurikulum:hover {
            background: #6D28D9;
            color: white;
            transform: translateY(-2px);
        }
    .tentang-kami-img img {
      width: 100%;
      max-width: 400px;
      border-radius: 20px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    .tentang-kami-text h2 {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }
    .tentang-kami-text .cdi {
      color: #6e36ff;
    }
    .tentang-kami-text p {
      margin-top: 1rem;
      line-height: 1.6;
      font-size: 1rem;
      color: #333;
    }

   .selengkapnya {
  color: #6e36ff !important;
  font-weight: 600;
  text-decoration: underline;
  text-decoration-thickness: 2px;
  text-underline-offset: 2px;
  cursor: pointer;
}

   .decor-top-left,
.decor-bottom-left {
  position: absolute;
  left: 20px; /* kasih jarak fix dari kiri */
  width: 50px;
  z-index: 1;
  pointer-events: none;
}

.decor-top-left {
  top: 40px; /* jarak dari atas */
}

.decor-bottom-left {
  bottom: 60px; /* jarak dari bawah (dibikin sama) */
}

.decor-top-left img,
.decor-bottom-left img {
  width: 100%;
  height: auto;
  opacity: 1;
}

    .fitur-list {
  list-style: none;
  padding-left: 0;
}

.fitur-list li {
  position: relative;
  padding-left: 30px;
  margin-bottom: 12px;
  color: #000;
  font-size: 16px;
}

.fitur-list li::before {
  content: "";
  position: absolute;
  left: 0;
  top: 6px;
  width: 12px;
  height: 12px;
  background: #d8b4fe; /* warna ungu muda */
  border-radius: 50%;
}

.highlight {
  color: red;
  font-weight: 600;
}

.text-purple {
  color: #7c3aed;
}

.border-purple {
  border-color: #7c3aed !important;
}
 section.container-Program {
  font-family: 'Inter', sans-serif;
  padding: 40px 15px;
  background-color: #f9f9f9;
  color: #000;
  text-align: center;
}

.title {
  font-size: 24px;
  font-weight: 700;
  text-align: center;
}

.highlight {
  color: #b07cf7;
}

.description {
  margin: 10px auto 30px;
  max-width: 600px;
  font-size: 14px;
}

.nav {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-bottom: 30px;
  font-weight: 500;
  flex-wrap: wrap;
}

.nav a {
  text-decoration: none;
  color: #000;
  padding: 5px 0;
  position: relative;
}

.nav a.active,
.nav a:hover {
  color: #AF76EF;
}

.nav a.active::after,
.nav a:hover::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: -2px;
  width: 100%;
  height: 2px;
  background-color: #AF76EF;
}

/* Grid */
.program-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 2fr));
}
.program-content {
  gap: 24px; /* bootstrap 5 udah support gap */
}


/* Card Program */
.card {
  background: #fff;
  border: 1px solid #e0e0e0;
  border-radius: 16px; /* lengkung lebih halus */
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s;
  display: flex;
  flex-direction: column;
   width: 220px;   /* sama kayak mentor-card */
  height: 330px;  /* bikin semua tinggi sejajar */
}

.card:hover {
  transform: translateY(-4px);
}

.card .card-thumb {
  width: 100%;       /* gambar isi full lebar card */
  height: 200px;     /* atur tinggi sesuai selera */
  object-fit: cover; /* biar gambar gak gepeng */
  border-radius: 12px; /* rounded atas aja */
  display: block;
}

/* Konten card */
.card-content {
  padding: 14px 16px;
  flex: 1;
  text-align: left; /* rata kiri */
}

    .card-title {
      font-size: 12px;
      margin: 0;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .badge {
      font-size: 10px;
      background: linear-gradient(90deg, #FEFEFF, #F5EBFF, #FEFEFF);
      color: #000;
      padding: 3px 8px;
      border: 1px solid #CECECE;
      border-radius: 10px; 
    }

    .pesan-btn {
      display: block;
      width: 90%;
      margin: 10px auto;
      padding: 10px 0;
      background: linear-gradient(to right, rgb(194, 140, 255), rgb(255, 255, 255), rgb(194, 140, 255));
      border: none;
      border-radius: 999px;
      font-weight: bold;
      cursor: pointer;
    }

.more-button {
  background-color: #ffc400;
  color: #4b0082; /* ungu tua */
  font-weight: bold;
  font-size: 14px;
  padding: 8px 18px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  display: inline-block;
    text-decoration: none; 
  transition: all 0.3s ease;
}

.more-button:hover {
            background: #000;
            color: #FACC15;
            transform: translateY(-2px);
        }


@media (max-width: 576px) {
  .card-custom {
    width: 100%;
    margin-bottom: 20px;
  }
}

/* Mentor Section */
.mentor-section {
  font-family: "Poppins", sans-serif;
}

.mentor-title {
  font-size: 2rem;
  font-weight: 700;
  color: #222;
}

.mentor-title .highlight {
  color: #7c3aed; /* ungu */
}

.mentor-description {
  font-size: 1rem;
  color: #6c757d;
  max-width: 700px;
  margin: 0 auto;
}

/* Mentor Grid */
.mentor-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 16px;
}

/* Mentor Card */
.mentor-card {
  background: #fff;
  border: 1px solid #e0e0e0;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s;
  position: relative;
}

.mentor-card:hover {
  transform: translateY(-4px);
}

/* Gambar Mentor (ukuran mirip artikel) */
.mentor-card img.card-thumb {
  width: 100%;
  height: 250px;   /* sama dengan artikel */
  object-fit: cover;
  object-position: top center; /* biar wajah tetap keliatan */
}
/* Konten */
.card-content {
  padding: 1rem;
  text-align: center;
}

.card-judul {
  font-size: 1rem;
  font-weight: 600;
  color: #222;
  margin: 0.3rem 0;
}

.card-text {
  font-size: 0.9rem;
  color: #6c757d;
  margin: 0;
}

.highlight {
  color: #b07cf7;
}
.mitra {
    padding: 20px;
}

.mitra .box {
    margin-bottom: 15px; /* jarak antar baris */
}

.mitra .box img {
    width: 100%;
    height: 100px;
    border-radius: 10px;
    object-fit: cover;
    display: block; /* biar nggak ada space bawah */
    box-shadow: 0 1px 3px rgba(0,0,0,0.1); /* opsional, buat efek halus */
    border: none; /* pastikan tidak ada border abu-abu */
}
  /* Biar jadi 4 baris */
  #mitra-carousel .owl-stage {
    display: flex;
    flex-wrap: wrap;
  }

  #mitra-carousel .owl-item {
    flex: 0 0 calc(100% / 10); /* 10 kolom per baris */
    display: flex;
    justify-content: center;
  }
.mitra .item {
  background: transparent !important;
  box-shadow: none !important;
}

.text-content {
  max-width: 400px;
  text-align: center;
}

@media (min-width: 400px){
    .text-content {
    text-align: left;
  }    
  .mentor-hp{
  display: none;
}
}

.text-content h2 {
  font-size: 24px;
  font-weight: bold;
  color: #2d2d2d;
  margin-bottom: 16px;
}

.text-content p {
  font-size: 16px;
  color: #555;
  margin-bottom: 24px;
}

.carousel-container {
      display: flex;
      flex-direction: column;
      gap: 20px;
      padding: 20px;
    }
    .carousel-row {
      display: flex;
      overflow: hidden;
      white-space: nowrap;
    }
    .carousel-track {
      display: flex;
      animation: scroll 15s linear infinite;
    }
    .box {
      flex: 0 0 auto;
      width: 100px;
      height: 100px;
      background: #ccc;
      border-radius: 10px;
      margin-right: 10px;
    }
    @keyframes scroll {
      from { transform: translateX(0); }
      to { transform: translateX(-50%); }
    }

.owl-carousel .item {
      background: white;
      border-radius: 12px;
      padding: 16px;
      text-align: left;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
      margin: 10px;
      height: 180px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: flex-start;
    }

   .item {
  padding: 16px;                  /* Mengatur jarak isi dalam card */
  background-color: white;       /* Warna latar belakang card */
  border-radius: 10px;           /* Membuat sudut melengkung */
  text-align: center;            /* Pusatkan teks */
}


 .frame-container {
            flex-shrink: 0;
        }
        
        .frame-gradient {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            padding: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .frame-gradient img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

    .item h4 {
      margin: 0;
      font-size: 13px;
      font-weight: 600;
    }

    .item p.role {
      font-size: 12px;
      color: gray;
      margin: 2px 0 8px;
    }

    .item p.text {
      font-size: 12px;
      color: #333;
    }
.custom-section {
  padding: 40px 20px;
  background: linear-gradient(to bottom, #f8f4ff, #ffffff);
}

.content-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 40px;
  max-width: 1100px;
  margin: auto;
}

.image-container {
  flex: 1;
  text-align: center;
}

.main-image {
  max-width: 300px;
  border-radius: 20px;
}

.text-content {
  flex: 1;
  max-width: 500px;
}

.text-content h2 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.text-content p {
  color: #555;
  margin-bottom: 20px;
}

.cta-button {
  display: inline-block;
  padding: 10px 20px;
  border: 1.5px solid #8b5cf6;
  border-radius: 8px;
  color: #8b5cf6;
  font-weight: 500;
  text-decoration: none;
  transition: all 0.3s ease;
}

.cta-button:hover {
  background: #8b5cf6;
  color: #fff;
}


.artikel-section {
      padding: 40px 20px;
      max-width: 1200px;
      margin: auto;
    }

    .artikel-header {
      text-align: left;
      margin-bottom: 24px;
      position: relative;
    }

    .artikel-header h2 {
      font-size: 24px;
      margin-bottom: 8px;
    }

    .highlight {
      color: #6d28d9;
    }

    .artikel-header p {
      color: #444;
      font-size: 15px;
      max-width: 700px;
    }

    .btn-lihat {
      position: absolute;
      top: 0;
      right: 0;
      background: #ffce00;
      padding: 8px 14px;
      color: #000;
      font-weight: bold;
      border-radius: 8px;
      text-decoration: none;
    }

    .btn-lihat:hover {
            background: #000;
            color: #FACC15;
            transform: translateY(-2px);
        }

    .artikel-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 16px;
    }

    .artikel-card {
      background: #fff;
      border: 1px solid #e0e0e0;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s;
      position: relative;
    }

    .artikel-card:hover {
      transform: translateY(-4px);
    }

    .artikel-card img.card-thumb {
      width: 100%;
      height: 140px;
      object-fit: cover;
    }

    .kategori {
      position: absolute;
      top: 10px;
      left: 10px;
      background: #fef08a;
      color: #444;
      font-size: 12px;
      padding: 4px 8px;
      border-radius: 6px;
      font-weight: 600;
      z-index: 1;
    }

    .artikel-content {
      padding: 16px;
    }

    .artikel-content h4 {
      font-size: 16px;
      font-weight: bold;
      margin-bottom: 6px;
    }

    .artikel-content p {
      font-size: 14px;
      color: #666;
      margin-bottom: 12px;
    }

    .artikel-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 10px;
    }

    .footer-item {
  display: flex;
  align-items: center;
  gap: 6px;
  background-color: #fff; /* ganti jadi putih */
  padding: 8px;
  border-radius: 20px;
  border: 1px solid #ddd; /* kasih border abu */
}

    .icon-avatar {
      width: 10px;
      height: 10px;
      background-color: #ffffff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      color: #555;
    }

    .contributor {
      font-size: 10px;
      color: #0d6efd;
      font-weight: 500;
    }

    .date {
      font-size: 10px;
      color: #444;
    }

    @media (max-width: 768px) {
      .btn-lihat {
        position: static;
        display: inline-block;
        margin-top: 12px;
      }
    }
@media (max-width: 991px) {
  .decor-bottom-left,
      .decor-top-left {
        display: none;
      }
      .hero-image {
  margin-top: 30px !important;
  max-width: 50px;   /* batasi ukuran */
  border-radius: 15px; /* sudut melengkung */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* kasih bayangan biar elegan */
  transition: transform 0.3s ease; /* animasi halus */
}

.hero-image:hover {
  transform: scale(1.05); /* zoom sedikit pas hover */
}
/* Reset default margin body */
body {
  margin: 0;
  padding: 0;
}

/* Section styling */
.section-sejarah {
  background: linear-gradient(to right, #EAE7E7, #FFFFFF, #EAE7E7);
  padding: 60px 20px;   /* atas-bawah 60px, kiri-kanan 20px */
  border-radius: 30px;
  max-width: 900px;
  margin: 40px auto;    /* kasih jarak rata tengah */
  box-sizing: border-box;
}

/* Biar heading & paragraf nggak bikin nambah jarak berlebihan */
.section-sejarah h2,
.section-sejarah p {
  margin-top: 0;
  margin-bottom: 1rem;
}

  .section-sejarah {
    padding: 40px 15px;   /* biar lebih rapat di HP */
    border-radius: 20px;
    margin: 20px 10px;    /* biar nggak nempel layar */
  }

}
    @media (max-width: 400px) {
      .decor-bottom-left,
      .decor-top-left {
        display: none;
      }
    
    .hero-text h1 {
  font-size: 24px; /* kecilin judul */
  line-height: 1.4; /* biar lebih rapih */
}

.hero-text p {
  font-size: 14px; /* kecilin paragraf */
  color: #555;     /* opsional: kasih warna abu biar lebih enak dibaca */
  line-height: 1.6;
}

.hero-image {
  margin-top: 30px !important;
  max-width: 50px;   /* batasi ukuran */
  border-radius: 15px; /* sudut melengkung */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* kasih bayangan biar elegan */
  transition: transform 0.3s ease; /* animasi halus */
}

.hero-image:hover {
  transform: scale(1.05); /* zoom sedikit pas hover */
}
.btn-kurikulum {
      background: #fff;
      color: #6D28D9;
      font-style: ;
      font-weight: 300;
      border: 2px solid #6D28D9;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
    }
      .btn-kurikulum:hover {
            background: #6D28D9;
            color: white;
            transform: translateY(-2px);
        }

.content-wrapper {
  display: flex;
  flex-direction: column; /* susun vertikal */
  align-items: center;    /* biar rata tengah */
  text-align: center;     /* teks rata tengah */
  gap: 20px;              /* jarak antara gambar dan teks */
}

.main-image {
  max-width: 300px;
  border-radius: 15px;
}
.mitra .box {
  background: transparent !important; 
  border-radius: 0 !important;
  box-shadow: none !important; /* kalau ada bayangan */
  padding: 0 !important;       /* opsional */
}

.mitra .box img {
  max-width: 100px;       /* atur ukuran logo */
  width: 70%;
  height: auto;
  object-fit: contain;    /* biar nggak ketarik aneh */
}

.pesan-btn {
  display: flex;                  /* aktifkan flexbox */
  align-items: center;            /* vertical center */
  justify-content: center;        /* horizontal center */
  width:80%;
  margin: 10px auto;
  padding: 10px 0;
  background: linear-gradient(to right, rgb(194, 140, 255), rgb(255, 255, 255), rgb(194, 140, 255));
  border: none;
  border-radius: 999px;
  font-weight: bold;
  cursor: pointer;
  height: 25px;                /* tinggi tetap */
  line-height: normal;            /* reset line-height */
}

.mentor-section{
  display: none;
}
/* Mentor Card */
.mentor-card {
  background: #fff;
  border: 1px solid #e0e0e0;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s;
  position: relative;
  width: 200px;
}

/* Mentor Card biar rata tengah */
.mentor-slider {
  display: flex;
  justify-content: center;
}

.mentor-card {
  margin: 0 auto; /* posisikan card ke tengah */
  max-width: 260px; /* biar gak terlalu melebar */
  height: 250px;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0,0,0,0.08);
}

/* Arrow custom */
.swiper-button-prev,
.swiper-button-next {
  color: #AF76EF !important; /* paksa override */
  font-weight: bold;
  size: 30px;
}

.swiper-button-prev::after,
.swiper-button-next::after {
  font-size: 10px; /* biar lebih kecil & rapi */
}

/* Pagination (titik) */
.swiper-pagination {
  margin-top: 12px; /* kasih jarak dari card */
  position: relative; /* biar tetap di bawah */
}

/* Bullet pagination */
/* Posisi pagination */
.swiper-pagination {
  position: relative !important; /* biar ikut flow, gak nempel default */
  margin-top: 12px;             /* jarak antara card & bullet */
  text-align: center;           /* biar tetap di tengah */
}

.mentor-card img.card-thumb{
  height: 180px;
}
/* Bullet aktif */
.swiper-pagination-bullet-active {
  background: #AF76EF !important; /* ungu */
}

.program-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
  justify-content: center;
}

.program-grid .card {
  flex: 0 0 calc(50% - 20px); /* 2 kolom */
}

.card-content {
  padding: 14px 16px;
  flex: 1;
  text-align: center; /* semua isi rata tengah */
  display: flex;
  flex-direction: column; /* susun vertikal */
  gap: 4px; /* jarak antar elemen */
}

.card-title {
  display: flex;
  flex-direction: column;
  align-items: center; /* biar ke kiri, atau center kalau mau tengah */
  gap: 4px; /* jarak teks & badge */
}

.pesan-btn {
  display: flex;                  /* aktifkan flexbox */
  align-items: center;            /* vertical center */
  justify-content: center;        /* horizontal center */
  width:80%;
  margin: 10px auto;
  padding: 10px;
  background: linear-gradient(to right, rgb(194, 140, 255), rgb(255, 255, 255), rgb(194, 140, 255));
  border: none;
  border-radius: 999px;
  font-weight: bold;
  cursor: pointer;
  height: 25px;                /* tinggi tetap */
  line-height: normal;            /* reset line-height */
}
  .row .tombol-wrapper {
    display: flex;
    flex-direction: column;
    gap: 12px;
    align-items: flex-start;
    margin-top: 0;
     z-index: 2;
     position: relative;
  }

  .hero-img{
    display: flex;
    justify-content: flex-end; /* geser gambar ke kanan */
    align-items: flex-start;   /* naik sejajar tombol */
    margin-top: -90px;
     z-index: 1;
     position: relative;
  }

  .hero-img img {
    max-width: 70%;
    height: auto;
  }
  .artikel-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr); 
  gap: 20px;
}
.artikel-footer {
  display: flex;
  flex-direction: column; /* bikin atas bawah */
  align-items: flex-start; /* biar rata kiri */
  gap: 6px; /* jarak antar baris */
  margin-top: auto; /* biar nempel ke bawah card */
}

.footer-item {
  display: flex;
  align-items: center;
  gap: 6px;
  background-color: #f5f5f5;
  padding: 6px 12px;
  border-radius: 20px;
}

.icon-avatar {
  width: 20px;
  height: 20px;
  background-color: #ddd;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  color: #555;
}

.contributor {
  font-size: 10px;
  color: #0d6efd;
  font-weight: 500;
}

.date {
  font-size: 10px;
  color: #666;
  padding: 4px 12px;
  background: #f5f5f5;
  border-radius: 20px;
}

.artikel-content {
      padding: 16px;
    }

    .artikel-content h4 {
      font-size: 12px;
      font-weight: bold;
      margin-bottom: 6px;
    }

    .artikel-content p {
      font-size: 10px;
      color: #666;
      margin-bottom: 12px;
    }
}
    
</style>

<section class="hero container text-center">
  <div class="decor-top-left">
    <img src="{{ asset('img/ico.png') }}" alt="Dekorasi Atas Kiri">
  </div>
  <div class="decor-bottom-left">
    <img src="{{ asset('img/circle.png') }}" alt="Dekorasi Bawah Kiri">
  </div>
  <div class="row align-items-center justify-content-center">
    <!-- Bagian teks -->
    <div class="col-md-5 text-md-start text-center">
    <div class="hero-text">
      <h1 class="fw-bold">Tingkatkan Pengalamanmu Dengan Kursus Pelatihan dan Sertifikasi BNSP</h1>
      <p>Kami menyediakan berbagai macam pelatihan mulai dari pemula hingga mahir dengan materi yang selalu diperbarui dan instruktur yang kompeten di bidangnya.</p>
      </div>
      <div class="mt-3 tombol-wrapper">
        <a href="#" class="btn-daftar">Daftar</a>
        <a href="#" class="btn-kurikulum">Hubungi Kami</a>
      </div>
    </div>
    <!-- Bagian gambar -->
    <div class="col-md-5 text-center">
    <div class="hero-img">
    <img src="img/img-hero.png" alt="Instruktur" 
           class="img-fluid">
    </div>
    </div>
  </div>
</section>

<!-- Tentang Kami Section -->
<section class="tentang-kami container py-5">
  <div class="row align-items-start gx-5">
    <div class="col-md-5 text-center mb-4 mb-md-0 tentang-kami-img">
      <img src="img/tentang-kami.png" alt="Tentang Kami" class="img-fluid">
    </div>
    <div class="col-md-7 tentang-kami-text">
      <h2 class="fw-bold">Tentang <span class="cdi">CampusDigital</span></h2>
      <p>Campusdigital adalah lembaga kursus pelatihan di Semarang yang menyediakan program pelatihan dan sertifikasi BNSP, serta berbagai pelatihan keterampilan digital yang relevan dengan kebutuhan industri saat ini.</p>
      <p>Kami menawarkan kelas-kelas unggulan seperti kursus pelatihan digital marketing, pelatihan content creator, pelatihan design grafis, dan lain sebagainya yang dirancang untuk pemula maupun profesional yang ingin meningkatkan kompetensinya.</p>
      <p>Setiap program disusun berdasarkan standar SKKNI dan didampingi oleh mentor berpengalaman. Setelah pelatihan selesai, peserta dapat mengikuti uji kompetensi resmi untuk mendapatkan sertifikasi BNSP yang diakui secara nasional.</p>
      <p>Campusdigital berkomitmen membantu Anda mengembangkan keterampilan yang dibutuhkan di era digital dan membuka lebih banyak peluang kerja maupun usaha melalui kursus pelatihan digital yang berkualitas dan sertifikasi yang kredibel.</p>
      <p class="selengkapnya">Selengkapnya</p>
    </div>
  </div>
</section>

<!-- Manfaat Section -->
<section class="manfaat container py-5">
  <div class="row align-items-start gx-5">
    <div class="col-md-7 tentang-kami-text">
      <h2 class="fw-bold">Manfaaat Bergabung Dengan <span class="cdi">CampusDigital</span></h2>
      <ul class="fitur-list">
  <li><span class="highlight">Sekali Bayar</span> dan anda bisa melihat materi pelatihan berulang kali</li>
  <li>Waktu belajar yang <span class="highlight">fleksibel</span> dimanapun dan kapanpun</li>
  <li>Koneksi dengan <span class="highlight">praktisi digital</span> yang ahli di bidangnya</li>
  <li>Keuntungan afiliasi dengan mengajak orang lain bikin kamu makin <span class="highlight">cuan dan menambah penghasilan</span></li>
  <li><span class="highlight">Peluang Berkarir</span> dengan sertifikasi berstandar nasional (BNSP)</li>
</ul>
    </div>
    <div class="col-md-5 text-center mb-4 mb-md-0 manfaat-img">
      <img src="img/manfaat.png" alt="Manfaat" class="img-fluid">
    </div>
  </div>
</section>

<section class="container-Program">
  <h2 class="fw-bold">Program <span class="highlight">Campusdigital</span></h2>
  <div class="description">
    Kami menyediakan berbagai program unggulan seperti Kursus pelatihan digital marketing, Pelatihan content creator, Pelatihan design grafis, dan lain sebagainya yang cocok untuk pemula
  </div>

  <div class="nav">
    <a href="#" data-target="reguler" onclick="setActiveLink(this, event)">Reguler</a>
    <a href="#" data-target="coorporate" onclick="setActiveLink(this, event)">Coorporate</a>
    <a href="#" data-target="profesi" onclick="setActiveLink(this, event)">Profesi</a>
    <a href="#" data-target="sertifikasi" onclick="setActiveLink(this, event)">Sertifikasi</a>
    <a href="#" data-target="magang" onclick="setActiveLink(this, event)">Magang</a>
  </div>
<div class="container"></div>
  <div class="program-wrapper">
  <div class="program-grid">
    <div class="row justify-content-center program-content content-reguler">
        <div class="card">
          <img src="{{asset('img/reguler-1.png')}}" alt="Digital Marketing" class="card-thumb">
          <div class="card-content">
            <p class="card-title text-center text-md-start">Pelatihan Digital Marketing <span class="badge">Reguler</span></p>
          </div>
          <button class="pesan-btn">Pesan</button>
        </div>

        <div class="card">
          <img src="{{asset('img/reguler-2.png')}}" alt="Content Creator" class="card-thumb">
          <div class="card-content">
            <p class="card-title text-center text-md-start">Pelatihan Content Creator <span class="badge">Reguler</span></p>
          </div>
          <button class="pesan-btn">Pesan</button>
        </div>

        <div class="card">
          <img src="{{asset('img/reguler-3.png')}}" alt="Graphic Designer" class="card-thumb">
          <div class="card-content">
            <p class="card-title text-center text-md-start">Pelatihan Graphic Designer <span class="badge">Reguler</span></p>
          </div>
          <button class="pesan-btn">Pesan</button>
        </div>

        <div class="card">
          <img src="{{asset('img/reguler-4.png')}}" alt="Operator Komputer Kantor" class="card-thumb">
          <div class="card-content">
            <p class="card-title text-center text-md-start">Pelatihan Operator Komputer <span class="badge">Reguler</span></p>
          </div>
          <button class="pesan-btn">Pesan</button>
        </div>
      </div>
    </div>
  </div>

 <div class="program-grid">
    <div class="row justify-content-center program-content content-coorporate d-none">
        <div class="card">
          <img src="{{asset('img/reguler-4.png')}}" alt="Operator Komputer Kantor" class="card-thumb">
          <div class="card-content">
            <p class="card-title text-center text-md-start">Pelatihan Operator Komputer <span class="badge">Coorporate</span></p>
          </div>
          <button class="pesan-btn">Pesan</button>
        </div>
      </div>
    </div>

    <div class="program-grid">
    <div class="row justify-content-center program-content content-profesi d-none">
        <div class="card">
          <img src="{{asset('img/reguler-3.png')}}" alt="Graphic Designer" class="card-thumb">
          <div class="card-content">
            <p class="card-title text-center text-md-start">Pelatihan Graphic Designer <span class="badge">Profesi</span></p>
          </div>
          <button class="pesan-btn">Pesan</button>
        </div>
      </div>
    </div>

    <div class="program-grid">
    <div class="row justify-content-center program-content content-sertifikasi d-none">
        <div class="card">
          <img src="{{asset('img/reguler-2.png')}}" alt="Content Creator" class="card-thumb">
          <div class="card-content">
            <p class="card-title text-center text-md-start">Pelatihan Content Creator <span class="badge">Sertifikasi</span></p>
          </div>
          <button class="pesan-btn">Pesan</button>
        </div>
      </div>
    </div>

    <div class="program-grid">
    <div class="row justify-content-center program-content content-magang d-none">
        <div class="card">
          <img src="{{asset('img/reguler-2.png')}}" alt="Content Creator" class="card-thumb">
          <div class="card-content">
            <p class="card-title text-center text-md-start">Pelatihan Content Creator <span class="badge">Magang</span></p>
          </div>
          <button class="pesan-btn">Pesan</button>
        </div>

        <div class="card">
          <img src="{{asset('img/reguler-3.png')}}" alt="Graphic Designer" class="card-thumb">
          <div class="card-content">
            <p class="card-title text-center text-md-start">Pelatihan Graphic Designer 
            <span class="badge">Magang</span></p>
          </div>
          <button class="pesan-btn">Pesan</button>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center mt-3">
    <a class="more-button" id="lihat-selengkapnya" href="/program/reguler">Lihat Selengkapnya</a>
  </div>

  <script>
    const urlMap = {
      reguler: 'reguler',
      coorporate: 'coorporate',
      profesi: 'profesi',
      sertifikasi: 'sertifikasi',
      magang: 'magang'
    };

    function setActiveLink(el, event) {
      event.preventDefault();

      document.querySelectorAll('.nav a').forEach(link => link.classList.remove('active'));
      el.classList.add('active');

      const target = el.getAttribute('data-target');

      document.querySelectorAll('.program-content').forEach(div => {
        div.classList.add('d-none');
      });

      document.querySelector(`.content-${target}`).classList.remove('d-none');

      const lihatSelengkapnya = document.getElementById('lihat-selengkapnya');
      if (lihatSelengkapnya) {
        lihatSelengkapnya.href = `/program/${urlMap[target]}`;
      }
    }

    window.addEventListener('DOMContentLoaded', () => {
      document.querySelector('[data-target="reguler"]').click();
    });
  </script>
</section>

<section class="mentor-section text-center py-5" style="background: linear-gradient(to right, #f8f5ff, #ffffff);">
  <div class="container">
    <h2 class="mentor-title mb-2 fw-bold">
      Mentor <span class="highlight">Campusdigital</span>
    </h2>
    <p class="mentor-description mb-4 text-muted">
      Praktisi digital marketing, content creator, dan program digital lainnya siap membimbing pelatihan dan sertifikasi BNSP
    </p>

    <div class="mentor-grid">
      <!-- Mentor 1 -->
      <div class="mentor-card">
        <img src="{{ asset('img/mentor-1.png') }}" alt="Mentor" class="card-thumb" />
        <div class="card-content">
          <h4 class="card-judul">M. Syarifudin Yusuf</h4>
          <p class="card-text">Social Media Specialist</p>
        </div>
      </div>

      <!-- Mentor 2 -->
      <div class="mentor-card">
        <img src="{{ asset('img/mentor-1.png') }}" alt="Mentor" class="card-thumb" />
        <div class="card-content">
          <h4 class="card-judul">M. Syarifudin Yusuf</h4>
          <p class="card-text">Social Media Specialist</p>
        </div>
      </div>

      <!-- Mentor 3 -->
      <div class="mentor-card">
        <img src="{{ asset('img/mentor-1.png') }}" alt="Mentor" class="card-thumb" />
        <div class="card-content">
          <h4 class="card-judul">M. Syarifudin Yusuf</h4>
          <p class="card-text">Social Media Specialist</p>
        </div>
      </div>

      <!-- Mentor 4 -->
      <div class="mentor-card">
        <img src="{{ asset('img/mentor-1.png') }}" alt="Mentor" class="card-thumb" />
        <div class="card-content">
          <h4 class="card-judul">M. Syarifudin Yusuf</h4>
          <p class="card-text">Social Media Specialist</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mentor-hp text-center py-5" style="background: linear-gradient(to right, #f8f5ff, #ffffff);">
  <div class="container">
    <h2 class="mentor-title mb-2 fw-bold">
      Mentor <span class="highlight">Campusdigital</span>
    </h2>
    <p class="mentor-description mb-4 text-muted">
      Praktisi digital marketing, content creator, dan program digital lainnya siap membimbing pelatihan dan sertifikasi BNSP
    </p>

    <!-- Slider Wrapper -->
    <div class="swiper mentor-slider mentor-hp">
      <div class="swiper-wrapper">
        <!-- Mentor 1 -->
        <div class="swiper-slide">
          <div class="mentor-card">
            <img src="{{ asset('img/mentor-1.png') }}" alt="Mentor" class="card-thumb" />
            <div class="card-content">
              <h4 class="card-judul">M. Syarifudin Yusuf</h4>
              <p class="card-text">Social Media Specialist</p>
            </div>
          </div>
        </div>

        <!-- Mentor 2 -->
        <div class="swiper-slide">
          <div class="mentor-card">
            <img src="{{ asset('img/mentor-1.png') }}" alt="Mentor" class="card-thumb" />
            <div class="card-content">
              <h4 class="card-judul">M. Syarifudin Yusuf</h4>
              <p class="card-text">Social Media Specialist</p>
            </div>
          </div>
        </div>

        <!-- Mentor 3 -->
        <div class="swiper-slide">
          <div class="mentor-card">
            <img src="{{ asset('img/mentor-1.png') }}" alt="Mentor" class="card-thumb" />
            <div class="card-content">
              <h4 class="card-judul">M. Syarifudin Yusuf</h4>
              <p class="card-text">Social Media Specialist</p>
            </div>
          </div>
        </div>

        <!-- Mentor 4 -->
        <div class="swiper-slide">
          <div class="mentor-card">
            <img src="{{ asset('img/mentor-1.png') }}" alt="Mentor" class="card-thumb" />
            <div class="card-content">
              <h4 class="card-judul">M. Syarifudin Yusuf</h4>
              <p class="card-text">Social Media Specialist</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Tombol Navigasi -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- Pagination Bullets -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<!-- SwiperJS CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mentor-slider", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: { slidesPerView: 2 }, // Tablet
      1024: { slidesPerView: 3 }, // Laptop
    }
  });
</script>


<section class="mitra-container text-center py-5">
  <div class="container">
    <h2 class="mb-4"><strong>Mitra <span class="highlight">Campusdigital</span></strong></h2>
    <p class="mb-5 fw-semibold">
      <span class="highlight">Campusdigital</span> bermitra dengan Lembaga Sertifikasi Profesi berlisensi BNSP, institusi pendidikan, dan perusahaan industri untuk menghadirkan pelatihan, sertifikasi, dan magang.
    </p>
  </div>
</section>

<section class="mitra" id="mitra">
  <!-- Baris 1 -->
  <div class="carousel-row owl-carousel">
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
  </div>
  <!-- Baris 2 -->
  <div class="carousel-row owl-carousel">
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
  </div>
  <!-- Baris 3 -->
  <div class="carousel-row owl-carousel">
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
  </div>
  <!-- Baris 4 -->
  <div class="carousel-row owl-carousel">
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
    <div class="box"><img src="{{asset('img/mentor-1.png')}}" alt=""></div>
  </div>
</section>

<section class="bg-gradient-to-b from-purple-100 to-white py-12 px-6 text-center">
    <h2 class="text-2xl md:text-3xl font-bold mb-2">Testimoni Alumni</h2>
    <p class="text-gray-600 max-w-3xl mx-auto mb-10">
      Peserta Campusdigital merasa puas dengan materi yang mudah dipahami, mentor yang berpengalaman, serta proses pelatihan dan sertifikasi BNSP di Semarang yang profesional dan terstruktur.
    </p>

<div id="testimoni-carousel" class="owl-carousel owl-theme">
      <div class="item">
        <div class="frame-container">
            <div class="frame-gradient">
                <img src="{{asset ('img/mentor-1.png')}}" alt="Profile">
            </div>
        </div>
        <h4>Wahana Alfin Sihab</h4>
        <p class="role">Social Media Specialist</p>
        <p class="text">"Pelajaran yang saya dapatkan cocok untuk pemula dan cepat paham"</p>
      </div>
      <div class="item">
        <div class="frame-container">
            <div class="frame-gradient">
                <img src="{{asset ('img/mentor-1.png')}}" alt="Profile">
            </div>
        </div>
        <h4>Indah Permata Sari</h4>
        <p class="role">UI/UX Designer</p>
        <p class="text">"Mentornya sangat membantu dan materinya sangat aplikatif di dunia kerja"</p>
      </div>
      <div class="item">
        <div class="frame-container">
            <div class="frame-gradient">
                <img src="{{asset ('img/mentor-1.png')}}" alt="Profile">
            </div>
        </div>
        <h4>Rizky Hidayat</h4>
        <p class="role">Data Analyst</p>
        <p class="text">"Kursus yang tepat untuk memperdalam skill dan siap bersaing di industri"</p>
      </div>
      <div class="item">
       <div class="frame-container">
            <div class="frame-gradient">
                <img src="{{asset ('img/mentor-1.png')}}" alt="Profile">
            </div>
        </div>
        <h4>Ayu Lestari</h4>
        <p class="role">Digital Marketer</p>
        <p class="text">"Modul pelatihan sangat jelas dan mudah dipahami"</p>
      </div>
      <div class="item">
        <div class="frame-container">
            <div class="frame-gradient">
                <img src="{{asset ('img/mentor-1.png')}}" alt="Profile">
            </div>
        </div>
        <h4>Fajar Prasetyo</h4>
        <p class="role">Frontend Developer</p>
        <p class="text">"Sangat bermanfaat dan membuat saya percaya diri melamar kerja"</p>
      </div>
      <div class="item">
        <div class="frame-container">
            <div class="frame-gradient">
                <img src="{{asset ('img/mentor-1.png')}}" alt="Profile">
            </div>
        </div>
        <h4>Nur Aini</h4>
        <p class="role">Product Manager</p>
        <p class="text">"Sertifikasi BNSP sangat berguna untuk karier saya"</p>
      </div>
    </div>
    </section>
<script>
    $(document).ready(function(){
        $('.carousel-row').owlCarousel({
      loop:true,
      margin:15,
      autoplay:true,
      autoplayTimeout:2000,
      autoplayHoverPause:true,
      responsive:{
        0:{ items:4 },
        600:{ items:6 },
        1000:{ items:10 }
      }
    });
  });

    // Carousel untuk testimoni alumni
    $('#testimoni-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 4000,
      responsive: {
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 3 },
        1280: { items: 5 }
      }
    });

</script>


<section class="custom-section">
<div class="container">
<div class="content-wrapper">
    <!-- Gambar Utama -->
    <div class="image-container">
      <img src="{{ asset('img/dua.png')}}" alt="Admin membantu" class="main-image" />
    </div>

    <!-- Teks dan Tombol -->
    <div class="text-content">
      <h2>Bingung pilih pelatihan yang ingin diikuti?</h2>
      <p>Admin kami akan memandu dan menjawab segala keresahanmu</p>
      <a href="#hubungi-kami" class="cta-button">Hubungi Kami</a>
    </div>
  </div>
</div>
  
</section>

 <section class="artikel-section">
 <div class="container">
 <div class="artikel-header">
      <h2><strong>Artikel <span class="highlight">Campusdigital</span></strong></h2>
      <p>
        Temukan informasi terbaru seputar kursus pelatihan dan sertifikasi, tips & wawasan praktis seputar digital marketing, content creator, desain grafis, dan berita di dunia digital lainnya.
      </p>
      <a href="#" class="btn-lihat">Lihat Selengkapnya</a>
    </div>

    <div class="artikel-grid">
      <!-- Card 1 -->
      <div class="artikel-card">
        <div class="kategori">Digital</div>
        <img src="{{ asset('img/img_article.png')}}" alt="Artikel Pelatihan Digital" class="card-thumb" />
        <div class="artikel-content">
          <h4>Artikel Pelatihan Digital</h4>
          <p>Tips jitu sukses belajar digital marketing dari rumah.</p>
          <div class="artikel-footer">
            <div class="footer-item">
              <div class="icon-avatar">
                <img src="{{ asset('img/fa.png')}}" alt="fa-user">
              </div>
              <span class="contributor">Contributor</span>
            </div>
            <div class="footer-item">
              <span class="date">3 Juli 2025</span>
            </div>
          </div>
        </div>
      </div>

       <div class="artikel-card">
        <div class="kategori">Digital</div>
        <img src="{{ asset('img/img_article.png')}}" alt="Artikel Pelatihan Digital" class="card-thumb" />
        <div class="artikel-content">
          <h4>Artikel Pelatihan Digital</h4>
          <p>Tips jitu sukses belajar digital marketing dari rumah.</p>
          <div class="artikel-footer">
            <div class="footer-item">
              <div class="icon-avatar">
                <img src="{{ asset('img/fa.png')}}" alt="fa-user">
              </div>
              <span class="contributor">Contributor</span>
            </div>
            <div class="footer-item">
              <span class="date">3 Juli 2025</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="artikel-card">
        <div class="kategori">Desain</div>
        <img src="{{ asset('img/img_article.png')}}" alt="Artikel Desain" class="card-thumb" />
        <div class="artikel-content">
          <h4>Membuat Konten Visual Menarik</h4>
          <p>Desain grafis efektif untuk engagement sosial media.</p>
          <div class="artikel-footer">
            <div class="footer-item">
              <div class="icon-avatar">
                <img src="{{ asset('img/fa.png')}}" alt="fa-user">
              </div>
              <span class="contributor">Contributor</span>
            </div>
            <div class="footer-item">
              <span class="date">5 Juli 2025</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="artikel-card">
        <div class="kategori">Sertifikasi</div>
        <img src="{{ asset('img/img_article.png')}}" alt="Artikel Sertifikasi" class="card-thumb" />
        <div class="artikel-content">
          <h4>Pentingnya Sertifikasi Digital</h4>
          <p>Keuntungan punya sertifikat digital resmi.</p>
          <div class="artikel-footer">
            <div class="footer-item">
              <div class="icon-avatar">
                <img src="{{ asset('img/fa.png')}}" alt="fa-user">
              </div>
              <span class="contributor">Contributor</span>
            </div>
            <div class="footer-item">
              <span class="date">8 Juli 2025</span>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>
    
  </section>

@endsection
