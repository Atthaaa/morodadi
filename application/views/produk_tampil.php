<style>
/* General container styling */
.container {
  padding: 20px;
}

/* Row styling */
.row {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
}

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

/* Responsive grid for 3 products per row */
@media (min-width: 768px) {
  .col-md-4 {
    flex: 0 0 calc(33.333% - 20px);
    max-width: calc(33.333% - 20px);
  }
}

</style>
<div class="container mt-5">
  <div class="row">
    <?php foreach ($produk as $key => $value) : ?>
    <div class="col-md-4">
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
