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
                            <h3>Kuisioner</h3>
                          </div>


                        </div>

                        <div class="col-md-12 col-sm-12 ">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Pengisi</small></h2>

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
                                          <th>NIM</th>
                                          <th>Nama</th>
                                          <th>Prodi</th>
                                          <th>Nama Dosen</th>
                                          <th>Mata Kuliah</th>
                                          

                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <?php
                                      $id = 1;
                                      foreach ($kuisioner as $k) {
                                      ?>
                                        <tr>
                                          <td><?php echo $id++ ?></td>
                                          <td><?php echo $k->id_user ?></td>
                                          <td><?php echo $k->nama_user ?></td>
                                          <td><?php echo $k->prodi ?></td>
                                          <td><?php echo $k->nama_dosen ?></td>
                                          <td><?php echo $k->mata_kuliah ?></td>
                                          <!-- <td><?php echo $ak->th_akademik ?></td> -->
                                          <!-- <td><?php echo $ak->nama_ortu ?></td>         
                          <td><?php echo $ak->pekerjaan_ortu ?></td>                    
                          <td><?php echo $ak->nip_ortu ?></td>                    
                          <td><?php echo $ak->jabatan ?></td>                    
                          <td><?php echo $ak->instansi ?></td>                    
                          <td><?php echo $ak->alamat_ortu ?></td>                    
                          <td><?php echo $ak->keperluan ?></td>                    
                          <td><?php echo $ak->fc_ktp_ortu ?></td>                    
                          <td><?php echo $ak->fc_ktm_mhs ?></td>                    
                          <td><?php echo $ak->fc_buku_pedoman ?></td> -->
                                          <td>
                                            <!--                            
                          <a class="col-md-9 btn btn-primary fa fa-search " href="<?= base_url('admin/detailsurataktif/') . $ak->id; ?>"> Detail</a>
                      <a class="col-md-9 btn btn-warning fa fa-edit " href="<?= base_url('admin/editsurataktif/') . $ak->id; ?>"> Edit</a>
                           <a title="Cetak Surat" class="col-md-9 btn btn-info fa fa-print " href="<?= base_url('admin/pdfsurataktif/') . $ak->id; ?>"> Cetak</a>
                             -->
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
                    </div>
                    <!-- /top tiles -->



                    <!-- admin/template/dashboard_footer -->