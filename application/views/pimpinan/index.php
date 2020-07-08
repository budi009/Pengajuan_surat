                        <!-- adminprodi/template/dashboard_header -->

          <!-- sidebar menu -->
                     <!-- adminprodi/template/dasboard_side -->
          <!-- /sidebar menu -->

          <!-- top navigation -->
                   <!-- adminprodi/template/dasboard_top -->
          <!-- /top navigation -->
<style>#qrcode {
  width:160px;
  height:160px;
  margin-top:15px;
}</style>
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
          <!-- /top tiles -->
          <input id="text" value="<?= $user = $this->session->userdata('nama_user'); ?>" type="text" /><br />
          <button>coba</button>
          <div id="qrcode"></div>
            <!-- /top tiles -->


            <a href="<?= base_url('pimpinan/QRcode'); ?>"> lllll</a>

      </div> 
      <script src="<?= base_url('assets'); ?>../vendors/js/qrcode.min.js"></script>
    <script src="<?= base_url('assets'); ?>../vendors/js/qrcode.js"></script>     
<!-- adminprodi/template/dashboard_footer -->
<script type="text/javascript">
let input = document.querySelector('input');
let button = document.querySelector('button');
let qrcode = new QRCode(document.querySelector('#qrcode'), {
    
    width: 128,
    height: 128,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});
button.addEventListener('click', () => {
  let inputValue = input.value;
  qrcode.makeCode(inputValue);
})

</script>

          