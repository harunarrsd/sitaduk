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
         <h3>DAFTAR KEPALA KELUARGA RT 08</h3>
         <hr>
      </center>
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
         <?php $i=1; foreach ($getKepala->result() as $row) { $i++;  ?>
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