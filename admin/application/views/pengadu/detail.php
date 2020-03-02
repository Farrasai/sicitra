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
                                    <li><a href="<?php base_url(); ?>../../pengadu">Pengadu</a></li>
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
						    Detail Pengadu
						  </div>
						  <div class="card-body">
						    <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">NIK Pengadu</label></div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static">: <strong><?= $pengadu ['nik_pengadu']; ?></strong></p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Nama Pengadu</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pengadu ['nama']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pengadu ['username']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pengadu ['pass']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Kelamin</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pengadu ['jk']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pengadu ['alamat']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Telepon</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $pengadu ['no_tlp']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">KTP/SIM/Passport</label></div>
                                        <div class="col-12 col-md-9"><i><img src="<?= base_url(); ?>/ktp/<?= $pengadu ['gambar']; ?>" width="600" height="400"></i></div>
                                    </div>
                                </form>
                            </div>                           
                        </div>
                        <div class="card-footer">
                                <a href="<?= base_url(); ?>pengadu/cetak/<?= $pengadu ['nik_pengadu']; ?>" class="btn btn-primary float-right"><i class="fa fa-print"></i></a>
                            </div>
						</div>
						  </div>
						</div>
					</div>
				</div>
		