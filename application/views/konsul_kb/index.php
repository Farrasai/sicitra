<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>menu">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Konsultasi KB</li>
          </ol>
        </nav>
        </div>
    </div>
    

	<div class="row mt-3">
		<div class="col-md-3">
			<a href=" <?= base_url(); ?>Konsul_KB/tambah" class="btn btn-primary">Buat Konsultasi</a>
		</div>
	</div>

	 <div class="content">
            <div class="animated fadeIn mt-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">TABEL KONSULTASI KB</strong>
                            </div>
                            <div class="card-body">
                                <div class="col-sm-12 col-md-12">
                                            <?php if ($this->session->flashdata('flash')) : ?>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  Konsul <strong> Berhasil </strong> <?= $this->session->flashdata('flash'); ?>.
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                            <?php endif; ?>              
                                        </div>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="100px">Tanggal</th>
                                            <th width="175px">Judul Konsultasi</th>
                                            <th width="300px">Perihal Konsultasi</th>
                                            <th width="300px">Jawaban</th>
                                            <th width="125px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php foreach ( $konsultasi_kb as $kb) : ?>
                                        <tr>
                                            <?php
                                            $originalDate = $kb['tgl_konsul'];
                                            $newDate = date("d-m-Y", strtotime($originalDate));
                                            ?>
                                            
                                            <td><?= $newDate; ?></td>
                                            <td><?= $kb['judul_konsul']; ?></td>
                                            <td><?= $kb['perihal_konkb']; ?></td>
                                            <td><?= $kb['jawaban']; ?></td> 	
                                            <td>
                                            	<a href="<?= base_url(); ?>Konsul_KB/edit/<?= $kb ['id_konkb']; ?>" class="btn-sm btn-warning">Edit</a> <a href="<?= base_url(); ?>Konsul_KB/hapus/<?= $kb ['id_konkb']; ?>" class="btn-sm btn-danger" onclick="return confirm('Yakin untuk menghapus?');">Hapus</a>
                                            </td>
                                            	
                                        </tr>
                                        <?php endforeach; ?>
                                        	
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>  <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>