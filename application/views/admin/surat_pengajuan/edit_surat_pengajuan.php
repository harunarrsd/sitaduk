<div class="row">
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
         <?php foreach ($get_surat_pengajuan->result() as $row) { ?>
         <form role="form" method="post" action="<?= site_url('administrator/update_surat_pengajuan')?>">
         <input type="hidden" name="id" value="<?= $row->id_surat ?>">
            <div class="card-body">
               <div class="form-group">
                  <label>NIK</label>
                  <select name="nik" required class="form-control">
                    <option value="">Pilih NIK</option>
                    <?php foreach ($get_nik_kk->result() as $key => $value) {
                        ?>
                        <option value="<?php echo $value->nik;?>" <?= ($value->nik==$row->nik)?'selected':''?>><?php echo $value->nik;?> - <?php echo $value->nama;?></option>
                        <?php
                    }?>
                    <?php foreach ($get_nik_ak->result() as $key => $value) {
                        ?>
                        <option value="<?php echo $value->nik;?>" <?= ($value->nik==$row->nik)?'selected':''?>><?php echo $value->nik;?> - <?php echo $value->nama;?></option>
                        <?php
                    }?>
                  </select>
               </div>
               <div class="form-group">
                  <label>Maksud / Keperluan Pengajuan</label>
                  <textarea class="form-control" rows="3" name="maksud_keperluan" required placeholder="Tulis Maksud / Keperluan lengkap Disini..."><?= $row->maksud_keperluan?></textarea>
               </div>
               <div class="form-group">
                  <label>Status Pengajuan</label>
                  <select name="status" required class="form-control">
                    <option value="">Pilih Status Pengajuan</option>
                    <option value="Pengajuan" <?= ('Pengajuan'==$row->status)?'selected':''?>>Pengajuan</option>
                    <option value="Sedang Proses" <?= ('Sedang Proses'==$row->status)?'selected':''?>>Sedang Proses</option>
                    <option value="Selesai" <?= ('Selesai'==$row->status)?'selected':''?>>Selesai</option>
                  </select>
               </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         </form>
         <?php  } ?>
      </div>
      <!-- /.card -->
   </div>
</div>