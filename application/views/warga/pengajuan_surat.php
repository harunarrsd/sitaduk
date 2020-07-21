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
              <a href="<?= site_url('Warga/tambahPengajuanSurat'); ?>" class="btn btn-primary">Ajukan Surat</a> 
              <hr>
            <h3 class="card-title">Daftar Pengajuan Surat</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Maksud / Keperluan</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($keluarga->result() as $row) { ?>
                <tr>
                <td><?= $row->maksud_keperluan ?></td>
                <td><?= $row->status ?></td>
                <td class="text-center">
                <?php 
                if ($row->status=='Selesai') {
                  ?>
                  <a href="<?= site_url('Warga/print_surat/'.$row->nik); ?>" class="btn btn-success" target="_blank">Print Surat</a>
                  <?php
                }
                ?>
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