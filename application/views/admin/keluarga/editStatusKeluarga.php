<div class="row">
   <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
         <div class="card-header">
            <h3 class="card-title">Informasi Keluarga</h3>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
        <?php foreach ($getKepala->result() as $row) { ?>
            <form role="form" method="post" action="<?= site_url('Administrator/updateStatusKeluarga')?>">
            <input type="hidden" name="id" value="<?= $row->id_kepkel ?>">
            <div class="card-body">
               
                <div class="form-group">
                <label>Status Keluarga</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="status">
                    <option value="pendatang" <?= ($row->status=='pendatang')?'selected':'';?>>Pendatang</option>
                    <option value="tetap" <?= ($row->status=='tetap')?'selected':'';?>>Tetap</option>
                  </select>
                </div>
            </div>
            <!-- /.card-body -->
         <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
      </form>
       <?php  } ?>
    
      <!-- /.card -->
   </div>
</div>