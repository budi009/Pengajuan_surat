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
                            <a class="col-md-2 offset-md-10 btn btn-primary fa fa-check-square-o " href="<?= base_url('pimpinan/validasi_kp') ?>"> Validasi Semua </a>

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
                                          <th>Keterangan</th>
                                        </tr>
                                      </thead>
                                      <?php

                                      $no = 1;
                                      foreach ($lokasi_id as $kp) {
                                      ?>
                                        <?php
                                        if ($kp->sp_prodi == NULL) { ?>

                                        <?php } else { ?>
                                          <tr>
                                            <td><?php echo $no++ ?></td>

                                            <td>
                                              <?php foreach ($anggota_kp as $ag_kp) { ?>
                                                <?php if ($ag_kp->kp_id == $kp->id_kp) { ?>
                                                  <?php echo $ag_kp->nama ?><br>
                                                <?php } ?>
                                              <?php } ?>

                                            </td>
                                            <td>
                                              <?php foreach ($anggota_kp as $ag_kp) { ?>
                                                <?php if ($ag_kp->kp_id == $kp->id_kp) { ?>
                                                  <?php echo $ag_kp->nim ?><br>
                                                <?php } ?>

                                              <?php } ?>
                                            </td>
                                            <td><?php echo $kp->tempat ?></td>
                                            <td><?php echo $kp->alamat_tempat ?></td>
                                            <td>
                                              <?php if ($kp->penolakan != '') { ?>
                                                <a class="col-md-5 btn btn-primary fa fa-check-square-o disabled " href="<?= base_url('pimpinan/editsuratkp/') . $kp->id_kp; ?>"></a>
                                                <a class="col-md-5 btn btn-danger fa fa-times-circle disabled" href="<?= base_url('pimpinan/editsuratkp_tolak/') . $kp->id_kp; ?>"></a>
                                              <?php } elseif ($kp->qrcode != '') { ?>
                                                <a class="col-md-5 btn btn-primary fa fa-check-square-o disabled" href="<?= base_url('pimpinan/editsuratkp/') . $kp->id_kp; ?>"></a>
                                                <a class="col-md-5 btn btn-danger fa fa-times-circle disabled " href="<?= base_url('pimpinan/editsuratkp_tolak/') . $kp->id_kp; ?>"></a>
                                              <?php } else { ?>
                                                <a class="col-md-5 btn btn-primary fa fa-check-square-o  " href="<?= base_url('pimpinan/editsuratkp/') . $kp->id_kp; ?>"></a>
                                                <a class="col-md-5 btn btn-danger fa fa-times-circle  " href="<?= base_url('pimpinan/editsuratkp_tolak/') . $kp->id_kp; ?>"></a>

                                              <?php } ?>
                                            </td>
                                            <?php if ($kp->qrcode != '') { ?>
                                              <td> <img style="width: 100px" src="<?= base_url('assets/qrcode/' . $kp->qrcode); ?>" alt=""> </td>
                                            <?php } else { ?>
                                              <td> <?php echo $kp->penolakan ?> </td>
                                            <?php } ?>
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