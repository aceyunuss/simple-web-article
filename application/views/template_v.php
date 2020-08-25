
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Legotics | <?php echo $title ?> </title>

      <!-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"> -->
      <!-- <link rel="stylesheet" href="https://bootflat.github.io/bootflat/css/bootflat.css"> -->
      <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css"> -->

        
      <!-- <script src="https://bootflat.github.io/bootflat/js/icheck.min.js"></script> -->
      <!-- <script src="https://bootflat.github.io/bootflat/js/jquery.fs.selecter.min.js"></script> -->
      <!-- <script src="https://bootflat.github.io/bootflat/js/jquery.fs.stepper.min.js"></script> -->
      
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/bootflat.css') ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/dataTables.bootstrap4.min.css') ?>">
      <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/site.min.css') ?>"> -->
      <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/site.css') ?>"> -->
      
      <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-3.4.1.min.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/js/site.min.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/js/icheck.min.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.fs.selecter.min.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.fs.stepper.min.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/js/respond.min.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.dataTables.min.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/js/dataTables.bootstrap4.min.js') ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('/assets/js/ckeditor.js') ?>"></script>
      <!-- <script src="//cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script> -->
  </head>
  
  <body style="background-color: #f1f2f6;">
    
    <?php
    
    include('header_v.php');

    include($content);

    include('footer_v.php');

    ?>

  </body>
</html>