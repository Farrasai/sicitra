<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>menu">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pengaduan</li>
          </ol>
        </nav>
        </div>
    </div>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href=" <?= base_url(); ?>pengaduan/tambah" class="btn btn-primary">Buat Aduan</a>
		</div>
	</div>

	 <div class="content">
            <div class="animated fadeIn mt-3">
                <div class="row mt-3">

                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">TABEL PENGADUAN</strong>
                            </div>
                            <div class="container">
                                <div class="row">
                            <div class="card-body">
                                <div class="col-sm-12 col-md-12">
                                            <?php if ($this->session->flashdata('flash')) : ?>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  Aduan <strong> Berhasil </strong> <?= $this->session->flashdata('flash'); ?>.
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                            <?php endif; ?>              
                                        </div>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr role="row">
                                            <th width="175px">Tanggal</th>
                                            <th width="175px">Judul</th>
                                            <th>Perihal Aduan</th>
                                            <th width="110px">Status</th>
                                            <th width="130px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $pengaduan as $adu) : ?>
                                    <tr>

                                        <?php
                                            $originalDate = $adu['tgl_aduan'];
                                            $newDate = date("d-m-Y", strtotime($originalDate));
                                            ?>

                                            <td><?= $newDate; ?></td>
                                            <td><?= $adu['judul_aduan']; ?></td>
                                            <td><?= $adu['perihal_aduan']; ?></td>
                                            <td><?php
                                            if ($adu['status_aduan']=='Selesai') {

                                                echo '<p style="color:#00FF7F"><strong>'.$adu['status_aduan'].'</strong></p>';

                                                }else if ($adu['status_aduan']=='Proses'){

                                                echo  '<p style="color:#1E90FF"><strong>'.$adu['status_aduan'].'</strong></p>';

                                                } else if ($adu['status_aduan']=='Tidak Valid'){
                                                echo  '<p style="color:black"><strong>'.$adu['status_aduan'].'</strong></p>';
                                                }
                                                else{
                                                    echo  '<p style="color:#FF4500"><strong>'.$adu['status_aduan'].'</strong></p>';
                                                }  
                                                ?>
                                            <td>
                                            	<?php
                                                if ($adu['status_aduan'] == 'Tidak Valid') {
                                                    echo '<a class="btn-sm btn-info text-white" data-toggle="modal" data-target="#myModalValid">Detail</a>';

                                                } else if ($adu['status_aduan'] == 'Selesai') {
                                                   echo '<center><a href="pengaduan/detail/'.$adu ['id_aduan'].'" class="btn-sm btn-info btn-block">Detail</a></center>';
                                                }else if ($adu['status_aduan'] == 'Proses') {
                                                   echo '<center><a href="pengaduan/detail/'.$adu ['id_aduan'].'" class="btn-sm btn-info btn-block">Detail</a></center>';
                                                 }else {
                                                    echo '<a href="pengaduan/detail/'.$adu ['id_aduan'].'" class="btn-sm btn-info">Detail</a>';
                                                }
                                                ?>&ensp;<?php
                                                if ($adu['status_aduan'] == 'Selesai') {
                                                    
                                                } else if ($adu ['status_aduan'] == 'Proses'){

                                                }
                                                 else {
                                                    echo '<a href="pengaduan/edit/'.$adu ['id_aduan'].'" class="btn-sm btn-warning">Edit</a>';
                                                }
                                                ?>
                                            	
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        	
</tbody>
</table>

    <div id="myModalValid" class="modal fade" role="dialog">
    <div class="modal-dialog mt-sm-5">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        
        <!-- body modal -->
        <form action="#" method="post">
<h5 class="card-header bg-danger text-white"><i class="fa fa-warning (alias)"></i> Informasi <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-undo text-white"></i></button></h5>
  <div class="form-group ml-3 mr-3 mt-3">
    <p><strong>Maaf aduan anda tidak valid, mohon cek kembali identitas anda dan cocokkan dengan ktp anda.</strong></p>
  </div>
</form>
        </div>
        <!-- footer modal -->
      </div>
    </div>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <h6><strong>Info :</strong></h6>
  <p>Apabila status <strong>Tidak Valid</strong> mohon periksa apakah data yang anda inputkan benar sesuai dengan identitas anda.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>  <br><br> <br><br> <br><br>