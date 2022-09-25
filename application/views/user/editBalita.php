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
                                <label for='nama_balita'>Nama Balita</label>
                                <input type="text" class="form-control" id="nama_balita" name="nama_balita" value="<?=$edit['nama_balita'];  ?>">
                                 
                              </div>

                              <div class="form-group">
                                <label for='tanggal_lahir'>Tanggal Lahir</label>
                                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?=$edit['tanggal_lahir'];  ?>">
                              </div>

                              <div class="form-group">
                                <label for='panjang_badan'>Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?=$edit['jenis_kelamin'];  ?>">
                              </div> 

                              <div class="form-group">
                                <label for='nama_ibu'>Nama Ibu</label>
                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?=$edit['nama_ibu'];  ?>">
                              </div> 

                              <div class="form-group">
                                <label for='nama_ayah'>Nama Ayah</label>
                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?=$edit['nama_ayah'];  ?>">
                              </div> 

                              <div class="form-group">
                                <label for='alamat'>Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$edit['alamat'];  ?>">
                              </div> 


                              <div class="form-group">
                                <label for='panjang_badan'>Tinggi Badan</label>
                                <input type="text" class="form-control" id="panjang_badan" name="panjang_badan" value="<?=$edit['panjang_badan'];  ?>">
                              </div> 


                              <div class="form-group">
                                <label for='berat_lahir'>Berat Bayi</label>
                                <input type="text" class="form-control" id="berat_lahir" name="berat_lahir" value="<?=$edit['berat_lahir'];  ?>">
                              </div> 

                              <button type="submit" class="btn btn-primary float-right">ubah data</button>

                          </form>   
                          
                        </div>
                  </div>
                                     
             </div>
       </div>
</div>
