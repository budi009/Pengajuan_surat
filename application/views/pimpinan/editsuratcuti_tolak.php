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
                            <h3>Penolakan Surat Cuti</h3>
                          </div>

                        </div>
                        <section>
                          <?php foreach ($surat_cuti as $sc) { ?>
                            <?= form_open_multipart('pimpinan/updatesuratcuti_tolak'); ?>


                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> NIM
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $sc->nomor_surat ?>">
                                <input type="text" readonly id="nim" name="nim" class="form-control" value="<?php echo $sc->nim ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Lengkap
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" readonly id="nama" name="nama" class="form-control" value="<?php echo $sc->nama_user ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Program Studi
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" readonly id="prodi" name="prodi" class="form-control" value="<?php echo $sc->prodi ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Alasan Cuti
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" readonly class="form-control" value="<?php echo $sc->alasan ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Alasan Penolakan Surat
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <textarea type="text" id="tolak" name="tolak" class="form-control" required></textarea>
                              </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                              <div class="col-md-6 col-sm-6 offset-md-4">
                              <a style="font-size: 14px;" href="<?= base_url('pimpinan/suratcuti') ?>"><button type="button" class="col-md-3 btn btn-primary "><i class="fa fa-arrow-left" style="font-size: 17px;"></i> Back</button></a>
                              <a style="font-size: 14px;"><button type="submit" class="col-md-5 btn btn-primary "><i class="fa fa-send" style="font-size: 14px;"></i> Kirim ke Admin</button></a>
                              </div>
                            </div>
                            </form>
                          <?php } ?>
                        </section>



                      </div>

                    </div>


                    <!-- admin/template/dashboard_footer -->