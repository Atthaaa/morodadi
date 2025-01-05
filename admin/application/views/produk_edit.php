<div class="container">
  <h5>Edit Produk</h5>

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Nama Produk</label>
      <input type="text" name="nama_produk" id=""
        value="<?php echo set_value("caption_produk", $produk['nama_produk']) ?>" class="form-control">
      <span class="text-danger small">
        <?php echo form_error("nama_produk") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Harga Produk</label>
      <input type="text" name="harga_produk" id=""
        value="<?php echo set_value("harga_produk", $produk['harga_produk']) ?>" class="form-control">
      <span class="text-danger small">
        <?php echo form_error("harga_produk") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Deskripsi Produk</label>
      <textarea name="deskripsi_produk" id="editorku"
        class="form-control"><?php echo set_value("deskripsi_produk", $produk['deskripsi_produk']) ?></textarea>
      <span class="text-danger small">
        <?php echo form_error("deskripsi_produk") ?>
      </span>
    </div>
    <div class="mb-3">
      <label for="">Foto Lama</label><br>
      <img src="<?php echo $this->config->item('url_produk') . $produk['foto_produk'] ?>" width="300">
    </div>
    <div class="mb-3">
      <label>foto Kategori</label>
      <input type="file" name="foto_produk" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>