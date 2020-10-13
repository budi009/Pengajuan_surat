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
                            <div class="x_content">
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="card-box table-responsive">
                                    <table id="mydata" class="table table-striped table-bordered bulk_action" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Nomor Surat</th>
                                          <th>NIM</th>
                                          <th>Nama</th>
                                          <th>Prodi</th>
                                          <th>Semester</th>
                                          <th>Status Surat</th>
                                          <th>Status Cetak Surat</th>
                                          <th>Tanggal Mengajukan</th>
                                          <th>Status Validasi</th>

                                          <th>Aksi</th>
                                        </tr>
                                      </thead>
                                      <?php
                                      $id = 1;
                                      foreach ($surat_aktif_kuliah as $ak) {
                                      ?>
                                        <tr>
                                          <td><?php echo $id++ ?></td>
                                          <td><?php if ($ak->nomor_surat == 0) {
                                                echo "Belum ada nomor surat";
                                              } else {
                                                echo $ak->nomor_surat;
                                              }
                                              ?></td>
                                          <td><?php echo $ak->nim ?></td>
                                          <td><?php echo $ak->nama_user ?></td>
                                          <td><?php echo $ak->nama_prodi ?></td>
                                          <td><?php echo $ak->semester ?></td>
                                          <td><?php echo $ak->status_pengajuan ?></td>
                                          <td><?php echo $ak->status_cetak ?></td>
                                          <td><?php echo date('d-m-Y', strtotime($ak->tanggal_mengajukan)) ?></td>
                                            <?php if ($ak->qrcode != '') { ?>
                                          <td> <img style="width: 50px" src="<?= base_url('assets/qrcode/' . $ak->qrcode); ?>" alt=""> </td>
                                        <?php } else { ?>
                                          <td> <?php echo $ak->penolakan ?> </td>
                                        <?php } ?>
                                        <td>

                                          <a class="col-md-3 btn btn-primary fa fa-search " href="<?= base_url('admin/detailsurataktif/') . $ak->nomor_surat; ?>"></a>
                                          <a class="col-md-3 btn btn-warning fa fa-edit " href="<?= base_url('admin/editsurataktif/') . $ak->nomor_surat; ?>"></a>
                                          <?php
                                          if ($ak->nomor_surat == 0) { ?>
                                            <a title="Cetak Surat" class="col-md-3 btn btn-info fa fa-print disabled " href="<?= base_url('admin/pdfsurataktif/') . $ak->nomor_surat; ?>"></a>
                                          
                                            <!-- <a title="Cetak Surat" class="col-md-3 btn btn-info fa fa-print disabled " href="<?= base_url('admin/pdfsurataktif/') . $ak->nomor_surat; ?>"></a> --> 
                                          <?php } else { ?>
                                            <a title="Cetak Surat" class="col-md-3 btn btn-info fa fa-print " href="<?= base_url('admin/pdfsurataktif/') . $ak->nomor_surat; ?>"></a>
                                          <?php } ?>
                                          <a class="col-md-3 btn btn-danger fa fa-trash " href="<?= base_url('admin/hapussurataktif/') . $ak->nomor_surat; ?>"></a>
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