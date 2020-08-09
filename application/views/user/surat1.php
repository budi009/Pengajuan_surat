<!-- Surat Keterangan Aktif Kuliah -->

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
        <h3>Surat Keterangan Aktif Kuliah</h3>
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
            <?php echo form_open_multipart('user/surat1'); ?>


              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Lengkap <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="hidden" id="nama" name="nama" value="<?= $user['nama_user']; ?>" required="required" class="form-control ">
                  <input type="text" disabled id="nama" name="nama" value="<?= $user['nama_user']; ?>" required="required" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIM <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="hidden" id="nim" name="nim" value="<?= $user['id_user']; ?>" required="required" class="form-control">
                  <input type="text" disabled id="nim" name="nim" value="<?= $user['id_user']; ?>" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 label-align">Prodi <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="hidden" id="prodi" name="prodi" value="<?= $user['prodi']; ?>" required="required" class="form-control">
                  <input type="text" disabled id="prodi" name="prodi" value="<?= $user['prodi']; ?>" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 label-align">Semester <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 ">
                  <select name="semester" id="semester" class="form-control" required="required">
                    <option value="">Pilih Semester (Saat ini) </option>
                    <?php
                    foreach ($semester->result() as $sm) {
                      echo "<option value" . $sm->id_semester . ">" . $sm->semester . "</options>";
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 label-align">Tahun Angkatan <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 ">
                  <select id="th_angkatan" name="th_angkatan" class="form-control">
                    <?php
                    foreach ($th_angkatan->result() as $ang) {
                      echo "<option value" . $ang->tha_id . ">" . $ang->tahun_angkatan . "</options>";
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 label-align">Tahun Akademik <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 ">
                  <select id="th_akademik" name="th_akademik" class="form-control" required="required">
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                  </select>
                </div>
              </div>

              <div class="ln_solid"></div>
              <h2>DATA ORANG TUA</h2>
              <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Orang Tua<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="nama_ortu" class="form-control" type="text" name="nama_ortu" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat Lengkap<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <textarea id="alamat_ortu" name="alamat_ortu" class="date-picker form-control" type="text" required="required"></textarea>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="pekerjaan_ortu" name="pekerjaan_ortu" class="date-picker form-control" type="text" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">NIP
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="nip_ortu" name="nip_ortu" class="date-picker form-control" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Jabatan
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="jabatan_ortu" name="jabatan_ortu" class="date-picker form-control" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Instansi
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="instansi_ortu" name="instansi_ortu" class="date-picker form-control" type="text">
                </div>
              </div>

              <div class="ln_solid"></div>
              <h2>Syarat Pengajuan</h2>
              <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Scan KTP Ortu<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="ktp_ortu" class="form-control" type="file" name="ktp_ortu" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Scan KTM<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="ktm_mhs" name="ktm_mhs" class="date-picker form-control" type="file" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Scan Pedoman Akademik<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="pedoman" name="pedoman" class="date-picker form-control" type="file" required="required">
                </div>
              </div>
             

              <div class="ln_solid"></div>

              <h2>KEPERLUAN SURAT</h2>
              <div class="radio col-md-2">
                <label>
                  <input type="radio" checked="" value="Persyaratan Pengurusan Tunjangan Anak" id="optionsRadios" name="optionsRadios"> Persyaratan Pengurusan Tunjangan Anak
                </label>
              </div>
              <div class="radio col-md-2">
                <label>
                  <input type="radio" value="Persyaratan Pengurusan Pensiun" id="optionsRadios" name="optionsRadios"> Persyaratan Pengurusan Pensiun
                </label>
              </div>
              <div class="radio col-md-2">
                <label>
                  <input type="radio" value="Persyaratan Pengurusan BPJS" id="optionsRadios" name="optionsRadios"> Persyaratan Pengurusan BPJS
                </label>
              </div>
              <div class="radio col-md-2">
                <label>
                  <input type="radio" value="Beasiswa Pemerintah Daerah/Kota" id="optionsRadios" name="optionsRadios"> Beasiswa Pemerintah Daerah/Kota.........
                </label>
              </div>
              <div class="radio col-md-2">
                <label>
                  <input type="radio" value="Kegiatan Lomba" id="Kegiatan Lomba" name="optionsRadios"> Kegiatan Lomba
                </label>
              </div>

              <br><br>
              <div class="radio col-md-1">
                <label>
                  <input value="<?= set_value('lainnya'); ?>" type="radio" id="optionsRadios" name="optionsRadios"> Lainnya
                </label>
              </div>
              <div class="item form-group">
                <label>
                  <input type="text" id="lainnya" name="lainnya" >
                </label>
              </div>
              <br>
              <br>
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