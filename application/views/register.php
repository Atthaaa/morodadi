<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">

      <h5>Registrasi Member</h5>

      <form action="" method="post">

        <div class="mb-3">
          <label for="">Email</label>
          <input type="mail" name="email_member" value="<?php echo set_value('email_member') ?>" class="form-control">
          <span class="text-muted"><?php echo form_error('email_member') ?></span>
        </div>
        <div class="mb-3">
          <label for="">Password</label>
          <input type="password" name="password_member" value="<?php echo set_value('password_member') ?>" class="form-control">
          <span class="text-muted"><?php echo form_error('password_member') ?></span>
        </div>
        <div class="mb-3">
          <label for="">Nama</label>
          <input type="text" name="nama_member" value="<?php echo set_value('nama_member') ?>" class="form-control">
          <span class="text-muted"><?php echo form_error('nama_member') ?></span>
        </div>
        <div class="mb-3">
          <label for="">Alamat</label>
          <textarea name="alamat_member" id="" class="form-control"><?php echo set_value('alamat_member') ?></textarea>
          <span class="text-muted"><?php echo form_error('alamat_member') ?></span>
        </div>
        <div class="mb-3">
          <label for="">Nomor WA</label>
          <input type="text" name="wa_member" value="<?php echo set_value('wa_member') ?>" class="form-control">
          <span class="text-muted"><?php echo form_error('wa_member') ?></span>
        </div>

        <button class="btn btn-primary">Kirim</button>

      </form>
    </div>
  </div>
</div>