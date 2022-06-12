<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Suka Perpus">
    <meta name="author" content="">

    <title>SukaPerpus Login</title>
    <link href="<?php echo base_url();?>assets/client/css/index.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/client/css/profile.css" rel="stylesheet">

</head>
  <body>
  
    <div class="wrapper-center fadeInDown">
      <div id="formContent">
        <h2 class="active">LOGIN</h2>
        <br />
        <br />
        <img src="<?php echo base_url();?>/assets/client/images/Logo (1).png" width="150" height="130" />

        <form method="post" style="max-width: 600px;" action="<?php echo base_url(); ?>auth_c/login">
        <div class="flex-column-center">
          <br />
          <br />
          <input type="text" class="w100" placeholder="Username" name="username" class="<?= form_error('username') ? 'invalid' : '' ?>" value="<?= set_value('username') ?>" />
          <div class="invalid-feedback">
					<?= form_error('username') ?>
				</div>
          <input type="password" class="w100" placeholder="Password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>" value="<?= set_value('password') ?>" />
          <div class="invalid-feedback">
					<?= form_error('password') ?>
				</div>
          <br />
          <br />

          <a href="">
            <button class="button" type="submit" class="fadeIn fourth" value="Login">
              Submit
            </button>
          </a>
  </form>
        </div>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="<?= site_url('front_end/admin/dashboard') ?>">FORGOT PASSWORD ?</a>
        </div>
      </div>
    </div>
  </body>
</html>


