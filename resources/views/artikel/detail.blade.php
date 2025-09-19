@extends('layouts.main')

@section('title', 'Beranda - Campus Digital')

@section('content')

<style>
@media (min-width: 520px){
.artikel-hp{
  display: none;
}
}
.container-detail-artikel {
  display: flex;
  gap: 2px;
  max-width: 1200px;
  margin: 10px auto;
  padding: 0 10px;
}
.hr {
 width: 1%;
}
/* Sidebar kiri */
.sidebar-left {
    margin: 0 auto;  
  width: 220px;
  font-family: 'Poppins', sans-serif;
}

/* Konten artikel (kanan) */
.artikel-content {
  flex: 1;
  background: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

/* ------ Sidebar style (contributor, kategori, artikel lain) ------ */
.contributor-card {
  display: flex;
  align-items: center;
  gap: 12px;
  background: #fff;
  padding: 12px 18px;
  border-radius: 50px; /* oval */
  box-shadow: 0 4px 10px rgba(0,0,0,0.15);
  width: fit-content;
  margin-bottom: 15px;
}
.contributor-img {
  width: 55px;
  height: 55px;
  border-radius: 50%;
  object-fit: cover;
}
.contributor-text h4 {
  margin: 0;
  font-size: 16px;
  font-weight: 600;
}
.contributor-text .role {
  margin: 2px 0 0;
  font-size: 13px;
  color: gray;
}

.tags {
  margin-bottom: 20px;
}

.tags span {
  display: inline-block;
  text-align: center;
  border-radius: 50px;
  border: 1px solid #fff; /* ganti border biar nyala */
  background: #AF76EF;
  color: #fff;
  padding: 3px 10px;
  font-size: 12px;
  margin: 3px;
  box-shadow: 0 4px 4px rgba(0,0,0,0.15); /* biar lebih kebaca */
}

.kategori-box {
  margin-bottom: 20px;
}
.kategori-tags {
  display: grid;
  grid-template-columns: repeat(2, auto); /* bikin 2 kolom */
width: 142px;
align-items: flex-start;
gap: 8px;   /* atur lebar total */
}

.kategori-tags span {
  background: #AF76EF;
  color: #fff;
  padding: 3px 10px;    /* ukuran kecil */
  border-radius: 50px;
  font-size: 12px;
  font-weight: 500;
  white-space: nowrap;
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  border: 1px solid #fff;
}

.artikel-lain h5 {
  margin-bottom: 10px;
}
.artikel-lain {
  display: flex;
  flex-wrap: wrap;
  gap: 16px;
}

.artikel-card {
  position: relative;
  width: 180px;   /* atur lebar card */
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  background: #fff;
}

.card-image {
  position: relative;
  width: 100%;
  height: 200px;
  overflow: hidden;
}

.card-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.badge {
  position: absolute;
  top: 8px;
  right: 8px;
  background: white;
  color: #333;
  padding: 3px 12px;
  border-radius: 20px;
  font-size: 13px;
  font-weight: 500;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.card-overlay {
  position: absolute;
  bottom: 0;
  width: 100%;
  background: rgba(64, 42, 42, 0.7); /* semi transparan */
  color: white;
  padding: 8px 10px;
  font-size: 13px;
}
.card-overlay p { 
  margin: 0; 
  color: #fff; 
  font-size: 11px; 
  font-family: Inter;
font-size: 12px;
font-style: normal;
font-weight: 400;
line-height: normal;
  padding-left: 6px;  /* agak kecilin biar nempel dikit */
  border-left: 3px solid #FFD600; /* garis kuning di kiri teks */
}
.breadcrumb {
      font-size: 14px;
      color: #777;
      margin-bottom: 10px;
    }
    .breadcrumb a {
      text-decoration: none;
      color: #555;
    }
    .breadcrumb span {
      font-weight: bold;
      color: #000;
    }
    /* judul artikel */
    h1 {
      font-size: 26px;
      margin-bottom: 10px;
      color: #222;
    }
    /* meta dengan ikon */
    .meta {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 14px;
      color: #777;
      margin-bottom: 20px;
    }
    .meta img {
      width: 16px;
      height: 16px;
      opacity: 0.7;
    }
    /* featured image */
    .featured-img {
      width: 100%;
      height: 20%;
  object-fit: cover;
    }
    /* isi artikel */
    h2 {
      font-size: 20px;
      margin-top: 25px;
      margin-bottom: 10px;
      color: #111;
    }
    ul {
      margin: 10px 0 20px 20px;
    }
    ul li {
      margin-bottom: 6px;
    }
    p {
      margin-bottom: 16px;
      text-align: justify;
    }
    /* Responsive: untuk layar HP */
   @media (max-width: 500px) {
 .artikel-dekstop {
  display: none !important;
}
.detail-artikel {
  max-width: 1200px;
  margin: 10px auto;
  padding: 0 10px;
}

.artikel-content {
  background: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  margin-bottom: 30px; /* kasih jarak bawah biar sidebar gak nempel */
  height: 100%;
}

.sidebar-section {
  max-width: 1200px;
  margin: 0 auto 40px auto;
  padding: 0 10px;
}

.sidebar-left {
  width: 100%;
}
/* Contributor + Tags sejajar */
.contributor-tags-row {
  display: flex;
  align-items: flex-start; /* biar atasnya rata */
  gap: 1px; /* jarak antar kolom */
}

/* Bagian contributor */
.contributor-card {
  display: flex;
  align-items: center;
  gap: 1px;
  background: #fff;
  padding: 6px;
  border-radius: 50px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  flex-shrink: 0; /* jangan diperkecil */
}

/* Bagian tags */
.tags {
    display: grid;
  grid-template-columns: repeat(2, 1fr); /* 2 kolom */
  gap: 1px; /* jarak antar tag */
  flex: 1; /* biar tetap sejajar dengan contributor */
}


.contributor-img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}


/* Artikel grid 2 kolom fix */
.artikel-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
}

.artikel-card {
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  width: 95%;
}

.card-image {
  position: relative;
}

.card-image img {
  width: 100%;
  display: block;
}

.card-image .badge {
  position: absolute;
  top: 10px;
  left: 70px;
  background: #FFFFFF;
  color: #000000B2;
  font-size: 12px;
  padding: 4px 8px;
  border-radius: 8px;
  width: 50%;
}

.card-overlay {
  padding: 10px;
  font-size: 14px;
  color: #333;
}

.kategori-tags {
  display: flex;
  flex-wrap: wrap;   /* biar bisa turun kalau kepanjangan */
  gap: 10px;
}

.kategori-tags .tag {
  display: inline-flex !important;   /* override CSS lain */
  background: #AF76EF;
  color: #fff;
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 14px;
  font-weight: 500;
  white-space: nowrap;
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}



}

</style>
<div class="artikel-dekstop">

<div class="container-detail-artikel artikel-dekstop">
<!-- Sidebar Kiri -->
  <aside class="sidebar-left">
    <div class="contributor-card">
      <img src="{{asset ('img/mentor-1.png')}}" alt="Contributor" class="contributor-img">
      <div class="contributor-text">
        <h4>Contributor</h4>
        <p class="role">Publisher</p>
      </div>
    </div>

    <div class="tags">
      <span>#hashtag1</span>
      <span>#hashtag2</span>
      <span>#hashtag3</span>
      <span>#hashtag4</span>
      <span>#hashtag5</span>
      <span>#hashtag6</span>
    </div>

    <hr style="width: 90%;">
    <div class="kategori-box">
      <h5>Kategori</h5>
      <div class="kategori-tags">
        <span>Kategori 1</span>
        <span>Kategori 2</span>
        <span>Kategori 3</span>
        <span>Kategori 4</span>
        <span>Kategori 5</span>
        <span>Kategori 6</span>
        <span>Kategori 7</span>
        <span>Kategori 8</span>
        <span>Kategori 9</span>
      </div>
    </div>

    <hr width="90%;">
    <div class="artikel-lain">
      <h5>Artikel Lainnya</h5>
      <div class="artikel-card">
        <div class="card-image">
          <img src="{{asset ('img/img_article.png')}}" alt="Artikel">
          <span class="badge">Kategori 1</span>
        </div>
        <div class="card-overlay">
          <p>Artikel Pelatihan Digital Marketing sssssssss ssssssss ssssssss ssssss</p>
        </div>
      </div>
       <div class="artikel-lain">
      <div class="artikel-card">
        <div class="card-image">
          <img src="{{asset ('img/img_article.png')}}" alt="Artikel">
          <span class="badge">Kategori 1</span>
        </div>
        <div class="card-overlay">
          <p>Artikel Pelatihan Digital Marketing sssssssss ssssssss ssssssss ssssss</p>
        </div>
      </div>
       <div class="artikel-lain">
      <div class="artikel-card">
        <div class="card-image">
          <img src="{{asset ('img/img_article.png')}}" alt="Artikel">
          <span class="badge">Kategori 1</span>
        </div>
        <div class="card-overlay">
          <p>Artikel Pelatihan Digital Marketing sssssssss ssssssss ssssssss ssssss</p>
        </div>
      </div>
       <div class="artikel-lain">
      <div class="artikel-card">
        <div class="card-image">
          <img src="{{asset ('img/img_article.png')}}" alt="Artikel">
          <span class="badge">Kategori 1</span>
        </div>
        <div class="card-overlay">
          <p>Artikel Pelatihan Digital Marketing sssssssss ssssssss ssssssss ssssss</p>
        </div>
      </div>
    </div>
  </aside>

  <!-- Konten Artikel Kanan -->
  <div class="artikel-content">
    {{-- copy-paste isi artikel yang tadi --}}
     <div class="breadcrumb">
      <a href="#">Beranda</a> / <span>TikTok Bisa Jadi Jalan Pintas UKM Buat Tampil & Dikenal</span>
    </div>

    <!-- judul artikel -->
    <h1>TikTok Bisa Jadi Jalan Pintas UKM Buat Tampil & Dikenal</h1>

    <!-- meta -->
    <div class="meta">
      <img src="{{ asset('img/icondate.png') }}" alt="icon">
      <span>Dipublikasikan tanggal 10 Juli 2023, 10:10 WIB</span>
    </div>

    <!-- gambar utama -->
    <img src="{{ asset('img/cover.png') }}" alt="TikTok UKM" class="featured-img">

    <!-- isi artikel -->
    <p>Pernah nggak sih kamu scroll TikTok, terus tiba-tiba nemu video jualan yang tampilannya sederhana, tapi bikin pengen beli? Bahkan kadang bukan brand besar, tapi justru usaha rumahan yang bisa viral dan dapet orderan ribuan. Nah, itulah kekuatan TikTok dan ini alasan kenapa UKM perlu banget masuk ke dunia TikTok Marketing. TikTok sekarang bukan cuma tempat buat joget atau hiburan semata. Banyak banget pelaku usaha kecil yang sukses bangun brand, naikin penjualan, bahkan dikenal luas cuma lewat video pendek. Asal tahu cara mainnya, kamu juga bisa!</p>

    <h2>Kenapa TikTok Cocok Buat UKM?</h2>
    <p>Algoritma TikTok unik banget. Nggak peduli kamu baru mulai atau belum punya followers, konten kamu tetap bisa masuk FYP (For You Page). Artinya, peluang buat dilihat banyak orang itu besar banget bahkan tanpa harus pasang iklan mahal. Selain itu, mayoritas pengguna TikTok di Indonesia itu aktif, suka eksplor, dan suka beli barang yang unik. Jadi kalau produk kamu punya keunikan atau cerita menarik, bisa banget dimanfaatin di TikTok.</p>

    <h2>Cara Praktis Mulai TikTok Marketing Buat UKM</h2>
    <p>Kamu nggak perlu kamera mahal atau skill edit tingkat dewa buat mulai. Cukup modal HP dan ide kreatif. Nih langkah-langkah dasarnya:</p>
    <ul>
      <li><strong>1. Kenalin Dulu Audiens Kamu</strong><br>Sebelum bikin konten, coba pikirin dulu: siapa yang kamu target? Remaja, ibu-ibu muda, pekerja kantoran, atau siapa? Dari situ kamu bisa tentuin gaya konten dan bahasa yang cocok.</li>
      <li><strong>2. Ikuti Tren, Tapi Tetap Autentik</strong><br>Scroll TikTok buat lihat tren terbaru. Tapi jangan asal ikut. Gabungkan tren dengan karakter produk atau cerita unik dari usahamu. Misalnya, tren lagu viral bisa dipakai untuk nunjukin proses bikin produk kamu.</li>
      <li><strong>3. Konten Simpel Tapi Menarik</strong><br>Kamu bisa mulai dari konten seperti:
        <ul>
          <li>Proses pembuatan produk (behind the scene)</li>
          <li>Testimoni pelanggan</li>
          <li>Story singkat kenapa kamu mulai usaha</li>
          <li>Tips singkat seputar produk kamu</li>
        </ul>
      </li>
      <li><strong>4. Pakai Hashtag yang Relevan</strong><br>Jangan lupakan hashtag. Gunakan yang sesuai dengan produk, lokasi, dan tren. Misalnya: #UKMIndonesia #ProdukLokal #FYPIndonesia</li>
      <li><strong>5. Konsisten Upload & Interaksi</strong><br>Upload 2–4 video per minggu aja udah cukup. Jangan lupa juga balas komentar, bikin polling di kolom tanya, atau duet sama video orang lain buat tambah exposure.</li>
    </ul>

    <h2>Contoh UKM yang Sukses Lewat TikTok</h2>
    <p>Salah satu contohnya adalah usaha minuman lokal yang cuma modal dapur rumah. Mereka upload konten proses pembuatan minuman sambil cerita lucu tentang pelanggan, dan... boom! Videonya viral. Sekarang, mereka punya cabang di berbagai kota.</p>

    <p>Hal yang Perlu Dihindari</p>
    <ul>
      <li>Cuma fokus jualan, nggak bangun koneksi</li>
      <li>Nggak ikut tren, jadi keliatan kaku</li>
      <li>Upload jarang-jarang, susah naik</li>
      <li>Konten template semua, nggak ada ciri khas</li>
    </ul>

    <p>TikTok bukan lagi sekadar aplikasi hiburan, tapi sudah menjadi salah satu platform pemasaran paling potensial untuk UKM. Dengan algoritma FYP (For You Page), konten sederhana dan autentik tetap berpeluang tinggi untuk viral tanpa harus berbiaya mahal. Pelatihan dan panduan dari <strong>Campus Digital</strong> seperti <u>Cara TikTok Marketing Anti-Mainstream!</u> dan <u>Tips TikTok Marketing Paling Ampuh Yang Perlu Kamu Ketahui!</u> sangat membantu UKM dalam memahami langkah praktis membuat konten menarik, mengoptimalkan hashtag, dan memanfaatkan fitur TikTok Ads. Dengan bekal ini, UKM bisa tampil menonjol, membangun koneksi dengan audiens, dan meningkatkan brand awareness secara signifikan.</p>

    <p>
      Langkah selanjutnya? Cukup mulai dari yang sederhana: buat video proses produksi, tunjukkan testimoni pelanggan, atau ceritakan kisah brand-mu dengan gaya yang jujur dan manusiawi. Jangan lupa untuk aktifkan interaksi dan gunakan hashtag yang relevan. Jika butuh boosting, kamu juga bisa memanfaatkan TikTok Ads serta fitur TikTok Shop seperti yang dijelaskan di <u>Campus Digital</u>, atau mempertimbangkan layanan jasa kelola sosial media dari <u>Campus Creative</u>. Intinya: semakin sering dan konsisten kamu tampil, semakin besar peluang untuk dipercaya, dipilih, dan dibuat loyal oleh pelanggan.
    </p>
  </div>
    <!-- dst isi artikel -->
  </div>
</div>
</section>

<section class="artikel-hp">

<section class="detail-artikel">

<div class="container-detail-artikel">
  <!-- Konten Artikel Kanan -->
  <div class="artikel-content">
    {{-- copy-paste isi artikel yang tadi --}}
     <div class="breadcrumb">
      <a href="#">Beranda</a> / <span>TikTok Bisa Jadi Jalan Pintas UKM Buat Tampil & Dikenal</span>
    </div>

    <!-- judul artikel -->
    <h1>TikTok Bisa Jadi Jalan Pintas UKM Buat Tampil & Dikenal</h1>

    <!-- meta -->
    <div class="meta">
      <img src="{{ asset('img/icondate.png') }}" alt="icon">
      <span>Dipublikasikan tanggal 10 Juli 2023, 10:10 WIB</span>
    </div>

    <!-- gambar utama -->
    <img src="{{ asset('img/cover.png') }}" alt="TikTok UKM" class="featured-img">

    <!-- isi artikel -->
    <p>Pernah nggak sih kamu scroll TikTok, terus tiba-tiba nemu video jualan yang tampilannya sederhana, tapi bikin pengen beli? Bahkan kadang bukan brand besar, tapi justru usaha rumahan yang bisa viral dan dapet orderan ribuan. Nah, itulah kekuatan TikTok dan ini alasan kenapa UKM perlu banget masuk ke dunia TikTok Marketing. TikTok sekarang bukan cuma tempat buat joget atau hiburan semata. Banyak banget pelaku usaha kecil yang sukses bangun brand, naikin penjualan, bahkan dikenal luas cuma lewat video pendek. Asal tahu cara mainnya, kamu juga bisa!</p>

    <h2>Kenapa TikTok Cocok Buat UKM?</h2>
    <p>Algoritma TikTok unik banget. Nggak peduli kamu baru mulai atau belum punya followers, konten kamu tetap bisa masuk FYP (For You Page). Artinya, peluang buat dilihat banyak orang itu besar banget bahkan tanpa harus pasang iklan mahal. Selain itu, mayoritas pengguna TikTok di Indonesia itu aktif, suka eksplor, dan suka beli barang yang unik. Jadi kalau produk kamu punya keunikan atau cerita menarik, bisa banget dimanfaatin di TikTok.</p>

    <h2>Cara Praktis Mulai TikTok Marketing Buat UKM</h2>
    <p>Kamu nggak perlu kamera mahal atau skill edit tingkat dewa buat mulai. Cukup modal HP dan ide kreatif. Nih langkah-langkah dasarnya:</p>
    <ul>
      <li><strong>1. Kenalin Dulu Audiens Kamu</strong><br>Sebelum bikin konten, coba pikirin dulu: siapa yang kamu target? Remaja, ibu-ibu muda, pekerja kantoran, atau siapa? Dari situ kamu bisa tentuin gaya konten dan bahasa yang cocok.</li>
      <li><strong>2. Ikuti Tren, Tapi Tetap Autentik</strong><br>Scroll TikTok buat lihat tren terbaru. Tapi jangan asal ikut. Gabungkan tren dengan karakter produk atau cerita unik dari usahamu. Misalnya, tren lagu viral bisa dipakai untuk nunjukin proses bikin produk kamu.</li>
      <li><strong>3. Konten Simpel Tapi Menarik</strong><br>Kamu bisa mulai dari konten seperti:
        <ul>
          <li>Proses pembuatan produk (behind the scene)</li>
          <li>Testimoni pelanggan</li>
          <li>Story singkat kenapa kamu mulai usaha</li>
          <li>Tips singkat seputar produk kamu</li>
        </ul>
      </li>
      <li><strong>4. Pakai Hashtag yang Relevan</strong><br>Jangan lupakan hashtag. Gunakan yang sesuai dengan produk, lokasi, dan tren. Misalnya: #UKMIndonesia #ProdukLokal #FYPIndonesia</li>
      <li><strong>5. Konsisten Upload & Interaksi</strong><br>Upload 2–4 video per minggu aja udah cukup. Jangan lupa juga balas komentar, bikin polling di kolom tanya, atau duet sama video orang lain buat tambah exposure.</li>
    </ul>

    <h2>Contoh UKM yang Sukses Lewat TikTok</h2>
    <p>Salah satu contohnya adalah usaha minuman lokal yang cuma modal dapur rumah. Mereka upload konten proses pembuatan minuman sambil cerita lucu tentang pelanggan, dan... boom! Videonya viral. Sekarang, mereka punya cabang di berbagai kota.</p>

    <p>Hal yang Perlu Dihindari</p>
    <ul>
      <li>Cuma fokus jualan, nggak bangun koneksi</li>
      <li>Nggak ikut tren, jadi keliatan kaku</li>
      <li>Upload jarang-jarang, susah naik</li>
      <li>Konten template semua, nggak ada ciri khas</li>
    </ul>

    <p>TikTok bukan lagi sekadar aplikasi hiburan, tapi sudah menjadi salah satu platform pemasaran paling potensial untuk UKM. Dengan algoritma FYP (For You Page), konten sederhana dan autentik tetap berpeluang tinggi untuk viral tanpa harus berbiaya mahal. Pelatihan dan panduan dari <strong>Campus Digital</strong> seperti <u>Cara TikTok Marketing Anti-Mainstream!</u> dan <u>Tips TikTok Marketing Paling Ampuh Yang Perlu Kamu Ketahui!</u> sangat membantu UKM dalam memahami langkah praktis membuat konten menarik, mengoptimalkan hashtag, dan memanfaatkan fitur TikTok Ads. Dengan bekal ini, UKM bisa tampil menonjol, membangun koneksi dengan audiens, dan meningkatkan brand awareness secara signifikan.</p>

    <p>
      Langkah selanjutnya? Cukup mulai dari yang sederhana: buat video proses produksi, tunjukkan testimoni pelanggan, atau ceritakan kisah brand-mu dengan gaya yang jujur dan manusiawi. Jangan lupa untuk aktifkan interaksi dan gunakan hashtag yang relevan. Jika butuh boosting, kamu juga bisa memanfaatkan TikTok Ads serta fitur TikTok Shop seperti yang dijelaskan di <u>Campus Digital</u>, atau mempertimbangkan layanan jasa kelola sosial media dari <u>Campus Creative</u>. Intinya: semakin sering dan konsisten kamu tampil, semakin besar peluang untuk dipercaya, dipilih, dan dibuat loyal oleh pelanggan.
    </p>
  </div>
    <!-- dst isi artikel -->
</div>
</section>
<section class="sidebar-section">
  <aside class="sidebar-left">
    
    <!-- Baris Contributor + Tags -->
    <div class="contributor-tags-row">
      <!-- Contributor -->
      <div class="contributor-card">
        <img src="{{asset ('img/mentor-1.png')}}" alt="Contributor" class="contributor-img">
        <div class="contributor-text">
          <h4>Contributor</h4>
          <p class="role">Publisher</p>
        </div>
      </div>

      <!-- Tags -->
      <div class="tags">
        <span>#hashtag1</span>
        <span>#hashtag2</span>
        <span>#hashtag3</span>
        <span>#hashtag4</span>
        <span>#hashtag5</span>
        <span>#hashtag6</span>
      </div>
    </div>

    <!-- Kategori -->
    <div class="kategori-box">
      <h5>Kategori</h5>
      <div class="kategori-tags">
        <span>Kategori 1</span>
        <span>Kategori 2</span>
        <span>Kategori 3</span>
        <span>Kategori 4</span>
        <span>Kategori 5</span>
        <span>Kategori 6</span>
        <span>Kategori 7</span>
        <span>Kategori 8</span>
        <span>Kategori 9</span>
      </div>
    </div>

    <!-- Artikel Lainnya -->
    <div class="artikel-lain">
      <h5 class="text-center text-bold">Artikel Lainnya</h5>
      <div class="artikel-grid">
        
        <!-- Card 1 -->
        <div class="artikel-card">
          <div class="card-image">
            <img src="{{asset ('img/img_article.png')}}" alt="Artikel">
            <span class="badge">Kategori 1</span>
          </div>
          <div class="card-overlay">
            <p>Artikel Pelatihan Digital Marketing sssssssss ssssssss ssssssss ssssss</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="artikel-card">
          <div class="card-image">
            <img src="{{asset ('img/img_article.png')}}" alt="Artikel">
            <span class="badge">Kategori 1</span>
          </div>
          <div class="card-overlay">
            <p>Artikel Pelatihan Digital Marketing sssssssss ssssssss ssssssss ssssss</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="artikel-card">
          <div class="card-image">
            <img src="{{asset ('img/img_article.png')}}" alt="Artikel">
            <span class="badge">Kategori 1</span>
          </div>
          <div class="card-overlay">
            <p>Artikel Pelatihan Digital Marketing sssssssss ssssssss ssssssss ssssss</p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="artikel-card">
          <div class="card-image">
            <img src="{{asset ('img/img_article.png')}}" alt="Artikel">
            <span class="badge">Kategori 1</span>
          </div>
          <div class="card-overlay">
            <p>Artikel Pelatihan Digital Marketing sssssssss ssssssss ssssssss ssssss</p>
          </div>
        </div>

      </div>
    </div>

  </aside>
</section>



@endsection
