<div class="row">
<div class="col-12">

<?php 
            if($message = $this->session->flashdata('msgerror'))
            {
            	echo "<script>swal('Oooppsss....','".$message."','error');</script>";
            }else if($message = $this->session->flashdata('msgsuccess')){
            	echo "<script>swal('Success','".$message."','success');</script>";
            }
            ?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Anggota Keluarga</h3>
              </div>
              <div class="card-header">
              <?php 
                foreach ($getKepala->result() as $row) { ?>
                  <div class="row">
                      <div class="col-md-4"> 
                         <p>Keluarga Dari :  <?= $row->nama ?></p>
                         <p>Status Keluarga :  <?= $row->status ?></p>
                        </div>
                      <div class="col-md-4">     <a href="<?= site_url("Administrator/EditStatusKeluarga/".$row->id_kepkel) ?>" class="btn btn-warning">EDIT STATUS KELUARGA</a>               </div>
                      <div class="col-md-4">
                  <a href="<?= site_url("Administrator/printKeluarga/".$row->id_kepkel); ?>" class="btn btn-primary" target="_blank">PRINT DATA KELUARGA</a> &nbsp; </div>
                  </div>
                  <?php
                }
              ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="<?= site_url('administrator/tambah_anggota_keluarga/'.$row->id_kepkel);?>" class="btn btn-outline-primary mb-3">Tambah Anggota Keluarga</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>TTL</th>
                    <th>Pekerjaan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($getKeluarga->result() as $row) { ?>
                    <tr>
                    <td><?= $row->nama ?></td>
                    <td><?= $row->nik ?></td>
                    <td><?= $row->ttl ?></td>
                    <td><?= $row->pekerjaan ?></td>
                    <td>
                      <a href="<?= site_url('administrator/edit_anggota_keluarga/'.$row->id_ak) ?>" class="btn btn-warning">EDIT</a>
                      <a href="<?= site_url('administrator/delete_anggota_keluarga/'.$row->id_ak) ?>" class="btn btn-danger">HAPUS</a>
                    </td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
</div>