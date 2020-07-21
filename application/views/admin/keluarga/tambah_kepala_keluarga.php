<div class="row">
   <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
         <div class="card-header">
            <h3 class="card-title">Form Kepala Keluarga</h3>
         </div>
         <?php 
            if($message = $this->session->flashdata('msgerror'))
            {
            	echo "<script>swal('Oooppsss....','".$message."','error');</script>";
            }else if($message = $this->session->flashdata('msgsuccess')){
            	echo "<script>swal('Success','".$message."','success');</script>";
            }
            ?>
         <!-- /.card-header -->
         <!-- form start -->
         <form role="form" method="post" action="<?= site_url('administrator/input_kepala_keluarga/')?>">
            <div class="card-body">
                <label>NIK</label>
                <div class="input-group mb-3">
                <input required type="number" class="form-control" name="nik" placeholder="NIK">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-id-card"></span>
                        </div>
                    </div>
                </div>
                <label>Status Warga</label>
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="status" required>
                    <option>Pilih Status Warga</option>
                    <option value="pendatang">Pendatang</option>
                    <option value="tetap">Tetap</option>
                  </select>
                </div>
                <label>Nomor Kartu Keluarga</label>
                <div class="input-group mb-3">
                    <input required type="number" class="form-control" name="nokk" placeholder="Nomor Kartu Keluarga">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-id-card"></span>
                        </div>
                    </div>
                </div>
                <label>Nama Lengkap</label>
                <div class="input-group mb-3">
                    <input required type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-user-circle"></span>
                        </div>
                    </div>
                </div>
                <label>Jenis Kelamin</label>
                <div class="form-group">
                    <select class="form-control select2bs4" style="width: 100%;" name="jenis_kelamin" required>
                        <option>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <label>Tempat Lahir</label>
                <div class="input-group mb-3">
                    <input required type="text" class="form-control" name="ttl" placeholder="Tempat Tanggal Lahir">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-calendar"></span>
                        </div>
                    </div>
                </div>
                <label>Alamat</label>
                <div class="input-group mb-3">
                    <textarea class="form-control" name="alamat" cols="1" rows="3" placeholder="Alamat"></textarea>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-address-book"></span>
                        </div>
                    </div>
                </div>
                <label>Agama</label>
                <div class="input-group mb-3">
                    <input required type="text" class="form-control" name="agama" placeholder="Agama">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-home"></span>
                        </div>
                    </div>
                </div>
                <label>Pekerjaan</label>
                <div class="input-group mb-3">
                    <input required type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-suitcase"></span>
                        </div>
                    </div>
                </div>
                <label>Username</label>
                <div class="input-group mb-3">
                    <input required type="text" class="form-control" name="username" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <label>Password</label>
                <div class="input-group mb-3">
                    <input required type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         </form>
      </div>
      <!-- /.card -->
   </div>
</div>