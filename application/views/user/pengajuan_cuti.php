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
  
            <?php echo form_open_multipart('user/surat2'); ?>


              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Scan Persetujuan Surat Cuti<span style="color: red;" class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <a style="font-size: 20px;" href="<?= base_url('user/form_cuti')?>"><button type="button" class="col-8 col-md-3 btn btn-primary "><i style="font-size: 14px;"></i> Form Surat Cuti</button></a>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Scan Persetujuan Surat Cuti<span style="color: red;" class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
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