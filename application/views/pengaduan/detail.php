<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>menu">Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>pengaduan">Pengaduan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
          </ol>
        </nav>
        </div>
    </div>
    
        <div class="col-md-8 offset-md-2">
    <div class="card">
        <h5 class="card-header bg-primary text-white">Form Detail Aduan</h5>
        <div class="card-body">
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1"><strong>Tanggal Aduan</strong></label>
    <?php
        $originalDate = $pengaduan['tgl_aduan'];
        $newDate = date("d-m-Y", strtotime($originalDate));
    ?>
    <p><?= $newDate;?></p>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div><hr>
  <div class="form-group">
       <label for="text"><strong>Judul aduan</strong></label>
    <p><?= $pengaduan['judul_aduan'];?></p>
   </div><hr>
   <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><strong>Jenis Kasus</strong></label>
  <p><?= $pengaduan['nama_kasus'];?></p><hr>
  <!--<div class="form-group">
    <label for="exampleInputEmail1"><strong>NIK Pengadu</strong></label>
    <p><?= $pengaduan['nik_pengadu'];?></p>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div><hr>
  <div class="form-group">
    <label for="exampleInputEmail1"><strong>Nama Pengadu</strong></label>
    <p><?= $pengaduan['nama'];?></p>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div><hr>-->
  <div class="form-group">
    <label for="exampleInputEmail1"><strong>Data Korban</strong></label><br>
    <a class="btn-sm btn-info text-white" data-toggle="modal" data-target="#myModalValid">Lihat</a>
  </div><hr>
  <form class="form-group">
   <div class="form-group">
    <label for="exampleFormControlTextarea1"><strong>Perihal Aduan</strong></label>
    <p><?= $pengaduan['perihal_aduan'];?></p>
  </div><hr>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><strong>Status Aduan</strong></label>
    <p><?php
                                            if ($pengaduan['status_aduan']=='Selesai') {

                                                echo '<p style="color:#00FF7F"><strong>'.$pengaduan['status_aduan'].'</strong></p>';

                                                }else if ($pengaduan['status_aduan']=='Proses'){

                                                echo  '<p style="color:#1E90FF"><strong>'.$pengaduan['status_aduan'].'</strong></p>';

                                                } else if ($pengaduan['status_aduan']=='Tidak Valid'){
                                                echo  '<p style="color:black"><strong>'.$pengaduan['status_aduan'].'</strong></p>';
                                                }
                                                else{
                                                    echo  '<p style="color:#FF4500"><strong>'.$pengaduan['status_aduan'].'</strong></p>';
                                                }  
                                                ?></p>
  </div><hr>
  <div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-md-12 ">
      <h4>Detail Proses</h4>
      <ul class="timeline">
<?php foreach ( $proses as $pro) : ?>
        <li>
          <?php
            $originalDate = $pro['tgl_proses'];
              $newDate = date("d-m-Y", strtotime($originalDate));
                ?>
          <a class="float-left" style="color:#00CED1">&nbsp;<?= $newDate; ?></a><br>
          <p><?= $pro['detail_proses']; ?></p> 
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

<div id="myModalValid" class="modal fade" role="dialog">
    <div class="modal-dialog mt-sm-5">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        
        <!-- body modal -->
        <form action="#" method="post">
<h5 class="card-header bg-info text-white">Informasi</h5>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="exampleInputEmail1"><strong>NIK Korban</strong></label>
    <p><?= $pengaduan['nik_korban'];?></p>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="exampleInputEmail1"><strong>Nama Korban</strong></label>
    <p><?= $pengaduan['nama_korban'];?></p>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="exampleInputEmail1"><strong>Tempat Lahir Korban</strong></label>
    <p><?= $pengaduan['tmpt_lahir'];?></p>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="exampleInputEmail1"><strong>Tanggal Lahir Korban</strong></label>
    <?php
        $originalDate = $pengaduan['tgl_lahir'];
        $newDate = date("d-m-Y", strtotime($originalDate));
    ?>

    <p><?= $newDate;?></p>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="exampleInputEmail1"><strong>Usia Korban</strong></label>
    <p><?= $pengaduan['usia'];?> Tahun</p>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="exampleInputEmail1"><strong>Agama Korban</strong></label>
    <p><?= $pengaduan['agama'];?></p>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="exampleInputEmail1"><strong>Alamat Korban</strong></label>
    <p><?= $pengaduan['alamat'];?></p>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="exampleInputEmail1"><strong>Pendidikan Korban</strong></label>
    <p><?= $pengaduan['pendidikan'];?></p>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="exampleInputEmail1"><strong>Pekerjaan Korban</strong></label>
    <p><?= $pengaduan['pekerjaan'];?></p>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="exampleInputEmail1"><strong>No. Telepon Korban</strong></label>
    <p><?= $pengaduan['no_tlp'];?></p>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="exampleInputEmail1"><strong>Status Kawin Korban</strong></label>
    <p><?= $pengaduan['status_kawin'];?></p>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="exampleInputEmail1"><strong>Keterbatasaan Korban</strong></label>
    <p><?= $pengaduan['difabel'];?></p>
  </div>
  <button type="button" class="btn btn-primary float-left ml-3 mr-3 mb-3" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-arrow-left"></i> Kembali</button>
</form>
        </div>
        <!-- footer modal -->
      </div>
    </div>

</form>
</form>
</div>
</div>
</div>
</div><br><br>