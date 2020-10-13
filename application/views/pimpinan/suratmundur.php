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
                                          <!-- <th>Nomor Surat</th> -->
                                          <th>NIM</th>
                                          <th>Nama</th>
                                          <th>Prodi</th>
                                          <th>Action</th>
                                          <th>Keterangan</th>
                                        </tr>
                                      </thead>
                                      <?php
                                      $no = 1;
                                      foreach ($surat_mundur as $sm) {
                                      ?>
                                        <tr>
                                          <td><?php echo $no++ ?></td>
                                          <!-- <td><?php echo $sm->nomor_surat ?></td> -->
                                          <td><?php echo $sm->nim ?></td>
                                          <td><?php echo $sm->nama_user ?></td>
                                          <td><?php echo $sm->prodi ?></td>
                                          <td>

                                            <?php if ($sm->penolakan != '') { ?>
                                              <a class="col-md-5 btn btn-primary fa fa-check-square-o disabled " href="<?= base_url('pimpinan/editsuratmundur/') . $sm->nomor_surat; ?>"></a>
                                              <a class="col-md-5 btn btn-danger fa fa-times-circle disabled" href="<?= base_url('pimpinan/editsuratmundur_tolak/') . $sm->nomor_surat; ?>"></a>
                                            <?php } elseif ($sm->qrcode != '') { ?>
                                              <a class="col-md-5 btn btn-primary fa fa-check-square-o disabled" href="<?= base_url('pimpinan/editsuratmundur/') . $sm->nomor_surat; ?>"></a>
                                              <a class="col-md-5 btn btn-danger fa fa-times-circle disabled " href="<?= base_url('pimpinan/editsuratmundur_tolak/') . $sm->nomor_surat; ?>"></a>
                                            <?php } else { ?>
                                              <a class="col-md-5 btn btn-primary fa fa-check-square-o  " href="<?= base_url('pimpinan/editsuratmundur/') . $sm->nomor_surat; ?>"></a>
                                              <a class="col-md-5 btn btn-danger fa fa-times-circle  " href="<?= base_url('pimpinan/editsuratmundur_tolak/') . $sm->nomor_surat; ?>"></a>

                                            <?php } ?>
                                          </td>
                                          <?php if ($sm->qrcode != '') { ?>
                                            <td> <img style="width: 100px" src="<?= base_url('assets/qrcode/' . $sm->qrcode); ?>" alt=""> </td>
                                          <?php } else { ?>
                                            <td> <?php echo $sm->penolakan ?> </td>
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