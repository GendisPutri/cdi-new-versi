
@extends('layouts.main')

@section('title', 'Tentang Kami - Campus Digital')

@section('content')
  <style>
   body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background-color: #f9f5ff;
    }
    .hero-section {
      position: relative;
      height: 60vh;
      width: 100%;
      overflow: hidden;
    }

    .hero-section img {
      position: absolute;
      top: 0;
      left: 0;
      object-fit: cover;
      width: 100%;
      height: 85%;
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      height: 60%;
      display: flex;
      align-items: flex-start;
      justify-content: flex-start;
      padding: 5% 8%;
      color: white;
    }

    .hero-content h1 {
      font-weight: bold;
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .hero-content span.highlight {
      color: white;
    }

    .hero-content p {
      font-size: 1.1rem;
      max-width: 600px;
      margin-top: 0;
      margin-bottom: 10px;
      line-height: 1.6;
    }

    .btn-hubungi {
      background-color: white;
      color: #C69CFF;
      padding: 10px 24px;
      border-radius: 10px;
      text-decoration: none;
      margin-top: 10px;
      display: inline-block;
      font-weight: 600;
      box-shadow: 0 0 10px rgba(198, 156, 255, 0.2);
    }

    .btn-hubungi:hover {
  background-color: #a86cf5;
  color: #FFFFFF;
  border: 2px solid #FFFFFF;
}

    .section-sejarah {
      background-color: #f9f5ff;
      padding: 40px 20px 20px;
  margin-top: -70px;
      display: flex;
      justify-content: center;
    }

    .wrapper {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px; /* bikin tetap responsif */
}

    .section-sejarah .container-fluid {
  background: linear-gradient(to right, #EAE7E7, #FFFFFF, #EAE7E7);
  padding: 40px;
  border-radius: 50px;
  max-width: 1200px;   /* ✅ Bisa digedein atau full: 100% */
  margin: 0 auto;      /* ✅ Biar tetap center di layar */
  text-align: justify; /* ✅ Rata kanan-kiri */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}

    .section-sejarah h2 {
      font-weight: bold;
      margin-bottom: 30px;
       text-align: center
    }

    .section-sejarah span {
      color: #C69CFF;
    }

    .section-sejarah p {
      font-size: 0.9rem;
      line-height: 1.8;
      color: #333;
      margin-bottom: 16px;
    }


      .visi-misi {
    background-color: #f9f7fb;
    padding: 3rem 1rem;
    align-items: center;
  }

 .visi-misi-img img {
  width: 100%;
  height: 350px;         /* biar isi penuh */
  object-fit: cover;    /* biar gak ketarik aneh */
  border-radius: 1rem;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

  .visi-misi-text h2 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: #333;
    align-items: center
  }

  .visi-misi-text h2 .cdi {
    color: #7b2cbf; /* Warna ungu khas */
  }

  .visi-misi-text p {
    font-size: 0.9rem;
    color: #444;
    margin-bottom: 1rem;
  }

  .visi-misi-text ol.list-misi-angka {
  list-style-type: decimal; /* angka */
  padding-left: 1.2rem; 
  margin: 0;
  color: #444;
}

.visi-misi-text ol.list-misi-angka li {
  margin-bottom: 0.6rem;
  line-height: 1.6;
  font-size: 0.9rem;
}

.visi-misi-text {
  text-align: center; /* semua isi ketengah dulu */
}

.visi-misi-text ol {
  text-align: left;   /* khusus list tetap rata kiri */
  display: inline-block; /* biar tetap rapi di tengah container */
}



  .selengkapnya {
    color: #7b2cbf;
    font-weight: 600;
    cursor: pointer;
    transition: color 0.3s;
  }

  .selengkapnya:hover {
    color: #5a189a;
  }

  .budaya-kerja {
  padding: 60px 20px;
  text-align: center;
  font-family: 'Poppins', sans-serif;
}

.budaya-kerja h2 {
  font-size: 24px;
  margin-bottom: 10px;
  font-weight: 600;
}

.budaya-kerja h2 span {
  color: #6a5acd; /* ungu */
}

.budaya-kerja .subtitle {
  font-size: 16px;
  color: #666;
  margin-bottom: 40px;
}

.budaya-kerja .grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
}

.budaya-kerja .item {
  text-align: center;
}

.budaya-kerja .icon-box {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 90px;
  height: 90px;
  margin: 0 auto 15px;
  border: 2px solid #d6c7f7; /* soft ungu */
  border-radius: 16px; /* kotak rounded */
  transition: all 0.3s ease;
}

.budaya-kerja .icon-box:hover {
  border-color: #a78bfa; /* ungu lebih pekat saat hover */
}

.budaya-kerja .icon-box img {
  width: 50px;
}

.budaya-kerja .item h3 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 10px;
}

.budaya-kerja .item h3 span {
  display: block;
  font-size: 14px;
  color: #666;
  font-weight: 400;
}

.budaya-kerja .item p {
  font-size: 14px;
  color: #555;
  line-height: 1.6;
}
.cabang-campusdigital {
  padding: 40px 20px;
  background-color: #f8f8f8;
}

.cabang-campusdigital .container {
  max-width: 1000px;
  margin: 0 auto;
  text-align: center;
}

.cabang-campusdigital h2 {
  font-weight: bold;
  font-size: 24px;
}

.cabang-campusdigital h2 span {
  color: #b44ce3;
}

.deskripsi-atas {
  margin-top: 10px;
  font-size: 15px;
  color: #333;
}

.info-bawah {
  font-size: 14px;
  color: #777;
  margin-bottom: 10px;
}
.card-wrapper {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .cabang-card {
      position: relative;
      width: 300px;
      height: 300px;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      background-color: #000;
    }

    .gambar-cabang {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: brightness(0.6);
    }

    .card-body {
      position: absolute;
      bottom: 0;
      left: 0;
      padding: 15px;
      width: 100%;
      color: #fff;
    }

    .judul-dan-wa {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 5px;
    }

    .judul-dan-wa h4 {
      font-size: 16px;
      margin: 0;
      color: #fff;
    }

    .judul-dan-wa img {
      width: 20px;
      height: 20px;
    }

    .info-baris {
      display: flex;
      align-items: flex-start;
    }

    .info-baris img {
      width: 16px;
      height: 16px;
      margin-top: 3px;
    }
    .alamat {
  text-align: left;
}

.alamat span {
  display: block;
  margin: 0;
  line-height: 1.3; /* bisa kamu kecilin kalau mau lebih rapat */
}

    .card-alamat p {
      margin: 2px 0;         /* rapet */
      line-height: 1.4;
      font-size: 14px;
    }
    .card-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

/* Tablet & HP: jadi 2 kolom */
@media (max-width: 768px) {
  .card-container {
    grid-template-columns: repeat(2, 1fr);
  }
.cabang-card {
    position: relative;
    width: 220px;
    height: 300px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #000;
}
}

/* HP kecil: jadi 1 kolom (opsional, biar lebih rapi kalau layar kecil banget) */
@media (max-width: 480px) {
  .card-container {
    grid-template-columns: 1fr;
  }
 .section-sejarah {
  padding-left: 0;
  padding-right: 0;
  margin-top: -60px;
}

.section-sejarah .container-fluid {
  width: 100%; 
  background: #F3F3F3; /* abu-abu muda */
  padding: 10px;
  border-radius: 12px;
  text-align: justify;
}

 .section-sejarah h2 {
      font-weight: bold;
      margin-bottom: 30px;
       text-align: center;
    }

    .section-sejarah span {
      color: #C69CFF;
    }

    .section-sejarah p {
      font-size: 0.9rem;
      line-height: 1.8;
      color: #333;
      margin-bottom: 16px;
    }

  .hero-section {
    height: 80%; /* jangan dipaksa tinggi */
      margin-bottom: 50px;
      
  }

  .hero-section img {
    height: 100%; /* biar cover penuh */
    width: 100%;
     object-fit: fill;
  }

  .hero-content {
    padding: 10px;
    text-align: left; /* teks rata tengah di HP */
  }

  .hero-content h1 {
    font-size: 1.5rem; /* lebih kecil di HP */
  }

  .hero-content p {
    font-size: 0.9rem;
    line-height: 1.6;
  }

  .btn-hubungi {
    font-size: 0.9rem;
    padding: 10px 20px;
  }
}
    .deskripsi-atas {
        margin-top: 10px;
        font-size: 15px; 
        color: #333;
        text-align: left;
    }
    .info-bawah{
      font-size: 14px;
    color: #777;
    margin-bottom: 10px;
    text-align: left;
    }
  </style>
</head>
<body>

  <!-- HERO SECTION -->
  <section class="hero-section">
    <img src="img/kami.png" alt="Background Image">
    <div class="hero-content">
      <div>
        <h1>Tentang <span class="highlight">Campusdigital</span></h1>
        <p>
          Kami Adalah Lembaga pelatihan dan Sertifikasi BNSP yang selalu membantu
          meningkatkan skill di instansi pendidikan, UMKM, atau industri lainnya
        </p>
        <a href="#contact" class="btn-hubungi">Hubungi Kami</a>
      </div>
    </div>
  </section>

  <div class="container">
  <!-- SEJARAH SECTION -->
  <section class="section-sejarah">
  <div class="wrapper">
  <div class="container-fluid">
      <h2>Sejarah <span>Campusdigital</span></h2>
      <p>
        Era Digital memberi pengaruh terhadap perkembangan teknologi yang sangat cepat. Perkembangan teknologi mendorong setiap pribadi untuk selalu siap berubah dan bertumbuh. Persaingan dunia usaha dan dunia industri di era digital juga semakin ketat. Hadirnya persaingan yang ketat di dunia usaha dan industri menuntut dukungan sumber daya manusia yang profesional dan kompeten. Kebutuhan akan SDM yang profesional dan kompeten melahirkan Campus Digital untuk menyajikan program pendidikan dan pelatihan dalam rangka peningkatan kompetensi sumber daya manusia yang unggul.
      </p>
      <p>
        Campus Digital merupakan Lembaga Pendidikan dan Pelatihan di bidang bisnis dan teknologi digital. Campus Digital adalah salah satu unit bisnis pada PT Campus Data Media, sebuah perusahaan yang bergerak di bidang Jasa Teknologi Informasi yang beraktifitas sejak tahun 2001.
      </p>
      <p>
        Selaras dengan program pemerintah dalam upaya mempersiapkan SDM Unggul. Campus Digital hadir untuk turut serta memberikan pilihan terbaik bagi masyarakat agar bisa mendapatkan akses pendidikan dan pelatihan yang sesuai dengan kebutuhan Industri, Dunia Usaha dan Kerja (IDUKA).
      </p>
      <p>
        Campus Digital bekerjasama dengan instansi pemerintah maupun swasta serta beberapa Industri, Dunia Usaha dan Kerja (IDUKA) dan sekolah. Hal ini terus diupayakan agar sistem pembelajaran terjadi link and match antara lembaga pendidikan dengan Industri, Dunia Usaha dan Kerja (IDUKA). Dengan begitu, akan terbentuk SDM-SDM Unggul yang mempunyai kompetensi sesuai dengan kebutuhan Industri, Dunia Usaha dan Kerja (IDUKA).
      </p>
    </div>
  </div>
  </section>

  <section class="visi-misi container py-5">
  <div class="row align-items-start gx-5">
    <div class="col-md-5 text-center mb-4 mb-md-0 visi-misi-img">
      <img src="{{asset ('img/cdi.jpg')}}" alt="Visi Misi Campusdigital" class="img-fluid">
    </div>
    <div class="col-md-7 visi-misi-text">
      <h2 class="fw-bold">Visi <span class="cdi">Campusdigital</span></h2>
      <p>Menjadi lembaga pelatihan dan sertifikasi BNSP yang unggul dan terpercaya di bidang teknologi digital dan bisnis di Semarang</p>

      <h2 class="fw-bold mt-4">Misi <span class="cdi">Campusdigital</span></h2>
      <ol class="list-misi-angka">
        <li>Menyediakan layanan program Pendidikan dan pelatihan yang berkualitas</li>
        <li>Membentuk karakter sumber daya manusia yang kompeten dan profesional</li>
        <li>Membangun tim yang solid, unggul, dan amanah</li>
        <li>Menyediakan solusi solusi bersama mitra bisnis untuk meraih cita-cita mulia</li>
        <li>Menjadi model pengelolaan bisnis yang menguntungkan dan menyejahterakan</li>
      </ol>
    </div>
  </div>
</section>
      <section class="budaya-kerja">
  <div class="container">
    <h2>Budaya Kerja <span>Campusdigital</span></h2>
    <p class="subtitle">
      Kami menjunjung tinggi profesionalitas agar pelatihan dan sertifikasi bisa berjalan dengan baik
    </p>

    <div class="grid">
      <!-- 1 -->
      <div class="item">
        <div class="icon-box">
          <img src="{{asset ('img/icon1.png')}}" alt="Commitment">
        </div>
        <h3>Commitment <span>(Memegang Teguh Komitmen)</span></h3>
        <p>Memegang teguh komitmen yang telah kami buat, amanah bertanggung jawab dan selalu percaya satu sama lain.</p>
      </div>

      <!-- 2 -->
      <div class="item">
        <div class="icon-box">
          <img src="{{asset ('img/icon2.png')}}" alt="Add Value">
        </div>
        <h3>Add Value <span>(Menambah Nilai)</span></h3>
        <p>Selalu memberikan nilai tambah bagi pelanggan, bagi mitra bisnis, bagi lingkungan sekitar dan masyarakat dunia.</p>
      </div>

      <!-- 3 -->
      <div class="item">
        <div class="icon-box">
          <img src="{{asset ('img/icon3.png')}}" alt="Mutual Respect">
        </div>
        <h3>Mutual Respect <span>(Saling Menghormati dan Menghargai)</span></h3>
        <p>Selalu saling menghargai hasil usaha dan pencapaian orang lain, dengan komunikasi membangun untuk perbaikan kualitas kerja sama.</p>
      </div>

      <!-- 4 -->
      <div class="item">
        <div class="icon-box">
          <img src="{{asset ('img/icon4.png')}}" alt="Profesional">
        </div>
        <h3>Profesional <span>(Menjaga Sikap Profesionalisme)</span></h3>
        <p>Memanfaatkan keahlian untuk mencapai target organisasi secara konsisten, berdisiplin dan bertindak hati-hati.</p>
      </div>

      <!-- 5 -->
      <div class="item">
        <div class="icon-box">
          <img src="{{asset ('img/icon5.png')}}" alt="Ultimate">
        </div>
        <h3>Ultimate <span>(Unggul)</span></h3>
        <p>Selalu memberikan hasil yang terbaik dan memberikan nilai lebih, bekerja dengan efisiensi maksimal dan selalu menjaga standar mutu dalam setiap pekerjaan.</p>
      </div>

      <!-- 6 -->
      <div class="item">
        <div class="icon-box">
          <img src="{{asset ('img/icon6.png')}}" alt="Service Excellent">
        </div>
        <h3>Service Excellent <span>(Pelayanan yang Bermutu)</span></h3>
        <p>Memberikan pelayanan yang bermutu, memahami harapan pelanggan, dan bekerja dengan sepenuh hati agar bisa melampaui ekspektasi yang biasa.</p>
      </div>
    </div>
  </div>
</section>

      <section class="cabang-campusdigital">
  <div class="container">
    <h2>Cabang <span>Campusdigital</span></h2>
    <p class="deskripsi-atas">
      Temukan cabang kami untuk menikmati pelayanan internet cafe dengan kecepatan tinggi cocok untuk tugas atau membuat laporan.
    </p>
    <p class="info-bawah">
      Dapatkan juga info terbaru tentang pelatihan dan sertifikasi BNSP di Semarang atau kota lainnya.
    </p>

    <div class="card-container">
      <!-- Card -->
      <div class="cabang-card">
        <img src="img/cabang.png" alt="Campusnet Gajah" class="gambar-cabang">
        <div class="card-body">
          <div class="judul-dan-wa">
            <h4>Campusnet Gajah</h4>
            <img src="img/wa.png" alt="Whatsapp">
          </div>

          <div class="info-baris lokasi-banyak">
            <img src="img/lokasi.png" alt="Lokasi">
            <div class="card-alamat">
              <p>Jl. xxx xxx xxx</p>
              <p>Kecamatan xxx xxx</p>
              <p>Kota xxx</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Ulangi untuk cabang lain -->
      <div class="cabang-card">
        <img src="img/cabang.png" alt="Campusnet Anjasmoro" class="gambar-cabang">
        <div class="card-body">
          <div class="judul-dan-wa">
            <h4>Campusnet Anjasmoro</h4>
            <img src="img/wa.png" alt="Whatsapp">
          </div>

          <div class="info-baris lokasi-banyak">
            <img src="img/lokasi.png" alt="Lokasi">
            <div class="card-alamat">
              <p>Jl. xxx xxx xxx</p>
              <p>Kecamatan xxx xxx</p>
              <p>Kota xxx</p>
            </div>
          </div>
        </div>
      </div>

      <div class="cabang-card">
        <img src="img/cabang.png" alt="Campusnet Fatmawati" class="gambar-cabang">
        <div class="card-body">
          <div class="judul-dan-wa">
            <h4>Campusnet Fatmawati</h4>
            <img src="img/wa.png" alt="Whatsapp">
          </div>

          <div class="info-baris lokasi-banyak">
            <img src="img/lokasi.png" alt="Lokasi">
            <div class="card-alamat">
              <p>Jl. xxx xxx xxx</p>
              <p>Kecamatan xxx xxx</p>
              <p>Kota xxx</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


  </div>

  

</body>
@endsection
