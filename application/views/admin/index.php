                    <!-- admin/template/dashboard_header -->

          <!-- sidebar menu -->
                     <!-- admin/template/dasboard_side -->
          <!-- /sidebar menu -->

          <!-- top navigation -->
                     <!-- admin/template/dasboard_top -->
          <!-- /top navigation -->

        <!-- page content -->
    <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
        </div>


<script type="text/javascript">
 document.getElementById("btn").disabled = true;
</script>
        <a class="col-md-9 btn btn-primary  fa fa-search " onclick="" href="<?= base_url('admin/QRcode'); ?>" id="btn" type="submit"> Qrcode</a>
          <!-- /top tiles -->
      
          <img style="width: 100px" src="assets/qrcode/qrcode.jpg" alt="">
          <a class="col-md-9 btn btn-primary  fa fa-search " onclick="" href="<?= base_url('admin/QRcode'); ?>" id="btn" type="submit"> Qrcode</a>
            <!-- /top tiles -->
        
            <img style="width: 100px" src="<?= base_url('assets/qrcode/') . $user = $this->session->userdata('nama_user') .'jpg' ?>" alt="">
          <a class="col-md-9 btn btn-primary  fa fa-search " onclick="" href="<?= base_url('admin/QRcode'); ?>" id="btn" type="submit"> Qrcode</a>
            <!-- /top tiles -->
        
            <img style="width: 100px" src="<?= base_url('assets/qrcode/') . $user = $this->session->userdata('nama_user') .'.jpg' ?>" alt="">
        </div>
     
          
      <!-- admin/template/dashboard_footer -->

      


