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
                                 <li><a href="<?= base_url() ?>index.php/Beranda/referral">Referral</a></li>                                 <li><a href="<?= base_url() ?>index.php/Beranda/signin">Sign In</a></li>
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
      <section class="biaya my-5" id="sec-biaya" aria-hidden="true">
      <div class="Books">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage"><br><br><br><br>
                     <h2>Berikut Ini Biaya Les Bersama<strong class="black"><br> Our Teacher</strong></h2>
                     <span>Anda dapat memilih program dan mengatur jumlah pertemuan sesuai kebutuhan Anda</span>
                     <form id="form_cek_biaya">
                        <div class="form-row mb-2">
                           <div class="col-md-3" id="place_program"><br>
                              <label>Program</label>
                              <select class="custom-select shadow-none" name="jenjang_id" id="jenjang_id" onchange="change_jenjang()">
                                 <option disabled="" selected="">Pilih Kelas</option>
                                 <option value="11">Umum</option>
                                 <option value="12">Playgroup</option>
                                 <option value="13">TK</option>
                                 <option value="14">SD</option>
                                 <option value="15">SMP</option>
                                 <option value="16">SMA</option>
                                 <option value="17">SMK</option>
                                 <option value="18">Bahasa Asing</option>
                                 <option value="23">Mengaji</option>
                                 <option value="24">Mahasiswa</option>
                              </select>
                           </div>
                           <div class="col-12 col-sm-6" id="place_kelas"><br>
                              <label id="label_kurikulum">Pilih Program Les Privat</label>
                              <select class="custom-select shadow-none" name="kurikulum_id" onchange="change_kurikulum()" id="kurikulum_id">
                                 <option value="10">Les Gitar</option>
                                 <option value="11">Les Piano</option>
                                 <option value="12">Les Coding</option>
                                 <option value="13">Les Biola</option>
                                 <option value="13">Les Berkendara Mobil</option>
                                 <option value="13">Les Menjahit</option>
                                 <option value="13">Les Bahasa Jepang</option>
                                 <option value="13">Les Bahasa Inggris</option>
                                 <option value="13">Les Bahasa Jerman</option>
                                 <option value="13">Les Memasak</option>
                                 <option value="13">Les Memasak</option>
                                 <option value="13">Les Menghitung</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-row mb-2">
                           <div class="col-12 col-sm-4">
                              <label>Jumlah Siswa</label>
                              <select class="custom-select shadow-none" name="jumlah_siswa" id="jumlah_siswa">
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                              </select>
                           </div>
                           <div class="col-12 col-sm-4">
                              <label>Sistem Pembelajaran</label>
                              <select class="custom-select shadow-none" name="sistem_pembelajaran">
                                 <option value="Offline">Offline</option>
                                 <option value="Online">Online</option>
                              </select>
                           </div>
                           <div class="col-md-3" id="place_kelas" style="display:none">
                              <label id="label_kelas">Kelas</label>
                              <select class="custom-select shadow-none" id="select_kelas" name="kelas">
                              </select>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12 col-sm-6 my-1">
                              <label>Provinsi</label>
                              <select class="custom-select select2 select2-hidden-accessible" name="provinsi_id" id="provinsi_id" onchange="change_provinsi()" tabindex="-1" aria-hidden="true">
                                 <option value="">Pilih</option>
                                 <option value="11">LAMPUNG</option>
                              </select>
                              <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 445px;">
                                 <span class="selection">
                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-provinsi_id-container">
                                       <span class="select2-selection__rendered" id="select2-provinsi_id-container" title="Pilih">Pilih</span>
                                       <span class="select2-selection__arrow" role="presentation">
                                          <b role="presentation"></b>
                                       </span>
                                    </span>
                                 </span>
                                 <span class="dropdown-wrapper" aria-hidden="true">
                                 </span>
                              </span>
                           </div>
                           <div class="col-12 col-sm-6 my-1">
                              <label>Kab/Kota</label>
                              <select class="custom-select select2 select2-hidden-accessible" name="kota_id" id="kota_id" tabindex="-1" aria-hidden="true">
                                 <option value="">Pilih</option>
                                 <option value="11">BANDAR LAMPUNG</option>
                                 <option value="11">LAMPUNG BARAT</option>
                                 <option value="11">LAMPUNG SELATAN</option>
                                 <option value="11">LAMPUNG TIMUR</option>
                                 <option value="11">LAMPUNG TENGAH</option>
                                 <option value="11">LAMPUNG UTARA</option>
                                 <option value="11">MESUJI</option>
                                 <option value="11">METRO</option>
                                 <option value="11">PESAWARAN</option>
                                 <option value="11">PESISIR BARAT</option>
                                 <option value="11">PRINGSEWU</option>
                                 <option value="11">TANGGAMUS</option>
                                 <option value="11">TULANG BAWANG</option>
                                 <option value="11">TULANG BAWANG BARAT</option>
                                 <option value="11">WAY KANAN</option>
                              </select>
                              <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 445px;">
                                 <span class="selection">
                                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-kota_id-container">
                                       <span class="select2-selection__rendered" id="select2-kota_id-container" title="Pilih">Pilih</span>
                                       <span class="select2-selection__arrow" role="presentation">
                                          <b role="presentation"></b>
                                       </span>
                                    </span>
                                 </span>
                                 <span class="dropdown-wrapper" aria-hidden="true">
                                 </span>
                              </span>
                           </div>
                        </div>
                        <div class="form-group text-center mt-4">
                           <a href="#" class="btn btn-main" id="cek_paket">
                              <img src="https://www.funteacherprivate.com/landingpage/resources/images/Icons and Ilustrations/cari.svg" class="mr-2">Cek Biaya
                           </a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Books -->
      </section>

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