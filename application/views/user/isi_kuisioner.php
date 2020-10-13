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
<style>
    #mg {

        margin-right: 20px;
    }
</style>
<script type="text/javascript" src="<?= base_url('assets'); ?>../vendors/jquery/dist/jquery-3.5.1.js"></script>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <!-- <h3>Kuisioner</h3> -->
            </div>


        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>KUISIONER</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form name="form1" action="<?= base_url('user/isi_kuisioner2'); ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                            <input type="hidden" id="nim" value="<?= $user['id_user']; ?>" name="nim" required="required" class="form-control">
                            <input type="hidden" id="status" value="Sudah" name="status" required="required" class="form-control">
                    
                   
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Mata Kuliah
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="hidden" id="matkul" name="matkul" value="<?= $matkul['id_mata_kuliah'] ?>" class="form-control">
                            <input type="text" disabled id="matkul" name="matkul" value="<?= $matkul['mata_kuliah'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Dosen
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <?php foreach ($dosen as $do) { ?>
                                <input type="hidden" id="dosen" name="dosen" value="<?= $do->id_dosen ?>" class="form-control">
                                <input type="text" disabled id="dosen" name="dosen" value="<?= $do->nama_dosen ?>" class="form-control">

                            <?php } ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="ln_solid"></div>
                    <div class="x_title">
                        <h2>KUISIONER (EVALUASI TEORI)</h2>

                        <div class="radio col-md-5 offset-md-4">
                            <label id="mg">
                                <input type="radio" value="1" id="optionsRadio" name="optionsRadio" onclick="selectAll(form1)"> Semua 1
                            </label>


                            <label id="mg">
                                <input type="radio" value="2" id="optionsRadio" name="optionsRadio" onclick="selectAll(form1)"> Semua 2
                            </label>


                            <label id="mg">
                                <input type="radio" value="3" id="optionsRadio" name="optionsRadio" onclick="selectAll(form1)"> Semua 3
                            </label>


                            <label id="mg">
                                <input type="radio" value="4" id="optionsRadio" name="optionsRadio" onclick="selectAll(form1)"> Semua 4
                            </label>


                            <label id="mg">
                                <input type="radio" value="5" id="optionsRadio" name="optionsRadio" onclick="selectAll(form1)"> Semua 5
                            </label>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php
                    // for ($i = 0; $i < count($pertanyaan); $i++)
                    // var_dump($i);
                    // die;
                      foreach ($pertanyaan as $per) {
                      ?>
                        <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;">  <?php echo $per->pertanyaan ?></td> </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios" name="<?php echo 'optionsRadios'.$per->id_pertanyaan ?>"> 1
                        </label>
                        

                        <label id="mg">
                            <input type="radio" value="2" id="<?php echo 'optionsRadios'.$per->id_pertanyaan ?>" name="<?php echo 'optionsRadios'.$per->id_pertanyaan ?>"> 2
                        </label>


                        <label id="mg">
                            <input type="radio" value="3" id="<?php echo 'optionsRadios'.$per->id_pertanyaan ?>" name="<?php echo 'optionsRadios'.$per->id_pertanyaan ?>"> 3
                        </label>


                        <label id="mg">
                            <input type="radio" value="4" id="<?php echo 'optionsRadios'.$per->id_pertanyaan ?>" name="<?php echo 'optionsRadios'.$per->id_pertanyaan ?>"> 4
                        </label>


                        <label id="mg">
                            <input type="radio" value="5" id="<?php echo 'optionsRadios'.$per->id_pertanyaan ?>" name="<?php echo 'optionsRadios'.$per->id_pertanyaan ?>"> 5
                        </label>
                    </div>
                          
                      <?php } ?>


                    
                    <!-- <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 1. Rencana materi dan tujuan mata kuliah diberikan di awal perkuliahan </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios" name="optionsRadios"> 1
                        </label>


                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios" name="optionsRadios"> 2
                        </label>


                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios" name="optionsRadios"> 3
                        </label>


                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios" name="optionsRadios"> 4
                        </label>


                        <label id="mg">
                            <input type="radio" value="5" id="Kegiatan Lomba" name="optionsRadios"> 5
                        </label>
                    </div>
                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 2. Dosen datang tepat waktu dan mengajar sesuai waktu yang terjadwal </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios1" name="optionsRadios1"> 1
                        </label>


                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios1" name="optionsRadios1"> 2
                        </label>


                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios1" name="optionsRadios1"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios1" name="optionsRadios1"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios1" name="optionsRadios1"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 3. Diadakan diskusi dan tanya jawab </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios2" name="optionsRadios2"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios2" name="optionsRadios2"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios2" name="optionsRadios2"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios2" name="optionsRadios2"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios2" name="optionsRadios2"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 4. Manfaat soal latihan dalam menambah pemahaman mata kuliah </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios3" name="optionsRadios3"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios3" name="optionsRadios3"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios3" name="optionsRadios3"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios3" name="optionsRadios3"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios3" name="optionsRadios3"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 5. Kesesuaian evaluasi (tugas dan quiz) dengan materi yang diajarkan </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios4" name="optionsRadios4"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios4" name="optionsRadios4"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios4" name="optionsRadios4"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios4" name="optionsRadios4"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios4" name="optionsRadios4"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 6. Pembahasan soal, tugas, dan quiz yang diberikan </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios5" name="optionsRadios5"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios5" name="optionsRadios5"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios5" name="optionsRadios5"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios5" name="optionsRadios5"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios5" name="optionsRadios5"> 5
                        </label>
                    </div>


                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 7. Sistematika menjelaskan kuliah </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios6" name="optionsRadios6"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios6" name="optionsRadios6"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios6" name="optionsRadios6"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios6" name="optionsRadios6"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios6" name="optionsRadios6"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 8. Latihan soal terhadap setiap materi yang diberikan </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios7" name="optionsRadios7"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios7" name="optionsRadios7"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios7" name="optionsRadios7"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios7" name="optionsRadios7"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios7" name="optionsRadios7"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 9. Kesesuaian materi terhadap rencana dia awal perkuliahan </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios8" name="optionsRadios8"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios8" name="optionsRadios8"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios8" name="optionsRadios8"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios8" name="optionsRadios8"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios8" name="optionsRadios8"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 10. Kemampuan dosen dalam menjelaskan materi perkuliahan </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios9" name="optionsRadios9"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios9" name="optionsRadios9"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios9" name="optionsRadios9"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios9" name="optionsRadios9"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios9" name="optionsRadios9"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 11. Penguasaan materi, wawasan, dan implementasi mata kuliah ini </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios10" name="optionsRadios10"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios10" name="optionsRadios10"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios10" name="optionsRadios10"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios10" name="optionsRadios10"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios10" name="optionsRadios10"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 12. Kemampuan dosen menjawab pertanyaan </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios11" name="optionsRadios11"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios11" name="optionsRadios11"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios11" name="optionsRadios11"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios11" name="optionsRadios11"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios11" name="optionsRadios11"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 13. Semangat dosen dalam memberikan kuliah </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios12" name="optionsRadios12"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios12" name="optionsRadios12"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios12" name="optionsRadios12"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios12" name="optionsRadios12"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios12" name="optionsRadios12"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 14. Kemampuan dosen dalam memberikan motivasi/membangkitkan minat belajar </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios13" name="optionsRadios13"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios13" name="optionsRadios13"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios13" name="optionsRadios13"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios13" name="optionsRadios13"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios13" name="optionsRadios13"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 15. Bahan ajar (diktat/handout/file ppt) tersedia dengan baik </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios14" name="optionsRadios14"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios14" name="optionsRadios14"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios14" name="optionsRadios14"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios14" name="optionsRadios14"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios14" name="optionsRadios14"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 16. Buku referensi (textbook) tersedia dengan baik </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios15" name="optionsRadios15"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios15" name="optionsRadios15"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios15" name="optionsRadios15"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios15" name="optionsRadios15"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios15" name="optionsRadios15"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>


                    <div class="x_title">
                        <h2>KUISIONER (EVALUASI PRAKTEK)</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 1. Pelaksanaan praktikum tepat waktu dan sesuai denag waktu yang terjadwal </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios16" name="optionsRadios16"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios16" name="optionsRadios16"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios16" name="optionsRadios16"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios16" name="optionsRadios16"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios16" name="optionsRadios16"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 2. Praktikum menambah pemahaman teori dan ketrampilan waktu yang terjadwal </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios17" name="optionsRadios17"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios17" name="optionsRadios17"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios17" name="optionsRadios17"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios17" name="optionsRadios17"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios17" name="optionsRadios17"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>
                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 3. Setiap percobaan/praktikum sinergi dengan materi yang diajarakan saat teori </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios18" name="optionsRadios18"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios18" name="optionsRadios18"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios18" name="optionsRadios18"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios18" name="optionsRadios18"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios18" name="optionsRadios18"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>


                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 4. Dosen selalu datang setiap praktikum </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios19" name="optionsRadios19"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios19" name="optionsRadios19"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios19" name="optionsRadios19"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios19" name="optionsRadios19"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios19" name="optionsRadios19"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 5. Dosen menjelaskan arah dan tujuan dalam setiap percobaan </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios20" name="optionsRadios20"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios20" name="optionsRadios20"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios20" name="optionsRadios20"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios20" name="optionsRadios20"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios20" name="optionsRadios20"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 6. Penguasaan dan wawasan dosen terhadap madil praktikum </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios21" name="optionsRadios21"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios21" name="optionsRadios21"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios21" name="optionsRadios21"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios21" name="optionsRadios21"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios21" name="optionsRadios21"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 7. Kemampuan menjawab persoalan yang muncul selama percobaan berlangsung </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios22" name="optionsRadios22"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios22" name="optionsRadios22"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios22" name="optionsRadios22"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios22" name="optionsRadios22"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios22" name="optionsRadios22"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 8. Diadakan diskusi dan tanya jawab dalam setiap percobaan </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios23" name="optionsRadios23"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios23" name="optionsRadios23"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios23" name="optionsRadios23"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios23" name="optionsRadios23"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios23" name="optionsRadios23"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 9. Semangat dosen selama praktikum </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios24" name="optionsRadios24"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios24" name="optionsRadios24"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios24" name="optionsRadios24"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios24" name="optionsRadios24"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios24" name="optionsRadios24"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 10. Hasil laporan percobaan dikoreksi/dievaluasi </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios25" name="optionsRadios25"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios25" name="optionsRadios25"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios25" name="optionsRadios25"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios25" name="optionsRadios25"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios25" name="optionsRadios25"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 11. Penguasaan dan wawasan asisten terhadap modul </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios26" name="optionsRadios26"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios26" name="optionsRadios26"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios26" name="optionsRadios26"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios26" name="optionsRadios26"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios26" name="optionsRadios26"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 12. Kemampuan menjawab persoalan yang muncul selama percobaan berlangsung </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios27" name="optionsRadios27"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios27" name="optionsRadios27"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios27" name="optionsRadios27"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios27" name="optionsRadios27"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios27" name="optionsRadios27"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 13. Semangat dalam membantu pelaksanaan praktikum (jika dosen HADIR) </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios28" name="optionsRadios28"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios28" name="optionsRadios28"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios28" name="optionsRadios28"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios28" name="optionsRadios28"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios28" name="optionsRadios28"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 14. Semangat dalam membantu pelaksanaan praktikum (jika dosen TIDAK HADIR) </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios29" name="optionsRadios29"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios29" name="optionsRadios29"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios29" name="optionsRadios29"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios29" name="optionsRadios29"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios29" name="optionsRadios29"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 15. Asisten selalu mendampingi pada saat praktikum berlangsung </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios30" name="optionsRadios30"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios30" name="optionsRadios30"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios30" name="optionsRadios30"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios30" name="optionsRadios30"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios30" name="optionsRadios30"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 16. Tingkat pemahaman anda secara umum terhadap mata kuliah praktkum ini </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios31" name="optionsRadios31"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios31" name="optionsRadios31"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios31" name="optionsRadios31"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios31" name="optionsRadios31"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios31" name="optionsRadios31"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 17. Rerata keaktifan dan attitude ada selama praktikum </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios32" name="optionsRadios32"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios32" name="optionsRadios32"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios32" name="optionsRadios32"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios32" name="optionsRadios32"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios32" name="optionsRadios32"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 18. Keterampilan anda saat praktikum secara umum </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios33" name="optionsRadios33"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios33" name="optionsRadios33"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios33" name="optionsRadios33"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios33" name="optionsRadios33"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios33" name="optionsRadios33"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 19. Petunjuk praktikum (buku/diktat/file dosen) tersedia dengan baik </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios34" name="optionsRadios34"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios34" name="optionsRadios34"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios34" name="optionsRadios34"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios34" name="optionsRadios34"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios34" name="optionsRadios34"> 5
                        </label>
                    </div>

                    <br>
                    <div class="ln_solid"></div>

                    <div class="col-md-8">
                        <p>
                            <a style="font-size: 16px;"> 20. Peralatan/modul tersedia dengan baik </a>
                        </p>
                    </div>
                    <div class="radio col-md-3">
                        <label id="mg">
                            <input type="radio" value="1" id="optionsRadios35" name="optionsRadios35"> 1
                        </label>

                        <label id="mg">
                            <input type="radio" value="2" id="optionsRadios35" name="optionsRadios35"> 2
                        </label>

                        <label id="mg">
                            <input type="radio" value="3" id="optionsRadios35" name="optionsRadios35"> 3
                        </label>

                        <label id="mg">
                            <input type="radio" value="4" id="optionsRadios35" name="optionsRadios35"> 4
                        </label>

                        <label id="mg">
                            <input type="radio" value="5" id="optionsRadios35" name="optionsRadios35"> 5
                        </label>
                    </div> -->
                    <div class="clearfix"></div>


                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-4">
                            <a style="font-size: 20px;" href="<?= base_url('user/kuisioner') ?>"><button type="button" class="col-12 col-md-3 btn btn-primary "><i class="fa fa-arrow-left" style="font-size: 17px;"></i> Back</button></a>
                            <a style="font-size: 20px;"><button type="submit" class="col-12 col-md-3 btn btn-primary "><i class="fa fa-check-square-o" style="font-size: 17px;"></i> Simpan</button></a>
                        </div>
                    </div>
                </div>
                    </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /top tiles -->
<!-- </div> -->
<script src="<?= base_url('assets'); ?>../vendors/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets'); ?>../vendors/jquery/dist/jquery-3.5.1.js"></script>
<!-- adminprodi/template/dashboard_footer -->
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