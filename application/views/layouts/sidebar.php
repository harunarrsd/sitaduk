<nav class="mt-2">
   <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
      <?php 
         if($this->session->userdata('role') != 1){
         ?>
      <li class="nav-item has-treeview">
         <a href="#" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
               Home
               <i class="right fas fa-angle-left"></i>
            </p>
         </a>
         <ul class="nav nav-treeview">
            <li class="nav-item">
               <a href="<?= site_url("Warga/home");?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a href="<?= site_url('Warga/keluarga'); ?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
               Keluarga
            </p>
         </a>
      </li>
      <li class="nav-item">
         <a href="<?= site_url('Warga/pengajuan_surat'); ?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
               Pengajuan Surat
            </p>
         </a>
      </li>
      <li class="nav-header">PENGATURAN</li>
      <li class="nav-item">
         <a href="<?= site_url('Warga/akunWarga'); ?>" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
               Akun
            </p>
         </a>
      </li>
      <li class="nav-header">Keluar</li>
      <li class="nav-item">
         <a href="<?= site_url('Warga/keluar'); ?>" class="nav-link">
            <i class="nav-icon fas fa-times"></i>
            <p>
               Keluar
            </p>
         </a>
      </li>
      <?php              
         }
         ?>
      <?php 
         if($this->session->userdata('role') != 2){
         ?>
      <li class="nav-item">
         <a href="<?= site_url('Administrator/dashboard'); ?>" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
               Dashboard
            </p>
         </a>
      </li>
      <li class="nav-header">DATA MASTER</li>
      <li class="nav-item has-treeview">
         <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
               Kependudukan
               <i class="fas fa-angle-left right"></i>
            </p>
         </a>
         <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
               <a href="<?= site_url('Administrator/lihatDataKeluarga'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Data Keluarga</p>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a href="<?= site_url('administrator/surat_pengajuan'); ?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
               Surat Pengajuan
            </p>
         </a>
      </li>
      <li class="nav-header">PENGATURAN</li>
      <li class="nav-item">
         <a href="<?= site_url('Administrator/akun'); ?>" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
               Akun
            </p>
         </a>
      </li>
      <li class="nav-header">Keluar</li>
      <li class="nav-item">
         <a href="<?= site_url('Administrator/keluar'); ?>" class="nav-link">
            <i class="nav-icon fas fa-times"></i>
            <p>
               Keluar
            </p>
         </a>
      </li>
      <?php              
         }
         ?>
   </ul>
</nav>