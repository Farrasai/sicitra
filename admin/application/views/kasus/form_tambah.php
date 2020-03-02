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
                                    <li><a href="<?php base_url(); ?>../../admin/kasus">Admin</a></li>
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
                        <div class="card-header"><strong>Form Tambah Jenis Kasus</strong></div>
                        <div class="card-body">                                
                            <form action="" method="post" class="">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="nama_kasus" name="nama_kasus" placeholder="Masukkan Jenis Kasus" class="form-control">
                                    </div>
                                    <small class="form-text text-danger"><?= form_error('nama_kasus'); ?></small>
                                </div>
                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm float-right">Tambah</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
                <div class="clearfix"></div><br><br><br><br><br><br>