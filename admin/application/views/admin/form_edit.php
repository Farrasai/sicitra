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
                                    <li><a href="<?php base_url(); ?>../../admin">Admin</a></li>
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
                        <div class="card-header"><strong>Form Edit Data Admin</strong></div>
                        <div class="card-body">                                
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $admin['id_admin'];?>">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                        <input type="text" id="id_admin" name="id_admin" placeholder="Masukkan Kode Admin" class="form-control" value="<?= $admin['id_admin']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="username" name="username" placeholder="Masukkan Username" class="form-control" value="<?= $admin['username']; ?>">
                                    </div>
                                    <small class="form-text text-danger"><?= form_error('username'); ?></small>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input type="text" id="password" name="password" placeholder="Masukkan Password" class="form-control" value="<?= $admin['pass']; ?>">
                                    </div>
                                    <small class="form-text text-danger"><?= form_error('password'); ?></small>
                                </div>
                                <div class="form-actions form-group"><button type="submit" name="ubah" class="btn btn-success btn-sm float-right">Edit</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
                <div class="clearfix"></div>