<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>     
  <div class="row">
 

        <!--   <div class="col-md-4" style="height: 120px;">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Data Pasien 
                      </div>
                      <div class="text-xs font-weight-bold text-success mb-0">
                         <a href="<?=base_url();?>user/cetakDP" class="primary"></a>
                        </div> <br>
                       <div class="text-xs font-weight-bold text-success mb-0">
                         <a href="<?=base_url();?>user/cetakdpasien"  target="blank" class="badge-badge-danger" data-toggle="modal" data-target="#data_pasien" >cetak</a>
                        </div>
                      
                      </div>
                     <div class="col-auto">
                      <i class="fas fa-procedures fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="col-md-4" style="height: 120px;">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Data Rekam Medis
                      </div>
                      <div class="text-xs font-weight-bold text-success mb-0">
                         <a href="<?=base_url();?>user/cetakDP" class="primary"></a>
                        </div> <br>
                       <div class="text-xs font-weight-bold text-success mb-0">
                        <!--  <a href="<?=base_url();?>user/cetakrmedis" class="badge-badge-danger">cetak</a> -->

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          Cetak
                        </button>
                        </div>
                      
                      </div>
                     <div class="col-auto">
                      
                      <i class="fas fa-notes-medical fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


<!-- Modal Data RM -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cetak Data Rekam Medis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url();?>user/cetakposyandu" method="post" target="_blank">
          <table>
            <tr>
              <td>
                <div class="form-group">Dari Tanggal</div>
              </td>
              <td align="center" width="5%" >
                <div class="form-group">:</div>
              </td>
               <td>
                <div class="form-group">
                  <input type="date" class="form-control" name="tgl_a" required>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <!--  -->
                <div class="form-group">Sampai Tanggal</div>
              </td>
              <td align="center" >
                <div class="form-group">:</div>
              </td>
               <td>
                <div class="form-group">
                  <input type="date" class="form-control" name="tgl_b" required>
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
               <input type="submit" name="cetak_rm" class="btn btn-primary btn-sm" value="cetak">
              </td>
            </tr>
          </table>
      </div>
      <div class="modal-footer">
       
        <a href="<?=base_url();?>user/cetakreport" target="_blank" class="btn btn-primary"> Cetak Semua Data</a>
      </div>
        </form>
    </div>
  </div>
</div>
  </div>
</div>