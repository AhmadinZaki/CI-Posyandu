

 <div class="container-fluid">
 <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1> 
<div class="row">
  <div class="col-lg">
 


 

		<?=$this->session->flashdata('message'); ?>


        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#balita"> Tambah Data</a>
        <a href="<?=base_url();?>user/cetakbalita " class="btn btn-danger mb-3" target= "_blank"> Cetak Balita</a>
           <div class="row mt-3">
              <div class="col">
                  <form method="post">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search Data Menu" name="keyword">
                      <div class="input-group-append">
                      <button class="btn btn-primary" type="submit" >search</button>
                    </div>
                  </form>
              </div>


          </div>

        


			 <table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">ID</th>
			      <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Nama Ibu</th>
            <th scope="col">Nama Ayah</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tinggi Badan</th>
            <th scope="col">Berat Bayi</th>
            <th scope="col">Action</th>
			      
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $i=1; ?>

			  	<?php foreach ($balita as $sm ) :  ?>
			    <tr>

			      <th scope="row"><?= $i; ?></th>
            <td><?= $sm['id_balita'];?></td>
			      <td><?= $sm['nama_balita'];?></td>
            <td><?= $sm['tanggal_lahir'];?></td>
            <td><?= $sm['jenis_kelamin'];?></td>
            <td><?= $sm['nama_ibu'];?></td>
            <td><?= $sm['nama_ayah'];?></td>
            <td><?= $sm['alamat'];?></td>
            <td><?= $sm['panjang_badan'];?></td>
            <td><?= $sm['berat_lahir'];?></td>
               
			      <td>

            <a href="<?=base_url();?>user/editBalita/<?=$sm['id_balita']; ?>" class="badge badge-success">edit</a>
			     	<a href="<?=base_url();?>user/deleteBalita/<?=$sm['id_balita']; ?>" class="badge badge-danger" onclick="return confirm('yakin?')">delete</a> 
			      		<!-- ada dibootsrap cari pill di documentatiton -->
			      </td>
			    </tr>
			    <?php $i++; ?>
			<?php endforeach; ?>


    
				  </tbody>
				</table>
        	</div>

        </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <!-- modal -->




<!-- cara di bottstrap Modal -->
<div class="modal fade" id="balita" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url('user/balita'); ?>" method="post" >
      <div class="modal-body">
      

    <div class="form-group">
      <input type="text" class="form-control" id="nama" name="nama_balita" placeholder=" Nama Balita">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="Tanggal Lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
      </div>
     
      <div class="form-group">
      <input type="text" class="form-control" id="Jenis Kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="Nama Ibu" name="nama_ibu" placeholder=" Nama Ibu">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id=" Nama Ayah" name="nama_ayah" placeholder=" Nama Ayah">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id=" Alamat" name=" alamat" placeholder="  Alamat">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="Panjang Badan" name="panjang_badan" placeholder="Tinggi Badan">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="Berat Lahir" name="berat_lahir" placeholder="Berat Bayi">
      </div>
      <div class="form-group">





      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>