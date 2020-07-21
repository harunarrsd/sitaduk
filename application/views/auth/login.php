<div class="content-wrapper">
  <div class="row justify-content-md-center pt-5">
    <div class="login-box col-12 col-lg-4">
      <div class="login-logo">
        <a href="<?= site_url() ?>"><b>Login</b></a>
      </div>
      <?php 
            if($message = $this->session->flashdata('msgError'))
            {
                echo "<script>swal('Oooppsss....','".$message."','error');</script>";
            }else if($message = $this->session->flashdata('msgSuccess')){
                echo "<script>swal('Success','".$message."','success');</script>";
            }
        ?>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Masuk untuk memulai sesi </p>

          <form action="<?php echo site_url('SignIn/auth'); ?>" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="username" placeholder="Username">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          <!-- <p class="mt-4">
            <a href="<?= site_url('Welcome/register') ?>" class="text-center">Daftar untuk warga baru</a>
          </p> -->
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
  </div>
</div>
