@props([
    'type' => 'artikel', // artikel, program, mentor
    'image' => null,
    'badge' => null,
    'title' => null,
    'desc' => null,
    'author' => null,
    'date' => null,
    'name' => null,
    'role' => null,
    'url' => null,
])
<style>
/* === Base Card === */
.card {
  background: #fff;
  border: 1px solid #e5e7eb;
  border-radius: 16px;
  overflow: hidden;
  transition: .3s;
  box-shadow: 0 4px 8px rgba(0,0,0,.05);
}
.card:hover { transform: translateY(-4px); }
.card .card-thumb img {
  width: 100%;
  height: 150px;
  object-fit: cover;
}
.card .card-body { padding: 12px; }
.card .card-title { font-size: 14px; font-weight: 600; color: #111827; }
.card .card-desc { font-size: 12px; color: #6b7280; margin-top: 4px; }

/* === Artikel Card === */
.artikel-card {
  max-width: 260px;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  overflow: hidden;
  transition: transform 0.2s ease;
}

.artikel-card:hover {
  transform: translateY(-4px);
}

.artikel-card .card-thumb {
  position: relative;
}

.artikel-card .card-thumb img {
  width: 100%;
  height: 170px;
  object-fit: cover;
  border-top-left-radius: 16px;
  border-top-right-radius: 16px;
  display: block;
}

.artikel-card .card-badge {
  position: absolute;
  top: 10px;
  right: 10px;
  background: #f3f4f6;
  color: #374151;
  font-size: 12px;
  padding: 4px 10px;
  border-radius: 999px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
}

.artikel-card .card-body {
  padding: 12px 16px;
  text-align: center;
}

.artikel-card .card-title {
  font-size: 14px;
  font-weight: 500;
  color: #111827;
  line-height: 1.4;
  margin: 8px 0;
}

.artikel-card .card-desc {
  font-size: 12px;
  color: #6b7280;
  margin-bottom: 8px;
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
  border: 1px solid #e0d9ff; /* Border ungu muda */
  background-color: transparent; /* Hilangkan background abu-abu */
  padding: 6px 12px;
  border-radius: 999px; /* Biar jadi bentuk kapsul */
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


/* === Program Card === */
.program-card { max-width: 260px; }
.program-card .card-btn {
  display: block;
  background: #7c3aed;
  color: #fff;
  text-align: center;
  padding: 8px;
  border-radius: 12px;
  font-size: 13px;
  font-weight: 500;
  text-decoration: none;
  transition: .3s;
  margin-top: 12px;
}
.program-card .card-btn:hover { background: #6d28d9; }

/* === Mentor Card === */
.mentor-card { max-width: 220px; text-align: center; }
.mentor-card img { width: 100%; height: 220px; object-fit: cover; }

</style>
{{-- Card Wrapper --}}
@props([
    'type' => 'artikel',
    'image' => 'img/default.jpg',
    'badge' => null,
    'title' => 'Judul Artikel',
    'desc' => 'Deskripsi singkat artikel',
    'author' => 'Contributor',
    'date' => '5 Juli 2025',
])

<div class="artikel-card">
    {{-- Thumbnail --}}
    <div class="card-thumb">
        <img src="{{ asset($image) }}" alt="{{ $title }}">
        @if($badge)
            <span class="card-badge">{{ $badge }}</span>
        @endif
    </div>

    {{-- Body --}}
    <div class="card-body">
        <h4 class="card-title">{{ $title }}</h4>
        <p class="card-desc">{{ $desc }}</p>
        <div class="artikel-footer">
            <div class="footer-item">
                <div class="icon-avatar">
                    <img src="{{ asset('img/fa.png')}}" alt="fa-user">
                </div>
                <span class="contributor">{{ $author }}</span>
            </div>
            <div class="footer-item">
                <span class="date">{{ $date }}</span>
            </div>
        </div>
    </div>
</div>



        {{-- Program --}}
        @if($type === 'program')
            <h4 class="card-title">{{ $title }}</h4>
            <p class="card-desc">{{ $desc }}</p>
            <a href="{{ $url ?? '#' }}" class="card-btn">Pesan</a>
        @endif

        {{-- Mentor --}}
        @if($type === 'mentor')
            <h4 class="card-title">{{ $name }}</h4>
            <p class="card-desc">{{ $role }}</p>
        @endif
    </div>
</div>
