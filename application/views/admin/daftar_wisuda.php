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
                            <h3>Wisuda</h3>

                          </div>


                        </div>

                        <div class="col-md-12 col-sm-12 ">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Pendaftar</small></h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="card-box table-responsive">
                                    <div class="col-md-9" style="position: relative; right: 0px;">
                                      <a style="size: 18px;"><button title="Cetak Surat" id="btnExport" class="col-md-3 btn btn-success btn-lg fa fa-download " onclick="exportTableToExcel('tblData', 'coba')"> Excel</button></a>
                                      <a title="Cetak Surat" class="col-md-12 btn btn-info fa fa-print " href="<?= base_url('admin/wisudapdf') ?>"> Cetak</a>
                                    </div>
                                    <table id="tblData" class="table table-striped table-bordered bulk_action" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>NIM</th>
                                          <th>Nama</th>
                                          <th>Prodi</th>
                                        </tr>
                                      </thead>
                                      <?php
                                      $id = 1;
                                      foreach ($wisuda as $w) {
                                      ?>
                                        <tr>
                                          <td><?php echo $id++ ?></td>
                                          <td><?php echo $w->nim ?></td>
                                          <td><?php echo $w->nama ?></td>
                                          <td><?php echo $w->prodi ?></td>

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

                    <!-- /top tiles -->



                    <!-- admin/template/dashboard_footer -->
                    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                    <script type="text/javascript" src="<?= base_url('assets'); ?>../js/query.min.js"></script>
                    <script src="<?= base_url(); ?>/assets/js/table2excel.js" type="text/javascript"></script> -->
                    <script type="text/javascript">
                      function exportTableToExcel(tblData, filename = '') {
                        var downloadLink;
                        var dataType = 'application/vnd.ms-excel';
                        var tableSelect = document.getElementById(tblData);
                        var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

                        // Specify file name
                        filename = filename ? filename + '.xls' : 'excel_data.xls';

                        // Create download link element
                        downloadLink = document.createElement("a");

                        document.body.appendChild(downloadLink);

                        if (navigator.msSaveOrOpenBlob) {
                          var blob = new Blob(['\ufeff', tableHTML], {
                            type: dataType
                          });
                          navigator.msSaveOrOpenBlob(blob, filename);
                        } else {
                          // Create a link to the file
                          downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

                          // Setting the file name
                          downloadLink.download = filename;

                          //triggering the function
                          downloadLink.click();
                        }
                      }
                    </script>