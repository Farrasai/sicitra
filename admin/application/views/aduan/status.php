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
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header"><strong>Form Status</strong></div>
                        <div class="card-body">                                
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $aduan['id_aduan'];?>">
                                <div class="form-group">
                                <select class="form-control" id="status" name="status">
                                    <option selected="<?= $aduan['status_aduan'];?>">*<?= $aduan['status_aduan'];?>*</option>
                                  <option value="Menunggu">Menunggu</option>
                                  <option value="Tidak Valid">Tidak Valid</option>
                                  <option value="Proses">Proses</option>
                                  <option value="Selesai">Selesai</option>
                                </select>
                              </div>
                                
                                <div class="form-actions form-group"><button type="submit" name="proses" class="btn btn-success btn-sm float-right">Proses</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

                <div class="clearfix"></div><br><br><br><br><br><br>