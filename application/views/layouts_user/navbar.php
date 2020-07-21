<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?= site_url('');?>" class="navbar-brand">
        <span class="brand-text font-weight-light">SITADUK</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php 
        if ($this->session->userdata('role')==2) {
            ?>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item <?php if($this->uri->segment(2) == 'keluarga' || $this->uri->segment(2) == 'detailAnggotaKeluarga') { echo 'active'; } ?>">
                    <a href="<?= site_url('warga/keluarga')?>" class="nav-link">Data Penduduk</a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(2) == 'pengajuan_surat' || $this->uri->segment(2) == 'tambahPengajuanSurat') { echo 'active'; } ?>">
                    <a href="<?= site_url('warga/pengajuan_surat/'.$this->session->userdata('nik'))?>" class="nav-link">Pengajuan Surat</a>
                </li>
            </ul>
        </div>
            <?php
        }
      ?>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->
            <?php 
                if($this->session->userdata('role')==2){
                    ?>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle img-size-32 elevation-2" alt="User Image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle img-size-32 elevation-2 mr-3" alt="User Image">
                            <div class="media-body pt-2">
                                <h3 class="dropdown-item-title">
                                    <?= $this->session->userdata('nama');?>
                                </h3>
                            </div>
                        </div>
                        <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= site_url('warga/keluar'); ?>" class="dropdown-item dropdown-footer">Logout</a>
                    </div>
                    </li>
                    <?php
                }else{
                    ?>
                <li class="nav-item <?php if($this->uri->segment(2) == 'register') { echo 'active'; } ?>">
                    <a class="nav-link" href="<?= site_url('welcome/register'); ?>">
                        Register
                    </a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(2) == 'login') { echo 'active'; } ?>">
                    <a class="nav-link" href="<?= site_url('welcome/login'); ?>">
                        Login
                    </a>
                </li>
                    <?php
                }
            ?>
        </ul>
      </div>
    </div>
</nav>
<!-- /.navbar -->