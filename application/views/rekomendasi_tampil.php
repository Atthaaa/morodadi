<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-success text-white">
            <h3 class="text-center">Hasil Rekomendasi Radiator Terbaik</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>Peringkat</th>
                            <th>Nama Produk</th>
                            <th>Skor Rekomendasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Apa prioritas anda?</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center">Berikut adalah urutan produk radiator yang paling kami rekomendasikan untuk Anda berdasarkan perhitungan sistem.</p>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>Peringkat</th>
                            <th>Nama Produk</th>
                            <th>Skor Rekomendasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($hasil_rekomendasi)) : ?>
                            <?php $peringkat = 1; ?>
                            <?php foreach ($hasil_rekomendasi as $produk) : ?>
                                <tr>
                                    <td class="text-center">
                                        <h4>
                                            <span class="badge bg-primary"><?php echo $peringkat; ?></span>
                                        </h4>
                                    </td>
                                    <td><?php echo html_escape($produk['nama_produk']); ?></td>
                                    <td class="text-center"><?php echo number_format($produk['skor_saw'], 3); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo site_url('produk/order/' . $produk['id_produk']); ?>" class="btn btn-success">
                                            <i class="fa fa-whatsapp"></i> Beli via WhatsApp
                                        </a>
                                    </td>
                                </tr>
                                <?php $peringkat++; ?>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="4" class="text-center">
                                    <p class="my-3">Tidak ada data rekomendasi yang dapat ditampilkan.</p>
                                    <small>Pastikan data produk dan penilaian sudah diisi dengan benar.</small>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>