                    <!-- admin/template/dashboard_header -->

          <!-- sidebar menu -->
                     <!-- admin/template/dasboard_side -->
          <!-- /sidebar menu -->

          <!-- top navigation -->
                   <!-- admin/template/dasboard_top -->
          <!-- /top navigation -->

        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Surat Pengajuan Mahasiswa</h3>
              </div>

              
            </div>

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Surat Mengundurkan Diri</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="mydata" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nomor Surat</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Prodi</th>
                          <th>Action</th>
                          <th>QRcode</th>
                        </tr>
                      </thead>
                        <?php
                        $no = 1;
                        foreach ($surat_mundur as $sm) {
                        ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $sm->nomor_surat ?></td>
                          <td><?php echo $sm->nim ?></td>
                          <td><?php echo $sm->nama ?></td>
                          <td><?php echo $sm->prodi_id ?></td>
                          <td>
                          <a class="col-md-12 btn btn-primary fa fa-check-square-o " href="<?= base_url('pimpinan/editsuratmundur/').$sm->mundur_id; ?>"> Validasi </a>
                          </td>
                          <td > <img style="width: 100px" src="<?= base_url('assets/qrcode/'.$sm->qrcode); ?>" alt=""> </td>    
                          </tr>                  
                       <?php } ?>
                    </table>
          
                    
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
              