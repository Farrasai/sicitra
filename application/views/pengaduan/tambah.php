<div class="container mt-3">
    
    <div class="row">
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>menu">Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>pengaduan">Pengaduan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Tambah Aduan</li>
          </ol>
        </nav>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
        <div class="alert alert-info alert-dismissible fade show" role="alert">
  <h4><strong>Mohon dibaca sebelum melakukan aduan..</strong></h4>
  <h6>Cara melakukan aduan :</h6>
  <p>1. Masukkan NIK Pengadu yang telah terdaftar pada saat registrasi atau bisa dilihat pada halaman profil.</p>
  <p>2. Pada saat mengisi kolom NIK Korban, Pengadu wajib mengisi data korban terlebih dahulu.</p>
  <p>3. Data Korban bisa diisi dengan mengklik button <strong>Disini</strong> (atau terdapat dibawah kolom NIK Korban).</p>
  <p>4. Setelah mengisi data korban, pada kolom NIK Korban isikan NIK Korban yang telah anda daftarkan tadi</p>
  <p>5. Apabila anda ingin mengadu dengan NIK Korban yang sama, anda tidak perlu lagi mengisi data korbannya, cukup masukkan NIK Korban yang sudah anda daftarkan.</p>
  <p>6. Masukkan Tanggal aduan pada saat anda melakukan pengaduan.</p>
  <p>7. Masukkan Jenis Aduan sesuai dengan kategori apa yang anda adukan.</p>
  <p>8. Masukkan Judul Aduan anda.</p>
  <p>9. Masukkan Perihal Aduan yang ingin anda sampaikan.</p>
  <p>10. Lampirkan bukti fisik konsultasi anda dengan mengupload file.</p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header bg-primary text-white">Form Pengaduan</h5>
        <div class="card-body">
          <div class="col-sm-12 col-md-12">
                <?php if ($this->session->flashdata('message')) : ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Aduan <strong> Gagal </strong> <?= $this->session->flashdata('message'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('alert')) : ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Daftar data Korban <strong> Gagal </strong> <?= $this->session->flashdata('alert'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('pesan')) : ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    NIK Korban <strong> berhasil </strong> <?= $this->session->flashdata('pesan'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>                   
          </div>
<form action="<?php echo base_url(); ?>pengaduan/tambah" method="post" enctype="multipart/form-data">
  <input type="hidden" id="id_admin" name="id_admin" value="1">
  <div class="form-group">
    <label for="exampleInputEmail1">NIK Pengadu</label>
    <input type="text" class="form-control" id="nik_pengadu" name="nik_pengadu" placeholder="Masukkan NIK Pengadu" value="<?= $pengadu['nik_pengadu']; ?>" readonly>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NIK Korban</label>
    <input type="text" class="form-control" id="nik_korban" name="nik_korban" placeholder="Masukkan NIK Korban">
    <small class="form-text text-danger"><?= form_error('nik_korban'); ?></small>
    <small class="form-text"><storng>* </storng>Mohon isikan data korban terlebih dahulu <a class="btn-sm btn-primary text-white" data-toggle="modal" data-target="#myModal">Disini</a> jika belum mendaftarkan NIK Korban.</small>
    <small class="form-text"><?php
                                            if ($aduan['id_aduan'] == null) {

                                               

                                                }else{
                                                    echo  '<a class="btn-sm btn-info text-white" data-toggle="modal" data-target="#myModalKorban">List Korban yang telah didaftarkan</a>';
                                                }  
                                                ?></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Aduan</label>
    <input type="date" class="form-control" id="tgl_aduan" name="tgl_aduan">
    <small class="form-text text-danger"><?= form_error('tgl_aduan'); ?></small>
  </div>
  <form class="form-group">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Jenis Kasus</label>
  <select class="custom-select my-1 mr-sm-2" id="id_kasus" name="id_kasus">
    <option selected>Pilih..</option>
    <?php foreach ($jenis_kasus as $jk) : ?>
    <option value="<?= $jk['id_jenis']; ?>"><?= $jk['nama_kasus']; ?></option>
    <?php endforeach; ?>
  </select>
   <div class="form-group"><br>
       <label for="text">Judul Aduan</label>
    <input type="text" class="form-control" id="judul_aduan" name="judul_aduan" placeholder="Masukkan judul aduan">
    <small class="form-text text-danger"><?= form_error('judul_aduan'); ?></small>
   </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Perihal Aduan</label>
    <textarea class="form-control" id="perihal_aduan" name="perihal_aduan" rows="3"></textarea>
  </div>
  <input type="hidden" id="status_aduan" name="status_aduan" value="Menunggu">
  <div class="form-group">
      <label for="text">Lampiran</label><br>
      <input type="file" name="lampiran" size="5000" />
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
</div>
<!-- Ini komposisi Modal nya -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog mt-sm-5">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        
        <!-- body modal -->
        <form action="<?php echo base_url('pengaduan/korban'); ?>" method="post">
<h5 class="card-header bg-primary text-white">Form Data Korban</h5>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>NIK</strong></label>
    <input type="text" class="form-control" id="nik_korban" name="nik_korban" placeholder="Masukkan NIK">
  </div>
    <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Nama Korban</strong></label>
    <input type="text" class="form-control" id="nama_korban" name="nama_korban" placeholder="Masukkan Nama">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Tempat Lahir</strong></label>
    <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" placeholder="Masukkan Tempat Lahir">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Tanggal Lahir</strong></label>
    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Jenis Kelamin</strong></label>
    <select class="custom-select my-1 mr-sm-2" id="jk" name="jk">
    <option selected>Pilih..</option>
    <option value="Laki-laki">Laki-Laki</option>
    <option value="Perempuan">Perempuan</option>
  </select>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Usia</strong></label>
    <input type="text" class="form-control" id="usia" name="usia" placeholder="Masukkan Usia ">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Agama</strong></label>
        <select name="agama" id="agama" class="custom-select my-1 mr-sm-2">
            <option>Pilih</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katholik">Katholik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghuchu">Kong Huchu</option>
        </select>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Alamat</strong></label>
    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Pendidikan</strong></label>
    <select name="pendidikan" id="pendidikan" class="custom-select my-1 mr-sm-2">
    <option>Pilih</option>
    <option value="-">-</option>
    <option value="TK">TK</option>
    <option value="SD">SD</option>
    <option value="SMP">SMP</option>
    <option value="SMA/SMK">SMA/SMK</option>
    <option value="D3">D3</option>
    <option value="S1">S1</option>
    <option value="S2">S2</option>
    <option value="S3">S3</option>
    </select>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Pekerjaan</strong></label>
    <select name="pekerjaan" id="pekerjaan" class="custom-select my-1 mr-sm-2">
    <option>Pilih</option>
    <option value="Tidak Bekerja">Tidak Bekerja</option>
    <option value="Guru">Guru</option>
    <option value="Buruh">Buruh</option>
    <option value="Karyawan">Karyawan</option>
    <option value="Pedagang">Pedagang</option>
    <option value="Tani">Tani</option>
    <option value="Wiraswasta">Wiraswasta</option>
    <option value="Swasta">Swasta</option>
    <option value="TNI/POLRI">TNI/POLRI</option>
    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
    <option value="PNS">PNS</option>
    </select>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>No Telepon</strong></label>
    <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="Masukkan No Telepon">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Status Kawin</strong></label>
    <select name="status_kawin" id="status_kawin" class="custom-select my-1 mr-sm-2">
        <option>Pilih</option>
            <option value="Belum">Belum Menikah</option>
            <option value="Sudah">Sudah Menikah</option>
            <option value="Cerai">Cerai</option>
            <option value="Cerai Mati">Cerai Mati</option>
        </select>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Difabel</strong></label>
    <select name="difabel" id="difabel" class="custom-select my-1 mr-sm-2">
        <option>Pilih</option>
            <option value="Tidak">Tidak</option>
            <option value="Ya">Ya</option>
        </select>
  </div>
  <button type="button" class="btn btn-primary float-left ml-3 mr-3 mb-3" class="close" data-dismiss="modal" aria-label="Close">Kembali</button>
  <button type="submit" class="btn btn-success float-right ml-3 mr-3 mb-3" value="kirim">Kirim</button>
</form>
        </div>
        <!-- footer modal -->
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
  <button type="button" class="btn btn-primary float-left ml-3 mr-3 mb-3" class="close" data-dismiss="modal" aria-label="Close">Kembali</button>
</form>
        </div>
        <!-- footer modal -->
      </div>
    </div>
  </div><br><br>