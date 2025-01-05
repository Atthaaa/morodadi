<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Morodadi</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
  <!-- Mmebuat navbar atau menu-->
  <nav class="navbar navbar-expand-lg navbar-dark mb-3" style="background-color: black;">
    <div class="container">
      <a href="" class="navbar-brand">Admin</a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#naff">
        <span class="navbar-toggler-icon"> </span> </button>
      <div class="collapse navbar-collapse" id="naff">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a href="<?php echo base_url('home') ?>" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('slider') ?>" class="nav-link">Slider</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('service') ?>" class="nav-link">Service</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('produk') ?>" class="nav-link">Produk</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('member') ?>" class="nav-link">Member</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="<?php echo base_url('akun') ?>" class="nav-link">
              <?php echo $this->session->userdata('nama_admin') ?>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('logout') ?>" class="nav-link">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>