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
  <h5 class="text-center"> Laporan Data Balita</h5>
<br>
             <tr>
              <th>#</th>
               <th>Nama Balita</th>
               <th>Tanggal Lahir</th>
               <th>Jenis Kelamin</th>
               <th>Nama Ibu</th>
               <th>Nama Ayah</th>
               <th>Alamat</th>
               <th>Tinggi Balita</th>
               <th>Berat Bayi</th>
             </tr> 
           
               <?php $i=1; ?>
               <?php foreach ($posyandu as $balita ) :  ?>
                 <tr>
              <th scope="row"><?= $i; ?></th>
			        <td><?=$balita['nama_balita'] ?></td>
			        <td><?= $balita['tanggal_lahir'];?></td>
			        <td><?= $balita['jenis_kelamin'];?></td>
              <td><?=$balita['nama_ibu'] ?></td>
              <td><?= $balita['nama_ayah'];?></td>
              <td><?= $balita['alamat'];?></td>
              <td><?= $balita['panjang_badan'];?></td>
              <td><?=$balita['berat_lahir'] ?></td>

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