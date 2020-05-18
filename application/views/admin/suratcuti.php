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
                    <h2>Surat Cuti</h2>
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
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nomor Surat</th>
                          <th>Nim</th>
                          <th>Nama</th>
                          <th>Prodi</th>
                          <th>Semester</th>
                          <th>Lama Cuti</th>
                          <th>Mulai Cuti</th>
                          <th>Batas Cuti</th>         
                          <th>alasan</th> 
                          <th>Action</th>           
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($data as $sc) {
                        ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $sc->nomor_surat ?></td>
                          <td><?php echo $sc->nim ?></td>
                          <td><?php echo $sc->nama ?></td>
                          <td><?php echo $sc->prodi_id ?></td>
                          <td><?php echo $sc->semester ?></td>
                          <td><?php echo $sc->lama_cuti ?></td>
                          <td><?php echo $sc->mulai_cuti ?></td>
                          <td><?php echo $sc->batas_cuti ?></td>         
                          <td><?php echo $sc->alasan ?></td>  
                          <td>
                           
                            <a class="col-md-9 btn btn-primary fa fa-edit " href="<?= base_url('admin/editsuratcuti/').$sc->id; ?>"> Edit</a>
                            <a title="Cetak Surat" class="col-md-9 btn btn-info fa fa-print " href="<?= base_url('admin/pdf/').$sc->id; ?>"> Cetak</a>
                            
                          </td>
                        
                        </tr>                  
                       <?php } ?>
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
              
            