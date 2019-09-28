<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $this->M_Web->view('deskripsi'); ?>">
    <meta name="keywords" content="<?php echo $this->M_Web->view('keyword'); ?>">
    <meta name="author" content="<?php echo $this->M_Web->view('autor'); ?>">
    <title>BLUD RSUD TORABELO</title>
    <base href="<?php echo base_url(); ?>">
    <link rel="icon" href="<?php echo $this->M_Web->view('favicon'); ?>">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/parsley.min.css" rel="stylesheet">
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body style="background:#ddd;">
    <?php $this->M_Pesan->get('msg'); ?>

    <div class="container">
      <?php $this->load->view($content); ?>
    </div>

    <center>
      <div class="text-info">
        <!-- <?php echo $this->M_Web->view('footer'); ?> -->
        <h4>Rumah Sakit Umum Daerah Tora Belo Sigi</h4>
      </div>
    </center>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/parsley.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
