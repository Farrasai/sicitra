<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="<?php base_url(); ?>../../admin/home">Dashboard</a></li>
                                    <li><a href="<?php base_url(); ?>../../admin/pelaku">Pelaku</a></li>
                                    <li class="active"><?php echo $judul; ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header"><strong>Form Tambah Data Pelaku</strong></div>
                        <div class="card-body">                                
                            <form action="" method="post" class="">
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nik_pelaku" name="nik_pelaku" placeholder="Masukkan NIK" class="form-control">
                                        <small class="form-text text-danger"><?= form_error('nik_pelaku'); ?></small></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Aduan</label></div>
                                        <div class="col-12 col-md-9"><select class="custom-select my-1 mr-sm-2" id="id_aduan" name="id_aduan">
                                            <option selected>Pilih..</option>
                                            <?php foreach ($aduan as $adu) : ?>
                                            <option value="<?= $adu['id_aduan']; ?>"><?= $adu['id_aduan']; ?> - <?= $adu['nama_korban']; ?></option>
                                            <?php endforeach; ?>
                                        </select></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama_pelaku" name="nama_pelaku" placeholder="Masukkan Nama Lengkap" class="form-control">
                                        <small class="form-text text-danger"><?= form_error('nama_pelaku'); ?></small></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmpt_lahir_pelaku" name="tmpt_lahir_pelaku" placeholder="Masukkan Tempat Lahir" class="form-control">
                                        <small class="form-text text-danger"><?= form_error('tmpt_lahir_pelaku'); ?></small></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-6"><input type="date" id="tgl_lahir_pelaku" name="tgl_lahir_pelaku" placeholder="Masukkan Tanggal Lahir" class="form-control">
                                            <small class="form-text text-muted">Format. Tahun-Bulan-Tanggal</small>
                                        <small class="form-text text-danger"><?= form_error('tgl_lahir_pelaku'); ?></small></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="jk_pelaku" id="jk_pelaku" class="form-control">
                                                <option value="0">Pilih</option>
                                                <option value="Laki_laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Usia</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="usia_pelaku" name="usia_pelaku" placeholder="Masukkan Usia" class="form-control">
                                        <small class="form-text text-danger"><?= form_error('usia_pelaku'); ?></small></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="agama_pelaku" id="agama_pelaku" class="form-control">
                                                <option>Pilih</option>
                                                <option value="TK">Islam</option>
                                                <option value="SD">Kristen</option>
                                                <option value="SMP">Katholik</option>
                                                <option value="SMA/SMK">Hindu</option>
                                                <option value="D3">Buddha</option>
                                                <option value="S1">Kong Huchu</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Alamat</label></div>
                                        <div class="col-12 col-md-9"><textarea name="alamat_pelaku" id="alamat_pelaku" rows="9" placeholder="Masukkan Alamat" class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Pendidikan</label></div>
                                        <div class="col-12 col-md-3">
                                            <select name="pendidikan_pelaku" id="pendidikan_pelaku" class="form-control">
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
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-6">
                                            <select name="pekerjaan_pelaku" id="pekerjaan_pelaku" class="custom-select my-1 mr-sm-2">
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
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Telepon</label></div>
                                        <div class="col-12 col-md-6"><input type="text" id="no_tlp_pelaku" name="no_tlp_pelaku" placeholder="Masukkan No Telepon" class="form-control">
                                        <small class="form-text text-danger"><?= form_error('no_tlp_pelaku'); ?></small></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Status Kawin</label></div>
                                        <div class="col-12 col-md-4">
                                            <select name="status_kawin_pelaku" id="status_kawin_pelaku" class="custom-select my-1 mr-sm-2">
                                            <option>Pilih</option>
                                                <option value="Belum">Belum Menikah</option>
                                                <option value="Sudah">Sudah Menikah</option>
                                                <option value="Cerai">Cerai</option>
                                                <option value="Cerai Mati">Cerai Mati</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Keterbatasan</label></div>
                                        <div class="col-12 col-md-3">
                                            <select name="difabel_pelaku" id="difabel_pelaku" class="form-control">
                                                <option>Pilih</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                </div>
                                
                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm float-right">Tambah</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
                <div class="clearfix"></div>