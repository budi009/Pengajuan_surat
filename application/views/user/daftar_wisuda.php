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
        <h3>Daftar Wisuda</h3>
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
              <span style="color: red; font-size: 16px;">
                *) Wajib diisi
              </span>
            </div>
            <br />
            <?php echo form_open_multipart('user/daftar_wisuda'); ?>

            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama sesuai ijazah terakhir <span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="nama" name="nama" required="required" class="form-control ">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIM Mahasiswa 
              </label>
              <div class="col-md-6 col-sm-6 ">
             

                <input type="hidden" id="nim" name="nim" required="required" value="<?= $user['id_user']; ?>" class="form-control">
                <input type="text" disabled id="nim" name="nim" value="<?= $user['id_user']; ?>" required="required" class="form-control">

              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIK KTP <span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="nik" name="nik" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 label-align">Program Studi </label>
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
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Jenis Kelamin <span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="jk" name="jk" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tempat Lahir <span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="ttl1" name="ttl1" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tanggal Lahir <span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="date" id="ttl2" name="ttl2" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">No Hp yang aktif<span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="hp" name="hp" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tanggal Sidang Akhir<span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="sidang" name="sidang" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">JUDUL KP/MKI YNG SUDAH FIX (BAHASA INDONESIA)<span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="kp1" name="kp1" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">JUDUL KP/MKI YNG SUDAH FIX (BAHASA INGGRIS)<span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="kp2" name="kp2" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">JUDUL PA/TA YNG SUDAH FIX (BAHASA INDONESIA)<span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="ta1" name="ta1" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">JUDUL PA/TA YNG SUDAH FIX (BAHASA INGGRIS)<span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="ta2" name="ta2" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Alamat Lengkap sesuai KTP/KK<span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="alamat" name="alamat" required="required" class="form-control">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Alamat Sosial Media<span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <textarea type="text" id="sosmed" name="sosmed" required="required" class="form-control"></textarea>
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Foto 4x6 Warna Abu-abu<span style="color: red;" class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="file" id="foto" name="foto" required="required" class="form-control">
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