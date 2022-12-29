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
      <link rel="stylesheet" href='<?php echo base_url('assets/css/bootstrap.min.css'); ?>' />
      <!-- style css -->
      <link rel="stylesheet" href='<?php echo base_url('assets/css/style.css'); ?>' />
      <!-- Responsive-->
      <link rel="stylesheet" href='<?php echo base_url('assets/css/responsive.css'); ?>' />
      <!-- fevicon -->
      <link rel="icon" href='<?php echo base_url('assets/images/fevicon.png'); ?>' type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href='<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css'); ?>' />
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout home_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
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
                           <div class="logo"> <a href="index.html"><img src="images/logos.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main" >
                                 <li class="active"> <a href="index.html">Beranda</a> </li>
<<<<<<< HEAD
                                 <li> <a href="about.html">About us</a> </li>
                                 <li><a href="books.html">Our Books</a></li>
                                 <li><a href="contact.html">Contact us</a></li>
                                 <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo base_url("Beranda/SignIn") ?>">
                                       Login</a>
                                 </li>
=======
                                 <li> <a href="about.html">Biaya Les</a> </li>
                                 <li><a href="books.html">Cari Pengajar</a></li>
                                 <li><a href="library.html">Blog</a></li>
                                 <li><a href="contact.html">Tentang Kami</a></li>
                                 <li><a href="<?= base_url() ?>index.php/Beranda/SignIn">Login</a></li>
>>>>>>> 612b80c0257b8592c2c86605c53c4dca2840b591
                                 <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                                 <!-- <li class="mean-last"> <a href="#"><img src="images/top-icon.png" alt="#" /></a></li> -->
                                  <!-- Nav Item - User Information -->
                                  <li class="nav-item dropdown no-arrow">
                                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                src="images/top-icon.png" alt="#" />
                                  </a>
                                  <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                                </div>
                                </li>
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
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner1.png" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Selamat Datang Di Our Teacher<br> Sesuaikan Kebutuhan Belajar Bersama Kami</h1>
                        <p>Anda dapat memilih program belajar<br> dan mengatur jumlah pertemuan<br> sesuai keinginan Anda</p>
                        <div class="button_section"> <a class="main_bt" href="#">Pesan Sekarang</a>  </div>
                        <ul class="locat_icon">
                           <li> <a href="#"><img src="icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="icon/instagram.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
      </section>
      <!--Books -->
      <div class="Books">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage"><br>
                     <h2>Mengapa Perlu Belajar Bersama<strong class="black"> Our Teacher?</strong></h2>
                     <span>Keunggulan Our Teacher dari Pusat Les Privat Lainnya</span> 
                  </div>
               </div>
            </div>
            <div class="row box">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="images/book-1.jpg" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="images/book-2.jpg" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="images/book-1.jpg" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="images/book-1.jpg" alt="img"/></figure>
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
                     <h2>Hubungi Kami</h2>
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
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="icon/instagram.png"></a></li>
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
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>