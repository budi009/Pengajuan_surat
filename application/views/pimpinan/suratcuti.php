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

                              <div class="clearfix"></div>
                            </div>
                            <a class="col-md-2 offset-md-10 btn btn-primary fa fa-check-square-o " href="<?= base_url('pimpinan/validasi_ak') ?>"> Validasi Semua </a>

                            <div class="x_content">
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="card-box table-responsive">
                                    <table id="mydata" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                      <thead>
                                        <tr>
                                          <th>No</th>
                                          <!-- <th>No Surat</th> -->
                                          <th>Nim</th>
                                          <th>Nama</th>
                                          <th>Prodi</th>
                                          <th>Semester</th>
                                          <th>Lama Cuti</th>
                                          <th>Mulai Cuti</th>
                                          <th>Batas Cuti</th>
                                          <!-- <th>alasan</th>  -->
                                          <th>Action</th>
                                          <th>Keterangan</th>
                                        </tr>
                                      </thead>
                                      <?php
                                      $no = 1;
                                      foreach ($surat_cuti as $sc) {
                                      ?>
                                        <tr>
                                          <td><?php echo $no++ ?></td>
                                          <!-- <td><?php echo $sc->nomor_surat ?></td> -->
                                          <td><?php echo $sc->nim ?></td>
                                          <td><?php echo $sc->nama_user ?></td>
                                          <td><?php echo $sc->prodi ?></td>
                                          <td><?php echo $sc->semester ?></td>
                                          <td><?php echo $sc->lama_cuti ?></td>
                                          <td><?php echo $sc->mulai_cuti ?></td>
                                          <td><?php echo $sc->batas_cuti ?></td>
                                          <!-- <td><?php echo $sc->alasan ?></td>   -->
                                          <td>

                                            <?php if ($sc->penolakan != '') { ?>
                                              <a class="col-md-5 btn btn-primary fa fa-check-square-o disabled " href="<?= base_url('pimpinan/editsuratcuti/') . $sc->nomor_surat; ?>"></a>
                                              <a class="col-md-5 btn btn-danger fa fa-times-circle disabled" href="<?= base_url('pimpinan/editsuratcuti_tolak/') . $sc->nomor_surat; ?>"></a>
                                            <?php } elseif ($sc->qrcode != '') { ?>
                                              <a class="col-md-5 btn btn-primary fa fa-check-square-o disabled" href="<?= base_url('pimpinan/editsuratcuti/') . $sc->nomor_surat; ?>"></a>
                                              <a class="col-md-5 btn btn-danger fa fa-times-circle disabled " href="<?= base_url('pimpinan/editsuratcuti_tolak/') . $sc->nomor_surat; ?>"></a>
                                            <?php } else { ?>
                                              <a class="col-md-5 btn btn-primary fa fa-check-square-o  " href="<?= base_url('pimpinan/editsuratcuti/') . $sc->nomor_surat; ?>"></a>
                                              <a class="col-md-5 btn btn-danger fa fa-times-circle  " href="<?= base_url('pimpinan/editsuratcuti_tolak/') . $sc->nomor_surat; ?>"></a>

                                            <?php } ?>
                                          </td>
                                          <?php if ($sc->qrcode != '') { ?>
                                            <td> <img style="width: 100px" src="<?= base_url('assets/qrcode/' . $sc->qrcode); ?>" alt=""> </td>
                                          <?php } else { ?>
                                            <td> <?php echo $sc->penolakan ?> </td>
                                          <?php } ?>

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