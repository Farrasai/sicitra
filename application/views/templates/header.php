<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Informasi Pengaduan Masyarkat Kabupaten Cilacap, Layanan Pengaduan untuk Anak, Perempuan dan Keluarga Berencana">
    <meta name="keywords" content="Sistem Informasi, Sistem, Informasi, Pengaduan, Pengaduan Masyarakat, Masyarakat, Sistem Informasi Pengaduan Masyarakat, Sistem Informasi Pengaduan Masyarakat Cilacap, Sistem Informasi Pengaduan Masyarakat Kabupaten Cilacap, Sistem Kekerasan, Sistem Pengaduan, Pengaduan Kekerasan, Kekerasan Anak, Kekerasan Perempuan, Keluarga Berencana, Sicitra, Puspaga, KB, Aduan Masyarakat, Konsultasi , Sistem Konsultasi, Sistem Aduan, Sistem Informasi Konsultasi">
    <link href="<?php echo base_url().'assets/images/favsicitra.png'?>" rel="shortcut icon" type="image/x-icon">

    <!-- Bootstrap CSS online 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    -->

    <!-- Lokal Bosstrap -->
    <link href="<?php echo base_url();?>assets/css/landing-page.css" rel="stylesheet" >
    <link href="<?php echo base_url();?>assets/css/landing-page.min.css" rel="stylesheet" >
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" >
    <link href="<?php echo base_url();?>assets/css/bootstrap-grid.css" rel="stylesheet" >
    <link href="<?php echo base_url();?>assets/css/bootstrap-reboot.css" rel="stylesheet" >
    <link href="<?php echo base_url();?>assets1/css/ela/cs-skin-elastic.css" rel="stylesheet" >
    <link href="<?php echo base_url();?>assets1/css/ela/style.css" rel="stylesheet" >
    <script type="text/javascript" src="assets/js/Chart.js"></script>




    <title> <?php echo $judul; ?> | Pengaduan Masyarakat </title>
  </head>
  <body>

 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand ml-5" href="<?= base_url(); ?>home">
    <img src="<?= base_url();?>assets/images/SICITRA.png" width="200" height="43" alt="">
  </a>
  <div class="container">

  <div class="container">
        <a class="btn btn-primary float-right text-white shadow" data-toggle="modal" data-target="#myModal"><strong>MASUK/DAFTAR</strong></a>
      </div>
          
</nav>

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog mt-sm-5">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        
        <!-- body modal -->
        <form action="<?php echo base_url(); ?>Login/aksi_login" method="post">
<h5 class="card-header bg-primary text-white">MASUK ATAU DAFTAR</h5>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Username</strong></label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
  </div>
  <div class="form-group ml-3 mr-3">
    <label for="exampleInputPassword1"><strong>Password</strong></label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
    <small class="form-text text-info"><a class="btn" data-toggle="modal" data-target="#myModalLupa">Lupa Password ?</a></small>
  </div>
  
          <a class="btn btn-primary ml-3 mr-3 mb-3 text-white" data-toggle="modal" data-target="#myModalregister"><strong>Daftar</strong></a>
          <button type="submit" class="btn btn-success float-right ml-3 mr-3 mb-3" value="login"><strong>Masuk</strong></button>
</form>
        </div>
        <!-- footer modal -->
      </div>
    </div>
  </div>
  
  
<!-- Ini komposisi Modal nya -->
  <div id="myModalregister" class="modal fade" role="dialog">
    <div class="modal-dialog mt-sm-5">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        
        <!-- body modal -->


        <?php echo form_open_multipart(base_url('Register/daftar'));?>
<h5 class="card-header bg-primary text-white">Form Daftar</h5>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>NIK</strong></label>
    <input type="text" class="form-control" id="nik_pengadu" name="nik_pengadu" placeholder="Masukan NIK">
    <small class="form-text text-danger"><?= form_error('nik_pengadu'); ?></small>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Username</strong></label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
  </div>
  <div class="form-group ml-3 mr-3">
    <label for="exampleInputPassword1"><strong>Password</strong></label>
    <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukkan Password">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Nama Lengkap</strong></label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Jenis Kelamin</strong></label>
    <select class="custom-select my-1 mr-sm-2" id="jk" name="jk">
    <option selected>Pilih..</option>
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
  </select>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Alamat</strong></label>
    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>No Telepon</strong></label>
    <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="Masukan No Telepon">
  </div>
  <?php
     $tgl= date('Y-m-d');
  ?>
  <input type="hidden" class="form-control" id="tgl_daftar" name="tgl_daftar" value="<?= $tgl; ?>">
  <div class="form-group ml-3 mr-3 mt-3">
      <label for="text"><strong>Upload Identitas</strong></label><br>
      <input type="file" name="gambar"/>
      <small class="form-text text-muted">KTP/SIM/Passport (Tipe file pdf, doc, docx, rar, zip, jpg, jpeg; max 5 MB)</small>
  </div>
  <button type="button" class="btn btn-primary float-left ml-3 mr-3 mb-3" class="close" data-dismiss="modal" aria-label="Close">Kembali</button>
  <button type="submit" class="btn btn-success float-right ml-3 mr-3 mb-3" value="registrasi">Daftar</button>
</form>
        </div>
        <!-- footer modal -->
      </div>
    </div>

    <div id="myModalLupa" class="modal fade" role="dialog">
    <div class="modal-dialog mt-sm-5">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        
        <!-- body modal -->
        <form action="#" method="post">
<h5 class="card-header bg-danger text-white"><i class="fa fa-warning (alias)"></i> Lupa Password</h5>
  <div class="form-group ml-3 mr-3 mt-3">
    <p>Silahkan hubungi Admin untuk mendapatkan password anda kembali</p>
    <p>0822-2703-8308</p>
  </div>
</form>
        </div>
        <!-- footer modal -->
      </div>
    </div>
    
    </div>

  