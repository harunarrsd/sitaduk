<div class="content-wrapper">
   <div class="container">
      <div class="row justify-content-md-center pt-5">
         <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
               <div class="card-header">
                  <h3 class="card-title">Pengajuan Surat</h3>
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
               <form role="form" method="post" action="<?= site_url('Warga/inputPengajuanSurat')?>">
               <input type="hidden" name='nik' value="<?= $this->session->userdata('nik'); ?>">
                  <div class="card-body">
                     <div class="form-group">
                        <label>Maksud / Keperluan Pengajuan</label>
                        <textarea class="form-control" rows="3" name="maksud_keperluan" required placeholder="Tulis Maksud / Keperluan lengkap Disini..."></textarea>
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
   </div>
</div>