<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
         h4{
         padding-top:1%;
         }
      </style>
   </head>
   <body>
      <center>
         <h3>SURAT KETERANGAN WARGA RT 08 </h3>
         <hr>
      </center>
      <table>
         <tr>
            <td>Nama Kepala Keluarga</td>
            <td>: <?= strtoupper($this->session->userdata('nama')); ?></td>
         </tr>
         <tr>
            <td>NO KK</td>
            <td>:  <?= $this->session->userdata('no_kk') ?></td>
         </tr>
          <tr>
            <td>NIK</td>
            <td>: <?= strtoupper($this->session->userdata('nik')); ?></td>
         </tr>
         <tr>
            <td>Alamat</td>
            <td>: <?= strtoupper($this->session->userdata('alamat')); ?></td>
         </tr>
         <tr>
            <td>Status Warga</td>
            <td>: <?= strtoupper($this->session->userdata('status')); ?></td>
         </tr>
         <hr>
      </table>
      <br>
        <p>Anggota Keluarga : </p>
     <table border="1px" style="border-collapse: collapse;">
         <tr>
            <td >No</td>
            <td>Nama Lengkap</td>
            <td> NIK</td>
            <td>Jenis Kelamin</td>
            <td>Tempat Tanggal Lahir</td>
            <td>Agama</td>
            <td>Pekerjaan</td>
         </tr>
         <?php $i=1; foreach ($keluarga->result() as $row) { $i++;  ?>
         <tr>
            <td><?= $i; ?></td>
            <td><?= $row->nama; ?></td>
            <td><?= $row->nik; ?></td>
            <td><?= $row->jenis_kelamin; ?></td>
            <td><?= $row->ttl; ?></td>
            <td><?= $row->agama; ?></td>
            <td><?= $row->pekerjaan; ?></td>
         </tr>
         <?php }?>
      </table>
   </body>
</html>