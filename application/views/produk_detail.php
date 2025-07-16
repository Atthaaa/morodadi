<div class="container py-3">
  <div class="row">
    <div class="col-md-6">
      <img src="<?php echo $this->config->item('url_produk') . $produk['foto_produk'] ?>" alt="" class="w-100">
    </div>
    <div class="col-md-6">
      <h1><?= $produk['nama_produk']; ?></h1>
      <p><?= $produk['deskripsi_produk']; ?></p>
      <p class="lead">Rp. <?= number_format($produk['harga_produk']); ?></p>

      <form action="<?= base_url('produk/order/' . $produk['id_produk']); ?>" class="my-2" method="post">
          <button type="submit" class="btn btn-primary" style="width: 200px;">Beli</button>
      </form>
      <br>
      
    </div>
  </div>
</div>
