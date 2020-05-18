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
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nomor Surat</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Prodi</th>
                          <th>Action</th>
                        </tr>
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
                          <a class="col-md-6 btn btn-primary fa fa-search" href="<?= base_url('admin/detailsuratmundur/').$sm->mundur_id; ?>"> Detail</a>
                      <a class="col-md-6 btn btn-primary fa fa-edit " href="<?= base_url('admin/editsuratmundur/').$sm->mundur_id; ?>"> Edit</a>
                           <a title="Cetak Surat" class="col-md-6 btn btn-info fa fa-print " href="<?= base_url('admin/suratmundurpdf/').$sm->mundur_id; ?>"> Cetak</a>
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