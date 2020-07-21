<?php 
  if($message = $this->session->flashdata('msgError'))
  {
      echo "<script>swal('Oooppsss....','".$message."','error');</script>";
  }else if($message = $this->session->flashdata('msgSuccess')){
      echo "<script>swal('Success','".$message."','success');</script>";
  }
?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- /.content -->

    <div class="container mt-5 mb-5">
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
    </div>