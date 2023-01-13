<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Admin |Our Teacher</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url("assets/css/responsive.css"); ?>">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url("assets/images/fevicon.png"); ?>" type="image/gif">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery.mCustomScrollbar.min.css"); ?>">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout home_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo base_url("assets/images/loading.gif"); ?>" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="<?= base_url() ?>index.php/Beranda/index"><img src="<?php echo base_url("assets/images/logo1.svg"); ?>" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                           <ul class="menu-area-main" >
                                 <li><a href="<?= base_url() ?>index.php/Beranda/index">Dashboard</a> </li>
                                 <li class="active"><a href="<?= base_url() ?>index.php/Beranda/biayales">Table</a> </li>
                                 <li><a href="<?= base_url() ?>index.php/Beranda/signup">Logout</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <!--Books -->
      <div class="Books">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div><br><br><br><br>
                     <span>DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the official DataTables documentation.</span> 
                  </div>
               </div>
            </div>

         </div>
      </div>
      <!-- end Books -->
      <!-- Javascript files-->
      <script src='<?php echo base_url("assets/js/jquery.min.js"); ?>'></script>
      <script src='<?php echo base_url("assets/js/popper.min.js"); ?>'></script>
      <script src='<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>'></script>
      <script src='<?php echo base_url("assets/js/jquery-3.0.0.min.js"); ?>'></script>
      <script src='<?php echo base_url("assets/js/plugin.js"); ?>'></script>
      <!-- sidebar -->
      <script src='<?php echo base_url("assets/js/jquery.mCustomScrollbar.concat.min.js"); ?>'></script>
      <script src='<?php echo base_url("assets/js/custom.js"); ?>'></script>
   </body>
</html>