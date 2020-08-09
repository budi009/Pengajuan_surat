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
                              <h2>Surat Aktif Kuliah</small></h2>
                              <div class="clearfix"></div>
                            </div>
                            
                            <a class="col-md-2 offset-md-10 btn btn-primary fa fa-check-square-o " href="<?= base_url('pimpinan/validasi_ak')?>"> Validasi Semua </a>
                            
                            <div class="x_content">
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="card-box table-responsive">
                                    <table id="mydata" class="table table-striped table-bordered bulk_action" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>NIM</th>
                                          <th>Nama</th>
                                          <th>Prodi</th>
                                          <th>Semester</th>
                                          <th>Tahun Angkatan</th>
                                          <th>Tahun Akademik</th>
                                          <th>Keperluan Pengajuan Surat</th>
                                          <th>Action</th>
                                          <th>Keterangan</th>

                                        </tr>
                                      </thead>
                                      <?php
                                      $id = 1;
                                      foreach ($surat_aktif_kuliah as $ak) {
                                      ?>
                                        <tr>
                                          <td><?php echo $id++ ?></td>
                                          <td><?php echo $ak->nim ?></td>
                                          <td><?php echo $ak->nama_user ?></td>
                                          <td><?php echo $ak->prodi ?></td>
                                          <td><?php echo $ak->semester ?></td>
                                          <td><?php echo $ak->th_angkatan ?></td>
                                          <td><?php echo $ak->th_akademik ?></td>
                                          <td><?php echo $ak->keperluan ?></td>


                                          <td>

                                          <?php if($ak->penolakan != '' ){ ?>
                                            <a class="col-md-12 btn btn-primary fa fa-check-square-o disabled " href="<?= base_url('pimpinan/editsurataktif/') . $ak->id; ?>"> Validasi </a>
                                            <a class="col-md-12 btn btn-danger fa fa-times-circle disabled" href="<?= base_url('pimpinan/editsurataktif_tolak/') . $ak->id; ?>"> Tolak</a>
                                            <?php } elseif($ak->qrcode != '') { ?>
                                              <a class="col-md-12 btn btn-primary fa fa-check-square-o disabled" href="<?= base_url('pimpinan/editsurataktif/') . $ak->id; ?>"> Validasi </a>
                                              <a class="col-md-12 btn btn-danger fa fa-times-circle disabled " href="<?= base_url('pimpinan/editsurataktif_tolak/') . $ak->id; ?>"> Tolak</a>
                                              <?php } else { ?> 
                                                <a class="col-md-12 btn btn-primary fa fa-check-square-o  " href="<?= base_url('pimpinan/editsurataktif/') . $ak->id; ?>"> Validasi </a>
                                              <a class="col-md-12 btn btn-danger fa fa-times-circle  " href="<?= base_url('pimpinan/editsurataktif_tolak/') . $ak->id; ?>"> Tolak</a>

                                                <?php } ?>
                                          </td>
                                          <?php if($ak->qrcode != ''){ ?>
                                          <td> <img style="width: 100px" src="<?= base_url('assets/qrcode/' . $ak->qrcode); ?>" alt=""> </td>
                                          <?php } else { ?>
                                            <td> <?php echo $ak->penolakan ?> </td>
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