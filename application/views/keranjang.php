<div class="container mt-5">
    <h3>Keranjang Belanja</h3>
    <table class="table table-bordered" id="editorku">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($keranjang as $item): ?>
            <tr>
                <td><?= $item['nama_produk']; ?></td>
                <td>Rp <?= number_format($item['harga_produk']); ?></td>
                <td><?= $item['jumlah']; ?></td>
                <td>Rp <?= number_format($item['harga_produk'] * $item['jumlah']); ?></td>
                <td>
                    <a href="<?= base_url('keranjang/hapus/' . $item['id_produk']); ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h4>Total Harga: Rp <?= number_format($total_harga); ?></h4>
    <a href="<?= base_url('keranjang/checkout'); ?>" class="btn btn-success">Checkout</a>
</div>
