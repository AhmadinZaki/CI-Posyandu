<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row">
  <div class="col">
	 <table class="table table-hover">
              <thead class="thead-dark">
                 <br>
  <h5 class="text-center"> Laporan Data Imunisasi</h5>
<br>
             <tr>
              <th>#</th>
               <th>Nama Balita</th>
               <th>Tanggal Imunisasi</th>
               <th>Jenis Imunisasi</th>

             </tr> 
           
               <?php $i=1; ?>
               <?php foreach ($posyandu as $imunisasi ) :  ?>
                 <tr>
              <th scope="row"><?= $i; ?></th>
			        <td><?=$imunisasi['nama_balita'] ?></td>
			        <td><?= $imunisasi['tanggal_imunisasi'];?></td>
			        <td><?= $imunisasi['jenis_imunisasi'];?></td>

              </tr>

                <?php $i++; ?>
              <?php endforeach; ?>
           </thead>
        </table>
</div>
<hr>

     

</div>

<script type="text/javascript">
	window.print();
</script>
       

</body>
</html>