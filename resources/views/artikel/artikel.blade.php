
@extends('layouts.main')

@section('title', 'Artikel - Campus Digital')

@section('content')
<style>
  body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #f9f9f9;
  }
  .header-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 2rem;
  }
  .search-bar {
    width: 100%;
    max-width: 600px;
    border-radius: 30px;
    padding: 0.75rem 1.5rem;
    box-shadow: 0 0 10px rgba(0,0,0,0.05);
    display: flex;
    align-items: center;
    background-color: #fff;
  }
  .search-bar input {
    border: none;
    outline: none;
    flex-grow: 1;
  }
  .kategori-group {
    text-align: center;
  }
  .kategori-btn {
    border-radius: 6px;
    margin: 5px;
    color: #9145f7;
    border: 1px solid #9145f7;
    font-weight: 500;
    transition: all 0.3s ease;
    cursor: pointer;
  }
  .kategori-btn:hover,
  .kategori-btn.active {
    background-color: #9145f7;
    color: white;
  }
  .artikel-card {
    border: 1px solid #eee;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
  }
  .artikel-card img {
    height: 120px;
    width: 100%;
    max-width: 100%;
    object-fit: cover;
    aspect-ratio: 1 / 1;
  }
  .badge-kategori {
    position: absolute;
    top: 8px;
    right: 8px;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    font-size: 0.7rem;
    padding: 4px 10px;
    border-radius: 6px;
  }
  .artikel-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1rem;
  }
  .meta-box {
    background-color: #f1f1f1;
    padding: 4px 10px;
    border-radius: 15px;
    font-size: 0.75rem;
    display: flex;
    align-items: center;
    gap: 5px;
  }
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
  .hero-title {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 10px;
  }
  .hero-subtitle {
    font-size: 0.95rem;
    line-height: 1.6;
    max-width: 700px;
    margin-bottom: 18px;
  }
</style>
<body>
  <section class="hero-section">
    <div class="hero-bg-wrapper">
      <img src="{{asset ('img/hero.png')}}" alt="Artikel">
      <div class="overlay"></div>
    </div>
    <div class="hero-content container">
      <h1 class="hero-title">Artikel</h1>
      <p class="hero-subtitle">
        Artikel, tips, dan checklist menarik yang disiapkan bagi bisnis Anda
      </p>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="header-section">
        <div class="search-bar">
          <input type="text" placeholder="Cari Judul Artikel..." id="searchInput">
          <i class="bi bi-search text-muted ms-2"></i>
        </div>
        <div class="kategori-group" id="kategoriGroup">
          <button class="btn kategori-btn">Kategori 1</button>
          <button class="btn kategori-btn">Kategori 2</button>
          <button class="btn kategori-btn">Kategori 3</button>
          <button class="btn kategori-btn">Kategori 4</button>
          <button class="btn kategori-btn">Kategori 5</button>
          <button class="btn kategori-btn">Kategori 6</button>
          <button class="btn kategori-btn">Kategori 7</button>
          <button class="btn kategori-btn">Kategori 8</button>
          <button class="btn kategori-btn">Kategori 9</button>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="artikelGrid">

        <!-- Isi artikel sesuai yang kamu kasih, tambah atribut data-kategori & data-judul di tiap .col -->

        <div class="col" data-kategori="Kategori 1" data-judul="Artikel Pelatihan Digital">
          <div class="card artikel-card position-relative h-100">
            <span class="badge-kategori">Kategori 1</span>
            <img src="{{asset ('img/artikel.png')}}" alt="Artikel">
            <div class="card-body text-start">
              <h6 class="fw-bold text-dark">Artikel Pelatihan Digital</h6>
              <p class="text-muted small mb-2">Marketing $$$$$$$$$$</p>
              <div class="artikel-meta">
                <div class="meta-box">
                  <i class="bi bi-person-circle"></i> Kontributor
                </div>
                <div class="meta-box">
                  <i class="bi bi-calendar2"></i> 8 Jul 2025
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col" data-kategori="Kategori 1" data-judul="Artikel Pelatihan Digital">
          <div class="card artikel-card position-relative h-100">
            <span class="badge-kategori">Kategori 1</span>
            <img src="{{asset ('img/artikel.png')}}" alt="Artikel">
            <div class="card-body text-start">
              <h6 class="fw-bold text-dark">Artikel Pelatihan Digital</h6>
              <p class="text-muted small mb-2">Marketing $$$$$$$$$$</p>
              <div class="artikel-meta">
                <div class="meta-box">
                  <i class="bi bi-person-circle"></i> Kontributor
                </div>
                <div class="meta-box">
                  <i class="bi bi-calendar2"></i> 8 Jul 2025
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col" data-kategori="Kategori 1" data-judul="Artikel Pelatihan Marketing">
          <div class="card artikel-card position-relative h-100">
            <span class="badge-kategori">Kategori 1</span>
            <img src="{{asset ('img/artikel.png')}}" alt="Artikel">
            <div class="card-body text-start">
              <h6 class="fw-bold text-dark">Artikel Pelatihan Marketing</h6>
              <p class="text-muted small mb-2">Marketing $$$$$$$$$$</p>
              <div class="artikel-meta">
                <div class="meta-box">
                  <i class="bi bi-person-circle"></i> Kontributor
                </div>
                <div class="meta-box">
                  <i class="bi bi-calendar2"></i> 8 Jul 2025
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col" data-kategori="Kategori 1" data-judul="Artikel Pelatihan Digital">
          <div class="card artikel-card position-relative h-100">
            <span class="badge-kategori">Kategori 1</span>
            <img src="{{asset ('img/artikel.png')}}" alt="Artikel">
            <div class="card-body text-start">
              <h6 class="fw-bold text-dark">Artikel Pelatihan Digital</h6>
              <p class="text-muted small mb-2">Marketing $$$$$$$$$$</p>
              <div class="artikel-meta">
                <div class="meta-box">
                  <i class="bi bi-person-circle"></i> Kontributor
                </div>
                <div class="meta-box">
                  <i class="bi bi-calendar2"></i> 8 Jul 2025
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Kamu bisa tambah kartu lain dengan data-kategori dan data-judul sesuai kebutuhan -->

      </div>
    </div>
  </section>

  <script>
    const artikelCards = document.querySelectorAll('.col[data-kategori]');
    const searchInput = document.getElementById('searchInput');
    const kategoriButtons = document.querySelectorAll('.kategori-btn');

    function filterArtikel() {
      const keyword = searchInput.value.toLowerCase();
      const activeBtn = document.querySelector('.kategori-btn.active');
      const activeKategori = activeBtn ? activeBtn.textContent.trim() : '';

      artikelCards.forEach(card => {
        const judul = card.getAttribute('data-judul').toLowerCase();
        const kategori = card.getAttribute('data-kategori');

        const cocokJudul = judul.includes(keyword);
        const cocokKategori = !activeKategori || kategori === activeKategori;

        if (cocokJudul && cocokKategori) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }

    searchInput.addEventListener('input', filterArtikel);

    kategoriButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        kategoriButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        filterArtikel();
      });
    });
  </script>
</body>
@endsection