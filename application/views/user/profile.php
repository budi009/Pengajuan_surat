                    <!-- admin/template/dashboard_header -->

                    <!-- sidebar menu -->
                    <!-- admin/template/dasboard_side -->
                    <!-- /sidebar menu -->

                    <!-- top navigation -->
                    <!-- admin/template/dasboard_top -->
                    <!-- /top navigation -->

                    <!-- page content -->
                    <meta charset="UTF-8">
                    <title>Basic Resposive</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <style>
                      .img {
                        max-width: 10%;
                        display: block;
                        height: auto;
                      }

                      .tengah {
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                      }
                    </style>
                    
                    <div class="right_col" role="main">
                      <!-- top tiles -->
                      
                      <h3 style="text-align: center; line-height: 4;">Profile User</h3>
                      <div>
                        <div class="tile_count">
                          <div class="col-md-12  ">
                            <img class="img tengah" src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>">
                          </div>
                          <div class="col-md-6 offset-md-5">
                            <h5 style="text-align: left;line-height: 2;">Nama : <?= $user['nama_user']; ?></h5>
                            <h5 style="text-align: left;line-height: 0;">NIM  : <?= $user['id_user']; ?></h5>
                            <h5 style="text-align: left;line-height: 2;">Prodi : <?= $user['prodi']; ?></h5>
                            <h5 style="text-align: left;line-height: 0;line-break: 1; ">Kelas : <?= $user['kelas']; ?></h5><br><br>
                            <a style="font-size: 20px;" href="<?= base_url('user/edit_profil')?>"><button type="button" class="col-12 col-md-4 btn btn-primary "><i class="fa fa-edit" style="font-size: 17px;"></i> Edit Profil</button></a>
                          </div>
                          <div class="col-md-4 offset-md-4">
                            <?= $this->session->flashdata('message'); ?>
                          </div>
                        </div>
                      </div>
                      <!-- /top tiles -->
                    </div>
                    <!-- adminprodi/template/dashboard_footer -->