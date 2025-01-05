<div class="container">

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Nama Service</label>
      <input type="text" name="nama_service" class="form-control" value="<?php echo set_value("nama_service") ?>">
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
      <label>foto service</label>
      <input type="file" name="foto_service" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>