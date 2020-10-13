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
                                    <table id="mydata" class="table table-striped table-bordered bulk_action" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>No Surat</th>
                                          <th>Nim</th>
                                          <th>Nama</th>
                                          <th>Prodi</th>
                                          <th>Semester</th>
                                          <th>Lama Cuti</th>
                                          <th>Mulai Cuti</th>
                                          <th>Batas Cuti</th>
                                          <th>alasan</th>
                                          <th>Status Surat</th>
                                          <th>Status Cetak Surat</th>
                                          <th>Tanggal Mengajukan</th>
                                          <th>Status Validasi</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <?php
                                      $no = 1;
                                      foreach ($surat_cuti as $sc) {
                                      ?>
                                        <tr>
                                          <td><?php echo $no++ ?></td>
                                          <td><?php if ($sc->nomor_surat == 0) {
                                                echo "Belum ada nomor surat";
                                              } else {
                                                echo $sc->nomor_surat;
                                              }
                                              ?></td>
                                          <td><?php echo $sc->nim ?></td>
                                          <td><?php echo $sc->nama_user ?></td>
                                          <td><?php echo $sc->nama_prodi ?></td>
                                          <td><?php echo $sc->semester ?></td>
                                          <td><?php echo $sc->lama_cuti ?></td>
                                          <td><?php echo $sc->mulai_cuti ?></td>
                                          <td><?php echo $sc->batas_cuti ?></td>
                                          <td><?php echo $sc->alasan ?></td>
                                          <td><?php echo $sc->status_pengajuan ?></td>
                                          <td><?php echo $sc->status_cetak ?></td>
                                          <td><?php echo date('d-m-Y', strtotime($sc->tanggal_mengajukan)) ?></td>
                                            <?php if ($sc->qrcode != '') { ?>
                                          <td> <img style="width: 50px" src="<?= base_url('assets/qrcode/' . $sc->qrcode); ?>" alt=""> </td>
                                        <?php } else { ?>
                                          <td> <?php echo $sc->penolakan ?> </td>
                                        <?php } ?>
                                          <td>
                                            <!-- <a class="col-md-9 btn btn-primary fa fa-search " href="<?= base_url('admin/detailsuratcuti/') . $sc->nomor_surat; ?>"> Detail</a> -->
                                            <a class="col-md-5 btn btn-warning fa fa-edit " href="<?= base_url('admin/editsuratcuti/') . $sc->nomor_surat; ?>"></a>
                                            <?php
                                            if ($sc->nomor_surat == 0) { ?>
                                              <a title="Cetak Surat" class="col-md-5 btn btn-info fa fa-print disabled " href="<?= base_url('admin/pdf/') . $sc->nomor_surat; ?>"></a>
                                              
                                                <!-- <a title="Cetak Surat" class="col-md-5 btn btn-info fa fa-print disabled " href="<?= base_url('admin/pdf/') . $sc->nomor_surat; ?>"></a> -->
                                              <?php }else { ?>
                                                <a title="Cetak Surat" class="col-md-5 btn btn-info fa fa-print " href="<?= base_url('admin/pdf/') . $sc->nomor_surat; ?>"></a>
                                            <?php } ?>

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

                    <!-- /top tiles -->



                    <!-- admin/template/dashboard_footer -->