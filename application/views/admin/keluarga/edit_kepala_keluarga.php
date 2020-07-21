<div class="row">
   <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
         <div class="card-header">
            <h3 class="card-title">Form Kepala Keluarga</h3>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
         <?php foreach ($getKeluarga->result() as $row) { ?>
         <form role="form" method="post" action="<?= site_url('administrator/update_kepala_keluarga')?>">
         <input type="hidden" name="id" value="<?= $row->id_kepkel ?>">
            <div class="card-body">
                <label>NIK</label>
                <div class="input-group mb-3">
                <input required type="number" class="form-control" name="nik" placeholder="NIK" value="<?= $row->nik ?>">
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
                    <option value="pendatang" <?= ($row->status=='pendatang')?'selected':'';?>>Pendatang</option>
                    <option value="tetap" <?= ($row->status=='tetap')?'selected':''; ?>>Tetap</option>
                  </select>
                </div>
                <label>Nomor Kartu Keluarga</label>
                <div class="input-group mb-3">
                    <input required type="number" class="form-control" name="nokk" placeholder="Nomor Kartu Keluarga" value="<?= $row->no_kk ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-id-card"></span>
                        </div>
                    </div>
                </div>
                <label>Nama Lengkap</label>
                <div class="input-group mb-3">
                    <input required type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $row->nama ?>">
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
                        <option value="Laki-laki"  <?= ($row->jenis_kelamin=='Laki-laki')?'selected':'';?>>Laki-laki</option>
                        <option value="Perempuan"  <?= ($row->jenis_kelamin=='Perempuan')?'selected':'';?>>Perempuan</option>
                    </select>
                </div>
                <label>Tempat Lahir</label>
                <div class="input-group mb-3">
                    <input required type="text" class="form-control" name="ttl" placeholder="Tempat Tanggal Lahir" value="<?= $row->ttl ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-calendar"></span>
                        </div>
                    </div>
                </div>
                <label>Alamat</label>
                <div class="input-group mb-3">
                    <textarea class="form-control" name="alamat" cols="1" rows="3" placeholder="Alamat"><?= $row->alamat ?></textarea>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-address-book"></span>
                        </div>
                    </div>
                </div>
                <label>Agama</label>
                <div class="input-group mb-3">
                    <input required type="text" class="form-control" name="agama" placeholder="Agama" value="<?= $row->agama ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-home"></span>
                        </div>
                    </div>
                </div>
                <label>Pekerjaan</label>
                <div class="input-group mb-3">
                    <input required type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" value="<?= $row->pekerjaan ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-suitcase"></span>
                        </div>
                    </div>
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