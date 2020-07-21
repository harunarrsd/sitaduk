<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pengajuan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <style>
        .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
            float: left;
        }
        .col-sm-12 {
            width: 100%;
        }
        .col-sm-11 {
            width: 91.66666667%;
        }
        .col-sm-10 {
            width: 83.33333333%;
        }
        .col-sm-9 {
            width: 75%;
        }
        .col-sm-8 {
            width: 66.66666667%;
        }
        .col-sm-7 {
            width: 58.33333333%;
        }
        .col-sm-6 {
            width: 50%;
        }
        .col-sm-5 {
            width: 41.66666667%;
        }
        .col-sm-4 {
            width: 33.33333333%;
        }
        .col-sm-3 {
            width: 25%;
        }
        .col-sm-2 {
            width: 16.66666667%;
        }
        .col-sm-1 {
            width: 8.33333333%;
        }
        .col-sm-pull-12 {
            right: 100%;
        }
        .col-sm-pull-11 {
            right: 91.66666667%;
        }
        .col-sm-pull-10 {
            right: 83.33333333%;
        }
        .col-sm-pull-9 {
            right: 75%;
        }
        .col-sm-pull-8 {
            right: 66.66666667%;
        }
        .col-sm-pull-7 {
            right: 58.33333333%;
        }
        .col-sm-pull-6 {
            right: 50%;
        }
        .col-sm-pull-5 {
            right: 41.66666667%;
        }
        .col-sm-pull-4 {
            right: 33.33333333%;
        }
        .col-sm-pull-3 {
            right: 25%;
        }
        .col-sm-pull-2 {
            right: 16.66666667%;
        }
        .col-sm-pull-1 {
            right: 8.33333333%;
        }
        .col-sm-pull-0 {
            right: auto;
        }
        .col-sm-push-12 {
            left: 100%;
        }
        .col-sm-push-11 {
            left: 91.66666667%;
        }
        .col-sm-push-10 {
            left: 83.33333333%;
        }
        .col-sm-push-9 {
            left: 75%;
        }
        .col-sm-push-8 {
            left: 66.66666667%;
        }
        .col-sm-push-7 {
            left: 58.33333333%;
        }
        .col-sm-push-6 {
            left: 50%;
        }
        .col-sm-push-5 {
            left: 41.66666667%;
        }
        .col-sm-push-4 {
            left: 33.33333333%;
        }
        .col-sm-push-3 {
            left: 25%;
        }
        .col-sm-push-2 {
            left: 16.66666667%;
        }
        .col-sm-push-1 {
            left: 8.33333333%;
        }
        .col-sm-push-0 {
            left: auto;
        }
        .col-sm-offset-12 {
            margin-left: 100%;
        }
        .col-sm-offset-11 {
            margin-left: 91.66666667%;
        }
        .col-sm-offset-10 {
            margin-left: 83.33333333%;
        }
        .col-sm-offset-9 {
            margin-left: 75%;
        }
        .col-sm-offset-8 {
            margin-left: 66.66666667%;
        }
        .col-sm-offset-7 {
            margin-left: 58.33333333%;
        }
        .col-sm-offset-6 {
            margin-left: 50%;
        }
        .col-sm-offset-5 {
            margin-left: 41.66666667%;
        }
        .col-sm-offset-4 {
            margin-left: 33.33333333%;
        }
        .col-sm-offset-3 {
            margin-left: 25%;
        }
        .col-sm-offset-2 {
            margin-left: 16.66666667%;
        }
        .col-sm-offset-1 {
            margin-left: 8.33333333%;
        }
        .col-sm-offset-0 {
            margin-left: 0%;
        }
        .visible-xs {
            display: none !important;
        }
        .hidden-xs {
            display: block !important;
        }
        table.hidden-xs {
            display: table;
        }
        tr.hidden-xs {
            display: table-row !important;
        }
        th.hidden-xs,
        td.hidden-xs {
            display: table-cell !important;
        }
        .hidden-xs.hidden-print {
            display: none !important;
        }
        .hidden-sm {
            display: none !important;
        }
        .visible-sm {
            display: block !important;
        }
        table.visible-sm {
            display: table;
        }
        tr.visible-sm {
            display: table-row !important;
        }
        th.visible-sm,
        td.visible-sm {
            display: table-cell !important;
        }
    </style>
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
<hr>
<div class="row" style="padding-bottom:15px;">
  <div class="col-sm-2">
    <img src="<?= base_url();?>assets/img/depok.png" width="75%" class="center">
  </div>
  <div class="col-sm-11">
    <h4>RUKUN TETANGGA 08 RUKUN WARGA 01</h4>
    <h4>PALSIGUNUNG, KELURAHAN TUGU</h4>
    <h4>KECAMATAN CIMANGGIS - KOTA DEPOK</h4>
  </div>
</div>
<hr>
<h4 class="text-center" style="padding:25px;text-decoration:underline;">SURAT PENGANTAR / KETERANGAN</h4>
<?php 
    foreach ($get_surat->result() as $key => $value) {
        $nik = $value->nik;
        $maksud = $value->maksud_keperluan;
    }
?>
<?php 
    foreach ($get_nik_ak->result() as $key => $value) {
        $nama = $value->nama;
        $ttl = $value->ttl;
        $jk = $value->jenis_kelamin;
        $pekerjaan = $value->pekerjaan;
        $agama = $value->agama;
        $alamat = $value->alamat;
    }
?>
<?php 
    foreach ($get_nik_kk->result() as $key => $value) {
        $nama = $value->nama;
        $ttl = $value->ttl;
        $jk = $value->jenis_kelamin;
        $pekerjaan = $value->pekerjaan;
        $agama = $value->agama;
        $alamat = $value->alamat;
    }
?>
<div class="row">
    <div class="col-sm-4">
        <h4>Nama</h4>
    </div>
    <div class="col-sm-8">
        <h4>
            : <?= $nama;?>
        </h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <h4>Tempat Lahir</h4>
    </div>
    <div class="col-sm-8">
        <h4>
            : <?= $ttl;?>
        </h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <h4>Jenis Kelamin</h4>
    </div>
    <div class="col-sm-8">
        <h4>
            : <?= $jk;?>
        </h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <h4>Nomor Induk Kependudukan</h4>
    </div>
    <div class="col-sm-8">
        <h4>
            : <?= $nik;?>
        </h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <h4>Pekerjaan</h4>
    </div>
    <div class="col-sm-8">
        <h4>
            : <?= $pekerjaan;?>
        </h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <h4>Agama</h4>
    </div>
    <div class="col-sm-8">
        <h4>
            : <?= $agama;?>
        </h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <h4>Alamat</h4>
    </div>
    <div class="col-sm-8">
        <h4>
            : <?= $alamat;?>
        </h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <h4>Maksud / Keperluan</h4>
    </div>
    <div class="col-sm-8">
        <h4>
            : <?= $maksud;?>
        </h4>
    </div>
</div>
<h4 style="text-align:justify;">Demikian surat pengantar / keterangan ini kami buat untuk dipergunakan sebagaimana mestinya dan warga 
tersebut sebagai warga tetap / masih numpang alamat di lingkungan RT kami.</h4>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>