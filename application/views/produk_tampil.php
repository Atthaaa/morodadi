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
        <?php foreach ($produk as $value): ?>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <img src="<?= $this->config->item('url_produk') . $value['foto_produk']; ?>" alt="" class="img-fluid">
                <div class="card-body text-center">
                  <h6><?= $value['nama_produk']; ?></h6>
                  <p class="lead">Rp <?= number_format($value['harga_produk']); ?></p>
                </div>
            </div>
            <div class="mb-3 mt-3">
              <?php if (isset($_SESSION['keranjang'][$value['id_produk']])): ?>
                  <form action="<?= base_url('keranjang/update'); ?>" method="post" class="d-inline">
                      <input type="hidden" name="id_produk" value="<?= $value['id_produk']; ?>">
                      <button type="submit" name="action" value="kurangi" class="btn btn-secondary btn-sm">-</button>
                  </form>
                  <span class="mx-2">
                      <?= $_SESSION['keranjang'][$value['id_produk']]['jumlah']; ?>
                  </span>
                  <form action="<?= base_url('keranjang/update'); ?>" method="post" class="d-inline">
                      <input type="hidden" name="id_produk" value="<?= $value['id_produk']; ?>">
                      <button type="submit" name="action" value="tambah" class="btn btn-secondary btn-sm">+</button>
                  </form>
              <?php else: ?>
                  <form action="<?= base_url('keranjang/tambah'); ?>" method="post">
                      <input type="hidden" name="id_produk" value="<?= $value['id_produk']; ?>">
                      <button type="submit" class="btn btn-primary btn-sm">Tambahkan ke Keranjang</button>
                  </form>
              <?php endif; ?>
          </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


