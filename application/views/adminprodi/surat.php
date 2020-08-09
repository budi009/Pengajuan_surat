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
                            <div class="x_content">
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="card-box table-responsive">
                                  <table id="mydata" class="table table-striped table-bordered bulk_action" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Nomor Surat</th>
                                          <th>Nama</th>
                                          <th>NIM</th>
                                          <!-- <th>Prodi</th> -->
                                          <th>Waktu Kerja Praktek</th>
                                          <th>Lokasi Kerja Praktek</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <?php

                                      $no = 1;
                                      foreach ($surat_kp as $kp) {

                                      ?>
                                        <?php
                                        if ($kp->sp_prodi == !NULL) { ?>

                                        <?php } else { ?>
                                          <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php if ($kp->nomor_surat == 0) {
                                                  echo "Belum ada nomor surat";
                                                } else {
                                                  echo $kp->nomor_surat;
                                                }
                                                ?></td>
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
                                              <a class="col-md-12 btn btn-warning fa fa-edit " href="<?= base_url('adminprodi/editsuratkp/') . $kp->nim; ?>"> Edit</a>
                                              <?php
                                              if ($kp->nomor_surat == 0) { ?>
                                                <a title="Cetak Surat" class="col-md-12 btn btn-info fa fa-print disabled " href="<?= base_url('adminprodi/suratkppdf/') . $kp->id_kp; ?>"> Cetak</a>
                                              <?php } else { ?>
                                                <a title="Cetak Surat" class="col-md-12 btn btn-info fa fa-print " href="<?= base_url('adminprodi/suratkppdf/') . $kp->id_kp; ?>"> Cetak</a>
                                              <?php } ?>
                                            </td>
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