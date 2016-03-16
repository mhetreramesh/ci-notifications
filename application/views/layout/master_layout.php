<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?> | Notification System</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <link href="<?= base_url('assets/plugins/bootstrap/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/pace/pace-theme-big-counter.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/main-style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/morris/morris-0.4.3.min.css') ?>" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <?php $this->load->view('partials/header.php'); ?>
        <div id="page-wrapper">
            <?php $this->load->view($template_name); ?>
        </div>
        <?php $this->load->view('partials/footer.php'); ?>
    </div>
</body>
</html>