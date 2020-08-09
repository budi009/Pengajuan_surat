 <div class="top_nav">
   <div class="nav_menu">
     <div class="nav toggle">
       <a id="menu_toggle"><i class="fa fa-bars"></i></a>
     </div>
     <nav class="nav navbar-nav">
       <ul class=" navbar-right">
         <li class="nav-item dropdown open" style="padding-left: 15px;">
           <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
             <img src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>" alt=""><?= $user['nama_user']; ?>
           </a>
           <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="javascript:;"><i class="fa fa-user pull-right"></i> Profile</a>
             <a class="dropdown-item" href="<?= base_url('auth_sistem/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
           </div>
         </li>

         <li role="presentation" class="nav-item dropdown open">
           <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
             <i class="fa fa-bell">
               <?php
                if ($jml_aktif_baca + $jml_cuti_baca + $jml_kp_baca + $jml_mundur_baca > 0) { ?>
                 <span class="badge bg-red"><?php echo $jml_aktif_baca + $jml_cuti_baca + $jml_kp_baca + $jml_mundur_baca ?></span>
               <?php } else { ?>
                 <span class="badge bg-red"></span>
               <?php } ?>
             </i>
           </a>
           <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
             <li class="nav-item">
               <a class="dropdown-item" href="<?= base_url('admin/notif_ak'); ?>" method="post">
                 <?php
                  if ($jml_aktif_baca + $jml_cuti_baca + $jml_kp_baca + $jml_mundur_baca > 0) { ?>
                   <span>
                     <span>Surat Aktif Kuliah</span>
                   </span>
                   <?php if ($jml_aktif_baca == 0) { ?>
                     <span class="message">
                       Tidak ada permintaan
                     </span>
                   <?php } else { ?>
                     <span class="message">
                       <?php echo $jml_aktif_baca ?> Surat pengajuan baru
                     </span>
                   <?php } ?>
                 <?php } else { ?>
                   <span>
                     <span>Surat Aktif Kuliah</span>
                   </span>
                   <span class="message">
                     Tidak ada permintaan
                   </span>
                 <?php } ?>
               </a>
             </li>
             <li class="nav-item">
               <a class="dropdown-item" href="<?= base_url('admin/notif_sc'); ?>" method="post">
                 <?php
                  if ($jml_aktif_baca + $jml_cuti_baca + $jml_kp_baca + $jml_mundur_baca > 0) { ?>
                   <span>
                     <span>Surat Cuti</span>
                   </span>
                   <?php if ($jml_cuti_baca == 0) { ?>
                     <span class="message">
                       Tidak ada permintaan
                     </span>
                   <?php } else { ?>
                     <span class="message">
                       <?php echo $jml_cuti_baca ?> Surat pengajuan baru
                     </span>
                   <?php } ?>
                 <?php } else { ?>
                   <span>
                     <span>Surat Cuti</span>
                   </span>
                   <span class="message">
                     Tidak ada permintaan
                   </span>
                 <?php } ?>
               </a>
             </li>
             <li class="nav-item">
               <a class="dropdown-item" href="<?= base_url('admin/notif_kp'); ?>" method="post">
                 <?php
                  if ($jml_aktif_baca + $jml_cuti_baca + $jml_kp_baca + $jml_mundur_baca > 0) { ?>
                   <span>
                     <span>Surat Kerja Praktek </span>
                   </span>
                   <?php if ($jml_kp_baca == 0) { ?>
                     <span class="message">
                       Tidak ada permintaan
                     </span>
                   <?php } else { ?>
                     <span class="message">
                       <?php echo $jml_kp_baca ?> Surat pengajuan baru
                     </span>
                   <?php } ?>
                 <?php } else { ?>
                   <span>
                     <span>Surat Kerja Praktek</span>
                   </span>
                   <span class="message">
                     Tidak ada permintaan
                   </span>
                 <?php } ?>
               </a>
             </li>
             <li class="nav-item">
               <a class="dropdown-item" href="<?= base_url('admin/notif_md'); ?>" method="post">
                 <?php
                  if ($jml_aktif_baca + $jml_cuti_baca + $jml_kp_baca + $jml_mundur_baca > 0) { ?>
                   <span>
                     <span>Surat Mengundurkan Diri </span>
                   </span>
                   <?php if ($jml_mundur_baca == 0) { ?>
                     <span class="message">
                       Tidak ada permintaan
                     </span>
                   <?php } else { ?>
                     <span class="message">
                       <?php echo $jml_mundur_baca ?> Surat pengajuan baru
                     </span>
                   <?php } ?>
                 <?php } else { ?>
                   <span>
                     <span>Surat Mengundurkan Diri</span>
                   </span>
                   <span class="message">
                     Tidak ada permintaan
                   </span>
                 <?php } ?>
               </a>
             </li>
             <li class="nav-item">

             </li>

           </ul>
         </li>
       </ul>
     </nav>
   </div>
 </div>