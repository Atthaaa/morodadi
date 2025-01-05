<div class="container mt-5">
    <div class="row">
        <?php foreach ($service as $key => $value) : ?>
        <div class="col-md-12 mb-4">
            <div class="row">
                <?php if ($key % 2 == 0) : ?>
                <!-- Jika index genap, gambar di kiri, artikel di kanan -->
                <div class="col-6">
                    <div class="service-img-container" style="width: 100%; height: 250px; overflow: hidden; background-color: #fff; border-radius: 25px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                        <img src="<?php echo $this->config->item('url_service') . $value['foto_service'] ?>" alt="" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%; border-radius: 10px;">
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h2 style="color: red;"><?php echo $value['nama_service']; ?></h2>
                        <p style="color: black;"><?php echo !empty($value['artikel']) ? $value['artikel'] : 'Artikel service tidak tersedia.'; ?></p>
                    </div>
                </div>
                <?php else : ?>
                <!-- Jika index ganjil, gambar di kanan, artikel di kiri -->
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h2 style="color: red;"><?php echo $value['nama_service']; ?></h2>
                        <p style="color: black;"><?php echo !empty($value['artikel']) ? $value['artikel'] : 'Artikel service tidak tersedia.'; ?></p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="service-img-container" style="width: 100%; height: 250px; overflow: hidden; background-color: #fff; border-radius: 25px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                        <img src="<?php echo $this->config->item('url_service') . $value['foto_service'] ?>" alt="" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%; border-radius: 10px;">
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="container
text-center">
    <?php
// Nomor WhatsApp tujuan
$phoneNumber = "6285172042004"; // Ganti dengan nomor WhatsApp tujuan (format internasional tanpa tanda "+")
// Pesan teks
$message = urlencode("Reservasi sekarang, Untuk Service Radiator Anda");
?>

<a class="btn btn-danger" href="https://wa.me/<?= $phoneNumber ?>?text=<?= $message ?>" target="_blank" class="whatsapp-button">
    Reservasi Sekarang
</a>
</div>

<style>
    .whatsapp-button:hover {
        background-color: #1EBE5D;
    }
</style>


