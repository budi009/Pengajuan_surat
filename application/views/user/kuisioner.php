<!-- kuisioner -->

<!-- adminprodi/template/dashboard_header -->

<!-- sidebar menu -->
<!-- adminprodi/template/dasboard_side -->
<!-- /sidebar menu -->

<!-- top navigation -->
<!-- adminprodi/template/dasboard_top -->
<!-- /top navigation -->
<style>
  #mg {

    margin-right: 20px;
  }
</style>
<!-- page content -->
<!-- <div class="right_col" role="main"> -->
<script type="text/javascript" src="<?= base_url('assets'); ?>../vendors/jquery/dist/jquery-3.5.1.js"></script>
<!-- <script type="text/javascript" src="<?= base_url('assets'); ?>../vendors/jquery/dist/jquery-3.5.1.min.js"></script> -->
<!-- page content -->
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
            <!-- <div>
              <span style="color: red; font-size: 16px;">
                *) Wajib diisi
              </span>
            </div> -->
            <br />

            <form name="form1" action="<?= base_url('user/kuisioner'); ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Lengkap
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" disabled id="nama" value="<?= $user['nama_user']; ?>" name="nama" required="required" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIM
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="hidden" id="nim" value="<?= $user['id_user']; ?>" name="nim" required="required" class="form-control">
                  <input type="text" disabled id="nim" value="<?= $user['id_user']; ?>" name="nim" required="required" class="form-control">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 label-align">Program Studi </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" disabled id="prodi" value="<?php
                                                                foreach ($prodi as $pr) {
                                                                  echo $pr->nama_prodi;
                                                                } ?>" name="prodi" required="required" class="form-control ">

                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 label-align" for="last-name">Kelas</label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" disabled id="kelas" value="<?php
                                                                foreach ($kelas as $kl) {
                                                                  echo $kl->kelas;
                                                                }
                                                                ?>" name="kelas" required="required" class="form-control ">

                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="x_title">
                <!-- <h2>Telah mengisi Kuisioner</h2>
                <div class="clearfix"></div>
                <div class="ln_solid"></div>
                <?php
                foreach ($dosenmat as $d) {
                ?>
                  <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 label-align"></label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" disabled value="<?= $d->mata_kuliah ?>" class="form-control ">
                    </div>
                  </div>

                <?php } ?> -->



                <!-- <div class="item form-group">
                  <div class="col-md-2 offset-md-5">
                    <a class="col-md-12 btn btn-primary  " href="<?= base_url('user/update_kuisioner'); ?>"> Selesai</a>
                  </div>
                </div> -->



                <!-- <ul class="nav nav-tabs">
                <li><a data-toggle="tab" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#menu1">Home</a></li>

              </ul> -->
                <div class="x_title">
                  <h2>KUISIONER</h2>

                  <div class="clearfix"></div>
                </div>
                <?php foreach ($matkul as $dsm) { ?>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 label-align" for="last-name"><?= $dsm->mata_kuliah ?></php></label>
                    <?php
                    $user = $this->session->userdata('id_user');
                    $kelas = $this->session->userdata('id_kelas');
                    $prodi = $this->session->userdata('prodi');
                    $jml_matkul = "SELECT * FROM detail_kelas WHERE id_mata_kuliah = $dsm->id_mata_kuliah AND id_prodi=$prodi";
                    $jml_mengisi = "SELECT * FROM jawaban_kuisioner WHERE id_user = $user";
                    $sql = "SELECT * FROM jawaban_kuisioner WHERE id_user = $user AND id_mata_kuliah = $dsm->id_mata_kuliah";
                    $query = $this->db->query($sql);
                    $query_matkul = $this->db->query($jml_matkul);
                    $query_matkul_mengisi = $this->db->query($jml_mengisi);
                    // var_dump($query_matkul_mengisi->num_rows());
                    // die;$query_matkul->num_rows() == $query_matkul_mengisi->num_rows()
                    if ($query->num_rows() > 0) {
                    ?>
                      <div class="col-md-6 col-sm-6 ">
                        <!-- <button disabled class="col-sm-3 btn btn-primary" href="<?= base_url('user/isi_kuisioner/' . $dsm->id_mata_kuliah) ?>">Telah Diisi Semua</button> -->
                        <button disabled class="col-sm-3 btn btn-primary" href="<?= base_url('user/isi_kuisioner/' . $dsm->id_mata_kuliah) ?>">Telah Diisi</button>

                      </div>
                    

                      <div class="col-md-6 col-sm-6 ">
                      </div>
                    <?php } else { ?>
                      <div class="col-md-6 col-sm-6 ">
                        <a class="col-sm-3 btn btn-primary" href="<?= base_url('user/isi_kuisioner/' . $dsm->id_mata_kuliah) ?>">Isi Kuisioner</a>
                      </div>
                    <?php } ?>
                    <div class="clearfix"></div>

                  </div>
                <?php } ?>

                <!-- <div class="item form-group">
                  <input type="hidden" name="datanyadosen" id="datanyadosen">
                  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Dosen</label>
                  <div class="col-md-6 col-sm-6" id="dosen" name="dosen">
                    <select name="dosen" id="dosen" class="form-control" required>
                  <option value="-"> -Pilih Mata Kuliah- </option>
                   
                  </select>
                    <input disabled class="form-control" type="text">
                  </div>
                </div> -->




            </form>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- /top tiles -->
<!-- </div> -->
<script src="<?= base_url('assets'); ?>../vendors/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets'); ?>../vendors/jquery/dist/jquery-3.5.1.js"></script>
<!-- <script src="<?= base_url('assets'); ?>../build/js/custom.min.js"></script> -->
<!-- adminprodi/template/dashboard_footer -->
<script>
  $(document).ready(function() {

    $('#matkul').change(function() {
      var id_mata_kuliah = $('#matkul').val();
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
    })
  })
</script>
<script type="text/javascript">
  function selectAll(form1) {

    var check = document.getElementsByName("optionsRadio"),
      radios = document.form1.elements;

    //If the first radio is checked
    if (check[0].checked) {

      for (i = 0; i < radios.length; i++) {

        //And the elements are radios
        if (radios[i].type == "radio") {

          //And the radio elements's value are 1
          if (radios[i].value == 1) {
            //Check all radio elements with value = 1
            radios[i].checked = true;
          }

        } //if

      } //for

      //If the second radio is checked
    } else if (check[1].checked) {

      for (i = 0; i < radios.length; i++) {

        //And the elements are radios
        if (radios[i].type == "radio") {

          //And the radio elements's value are 0
          if (radios[i].value == 2) {

            //Check all radio elements with value = 0
            radios[i].checked = true;

          }

        } //if

      } //for

    } //if
    else if (check[2].checked) {

      for (i = 0; i < radios.length; i++) {

        //And the elements are radios
        if (radios[i].type == "radio") {

          //And the radio elements's value are 0
          if (radios[i].value == 3) {

            //Check all radio elements with value = 0
            radios[i].checked = true;

          }

        } //if

      } //for

    } //if
    else if (check[3].checked) {

      for (i = 0; i < radios.length; i++) {

        //And the elements are radios
        if (radios[i].type == "radio") {

          //And the radio elements's value are 0
          if (radios[i].value == 4) {

            //Check all radio elements with value = 0
            radios[i].checked = true;

          }

        } //if

      } //for

    } //if
    else if (check[4].checked) {

      for (i = 0; i < radios.length; i++) {

        //And the elements are radios
        if (radios[i].type == "radio") {

          //And the radio elements's value are 0
          if (radios[i].value == 5) {

            //Check all radio elements with value = 0
            radios[i].checked = true;

          }

        } //if

      } //for

    }; //if
    return null;
  }
</script>