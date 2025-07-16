<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Radiator untuk: <?php echo ucfirst($tipe_mobil); ?></h3>
        
        <a href="<?php echo site_url('produk/rekomendasi_filter/' . $tipe_mobil); ?>" class="btn btn-success">
             <i class="fa fa-star"></i> Lihat Rekomendasi Terbaik
        </a>
    </div>
    <hr>
    
    <div class="row">
        <?php foreach ($produk as $p): ?>
            <div class="col-md-3">
                </div>
        <?php endforeach; ?>
    </div>
</div>