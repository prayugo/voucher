<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
    

 <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Anda Berada Di Halaman Tambah Data Pelanggan 🎉</h5>
                          <p class="mb-4">
                            <span class="fw-bold"></span>
                          </p>
                          
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
                
                <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="<?=base_url()?>/template/assets/img/avatars/8.png"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form action="<?=site_url('customer')?>" method="POST" autocomplete="off">
                        <?= csrf_field() ?>
                        <div class="row">
   
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Full Name</label>
                          <input type="text" class="form-control" name="name_customer"  required autofocus/>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Email</label>
                          <input type="text" class="form-control" name="email" required autofokus />
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Handphone</label>
                          <input type="text" class="form-control" name="no_hp" required autofokus/>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Address</label>
                          <textarea
                            id="basic-default-message"
                            class="form-control"
                            name="address"
                          ></textarea>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Username</label>
                          <input type="text" class="form-control" name="user_name" required autofokus/>
                        </div>

                        <div class="form-password-toggle mb-3">
                        <label class="form-label" for="basic-default-password12">Password</label>
                        <div class="input-group">
                          <input
                            type="password"
                            class="form-control"
                            id="basic-default-password12"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="basic-default-password2"
                            name="password"
                          />
                          <span id="basic-default-password2" class="input-group-text cursor-pointer"
                            ><i class="bx bx-hide"></i
                          ></span>
                        </div>
                      </div>

                      <div class="mb-3">
                            <label for="currency" class="form-label">Level</label>
                            <select id="currency" class="select2 form-select" name="level">
                              
                              <option value="Superadmin">Superadmin</option>
                              <option value="Kasir">Kasir</option>
                              <option value="Pelanggan">Pelanggan</option>
                              
                            </select>
                          </div>

                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        <!-- <button type="reset" class="btn btn-outline-secondary" >Cancel</button> -->

                        <a href="<?=site_url('customer')?>" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  <div class="card">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                          <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation"
                          />
                          <label class="form-check-label" for="accountActivation"
                            >I confirm my account deactivation</label
                          >
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- / Content -->


              </div>
            </div>






<?= $this->endSection() ?>