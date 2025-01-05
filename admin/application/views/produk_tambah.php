<div class="container">

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Judul Produk</label>
      <input type="text" name="nama_produk" id="" value="<?php echo set_value("nama_produk") ?>" class="form-control">
      <span class="text-danger small">
        <?php echo form_error("nama_produk") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Deskripsi Produk</label>
      <textarea name="deskripsi_produk" id="editorku" class="form-control"><?php echo set_value("deskripsi_produk") ?></textarea>
      <span class="text-danger small">
        <?php echo form_error("deskripsi_produk") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Harga Produk</label>
      <input type="number" name="harga_produk" id="" value="<?php echo set_value("harga_produk") ?>" class="form-control">
      <span class="text-danger small">
        <?php echo form_error("harga_produk") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>foto produk</label>
      <input type="file" name="foto_produk" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>