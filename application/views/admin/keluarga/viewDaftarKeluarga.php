<div class="row">
          <div class="col-12">
        
            <div class="card">
              <div class="card-header">
                  <h3>Daftar Kepala Keluarga </h3>
                  <a href="<?= site_url('Administrator/tambah_kepala_keluarga') ?>" class="btn btn-outline-primary">Tambah</a>
                  <a href="<?= site_url('Administrator/PrintKepalaKeluarga') ?>" class="btn btn-success" target="_blank">Print</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>No Kartu Keluarga</th>
                    <th>NIK</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                 <?php foreach ($getKeluarga->result() as $row) { ?>
                  <tr>
                    <td><?= $row->nama ?></td>
                    <td><?= $row->no_kk ?></td>
                    <td><?= $row->nik ?></td>
                    <td><?= $row->status ?></td>
                    <td>
                      <a href="<?= site_url('Administrator/lihatKeluarga/'.$row->id_kepkel) ?>" class="btn btn-primary">Lihat</a>
                      <a href="<?= site_url('Administrator/edit_kepala_keluarga/'.$row->id_kepkel) ?>" class="btn btn-warning">Edit</a>
                      <a href="<?= site_url('Administrator/delete_kepala_keluarga/'.$row->id_kepkel) ?>" class="btn btn-danger">Delete</a>
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