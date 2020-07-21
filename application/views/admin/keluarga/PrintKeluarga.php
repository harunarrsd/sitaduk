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
     <?php foreach ($getKepala->result() as $row) { ?>
        <center>
         <h3>SURAT KETERANGAN WARGA RT 08 </h3>
         <hr>
      
      </center>
   
      <table>
         <tr>
            <td>Nama Kepala Keluarga</td>
            <td>: <?= strtoupper($row->nama); ?></td>
         </tr>
         <tr>
            <td>NIK</td>
            <td>: <?= strtoupper($row->nik); ?></td>
         </tr>
        
         <tr>
            <td>NO KK</td>
            <td>: <?= strtoupper($row->no_kk); ?></td>
         </tr>
        
         <tr>
            <td>Alamat</td>
            <td>: <?= strtoupper($row->alamat); ?></td>
         </tr>
         <tr>
            <td>Status Warga</td>
            <td>: <?= strtoupper($row->status); ?></td>
         </tr>
         <hr>
        <?php } ?>
      </table>
      <br>
      <p>Anggota Keluarga : </p>
     <center>
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
         <?php $i=1; foreach ($getKeluarga->result() as $row) { $i++;  ?>
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
     </center>
   </body>
</html>