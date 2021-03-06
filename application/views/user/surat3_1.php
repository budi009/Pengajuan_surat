<!-- Surat pengantar KP -->

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
                <h3>Surat Pengantar KP/MKI Akademik</h3>
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
                        <div>
                            <span style="color: red; font-size: 16px;">
                                *) Wajib diisi
                            </span>
                        </div>
                        <br />
                        <?php echo form_open_multipart('user/surat3_1'); ?>
                        <div class="item form-group">
                            <label class="col-form-label ">
                            </label>
                            <div class="col-md-6">
                                <input type="text" id="nama1" name="nama1" placeholder="Nama Anggota 1" required="required" class="form-control">
                            </div>
                            <label class="col-form-label " for="last-name">
                            </label>
                            <div class="col-md-6 ">
                                <input type="number" id="nim1" name="nim1" placeholder="Nim Anggota 1" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label ">
                            </label>
                            <div class="col-md-6">
                                <input type="text" id="nama2" name="nama2" placeholder="Nama Anggota 2" class="form-control">
                            </div>
                            <label class="col-form-label " for="last-name">
                            </label>
                            <div class="col-md-6 ">
                                <input type="number" id="nim2" name="nim2" placeholder="Nim Anggota 2" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label ">
                            </label>
                            <div class="col-md-6">
                                <input type="text" id="nama3" name="nama3" placeholder="Nama Anggota 3" class="form-control">
                            </div>
                            <label class="col-form-label " for="last-name">
                            </label>
                            <div class="col-md-6 ">
                                <input type="number" id="nim3" name="nim3" placeholder="Nim Anggota 3" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label ">
                            </label>
                            <div class="col-md-6">
                                <input type="text" id="nama4" name="nama4" placeholder="Nama Anggota 4" class="form-control">
                            </div>
                            <label class="col-form-label " for="last-name">
                            </label>
                            <div class="col-md-6 ">
                                <input type="number" id="nim4" name="nim4" placeholder="Nim Anggota 4" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label ">
                            </label>
                            <div class="col-md-6">
                                <input type="text" id="nama5" name="nama5" placeholder="Nama Anggota 5" class="form-control">
                            </div>
                            <label class="col-form-label " for="last-name">
                            </label>
                            <div class="col-md-6 ">
                                <input type="number" id="nim5" name="nim5" placeholder="Nim Anggota 5" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 label-align"> Nama Tempat KP/MKI <span style="color: red;" class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="tempat" name="tempat" class="form-control" required="required">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 label-align"> Waktu KP<span style="color: red;" class="required">*</span></label>
                        <div class="col-md-4 ">
                            <input type="date" id="waktu_mulai" name="waktu_mulai" class="form-control " required="required">
                        </div>
                        <span class="control-label label-align">Sampai</span>
                        <div class="col-md-4  ">
                            <input type="date" id="waktu_selesai" name="waktu_selesai" class="form-control " required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 label-align"> Alamat Tempat KP/MKI <span style="color: red;" class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea type="text" id="alamat" name="alamat" class="form-control" required="required"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 label-align">Program Studi <span style="color: red;" class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="prodi" id="prodi" class="form-control">
                            <option required value="">Program Studi </option>
                            <?php
                            foreach ($prodi->result() as $pr) {
                                echo "<option value=" . $pr->prodi_id . ">" . $pr->nama_prodi . "</options>";
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 label-align"> Surat Pengantar Prodi <span style="color: red;" class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="file" id="sp_prodi" name="sp_prodi" class="form-control" required="required">
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