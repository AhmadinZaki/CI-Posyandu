 <div class="container-fluid">
 <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1> 
<div class="row">
  <div class="col-lg">




 

		<?=$this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#imunisasi"> Tambah Data</a>
             <a href="<?=base_url();?>user/cetakimunisasi " class="btn btn-danger mb-3" target= "_blank"> Cetak Data</a>

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
            <th scope="col">Tanggal Imunisasi</th>
            <th scope="col">Jenis Imunisasi</th>
            <th scope="col">Action</th>
			      
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $i=1; ?>

			  	<?php foreach ($imunisasi as $sm ) :  ?>
			    <tr>

			      <th scope="row"><?= $i; ?></th>
            <td><?= $sm['id_balita'];?></td>
			      <td><?= $sm['nama_balita'];?></td>
            <td><?= $sm['tanggal_imunisasi'];?></td>
            <td><?= $sm['jenis_imunisasi'];?></td>

               
			      <td>
			     	<a href="<?=base_url();?>user/editImunisasi/<?=$sm['id_balita']; ?>" class="badge badge-success">edit</a>
			     	<a href="<?=base_url();?>user/deleteimunisasi/<?=$sm['id_balita']; ?>" class="badge badge-danger" onclick="return confirm('yakin?')">delete</a> 
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
<!-- cara di bottstrap Modal -->
<div class="modal fade" id="imunisasi" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url('user/imunisasi'); ?>" method="post" >
      <div class="modal-body">
      

      
        <div class="form-group">
      <input type="text" class="form-control" id="nama" name="nama_balita" placeholder=" nama">
      </div>

      <div class="form-group">
      <input type="text" class="form-control" id="Tanggal Imunisasi" name="tanggal_imunisasi" placeholder="Tanggal Imunisasi">
      </div>
     
      <div class="form-group">
      <input type="text" class="form-control" id="Jenis Imunisasi" name="jenis_imunisasi" placeholder="Jenis Imunisasi">
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