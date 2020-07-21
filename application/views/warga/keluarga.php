<div class="content-wrapper">
  <div class="container">
    <div class="row justify-content-md-center pt-5">
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
              <!-- <a href="<?= site_url('Warga/tambahKeluarga'); ?>" class="btn btn-primary">+ Tambah Keluarga</a>  -->
              <a href="<?= site_url('Warga/printKeluarga/'.$this->session->userdata('id')); ?>" class="btn btn-success" target="_blank">Print Data Keluarga</a>
              <hr>
            <h3 class="card-title">Daftar Anggota Keluarga</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
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
              <?php foreach ($keluarga->result() as $row) { ?>
                <tr>
                <td><?= $row->nama ?></td>
                <td><?= $row->nik ?></td>
                <td><?= $row->ttl ?></td>
                <td><?= $row->pekerjaan ?></td>
                <td>
                  <a href="<?= site_url('Warga/detailAnggotaKeluarga/'.$row->id_ak) ?>" class="btn btn-primary">DETAIL</a>
                  <!-- <a href="<?= site_url('Warga/editKeluarga/'.$row->id_ak) ?>" class="btn btn-warning">EDIT</a>
                  <a href="<?= site_url('Warga/deleteKeluarga/'.$row->id_ak) ?>" class="btn btn-danger">HAPUS</a> -->
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
  </div>
</div>