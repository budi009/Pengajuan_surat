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
                            <h3>Tambah Pertanyaan</h3>
                          </div>

                        </div>
                        <section>
                         
                            <form action="<?= base_url('admin/tambahpertanyaan'); ?>" method="post">

                              <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Pertanyaan
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                <!-- <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $et->id_pertanyaan ?>"> -->

                                    <input type="text" id="pertanyaan" name="pertanyaan" class="form-control">
                                  
                                </div>
                              </div>
                              
                              <div class="ln_solid"></div>
                              <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-4">
                                  <a style="font-size: 20px;"><a href="<?= base_url('admin/konfigurasi_kuisioner') ?>" class="col-12 col-md-3 btn btn-primary "><i class="fa fa-arrow-left" style="font-size: 17px;"></i> Back</a></a>
                                  <a style="font-size: 20px;"><button type="submit" class="col-12 col-md-3 btn btn-primary "><i class="fa fa-check-square-o" style="font-size: 17px;"></i> Simpan</button></a>
                                </div>
                              </div>
                            </form>
                          
                        </section>



                      </div>

                    </div>


                    <!-- admin/template/dashboard_footer -->