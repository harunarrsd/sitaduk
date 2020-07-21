<div class="row">
   <div class="col-md-12">
   <?php 
            if($message = $this->session->flashdata('msgerror'))
            {
            	echo "<script>swal('Oooppsss....','".$message."','error');</script>";
            }else if($message = $this->session->flashdata('msgsuccess')){
            	echo "<script>swal('Success','".$message."','success');</script>";
            }
            ?>
      <!-- general form elements -->
      <div class="card card-primary">
         <div class="card-header">
            <h3 class="card-title">Ganti Password</h3>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
            <form role="form" method="post" action="<?= site_url('Warga/updatePassword')?>">
            
            <div class="card-body">
                <div class="form-group">
                <label>Password Baru</label>
                <input type="password" class="form-control" name="password" placeholder="Password Baru" required >
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