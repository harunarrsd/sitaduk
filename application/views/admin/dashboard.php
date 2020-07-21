<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"> 
              <?php foreach ($count->result() as $row) { ?>
                <h3><?= $row->jumlah; ?></h3>
              <?php } ?>

                <p>Jumlah Warga</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"> 
              <?php foreach ($countPendatang->result() as $row) { ?>
                <h3><?= $row->jumlah; ?></h3>
              <?php } ?>

                <p>Jumlah Warga Pendatang</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"> 
              <?php foreach ($countTetap->result() as $row) { ?>
                <h3><?= $row->jumlah; ?></h3>
              <?php } ?>

                <p>Jumlah Warga Tetap</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
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