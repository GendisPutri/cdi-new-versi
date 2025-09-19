@extends('layouts.main')

@section('title', 'Program Magang - Campus Digital')

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
  object-position: top;
}

.hero-bg-wrapper .overlay {
  position: absolute;
  top: 0; left: 0;
  width: 100%;
  height: 90%;
  background: rgba(129, 0, 255, 0.35);
}

.hero-content {
  position: relative;
  z-index: 2;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  padding: 40px 10%;
  color: white;
}

.judul-hero {
  font-size: 3rem;
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
  background-color: #a86cf5;
  color: #FFFFFF;
  border: 2px solid #FFFFFF;
}

body {
  margin: 0;
  padding: 0;
  background: #F7F2FC;
  min-height: 100vh;
}
.card-custom {
  background: #FFFFFF;
  border-radius: 16px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  padding: 14px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
}

.placeholder-img {
  width: 100%;
  height: 150px;
  background: linear-gradient(135deg, #f3f3f3, #ffffff, #f3f3f3);
  border-radius: 12px;
  margin-bottom: 10px;
}

.title-kategori {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 12px;
}

.title-kategori span {
  font-size: 14px;
  font-weight: 600;
  color: #000;
}

.badge-kategori {
  font-size: 12px;
  padding: 2px 8px;
  border-radius: 12px;
  background: linear-gradient(90deg, #FEFEFF, #F5EBFF, #FEFEFF);
  color: #A155E6;
  font-weight: 500;
  white-space: nowrap;
  border: 1px solid #CECECE;
}

.btn-pesan {
  margin-top: auto;
  padding: 8px 20px;
  border: none;
  border-radius: 20px;
  background: linear-gradient(90deg, #AF76EF, #FFFFFF, #AF76EF);
  font-weight: 600;
  font-size: 14px;
  text-align: center;
  color: black;
  width: 100%;
  transition: 0.3s;
}

.btn-pesan:hover {
  background: linear-gradient(90deg, #FFFFFF, #AF76EF, #FFFFFF);
  color: #fff;
}
@media (max-width: 480px) {
.judul-hero {
  font-size: 1.9rem;
  font-weight: bold;
  margin-bottom: 10px;
  margin-top: -10px;
}
.deskripsi-hero {
  font-size: 0.85rem;
  line-height: 1.2;
  max-width: 700px;
  margin-bottom: 10px;
}
.hero-section {
  position: relative;
  height: 360px;
  width: 100%;
  overflow: hidden;
  margin-bottom: -100px;
}
.kursus-section {
  margin-top: -60px;
}
.title-kategori {
  display: flex;
  flex-direction: column; /* biar atas bawah */
  align-items: center; /* biar rata kiri */
  margin-bottom: 12px;
}

.badge-kategori {
  font-size: 12px;
  padding: 2px 8px;
  border-radius: 12px;
  background: linear-gradient(90deg, #FEFEFF, #F5EBFF, #FEFEFF);
  color: #A155E6;
  font-weight: 500;
  white-space: nowrap;
  border: 1px solid #CECECE;
  margin-top: 4px; /* kasih jarak dikit dari judul */
}
}
</style>
<section class="hero-section">
  <div class="hero-bg-wrapper">
    <img src="{{ asset('img/magang.png') }}" alt="Banner Pelatihan Magang">
    <div class="overlay"></div>
  </div>

  <div class="hero-content container">
    <h1 class="judul-hero">Pelatihan Magang/Intern</h1>
    <p class="deskripsi-hero">
      Kelas terbuka untuk siswa, mahasiswa, maupun masyarakat umum untuk dapat <br>
      menambah wawasan sekaligus praktek kerja industri melalui program magang <br>
      dengan mentor berpengalaman di bidang Digital Content Creator, Digital <br>
      Marketing, Desain Grafis, dan lainnya.
    </p>
    <a href="#kelas" class="btn-hubungi">Hubungi Kami</a>
  </div>
</section>
<section class="kursus-section py-5">
  <div class="container text-start">
    <h2 class="fw-bold mb-2 text-black">Kursus Sertifikasi Khusus untuk Dunia Industri</h2>
    <p class="mb-4 text-black">
      Peserta magang/PKL akan mengikuti salah satu pelatihan berikut sesuai paket yang diselenggarakan, 
      peserta berhak atas sertifikat pelatihan dan laporan kegiatan.
    </p>

    <div class="row row-cols-2 row-cols-md-4 g-4">
      @php
        $kursus = [
          ["title" => "Pengembangan Administrasi dan Arsip", "kategori" => "Magang"],
          ["title" => "Magang Siswa", "kategori" => "Magang"],
          ["title" => "Magang Guru", "kategori" => "Magang"],
          ["title" => "Strategi Optimal Sosial Media", "kategori" => "Magang"],
          ["title" => "Sistem Informasi", "kategori" => "Magang"],
          ["title" => "Web Developer", "kategori" => "Magang"],
          ["title" => "Digital Marketing", "kategori" => "Magang"],
          ["title" => "Komputer Perkantoran", "kategori" => "Magang"],
          ["title" => "Akuntansi dan Perpajakan", "kategori" => "Magang"],
          ["title" => "Desain Grafis", "kategori" => "Magang"],
          ["title" => "Content Creator", "kategori" => "Magang"],
          ["title" => "Multimedia dan Video Editing", "kategori" => "Magang"],
        ];
      @endphp

      @foreach ($kursus as $item)
      <div class="col">
        <div class="card-custom">
          <div class="placeholder-img"></div>
          <div class="title-kategori">
            <span>{{ $item['title'] }}</span>
            <span class="badge-kategori">{{ $item['kategori'] }}</span>
          </div>
          <button class="btn-pesan">Pesan</button>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
