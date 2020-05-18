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

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Search</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Surat Aktif Kuliah</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nomor Surat</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Prodi</th>
                          <th>Semester</th>
                          <th>Tahun Angkatan</th>
                          <th>Tahun Akademik</th>
                          <!-- <th>Nama Orang Tua</th>
                          <th>Pekerjaan Orang Tua</th>
                          <th>Nip</th>
                          <th>Jabatan</th>
                          <th>Instansi</th>
                          <th>Alamat Orang Tua</th>
                          <th>Keperluan</th>
                          <th>Fc Ktp Orang Tua</th>
                          <th>Fc Ktm Mahasiswa</th>
                          <th>Buku Pedoman Akademik</th> -->
                          <th>Action</th>
                        </tr>
                        <?php
                        $id = 1;
                        foreach($surat_aktif_kuliah as $ak) {
                        ?>
                        <tr>
                          <td><?php echo $id++ ?></td>
                          <td><?php echo $ak->nomor_surat ?></td>
                          <td><?php echo $ak->nim ?></td>
                          <td><?php echo $ak->nama ?></td>
                          <td><?php echo $ak->prodi_id ?></td>
                          <td><?php echo $ak->semester ?></td>
                          <td><?php echo $ak->th_angkatan ?></td>
                          <td><?php echo $ak->th_akademik ?></td>
                          <!-- <td><?php echo $ak->nama_ortu ?></td>         
                          <td><?php echo $ak->pekerjaan_ortu ?></td>                    
                          <td><?php echo $ak->nip_ortu ?></td>                    
                          <td><?php echo $ak->jabatan ?></td>                    
                          <td><?php echo $ak->instansi ?></td>                    
                          <td><?php echo $ak->alamat_ortu ?></td>                    
                          <td><?php echo $ak->keperluan ?></td>                    
                          <td><?php echo $ak->fc_ktp_ortu ?></td>                    
                          <td><?php echo $ak->fc_ktm_mhs ?></td>                    
                          <td><?php echo $ak->fc_buku_pedoman ?></td> -->
                          <td>
                           
                          <a class="col-md-9 btn btn-primary fa fa-search " href="<?= base_url('admin/detailsurataktif/').$ak->id; ?>"> Detail</a>
                      <a class="col-md-9 btn btn-primary fa fa-edit " href="<?= base_url('admin/editsurataktif/').$ak->id; ?>"> Edit</a>
                           <a title="Cetak Surat" class="col-md-9 btn btn-info fa fa-print " href="<?= base_url('admin/pdfsurataktif/').$ak->id; ?>"> Cetak</a>
                            
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


              
              

          <!-- <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pengantar Kerja Praktek</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>NIM</th>
                          <th>Prodi</th>
                          <th>Waktu</th>
                          <th>Tempat KP</th>
                        </tr>
                      
                    </table>
          
          
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div> -->

             

              

    </div>
  </div>
  </div>
          <!-- /top tiles -->


           
    <!-- admin/template/dashboard_footer -->
              
            