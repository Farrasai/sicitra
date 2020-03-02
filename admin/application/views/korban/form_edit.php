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
                                    <li><a href="<?php base_url(); ?>../../home">Dashboard</a></li>
                                    <li><a href="<?php base_url(); ?>../../Korban">Korban</a></li>
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
                        <div class="card-header"><strong>Form Edit Data Korban</strong></div>
                        <div class="card-body">                                
                            <form action="" method="post" class="">
                                <input type="hidden" name="id" value="<?= $korban['nik_korban'];?>">
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nik_korban" name="nik_korban" placeholder="Masukkan NIK" class="form-control" value="<?= $korban ['nik_korban']; ?>">
                                        <small class="form-text text-danger"><?= form_error('nik_korban'); ?></small></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="nama_korban" name="nama_korban" placeholder="Masukkan Nama Lengkap" class="form-control" value="<?= $korban ['nama_korban']; ?>">
                                        <small class="form-text text-danger"><?= form_error('nama_korban'); ?></small></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tmpt_lahir" name="tmpt_lahir" placeholder="Masukkan Tempat Lahir" class="form-control" value="<?= $korban ['tmpt_lahir']; ?>">
                                        <small class="form-text text-danger"><?= form_error('tmpat_lahir'); ?></small></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" class="form-control" value="<?= $korban ['tgl_lahir']; ?>">
                                            <small class="form-text text-muted">Format. Tahun-Bulan-Tanggal</small>
                                        <small class="form-text text-danger"><?= form_error('tgl_lahir'); ?></small></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-6">
                                            <select name="jk" id="jk" class="form-control">
                                                <option><?= $korban ['jk']; ?></option>
                                                <option value="Laki_laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Usia</label></div>
                                        <div class="col-12 col-md-4"><input type="text" id="usia" name="usia" placeholder="Masukkan Usia" class="form-control" value="<?= $korban ['usia']; ?>">
                                        <small class="form-text text-danger"><?= form_error('usia'); ?></small></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-3">
                                            <select name="agama" id="agama" class="form-control">
                                                <option><?= $korban ['agama']; ?></option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katholik">Katholik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Kong Huchu">Kong Huchu</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Alamat</label></div>
                                        <div class="col-12 col-md-9"><textarea name="alamat" id="alamat" rows="9"  class="form-control"><?= $korban ['alamat']; ?></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Pendidikan</label></div>
                                        <div class="col-12 col-md-3">
                                            <select name="pendidikan" id="pendidikan" class="form-control">
                                                <option><?= $korban ['pendidikan']; ?></option>
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
                                        <div class="col-12 col-md-9"><input type="text" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan" class="form-control" value="<?= $korban ['pekerjaan']; ?>">
                                        <small class="form-text text-danger"><?= form_error('pekerjaan'); ?></small></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                    <div class="input-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Telepon</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="no_tlp" name="no_tlp" placeholder="Masukkan No Telepon" class="form-control" value="<?= $korban ['no_tlp']; ?>"">
                                        <small class="form-text text-danger"><?= form_error('no_tlp'); ?></small></div>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Status Kawin</label></div>
                                        <div class="col-12 col-md-3">
                                            <select name="status_kawin" id="status_kawin" class="form-control">
                                                <option><?= $korban ['status_kawin']; ?></option>
                                                <option value="Belum">Belum</option>
                                                <option value="Sudah">Sudah</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Keterbatasan</label></div>
                                        <div class="col-12 col-md-3">
                                            <select name="difabel" id="difabel" class="form-control">
                                                <option><?= $korban ['difabel']; ?></option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                </div>
                                
                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm float-right">Ubah</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
                <div class="clearfix"></div>