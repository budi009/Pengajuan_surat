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

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Search</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detail Surat Mengundurkan Diri</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-8">
                            <div class="card-box table-responsive">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <td><?php echo $detail->nama ?></td>
                        </tr>
                        <tr>
                          <th>Nim</th>
                          <td><?php echo $detail->nim ?></td>
                        </tr>
                        <tr>
                          <th>Program Studi</th>
                          <td><?php echo $detail->prodi_id ?></td>
                        </tr>
                        <tr>
                          <th>Semester</th>
                          <td><?php echo $detail->semester ?></td>
                        </tr>
                        <tr>
                          <th>Nomor Telp/HP Mahasiswa</th>
                          <td><?php echo $detail->telp_mhs ?></td>
                        </tr>
                        <tr>
                          <th>Nomor Telp/HP Orang Tua</th>
                          <td><?php echo $detail->telp_ortu ?></td>
                        </tr>
                        <tr>
                          <th>Alasan Mengundurkan Diri</th>
                          <td><?php echo $detail->alasan ?></td>
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
          <!-- /top tiles -->


           
    <!-- admin/template/dashboard_footer -->
              
            