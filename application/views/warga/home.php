<div class="content-wrapper">
  <div class="container">
    <div class="row justify-content-md-center pt-5">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"> 
              <?php foreach ($count->result() as $row) { ?>
                <h3><?= $row->jumlah; ?></h3>
              <?php } ?>

                <p>Anggota Keluarga Saya</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">   
                <h3><?= strtoupper( $this->session->userdata('status')); ?></h3>
                <p>STATUS WARGA</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php foreach ($countkepkel->result() as $row) { ?>
                <h3><?= $row->jumlah; ?></h3>
              <?php } ?>
                <p> Jumlah Kepala Keluarga Di RT 08</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            
            </div>
          </div>
          <!-- ./col -->
        </div>
  </div>
</div>