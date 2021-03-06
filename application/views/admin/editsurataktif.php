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
                          <?php foreach ($surat_aktif_kuliah as $ak) { ?>
                            <form action="<?= base_url('admin/updatesurataktif'); ?>" method="post">

                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nomor Surat
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <?php if ($ak->nomor_surat == 0) { ?>
                                    <input type="text" disabled id="nosu" name="nosu" class="form-control" value="">
                                  <?php } else { ?>
                                    <input type="text" disabled id="nosu" name="nosu" class="form-control" value="<?php echo $ak->nomor_surat ?>">
                                  <?php } ?>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> NIM
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $ak->nomor_surat ?>">
                                  <input type="text" disabled id="nim" name="nim" class="form-control" value="<?php echo $ak->nim ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Lengkap
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <input type="text" disabled id="nama" name="nama" class="form-control" value="<?php echo $ak->nama_user ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Prodi
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <input type="text" disabled id="prodi" name="prodi" class="form-control" value="<?php echo $ak->nama_prodi ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Status Pengajuan
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <input type="text" id="status_pe" name="status_pe" class="form-control" value="<?php echo $ak->status_pengajuan ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Cetak Surat
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <select id="cetak" name="cetak" class="form-control" required="required">
                                    <option>Tanpa Qrcode</option>
                                    <option>Menggunakan Qrcode</option>
                                  </select>
                                </div>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-4">
                                  <a style="font-size: 20px;"><a href="<?= base_url('admin/surat_aktif_kuliah'); ?>" class="col-12 col-md-3 btn btn-primary "><i class="fa fa-arrow-left" style="font-size: 17px;"></i> Back</a></a>
                                  <a style="font-size: 20px;"><button type="submit" class="col-12 col-md-3 btn btn-primary "><i class="fa fa-check-square-o" style="font-size: 17px;"></i> Simpan</button></a>
                                </div>
                              </div>
                            </form>
                          <?php } ?>
                        </section>



                      </div>

                    </div>


                    <!-- admin/template/dashboard_footer -->