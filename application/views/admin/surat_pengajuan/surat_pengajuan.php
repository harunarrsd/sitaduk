<div class="row">
          <div class="col-12">
        
            <div class="card">
              <div class="card-header">
                  <h3>Daftar Surat Pengajuan </h3>
                  <a href="<?= site_url('Administrator/tambah_surat_pengajuan') ?>" class="btn btn-outline-primary">Tambah</a>
                  <!-- <a href="<?= site_url('Administrator/PrintKepalaKeluarga') ?>" class="btn btn-success" target="_blank">Print</a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Maksud / Keperluan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                 <?php foreach ($get_surat_pengajuan->result() as $row) { ?>
                  <tr>
                    <td>
                    <?php 
                        foreach ($get_nik_ak->result() as $key => $value) {
                            if ($value->nik==$row->nik) {
                                echo $value->nama;
                            }
                        }
                        foreach ($get_nik_kk->result() as $key => $value) {
                            if ($value->nik==$row->nik) {
                                echo $value->nama;
                            }
                        }
                    ?>
                    </td>
                    <td><?= $row->nik ?></td>
                    <td><?= $row->maksud_keperluan ?></td>
                    <td><?= $row->status ?></td>
                    <td>
                      <a href="<?= site_url('Administrator/edit_surat_pengajuan/'.$row->id_surat) ?>" class="btn btn-warning">Edit</a>
                      <a href="<?= site_url('Administrator/delete_surat_pengajuan/'.$row->id_surat) ?>" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  <?php } ?>
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>