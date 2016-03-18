<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VegFru Notification System</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<link href="<?= base_url('assets/plugins/bootstrap/bootstrap.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/plugins/pace/pace-theme-big-counter.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/main-style.css') ?>" rel="stylesheet">
</head>
<body class="body-Login-back">

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center logo-margin ">
				<!--img src="assets/img/logo.png" alt=""/-->
				<label style="color:white;font-size:28px;">VegFru Notifications</label>
			</div>
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Please Register</h3>
					</div>
					<div class="panel-body">
			<?php if (validation_errors()) : ?>
				<div class="col-md-12">
					<div class="alert alert-danger" role="alert">
						<?= validation_errors() ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if (isset($error)) : ?>
				<div class="col-md-12">
					<div class="alert alert-danger" role="alert">
						<?= $error ?>
					</div>
				</div>
			<?php endif; ?>
			<div class="col-md-12">
				<?= form_open() ?>
                    <div class="form-group">
                        <label for="username">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="<?php echo set_value('name'); ?>">
                    </div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Enter a username" value="<?php echo set_value('username'); ?>">
						<p class="help-block">At least 4 characters, letters or numbers only</p>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?php echo set_value('email'); ?>">
						<p class="help-block">A valid email address</p>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
						<p class="help-block">At least 6 characters</p>
					</div>
					<div class="form-group">
						<label for="password_confirm">Confirm password</label>
						<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
						<p class="help-block">Must match your password</p>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-lg btn-success btn-block" value="Register">
					</div>
				</form>
				<span>Already have an account? <a href="login">Sign In</a></span>
			</div>
			</div>
			</div>
			</div>
		</div><!-- .row -->
		<footer id="site-footer" role="contentinfo">
		</footer>
		<script src="<?= base_url('assets/plugins/jquery-1.10.2.js') ?>"></script>
		<script src="<?= base_url('assets/plugins/bootstrap/bootstrap.min.js') ?>"></script>
		<script src="<?= base_url('assets/plugins/metisMenu/jquery.metisMenu.js') ?>"></script>

	</body>
</html>