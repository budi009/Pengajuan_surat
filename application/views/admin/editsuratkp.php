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
                            <h3>Edit Surat Kerja Praktek</h3>
                          </div>

                        </div>
                        <section>
                          <?php foreach ($surat_kp as $kp) { ?>
                            <form action="<?= base_url('admin/updatesuratkp'); ?>" method="post">

                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nomor Surat
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <input type="hidden" id="id_kp" name="id_kp" class="form-control" value="<?php echo $kp->id_kp ?>">
                                  <?php if ($kp->nomor_surat == 0) { ?>
                                    <input type="text" id="nosu" name="nosu" class="form-control" value="">
                                  <?php } else{ ?>
                                    <input type="text" id="nosu" name="nosu" class="form-control" value="<?php echo $kp->nomor_surat ?>">
                                  <?php }?>                                 </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Tempat
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <input type="text" disabled id="tempat" name="tempat" class="form-control" value="<?php echo $kp->tempat ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Alamat Tempat
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <input type="text" disabled id="nama" name="nama" class="form-control" value="<?php echo $kp->alamat_tempat ?>">
                                </div>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-4">
                                  <a style="font-size: 20px;"><button type="submit" class="col-12 col-md-3 btn btn-primary "><i class="fa fa-arrow-left" style="font-size: 17px;"></i> Back</button></a>
                                  <a style="font-size: 20px;"><button type="submit" class="col-12 col-md-3 btn btn-primary "><i class="fa fa-check-square-o" style="font-size: 17px;"></i> Simpan</button></a> </div>
                              </div>
                            </form>
                          <?php } ?>
                        </section>



                      </div>

                    </div>


                    <!-- admin/template/dashboard_footer -->