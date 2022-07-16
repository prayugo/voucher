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
                          <h5 class="card-title text-primary">Anda Berada Di Halaman Pembuatan Transaksi Penjualan</h5>
                          <p class="mb-4">
                            <span class="fw-bold"></span>
                          </p>
                          <div class="section-header-button">
                             
                             
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

                   <div class="col-lg-6 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <form>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Date</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="26/06/2020" readonly="" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Kasir</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="Joko" readonly="" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Customer</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="Ibnu" />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Voucher</label>
                          <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example">
                              <option selected>Pilih Voucher</option>
                              <option value="1">Voucher Mei</option>
                              <option value="2">Voucher Juni</option>
                              <option value="3">Voucher APRIL</option>
                              </select>
                          </div>
                        </div>
                        </form>

                      </div>
                    </div>       
                   </div>

                   <div class="col-lg-6 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <form>
                         <div class="input-group mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Produk</label>
                          
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                          <button class="btn btn-primary"></button>
                            </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Quantity</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" placeholder=""  />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Total Harga</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="" readonly=""  />
                          </div>
                        </div>



                          <div class="col-lg-6">
                            <center>
                          <button type="submit" class="btn btn-primary center-block">Add</button></center>
                          </div>
                        </form>

                      </div>
                    </div>       
                   </div>

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
                          <th>Tanggal Transaksi</th>
                          <th>Nama Produk</th>
                          <th>Jumlah Produk</th>
                          <th>Harga Produk</th>
                          <th>Total Biaya</th>
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
               
               <div class="col-sm-5 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <form>
                          <div class="row mb-2">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Sub Total</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="200000" readonly=""   />
                          </div>
                        </div>

                        <div class="row mb-2">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Voucher Amount</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="50000" readonly=""  />
                          </div>
                        </div>

                          <div class="row mb-2">
                          <label class="col-sm-4 col-form-label" for="basic-default-name">Grand Total</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="150000"  />
                          </div>
                        </div>

                          
                        </form>

                      </div>
                    </div>       
                   </div>

                   <div class="col-sm-4 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <form>
                          <div class="row mb-3">
                          <label class="col-sm-5 col-form-label" for="basic-default-name">Cash</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="200000"/>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-5 col-form-label" for="basic-default-name">Cashback</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="50000" readonly="" />
                          </div>


                        </div>

                        

                           <h7 class="card-title text-primary">Isikan nilai cash jika pada Grand Total nilainya minus, jika tidak maka isi dengan nilai 0</h7>
                        </form>

                      </div>
                    </div>       
                   </div>


                   <div class="col-sm-3 mb-4 order-0">
                    <div class="card">
                      <div class="card-body">
                        <form>
                          
                          <button type="submit" class="btn btn-warning">Reset</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                          
                        </form>

                      </div>
                    </div>       
                   </div>
               
              </div>
             
            </div>

<?= $this->endSection()?>