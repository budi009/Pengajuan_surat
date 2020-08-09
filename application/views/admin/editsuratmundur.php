                    <!-- admin/template/dashboard_header -->

                    <!-- sidebar menu -->
                    <!-- admin/template/dasboard_side -->
                    <!-- /sidebar menu -->

                    <!-- top navigation -->
                    <!-- admin/template/dasboard_top -->
                    <!-- /top navigation -->

                    <!-- page content -->
                    <div class="right_col" role="main">
                      <div class="col-lg-12">
                        <div class="page-title">
                          <div class="title_left">
                            <h3>Edit Surat Aktif Kuliah</h3>
                          </div>

                        </div>
                        <section>
                          <?php foreach ($surat_mundur as $sm) { ?>
                            <form action="<?= base_url('admin/updatesuratmundur'); ?>" method="post">
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nomor Surat
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                <?php if ($sm->nomor_surat == 0) { ?>
                                    <input type="text" id="nosu" name="nosu" class="form-control" value="">
                                  <?php } else{ ?>
                                    <input type="text" id="nosu" name="nosu" class="form-control" value="<?php echo $sm->nomor_surat ?>">
                                  <?php }?>                                 </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> NIM
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $sm->mundur_id ?>">
                                  <input type="text" disabled id="nim" name="nim" class="form-control" value="<?php echo $sm->nim ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Lengkap
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <input type="text" disabled id="nama" name="nama" class="form-control" value="<?php echo $sm->nama_user ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Prodi
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <input type="text" disabled id="prodi" name="prodi" class="form-control" value="<?php echo $sm->prodi ?>">
                                </div>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-4">
                                  <a style="font-size: 20px;"><button type="submit" class="col-12 col-md-3 btn btn-primary "><i class="fa fa-arrow-left" style="font-size: 17px;"></i> Back</button></a>
                                  <a style="font-size: 20px;"><button type="submit" class="col-12 col-md-3 btn btn-primary "><i class="fa fa-check-square-o" style="font-size: 17px;"></i> Simpan</button></a>
                                </div>
                              </div>
                            </form>
                          <?php } ?>
                        </section>
                      </div>
                    </div>


                    <!-- admin/template/dashboard_footer -->