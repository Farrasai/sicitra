<body background="<?= base_url();?>assets/images/lp1.jpg" style="background-repeat">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container bootstrap snippet"><br>

<div class="row">
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>menu">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profil</li>
          </ol>
        </nav>
        </div>
    </div><br>

    <div class="row">
  		<div class="col-sm-10"><h2>Hallo.. <?= $pengadu['username'];?></h2></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center"><br>
        <img src="<?php echo base_url().'assets/images/profil.png'?>" class="avatar img-circle img-thumbnail" alt="avatar">
      </div><br>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Aktivitas <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-Left"><span class="pull-left"><strong>Aduan : </strong> <?php echo $total_aduan; ?></span> </li>
            <li class="list-group-item text-Left"><span class="pull-left"><strong>Konsultasi Puspaga : </strong> <?php echo $total_puspaga; ?></span></li>
            <li class="list-group-item text-left"><span class="pull-left"><strong>Konsultasi KB : </strong> <?php echo $total_kb; ?></span></li>
          </ul> <br><br>

          <ul class="list-group">
            <li class="list-group-item text-muted">NIK Korban Terdaftar</li>
            <?php foreach ( $korban as $adu) : ?>
            <li class="list-group-item text-Left"><span class="pull-left"></span> <?= $adu['nik_korban']; ?> <?= $adu['nama_korban']; ?> </li>
            <?php endforeach; ?>
          </ul> 

        </div><!--/col-3-->
    	<div class="col-sm-9">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form action="" method="post">
                      <input type="hidden" name="id" value="<?= $pengadu['nik_pengadu'];?>">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="nik"><h4>NIK</h4></label>
                              <p><?= $pengadu['nik_pengadu'];?></p>
                          </div>
                      </div><hr>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="username"><h4>Username</h4></label>
                              <p><?= $pengadu['username'];?></p>
                          </div>
                      </div><hr>
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="nama"><h4>Nama</h4></label>
                              <p><?= $pengadu['nama'];?></p>
                          </div>
                      </div><hr>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <?php
                               $originalDate = $korbann['tgl_lahir'];
                               $newDate = date("d-m-Y", strtotime($originalDate));
                            ?>
                             <label for="nama"><h4>Tempat Lahir/Tanggal Lahir</h4></label>
                              <p><?= $korbann['tmpt_lahir'];?> / <?= $newDate; ?></p>
                          </div>
                      </div><hr>                      
                      <div class="form-group">                         
                          <div class="col-xs-6">
                              <label for="jk"><h4>Jenis Kelamin</h4></label>
                              <p><?= $pengadu['jk'];?></p>
                          </div>
                      </div><hr>
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="nama"><h4>Usia</h4></label>
                              <p><?= $korbann['usia'];?></p>
                          </div>
                      </div><hr>
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="nama"><h4>Agama</h4></label>
                              <p><?= $korbann['agama'];?></p>
                          </div>
                      </div><hr>
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="alamat"><h4>Alamat</h4></label>
                              <p><?= $pengadu['alamat'];?></p>
                          </div>
                      </div><hr>
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="nama"><h4>Pendidikan</h4></label>
                              <p><?= $korbann['pendidikan'];?></p>
                          </div>
                      </div><hr>
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="nama"><h4>Pekerjaan</h4></label>
                              <p><?= $korbann['pekerjaan'];?></p>
                          </div>
                      </div><hr>
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="no_tlp"><h4>No Telepon</h4></label>
                              <p><?= $pengadu['no_tlp'];?></p>
                          </div>
                      </div><hr>
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="nama"><h4>Status Kawin</h4></label>
                              <p><?= $korbann['status_kawin'];?></p>
                          </div>
                      </div><hr>
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="nama"><h4>Difabel</h4></label>
                              <p><?= $korbann['difabel'];?></p>
                          </div>
                      </div><hr>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="no_tlp"><h4>Identitas</h4></label><br>
                              <img src="<?= base_url(); ?>admin/ktp/<?= $pengadu ['gambar']; ?>" width="400" height="200">
                          </div>
                      </div>
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<a class="btn btn-primary  text-white" data-toggle="modal" data-target="#myModal">Edit</a>
                            </div>
                      </div>
              	</form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

    <!-- Ini komposisi Modal nya -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog mt-sm-5">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        
        <!-- body modal -->


        <?php echo form_open_multipart(base_url('Pengadu/edit'));?>
<h5 class="card-header bg-primary text-white">Form Edit</h5>
    <input type="hidden" class="form-control" id="nik" name="nik" value="<?= $pengadu['nik_pengadu'];?>">
    <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>NIK Pengadu</strong></label>
    <input type="text" class="form-control" id="nik_pengadu" name="nik_pengadu" value="<?= $pengadu['nik_pengadu'];?>">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Username</strong></label>
    <input type="text" class="form-control" id="username" name="username" value="<?= $pengadu['username'];?>">
  </div>
  <div class="form-group ml-3 mr-3">
    <label for="exampleInputPassword1"><strong>Password</strong></label>
    <input type="password" class="form-control" id="pass" name="pass" value="<?= $pengadu['pass'];?>">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Nama</strong></label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?= $pengadu['nama'];?>">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Tempat Lahir</strong></label>
    <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" value="<?= $korbann['tmpt_lahir'];?>">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Tanggal Lahir</strong></label>
    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $korbann['tgl_lahir'];?>">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Jenis Kelamin</strong></label>
    <select class="custom-select my-1 mr-sm-2" id="jk" name="jk">
    <option selected><?= $pengadu['jk'];?></option>
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
  </select>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Usia</strong></label>
    <input type="text" class="form-control" id="usia" name="usia" value="<?= $korbann['usia'];?>">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Agama</strong></label>
        <select name="agama" id="agama" class="custom-select my-1 mr-sm-2">
            <option value="<?= $korbann['agama'];?>"><?= $korbann['agama'];?></option>
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
    <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $pengadu['alamat'];?></textarea>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Pendidikan</strong></label>
    <select name="pendidikan" id="pendidikan" class="custom-select my-1 mr-sm-2">
    <option value="<?= $korbann['pendidikan'];?>"><?= $korbann['pendidikan'];?></option>
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
    <option value="<?= $korbann['pekerjaan'];?>"><?= $korbann['pekerjaan'];?></option>
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
    <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="<?= $pengadu['no_tlp'];?>">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Status Kawin</strong></label>
    <select name="status_kawin" id="status_kawin" class="custom-select my-1 mr-sm-2">
        <option value="<?= $korbann['status_kawin'];?>"><?= $korbann['status_kawin'];?></option>
            <option value="Belum">Belum Menikah</option>
            <option value="Sudah">Sudah Menikah</option>
            <option value="Cerai">Cerai</option>
            <option value="Cerai Mati">Cerai Mati</option>
        </select>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Difabel</strong></label>
    <select name="difabel" id="difabel" class="custom-select my-1 mr-sm-2">
        <option value="<?= $korbann['difabel'];?>"><?= $korbann['difabel'];?></option>
            <option value="Tidak">Tidak</option>
            <option value="Ya">Ya</option>
        </select>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
      <label for="text"><strong>Upload Identitas</strong></label><br>
      <input type="file" name="gambar" size="10000" value="<?= $pengadu['gambar'];?>" >
      <small class="form-text text-muted">KTP/SIM/Passport (Tipe file pdf, doc, docx, rar, zip, jpg, jpeg; max 5 MB)</small>
  </div>
  <button type="button" class="btn btn-primary float-left ml-3 mr-3 mb-3" class="close" data-dismiss="modal" aria-label="Close">Kembali</button>
  <button type="submit" class="btn btn-success float-right ml-3 mr-3 mb-3" value="ubah">Simpan</button>
</form>
        </div>
        <!-- footer modal -->
      </div>
    </div>
    
    <!--<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
</script>                                               