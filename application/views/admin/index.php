                    <!-- admin/template/dashboard_header -->

          <!-- sidebar menu -->
                     <!-- admin/template/dasboard_side -->
          <!-- /sidebar menu -->

          <!-- top navigation -->
                     <!-- admin/template/dasboard_top -->
          <!-- /top navigation -->

        <!-- page content -->
    <div class="right_col" role="main" >
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count col-md-12 ">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top" style="font-size: 16px;">Surat Aktif Kuliah </span>
              <div class="count"><i class="fa fa-user"></i>  <?php echo $jml_aktif; ?></div>
           </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top" style="font-size: 16px;">Surat Cuti</span>
              <div class="count"><i class="fa fa-user"></i>  <?php echo $jml_cuti; ?></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top" style="font-size: 16px;">Surat Kerja Praktek</span>
              <div class="count"><i class="fa fa-user"></i>  <?php echo $jml_kp; ?></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top" style="font-size: 16px;">Surat Mundur</span>
              <div class="count"><i class="fa fa-user"></i>  <?php echo $jml_mundur; ?></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top" style="font-size: 16px;">Daftar Wisuda</span>
              <div class="count"><i class="fa fa-user"></i>  <?php echo $jml_wisuda; ?></div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top" style="font-size: 16px;">Kuisioner</span>
              <div class="count"><i class="fa fa-user"></i>  </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-4  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pie Graph</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_pie" style="height:350px;"></div>

                  </div>
                </div>
              </div>
<!-- <script type="text/javascript">
 document.getElementById("btn").disabled = true;
</script>
        <a class="col-md-9 btn btn-primary  fa fa-search " onclick="" href="<?= base_url('admin/QRcode'); ?>" id="btn" type="submit"> Qrcode</a>
           /top tiles -->
      
          <!-- <img style="width: 100px" src="assets/qrcode/qrcode.jpg" alt="">
          <a class="col-md-9 btn btn-primary  fa fa-search " onclick="" href="<?= base_url('admin/QRcode'); ?>" id="btn" type="submit"> Qrcode</a>
             /top tiles -->
        
            <!-- <img style="width: 100px" src="<?= base_url('assets/qrcode/') . $user = $this->session->userdata('nama_user') .'.jpg' ?>" alt="">
          
          <a class="col-md-9 btn btn-primary  fa fa-search " onclick="" href="<?= base_url('admin/QRcode'); ?>" id="btn" type="submit"> Qrcode</a>
           
        
            <img style="width: 100px" src="<?= base_url('assets/qrcode/') . $user = $this->session->userdata('nama_user') .'.jpg' ?>" alt="">
        </div> --> 
     
          
      <!-- admin/template/dashboard_footer -->

      <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              

              </div>

              
                <div class="col-md-6 col-sm-6 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Surat Pengajuan Mahasiswa</small></h2>
                   
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
                          <th>Jumlah Pemohon</th>
                        </tr>
                      </thead>
                        
                        <tr>
                           <td>Surat Aktif Kuliah</td>
                           <td><?php echo $jml_aktif; ?></td>
                        </tr> 
                        <tr>
                           <td>Surat Cuti</td>
                           <td><?php echo $jml_cuti; ?></td>
                        </tr> 
                        <tr>
                           <td>Surat Kp</td>
                           <td><?php echo $jml_kp; ?></td>
                        </tr> 
                        <tr>
                           <td>Surat Mundur</td>
                           <td><?php echo $jml_mundur; ?></td>
                        </tr> 
                        <tr>
                           <td>Daftar Wisuda</td>
                           <td><?php echo $jml_wisuda; ?></td>
                        </tr> 
                          
                                
                       
                      
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


