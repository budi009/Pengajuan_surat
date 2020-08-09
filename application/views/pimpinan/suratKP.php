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
                    <h2>Pelaksanaan Kerja Praktek</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <a class="col-md-2 offset-md-10 btn btn-primary fa fa-check-square-o " href="<?= base_url('pimpinan/validasi_kp')?>"> Validasi Semua </a>

                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="mydata" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>

                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>NIM</th>
                          <th>Waktu Kerja Praktek</th>
                          <th>Lokasi Kerja Praktek</th>
                          <th>Action</th>
                          <th>QRcode</th>
                        </tr>
                      </thead>
                        <?php
                        
                        $no = 1;
                        foreach ($surat_kp as $kp) {
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            
                          <td>
                            <?php echo $kp->nama ?><br>
                            <!-- <?php echo $kp->nama2 ?><br>
                            <?php echo $kp->nama3 ?><br>
                            <?php echo $kp->nama4 ?><br>
                            <?php echo $kp->nama5 ?> -->
                        </td>
                          <td>
                            <?php echo $kp->nim ?><br>
                            <!-- <?php echo $kp->nim2 ?><br>
                            <?php echo $kp->nim3 ?><br>
                            <?php echo $kp->nim4 ?><br>
                            <?php echo $kp->nim5 ?> -->
                        </td>
                          <td><?php echo $kp->tempat ?></td>
                          <td><?php echo $kp->alamat_tempat ?></td>
                          <td>
                          <a class="col-md-12 btn btn-primary fa fa-check-square-o " href="<?= base_url('pimpinan/editsuratkp/').$kp->kp_id; ?>"> Validasi </a>
                          </td>
                          <td > <img style="width: 100px" src="<?= base_url('assets/qrcode/'.$kp->qrcode); ?>" alt=""> </td>    
                        </tr>
                        <?php } ?>
                    </table>
          
          
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
              