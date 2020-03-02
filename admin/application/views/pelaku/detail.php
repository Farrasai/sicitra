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
                                    <li><a href="<?php base_url(); ?>../../pelaku">Pelaku</a></li>
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
                <div class="row">
                    <div class="col-md-12">
						<div class="card">
						  <div class="card-header">
						    Detail Pelaku
						  </div>
						  <div class="card-body">
						    <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">NIK Pelaku</label></div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static">: <strong><?= $pelaku ['nik_pelaku']; ?></strong></p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">ID Aduan</label></div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static">: <strong><?= $pelaku ['id_aduan']; ?></strong></p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Judul Aduan</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pelaku ['judul_aduan']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">NIK Korban</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pelaku ['nik_korban']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Nama Pelaku</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pelaku ['nama_pelaku']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat/Tanggal lahir</label></div>
                                        <?php
                                            $originalDate = $pelaku['tgl_lahir_pelaku'];
                                            $newDate = date("d-m-Y", strtotime($originalDate));
                                        ?>
                                        <div class="col-12 col-md-9">: <i><?= $pelaku ['tmpt_lahir_pelaku']; ?> / <?= $newDate; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pelaku ['jk_pelaku']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Usia</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pelaku ['usia_pelaku']; ?> Tahun</i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pelaku ['agama_pelaku']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pelaku ['alamat_pelaku']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Telepon</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pelaku ['no_tlp_pelaku']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pendidikan</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pelaku ['pendidikan_pelaku']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pelaku ['pekerjaan_pelaku']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status Kawin</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pelaku ['status_kawin_pelaku']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Keterbatasan</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pelaku ['difabel_pelaku']; ?></i></div>
                                    </div>
                                </form>
                            </div>                           
                        </div>
                        <div class="card-footer">
                                <a href="#" class="btn btn-primary float-right"><i class="fa fa-print"></i></a>
                            </div>
						</div>
						  </div>
						</div>
					</div>
				</div>
		