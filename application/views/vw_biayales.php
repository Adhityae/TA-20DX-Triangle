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
      <title>Our Teacher</title>
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
                                 <li><a href="<?= base_url() ?>index.php/Beranda/index">Beranda</a> </li>
                                 <li class="active"><a href="<?= base_url() ?>index.php/Beranda/biayales">Biaya Les</a> </li>
                                 <li><a href="<?= base_url() ?>index.php/Beranda/caripengajar">Cari Pengajar</a></li>
                                 <li><a href="<?= base_url() ?>index.php/Beranda/tentangkami">Tentang Kami</a></li>
                                 <li><a href="<?= base_url() ?>index.php/Beranda/signin">Sign In</a></li>
                                 <li><a href="<?= base_url() ?>index.php/Beranda/signup">Sign Up</a></li>
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
                  <div class="titlepage"><br><br><br><br>
                     <h2>Berikut Ini Biaya Les Bersama<strong class="black"><br> Our Teacher</strong></h2>
                     <span>Anda dapat memilih program dan mengatur jumlah pertemuan sesuai kebutuhan Anda</span> 
                  </div>
               </div>
            </div>
            <div class="row box">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="<?php echo base_url("assets/images/fun.svg"); ?>" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="<?php echo base_url("assets/images/flexible.svg"); ?>" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="<?php echo base_url("assets/images/adjustable.svg"); ?>" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="<?php echo base_url("assets/images/achievable.svg"); ?>" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-md-6 offset-md-3">
                  <p>Anda dapat memilih program dan mengatur jumlah pertemuan sesuai kebutuhan Anda</p>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="read-more">
                        <a href="#">Pesan Sekarang</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Books -->
      <!-- Contact -->
      <div class="Contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage3">
                     <h2>Dapatkan info seputar bimbingan kami</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <form>
                     <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                           <input class="form-control" placeholder="Nama" type="Nama">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                           <input class="form-control" placeholder="Nomor Telepon" type="Nohp">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                           <input class="form-control" placeholder="Email" type="Email">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                           <textarea class="textarea" placeholder="Pesan"></textarea>
                        </div>
                     </div>
                  </form>
               </div>
               <button class="send-btn">Kirim</button>
            </div>
         </div>
      </div>
      <!-- end Contact -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Ikuti Kami</h3>
                     </div>
                     <ul class="location_icon">
                        <li> <a href="#"><img src="<?php echo base_url("assets/icon/facebook.png"); ?>"></a></li>
                        <li> <a href="#"><img src="<?php echo base_url("assets/icon/Twitter.png"); ?>"></a></li>
                        <li> <a href="#"><img src="<?php echo base_url("assets/icon/linkedin.png"); ?>"></a></li>
                        <li> <a href="#"><img src="<?php echo base_url("assets/icon/instagram.png"); ?>"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                     <div class="Follow">
                        <h3>Dapatkan info seputar bimbingan kami</h3>
                     </div>
                     <input class="Newsletter" placeholder="Masukan Email" type="Enter your email">
                     <button class="Subscribe">Subscribe</button>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
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