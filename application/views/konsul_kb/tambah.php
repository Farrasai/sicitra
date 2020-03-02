<div class="container mt-3">

    <div class="row">
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>menu">Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>Konsul_KB">Konsultasi KB</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Tambah Konsultasi</li>
          </ol>
        </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
        <div class="alert alert-info alert-dismissible fade show" role="alert">
  <h4><strong>Mohon dibaca sebelum melakukan konsultasi..</strong></h4>
  <h6>Cara melakukan konsultasi :</h6>
  <p>1. Masukkan NIK Pengadu yang telah terdaftar pada saat registrasi atau bisa dilihat pada halaman profil.</p>
  <p>2. Masukkan Tanggal Konsultasi pada saat anda melakukan Konsultasi.</p>
  <p>3. Masukkan Judul Konsultasi anda.</p>
  <p>4. Masukkan Perihal Konsultasi yang ingin anda sampaikan.</p>
  <p>5. Lampirkan bukti fisik konsultasi anda dengan mengupload file.</p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header bg-primary text-white">Form Konsultasi KB</h5>
        <div class="card-body">
<form action="<?= base_url(); ?>Konsul_KB/tambah" method="post" enctype="multipart/form-data">
  <input type="hidden" id="id_admin" name="id_admin" value="1">
  <div class="form-group">
    <label>NIK Konsultasi</label>
    <input type="text" class="form-control" id="nik_pengadu" name="nik_pengadu" value="<?= $pengadu['nik_pengadu']; ?>" readonly>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label>Tanggal Konsultasi</label>
    <input type="date" class="form-control" id="tgl_konsul" name="tgl_konsul">
    <small class="form-text text-danger"><?= form_error('tgl_konsul'); ?></small>
  </div>
  <form class="form-group">
      <div class="form-group">
    <label>Judul Konsultasi</label>
    <input type="text" class="form-control" id="judul_konsul" name="judul_konsul" placeholder="Masukkan Judul Konsultasi">
    <small class="form-text text-danger"><?= form_error('judul_konsul'); ?></small>
  </div>
   <div class="form-group">
    <label>Perihal konsultasi</label>
    <textarea class="form-control" id="perihal_konkb" name="perihal_konkb" rows="3"></textarea>
    <small class="form-text text-danger"><?= form_error('perihal_konkb'); ?></small>
  </div>
  <div class="form-group">
      <label for="text">Lampiran</label><br>
      <input type="file" name="lampiran" size="5000"  />
      <small class="form-text text-muted">(Tipe file pdf, doc, docx, rar, zip, jpg, jpeg; max 5 MB)</small>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Saya Menyatakan data yang saya inputkan benar</label>
  </div><br>
  <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm float-right">Kirim</button></div>
</form>
</form>
</div>
</div>
</div><br><br>