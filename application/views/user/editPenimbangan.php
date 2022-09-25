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
                              <input type="hidden" name="id_penimbangan" value="<?= $edit['id_penimbangan']; ?>">
                              
                               <div class="form-group">
                                <label for='nama_anak'>nama_anak</label>
                                <input type="text" class="form-control" id="nama_anak" name="nama_anak" value="<?=$edit['nama_anak'];  ?>">
                                 
                              </div>

                              <div class="form-group">
                                <label for='tgl_timbang'>tgl_timbang</label>
                                <input type="text" class="form-control" id="tgl_timbang" name="tgl_timbang" value="<?=$edit['tgl_timbang'];  ?>">
                              </div>

                              <div class="form-group">
                                <label for='usia'>usia</label>
                                <input type="text" class="form-control" id="usia" name="usia" value="<?=$edit['usia'];  ?>">
                              </div>       

                              <div class="form-group">
                                <label for='berat_badan'>berat_badan</label>
                                <input type="text" class="form-control" id="berat_badan" name="berat_badan" value="<?=$edit['berat_badan'];  ?>">
                              </div>   

                              <div class="form-group">
                                <label for='lingkar_perut'>lingkar_perut</label>
                                <input type="text" class="form-control" id="lingkar_perut" name="lingkar_perut" value="<?=$edit['lingkar_perut'];  ?>">
                              </div>                                              
                              <button type="submit" class="btn btn-primary float-right">ubah data</button>

                          </form>   
                          
                        </div>
                  </div>
                                     
             </div>
       </div>
</div>
        