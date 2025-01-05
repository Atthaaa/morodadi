<div class="container">
  <h5>Data Service</h5>
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
          <a href="<?php echo base_url("service/hapus/" . $v["id_service"]) ?>" class="btn btn-danger">Hapus</a>
        </td>
      </tr>

      <?php endforeach ?>


    </tbody>
  </table>

  <a href="<?php echo base_url('service/tambah') ?>" class="btn btn-primary">Tambah Data</a>

</div>