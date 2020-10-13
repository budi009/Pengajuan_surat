                    <!-- admin/template/dashboard_header -->

          <!-- sidebar menu -->
                     <!-- admin/template/dasboard_side -->
          <!-- /sidebar menu -->

          <!-- top navigation -->
                     <!-- admin/template/dasboard_top -->
          <!-- /top navigation -->

        <!-- page content -->
        
    
    <div class="right_col" role="main">
          <!-- top tiles -->

          <h3 style="text-align: center;">Layanan Persuratan Akademik, Pendaftaran Wisuda & Kuisioner</h3>
          
          <div class="right_col" role="main">
                        <div class="">
                          <div class="col-md-9 col-sm-6 ">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Status Surat Pengajuan</small></h2>

                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                                <div class="row">
                                  <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                      <table class="table table-striped table-bordered bulk_action" style="width:100%">
                                        <thead>
                                          <tr>
                                            <th>Surat</th>
                                            <th>Status</th>
                                          </tr>
                                        </thead>

                                        <tr>
                                          <td>Surat Aktif Kuliah</td>
                                          <td>
                                            <?php 
                                            $id = 1;
                                            foreach($status_surat_aktif as $ssa) { 
                                              ?>
                                            <?= $id++ ?>. <?= $ssa->status_pengajuan ?> <br>
                                            
                                            <?php } ?>
                                          </td>
                                          
                                      </tr>
                                        <tr>
                                          <td>Surat Cuti</td>
                                          <td><?php 
                                            $id = 1;
                                            foreach($status_surat_cuti as $ssc) { 
                                              ?>
                                            <?= $id++ ?>. <?= $ssc->status_pengajuan ?> <br>
                                            
                                            <?php } ?></td>
                                        </tr>
                                        <tr>
                                          <td>Surat Kp</td>
                                          <td></td>
                                        </tr>
                                        <tr>
                                          <td>Surat Mundur</td>
                                          <td><?php 
                                            $id = 1;
                                            foreach($status_surat_mundur as $ssm) { 
                                              ?>
                                            <?= $id++ ?>. <?= $ssm->status_pengajuan ?> <br>
                                            
                                            <?php } ?></td>
                                        </tr>
                                        <!-- <tr>
                           <td>Daftar Wisuda</td>
                           <td><?php echo $jml_wisuda; ?></td>
                        </tr>  -->
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
<!-- adminprodi/template/dashboard_footer -->
