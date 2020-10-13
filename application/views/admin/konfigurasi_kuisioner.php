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
        <h3>Kofigurasi Kuisioner</h3>
      </div>


    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <!-- <h2>DATA MAHASISWA</h2> -->
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <div class="col-md-4">
                      <a style="size: 36px;" class="col-md-5 btn btn-success btn-lg fa fa-plus-circle" href="<?= base_url('admin/tambah') ?>"> Tambah Pertanyaan</a>
                    </div>
                    <table id="my" class="table table-striped table-bordered bulk_action" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Pertanyaan Kuisioner</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php
                      $id = 1;
                      foreach ($pertanyaan as $per) {
                      ?>
                        <tr>
                          <td><?php echo $id++ ?></td>
                          <td><?php echo $per->pertanyaan ?></td>
                          <td>
                            <a class="col-md-3 btn btn-warning fa fa-edit " href="<?= base_url('admin/editpertanyaan/') . $per->id_pertanyaan; ?>"></a>
                            <a class="col-md-3 btn btn-danger fa fa-trash " href="<?= base_url('admin/hapuspertanyaan/') . $per->id_pertanyaan; ?>"></a>

                          </td>
                        </tr>
                      <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /top tiles -->
<!-- </div> -->

<!-- adminprodi/template/dashboard_footer -->