<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Dokter Mobil</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        /* Header Style */
        .header {
            background-color: #ff0000;
            color: #fff;
            text-align: center;
            padding: 50px 10px;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .content {
            display: flex;
            justify-content: space-between;
            padding: 30px;
            flex-wrap: wrap;
        }

        /* Kolom Kiri */
        .column {
            flex: 1;
            padding: 20px;
        }

        .column h2 {
            color: #ff0000;
            margin-bottom: 10px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
            }
        }

        iframe {
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>TENTANG MORODADI RADIATOR</h1>
    </div>

    <!-- Konten Utama -->
    <div class="content">
        <!-- Tentang Kami -->
        <div class="column">
            <h2>Tentang Kami</h2>
            <p>
            Bengkel Radiator Morodadi adalah spesialis perbaikan dan perawatan radiator mobil terpercaya di Indonesia. Dengan pengalaman bertahun-tahun, kami berkomitmen untuk memberikan layanan terbaik untuk menjaga sistem pendingin kendaraan Anda tetap optimal.
            </p>
            <p>
            Kami melayani berbagai jenis perbaikan, mulai dari pembersihan radiator, perbaikan kebocoran, hingga penggantian radiator baru untuk semua jenis mobil, baik mobil pribadi, niaga, maupun kendaraan berat. Dikerjakan oleh tenaga ahli berpengalaman dan menggunakan peralatan modern, setiap layanan kami menjamin kualitas dan ketahanan yang maksimal.
            </p>
            <p>
            Bengkel Radiator Morodadi selalu mengutamakan transparansi, kejujuran, dan kepuasan pelanggan. Dengan proses kerja yang cepat, rapi, dan bergaransi, kami menjadi pilihan utama bagi pelanggan yang menginginkan performa radiator yang prima dan bebas masalah.
            </p>
            <p>
            Kami siap melayani Anda dengan sepenuh hati dan memastikan kendaraan Anda tetap dalam kondisi terbaik.
            Bengkel Radiator Morodadi - Solusi Tepat untuk Radiator Anda!
            </p>
        </div>

        <!-- Sejarah Dokter Mobil -->
        <div class="column">
            <h2>Sejarah Bengkel Radiator</h2>
            <p>
                Berawal dari sebuah bengkel kecil yang berada di daerah Jakarta Utara, kini Dokter Mobil sudah memiliki 29 buah cabang bengkel yang tersebar di seluruh Indonesia dan di Malaysia dengan nama Autotech.
            </p>
            <p>
                Didirikan sejak tahun 2015 oleh Ricky Sen & Thayne Lika atau timnya, berangkat dari keresahan banyak pemilik mobil yang “kurang”.
            </p>
        </div>
    </div>

    <!-- Map Section -->
<div class="map" style="display: flex; flex-direction: column; align-items: center; margin-top: 20px;">
    <h4 style="text-align: center; color: red;">Lokasi Kami</h4>
    <div style="width: 300px; height: 300px; position: relative;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506076.7499070571!2d110.07723664999996!3d-7.712670699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a441005d31ea9%3A0xd0e1a76cb0587f3e!2sMoro%20Dadi%20Radiator!5e0!3m2!1sen!2sid!4v1734848421060!5m2!1sen!2sid" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</div>

</body>
</html>