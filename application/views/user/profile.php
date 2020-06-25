                    <!-- admin/template/dashboard_header -->

          <!-- sidebar menu -->
                     <!-- admin/template/dasboard_side -->
          <!-- /sidebar menu -->

          <!-- top navigation -->
                     <!-- admin/template/dasboard_top -->
          <!-- /top navigation -->

        <!-- page content -->
        <meta charset="UTF-8">
    <title>Basic Resposive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      .img {
    max-width: 100%; 
    display:block; 
    height: auto;
      }

      .tengah {
        display: block;
    margin-left: auto;
    margin-right: auto;
      }
    </style>
    <div class="right_col" role="main">
          <!-- top tiles -->

          <h3 style="text-align: center;">Profile</h3>
          <div >
          <div class="tile_count">
            <div class="col-md-12  ">
              <img class="img tengah"  src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>">
            </div>
            <div class="col-md-12 ">
            <h5 style="text-align: center;line-height: 2;" >Nama : <?= $user['nama_user'] ;?></h5>
            </div>
            
          </div>
        </div>
          <!-- /top tiles -->
      </div>
          
      <!-- admin/template/dashboard_footer -->                       
                       
                       
                       <!-- adminprodi/template/dashboard_header -->

          <!-- sidebar menu -->
                     <!-- adminprodi/template/dasboard_side -->
          <!-- /sidebar menu -->

          <!-- top navigation -->
                   <!-- adminprodi/template/dasboard_top -->
          <!-- /top navigation -->

        <!-- page content -->
        <!-- <div class="right_col" role="main">
          
          <div class="col-md-6" style="position: relative; top: 200px; right: 20px; left: 425px;  ">
          <img src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>" alt="">
          
               <p class="card-text col-md-4"><?= $user['email'] ;?></p> 
          </div> 
      </div> -->

<!-- adminprodi/template/dashboard_footer -->
          