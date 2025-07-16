<div class="container">
  <h5>Data Service</h5>

  <?php if ($this->session->flashdata('pesan_sukses')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= $this->session->flashdata('pesan_sukses'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>

  <table class="table table-bordered" id="tabelku">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Foto</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($service as $k => $v) : ?>
        <tr>
          <td><?php echo $k + 1; ?></td>
          <td><?php echo $v['nama_service']; ?></td>
          <td>
            <img src="<?php echo $this->config->item('url_service') . $v['foto_service'] ?>" width="200">
          </td>
          <td>
            <a href="<?php echo base_url("service/edit/" . $v["id_service"]) ?>" class="btn btn-warning">Edit</a>
            <a href="<?php echo base_url("service/hapus/" . $v["id_service"]) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
          </td>
        </tr>
      <?php endforeach ?>

    </tbody>
  </table>

  <a href="<?php echo base_url('service/tambah') ?>" class="btn btn-primary">Tambah Data</a>
</div>