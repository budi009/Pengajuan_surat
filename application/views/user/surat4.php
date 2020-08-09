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
            <br />
            <form action="<?= base_url('user/surat4'); ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

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
              <!-- <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 label-align">Prodi <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="prodi" id="prodi" class="form-control">
                            <?php
                            foreach ($prodi->result() as $pr) {
                              echo "<option value" . $pr->prodi_id . ">" . $pr->nama_prodi . "</options>";
                            }
                            ?>
                        </select>
                        </div>
                      </div> -->
              <div class="form-group row">
                <label class="control-label col-md-3 col-sm-3 label-align">Semester <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 ">
                  <select name="semester" id="semester" class="form-control">

                    <?php
                    foreach ($semester->result() as $sm) {
                      echo "<option value" . $sm->id_semester . ">" . $sm->semester . "</options>";
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Telp/HP<span class="required">*</span>
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
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Alasan Mengundurkan Diri<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <textarea type="text" id="alasankeluar" name="alasankeluar" required="required" class="form-control"></textarea>
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