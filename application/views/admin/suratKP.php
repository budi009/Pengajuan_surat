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
                                          <th>Nomor Surat</th>
                                          <th>Nama</th>
                                          <th>NIM</th>
                                          <!-- <th>Prodi</th> -->
                                          <th>Tempat Kerja Praktek</th>
                                          <th>Waktu Kerja Praktek</th>
                                          <th>Lokasi Kerja Praktek</th>
                                          <th>Pengantar Prodi</th>
                                          <th>Status Pengajuan</th>
                                          <th>Status Cetak Surat</th>
                                          <th>Tanggal Mengajukan</th>
                                          <th>Status Validasi</th>
                                          <th>Action</th>
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
                                            <td><?php if ($kp->nomor_surat == 0) {
                                                  echo "Belum ada nomor surat";
                                                } else {
                                                  echo $kp->nomor_surat;
                                                }
                                                ?></td>
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
                                            <td><?php echo $kp->waktu_mulai ?> s.d <?php echo $kp->waktu_selesai ?></td>
                                            <td><?php echo $kp->alamat_tempat ?></td>
                                            <td><img style="width: 100px" src="<?= base_url('assets/img/kp/' . $kp->sp_prodi); ?>" alt=""></td>
                                            <td><?php echo $kp->status_pengajuan ?></td>
                                            <td><?php echo $kp->status_cetak ?></td>
                                            <td><?php echo date('d-m-Y', strtotime($kp->tanggal_mengajukan)) ?></td>
                                            <?php if ($kp->qrcode != '') { ?>
                                          <td> <img style="width: 50px" src="<?= base_url('assets/qrcode/' . $kp->qrcode); ?>" alt=""> </td>
                                        <?php } else { ?>
                                          <td> <?php echo $kp->penolakan ?> </td>
                                        <?php } ?>
                                            <td>
                                              <a class="col-md-5 btn btn-warning fa fa-edit " href="<?= base_url('admin/editsuratkp/') . $kp->id_kp; ?>"></a>
                                              <?php
                                              if ($kp->nomor_surat == 0) { ?>
                                                <a title="Cetak Surat" class="col-md-5 btn btn-info fa fa-print disabled " href="<?= base_url('admin/suratkppdf/') . $kp->id_kp; ?>"></a>
                                                
                                                  <!-- <a title="Cetak Surat" class="col-md-5 btn btn-info fa fa-print disabled " href="<?= base_url('admin/suratkppdf/') . $kp->id_kp; ?>"></a> -->
                                                <?php }else { ?>
                                                  <a title="Cetak Surat" class="col-md-5 btn btn-info fa fa-print " href="<?= base_url('admin/suratkppdf/') . $kp->id_kp; ?>"></a>
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