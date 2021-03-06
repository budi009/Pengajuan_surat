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
                                    <h3>Penolakan Surat Kerja Praktek</h3>
                                </div>

                            </div>
                            <section>
                                <?php foreach ($surat_kp as $kp) { ?>
                                    <?= form_open_multipart('pimpinan_prodi/updatesuratkp_tolak'); ?>


                                    <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $kp->id_kp ?>">
                                    <!-- <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> NIM Ketua Kelompok
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" readonly id="nim" name="nim" class="form-control" value="<?php echo $kp->nim ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Ketua Kelompok
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" readonly id="nama" name="nama" class="form-control" value="<?php echo $kp->nama ?>">
                              </div>
                            </div> -->
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Lokasi Kerja Praktek
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" readonly id="tempat" name="tempat" class="form-control" value="<?php echo $kp->tempat ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Alamat Lokasi Kerja Praktek
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" readonly class="form-control" value="<?php echo $kp->alamat_tempat ?>">
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
                                            <a style="font-size: 14px;" href="<?= base_url('pimpinan_prodi/validasi_pimpinan_prodi') ?>"><button type="button" class="col-md-3 btn btn-primary "><i class="fa fa-arrow-left" style="font-size: 17px;"></i> Back</button></a>
                                            <a style="font-size: 14px;"><button type="submit" class="col-md-5 btn btn-primary "><i class="fa fa-send" style="font-size: 14px;"></i> Kirim ke Admin</button></a>
                                        </div>
                                    </div>
                                    </form>
                                <?php } ?>
                            </section>


                        </div>

                    </div>


                    <!-- admin/template/dashboard_footer -->