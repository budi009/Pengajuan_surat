<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets'); ?>../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets'); ?>../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets'); ?>../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url('assets'); ?>../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets'); ?>../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
  <div>
    <div class="login_wrapper mt-3">
          <section class="login_content">
            <form method="post" action="<?= base_url('auth_sistem/registrasi'); ?>">
              <h1>Create Account</h1>
              <div>
                <input type="text" id="nama" class="form-control" placeholder="Nama" name="nama" value="<?= set_value('nama'); ?>" />
              </div>
              <div>
                <input type="text" id="id_user" class="form-control" placeholder="NIM" name="id_user" value="<?= set_value('id_user'); ?>" />
              </div>
              <div>
                <input type="text" id="prodi" class="form-control" placeholder="Program Studi" name="prodi" value="<?= set_value('prodi'); ?>" />
              </div>
              <div>
                <input type="text" id="kelas" class="form-control" placeholder="Kelas" name="kelas" value="<?= set_value('kelas'); ?>"/>
              </div>
              <div>
                <input type="text" id="email" class="form-control" placeholder="Email" name="email" value="<?= set_value('email'); ?>" />
              </div>
              <div>
                <input type="password" id="password1" class="form-control" placeholder="Password" name="password1" />
              </div>
              <div>
                <input type="password" id="password2" class="form-control" placeholder="Repeat Password" name="password2" />
              </div>
              <div>
                <button class="btn btn-primary submit" type="submit" style="font-size: 16px">Register</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a user ?
                  <a href="<?= base_url('auth_sistem'); ?>" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </body>
</html>
