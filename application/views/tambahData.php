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
       <div class="container">
        <div class="card my-4">
            <div class="card-header bg-primary text-white ">
            Tambah Data Pelajar
            </div>
            <div class="card-body">
            <form action='<?php echo base_url("Beranda/tambah_aksi"); ?>' method="post">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>    
                
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>    
            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control">
            </div>    
            <div class="form-group">
                <label>Status</label>
                <input type="text" name="status" class="form-control">
            </div>
            <div class="form-group">
                        <label for="exampleFormControlSelect1">Mata Pelajaran</label>
                        <select class="form-control" name="mata_pelajaran" id="exampleFormControlSelect1">
                          <option>~~ Pilih ~~</option>
                          <option value='Pemrograman'>Pemrograman</option>
                          <option value='Desain'>Desain</option>
                          <option value='English'>English</option>
                        </select>
                      </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" href="<?php echo base_url("Beranda/admin"); ?>">kembali</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
            </div>
        </div>

       
       </div> 
      

      
      
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