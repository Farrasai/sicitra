<div class="container mt-3">
    
    <div class="row">
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>menu">Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>pengaduan">Pengaduan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Edit Aduan</li>
          </ol>
        </nav>
        </div>
    </div>
    
    <div class="card">
        <h5 class="card-header bg-primary text-white">Form Edit Pengaduan</h5>
        <div class="card-body">
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $pengaduan['id_aduan'];?>">
  <div class="form-group">
    <label for="exampleInputEmail1">NIK Pengadu</label>
    <input type="text" class="form-control" id="nik_pengadu" name="nik_pengadu" placeholder="Masukkan NIK Pengadu" value="<?= $pengaduan['nik_pengadu'];?>" readonly>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NIK Korban</label>
    <input type="text" class="form-control" id="nik_korban" name="nik_korban" placeholder="Masukkan NIK Korban" value="<?= $pengaduan['nik_korban'];?>">
    <small class="form-text"><a class="btn-sm btn-info text-white" data-toggle="modal" data-target="#myModalKorban">List Korban yang telah didaftarkan</a></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal</label>
    <input type="date" class="form-control" id="tgl_aduan" name="tgl_aduan" value="<?= $pengaduan['tgl_aduan'];?>">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <form class="form-group">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Jenis Kasus</label>
  <select class="custom-select my-1 mr-sm-2" id="id_kasus" name="id_kasus">
    <?php foreach ($jenis_kasus as $jk) : ?>
    <option value="<?= $jk['id_jenis']; ?>"><?= $jk['nama_kasus']; ?></option>
    <?php endforeach; ?>
  </select>
   <div class="form-group"><br>
       <label for="text">Judul aduan</label>
    <input type="text" class="form-control" id="judul_aduan" name="judul_aduan" placeholder="Masukkan judul aduan" value="<?= $pengaduan['judul_aduan'];?>">
   </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Perihal Aduan</label>
    <textarea class="form-control" id="perihal_aduan" name="perihal_aduan" rows="3"><?= $pengaduan['perihal_aduan'];?></textarea>
  </div>
  <input type="hidden" id="status_aduan" name="status_aduan" value="Menunggu">
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Saya Menyatakan data yang saya inputkan benar</label>
  </div><br>
  <div class="form-actions form-group"><button type="submit" name="ubah" class="btn btn-success btn-sm float-right">Kirim</button></div>
</form>
</form>
</div>
</div>

<!-- Ini komposisi Modal nya -->
  <div id="myModalKorban" class="modal fade" role="dialog">
    <div class="modal-dialog mt-sm-5">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        
        <!-- body modal -->


<h5 class="card-header bg-primary text-white">List Korban</h5>
    <div class="form-group ml-3 mr-3 mt-3">
    <ul class="list-group">
            <?php foreach ( $korban as $adu) : ?>
            <li class="list-group-item text-Left"><span class="pull-left"></span> <?= $adu['nik_korban']; ?> - <?= $adu['nama_korban']; ?> </li>
            <?php endforeach; ?>
          </ul> 
  </div>
</form>
        </div>
        <!-- footer modal -->
      </div>
    </div>
</div><br><br>