<!-- footer -->
<footer class="text-center text-lg-start text-white" style="background-color: black; margin-top: 100px;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="mb-4 font-weight-bold">Morodadi Radiator</h6>
                    <p>"Radiator anda rusak bawa kesini, kami akan memperbaiki setulus hati untuk pelanggan tercinta kami"</p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="mb-4 font-weight-bold">POWERED BY</h6>
                    <p>
                        <a href="https://codeigniter.com/" target="_blank"
                            class="text-white text-decoration-none">CodeIgniter v3.1.13</a>
                    </p>
                    <p>
                        <a href="https://getbootstrap.com/" target="_blank"
                            class="text-white text-decoration-none">Bootstrap v5.3</a>
                    </p>
                    <p>
                        <a href="https://fontawesome.com/" target="_blank" class="text-white text-decoration-none">Font
                            Awesome</a>
                    </p>
                    <p>
                        <a href="https://www.vecteezy.com/free-vector/abstract" target="_blank"
                            class="text-white text-decoration-none">Vecteezy</a>
                    </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="mb-4 font-weight-bold">CONTACT</h6>
                    <p><i class="fas fa-home mr-3"></i> Jl. Kartini, Tengahan, Buntalan, Kec. Klaten Tengah, Kabupaten Klaten, Jawa Tengah 57424</p>
                    <p><i class="fas fa-envelope mr-3"></i> morodadiradiator@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> +62 851 5887 8446</p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto my-3">
                    <h6 class="mb-4 font-weight-bold">FOLLOW US</h6>
                    <div class="row col-md-10">
                        <a class="btn col-2 col-md-4 d-flex justify-content-center" href="#!">
                            <i class="fa-brands fa-whatsapp text-white fa-2x"></i>
                        </a>
                        <a class="btn col-2 col-md-4 d-flex justify-content-center" href="#!">
                            <i class="fa-brands fa-instagram text-white fa-2x"></i>
                        </a>
                        <a class="btn col-2 col-md-4 d-flex justify-content-center" href="#!">
                            <i class="fa-brands fa-facebook text-white fa-2x"></i>
                        </a>
                        <a class="btn col-2 col-md-4 d-flex justify-content-center" href="#!">
                            <i class="fa-brands fa-tiktok text-white fa-2x"></i>
                        </a>
                        <a class="btn col-2 col-md-4 d-flex justify-content-center" href="#!">
                            <i class="fa-brands fa-youtube text-white fa-2x"></i>
                        </a>
                        <a class="btn col-2 col-md-4 d-flex justify-content-center" href="#!">
                            <i class="fa-brands fa-github text-white fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        Copyright©️Morodadi Radiator
    </div>
    <!-- Copyright -->
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php if ($this->session->flashdata('pesan_sukses')): ?>
    <script>
        swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success");
    </script>
<?php endif ?>
<?php if ($this->session->flashdata('pesan_gagal')): ?>
    <script>
        swal("Gagal!", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error");
    </script>
<?php endif ?>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
<script src=" https://code.jquery.com/jquery-3.7.1.js"></script>

<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src=" https://code.jquery.com/jquery-3.7.1.js"></script>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('editorku')
</script>

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

<!-- Modal -->
<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('welcome'); ?>" method="post">
          <div class="mb-3">
            <label for="">Username</label>
            <input type="text" name="username_member" class="form-control" value="<?php echo set_value("username_member") ?>">
            <div class="text-danger small">
              <?php echo form_error("username_member") ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="">Password</label>
            <input type="password" name="password_member" class="form-control" value="<?php echo set_value("password_member") ?>">
            <div class="text-danger small">
              <?php echo form_error("password_member") ?>
            </div>
          </div>
          <button class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>

</html>