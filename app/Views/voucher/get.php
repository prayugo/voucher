<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
    

 <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Anda Berada Di Halaman Data Pelanggan 🎉</h5>
                          <p class="mb-4">
                            <span class="fw-bold"></span>
                          </p>
                          <div class="section-header-button">
                             <a href="<?=site_url('customer/add')?>" class="btn btn-sm btn-outline-primary">Tambah Data</a>
                             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>
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
                          <th>Kode Voucher</th>
                          <th>Nama Voucher</th>
                          <th>Nilai Voucher</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                         <?php foreach ($voucher as $key => $value) : ?>
                        <tr>
                          <td><?=$value->kode_voucher?></td>
                          <td><?=$value->voucher_name?></td>
                          <td><?=$value->value_voucher?></td>
                          
                          <td>
                            <div class="text-center" style="width:10%">
                              <a href="" class="btn btn-warning btn-sm"><i class="tf-icons bx bx-pencil"></i></a>
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



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row mb-3">
            <label for="recipient-name" class="col-sm-2 col-form-label">Recipient:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="recipient-name">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" />
            </div>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
<!-- end of modal -->

<?= $this->endSection() ?>