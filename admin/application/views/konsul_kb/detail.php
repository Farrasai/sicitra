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
                                    <li><a href="<?php base_url(); ?>../../Konsul_KB">Konsultasi KB</a></li>
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
						    <strong>Detail KB</strong>
						  </div>
						  <div class="card-body">
						    <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">ID KB</label></div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static">: <strong><?= $konsultasi_kb ['id_konkb']; ?></strong></p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Konsultasi</label></div>
                                        <?php
                                            $originalDate = $konsultasi_kb['tgl_konsul'];
                                            $newDate = date("d-m-Y", strtotime($originalDate));
                                        ?>
                                        <div class="col-12 col-md-9">: <i><?= $newDate; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIK</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $konsultasi_kb ['nik_pengadu']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $konsultasi_kb ['nama']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Perihal Konsultasi</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $konsultasi_kb ['perihal_konkb']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Lampiran</label></div>
                                        <div class="col-12 col-md-9">: <?php
                                            if ($konsultasi_kb['lampiran_kb']==null) {

                                                

                                                }
                                                else{
                                                    echo  '<a href="'.base_url().'Konsul_KB/lakukan_download/'.$konsultasi_kb ['id_konkb'].'" class="btn-sm btn-primary"><i class="fa fa-download"> <strong>'. $konsultasi_kb ['lampiran_kb'].'</strong></i></a>';
                                                }  
                                                ?></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Jawab</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $konsultasi_kb ['jawaban']; ?></i></div>
                                    </div>
                                </form>
                            </div>                           
                        </div>
                        <div class="card-footer">
                                
                            </div>
						</div>
						  </div>
						</div>
					</div>
				</div>
		