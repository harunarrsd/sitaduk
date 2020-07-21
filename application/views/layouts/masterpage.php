<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- SweetAlert -->
  <	<script src="<?= base_url() ?>assets/sweetalert.min.js"></script>
  <!-- Data Table -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= 
          $this->session->userdata('nama');
           ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
     <?php $this->load->view('layouts/sidebar');?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('Warga/home')?>">Home</a></li>
              <li class="breadcrumb-item active"><?= strtoupper($this->uri->segment(2))?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php
        // View Untuk Warga
            if($this->uri->segment(2)=="home"){
              $this->load->view('warga/home');
            }else if($this->uri->segment(2)=="keluarga"){
              $this->load->view('warga/keluarga');
            }else if($this->uri->segment(2)=="lihatDataKeluarga"){
              $this->load->view('admin/keluarga/viewDaftarKeluarga');
            }else if($this->uri->segment(2)=="tambahDataKeluarga"){
              $this->load->view('admin/keluarga/viewTambahDataKeluarga');
            }else if($this->uri->segment(2)=="lihatKeluarga"){
              $this->load->view('admin/keluarga/viewKeluarga');
            }else if($this->uri->segment(2)=="dashboard"){
              $this->load->view('admin/dashboard');
            }else if($this->uri->segment(2)=="EditStatusKeluarga"){
              $this->load->view('admin/keluarga/editStatusKeluarga');
            }else if($this->uri->segment(2)=="lihatWarga"){
              $this->load->view('admin/warga/viewDetailWarga');
            }else if($this->uri->segment(2)=="akun"){
              $this->load->view('admin/gantiPassword');
            }else if($this->uri->segment(2)=="tambahKeluarga"){
              $this->load->view('warga/inputKeluarga');
            }else if($this->uri->segment(2)=="editKeluarga"){
              $this->load->view('warga/editKeluarga');
            }else if($this->uri->segment(2)=="detailAnggotaKeluarga"){
              $this->load->view('warga/detailAnggotaKeluarga');
            }else if($this->uri->segment(2)=="akunWarga"){
              $this->load->view('warga/editPassword');
            }else if($this->uri->segment(2)=="pengajuan_surat"){
              $this->load->view('warga/pengajuan_surat');
            }else if($this->uri->segment(2)=="tambahPengajuanSurat"){
              $this->load->view('warga/tambahPengajuanSurat');
            }else if($this->uri->segment(2)=="tambah_kepala_keluarga"){
              $this->load->view('admin/keluarga/tambah_kepala_keluarga');
            }else if($this->uri->segment(2)=="edit_kepala_keluarga"){
              $this->load->view('admin/keluarga/edit_kepala_keluarga');
            }else if($this->uri->segment(2)=="tambah_anggota_keluarga"){
              $this->load->view('admin/keluarga/tambah_anggota_keluarga');
            }else if($this->uri->segment(2)=="edit_anggota_keluarga"){
              $this->load->view('admin/keluarga/edit_anggota_keluarga');
            }else if($this->uri->segment(2)=="surat_pengajuan"){
              $this->load->view('admin/surat_pengajuan/surat_pengajuan');
            }else if($this->uri->segment(2)=="tambah_surat_pengajuan"){
              $this->load->view('admin/surat_pengajuan/tambah_surat_pengajuan');
            }else if($this->uri->segment(2)=="edit_surat_pengajuan"){
              $this->load->view('admin/surat_pengajuan/edit_surat_pengajuan');
            }
        ?>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020.</strong>
    Novita
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
/** add active class and stay opened when selected */
var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.nav-sidebar a').filter(function() {
return this.href == url;
}).addClass('active');

// for treeview
$('ul.nav-treeview a').filter(function() {
return this.href == url;
}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
})
</script>
<script>
  $(function () {
    $('.select2').select2();
    
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
