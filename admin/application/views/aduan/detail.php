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
                                    <li><a href="<?php base_url(); ?>../../aduan">Aduan</a></li>
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
						    <strong>Detail Aduan</strong>
						  </div>
						  <div class="card-body">
						    <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">ID Aduan</label></div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static">: <strong><?= $aduan ['id_aduan']; ?></strong></p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Jenis Kasus</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['nama_kasus']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Aduan</label></div>
                                        <?php
                                            $originalDate = $aduan['tgl_aduan'];
                                            $newDate = date("d-m-Y", strtotime($originalDate));
                                        ?>
                                        <div class="col-12 col-md-9">: <i><?= $newDate; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIK Pengadu</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['nik_pengadu']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Pengadu</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['nama']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Identitas Pengadu</label></div>
                                        <div class="col-12 col-md-9"><i><img src="<?= base_url(); ?>/ktp/<?= $aduan ['gambar']; ?>" width="400" height="200"></i>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIK Korban</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['nik_korban']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Korban</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['nama_korban']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat/Tanggal Lahir</label></div>
                                        <?php
                                            $originalDate = $aduan['tgl_lahir'];
                                            $newDate = date("d-m-Y", strtotime($originalDate));
                                        ?>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['tmpt_lahir']; ?>/<?= $newDate; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Usia Korban</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['usia']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Agama Korban</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['agama']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat Korban</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['alamat']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pendidikan Korban</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['pendidikan']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pekerjaan Korban</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['pekerjaan']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. Telepon Korban</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['no_tlp']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status Kawin Korban</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['status_kawin']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Keterbatasan Korban</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['difabel']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Perihal Aduan</label></div>
                                        <div class="col-12 col-md-9">: <i><?= $aduan ['perihal_aduan']; ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Status Aduan</label></div>
                                        <div class="col-12 col-md-9"><i><?php
                                            if ($aduan['status_aduan']=='Selesai') {

                                                echo '<p style="color:#00FF7F"><strong>'.$aduan['status_aduan'].'</strong></p>';

                                                }else if ($aduan['status_aduan']=='Proses'){

                                                echo  '<p style="color:#1E90FF"><strong>'.$aduan['status_aduan'].'</strong></p>';

                                                } else if ($aduan['status_aduan']=='Tidak Valid'){
                                                echo  '<p style="color:black"><strong>'.$aduan['status_aduan'].'</strong></p>';
                                                }
                                                else{
                                                    echo  '<p style="color:#FF4500"><strong>'.$aduan['status_aduan'].'</strong></p>';
                                                }  
                                                ?></i></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Lampiran</label></div>
                                        <div class="col-12 col-md-9">:<?php
                                            if ($aduan['lampiran_aduan']==null) {

                                                

                                                }
                                                else{
                                                    echo  '<a href="'.base_url().'aduan/lakukan_download/'.$aduan ['id_aduan'].'" class="btn-sm btn-primary"><i class="fa fa-download"> <strong>'. $aduan ['lampiran_aduan'].'</strong></i></a>';
                                                }  
                                                ?></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Proses</label></div>
                                        <div class="col-12 col-md-9">: <i><?php
                                            if ($aduan['status_aduan']=='Selesai') {

                                                //echo '<a class="btn-sm btn-success text-white" disable>Selesai</a>';

                                                }
                                                else if ($aduan['status_aduan']=='Menunggu') {

                                                //echo '<a class="btn-sm btn-danger text-white" disable>Menunggu</a>';

                                                }
                                                else if ($aduan['status_aduan']=='Tidak Valid') {

                                                //echo '<a class="btn-sm btn-secondary text-white" disable>Tidak Valid</a>';

                                                }
                                                else{
                                                    echo  '<a class="btn-sm btn-primary text-white" data-toggle="modal" data-target="#myModal">Proses</a>';
                                                }  
                                                ?></i></div>
                                    </div>
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                                    <thead>
                                        <tr role="row">
                                            <th width="150px">Tanggal Proses</th>
                                              <th width="800px">Proses</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php foreach ( $proses as $pro) : ?>
                                        <?php
                                            $originalDate = $pro['tgl_proses'];
                                            $newDate = date("d-m-Y", strtotime($originalDate));
                                        ?>

                                            <td><?= $newDate; ?></td>
                                            <td><?= $pro['detail_proses']; ?></td>                                    
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>

                                </form>
                            </div>                           
                        </div>
                        <div class="card-footer">
                                <a href="<?= base_url(); ?>aduan/cetak/<?= $aduan ['id_aduan']; ?>" class="btn btn-primary float-right"><i class="fa fa-print"></i></a>
                            </div>
						</div>
						  </div>
						</div>
					</div>
				</div>

                <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog mt-sm-5">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        
        <!-- body modal -->
        <form action="<?php echo base_url('aduan/tambahproses'); ?>" method="post">
<h5 class="card-header bg-primary text-white">Tambah Proses</h5>
<div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>ID Aduan</strong></label>
    <input type="text" class="form-control" id="id_aduan" name="id_aduan" value="<?= $aduan['id_aduan']; ?>" readonly>
  </div>
  <div class="form-group ml-3 mr-3 mt-3">
    <label for="text"><strong>Tanggal Proses</strong></label>
    <input type="date" class="form-control" id="tgl_proses" name="tgl_proses" >
  </div>
  <div class="form-group ml-3 mr-3">
    <label for="exampleInputPassword1"><strong>Proses</strong></label>
    <textarea class="form-control" id="proses" name="proses" rows="3"></textarea>
  </div>
          <button type="submit" class="btn btn-success float-right ml-3 mr-3 mb-3" value="tambah">Tambah</button>
          <button type="button" class="btn btn-primary float-left ml-3 mr-3 mb-3" class="close" data-dismiss="modal" aria-label="Close">Kembali</button>
</form>
        </div>
        <!-- footer modal -->
      </div>
    </div>
		

