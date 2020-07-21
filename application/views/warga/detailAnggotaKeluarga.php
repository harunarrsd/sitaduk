<div class="content-wrapper">
   <div class="container">
      <div class="row justify-content-md-center pt-5">
         <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
               <div class="card-header">
                  <h3 class="card-title">Informasi Keluarga</h3>
                  <a href="<?= base_url('Warga/keluarga'); ?>" class="btn btn-outline-dark float-right btn-sm"><i class="fa fa-arrow-left fa-sm mr-2"></i>Kembali</a>
               </div>
               <!-- /.card-header -->
               <!-- form start -->
            <?php foreach ($getKeluarga->result() as $row) { ?>
                  <form role="form" method="post" action="<?= site_url('Warga/updateKeluarga')?>">
                  <input type="hidden" name="id" value="<?= $row->id_ak ?>">
                  <div class="card-body">
                     <div class="form-group">
                     <label>Nama Lengkap</label>
                     <input type="text" class="form-control" name="nama" value="<?= $row->nama ?>" placeholder="Nama Lengkap" required readonly>
                     </div>
                     <div class="form-group">
                     <label>NIK</label>
                     <input type="number" class="form-control" name="nik" value="<?= $row->nik ?>"  placeholder="Nomor Induk Kependudukan" required readonly>
                     </div>
                     <div class="form-group">
                     <label>Tempat Tanggal Lahir</label>
                     <input type="text" class="form-control" name="ttl" value="<?= $row->ttl ?>"  placeholder="Tempat Tanggal Lahir" required readonly>
                     </div>
                     <div class="form-group">
                     <label>Jenis Kelamin</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="jenis_kelamin" readonly>
                        <option value="<?php echo $row->jenis_kelamin ?>"><?php echo $row->jenis_kelamin ?></option>
                        <option value="Perempaun">Perempuan</option>
                        </select>
                     </div>
                     <div class="form-group">
                     <label>Alamat</label>
                     <textarea class="form-control" rows="3" name="alamat" required placeholder="Tulis Alamat Lengkap Disini..." readonly><?= $row->alamat ?></textarea>
                     </div>
                     <div class="form-group">
                     <label>Agama</label>
                     <input type="text" class="form-control" name="agama" value="<?= $row->agama ?>"  required placeholder="Agama" readonly>
                     </div>
                     <div class="form-group">
                     <label>Pekerjaan</label>
                     <input type="text" class="form-control" name="pekerjaan" value="<?= $row->pekerjaan ?>"  required placeholder="Pekerjaan" readonly>
                     </div>
                  </div>
                  <!-- /.card-body -->
            </form>
            <?php  } ?>
            </div>
            <!-- /.card -->
         </div>
      </div>
   </div>
</div>