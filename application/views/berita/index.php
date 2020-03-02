<body background="<?= base_url();?>assets/images/lp1.jpg" style="background-repeat">

<div class="container mt-3">
    
    <div class="row ml-1">
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb shadow">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>menu">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Berita</li>
          </ol>
        </nav>
        </div>
    </div>
    
    <div class="row ml-1">
        <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
      <center>Selamat datang di Portal Konsultasi Puspaga dan Keluarga Berencana</center>
        </div>
        </div>
    </div>
    
    <div class="row">
    <?php foreach ($konsultasi_kb as $kb): ?>
   <div class="col-md-6"><br>
       <div class="card bg-light ml-3">
  <img class="card" src="<?= base_url();?>assets/images/KB.jpg" alt="">

  <div class="card-body">
    <?php
    $originalDate = $kb['tgl_konsul'];
    $newDate = date("d-m-Y", strtotime($originalDate));
    ?>
      <p class="card-text float-right"><small class="text-muted"><?= $newDate; ?></small></p><br>
    <h4 class="card-title"><?= $kb['judul_konsul']; ?></h4><br>
    <h6 class="card-subtitle mb-2 text-muted"><i class="menu-icon fa fa-users"></i> Username : Anonymous</h6>
    <p><i class="menu-icon fa fa-comments"></i> <strong>Perihal Konsultasi</strong>  : <?= $kb['perihal_konkb']; ?></p><br>
    <h6 class="card-subtitle mb-2 text-muted"><i class="menu-icon fa fa-user"></i> Admin</h6>
    <p><i class="menu-icon fa fa-comments-o"></i> <strong>Jawab</strong> : <?= $kb['jawaban']; ?></p>
  </div>
</div>
</div>
<?php endforeach; ?>
</div><br>

    <div class="row">
            <?php foreach ($konsultasi_puspaga as $kp): ?>
       <div class="col-md-6"><br>
           <div class="card bg-light ml-3">
      <img class="card" src="<?= base_url();?>assets/images/PUSPAGA.jpg" alt="">
      <div class="card-body">
        <?php
        $originalDate = $kp['tgl_konsul'];
        $newDate = date("d-m-Y", strtotime($originalDate));
        ?>
          <p class="card-text float-right"><small class="text-muted" ><?= $newDate; ?></small></p><br>
        <h4 class="card-title"><?= $kp['judul_konsul']; ?></h4><br>
        <h6 class="card-subtitle mb-2 text-muted"><i class="menu-icon fa fa-users"></i> Username : Anonymous</h6>
        <p><i class="menu-icon fa fa-comments"></i> <strong>Perihal Konsultasi</strong> : <?= $kp['perihal_konpus']; ?></p><br>
        <h6 class="card-subtitle mb-2 text-muted"><i class="menu-icon fa fa-user"></i> Admin</h6>
    <p><i class="menu-icon fa fa-comments-o"></i> <strong>Jawab</strong> : <?= $kp['jawaban']; ?></p>
      </div>
    </div>
    </div>
            <?php endforeach; ?>
    </div><br>
    
    <div class="row ml-3">
        
        <?php echo $links; ?>
    </div>
</div><br>
