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
                                    <li class="active"><?php base_url(); ?>Aduan</li>
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
                                <strong class="card-title">Data Aduan</strong>
                                <a class="btn-sm btn-primary float-right text-white" data-toggle="modal" data-target="#myModal"><i class="fa fa-print"></i> Cetak</a>
                            </div>
                            <div class="card-body">
                                <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <?php if ($this->session->flashdata('flash')) : ?>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  Status <strong> Berhasil </strong> <?= $this->session->flashdata('flash'); ?>.
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($this->session->flashdata('data')) : ?>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  Proses <strong> Berhasil </strong> <?= $this->session->flashdata('data'); ?>.
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col-md-6">
                                                <form action="" method="post" class="float-right">
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" placeholder="Cari Data Aduan.." name="keyword">
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
                                            <th width="150px">Tanggal Aduan</th>
                                            <th width="150px">Jenis kasus</th>
                                              <th width="200px">NIK</th>
                                              <th>Nama</th>
                                              <th width="70px">Action</th>
                                              <th width="120px">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $aduan as $adu) : ?>
                                    <tr>
                                        <?php
                                            $originalDate = $adu['tgl_aduan'];
                                            $newDate = date("d-m-Y", strtotime($originalDate));
                                        ?>
                                            <td><?= $newDate; ?></td>
                                            <td><?= $adu['nama_kasus']; ?></td>
                                            <td><?= $adu['nik_pengadu']; ?></td>
                                            <td><?= $adu['nama']; ?></td>
                                            <td><a href="<?= base_url(); ?>aduan/detail/<?= $adu ['id_aduan']; ?>" class="badge badge-info">Detail</a></td>
                                            <td><a href="<?= base_url(); ?>aduan/status/<?= $adu ['id_aduan']; ?>">
                                                <?php
                                            if ($adu['status_aduan']=='Selesai') {

                                                echo '<center><a class="btn-sm btn-success text-white"><strong>'.$adu['status_aduan'].'</strong></a></center>';

                                                }else if ($adu['status_aduan']=='Proses'){

                                                echo  '<center><a href="aduan/status/'.$adu ['id_aduan'].'" class="btn-sm btn-primary "><strong>'.$adu['status_aduan'].'</strong></a></center>';

                                                }else if ($adu['status_aduan']=='Tidak Valid'){

                                                echo  '<center><a href="aduan/status/'.$adu ['id_aduan'].'" class="btn-sm btn-secondary text-white"><strong>'.$adu['status_aduan'].'</strong></a></center>';

                                                }
                                                else{
                                                    echo  '<center><a href="aduan/status/'.$adu ['id_aduan'].'" class="btn-sm btn-danger text-white"><strong>'.$adu['status_aduan'].'</strong></a></center>';
                                                }  
                                                ?></a></td>
                                        
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

        <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog mt-sm-5">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        
        <!-- body modal -->
        <form action="<?php echo base_url('aduan/cetakaduan'); ?>" method="post">
<h5 class="card-header bg-primary text-white">Cetak Laporan</h5>
<div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Tanggal</strong></label>
    <input type="date" class="form-control" id="tgl1" name="tgl1">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Sampai</strong></label>
    <input type="date" class="form-control" id="tgl2" name="tgl2">
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><strong>Jenis Kasus</strong></label>
  <select class="custom-select my-1 mr-sm-2" id="id_kasus" name="id_kasus">
    <option selected>Pilih..</option>
    <?php foreach ($jenis_kasus as $jk) : ?>
    <option value="<?= $jk['id_jenis']; ?>"><?= $jk['nama_kasus']; ?></option>
    <?php endforeach; ?>
  </select>
</div>

          <button type="submit" class="btn btn-success float-right ml-3 mr-3 mb-3" value="cetak">Cetak</button>
</form>
        </div>
        <!-- footer modal -->
      </div>
    </div>
        <div class="clearfix"></div>
