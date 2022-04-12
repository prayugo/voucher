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

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">Tambah Data</a>
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
                          <th>Nama Pelanggan</th>
                          <th>Alamat</th>
                          <th>No Hp</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                         <?php foreach ($customer as $key => $value) : ?>
                        <tr>
                          <td><?=$value->name_customer?></td>
                          <td><?=$value->alamat?></td>
                          <td><?=$value->no_hp?></td>
                          <td><span class="badge bg-label-primary me-1">Active</span></td>
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

<?= $this->endSection() ?>