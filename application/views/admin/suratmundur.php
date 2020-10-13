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
                                    <table id="mydata" class="table table-striped table-bordered bulk_action" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>No. Surat</th>
                                          <th>NIM</th>
                                          <th>Nama</th>
                                          <th>Prodi</th>
                                          <th>Semester</th>
                                          <th>No HP Mhs</th>
                                          <th>No HP Ortu</th>
                                          <th>Alasan Mundur</th>
                                          <th>Status Pengajuan</th>
                                          <th>Status Cetak Surat</th>
                                          <th>Tanggal Mengajukan</th>
                                          <th>Status Validasi</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <?php
                                      $no = 1;
                                      foreach ($surat_mundur as $sm) {
                                      ?>
                                        <tr>
                                          <td><?php echo $no++ ?></td>
                                          <td><?php if ($sm->nomor_surat == 0) {
                                                echo "Belum ada nomor surat";
                                              } else {
                                                echo $sm->nomor_surat;
                                              }
                                              ?></td>
                                          <td><?php echo $sm->nim ?></td>
                                          <td><?php echo $sm->nama_user ?></td>
                                          <td><?php echo $sm->nama_prodi ?></td>
                                          <td><?php echo $sm->semester ?></td>
                                          <td><?php echo $sm->telp_mhs ?></td>
                                          <td><?php echo $sm->telp_ortu ?></td>
                                          <td><?php echo $sm->alasan ?></td>
                                          <td><?php echo $sm->status_pengajuan ?></td>
                                          <td><?php echo $sm->status_cetak ?></td>
                                          <td><?php echo date('d-m-Y', strtotime($sm->tanggal_mengajukan)) ?></td>
                                            <?php if ($sm->qrcode != '') { ?>
                                          <td> <img style="width: 50px" src="<?= base_url('assets/qrcode/' . $sm->qrcode); ?>" alt=""> </td>
                                        <?php } else { ?>
                                          <td> <?php echo $sm->penolakan ?> </td>
                                        <?php } ?>
                                          <td>
                                            <!-- <a class="col-md-12 btn btn-primary fa fa-search" href="<?= base_url('admin/detailsuratmundur/') . $sm->nomor_surat; ?>"> Detail</a> -->
                                            <a class="col-md-5 btn btn-warning fa fa-edit " href="<?= base_url('admin/editsuratmundur/') . $sm->nomor_surat; ?>"></a>
                                            <?php
                                            if ($sm->nomor_surat == 0) { ?>
                                              <a title="Cetak Surat" class="col-md-5 btn btn-info fa fa-print disabled" href="<?= base_url('admin/suratmundurpdf/') . $sm->nomor_surat; ?>"></a>
                                              
                                                <!-- <a title="Cetak Surat" class="col-md-5 btn btn-info fa fa-print disabled" href="<?= base_url('admin/suratmundurpdf/') . $sm->nomor_surat; ?>"></a> -->
                                              <?php } else { ?>
                                                <a title="Cetak Surat" class="col-md-5 btn btn-info fa fa-print " href="<?= base_url('admin/suratmundurpdf/') . $sm->nomor_surat; ?>"></a>
                                            <?php } ?>
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