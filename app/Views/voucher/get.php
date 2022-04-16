<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
    

 <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Anda Berada Di Halaman Data Voucher 🎉</h5>
                          <p class="mb-4">
                            <span class="fw-bold"></span>
                          </p>
                          <div class="section-header-button">
                             
                             <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Data</button>
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
                              

                                 <a data-bs-toggle="modal" data-bs-target="#editModal"  class="btn btn-info btn-sm btn-warning" id="tombolUbah" data-id="<?=$value->voucher_id;?>" data-kode="<?= $value->kode_voucher;?>" data-nama="<?=$value->voucher_name;?>" data-nilai="<?=$value->value_voucher;?>"><i class="tf-icons bx bx-pencil"></i>Edit</a>

                              

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

        <form action="<?=base_url('C_Voucher/save');?>" method="post">
          <?= csrf_field() ?>
          <div class="form-group mb-0">
          <div class="row mb-3">
            <label for="kode_voucher" class="col-sm-3 col-form-label">Kode Voucher</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" id="kode_voucher" name="kode_voucher" required autofocus>
            </div>
          </div>
            </div>

          <div class="form-group mb-0">  
          <div class="row mb-3">
            <label for="voucher_name" class="col-sm-3 col-form-label">Nama Voucher</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" id="voucher_name" name="voucher_name" required autofocus>
            </div>
          </div>
          </div>

          <div class="form-group mb-0">
          <div class="row mb-3">
            <label for="value_voucher" class="col-sm-3 col-form-label">Nilai Voucher</label>
            <div class="col-lg-7">
              <input type="number" class="form-control" id="value_voucher" name="value_voucher" required autofocus>
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




<!-- test Add Modal -->

 <form action="<?=base_url('C_Voucher/save');?>" method="post">

        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Voucher</h5>
                
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             <?= csrf_field() ?>
               <div class="form-group mb-0">
          <div class="row mb-3">
            <label for="kode_voucher" class="col-sm-3 col-form-label">Kode Voucher</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" id="kode_voucher" name="kode_voucher" required autofocus>
            </div>
          </div>
            </div>

          <div class="form-group mb-0">  
          <div class="row mb-3">
            <label for="voucher_name" class="col-sm-3 col-form-label">Nama Voucher</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" id="voucher_name" name="voucher_name" required autofocus>
            </div>
          </div>
          </div>

          <div class="form-group mb-0">
          <div class="row mb-3">
            <label for="value_voucher" class="col-sm-3 col-form-label">Nilai Voucher</label>
            <div class="col-lg-7">
              <input type="number" class="form-control" id="value_voucher" name="value_voucher" required autofocus>
            </div>
            </div>
            </div>
             
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
<!-- end -->


<!-- Modal Edit Product-->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Voucher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <hr class="my-0" />
      <div class="modal-body">

        <form action="<?=base_url('C_Voucher/update');?>" method="post">
          <?= csrf_field() ?>

          <input type="hidden" id="voucher_id" name="voucher_id">
          <div class="form-group mb-0">
          <div class="row mb-3">
            <label for="kode_voucher" class="col-sm-3 col-form-label">Kode Voucher</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" id="kode_voucher" name="kode_voucher" >
            </div>
          </div>
            </div>

          <div class="form-group mb-0">  
          <div class="row mb-3">
            <label for="voucher_name" class="col-sm-3 col-form-label">Nama Voucher</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" id="voucher_name" name="voucher_name" required autofocus>
            </div>
          </div>
          </div>

          <div class="form-group mb-0">
          <div class="row mb-3">
            <label for="value_voucher" class="col-sm-3 col-form-label">Nilai Voucher</label>
            <div class="col-lg-7">
              <input type="number" class="form-control" id="value_voucher" name="value_voucher" required autofocus>
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
    <!-- End Modal Edit Product-->


<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
 
        // get Edit Product
        $('.tombolUbah').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const kode = $(this).data('kode');
            const nama = $(this).data('nama');
            const nilai = $(this).data('nilai');
            // Set data to Form Edit
            $('#voucher_id').val(id);
            $('.modal-body #kode_voucher').val(name);
            $('#voucher_name').val(price);
            $('#value_voucher').val(category).trigger('change');
            // Call Modal Edit
            $('#editModal').modal('show');
        });
 
        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.productID').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
         
    });

</script>














<?= $this->endSection() ?>

