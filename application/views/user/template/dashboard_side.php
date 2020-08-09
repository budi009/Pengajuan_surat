<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="<?= base_url('user/index') ?>" class="site_title"><i class="fa fa-institution"></i> <span>Akademik</span></a>
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
          <li><a href="<?= base_url('user/index'); ?>"><i class="fa fa-home"></i> Home </a></li>
          <li><a><i class="fa fa-envelope"></i> Pengajuan Surat <span class="fa fa-chevron-down"></span> </a>
            <ul class="nav child_menu">
              <li><a href="<?= base_url('user/surat1'); ?>">Surat Keterangan Aktif Kuliah </a></li>
              <li><a href="<?= base_url('user/surat2'); ?>">Surat Pengajuan Cuti</a></li>
              <li><a>Surat KP/MKI <span class="fa fa-chevron-down"></a>
                <ul class="nav child_menu">
                  <li>
                    <a href="<?= base_url('user/surat3'); ?>">Surat Pengantar KP Prodi</a>
                  </li>
                  <li>
                    <a href="<?= base_url('user/surat3_1'); ?>">Surat Pengantar KP Akademik</a>
                  </li>
                </ul>
              </li>
              <li><a href="<?= base_url('user/surat4'); ?>">Surat Permohonan Pengunduran Diri </a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('user/daftar_wisuda'); ?>"><i class="fa fa-graduation-cap"></i> Daftar Wisuda </a></li>
          <li><a href="<?= base_url('user/kuisioner'); ?>"><i class="fa fa-book"></i> Kuisioner </a></li>
          <li><a href="<?= base_url('auth_sistem/logout'); ?>"><i class="fa fa-sign-out"></i> Log Out </a></li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->

  </div>
</div>