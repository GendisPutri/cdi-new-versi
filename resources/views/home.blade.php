
@extends('layouts.main')

@section('title', 'Beranda - Campus Digital')

@section('content')

<style>
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
    .btn-daftar {
      background: #FACC15;
      color: #000;
      font-weight: 600;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
      margin-right: 10px;
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
  left: 0;
  width: 35px;
  z-index: 1; /* <-- dinaikkan */
  transform: translateX(-50%); /* <-- bener-bener ke kiri */
  pointer-events: none; /* opsional */
}

    .decor-top-left {
      top: 40px;
      left: 0px;
    }

    .decor-bottom-left {
      bottom: 80px;
      left: 0px;
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

.card-wrapper {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 20px;
}

.card-custom {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  width: 220px;
  padding: 0;
  background-color: #fff;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-custom:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

.card-custom img {
  width: 100%;
  height: auto;
  border-bottom: 1px solid #eee;
}

.card-custom .label {
  font-size: 16px;
  font-weight: bold;
  padding: 10px 10px 0;
  color: #000;
}

.card-custom .type {
  font-size: 13px;
  color: gray;
  padding-bottom: 10px;
}

.card-custom button {
  background: linear-gradient(90deg, #AF76EF 0%, #FFFFFF 50%, #AF76EF 100%);
  border: none;
  padding: 8px 20px;
  margin-bottom: 15px;
  border-radius: 25px;
  cursor: pointer;
  font-weight: 600;
  color: #000;
  transition: background 0.3s ease;
}

.card-custom button:hover {
  background: #AF76EF;
  color: #fff;
}


.more-button {
  margin-top: 30px;
  background-color: #ffc400;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  font-weight: bold;
  color: black;
  cursor: pointer;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.more-button:hover {
  background-color: #e6ac00;
  transform: scale(1.05);
  transition: all 0.3s ease;
}

.mentor-title {
  font-size: 24px;
  font-weight: 700;
}

.mentor-description {
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
  font-size: 14px;
  color: #555;
}

.mentor-card {
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.mentor-card img {
  border-radius: 10px 10px 0 0;
  width: 100%;
  height: auto;
}

.highlight {
  color: #b07cf7;
}

 .shimmer-box {
  width: 80px;
  height: 80px;
  border-radius: 12px;
  background: linear-gradient(135deg, #ffffff 0%, #e5e7eb 100%);
  box-shadow: inset 0 0 5px rgba(255, 255, 255, 0.5),
              0 0 10px rgba(0, 0, 0, 0.05);
  transition: 0.3s ease;
}

.custom-section {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 40px;
  padding: 60px 20px;
  background: linear-gradient(to bottom, #ffffff, #f3e8ff); /* putih ke ungu muda */
}

@media (min-width: 768px) {
  .custom-section {
    flex-direction: row;
  }
}

.image-container {
  max-width: 300px;
  width: 100%;
}

.main-image {
  width: 100%;
  height: auto;
  border-radius: 16px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.1);
}

.text-content {
  max-width: 400px;
  text-align: center;
}

@media (min-width: 768px) {
  .text-content {
    text-align: left;
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

.cta-button {
  display: inline-block;
  padding: 12px 24px;
  background-color: #7c3aed; /* ungu */
  color: #fff;
  text-decoration: none;
  border-radius: 8px;
  transition: background-color 0.3s ease;
}

.cta-button:hover {
  background-color: #6b21a8; /* ungu tua */
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
      background-color: #f5f5f5;
      padding: 6px 10px;
      border-radius: 20px;
    }

    .icon-avatar {
      width: 24px;
      height: 24px;
      background-color: #ddd;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      color: #555;
    }

    .contributor {
      font-size: 13px;
      color: #0d6efd;
      font-weight: 500;
    }

    .date {
      font-size: 13px;
      color: #444;
    }

    @media (max-width: 768px) {
      .btn-lihat {
        position: static;
        display: inline-block;
        margin-top: 12px;
      }
    }
</style>

<section class="hero container">
  <div class="decor-top-left">
    <img src="{{ asset('img/icon1.png') }}" alt="Dekorasi Atas Kiri">
  </div>
  <div class="decor-bottom-left">
    <img src="{{ asset('img/circle.png') }}" alt="Dekorasi Bawah Kiri">
  </div>
  <div class="row align-items-center">
    <div class="col-md-6">
      <h1>Tingkatkan Pengalamanmu dengan Kursus Pelatihan dan Sertifikasi BNSP</h1>
      <p>Kami menyediakan berbagai macam pelatihan mulai dari pemula hingga mahir dengan materi yang selalu diperbarui dan instruktur yang kompeten di bidangnya.</p>
      <div class="mt-3">
        <a href="#" class="btn-daftar">Daftar</a>
        <a href="#" class="btn-kurikulum">Hubungi Kami</a>
      </div>
    </div>
    <div class="col-md-6 text-center">
      <img src="img/img-hero.png" alt="Instruktur" class="img-fluid" style="max-width: 350px; border-radius: 10px;">
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
  <div class="title">Program <span class="highlight">Campusdigital</span></div>
  <div class="description">
    Kami menyediakan berbagai program unggulan seperti Kursus pelatihan digital marketing, Pelatihan content creator, Pelatihan design grafis, dan lain sebagainya yang cocok untuk pemula
  </div>
  <div class="nav">
    <a href="#" class="active" onclick="setActiveLink(this)">Reguler</a>
    <a href="#" onclick="setActiveLink(this)">Coorporate</a>
    <a href="#" onclick="setActiveLink(this)">Profesi</a>
    <a href="#" onclick="setActiveLink(this)">Sertifikasi</a>
    <a href="#" onclick="setActiveLink(this)">Magang/Intern Program</a>
  </div>

  <div class="row justify-content-center">
    <div class="col-sm-6 col-md-4 col-lg-2">
      <div class="card-custom">
        <img src="{{ asset('img/reguler-1.png') }}" alt="Pelatihan Digital Marketing">
        <div class="label">Pelatihan Digital Marketing</div>
        <div class="type">Reguler</div>
        <button class="btn btn-primary">Pesan</button>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-2">
      <div class="card-custom">
        <img src="{{ asset('img/reguler-2.png') }}" alt="Pelatihan Content Creator">
        <div class="label">Pelatihan Content Creator</div>
        <div class="type">Reguler</div>
        <button class="btn btn-primary">Pesan</button>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-2">
      <div class="card-custom">
        <img src="{{ asset('img/reguler-3.png') }}" alt="Pelatihan Graphic Designer">
        <div class="label">Pelatihan Graphic Designer</div>
        <div class="type">Reguler</div>
        <button class="btn btn-primary">Pesan</button>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-2">
      <div class="card-custom">
        <img src="{{ asset('img/reguler-4.png') }}" alt="Pelatihan Komputer Kantor">
        <div class="label">Pelatihan Komputer Kantor</div>
        <div class="type">Reguler</div>
        <button class="btn btn-primary">Pesan</button>
      </div>
    </div>
  </div>
  <div class="text-center mt-3">
    <button class="more-button">Lihat Selengkapnya</button>
  </div>
</section>
<section class="mentor-section text-center py-5">
  <div class="container">
    <h2 class="mentor-title mb-2">
      Mentor <span class="highlight">Campusdigital</span>
    </h2>
    <p class="mentor-description mb-4">
      praktisi digital marketing, content creator, dan program digital lainnya siap membimbing pelatihan dan sertifikasi BNSP
    </p>

    <div class="row justify-content-center g-3">
      <div class="col-6 col-sm-4 col-md-3">
        <div class="mentor-card card text-center">
          <img src="{{ asset('img/mentor-1.png')}}" class="card-img-top" alt="Mentor">
          <div class="card-body">
            <h5 class="card-title">M. Syarifudin yusuf</h5>
            <p class="card-text text-muted">Social Media Specialist</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3">
        <div class="mentor-card card text-center">
          <img src="{{ asset('img/mentor-1.png')}}" class="card-img-top" alt="Mentor">
          <div class="card-body">
            <h5 class="card-title">M. Syarifudin yusuf</h5>
            <p class="card-text text-muted">Social Media Specialist</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3">
        <div class="mentor-card card text-center">
          <img src="{{ asset('img/mentor-1.png')}}" class="card-img-top" alt="Mentor">
          <div class="card-body">
            <h5 class="card-title">M. Syarifudin yusuf</h5>
            <p class="card-text text-muted">Social Media Specialist</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3">
        <div class="mentor-card card text-center">
          <img src="{{ asset('img/mentor-1.png')}}" class="card-img-top" alt="Mentor">
          <div class="card-body">
            <h5 class="card-title">M. Syarifudin yusuf</h5>
            <p class="card-text text-muted">Social Media Specialist</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mitra-container text-center py-5">
  <div class="container">
    <h2 class="mb-4"><strong>Mitra <span class="highlight">Campusdigital</span></strong></h2>
    <p class="mb-5 fw-semibold">
      <span class="highlight">Campusdigital</span> bermitra dengan Lembaga Sertifikasi Profesi berlisensi BNSP, institusi pendidikan, dan perusahaan industri untuk menghadirkan pelatihan, sertifikasi, dan magang.
    </p>

    <div class="owl-carousel owl-theme">
      @for ($chunk = 0; $chunk < 4; $chunk++) {{-- 4 slide (32/8) --}}
        <div class="item">
          <div class="row row-cols-4 g-3">
            @for ($i = 0; $i < 8; $i++) {{-- 8 gambar per slide --}}
              <div class="col">
                <div class="shimmer-box">
                  <img src="{{ asset('img/mentor-1.png') }}" alt="Mitra" class="img-fluid" style="max-height: 80%; object-fit: contain;">
                </div>
              </div>
            @endfor
          </div>
        </div>
      @endfor
    </div>
  </div>
</section>


<section class="bg-gradient-to-b from-purple-100 to-white py-12 px-6 text-center">
    <h2 class="text-2xl md:text-3xl font-bold mb-2">Testimoni Alumni</h2>
    <p class="text-gray-600 max-w-3xl mx-auto mb-10">
      Peserta Campusdigital merasa puas dengan materi yang mudah dipahami, mentor yang berpengalaman, serta proses pelatihan dan sertifikasi BNSP di Semarang yang profesional dan terstruktur.
    </p>

    <div class="owl-carousel owl-theme">
      <!-- Testimonial card (repeat as needed) -->
      <div class="bg-white rounded-xl shadow p-4 mx-2">
        <img src="{{ asset('img/mentor-1.png') }}" alt="Foto Alumni" class="mx-auto rounded-full w-16 h-16 mb-2">
        <h3 class="font-semibold">Wahana Alfin Sihab</h3>
        <p class="text-sm text-gray-500 mb-2">Social Media Specialist</p>
        <p class="text-sm italic text-gray-700">"Pekerjaan yang saya dapatkan cocok untuk pemula dan cepat paham"</p>
      </div>

      <div class="bg-white rounded-xl shadow p-4 mx-2">
        <img src="{{ asset('img/mentor-1.png') }}" alt="Foto Alumni" class="mx-auto rounded-full w-16 h-16 mb-2">
        <h3 class="font-semibold">Wahana Alfin Sihab</h3>
        <p class="text-sm text-gray-500 mb-2">Social Media Specialist</p>
        <p class="text-sm italic text-gray-700">"Pekerjaan yang saya dapatkan cocok untuk pemula dan cepat paham"</p>
      </div>

      <div class="bg-white rounded-xl shadow p-4 mx-2">
        <img src="{{ asset('img/mentor-1.png') }}" alt="Foto Alumni" class="mx-auto rounded-full w-16 h-16 mb-2">
        <h3 class="font-semibold">Wahana Alfin Sihab</h3>
        <p class="text-sm text-gray-500 mb-2">Social Media Specialist</p>
        <p class="text-sm italic text-gray-700">"Pekerjaan yang saya dapatkan cocok untuk pemula dan cepat paham"</p>
      </div>
    </div>
  </section>

  <section class="custom-section">
  <!-- Gambar Utama -->
  <div class="image-container">
    <img src="{{ asset('img/dua.png')}}" alt="Admin membantu" class="main-image" />
  </div>

  <!-- Teks dan Tombol -->
  <div class="text-content">
    <h2>Bingung pilih pelatihan yang ingin diikuti?</h2>
    <p>Admin kami akan membantu dan menjawab segala keresahanmu</p>
    <a href="#hubungi-kami" class="cta-button">Hubungi Kami</a>
  </div>
</section>

 <section class="artikel-section">
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
  </section>
@endsection
