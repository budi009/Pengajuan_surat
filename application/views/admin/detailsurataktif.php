                    <!-- admin/template/dashboard_header -->

          <!-- sidebar menu -->
                     <!-- admin/template/dasboard_side -->
          <!-- /sidebar menu -->

          <!-- top navigation -->
                   <!-- admin/template/dasboard_top -->
          <!-- /top navigation -->

        <!-- page content -->
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Surat Pengajuan Mahasiswa</h3>
              </div>

              
            </div>

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detail Surat Aktif Kuliah</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-8">
                            <div class="card-box table-responsive">
                    <table  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <td><?php echo $detail->nama ?></td>
                        </tr>
                        <tr>
                          <th>Nim</th>
                          <td><?php echo $detail->nim ?></td>
                        </tr>
                        <tr>
                          <th>Program Studi</th>
                          <td><?php echo $detail->prodi_id ?></td>
                        </tr>
                        <tr>
                          <th>Semester</th>
                          <td><?php echo $detail->semester ?></td>
                        </tr>
                        <tr>
                          <th>Tahun Angkatan</th>
                          <td><?php echo $detail->th_angkatan ?></td>
                        </tr>
                        <tr>
                          <th>Tahun Akademik</th>
                          <td><?php echo $detail->th_akademik ?></td>
                        </tr>
                        <tr>
                          <th>Nama Orang Tua</th>
                          <td><?php echo $detail->nama_ortu ?></td>
                        </tr>
                        <tr>
                          <th>Pekerjaan Orang Tua</th>
                          <td><?php echo $detail->pekerjaan_ortu ?></td>
                        </tr>
                        <tr>
                          <th>NIP</th>
                          <td><?php echo $detail->nip_ortu ?></td>
                        </tr>
                        <tr>
                          <th>Jabatan</th>
                          <td><?php echo $detail->jabatan ?></td>
                        </tr>
                        <tr>
                          <th>Instansi</th>
                          <td><?php echo $detail->instansi ?></td>
                        </tr>
                        <tr>
                          <th>Alamat Orang Tua</th>
                          <td><?php echo $detail->alamat_ortu ?></td>
                        </tr>
                        <tr>
                          <th>Keperluan Surat Aktif Kuliah</th>
                          <td><?php echo $detail->keperluan?></td>
                        </tr>
                        <tr>
                          <th>Foto copy KTP Orang Tua</th>
                          <td><?php echo $detail->fc_ktp_ortu  ?></td>
                        </tr>
                        <tr>
                          <th>Foto copy KTM Mahasiswa</th>
                          <td><?php echo $detail->fc_ktm_mhs  ?></td>
                        </tr>
                        <tr>
                          <th>Buku Pedoman Akademik</th>
                          <td><?php echo $detail->fc_buku_pedoman  ?></td>
                        </tr>
                                           
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
          <!-- /top tiles -->


           
    <!-- admin/template/dashboard_footer -->
              
            