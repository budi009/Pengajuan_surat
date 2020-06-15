<!-- kuisioner -->

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
                    <form action="<?= base_url('user/kuisioner'); ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Nama Lengkap <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="nama" name="nama" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIM <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" id="nim" name="nim" required="required" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 label-align">Prodi <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="prodi" id="prodi" class="form-control">
                            <?php  
                              foreach($prodi->result() as $pr){
                                  echo "<option value".$pr->prodi_id.">".$pr->nama_prodi."</options>";
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 label-align">Kelas <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="kelas" name="kelas" required="required" class="form-control">

                        <!-- <select name="semester" id="semester" class="form-control">
                          </select> -->
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      
                      <div class="x_title">
                    <h2>DOSEN</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Dosen<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                        <select name="dosen" id="dosen" class="form-control">
                            <?php  
                              foreach($dosen->result() as $ds){
                                  echo "<option value".$ds->nik_dosen.">".$ds->nama_dosen."</options>";
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                    
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Mata Kuliah yang diampu<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="matkul" name="matkul" class="date-picker form-control" type="text">
                        </div>
                      </div>
                      

                      <div class="ln_solid"></div>

                        <div class="x_title">
                            <h2>KUISIONER (EVALUASI TEORI)</h2>
                             <div class="clearfix"></div>
                        </div>
                        <p >
                       <a style="font-size: 16px;"> 1.	Rencana materi dan tujuan mata kuliah diberikan di awal perkuliahan </a>
                        </p>
                          <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="1" id="optionsRadios" name="optionsRadios"> 1
                            </label>
                          </div>
                          <div class="radio col-md-2">         
                            <label>
                              <input  type="radio" value="2" id="optionsRadios" name="optionsRadios"> 2
                            </label>
                          </div>
                          <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="3" id="optionsRadios" name="optionsRadios"> 3
                            </label>
                          </div>
                          <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="4" id="optionsRadios" name="optionsRadios"> 4
                            </label>
                          </div>
                          <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="5" id="Kegiatan Lomba" name="optionsRadios"> 5
                            </label>
                          </div>
                          <br>
                      <div class="ln_solid"></div>

                      <p >
                       <a style="font-size: 16px;"> 2.	Dosen datang tepat waktu dan mengajar sesuai waktu yang terjadwal </a>
                        </p>
                      <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="1" id="optionsRadios1" name="optionsRadios1"> 1
                            </label>
                          </div>
                          <div class="radio col-md-2">         
                            <label>
                              <input  type="radio" value="2" id="optionsRadios1" name="optionsRadios1"> 2
                            </label>
                          </div>
                          <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="3" id="optionsRadios1" name="optionsRadios1"> 3
                            </label>
                          </div>
                          <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="4" id="optionsRadios1" name="optionsRadios1"> 4
                            </label>
                          </div>
                          <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="5" id="optionsRadios1" name="optionsRadios1"> 5
                            </label>
                          </div>

                          <br>
                      <div class="ln_solid"></div>

                      <p >
                       <a style="font-size: 16px;"> 3.	Diadakan diskusi dan tanya jawab </a>
                        </p>
                      <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="1" id="optionsRadios2" name="optionsRadios2"> 1
                            </label>
                          </div>
                          <div class="radio col-md-2">         
                            <label>
                              <input  type="radio" value="2" id="optionsRadios2" name="optionsRadios2"> 2
                            </label>
                          </div>
                          <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="3" id="optionsRadios2" name="optionsRadios2"> 3
                            </label>
                          </div>
                          <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="4" id="optionsRadios2" name="optionsRadios2"> 4
                            </label>
                          </div>
                          <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="5" id="optionsRadios2" name="optionsRadios2"> 5
                            </label>
                          </div>

                          <br>
                          <div class="ln_solid"></div>

                          
                      <p >
                       <a style="font-size: 16px;"> 3.	Diadakan diskusi dan tanya jawab </a>
                        </p>
                      <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="1" id="optionsRadios3" name="optionsRadios3"> 1
                            </label>
                          </div>
                          <div class="radio col-md-2">         
                            <label>
                              <input  type="radio" value="2" id="optionsRadios3" name="optionsRadios3"> 2
                            </label>
                          </div>
                          <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="3" id="optionsRadios3" name="optionsRadios3"> 3
                            </label>
                          </div>
                          <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="4" id="optionsRadios3" name="optionsRadios3"> 4
                            </label>
                          </div>
                          <div class="radio col-md-2">
                            <label>
                              <input type="radio" value="5" id="optionsRadios3" name="optionsRadios3"> 5
                            </label>
                          </div>

                          <br>
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
          