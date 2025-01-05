<div class="container">
  <h5>Data Produk</h5>
  <table class="table table-bordered" id="tabelku">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Foto</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($produk as $k => $v) : ?>

      <tr>
        <td><?php echo $k + 1; ?></td>
        <td><?php echo $v['nama_produk']; ?></td>
        <td><?php echo $v['harga_produk']; ?></td>
        <td>
          <img src="<?php echo $this->config->item('url_produk') . $v['foto_produk'] ?>" width="200">
        </td>
        <td>
          <a href="<?php echo base_url("produk/edit/" . $v["id_produk"]) ?>" class="btn btn-warning">Edit</a>
          <a href="<?php echo base_url("produk/hapus/" . $v["id_produk"]) ?>" class="btn btn-danger">Hapus</a>
        </td>
      </tr>

      <?php endforeach ?>


    </tbody>
  </table>

  <a href="<?php echo base_url('produk/tambah') ?>" class="btn btn-primary">Tambah Data</a>

</div>