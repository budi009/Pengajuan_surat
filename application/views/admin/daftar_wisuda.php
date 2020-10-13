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
                            <h3>Data Mahasiswa Pendaftar Wisuda</h3>

                          </div>


                        </div>

                        <div class="col-md-12 col-sm-12 ">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Pendaftar</small></h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="card-box table-responsive">
                                    <div class="col-md-4">
                                      <a style="size: 18px;" class="col-md-3 btn btn-success btn-lg fa fa-download" href="<?= base_url('word_excel/wisudaexcel') ?>"> Excel</a>
                                      <a class="col-md-3 btn btn-info fa fa-download " href="<?= base_url('word_excel/wisudaword') ?>"> Word</a>
                                      <!-- <a  class="col-md-3 btn btn-warning fa fa-print " href="<?= base_url('admin/wisudapdf') ?>"> PDF</a> -->
                                    </div>

                                    <table id="tblData" class="table table-striped table-bordered bulk_action" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>NIM</th>
                                          <th>Nama</th>
                                          <th>Prodi</th>
                                          <th>Daftar</th>
                                        </tr>
                                      </thead>
                                      <?php
                                      $id = 1;
                                      foreach ($wisuda as $w) {
                                      ?>
                                        <tr>
                                          <td><?php echo $id++ ?></td>
                                          <td><?php echo $w->nim ?></td>
                                          <td><?php echo $w->nama ?></td>
                                          <td><?php echo $w->nama_prodi ?></td>
                                          <td>
                                            <?php
                                              
                                            echo date('d-m-Y', strtotime($w->tahun_daftar))
                                            ?>
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