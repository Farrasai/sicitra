 <!-- Masthead -->
 <div class="container">
          <div class="col-md-12">
                <?php if ($this->session->flashdata('message')) : ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Pendaftaran <strong> Gagal </strong> <?= $this->session->flashdata('message'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>              
          </div>
        </div>
    <header class="text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            
            <h4 class="mt-3">Sistem Informasi Pengaduan <strong> CITRA </strong>merupakan sarana yang dapat dimanfaatkan 
              bagi anda yang memiliki informasi dan ingin melaporkan adanya suatu perbuatan pelanggaran seperti 
              tindakan kekerasan, Bullying atau KDRT</h4>
          </div>
          
        </div>
      </div>
    </header>

              <img class="masthead col-xl-12 mx-auto" src="<?= base_url();?>assets/images/landingpage.jpg" alt="">