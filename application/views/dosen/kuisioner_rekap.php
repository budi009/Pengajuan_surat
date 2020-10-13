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
                            <h3>Rekap Kuisioner</h3>
                          </div>


                        </div>

                        <div class="col-md-12 col-sm-12 ">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2></h2>

                              <div class="clearfix"></div>
                            </div>
                            <!-- <a class="col-md-2 offset-md-10 btn btn-primary fa fa-check-square-o " href="<?= base_url('pimpinan/validasi_kp') ?>"> Validasi Semua </a> -->

                            <div class="x_content">
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="card-box table-responsive">
                                    <table id="mydata" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                      <thead>

                                        <tr>
                                          <th>No</th>

                                          <th>NIM</th>
                                          <th>Mata kuliah</th>
                                          <th>P1</th>
                                          <th>P2</th>
                                          <th>P3</th>
                                          <th>P4</th>
                                          <th>P5</th>
                                          <th>P6</th>
                                          <th>P7</th>
                                          <th>P8</th>
                                          <th>P9</th>
                                          <th>P10</th>
                                          <th>P11</th>
                                          <th>P12</th>
                                          <th>P13</th>
                                          <th>P14</th>
                                          <th>P15</th>
                                          <th>P16</th>
                                          <th>P17</th>
                                          <th>P18</th>
                                          <th>P19</th>
                                          <th>P20</th>
                                          <th>P21</th>
                                          <th>P22</th>
                                          <th>P23</th>
                                          <th>P24</th>
                                          <th>P25</th>
                                          <th>P26</th>
                                          <th>P27</th>
                                          <th>P28</th>
                                          <th>P29</th>
                                          <th>P30</th>
                                          <th>P31</th>
                                          <th>P32</th>
                                          <th>P33</th>
                                          <th>P34</th>
                                          <th>P35</th>
                                          <th>P36</th>
                                          
                                          
                                          
                                        </tr>
                                      </thead>
                                      <?php 
                                      
                                      $no = 1;
                                      foreach ($rekap as $rk) {
                                      ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            
                                           
                                            <td><?php echo $rk->id_user ?></td>
                                            <td><?php echo $rk->mata_kuliah ?></td>
                                            
                                       
                                                <td><?php echo $rk->p36 ?></td>
                                                <td><?php echo $rk->p1 ?></td>
                                                <td><?php echo $rk->p2 ?></td>
                                                <td><?php echo $rk->p3 ?></td>
                                                <td><?php echo $rk->p4 ?></td>
                                                <td><?php echo $rk->p5 ?></td>
                                                <td><?php echo $rk->p6 ?></td>
                                                <td><?php echo $rk->p7 ?></td>
                                                <td><?php echo $rk->p8 ?></td>
                                                <td><?php echo $rk->p9 ?></td>
                                                <td><?php echo $rk->p10 ?></td>
                                                <td><?php echo $rk->p11 ?></td>
                                                <td><?php echo $rk->p12 ?></td>
                                                <td><?php echo $rk->p13 ?></td>
                                                <td><?php echo $rk->p14 ?></td>
                                                <td><?php echo $rk->p15 ?></td>
                                                <td><?php echo $rk->p16 ?></td>
                                                <td><?php echo $rk->p17 ?></td>
                                                <td><?php echo $rk->p18 ?></td>
                                                <td><?php echo $rk->p19 ?></td>
                                                <td><?php echo $rk->p20 ?></td>
                                                <td><?php echo $rk->p21 ?></td>
                                                <td><?php echo $rk->p22 ?></td>
                                                <td><?php echo $rk->p23 ?></td>
                                                <td><?php echo $rk->p24 ?></td>
                                                <td><?php echo $rk->p25 ?></td>
                                                <td><?php echo $rk->p26 ?></td>
                                                <td><?php echo $rk->p27 ?></td>
                                                <td><?php echo $rk->p28 ?></td>
                                                <td><?php echo $rk->p29 ?></td>
                                                <td><?php echo $rk->p30 ?></td>
                                                <td><?php echo $rk->p31 ?></td>
                                                <td><?php echo $rk->p32 ?></td>
                                                <td><?php echo $rk->p33 ?></td>
                                                <td><?php echo $rk->p34 ?></td>
                                                <td><?php echo $rk->p35 ?></td>

                                      
                                        </tr>    
                                      <?php }?> 
                                    </table>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>