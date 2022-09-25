<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1> 
        
        
              <div class="row">

                <div class="col-lg-9">
                    <?php if(validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert"> 
                    <?= validation_errors();  ?>
                  <?php endif; ?>
                    </div> 

                    <?=$this->session->flashdata('message'); ?>

                      <div class="card" style="width: 500px;">
                        <div class="card-header">
                          Ubah data
                        </div>
                        <div class="card-body">
                          
                          <form action="" method="post">
                              <input type="hidden" name="id_balita" value="<?= $edit['id_balita']; ?>">
                              
                               <div class="form-group">
                                <label for='nama_balita'>nama_balita</label>
                                <input type="text" class="form-control" id="nama_balita" name="nama_balita" value="<?=$edit['nama_balita'];  ?>">
                                 
                              </div>

                              <div class="form-group">
                                <label for='tanggal_imunisasi'>tanggal_imunisasi</label>
                                <input type="text" class="form-control" id="tanggal_imunisasi" name="tanggal_imunisasi" value="<?=$edit['tanggal_imunisasi'];  ?>">
                              </div>

                              <div class="form-group">
                                <label for='jenis_imunisasi'>jenis_imunisasi</label>
                                <input type="text" class="form-control" id="jenis_imunisasi" name="jenis_imunisasi" value="<?=$edit['jenis_imunisasi'];  ?>">
                              </div>                                                      
                              <button type="submit" class="btn btn-primary float-right">ubah data</button>

                          </form>   
                          
                        </div>
                  </div>
                                     
             </div>
       </div>
</div>
        