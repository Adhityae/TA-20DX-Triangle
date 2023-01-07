<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Login | Our Teacher</title>
        <meta name="author" content="Our Teacher">
        <meta name="robots" content="index,follow">
        <meta name="googlebot" content="index,follow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- General CSS Files -->
        <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url("assets/css/responsive.css"); ?>" />
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url("assets/images/fevicon.png"); ?>" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery.mCustomScrollbar.min.css"); ?>" />

        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/fonts/all.min.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/fonts/font-awesome.min.css"); ?>" />

        <link rel="preconnect" href="<?php echo base_url("assets/fonts/fonts.googleapis.com"); ?>" />
        <link rel="preconnect" href="<?php echo base_url("assets/fonts/fonts.googleapis.com"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/fonts.googleapis.com/css2?family=Inter&amp;display=swap"); ?>" />

        <style>
            *{
                font-family: 'Inter', sans-serif;
            }
            body{
                background: linear-gradient(180deg, #FFFFFF 0%, #EEFEFF 100%);
                height: 100%;
            }
            .section{
                height: 100%;
            }
        </style>

        <!-- Custom Style -->
        <style type="text/css">
            .card{
                box-shadow: 0 2px 8px 0 rgba(0,0,0,.15);border:1px solid #D3D3D3;
            }
            .card-check{
                border-radius: 16px;
                max-height: 100px;
            }
            .active{
                box-shadow: 0 2px 8px 0 rgba(0,0,0,.15) !important;border:2px solid #4EDBE7 !important;
                border-radius: 16px;
                height: 126px;
            }
            .form-check-input{
                display: none;
            }
            .input-group .form-control{
                border-radius: 12px;
                background-color: transparent;
            }
            .input-group-text{
                border-radius: 12px;
                background-color: transparent;
                /*border: 0;*/
            }
            .left-no-line{
                border-left: 0;
            }
            .right-no-line{
                border-right: 0;
            }
            .btn-primary {
                color: #fff;
                background-color: #4EDBE7;
                border-color: #4EDBE7;
            }
            .btn-primary:hover {
                color: #fff;
                background-color: #4EDBE7;
                border-color: #4EDBE7;
            }
            .btn-primary:focus, .btn-primary.focus {
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
            }
            .btn-primary.disabled, .btn-primary:disabled {
                color: #fff;
                background-color: #4EDBE7;
                border-color: #4EDBE7;
            }
            .radius-13{
                border-radius: 13px;
            }
        </style>
    </head>
<body>
    <section class="section container pt-5" style="min-height: 768;">
        <div class="row">
            <div class="col-md-6 d-none d-sm-block">
                <a href="">
                <div class="logo"> <a href="<?= base_url() ?>index.php/Beranda/index"><img src="<?php echo base_url("assets/images/logo.svg"); ?>" alt="#" style="width: 100%"></a> </div>
                <img src='<?php echo base_url("assets/images/login.png"); ?>' alt="images-login" style="width: 80%">
                </a>
            </div>
            <div class="col-md-6">
                <form id="form_login" action="TA-20DX-Triangle/login_action" method="POST">
                    <input type="hidden" name="_token" value="msWEtdk2mZEKzEINt35vhHb9HO0CGbctKMavHqUR"><div class="mb-4">
                        <h5 class="text-center mb-1" style="color: black;font-weight: 600">Daftar</h5>
                        <p class="text-center text-muted" style="font-size: small">Pilih Tipe Akun Anda</p>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <div class="card card-check " id="siswa">
                                <div class="card-body">
                                    <div class="d-flex justify-content-around">
                                        <img src='<?php echo base_url("assets/images/siswa.png"); ?>' style="max-height: 40px">
                                        <div class="d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="tipe_akun" id="akun_siswa" value="siswa">
                                            <h5 class="text-center mb-1" style="color: black;font-weight: 600">Siswa</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-check " id="guru">
                                <div class="card-body">
                                    <div class="d-flex justify-content-around">
                                        <img src="<?php echo base_url("assets/images/guru.png"); ?>" style="max-height: 40px">
                                        <div class="d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="tipe_akun" id="akun_guru" value="guru">
                                            <h5 class="text-center mb-1" style="color: black;font-weight: 600">Tutor</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-envelope">
                                    <!-- ::before -->
                                </i>
                            </span>
                        </div>
                        <input type="text" name="username" class="form-control  shadow-none" placeholder="Nama Lengkap" value="">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-envelope">
                                    <!-- ::before -->
                                </i>
                            </span>
                        </div>
                        <input type="text" name="email" class="form-control  shadow-none" placeholder="Username / Email" value="">
                    </div>
                    <div class="input-group mb-4" id="input-password">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-key">
                                    <!-- ::before -->
                                </i>
                            </span>
                        </div>
                        <input type="password" class="form-control right-no-line  shadow-none" name="password" id="password" placeholder="Password">
                        <div class="input-group-append">
                            <span class="input-group-text left-no-line" id="show-pass">
                                <i class="fa fa-eye-slash">
                                    <!-- ::before -->
                                </i>
                            </span>
                        </div>
                    </div>
                    <div class="input-group mb-4" id="input-password2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-key">
                                    <!-- ::before -->
                                </i>
                            </span>
                        </div>
                        <input type="password" class="form-control right-no-line  shadow-none" name="password" id="password-confirm" placeholder="Konfirmasi Password">
                        <div class="input-group-append">
                            <span class="input-group-text left-no-line" id="show-pass">
                                <i class="fa fa-eye-slash">
                                    <!-- ::before -->
                                </i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" id="button_login" class="btn btn-primary shadow-none btn-block " style="border-radius: 12px">
                        Daftar
                        </button>
                    </div>
                    <div class="text-center mt-5">
                    <p>
                        Sudah Punya Akun?
                        <a href="<?= base_url() ?>index.php/Beranda/signup" style="text-decoration: none;color:black;font-weight: 600">Masuk</a>
                    </p>
                </div>
                </form>
                <div class="text-center mt-5">
                    <p>
                        Dengan login, kamu telah menyetujui
                        <a href="" id="link-syarat" style="text-decoration: none;color:black;font-weight: 600"> Syarat &amp; Ketentuan</a>
                        <br>
                        serta
                        <a href="TA-20DX-Triangle/kebijakan_privasi_dan_keamanan" style="text-decoration: none;color:black;font-weight: 600"> Kebijakan Privasi</a>
                        kami
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- General JS Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function (){
       $('.section').css('min-height', screen.height);
    });
    </script>
    <script type="text/javascript">
        $('#link-syarat').click(function(){
            var href = $(this).attr('href');
            if (href === ''){
                alert('Silahkan pilih terlebih dahulu Tipe Akun');
            }
        });

        $('#siswa').click(function(){
            $('#akun_guru').prop('checked', false);
            $('#akun_siswa').prop('checked', true);
            class_siswa_before = $(this).attr('class');
            if (class_siswa_before === 'card card-check '){
                $("#siswa").attr('class', 'card card-check active');
                $("#guru").attr('class', 'card card-check ')
                $("#link-syarat").attr("href", "TA-20DX-Triangle/syarat_ketentuan_siswa");
            }
        });

        $('#guru').click(function(){
            $('#akun_guru').prop('checked', true);
            $('#akun_siswa').prop('checked', false);
            class_guru_before = $(this).attr('class');
            if(class_guru_before === 'card card-check '){
                $("#guru").attr('class', 'card card-check active');
                $("#siswa").attr('class', 'card card-check ');
                $("#link-syarat").attr("href", "TA-20DX-Triangle/syarat_ketentuan_guru");
            }
        });

        $('#button_login').click(function (){
            tipe_akun = $("input[name='tipe_akun']:checked").val();
            if (tipe_akun === undefined){
                alert('Pilih terlebih dahulu tipe akun');
            }else{
                $('#form_login').submit();
            }
        });

        $('#show-pass').click(function(){
            if($('#password').attr("type") === "text"){
                $('#password').attr('type', 'password');
                $('#show-pass i').removeClass( "fa fa-eye" );
                $('#show-pass i').addClass( "fa fa-eye-slash" );
            }else if($('#password').attr("type") === "password"){
                $('#password').attr('type', 'text');
                $('#show-pass i').removeClass( "fa fa-eye-slash" );
                $('#show-pass i').addClass( "fa fa-eye" );
            }
        });
    </script>
</body>
</html>