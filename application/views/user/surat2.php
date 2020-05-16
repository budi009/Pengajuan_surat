<!-- Surat Cuti -->

<!-- adminprodi/template/dashboard_header -->

          <!-- sidebar menu -->
                     <!-- adminprodi/template/dasboard_side -->
          <!-- /sidebar menu -->

          <!-- top navigation -->
                   <!-- adminprodi/template/dasboard_top -->
          <!-- /top navigation -->

        <!-- page content -->
        <!-- <div class="right_col" role="main"> -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Surat Pengajuan Cuti</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>DATA MAHASISWA</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="<?= base_url('user/surat2'); ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Lengkap <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="nama" name="nama" required="required" class="form-control" value="<?= set_value('nama'); ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIM <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="nim" name="nim" required="required" class="form-control" value="<?= set_value('nim'); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 label-align">Prodi <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                        <!-- <input type="text" id="prodi" name="prodi" class="form-control "> -->
                          <select name="prodi" id="prodi" class="form-control">
                            <?php  
                              foreach($prodi->result() as $pr){
                                  echo "<option value".$pr->prodi_id.">".$pr->nama_prodi."</options>";
                              }
                            ?>
                          <!-- <option >Prodi</option>
                            <option value="TI">Teknik Informatika</option>
                            <option value="TM">Teknik Mesin</option>
                            <option value="TS">Teknik Sipil</option>
                            <option value="AGB">Agribisnis</option>
                            <option value="TMK">Teknik Manufaktur Kapal</option>
                            <option value="MBP">Manajemen Bisnis Pariwisata</option>
                            <option value="TPHT">Teknologi Pengolahan Hasil Ternak</option> -->
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 label-align">Semester <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="semester" name="semester" class="form-control "value="<?= set_value('semester'); ?>">
                          <!-- <select class="form-control">
                            <option>Semester</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select> -->
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Lama Cuti<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="cuti1" name="cuti1" required="required" class="form-control" value="<?= set_value('cuti1'); ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Mulai Cuti Semester<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="cuti2" name="cuti2" required="required" class="form-control" value="<?= set_value('cuti2'); ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Cuti Sampai Semester<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="cuti3" name="cuti3" required="required" class="form-control" value="<?= set_value('cuti3'); ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Alasan Cuti<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea type="text" id="cuti4" name="cuti4" required="required" class="form-control" value="<?= set_value('cuti4'); ?>"></textarea>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-5">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <!-- /top tiles -->
      <!-- </div> -->

<!-- adminprodi/template/dashboard_footer -->
          