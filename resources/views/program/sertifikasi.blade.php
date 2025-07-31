@extends('layouts.main')

@section('title', 'Program Sertifikasi - Campus Digital')

@section('content')
    <style>
.hero-section {
  position: relative;
  height: 360px;
  width: 100%;
  overflow: hidden;
}

.hero-bg-wrapper {
  position: absolute;
  top: 0; left: 0;
  width: 100%;
  height: 90%;
}

.hero-bg-wrapper img {
  width: 100%;
  height: 90%;
  object-fit: cover;
  object-position: top; /* Gambar dinaikin */
}

.hero-bg-wrapper .overlay {
  position: absolute;
  top: 0; left: 0;
  width: 100%;
  height: 90%;
  background: rgba(129, 0, 255, 0.35); /* Ungu semi-transparan */
}

.hero-content {
  position: relative;
  z-index: 2;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start; /* Teks di atas */
  padding: 40px 10%;
  color: white;
}

.judul-hero {
  font-size: 3rem; /* diperkecil dari sebelumnya */
  font-weight: bold;
  margin-bottom: 10px;
}

.deskripsi-hero {
  font-size: 0.95rem;
  line-height: 1.6;
  max-width: 700px;
  margin-bottom: 18px;
}

.btn-hubungi {
  background-color: white;
  color: #8000ff;
  padding: 8px 20px;
  border-radius: 10px;
  text-decoration: none;
  font-weight: 600;
  font-size: 0.9rem;
  width: fit-content;
}

.btn-hubungi:hover {
  background-color: #f2f2f2;
  color: #a86cf5;
}

  .kursus-section {
      padding: 60px 20px;
      background-color: #f7f2fc;
    }

    .kursus-section h2 {
      font-weight: 700;
      margin-bottom: 10px;
    }

    .kursus-section p {
      max-width: 700px;
      color: #555;
    }

    .card-custom {
      background-color: #fff;
      border: none;
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      padding: 20px 20px 30px;
      text-align: left;
      transition: transform 0.2s;
    }

    .card-custom:hover {
      transform: translateY(-4px);
    }

    .placeholder-img {
      width: 100%;
      height: 120px;
      border-radius: 15px;
      background: linear-gradient(135deg, #f3f3f3, #ffffff);
      margin-bottom: 15px;
    }

    .badge-regular {
  font-size: 12px;
  color: #6c6c6c;
  background-color: #fff;
  border: 1px solid #d2d2d2;
  padding: 4px 12px;
  border-radius: 6px;
  display: inline-block;
  margin: 4px 0 12px 0;
  font-weight: 500;
}

    .btn-gradient {
      background: linear-gradient(to right, #AF76EF, #FFFFFF, #AF76EF);
      color: #333;
      border: none;
      border-radius: 999px;
      padding: 8px 32px;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .btn-gradient:hover,
    .btn-gradient:focus,
    .btn-gradient:active {
      background: linear-gradient(to right, #FFFFFF, #AF76EF, #FFFFFF);
      color: #AF76EF;
    }

</style>
  <section class="hero-section">
  <div class="hero-bg-wrapper">
    <img src="{{ asset('img/reguler.png') }}" alt="Banner Pelatihan Reguler">
    <div class="overlay"></div>
  </div>

  <div class="hero-content container">
    <h1 class="judul-hero">Pelatihan Sertifikasi</h1>
    <p class="deskripsi-hero">
      Membantu peserta mendapatkan pengakuan resmi kompetensi melalui sertifikasi BNSP yang diakui secara nasional.
    </p>
    <a href="#kelas" class="btn-hubungi">Hubungi Kami</a>
  </div>
</section>
<!-- SECTION: Kursus Kelas -->
<section class="kursus-section py-5" style="background-color: #f7f2fc; text-start">
  <div class="container text-start">
    <h2 class="fw-bold mb-2">Kursus Sertifikasi Khusus untuk Dunia Industri</h2>
    <p class="mb-4 text-muted">
      Perkuat profil profesionalmu: dapatkan sertifikat resmi yang diakui industri seperti digital marketing bersertifikat,
       mobile marketing, dan e‑commerce. Sekali bayar langsung ikuti berbagai macam sertifikasi.
    </p>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
      
      <!-- Card -->
      <div class="col">
        <div class="card-custom text-start">
          <div class="placeholder-img"></div>
          <div class="fw-medium">Teknik Jaringan</div>
          <span class="badge-regular">Reguler</span>
          <button class="btn btn-gradient">Pesan</button>
        </div>
      </div>

      <!-- Ulangi card sesuai jumlah -->
      <div class="col">
        <div class="card-custom text-start">
          <div class="placeholder-img"></div>
          <div class="fw-medium">Digital Marketing</div>
          <span class="badge-regular">Reguler</span>
          <button class="btn btn-gradient">Pesan</button>
        </div>
      </div>

      <div class="col">
        <div class="card-custom text-start">
          <div class="placeholder-img"></div>
          <div class="fw-medium">Multimedia and Office</div>
          <span class="badge-regular">Reguler</span>
          <button class="btn btn-gradient">Pesan</button>
        </div>
      </div>

      <div class="col">
        <div class="card-custom text-start">
          <div class="placeholder-img"></div>
          <div class="fw-medium">Project Mnagement</div>
          <span class="badge-regular">Reguler</span>
          <button class="btn btn-gradient">Pesan</button>
        </div>
      </div>

      <div class="col">
        <div class="card-custom text-start">
          <div class="placeholder-img"></div>
          <div class="fw-medium">Digital Marketing</div>
          <span class="badge-regular">Reguler</span>
          <button class="btn btn-gradient">Pesan</button>
        </div>
      </div>

      <div class="col">
        <div class="card-custom text-start">
          <div class="placeholder-img"></div>
          <div class="fw-medium">Fiber Optik</div>
          <span class="badge-regular">Reguler</span>
          <button class="btn btn-gradient">Pesan</button>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
