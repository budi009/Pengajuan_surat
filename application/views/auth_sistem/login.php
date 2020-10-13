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
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form method="post" action="<?= base_url('auth_sistem'); ?>">
            <h1>Login</h1>
            <div>
              <input type="text" required id="id_user" class="form-control" placeholder="Username" name="id_user" />
            </div>
            <div>
              <input type="password" required id="password" class="form-control" placeholder="Password" name="password" />
            </div>
            <div>
              <button class="btn btn-primary submit" type="submit" style="font-size: 16px">Log in</button>
              <!--  <a class="reset_pass" href="#">Lost your password?</a> -->
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">New ?
                <a href="<?= base_url('auth_sistem/registrasi'); ?>" class="to_register"> Create Account </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <?= $this->session->flashdata('massage'); ?>
              </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>