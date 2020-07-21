<div class="row">
   <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
         <div class="card-header">
            <h3 class="card-title">Informasi Anggota Keluarga</h3>
            <a href="<?php echo $this->session->userdata('previous_url');?>"class="btn btn-outline-dark float-right btn-sm"><i class="fa fa-arrow-left fa-sm mr-1"></i> Kembali</a>
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
         <form role="form" method="post" action="<?= site_url('administrator/input_anggota_keluarga/'.$id_kepkel)?>">
            <div class="card-body">
               <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
               </div>
               <div class="form-group">
                  <label>NIK</label>
                  <input type="number" class="form-control" name="nik"  placeholder="Nomor Induk Kependudukan" required>
               </div>
               <div class="form-group">
                  <label>Tempat Tanggal Lahir</label>
                  <input type="text" class="form-control" name="ttl"  placeholder="Tempat Tanggal Lahir" required>
               </div>
               <div class="form-group">
               <label>Jenis Kelamin</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="jenis_kelamin">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
               <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat" required placeholder="Tulis Alamat Lengkap Disini..."></textarea>
               </div>
               <div class="form-group">
                  <label>Agama</label>
                  <input type="text" class="form-control" name="agama"  required placeholder="Agama">
               </div>
               <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" class="form-control" name="pekerjaan"  required placeholder="Pekerjaan">
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