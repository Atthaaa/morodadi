<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Morodadi Radiator</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
  <!-- Mmebuat navbar atau menu-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container mx-5">
      <img src="<?php echo base_url('assets/LogoBengkel.png') ?>" alt="" width="100px" class="mx-5">
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#naff">
        <span class="navbar-toggler-icon"> </span> </button>
      <div class="collapse navbar-collapse" id="naff">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a href="<?php echo base_url('welcome') ?>" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('service') ?>" class="nav-link">Service</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('produk') ?>" class="nav-link">Sparepart</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('aboutus'); ?>">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('keranjang') ?>" class="nav-link">Keranjang</a>
          </li>

        </ul>
        <?php if ($this->session->userdata('id_member')) : ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('akun') ?>" class="nav-link">
                <?php echo $this->session->userdata('nama_member') ?>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('logout') ?>" class="nav-link">Logout</a>
            </li>
          </ul>
        <?php endif; ?>

        <?php if (!$this->session->userdata('id_member')) : ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#" data-bs-toggle="modal" data-bs-target="#login" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('register') ?>" class="nav-link">Register</a>
            </li>
          </ul>
        <?php endif; ?>

      </div>
    </div>
  </nav>