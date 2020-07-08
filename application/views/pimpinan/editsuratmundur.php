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
                <h3>Validasi Surat Mengundurkan Diri</h3>
              </div>

                </div>
                <section>
              <?php foreach($surat_mundur as $sm) { ?>
            <?= form_open_multipart('pimpinan/updatesuratmundur'); ?>
    
          
        <div class="form-group row">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> NIM 
            </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="hidden" id="id" name="id" class="form-control" value="<?php echo $sm->mundur_id ?>">
                <input type="text" readonly class="form-control" value="<?php echo $sm->nim ?>">
              </div>
        </div>
        <div class="form-group row">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Lengkap
           </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" readonly class="form-control" value="<?php echo $sm->nama ?>">
              </div>
        </div>
        <div class="form-group row">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Program Studi
           </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" readonly class="form-control" value="<?php echo $sm->prodi_id ?>">
              </div>
        </div>
        <div class="form-group row">
          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Alasan Mengundurkan Diri
           </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" readonly  class="form-control" value="<?php echo $sm->alasan ?>">
              </div>
        </div>
        <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-5">
            <a style="font-size: 20px;"><button type="submit" class="col-12 col-md-3 btn btn-primary " ><i class="fa fa-check-square-o" style="font-size: 17px;"></i>  Validasi</button></a>
            </div>
          </div>
      </form>
        <?php } ?>
      </section>

              

    </div>
   
  </div>
  
            
      <!-- admin/template/dashboard_footer -->