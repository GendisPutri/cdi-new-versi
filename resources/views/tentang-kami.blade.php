
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
      height: 80%;
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
      font-size: 3.5rem;
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
      background-color: #f2f2f2;
      color: #a86cf5;
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

    .section-sejarah .container {
      background: linear-gradient(to right, #EAE7E7, #FFFFFF, #EAE7E7);
      padding: 40px;
      border-radius: 50px;
      max-width: 900px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .section-sejarah h2 {
      font-weight: bold;
      margin-bottom: 30px;
    }

    .section-sejarah span {
      color: #C69CFF;
    }

    .section-sejarah p {
      font-size: 1rem;
      line-height: 1.8;
      color: #333;
      margin-bottom: 16px;
    }


      .visi-misi {
    background-color: #f9f7fb;
    padding: 3rem 1rem;
  }

  .visi-misi-img img {
    border-radius: 1rem;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }

  .visi-misi-text h2 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: #333;
  }

  .visi-misi-text h2 .cdi {
    color: #7b2cbf; /* Warna ungu khas */
  }

  .visi-misi-text p {
    font-size: 1rem;
    color: #444;
    margin-bottom: 1rem;
  }

  .visi-misi-text ol {
    padding-left: 1.2rem;
    color: #444;
  }

  .visi-misi-text ol li {
    margin-bottom: 0.75rem;
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
  padding: 40px 20px;
  max-width: 1200px;
  margin: 0 auto;
}

.judul {
  text-align: center;
  margin-bottom: 40px;
}

.judul h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.judul span {
  color: #a48cf0;
}

.judul p {
  font-size: 14px;
  color: #555;
}

.grid-konten {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
}

.item {
  text-align: center;
}

.item img {
  width: 70px;
  height: 70px;
  padding: 10px;
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);
  border: 1px solid #eee;
  margin-bottom: 16px;
}

.item h3 {
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 8px;
}

.item p {
  font-size: 12px;
  color: #444;
  line-height: 1.5;
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
  margin-bottom: 30px;
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
      margin-bottom: 8px;
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
      gap: 8px;
    }

    .info-baris img {
      width: 16px;
      height: 16px;
      margin-top: 3px;
    }

    .alamat span {
      font-size: 13px;
      color: #eee;
      display: block;
      line-height: 1.3;
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
          Kami Adalah Lembaga pelatihan dan Sertifikasi BNSP yang selalu membantu <br>
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
  <div class="container">
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
      <ol>
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
  <div class="judul">
    <h2>Budaya Kerja <span>Campusdigital</span></h2>
    <p>Kami menjunjung tinggi profesionalitas agar pelatihan dan sertifikasi bisa berjalan dengan baik.</p>
  </div>

  <div class="grid-konten">
    <!-- 1 -->
    <div class="item">
      <img src="img/komitmen.png" alt="Komitmen">
      <h3>Commitment (Memegang Teguh Komitmen)</h3>
      <p>Memegang teguh komitmen yang telah kami buat, amanah, bertanggung jawab dan saling percaya satu sama lain.</p>
    </div>

    <!-- 2 -->
    <div class="item">
      <img src="img/nilai.png" alt="Add Value">
      <h3>Add Value (Menambah Nilai)</h3>
      <p>Selalu memberikan nilai tambah bagi pelanggan, rekan tim, mitra bisnis, lingkungan sekitar dan masyarakat dunia.</p>
    </div>

    <!-- 3 -->
    <div class="item">
      <img src="img/mutual.png" alt="Mutual Respect">
      <h3>Mutual Respect (Saling Menghormati dan Menghargai)</h3>
      <p>Selalu saling menghargai hasil usaha kontributif pihak lain, keterbukaan akan informasi, aktif dalam komunikasi untuk perbaikan kualitas kinerja kami.</p>
    </div>

    <!-- 4 -->
    <div class="item">
      <img src="img/pro.png" alt="Profesional">
      <h3>Profesional (Menjaga Sikap Profesionalisme)</h3>
      <p>Memanfaatkan keahlian untuk pencapaian target-target perusahaan secara efektif, efisien dan cepat, serta hati-hati.</p>
    </div>

    <!-- 5 -->
    <div class="item">
      <img src="img/unggul.png" alt="Ultimate">
      <h3>Ultimate (Unggul)</h3>
      <p>Sadar bahwa untuk menjadi yang terbaik dan memberikan yang maksimal, harus punya standar di atas rata-rata orang lain.</p>
    </div>

    <!-- 6 -->
    <div class="item">
      <img src="img/service.png" alt="Service Excellent">
      <h3>Service Excellent (Pelayanan yang Bermutu)</h3>
      <p>Memberikan pelayanan yang bermutu, tepat dan responsif terhadap kebutuhan, bukan hanya sekadar reaktif atau bekerja pada hal biasa.</p>
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

    <div class="card-wrapper">
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
            <div class="alamat">
              <span>Jl. xxx xxx xxx</span><br>
              <span>Kecamatan xxx xxx</span><br>
              <span>Kota xxx</span>
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
            <div class="alamat">
              <span>Jl. xxx xxx xxx</span><br>
              <span>Kecamatan xxx xxx</span><br>
              <span>Kota xxx</span>
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
            <div class="alamat">
              <span>Jl. xxx xxx xxx</span><br>
              <span>Kecamatan xxx xxx</span><br>
              <span>Kota xxx</span>
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
