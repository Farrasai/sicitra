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
                                    <li><a href="<?php base_url(); ?>/admin/home">Dashboard</a></li>
                                    <li><a href="<?php base_url(); ?>/admin/admin">Konsultasi KB</a></li>
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
                        <div class="card-header"><strong>Form Jawab Konsultasi KB</strong></div>
                        <div class="card-body">                                
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $konsultasi_kb['id_konkb'];?>">
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Perihal Konsultasi</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $konsultasi_kb ['perihal_konkb']; ?></i></div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-upload"></i></div>
                                        <input type="text" id="jawaban" name="jawaban" class="form-control" value="<?= $konsultasi_kb['jawaban']; ?>">
                                    </div>
                                </div>
                                <div class="form-actions form-group"><button type="submit" name="ubah" class="btn btn-success btn-sm float-right">Jawab</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
                <div class="clearfix"></div><br><br><br>