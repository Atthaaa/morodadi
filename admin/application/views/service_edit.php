<div class="container">
  <h5>Edit service</h5>

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Nama service</label>
      <input type="text" name="nama_service" class="form-control"
        value="<?php echo set_value("nama_service", $service['nama_service']) ?>">
      <span class="text-danger small">
        <?php echo form_error("nama_service") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Artikel</label>
      <textarea name="artikel" id="editorku" class="form-control"><?php echo set_value("artikel") ?></textarea>
      <span class="text-danger small">
        <?php echo form_error("artikel") ?>
      </span>
    </div>
    <div class="mb-3">
      <label for="">Foto Lama</label><br>
      <img src="<?php echo $this->config->item('url_service') . $service['foto_service'] ?>" width="300">
    </div>
    <div class="mb-3">
      <label>foto service</label>
      <input type="file" name="foto_service" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>