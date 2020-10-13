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
            <div>
            <!-- <a style="font-size: 20px;" href="<?= base_url('user/form_cuti')?>"><button type="button" class="col-8 col-md-3 btn btn-primary "><i style="font-size: 14px;"></i> Form Surat Cuti</button></a> -->
              
              <span style="color: red; font-size: 16px;">
                *) Wajib diisi
              </span>
            </div>
            <br />
  
            <?php echo form_open_multipart('user/surat2'); ?>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Lengkap <span style="color: red;" class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="hidden" id="nama" name="nama" value="<?= $user['nama_user']; ?>" required="required" class="form-control ">
                  <input type="text" disabled id="nama" name="nama" value="<?= $user['nama_user']; ?>" required="required" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIM <span style="color: red;" class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="hidden" id="nim" name="nim" value="<?= $user['id_user']; ?>" required="required" class="form-control">
                  <input type="text" disabled id="nim" name="nim" value="<?= $user['id_user']; ?>" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 label-align">Program Studi <span style="color: red;" class="required">*</span></label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="hidden" id="prodi" name="prodi" value="<?php
                                                                foreach ($prodi as $pr) {
                                                                  echo $pr->nama_prodi;
                                                                } ?>" required="required" class="form-control">
                  <input type="text" disabled id="prodi" name="prodi" value="<?php
                                                                foreach ($prodi as $pr) {
                                                                  echo $pr->nama_prodi;
                                                                } ?>" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 label-align">Semester <span style="color: red;" class="required">*</span></label>
                <div class="col-md-6 col-sm-6 ">
                  <select required name="semester" id="semester" class="form-control">
                    <option value="">Pilih Semester (Saat ini) </option>
                    <?php
                    foreach ($semester->result() as $sm) {
                      echo "<option value" . $sm->id_semester . ">" . $sm->semester . "</options>";
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Lama Cuti<span style="color: red;" class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="cuti1" name="cuti1" required="required" class="form-control" value="<?= set_value('cuti1'); ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Mulai Cuti Semester<span style="color: red;" class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="cuti2" name="cuti2" required="required" class="form-control" value="<?= set_value('cuti2'); ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Cuti Sampai Semester<span style="color: red;" class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="cuti3" name="cuti3" required="required" class="form-control" value="<?= set_value('cuti3'); ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Alasan Cuti<span style="color: red;" class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <textarea type="text" id="cuti4" name="cuti4" required="required" class="form-control" value="<?= set_value('cuti4'); ?>"></textarea>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-5">
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
              </div>
              <div class="ln_solid"></div>
              <?php echo form_close(); ?>

              <?php echo form_open_multipart('user/update_formcuti'); ?>
              <div class="item form-group">
                <!-- <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Scan Persetujuan Surat Cuti<span style="color: red;" class="required">*</span>
                </label> -->
                <div class="col-md-6 col-sm-6 offset-md-4">
                  <?php foreach ($data_cuti as $dc) {?>
                  <?php if ($dc->nim == $this->session->userdata('id_user') ) {
                    // var_dump($dc->nama_user);
                    // die;
                  ?>
                <a style="font-size: 20px;" href="<?= base_url('user/form_cuti')?>"><button type="button" class="col-8 col-md-3 btn btn-primary "><i style="font-size: 14px;"></i> Form Surat Cuti</button></a>
                
                <?php } else {?>
                  
                  <a disabled style="font-size: 20px;" href="<?= base_url('user/form_cuti')?>"><button type="button" disabled class="col-8 col-md-3 btn btn-primary "><i style="font-size: 14px;"></i> Form Surat Cuti</button></a>

                <?php }?>
                <?php }?>
              </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Scan Persetujuan Surat Cuti<span style="color: red;" class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="hidden" id="nim2" name="nim2" value="<?= $user['id_user']; ?>" required="required" class="form-control">
                  <input type="file" id="form_c" name="form_c" required="required" class="form-control" value="<?= set_value('cuti4'); ?>"></input>
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-5">
                <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
              <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- /top tiles -->
    <!-- </div> -->

    <!-- adminprodi/template/dashboard_footer -->