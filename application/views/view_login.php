<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Medical Center - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
  <link rel="apple-touch-icon" href="<?php echo base_url('assets'); ?>/pages/ico/60.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets'); ?>/pages/ico/76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets'); ?>/pages/ico/120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets'); ?>/pages/ico/152.png">
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="<?php echo base_url('assets'); ?>/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="<?php echo base_url('assets'); ?>/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="<?php echo base_url('assets'); ?>/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="<?php echo base_url('assets'); ?>/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
  <link class="main-stylesheet" href="<?php echo base_url('assets'); ?>/pages/css/pages.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/pages/css/windows.chrome.fix.css" />'
    }
  </script>
</head>
<body class="fixed-header ">
  <div class="login-wrapper ">
    <!-- START Login Background Pic Wrapper-->
    <div class="bg-pic">
      <!-- START Background Pic-->
      <img src="<?php echo base_url('assets'); ?>/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src="<?php echo base_url('assets'); ?>/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src-retina="<?php echo base_url('assets'); ?>/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" alt="" class="lazy">
      <!-- END Background Pic-->
      <!-- START Background Caption-->
      <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
        <h2 class="semi-bold text-white">
        Medical Center membuat mudah dalam proses pengelolaan data</h2>
        <p class="small">
          Created by Mochammad Faisal © 2018 MOCFAISAL.
        </p>
      </div>
      <!-- END Background Caption-->
    </div>
    <!-- END Login Background Pic Wrapper-->
    <!-- START Login Right Container-->
    <div class="login-container bg-white">
      <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <img src="<?php echo base_url('assets'); ?>/img/logo.png" alt="logo" data-src="<?php echo base_url('assets'); ?>/img/logo.png" data-src-retina="<?php echo base_url('assets'); ?>/img/logo.png" width="250" height="50">
        <p class="p-t-35">Masuk ke akunmu</p>
        <!-- START Login Form -->
        <form id="form-login" class="p-t-15" role="form" action="<?php echo site_url('login/cek'); ?>" method="post">
          <!-- START Form Control-->
          <div class="form-group form-group-default">
            <label>Login</label>
            <div class="controls">
              <input type="text" name="username" placeholder="Username" class="form-control" required>
            </div>
          </div>
          <!-- END Form Control-->
          <!-- START Form Control-->
          <div class="form-group form-group-default">
            <label>Password</label>
            <div class="controls">
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
          </div>
          <!-- START Form Control-->
          <div class="row"><!-- 
            <div class="col-md-6 no-padding sm-p-l-10">
              <div class="checkbox ">
                <input type="checkbox" value="1" id="checkbox1">
                <label for="checkbox1">Keep Me Signed in</label>
              </div>
           </div>
            <div class="col-md-6 d-flex align-items-center justify-content-end">
              <a href="#" class="text-info small">Bantuan? Contact Support</a>
            </div>
          --></div>
          <!-- END Form Control-->
          <div class="row justify-content-center full-width m-t-20">
            <button class="btn btn-primary btn-animated from-left fa fa-key col-md-12" type="submit"><span>Masuk</span></button>
          </div>
        </form>
        <!--END Login Form-->
        <div class="pull-bottom sm-pull-bottom"><!-- 
          <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
            <div class="col-sm-3 col-md-2 no-padding">
              <img alt="" class="m-t-5" data-src="<?php echo base_url('assets'); ?>/img/logo.png" data-src-retina="<?php echo base_url('assets'); ?>/img/logo.png" height="25" src="<?php echo base_url('assets'); ?>/img/logo.png" width="135">
            </div>
            <div class="col-sm-9 no-padding m-t-10">
              <p>
                <small>
                 Create a pages account. If you have a facebook account, log into it for this
                 process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#"
                 class="text-info">Google</a>
               </small>
             </p>
           </div>
         </div>
       --></div>
     </div>
   </div>
   <!-- END Login Right Container-->
 </div>
 <!-- START OVERLAY -->
 <div class="overlay hide" data-pages="search">
  <!-- BEGIN Overlay Content !-->
  <div class="overlay-content has-results m-t-20">
    <!-- BEGIN Overlay Header !-->
    <div class="container-fluid">
      <!-- BEGIN Overlay Logo !-->
      <img class="overlay-brand" src="<?php echo base_url('assets'); ?>/img/logo.png" alt="logo" data-src="<?php echo base_url('assets'); ?>/img/logo.png" data-src-retina="<?php echo base_url('assets'); ?>/img/logo.png" width="180" height="35">
      <!-- END Overlay Logo !-->
      <!-- BEGIN Overlay Close !-->
      <a href="#" class="close-icon-light overlay-close text-black fs-16">
        <i class="pg-close"></i>
      </a>
      <!-- END Overlay Close !-->
    </div>
    <!-- END Overlay Header !-->
    <div class="container-fluid"></div>
    <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
    <div class="container-fluid"></div>
    <!-- END Overlay Search Results !-->
  </div>
  <!-- END Overlay Content !-->
</div>
<!-- END OVERLAY -->
<!-- BEGIN VENDOR JS -->
<script src="<?php echo base_url('assets'); ?>/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/tether/js/tether.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/plugins/classie/classie.js"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END VENDOR JS -->
<script src="<?php echo base_url('assets'); ?>/pages/js/pages.min.js"></script>
<script>
  $(function()
  {
    $('#form-login').validate()
  })
</script>
</body>
</html>