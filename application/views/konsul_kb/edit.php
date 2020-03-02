<div class="container mt-3">
    
    <div class="row">
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>menu">Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>Konsul_KB">Konsultasi KB</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Edit Konsultasi</li>
          </ol>
        </nav>
        </div>
    </div>
    
    <div class="card">
        <h5 class="card-header bg-primary text-white">Form Konsultasi KB</h5>
        <div class="card-body">
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $konsultasi_kb['id_konkb'];?>">
  <div class="form-group">
    <label>NIK Pengadu</label>
    <input type="text" class="form-control" id="nik_pengadu" name="nik_pengadu" value="<?= $konsultasi_kb['nik_pengadu'];?>" placeholder="Masukkan NIK Pengadu" readonly>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label>Tanggal</label>
    <input type="date" class="form-control" id="tgl_konsul" name="tgl_konsul" value="<?= $konsultasi_kb['tgl_konsul'];?>">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <form class="form-group">
     <div class="form-group">
    <label>Judul Konsultasi</label>
    <input type="text" class="form-control" id="judul_konsul" name="judul_konsul" value="<?= $konsultasi_kb['judul_konsul'];?>">
  </div>
  <form class="form-group">
   <div class="form-group">
    <label>Perihal Konsultasi</label>
    <textarea class="form-control" id="perihal_konkb" name="perihal_konkb" rows="3"><?= $konsultasi_kb['perihal_konkb'];?></textarea>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Saya Menyatakan data yang saya inputkan benar</label>
  </div><br>
  <div class="form-actions form-group"><button type="submit" name="ubah" class="btn btn-success btn-sm float-right">Kirim</button></div>
</form>
</form>
</div>
</div>
</div><br><br>