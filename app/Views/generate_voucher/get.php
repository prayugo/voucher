<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>E-Voucher</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                
                 <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Anda Berada Di Halaman Pembuatan Voucher</h5>
                          <p class="mb-4">
                            <span class="fw-bold"></span>
                          </p>
                          <div class="section-header-button">
                             
                             <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahVoucher">Tambah Data</button>
                             
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="<?=base_url()?>/template/assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                   <!-- Isi dari content -->

                   

                <!-- Bordered Table -->
                <div class="col-lg-12 mb-4 order-0">
              <div class="card">
                <!-- <h5 class="card-header">Bordered Table</h5> -->
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Nama Customer</th>
                          <th>Nama Voucher</th>
                          <th>Nilai Voucher</th>
                          <th>Tanggal Berlaku Voucher</th>
                          <th>Tanggal Berakhir Voucher</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                         

                      </tbody>
                    
                    </table>
                  </div>
                </div>
              </div>
              </div>
              <!--/ Bordered Table -->
               
              </div>
            </div>

            <!-- modal -->
<!-- aria-hidden="true" -->
<div class="modal fade" id="ModalTambahVoucher">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Voucher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <hr class="my-0" />
      <div class="modal-body">

        <form action="<?=base_url('C_Product/tambah');?>" method="post">
          <?= csrf_field() ?>
          <div class="form-group mb-0">
          <div class="row mb-3">
            <label for="name_product" class="col-sm-5 col-form-label">Nama Pelanggan</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" id="name_product" name="name_product" required autofocus>
            </div>
          </div>
            </div>

          <div class="form-group mb-0">  
          <div class="row mb-3">
            <label for="price" class="col-sm-5 col-form-label">Nama Voucher</label>
            <div class="col-lg-7">
              <select class="form-select" aria-label="Default select example">
                              <option selected>Pilih Voucher</option>
                              <option value="1">Voucher Mei</option>
                              <option value="2">Voucher Juni</option>
                              <option value="3">Voucher APRIL</option>
                              </select>
            </div>
          </div>
          </div>

          <div class="form-group mb-0">
          <div class="row mb-3">
            <label for="name_product" class="col-sm-5 col-form-label">Harga</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" id="name_product" name="name_product" readonly="">
            </div>
          </div>
            </div>


            <div class="form-group mb-0">
          <div class="row mb-3">
            <label for="name_product" class="col-sm-5 col-form-label">Masa Berlaku Voucher</label>
            <div class="col-lg-7">
              <input type="date" class="form-control" id="name_product" name="name_product">
            </div>
          </div>
            </div>

            <div class="form-group mb-3">
          <div class="row mb-3">
            <label for="name_product" class="col-sm-5 col-form-label">Masa Berakhir Voucher</label>
            <div class="col-lg-7">
              <input type="date" class="form-control" id="name_product" name="name_product">
            </div>
          </div>
            </div>


     <hr class="my-0" />
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
    </form>

      
  </div>

</div>

<!-- end of modal -->

<?= $this->endSection()?>