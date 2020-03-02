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
                                    <li><a href="<?php base_url(); ?>home">Dashboard</a></li>
                                    <li class="active">Admin</li>
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
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Admin</strong>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php if ($this->session->flashdata('flash')) : ?>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  Data Admin <strong> Berhasil </strong> <?= $this->session->flashdata('flash'); ?>.
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                            <!--<div class="col-md-6">
                                                <form action="" method="post" class="float-right">
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" placeholder="Cari Data Admin.." name="keyword">
                                                      <div class="input-group-append">
                                                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                                      </div>
                                                    </div>
                                                </form>
                                            </div>-->
                                    </div>
                                </div>
                                <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                                    <thead>
                                        <tr role="row">
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th width="110px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $admin as $adm) : ?>
                                            <tr>
                                                    <td><?= $adm['username']; ?></td>
                                                    <td><?= $adm['pass']; ?></td>
                                                    <td><a href="<?= base_url(); ?>admin/edit/<?= $adm ['id_admin']; ?>" class="badge badge-primary">Edit </a>
                                                    <a href="<?= base_url(); ?>admin/hapus/<?= $adm ['id_admin']; ?>" class="badge badge-danger" onclick="return confirm('Yakin untuk menghapus?');">Hapus </a></td>
                                            </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                               
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers float-right" id="bootstrap-data-table_paginate">
                                            <!--<a href="<?php base_url(); ?>admin/tambah" class="btn btn-primary">Tambah Data Admin</a>-->
                                    </div>
                                    
                            </div>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->


        <div class="clearfix"></div><br><br><br><br>