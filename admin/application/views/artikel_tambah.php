<div class="container">

  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Judul Artikel</label>
      <input type="text" name="judul_artikel" id="" value="<?php echo set_value("caption_artikel") ?>" class="form-control">
      <span class="text-danger small">
        <?php echo form_error("judul_artikel") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Isi Artikel</label>
      <textarea name="isi_artikel" id="editorku" class="form-control"><?php echo set_value("isi_artikel") ?></textarea>
      <span class="text-danger small">
        <?php echo form_error("isi_artikel") ?>
      </span>
    </div>
    <div class="mb-3">
      <label>Foto Slider</label>
      <input type="file" name="foto_artikel" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>