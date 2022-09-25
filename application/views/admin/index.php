<div class="container-fluid">
 <marquee>Selamat Datang di Aplikasi Posyandu</marquee>    
  <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>
  <!--  -->
  <div class="row">
    <div class="col-sm-12 ">
     <?php echo date('d F Y'); ?>
     <br>
      <body onload="setInterval('displayServerTime()', 1000);">
      <span id="clock"><?php print date('H:i:s'); ?></span>
    </div>
 
  
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">
                        <a href="<?=base_url('admin/role'); ?>">Role</a></div>
                     
                      </div>
                    <div class="col-auto">
                      <i class="fas fa-fw fa-user-tie"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">
                        <a href="<?=base_url('menu'); ?>">Menu Management</a></div>

                     
                      </div>
                    <div class="col-auto">
                      <i class="fas fa-fw fa-folder"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">
                        <a href="<?=base_url('menu'); ?>">Submenu Management</a></div>
                     
                      </div>
                    <div class="col-auto">
                      <i class="fas fa-fw fa-folder-open"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">
                        <a href="<?=base_url('user/imunisasi'); ?>">Imunisasi</a></div>
                    
                      </div>
                    <div class="col-auto">
                      <i class="fas fa-fw fa-folder-notes-medical"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">
                        <a href="<?=base_url('user/balita'); ?>">Balita</a></div>
                      
                      </div>
                    <div class="col-auto">
                      <i class="fas fa-fw fa-procedures"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">
                        <a href="<?=base_url('user/penimbangan'); ?>">Penimbangan</a></div>
                     
                      </div>
                    <div class="col-auto">
                      <i class="fas fa-fw fa-laptop-medical"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            





     </div>
   </div>