<!-- Surat Mengundurkan Diri -->

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
        <h3>Surat Permohonan Mengundurkan Diri</h3>
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
            <!-- <a style="font-size: 20px;" href="<?= base_url('user/form_mundur')?>"><button type="button" class="col-12 col-md-3 btn btn-primary "><i style="font-size: 17px;"></i> Form Surat Mundur</button></a> -->

              <span style="color: red; font-size: 16px;">
                *) Wajib diisi
              </span>
            </div>
            <br />
            <?php echo form_open_multipart('user/surat4'); ?>

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
              <div class="item form-group">
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
              
              <div class="item form-group">
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
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Telp/HP<span style="color: red;" class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="hp1" name="hp1" placeholder="Telp Mahasiswa" required="required" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="hp2" name="hp2" placeholder="Telp Orang Tua/Wali" required="required" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Alasan Mengundurkan Diri<span style="color: red;" class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <textarea type="text" id="alasankeluar" name="alasankeluar" required="required" class="form-control"></textarea>
                </div>
              </div>
              <!-- <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Form persetujuan Surat Mundur<span style="color: red;" class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="file" id="form_m" name="form_m" required="required" class="form-control"></input>
                </div>
              </div> -->

              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-5">
                  <button type="submit" class="btn btn-success">save</button>
                </div>
              </div>
              <?php echo form_close(); ?>

              <?php echo form_open_multipart('user/update_formmundur'); ?>
              <div class="item form-group">
                <!-- <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Scan Persetujuan Surat Cuti<span style="color: red;" class="required">*</span>
                </label> -->
                <div class="col-md-6 col-sm-6 offset-md-4">
                  <?php foreach ($data_mundur as $dm) {?>
                  <?php if ($dm->nim == $this->session->userdata('id_user') ) {
                    // var_dump($dc->nama_user);
                    // die;
                  ?>
                  <a style="font-size: 20px;" href="<?= base_url('user/form_mundur')?>"><button type="button" class="col-12 col-md-3 btn btn-primary "><i style="font-size: 17px;"></i> Form Surat Mundur</button></a>
                
                <?php } else {?>
                  
                  <a style="font-size: 20px;" href="<?= base_url('user/form_mundur')?>"><button type="button" class="col-12 col-md-3 btn btn-primary "><i style="font-size: 17px;"></i> Form Surat Mundur</button></a>

                <?php }?>
                <?php }?>
              </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Scan Persetujuan Surat Cuti<span style="color: red;" class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="hidden" id="nim2" name="nim2" value="<?= $user['id_user']; ?>" required="required" class="form-control">
                  <input type="file" id="form_m" name="form_m" required="required" class="form-control" ></input>
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
  </div>
</div>
<!-- /top tiles -->
<!-- </div> -->

<!-- adminprodi/template/dashboard_footer -->