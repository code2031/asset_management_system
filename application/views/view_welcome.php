<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title ;   ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url()?>/assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>/assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <?php if (validation_errors())  { ?>
          <div class="alert alert-danger"  align="center"> <?php echo validation_errors() ; ?></div>
          <?php  } ?>
        <?php if (isset($feedback)) { ?>
        <div class="alert alert-danger"  align="center"> <?php echo $feedback ; ?></div>
        <?php } ?>
          <section class="login_content">
            
            <form action ="<?php echo site_url('welcome/validate_login_details'); ?>" method="post">
              <h1>Registered Member</h1>
              <div>
                <input type="text" class="form-control" name="uname_fone" value="<?php echo set_value('uname_fone'); ?>" placeholder="Username / Phone Number"  required=""/>
              </div>
              <div>
                <input type="password" class="form-control"  name="pwd1" value="<?php echo set_value('pwd1'); ?>" placeholder="Password" required=""/>
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" value="Log in" / >
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> <?php echo $primera ;?> </h1>
                  <p><?php echo $purpose ;?></p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
