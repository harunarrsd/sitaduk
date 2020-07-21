<div class="row">
   <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
         <div class="card-header">
            <h3 class="card-title">Informasi Anggota Keluarga</h3>
            <a href="<?php echo $this->session->userdata('previous_url');?>"class="btn btn-outline-dark float-right btn-sm"><i class="fa fa-arrow-left fa-sm mr-1"></i> Kembali</a>
         </div>
         <!-- /.card-header -->
         <!-- form start -->
        <?php foreach ($getKeluarga->result() as $row) { ?>
            <form role="form" method="post" action="<?= site_url('administrator/update_anggota_keluarga')?>">
            <input type="hidden" name="id" value="<?= $row->id_ak ?>">
            <div class="card-body">
                <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" value="<?= $row->nama ?>" placeholder="Nama Lengkap" required >
                </div>
                <div class="form-group">
                <label>NIK</label>
                <input type="number" class="form-control" name="nik" value="<?= $row->nik ?>"  placeholder="Nomor Induk Kependudukan" required>
                </div>
                <div class="form-group">
                <label>Tempat Tanggal Lahir</label>
                <input type="text" class="form-control" name="ttl" value="<?= $row->ttl ?>"  placeholder="Tempat Tanggal Lahir" required>
                </div>
                <div class="form-group">
                <label>Jenis Kelamin</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="jenis_kelamin">
                    <option value="<?php echo $row->jenis_kelamin ?>"><?php echo $row->jenis_kelamin ?></option>
                    <option value="Perempaun">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" rows="3" name="alamat" required placeholder="Tulis Alamat Lengkap Disini..."><?= $row->alamat ?></textarea>
                </div>
                <div class="form-group">
                <label>Agama</label>
                <input type="text" class="form-control" name="agama" value="<?= $row->agama ?>"  required placeholder="Agama">
                </div>
                <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" value="<?= $row->pekerjaan ?>"  required placeholder="Pekerjaan">
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