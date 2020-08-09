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
                                          <th>Tahun Angkatan</th>
                                          <th>Tahun Akademik</th>

                                          <th>Action</th>
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
                                          <td><?php echo $ak->prodi ?></td>
                                          <td><?php echo $ak->semester ?></td>
                                          <td><?php echo $ak->th_angkatan ?></td>
                                          <td><?php echo $ak->th_akademik ?></td>
                                          <td>

                                            <a class="col-md-12 btn btn-primary fa fa-search " href="<?= base_url('admin/detailsurataktif/') . $ak->nim; ?>"> Detail</a>
                                            <a class="col-md-12 btn btn-warning fa fa-edit " href="<?= base_url('admin/editsurataktif/') . $ak->id; ?>"> Edit</a>
                                            <?php
                                            if ($ak->nomor_surat == 0) { ?>
                                              <a title="Cetak Surat" class="col-md-12 btn btn-info fa fa-print disabled " href="<?= base_url('admin/pdfsurataktif/') . $ak->nim; ?>"> Cetak</a>
                                            <?php } else { ?>
                                              <a title="Cetak Surat" class="col-md-12 btn btn-info fa fa-print " href="<?= base_url('admin/pdfsurataktif/') . $ak->nim; ?>"> Cetak</a>
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
                    