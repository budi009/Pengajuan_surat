<!-- kuisioner -->

<!-- adminprodi/template/dashboard_header -->

<!-- sidebar menu -->
<!-- adminprodi/template/dasboard_side -->
<!-- /sidebar menu -->

<!-- top navigation -->
<!-- adminprodi/template/dasboard_top -->
<!-- /top navigation -->

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>KUISIONER KINERJA DOSEN</h3>
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

            <form name="form1" action="<?= base_url('user/kuisioner'); ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Lengkap <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" disabled id="nama" value="<?= $user['nama_user']; ?>" name="nama" required="required" class="form-control ">
              </div>
            </div>
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIM <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="hidden" id="nim" value="<?= $user['id_user']; ?>" name="nim" required="required" class="form-control">
                <input type="text" disabled id="nim" value="<?= $user['id_user']; ?>" name="nim" required="required" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3 col-sm-3 label-align">Prodi <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" disabled id="prodi" value="<?= $user['prodi']; ?>" name="prodi" required="required" class="form-control ">
                <!-- <select name="prodi" id="prodi" class="form-control">
                            <?php
                            foreach ($prodi->result() as $pr) {
                              echo "<option value" . $pr->prodi_id . ">" . $pr->nama_prodi . "</options>";
                            }
                            ?>
                          </select> -->
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3 col-sm-3 label-align">Kelas <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" disabled id="kelas" value="<?= $user['kelas']; ?>" name="kelas" required="required" class="form-control ">
                <!-- <select name="kelas" id="kelas" class="form-control">
                            <?php
                            foreach ($kelas->result() as $kl) {
                              echo "<option value" . $kl->id_kelas . ">" . $kl->kelas . "</options>";
                            }
                            ?>
                          </select> -->
              </div>
            </div>
            <div class="ln_solid"></div>

            <ul class="nav nav-tabs">
              <li ><a data-toggle="tab" href="#home">Home</a></li>
              <li ><a data-toggle="tab" href="#menu1">Home</a></li>
              
            </ul>
            <div class="x_title">
              <h2>DOSEN</h2>

              <div class="clearfix"></div>
            </div>
            
            <div class="tab-content">
              <div id="home" class="tab-pane fade ">
                <div><?php $this->load->view('user/form_kuisioner/form_soal_kuisioner'); ?></div>
              </div>
              <div id="menu1"  class="tab-pane fade" >
                <div><?php $this->load->view('user/form_kuisioner/form_soal_kuisioner2'); ?></div>
              </div>
                         
             
            </div>

            </form>
            
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- /top tiles -->
<!-- </div> -->

<!-- adminprodi/template/dashboard_footer -->
<!-- <script>
  $(document).ready(function() {

    $('#matkul').change(function() {
      var id_mata_kuliah = $('#matkul').val();
      // if(id_mata_kuliah != ''){
      $.ajax({
        url: "<?php echo base_url(); ?>user/pilih_dosen",
        method: "POST",
        data: {
          id_mata_kuliah: id_mata_kuliah
        },
        success: function(data) {
          $('#dosen').html(data);

        }
      })

      // } 
    })
  })
</script> -->

<script src="<?= base_url('assets'); ?>../build/js/custom.min.js"></script>


