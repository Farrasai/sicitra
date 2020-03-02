<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Informasi Pengaduan Masyarkat Kabupaten Cilacap, Layanan Pengaduan untuk Anak, Perempuan dan Keluarga Berencana">
    <meta name="keywords" content="Sistem Informasi, Sistem, Informasi, Pengaduan, Pengaduan Masyarakat, Masyarakat, Sistem Informasi Pengaduan Masyarakat, Sistem Informasi Pengaduan Masyarakat Cilacap, Sistem Informasi Pengaduan Masyarakat Kabupaten Cilacap, Sistem Kekerasan, Sistem Pengaduan, Pengaduan Kekerasan, Kekerasan Anak, Kekerasan Perempuan, Keluarga Berencana, Sicitra, Puspaga, KB, Aduan Masyarakat, Konsultasi , Sistem Konsultasi, Sistem Aduan, Sistem Informasi Konsultasi">
    <link href="<?php echo base_url().'assets/images/favsicitra.png'?>" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap CSS online 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    -->
    
    <!-- Bootstrap Profil -->
    <script type="text/javascript" src="jquery.js"></script>
    <!-- Lokal Bosstrap -->
    <link href="<?php echo base_url();?>assets/css/landing-page.css" rel="stylesheet" >
    <link href="<?php echo base_url();?>assets/css/landing-page.min.css" rel="stylesheet" >
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" >
    <link href="<?php echo base_url();?>assets/css/bootstrap-grid.css" rel="stylesheet" >
    <link href="<?php echo base_url();?>assets/css/bootstrap-reboot.css" rel="stylesheet" >
    <link href="<?php echo base_url();?>assets1/css/ela/cs-skin-elastic.css" rel="stylesheet" >
    <link href="<?php echo base_url();?>assets1/css/ela/style.css" rel="stylesheet" >
    
    <style>
        .form-password {
          display: block;
          width: 100%;
          height: calc(2.25rem + 2px);
          padding: 0.375rem 0.75rem;
          font-size: 1rem;
          line-height: 1.5;
          color: #495057;
          background-color: #fff;
          background-clip: padding-box;
          border: 1px solid #ced4da;
          border-radius: 0.25rem;
          transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 0px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
    </style>




    <title> <?php echo $judul; ?> </title>
  </head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand ml-5" href="<?= base_url(); ?>menu">
    <img src="<?= base_url();?>assets/images/SICITRA.png" width="200" height="43" alt="">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="container">
    <div class="row">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>menu"><strong>Beranda</strong><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>Berita"><strong>Berita</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>Tentang"><strong>Tentang</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>Kontak"><strong>Kontak</strong></a>
      </li>
    </ul>
  </div>
  </div>
            <div class="btn-group dropleft">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hi, <strong> <?php echo $this->session->userdata("username"); ?></strong>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= base_url(); ?>Pengadu"><i class="menu-icon fa fa-user"></i> Profil</a>
                <a class="dropdown-item" href="<?php echo base_url('Login/logout'); ?>"><i class="menu-icon fa fa-power-off"></i> Logout</a>
              </div>
            </div>

  </div>
</nav>
</body>