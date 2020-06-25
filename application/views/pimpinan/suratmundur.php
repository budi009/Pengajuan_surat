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
                          <!-- <a class="col-md-6 btn btn-primary fa fa-search" href="<?= base_url('admin/detailsuratmundur/').$sm->mundur_id; ?>"> Detail</a>
                      <a class="col-md-6 btn btn-warning fa fa-edit " href="<?= base_url('admin/editsuratmundur/').$sm->mundur_id; ?>"> Edit</a>
                           <a title="Cetak Surat" class="col-md-6 btn btn-info fa fa-print " href="<?= base_url('admin/suratmundurpdf/').$sm->mundur_id; ?>"> Cetak</a> -->
                          </td>
                          </tr>                  
                       <?php } ?>
                    </table>
          
                    <!-- <p style="text-align: center;">
                      <span style="line-height: 1.3; font-weight: bold; font-family: 'Times New Roman', Times, serif; font-size: 14;">
                        SURAT PENGUNDURAN DIRI MAHASISWA
                      </span> <br>
                      <span style="line-height: 1; font-family: 'Times New Roman', Times, serif; font-size: 14;">
                        Nomor : <?php echo $sm->nomor_surat ?> /PL36/KM.00.00/2019
                     </span> 
                    </p> -->
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
              