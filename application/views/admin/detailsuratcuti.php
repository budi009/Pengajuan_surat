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
                              <h2>Detail Surat Cuti</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <div class="row">
                                <div class="col-sm-8">
                                  <div class="card-box table-responsive">

                                    <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                      <thead>
                                        <?php foreach ($details as $detail) : ?>
                                          <tr>
                                            <th>Nama</th>
                                            <td><?php echo $detail->nama_user ?></td>
                                          </tr>
                                          <tr>
                                            <th>Nim</th>
                                            <td><?php echo $detail->nim ?></td>
                                          </tr>
                                          <tr>
                                            <th>Program Studi</th>
                                            <td><?php echo $detail->prodi ?></td>
                                          </tr>
                                          <tr>
                                            <th>Semester</th>
                                            <td><?php echo $detail->semester ?></td>
                                          </tr>
                                          <tr>
                                            <th>Lama Pengajuan Cuti (Semester)</th>
                                            <td><?php echo $detail->lama_cuti ?></td>
                                          </tr>
                                          <tr>
                                            <th>Mulai Cuti (Semester)</th>
                                            <td><?php echo $detail->mulai_cuti ?></td>
                                          </tr>
                                          <tr>
                                            <th>Batas Pengajuan Cuti (Semester)</th>
                                            <td><?php echo $detail->batas_cuti ?></td>
                                          </tr>
                                          <tr>
                                            <th>Alasan Pengajuan Cuti</th>
                                            <td><?php echo $detail->alasan ?></td>
                                          </tr>

                                      </thead>

                                    </table>
                                  <?php endforeach; ?>
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