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
            <form method="post" action="<?= base_url('auth');?>">
              <h1>Login</h1>
              <div>
                <input type="text" id="email" class="form-control" placeholder="Username" name="email" value="<?= set_value('email');?>" />
              </div>
              <div>
                <input type="password" id="password" class="form-control" placeholder="Password" name="password" />
              </div>
              <div>
                <button class="btn btn-primary submit" type="submit" style="font-size: 16px">Log in</button>
               <!--  <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>

              <div class="clearfix"></div>

              <!-- <div class="separator">
                <p class="change_link">New ?
                  <a href="<?= base_url('auth/registrasi'); ?>" class="to_register"> Create Account </a>
                </p>
                <div class="clearfix"></div>
                <br />
                <div>
              </div> -->
            </form>
          </section>
        </div>

        <!-- <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="<?= base_url('auth/login'); ?>">
              <h1>Create Account</h1>
              <div>
                <input type="text" id="name" class="form-control" placeholder="Username" name="name" />
              </div>
              <div>
                <input type="text" id="email" class="form-control" placeholder="Email" name="email" />
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
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div> -->
      </div>
    </div>
    </body>
</html>
