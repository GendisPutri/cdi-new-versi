<style>
.footer-section {
  background: linear-gradient(90deg, #7f00ff, #e100ff);
  color: #fff;
  padding: 40px 20px 20px;
  font-family: Arial, sans-serif;
}

.footer-section h5,
.footer-section h6 {
  color: #fff;
  margin-bottom: 16px;
}

.footer-section p {
  font-size: 14px;
  color: #eee;
  line-height: 1.6;
}

.footer-links {
  list-style: none;
  padding: 0;
  font-size: 14px;
}

.footer-links li {
  margin-bottom: 8px;
  color: #eee;
}

.social-icons {
  display: flex;
  gap: 12px;
  margin-top: 10px;
}

.social-icons img {
  width: 28px;
  height: 28px;
  border-radius: 50%;
  transition: 0.3s;
}

.social-icons img:hover {
  transform: scale(1.1);
}

.address {
  display: flex;
  align-items: flex-start;
  gap: 8px;
}

.address img {
  width: 20px;
  height: 20px;
  margin-top: 4px;
}

.map-img {
  width: 100%;
  max-width: 250px;
  border-radius: 8px;
  margin-top: 10px;
}

.footer-bottom {
  color: #ccc;
  font-size: 13px;
}

.footer-bottom hr {
  border: none;
  border-top: 2px solid #fff; /* underline cantik */
  width: 100%;
  margin: 10px auto;
}

@media (max-width: 768px) {
  .footer-section .row > div {
    margin-bottom: 24px;
  }

  .map-img {
    max-width: 100%;
  }
}
 @media (max-width: 400px) {
  .map-img {
    width: 300px;
  }
 }
</style>

<footer class="footer-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5><strong>CAMPUSDIGITAL</strong></h5>
        <p>
          Campusdigital adalah lembaga kursus pelatihan di bidang digital yang tersertifikasi BNSP, serta tempat pelatihan unggulan yang relevan dengan kebutuhan industri saat ini.
        </p>
        
        <!-- Social Media tepat di bawah keterangan -->
        <div class="social-icons">
          <a href="#"><img src="img/instagram.png" alt="Instagram"></a>
          <a href="#"><img src="img/whatsapp.png" alt="WhatsApp"></a>
          <a href="#"><img src="img/facebook.png" alt="Facebook"></a>
        </div>
      </div>

      <div class="col-md-4">
        <h6><strong>Program Pelatihan BNSP</strong></h6>
        <ul class="footer-links">
          <li>Pelatihan Digital Marketing</li>
          <li>Pelatihan Content Creator</li>
          <li>Pelatihan Desain Grafis</li>
          <li>Pelatihan Operator Komputer Muda</li>
          <li>Pelatihan Junior Web Programmer</li>
        </ul>
      </div>

      <div class="col-md-4">
        <h6><strong>Temukan Kami</strong></h6>
        <div class="address">
          <img src="img/location.png" alt="Lokasi">
          <p>Jl. Tamanrejo, RT.05 RW.10, Blok 50A, Kelurahan Mangunharjo, Kecamatan Tugu, Kota Semarang</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.7511077159193!2d110.45863817399893!3d-7.038510592963513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70894e88615ef1%3A0x40991ad781fce8e9!2sCampus%20World!5e0!3m2!1sid!2sid!4v1757662730232!5m2!1sid!2sid" 
        width="350" 
        height="200" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        class="map-img">
        </iframe>
      </div>
    </div>

    <div class="footer-bottom text-center mt-4">
      <hr />
      <p>&copy; 2019 - 2025 Campusdigital.id. All rights reserved</p>
    </div>
  </div>
</footer>
