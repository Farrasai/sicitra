
      <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $total_aduan; ?></span></div>
                                            <div class="stat-heading"><strong>CITRA</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <img src="images/puspaga.png" alt="Logo">
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $total_puspaga; ?></span></div>
                                            <div class="stat-heading"><strong>PUSPAGA</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <img src="images/kb.png" alt="Logo">
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $total_kb; ?></span></div>
                                            <div class="stat-heading"><strong>KB</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $total_pengadu; ?></span></div>
                                            <div class="stat-heading"><strong>Pengadu</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Aduan Masuk</h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th><strong>Tanggal Aduan</strong></th>
                                                    <th><strong>Jenis Kasus</strong></th>
                                                    <th><strong>Username</strong></th>
                                                    <th><strong>NIK</strong></th>
                                                    <th><strong>Nama</strong></th>
                                                    <th><strong>Detail</strong></th>
                                                    <th><strong>Status</strong></th>
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
                                            <td><?= $adu['username']; ?></td>
                                            <td><?= $adu['nik_pengadu']; ?></td>
                                            <td><?= $adu['nama']; ?></td>
                                            <td><a href="<?= base_url(); ?>aduan/detail/<?= $adu ['id_aduan']; ?>" class="badge badge-success">Detail</a></td>
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
                                                ?></td>
                                        
                                    </tr>
                                    <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->
                    </div>

                </div>
                <!-- /.orders -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Konsultasi PUSPAGA Masuk</h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th width="150px"><strong>Tanggal Konsul</strong></th>
                                                    <th width="150px"><strong>Username</strong></th>
                                                    <th width="150px"><strong>Judul</strong></th>
                                                    <th><strong>Perihal Konsul</strong></th>
                                                    <th><strong>Detail</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ( $konsultasi_puspaga as $puspaga) : ?>
                                    <tr>
                                        <?php
                                            $originalDate = $puspaga['tgl_konsul'];
                                            $newDate = date("d-m-Y", strtotime($originalDate));
                                        ?>
                                            <td><?= $newDate; ?></td>
                                            <td><?= $puspaga['username']; ?></td>
                                            <td><?= $puspaga['judul_konsul']; ?></td>
                                            <td><?= $puspaga['perihal_konpus']; ?></td>
                                            <td><a href="<?= base_url(); ?>Konsul_Puspaga/detail/<?= $puspaga ['id_konpus']; ?>" class="badge badge-success">Detail</a></td>
                                        
                                    </tr>
                                    <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Konsultasi KB Masuk</h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th width="150px"><strong>Tanggal Konsul</strong></th>
                                                    <th width="150px"><strong>Username</strong></th>
                                                    <th width="150px"><strong>Judul</strong></th>
                                                    <th><strong>Perihal Konsul</strong></th>
                                                    <th><strong>Detail</strong></th>
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
                                            <td><?= $kb['username']; ?></td>
                                            <td><?= $kb['judul_konsul']; ?></td>
                                            <td><?= $kb['perihal_konkb']; ?></td>
                                            <td><a href="<?= base_url(); ?>Konsul_KB/detail/<?= $kb ['id_konkb']; ?>" class="badge badge-success">Detail</a></td>
                                        
                                    </tr>
                                    <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                    </div>
                </div>
            </div>
            <!-- .animated -->
        </div>

        <!-- /.content -->
        