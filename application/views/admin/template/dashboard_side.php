<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="<?= base_url('admin/index') ?>" class="site_title"><i class="fa fa-institution"></i> <span>Akademik</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Selamat Datang</span>
        <h2><?= $user['nama_user']; ?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a href="<?= base_url('admin/index'); ?>"><i class="fa fa-home"></i> Home </a></li>
          <li><a><i class="fa fa-envelope"></i> Pengajuan Surat <span class="fa fa-chevron-down"></span> </a>
            <ul class="nav child_menu">
              <li><a href="<?= base_url('admin/notif_ak'); ?>">Surat Keterangan Aktif Kuliah </a></li>
              <li><a href="<?= base_url('admin/notif_sc'); ?>">Surat Pengajuan Cuti</a></li>
              <li><a href="<?= base_url('admin/notif_kp'); ?>">Surat Pelakasanaan KP/MKI</a></li>
              <li><a href="<?= base_url('admin/notif_md'); ?>">Surat Mengundurkan Diri Mahasiswa</a></li>

            </ul>
          </li>
          <li><a href="<?= base_url('admin/daftar_wisuda'); ?>"><i class="fa fa-graduation-cap"></i> Pendaftar Wisuda </a></li>
          <li><a href="<?= base_url('admin/kuisioner'); ?>"><i class="fa fa-book"></i> Kuisioner </a></li>
          <li><a href="<?= base_url('auth_sistem/logout'); ?>"><i class="fa fa-sign-out"></i> Log Out </a></li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
    <!-- /menu footer buttons -->
  </div>
</div>