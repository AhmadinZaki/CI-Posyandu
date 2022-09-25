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
  <h5 class="text-center"> Laporan Data Penimbangan</h5>
<br>
             <tr>
              <th>#</th>
               <th>Nama Anak</th>
               <th>Tanggal Timbang</th>
               <th>Usia</th>
               <th>Berat Badan</th>
               <th>Lingkar Perut</th>
>
             </tr> 
           
               <?php $i=1; ?>
               <?php foreach ($posyandu as $balita ) :  ?>
                 <tr>
              <th scope="row"><?= $i; ?></th>
			        <td><?=$balita['nama_anak'] ?></td>
			        <td><?= $balita['tgl_timbang'];?></td>
			        <td><?= $balita['usia'];?></td>
              <td><?=$balita['berat_badan'] ?></td>
              <td><?= $balita['lingkar_perut'];?></td>


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