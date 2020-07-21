<div class="content-wrapper">
  <div class="row justify-content-md-center pt-5">
    <div class="register-box col-12 col-lg-4">
      <div class="register-logo">
        <a href="<?= site_url() ?>"><b>Register</b></a>
      </div>
      <?php 
            if($message = $this->session->flashdata('msgError'))
            {
                echo "<script>swal('Oooppsss....','".$message."','error');</script>";
            }else if($message = $this->session->flashdata('msgSuccess')){
                echo "<script>swal('Success','".$message."','success');</script>";
            }
        ?>
      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Pendaftaran untuk warga baru</p>
          <form action="<?= site_url('SignUp/createAccount'); ?>" method="post">
          <div class="input-group mb-3">
              <input required type="number" class="form-control" name="nik" placeholder="NIK">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-id-card"></span>
                </div>
              </div>
            </div> 
            <div class="form-group">
                      <select class="form-control select2bs4" style="width: 100%;" name="status" required>
                        <option>Pilih Status Warga</option>
                        <option value="pendatang">Pendatang</option>
                        <option value="tetap">Tetap</option>
                      </select>
                    </div>
            <div class="input-group mb-3">
              <input required type="number" class="form-control" name="nokk" placeholder="Nomor Kartu Keluarga">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-id-card"></span>
                </div>
              </div>
            </div>
          <div class="input-group mb-3">
              <input required type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user-circle"></span>
                </div>
              </div>
            </div>
            <div class="form-group">
                      <select class="form-control select2bs4" style="width: 100%;" name="jenis_kelamin" required>
                        <option>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
          <div class="input-group mb-3">
              <input required type="text" class="form-control" name="ttl" placeholder="Tempat Tanggal Lahir">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-calendar"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
            <textarea class="form-control" name="alamat" cols="1" rows="3" placeholder="Alamat"></textarea>
            <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-address-book"></span>
                </div>
              </div>
            </div>
          <div class="input-group mb-3">
              <input required type="text" class="form-control" name="agama" placeholder="Agama">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-home"></span>
                </div>
              </div>
            </div>
          <div class="input-group mb-3">
              <input required type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-suitcase"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input required type="text" class="form-control" name="username" placeholder="Username">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input required type="password" class="form-control" name="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input required type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                  <label for="agreeTerms">
                  Saya setuju dengan <a href="#">ketentuan</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
  </div>
  <!-- /.register-box -->
</div>
