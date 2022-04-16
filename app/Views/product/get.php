<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
    

 <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Anda Berada Di Halaman Data Produk 🎉</h5>
                          <p class="mb-4">
                            <span class="fw-bold"></span>
                          </p>
                          <div class="section-header-button">
                             
                             <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ModalTambah">Tambah Data</button>
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
                
                <?php if(session()->getFlashdata('success')) :?>
                <div class="alert alert-success alert-dismissible show fade">
                  <div class="alert-body">   
                    <a class="close" data-dismis="alert"></a>
                    <b>Success !</b>
                    <?=session()->getFlashdata('success')?> 
                  </div>
                </div>
                <?php endif; ?>

                 <!-- secure inpuet --> 
                <?php if(session()->getFlashdata('error')) :?>
                <div class="alert alert-danger alert-dismissible show fade">
                  <div class="alert-body">   
                    <a class="close" data-dismis="alert"></a>
                    <b>Error !</b>
                    <?=session()->getFlashdata('error')?> 
                  </div>
                </div>
                <?php endif; ?>



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
                          <th>Nama Produk</th>
                          <th>Harga</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                         <?php foreach ($product as $key => $value) : ?>
                        <tr>
                          <td><?=$value->name_product?></td>
                          <td><?=$value->price?></td>
                          
                          
                          <td>
                            <div class="text-center" style="width:10%">
                              

                                 <a data-bs-toggle="modal" data-bs-target="#editModal"  class="btn btn-info btn-sm btn-warning" id="tombolUbah">"><i class="tf-icons bx bx-pencil"></i>Edit</a>

                              

                              <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#"><i class="tf-icons bx-bs-trash"></i></button>
                            </div>
                          </td>
                        </tr>
                        <?php endforeach  ?>

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

<div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Voucher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <hr class="my-0" />
      <div class="modal-body">

        <form action="<?=base_url('C_Product/save');?>" method="post">
          <?= csrf_field() ?>
          <div class="form-group mb-0">
          <div class="row mb-3">
            <label for="name_product" class="col-sm-3 col-form-label">Nama Produk</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" id="name_product" name="name_product" required autofocus>
            </div>
          </div>
            </div>

          <div class="form-group mb-0">  
          <div class="row mb-3">
            <label for="price" class="col-sm-3 col-form-label">Harga</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" id="price" name="price" required autofocus>
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




<?= $this->endSection() ?>

