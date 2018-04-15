<body class="fixed-header windows desktop pace-done menu-behind">
  <!-- BEGIN SIDEBPANEL-->
  <nav class="page-sidebar" data-pages="sidebar">
    <!-- BEGIN SIDEBAR MENU HEADER-->
    <div class="sidebar-header">
      <img src="<?php echo base_url('assets'); ?>/img/logo.png" alt="logo" class="brand" data-src="<?php echo base_url('assets'); ?>/img/logo.png" data-src-retina="<?php echo base_url('assets'); ?>/img/logo.png" width="180" height="35">
      <div class="sidebar-header-controls">
        <button type="button" class="btn btn-link hidden-md-down" data-toggle-pin="sidebar" style="padding-bottom: 35px;">
          <i class="fa fs-12"> Sidebar</i>
        </button>
      </div>
    </div>
    <!-- END SIDEBAR MENU HEADER-->
    <!-- START SIDEBAR MENU -->
    <div class="sidebar-menu">
      <!-- BEGIN SIDEBAR MENU ITEMS-->
      <ul class="menu-items">
        <li class="m-t-30 ">
          <a href="<?php echo base_url('?'); ?>" class="detailed">
            <span class="title">Dashboard</span>
            <!-- <span class="details">12 New Updates</span> -->
          </a>
          <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
        </li>
        <!-- <li class="">
          <a href="email.html" class="detailed">
            <span class="title">Email</span>
            <span class="details">234 New Emails</span>
          </a>
          <span class="icon-thumbnail"><i class="pg-mail"></i></span>
        </li> -->
        <?php if($this->session->userdata('tipe')=='admin'){ ?>
        <li>
         <a href="javascript:;"><span class="title">Data Master</span>
           <span class=" arrow"></span></a>
           <span class="icon-thumbnail"><i class="pg-contact_book"></i></span>
           <ul class="sub-menu">
             <li class="">
               <a href="<?php echo site_url('data/dokter'); ?>">Dokter</a>
               <span class="icon-thumbnail">D</span>
             </li>
             <li class="">
               <a href="<?php echo site_url('data/pasien'); ?>">Pasien</a>
               <span class="icon-thumbnail">P</span>
             </li>
         <!-- <li class="">
         <a href="<?php echo site_url('data/resep'); ?>">Resep</a>
         <span class="icon-thumbnail">R</span>
       </li> -->
       <li class="">
         <a href="<?php echo site_url('data/obat'); ?>">Obat</a>
         <span class="icon-thumbnail">O</span>
       </li>
       <li class="">
         <a href="<?php echo site_url('data/pegawai'); ?>">Pegawai</a>
         <span class="icon-thumbnail">Pg</span>
       </li> 
       <li class="">
         <a href="<?php echo site_url('data/poli'); ?>">Poliklinik</a>
         <span class="icon-thumbnail">Pk</span>
       </li>
       <li class="">
         <a href="<?php echo site_url('data/jenisbiaya'); ?>">Jenis Biaya</a>
         <span class="icon-thumbnail">JB</span>
       </li>
       <li class="">
         <a href="<?php echo site_url('data/jadwal'); ?>">Jadwal Praktek</a>
         <span class="icon-thumbnail">JP</span>
       </li>
     </ul>
   </li>
   <?php 

 }
 ?>
 <li>
   <a href="javascript:;"><span class="title">Transaksi</span>
     <span class=" arrow"></span></a>
     <span class="icon-thumbnail"><i class="pg-bag"></i></span>
     <ul class="sub-menu">
       <li class="">
         <a href="<?php echo site_url('transaksi/daftar'); ?>">Pendaftaran</a>
         <span class="icon-thumbnail">Pd</span>
       </li>
       <li class="">
         <a href="<?php echo site_url('transaksi/periksa'); ?>">Pemeriksaan</a>
         <span class="icon-thumbnail">Pr</span>
       </li>
       <li class="">
         <a href="<?php echo site_url('transaksi/resep'); ?>">Resep</a>
         <span class="icon-thumbnail">R</span>
       </li>
     </ul>
   </li>
   <?php if($this->session->userdata('tipe')=='admin'){ ?>
   <li>
     <a href="javascript:;"><span class="title">Laporan</span>
       <span class=" arrow"></span></a>
       <span class="icon-thumbnail"><i class="pg-charts"></i></span>
       <ul class="sub-menu">
         <li class="">
           <a href="<?php echo site_url('laporan/jadwal'); ?>">Jadwal Praktek</a>
           <span class="icon-thumbnail">JP</span>
         </li>
         <li class="">
           <a href="<?php echo site_url('laporan/periksa'); ?>">Pasien Diperiksa</a>
           <span class="icon-thumbnail">PD</span>
         </li>
         <li class="">
           <a href="<?php echo site_url('laporan/pemeriksaan'); ?>">Pemasukan dari Pemeriksaan</a>
           <span class="icon-thumbnail">PP</span>
         </li>
         <li class="">
           <a href="<?php echo site_url('laporan/obat'); ?>">Penjualan Obat</a>
           <span class="icon-thumbnail">PO</span>
         </li>
       </ul>
     </li>
     <?php } ?>

         <!-- <li class="m-t-30 ">
         <a href="<?php echo site_url('home/logout'); ?>" class="detailed">
         <span class="title">Logout</span>
         <span class="details">12 New Updates</span>
         </a>
         <span class="bg-success icon-thumbnail"><i class="pg-power"></i></span>
       </li> -->
     </ul>
     <div class="clearfix"></div>
   </div>
   <!-- END SIDEBAR MENU -->
 </nav>
 <!-- END SIDEBAR -->
 <!-- END SIDEBPANEL-->
 <!-- START PAGE-CONTAINER -->
 <div class="page-container ">
   <!-- START HEADER -->
   <div class="header ">
     <!-- START MOBILE SIDEBAR TOGGLE -->
     <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
     </a>
     <!-- END MOBILE SIDEBAR TOGGLE -->
     <div class="">
       <div class="brand inline   ">
         <img src="<?php echo base_url('assets'); ?>/img/logo.png" alt="logo" data-src="<?php echo base_url('assets'); ?>/img/logo.png" data-src-retina="<?php echo base_url('assets'); ?>/img/logo.png" width="180" height="35">
       </div>
     </div>
     <div class="d-flex align-items-center">
       <!-- START User Info-->
       <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down">
         <span class="semi-bold"><?php echo $nama; ?></span>
       </div>
       <div class="dropdown pull-right hidden-md-down">
         <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <span class="thumbnail-wrapper d32 circular inline">
             <img src="<?php echo base_url('assets'); ?>/img/profiles/avatar.jpg" alt="" data-src="<?php echo base_url('assets'); ?>/img/profiles/avatar.jpg" data-src-retina="<?php echo base_url('assets'); ?>/img/profiles/avatar_small2x.jpg" width="32" height="32">
           </span>
         </button>
         <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
           <a href="<?php echo site_url('users'); ?>" class="dropdown-item"><i class="pg-settings_small"></i> Pengaturan</a>
           <!-- <a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a> -->
           <!-- <a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a> -->
           <a href="<?php echo site_url('home/logout'); ?>" class="clearfix bg-master-lighter dropdown-item">
             <span class="pull-left">Logout</span>
             <span class="pull-right"><i class="pg-power"></i></span>
           </a>
         </div>
       </div>
       <!-- END User Info-->
       
     </div>
   </div>
   <!-- END HEADER -->
   <!-- START PAGE CONTENT WRAPPER -->
   <div class="page-content-wrapper ">
     <!-- START PAGE CONTENT -->
     <div class="content ">
       <!-- START JUMBOTRON -->
       <div class="jumbotron" data-pages="parallax">
         <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
           <div class="inner">
             <!-- START BREADCRUMB -->
             <ol class="breadcrumb">
               <?php 
               $posisi1='';
               $posisi2='';
                    // Data Master
               if($this->uri->segment(1)=='data' && $this->uri->segment(2)=='dokter'){
                $posisi1='data';
                $posisi2='dokter';
              }
              elseif($this->uri->segment(1)=='data' && $this->uri->segment(2)=='pasien'){
                $posisi1='data';
                $posisi2='pasien';
              }
              elseif($this->uri->segment(1)=='data' && $this->uri->segment(2)=='resep'){
                $posisi1='data';
                $posisi2='resep';
              }
              elseif($this->uri->segment(1)=='data' && $this->uri->segment(2)=='obat'){
                $posisi1='data';
                $posisi2='obat';
              }
              elseif($this->uri->segment(1)=='data' && $this->uri->segment(2)=='jenisbiaya'){
                $posisi1='data';
                $posisi2='jenis biaya';
              }
              elseif($this->uri->segment(1)=='data' && $this->uri->segment(2)=='jadwal'){
                $posisi1='data';
                $posisi2='jadwal praktek';
              }
              elseif($this->uri->segment(1)=='data' && $this->uri->segment(2)=='pegawai'){
                $posisi1='data';
                $posisi2='pegawai';
              } 
                    // Transaksi
              elseif($this->uri->segment(1)=='transaksi' && $this->uri->segment(2)=='daftar'){
                $posisi1='transaksi';
                $posisi2='pendaftaran';
              }
              elseif($this->uri->segment(1)=='transaksi' && $this->uri->segment(2)=='periksa'){
                $posisi1='transaksi';
                $posisi2='pemeriksaan';
              }
              elseif($this->uri->segment(1)=='transaksi' && $this->uri->segment(2)=='resep'){
                $posisi1='transaksi';
                $posisi2='resep';
              }
                    // Laporan
              elseif($this->uri->segment(1)=='laporan' && $this->uri->segment(2)=='jadwal'){
                $posisi1='laporan';
                $posisi2='jadwal praktek';
              }
              elseif($this->uri->segment(1)=='laporan' && $this->uri->segment(2)=='periksa'){
                $posisi1='laporan';
                $posisi2='pasien diperiksa';
              }
              elseif($this->uri->segment(1)=='laporan' && $this->uri->segment(2)=='pemeriksaan'){
                $posisi1='laporan';
                $posisi2='pemasukan pemeriksaan';
              }
              elseif($this->uri->segment(1)=='laporan' && $this->uri->segment(2)=='obat'){
                $posisi1='laporan';
                $posisi2='penjualan obat';
              }
                    //End elseif
              else{
                $posisi1='home';
                $posisi2='dashboard';
              }
              if($this->uri->segment(1)=='' && $this->uri->segment(2)==''){
                echo "<li class='breadcrumb-item'>".ucfirst($posisi1)."</li>";
                echo "<li class='breadcrumb-item active'>";
                    // <a href='".base_url('?')."'>".
                echo ucfirst($posisi2);
                    // </a>
                echo "</li>";
              }
              else{
                echo "<li class='breadcrumb-item'>".ucfirst($posisi1)."</li>";
                echo "<li class='breadcrumb-item active'>";
                    // <a href='".site_url($posisi1."/".$posisi2)."'>".
                echo ucfirst($posisi2);
                    // </a>
                echo "</li>";
              }
              ?>

        <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li>
          <li class="breadcrumb-item active">Blank template</li> -->
        </ol>
        <!-- END BREADCRUMB -->
      </div>
    </div>
  </div>
  <!-- END JUMBOTRON -->
