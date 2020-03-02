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
                                    <li class="active"><?php base_url(); ?>Pengadu</li>
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
                                <strong class="card-title">Data Pengadu</strong>
                                <a href="<?php echo base_url('pengadu/cetakpengadu'); ?>" class="btn-sm float-right btn-primary"><i class="fa fa-print"></i> Cetak</a>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                        </div>
                                        <div class="col-md-6">
                                                <form action="" method="post" class="float-right">
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" placeholder="Cari Data Pengadu.." name="keyword">
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
                                            <th>Tanggal Daftar</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>No. Telepon</th>
                                            <th width="70px">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $pengadu as $pdu) : ?>
                                        <?php
                                            $originalDate = $pdu['tgl_daftar'];
                                            $newDate = date("d-m-Y", strtotime($originalDate));
                                        ?>
                                            <tr>
                                                    <td><?= $newDate; ?></td>
                                                    <td><?= $pdu['nik_pengadu']; ?></td>
                                                    <td><?= $pdu['nama']; ?></td>
                                                    <td><?= $pdu['jk']; ?></td>
                                                    <td><?= $pdu['alamat']; ?></td>
                                                    <td><?= $pdu['no_tlp']; ?></td>
                                                    <td><a href="<?= base_url(); ?>pengadu/detail/<?= $pdu ['nik_pengadu']; ?>" class="badge badge-success">Detail</a></td>
                                                
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
                    </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>