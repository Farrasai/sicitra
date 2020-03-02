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
                <div class="row">
                    <div class="col-md-12">
						<div class="card">
						  <div class="card-header">
						    Detail Korban
						  </div>
						  <div class="card-body">
						    <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">NIK Korban</label></div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static">: <strong><?= $korban ['nik_korban']; ?></strong></p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Nama Korban</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $korban ['nama_korban']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat/Tanggal lahir</label></div>
                                        <?php
                                            $originalDate = $korban['tgl_lahir'];
                                            $newDate = date("d-m-Y", strtotime($originalDate));
                                        ?>
                                        <div class="col-12 col-md-9">: <i><?= $korban ['tmpt_lahir']; ?> / <?= $newDate; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $korban ['jk']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Usia</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $korban ['usia']; ?> Tahun</i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Agama</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $korban ['agama']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $korban ['alamat']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Telepon</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $korban ['no_tlp']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pendidikan</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $korban ['pendidikan']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pekerjaan</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $korban ['pekerjaan']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status Kawin</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $korban ['status_kawin']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Keterbatasan</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $korban ['difabel']; ?></i></div>
                                    </div>
                                </form>
                            </div>                           
                        </div>
                            <div class="card-footer">
                                <a href="<?= base_url(); ?>korban/cetak/<?= $korban ['nik_korban']; ?>" class="btn btn-primary float-right"><i class="fa fa-print"></i></a>
                            </div>
                        </div>
						  </div>
						</div>
					</div>
				</div>
		