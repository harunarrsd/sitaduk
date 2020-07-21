<div class="row">
   <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-success">
         <div class="card-header">
            <h3 class="card-title">Ganti Password</h3>
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
        <?php foreach ($akun->result() as $row) { ?>
         
        
         <form role="form" method="post" action="<?= site_url('Administrator/updatePassword/'.$row->id_users)?>">
            <input type="hidden" name="id" value="<?= $row->id_users ?>">
            <div class="card-body">
               <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" name="password"  required>
               </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
               <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
         </form>
         <?php } ?>
      </div>
      <!-- /.card -->
   </div>
</div>