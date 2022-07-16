<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
    

 <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Anda Berada Di Halaman Detail Transaction 🎉</h5>
                          <p class="mb-4">
                            <span class="fw-bold"></span>
                          </p>
                          <div class="section-header-button">
                             
                             <!-- <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ModalTambah">Tambah Data</button> -->
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
                          <th>Last Update</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                         <?php foreach ($product as $row) : ?>
                        <tr>
                          <td><?=$row['name_product']?></td>
                          <td><?=$row['price']?></td>
                          <td><?=$row['modified_date']?></td>

                          
                          
                          <td>
                            <!-- <div class="text-center" style="width:100%">
                              

                                 <a data-bs-toggle="modal" data-bs-target="#ModalEdit"  class="btn btn-info btn-sm btn-warning" data-id="<?=$row['product_id'];?>" data-name_product="<?=$row['name_product'];?>" data-price="<?=$row['price'];?>" id="btn-edit"><i class="tf-icons bx bx-pencil"></i></a>

                                 <a data-bs-toggle="modal" data-bs-target="#ModalHapus"  class="btn btn-info btn-sm btn-danger" id="tombolUbah"><i class="tf-icons bx bx-trash"></i></a>

                                 

                              
                            </div> -->

                            <button type="button" data-bs-toggle="modal" data-bs-target="#modalHapus" class="btn btn-danger btn-sm"><ii class="tf-icons bx bx-trash"></i>
                              
                            </button>

                            <button type="button" data-bs-toggle="modal" data-bs-target="#modalEdit" id="btn-edit" class="btn btn-info btn-sm btn-warning" data-id="<?=$row['product_id'];?>" data-nama="<?=$row['name_product'];?>" data-harga="<?=$row['price'];?>" data-date="<?=$row['modified_date']?>"><i class="tf-icons bx bx-pencil"></i></button>

                            

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
<!-- aria-hidden="true" -->
<div class="modal fade" id="ModalTambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <hr class="my-0" />
      <div class="modal-body">

        <form action="<?=base_url('C_Product/tambah');?>" method="post">
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


<!-- modal ubah -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <hr class="my-0" />
      <div class="modal-body">
         
        <form action="<?=base_url('C_Product/ubah');?>" method="post">
          <?= csrf_field() ?>
          <input type="hidden" name="id" id="id-produk">
          <div class="form-group mb-0">
          <div class="row mb-3">
            <label for="name_product" class="col-sm-3 col-form-label">Nama Produk</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" id="nama_product" name="name_product" value="<?= $row['name_product']?>">
            </div>
          </div>
            </div>

          <div class="form-group mb-0">  
          <div class="row mb-3">
            <label for="price" class="col-sm-3 col-form-label">Harga</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" id="harga" name="price" value="<?= $row['price']?>">
            </div>
          </div>
          </div>

          <div class="form-group mb-0">
          <div class="row mb-3">
            <label for="modified_date" class="col-sm-3 col-form-label">Last Update</label>
            <div class="col-lg-7">
              <input type="text" readonly="readonly" class="form-control" id="modified_date" name="modified_date" value="<?= $row['modified_date']?>">
            </div>
          </div>
            </div>


     <hr class="my-0" />
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
    </form>

      
  </div>

</div>

<!-- end of modal ubah -->

<!-- modal Hapus -->
<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
        <h5>Apakah anda yakin ingin menghapus data ini ?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/C_Product/hapus/<?=$row['product_id'];?>" class="btn btn-danger">delete</a>
      </div>
    </div>
  </div>
</div>
<!-- end of modal Hapus -->

<?= $this->endSection() ?>

