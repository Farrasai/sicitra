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
                                    <li class="active"><?php base_url(); ?>Korban</li>
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
                                <strong class="card-title">Data Korban</strong>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <?php if ($this->session->flashdata('flash')) : ?>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  Data Pelaku <strong> Berhasil </strong> <?= $this->session->flashdata('flash'); ?>.
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-6">
                                                <form action="" method="post" class="float-right">
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" placeholder="Cari Data Korban.." name="keyword">
                                                      <div class="input-group-append">
                                                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                                      </div>
                                                    </div>
                                                </form>
                                            </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                                    <thead>
                                        <tr role="row">
                                              <th width="300px">NIK</th>
                                              <th>Nama Korban</th>
                                              <th>No Telp</th>
                                              <th width="110px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $korban as $kbn) : ?>
                                    <tr>
                                            <td><?= $kbn['nik_korban']; ?></td>
                                            <td><?= $kbn['nama_korban']; ?></td>
                                            <td><?= $kbn['no_tlp']; ?></td>
                                            <td><a href="<?= base_url(); ?>Korban/detail/<?= $kbn ['nik_korban']; ?>" class="badge badge-success">Detail</a> <a href="<?= base_url(); ?>Korban/edit/<?= $kbn ['nik_korban']; ?>" class="badge badge-primary">Edit</a></td>
                                        
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                               <?php echo $links; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                               
                            </div>
                            <div class="col-sm-12 col-md-7">
                                    
                            </div>
                            </div>
                    </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
