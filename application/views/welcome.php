<style>
  /* Card styling */
.card {
  border-radius: 10px;
  overflow: hidden;
  transition: all 0.3s ease-in-out;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  width: 300px;
}

.card:hover {
  box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
  transform: translateY(-5px);
  border: 2px solid #ff0000;
  background-color: #ff0000;
  color: white;
}

/* Image styling */
.card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

/* Card body styling */
.card-body {
  padding: 15px;
  background-color: #fff;
}

/* Title styling */
.card-body h6 {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 10px;
  color: #333;
}

/* Price styling */
.card-body p {
  font-size: 18px;
  color: #007bff;
  font-weight: 500;
}
</style>

<div id="carouselExample" class="carousel slide">
  <div class="container my-5">
    <div class="carousel-inner">
      <?php foreach ($slider as $key => $value) : ?>
      <div class="carousel-item <?php echo $key == 0 ? 'active' : '' ?>">
        <img src="<?php echo $this->config->item('url_slider') . $value['foto_slider'] ?>" class="d-block w-100" style="border-radius: 30px; height: 550px;"
          alt="...">
        <div class="carousel-caption d-none d-md-block">
          <?php echo $value['caption_slider'] ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <button class="carousel-control-prev position-absolute top-50 translate-middle-y" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" style="left: 60px;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next position-absolute top-50 translate-middle-y" type="button" data-bs-target="#carouselExample" data-bs-slide="next" style="right: 60px;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="container">
  <div class="row">
    <div class="col">
      <h2></h2>
            <h3 style="color: red; font-weight: bold;">Pentingnya Merawat Sistem Pendingin Mesin</h3>
            <p class="my-2">
                Perawatan penting untuk menjaga sistem pendingin kendaraan tetap optimal. Layanan ini mencakup pemeriksaan kebocoran, pembersihan radiator dari kotoran dan kerak, penggantian cairan pendingin (coolant), serta pengecekan kipas dan selang pendingin. Perawatan radiator membantu mencegah overheating, meningkatkan performa mesin, dan memperpanjang usia komponen kendaraan. Dilakukan secara rutin, service ini juga mengurangi risiko kerusakan serius yang dapat menghabiskan biaya besar di masa depan. Pastikan radiator kendaraan Anda selalu dalam kondisi prima untuk kenyamanan dan keamanan berkendara.
            </p>
            
    </div>
    <div class=" text-center mb-5 col">
      <img src="<?php echo base_url('assets/_ (4).jpeg') ?>" style="border-radius: 30px; width: 400px; width: 70%;">
    </div>
  </div>
</div>

<div class="sparepart">
  <section class="bg-light py-5">
    <div class="container">
      <h5 class="text-center mb-5">Spareparts</h5>
      <div class="row">
        <?php foreach ($produk as $key => $value) : ?>
        <div class="col-md-3 mt-3">
          <a href="<?= base_url('produk/order/' . $value['id_produk']); ?>" class="text-decoration-none">
          <div class="card border-0 shadow-sm">
            <img src="<?php echo $this->config->item('url_produk') . $value['foto_produk'] ?>" alt="">
            <div class="card-body text-center">
              <h6><?php echo $value['nama_produk'] ?></h6>
              <p class="lead">Rp <?php echo number_format($value['harga_produk']) ?></p>
            </div>
          </div>
        </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>

<section class="bg-white py-5">
  <div class="container">
    <h5 class="text-center mb-5">Jasa Service</h5>
    <div class="row">
      <?php foreach ($artikel as $key => $value) : ?>
      <div class="col-md-3 text-center">
        <img src="<?php echo $this->config->item('url_artikel') . $value['foto_artikel'] ?>" class="w-100" alt="">
        <h6 class="mt-3"><?php echo $value['judul_artikel'] ?></h6>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>