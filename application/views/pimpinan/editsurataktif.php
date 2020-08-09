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
                            <h3>Validasi Surat Aktif Kuliah</h3>
                          </div>

                        </div>
                        <section>
                          <?php foreach ($surat_aktif_kuliah as $ak) { ?>
                            <?= form_open_multipart('pimpinan/updatesurataktif'); ?>


                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> NIM
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $ak->id ?>">
                                <input type="text" readonly id="nim" name="nim" class="form-control" value="<?php echo $ak->nim ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Lengkap
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" readonly id="nama" name="nama" class="form-control" value="<?php echo $ak->nama_user ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Program Studi
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" readonly class="form-control" value="<?php echo $ak->prodi ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Keperluan Surat
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" readonly class="form-control" value="<?php echo $ak->keperluan ?>">
                              </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                              <div class="col-md-6 col-sm-6 offset-md-4">
                              <a style="font-size: 14px;" href="<?= base_url('pimpinan/surat_aktif_kuliah') ?>"><button type="button" class="col-md-3 btn btn-primary "><i class="fa fa-arrow-left" style="font-size: 17px;"></i> Back</button></a>
                                <a style="font-size: 20px;"><button type="submit" class="col-12 col-md-3 btn btn-primary "><i class="fa fa-check-square-o" style="font-size: 17px;"></i> Validasi</button></a>
                              </div>
                            </div>
                            </form>
                          <?php } ?>
                        </section>



                      </div>

                    </div>


                    <!-- admin/template/dashboard_footer -->