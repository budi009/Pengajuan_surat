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
    <?php foreach($surat_aktif_kuliah as $ak) { ?>
    <form action="<?= base_url('admin/updatesurataktif'); ?>" method="post">
    
<div class="form-group row">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nomor Surat
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="nosu" name="nosu" class="form-control" value="<?php echo $ak->nomor_surat ?>">
            </div>
          </div>
<div class="form-group row">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> NIM
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $ak->id ?>">
          <input type="text" id="nim" name="nim" class="form-control" value="<?php echo $ak->nim ?>">
        </div>
      </div>
<div class="form-group row">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Lengkap
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $ak->nama ?>">
        </div>
      </div>
<div class="form-group row">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Prodi
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="prodi" name="prodi" class="form-control" value="<?php echo $ak->prodi_id ?>">
        </div>
      </div> 
      <div class="ln_solid"></div>
     <div class="item form-group">
     <div class="col-md-6 col-sm-6 offset-md-5">
     <button type="submit" class="btn btn-success">Simpan</button>
      </div>
       </div>
  </form>
  <?php } ?>
  </section>

              

    </div>
   
  </div>
  
            
      <!-- admin/template/dashboard_footer -->