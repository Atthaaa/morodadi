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