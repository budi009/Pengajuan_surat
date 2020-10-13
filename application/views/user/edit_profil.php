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
                <h3>Edit Profile</h3>
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
                        <?php echo form_open_multipart('user/update_profil'); ?>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Lengkap
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="nama" name="nama" value="<?= $user['nama_user']; ?>" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIM
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="hidden"  id="nim" name="nim" value="<?= $user['id_user']; ?>" class="form-control">
                                <input type="text" disabled id="nim" name="nim" value="<?= $user['id_user']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 label-align">Prodi </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="hidden" id="prodi" name="prodi" value="<?= $user['prodi']; ?>" class="form-control">
                                <input type="text" disabled id="prodi" name="prodi" value="<?= $user['prodi']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 label-align">Kelas </label>
                            <div class="col-md-6 col-sm-6 ">
                            <select required id="kelas" name="kelas" class="form-control">
                            <option  value="">-Pilih Kelas-</option>
                            <?php foreach($kelas as $k) { 
                                echo "<option value=" . $k->id_kelas . ">" . $k->kelas . "</options>";
                             }?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 label-align">Foto Profil </label>
                            <div class="form-group row col-md-2">
                                <img src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-md-4 ">
                                <input type="file" id="gambar" name="gambar" class="form-control">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-4">
                                <a style="font-size: 20px;" href="<?= base_url('user/profile')?>"><button type="button" class="col-12 col-md-3 btn btn-primary "><i class="fa fa-arrow-left" style="font-size: 17px;"></i> Back</button></a>
                                <a style="font-size: 20px;"><button type="submit" class="col-12 col-md-3 btn btn-primary "><i class="fa fa-check-square-o" style="font-size: 17px;"></i> Simpan</button></a>
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