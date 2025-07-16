<style>
/* CSS untuk Tombol Rekomendasi Mengambang */
.float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    right: 40px;
    background-color: #0C9;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
    z-index: 1000;
}

.my-float {
    margin-top: 22px;
}

/* CSS untuk Kartu Produk (styling dari kode Anda) */
.card {
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: 2px solid transparent; /* Tambahkan border transparan */
}

.card:hover {
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
    border: 2px solid #ff0000;
}

.card:hover .card-body { /* Ubah background dan warna teks saat hover */
    background-color: #ff0000;
    color: white;
}
.card:hover .card-body h6,
.card:hover .card-body p {
    color: white;
}

.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.card-body h6 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #333;
}

.card-body p {
    font-size: 18px;
    color: #007bff;
    font-weight: 500;
}
</style>
<div class="sparepart">
    <section class="bg-light py-5">
        <div class="container">
            <h5 class="text-center mb-5">Spareparts</h5>
            <div class="row justify-content-center">
                <?php foreach ($produk as $key => $value) : ?>
                    <div class="col-md-3 mt-3">
                        <a href="<?= base_url('produk/detail/' . $value['id_produk']); ?>" class="text-decoration-none">
                            <div class="card">
                                <img src="<?php echo $this->config->item('url_produk') . $value['foto_produk'] ?>" alt="">
                                <div class="card-body text-center">
                                    <h6><?php echo $value['nama_produk'] ?></h6>
                                    <p class="lead">Rp <?php echo number_format($value['harga_produk']) ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<a href="<?php echo site_url('produk/rekomendasi'); ?>" class="float" title="Bingung Mencari Radiator Yang Cocok?">
    <i class="fa fa-star my-float"></i>
</a>
