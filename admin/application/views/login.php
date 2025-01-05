<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN MARKETPLACE</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div style="margin-top: 100px;">
      <div class="row">
      <div style="border-radius: 10px; width: 50%; margin: auto; background: black; padding: 30px;" class="row text-white" >
        <div class="col-md-4 d-flex align-items-center">
          <img src="../assets/LogoBengkel.png"class= "img-fluid">
        </div>
        <div class= "col-md-8">
          <p class="fs-4"><strong><i>Selamat Datang Admin Ganteng</i></strong></p>
        <form action="" method="post">
          <div class="mb-3">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control mt-3" value="<?php echo set_value("username") ?>">
            <div class="text-danger small">
              <?php echo form_error("username") ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control mt-3" value="<?php echo set_value("password") ?>">
            <div class="text-danger small">
              <?php echo form_error("password") ?>
            </div>
          </div>
          <div class="text-center">
            <button class="btn btn-primary" style="justify-items: center; margin-top: 10px; width: 200px;">Login</button>
          </div>
        </form>
        </div>
      </div>
    </div>
    </div>
  </div>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php if ($this->session->flashdata('pesan_sukses')) : ?>
  <script>
  swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success");
  </script>
  <?php endif; ?>
  <?php if ($this->session->flashdata('pesan_gagal')) : ?>
  <script>
  swal("Gagal!", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error");
  </script>
  <?php endif; ?>
</body>

</html>