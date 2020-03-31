<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="<?= base_url('auth/registrasi'); ?>"> 
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Name</label>
                                                        <input class="form-control py-4" id="name" type="text" name="name" value="<?= set_value('name'); ?>" placeholder="Enter Name" />
                                                        <small class="text-danger"><?= form_error('name');?></small>                                                       
                                                    </div>   
                                            </div>                                              
                                            </div>
                                                <div class="form-group">
                                                     <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                     <input class="form-control py-4" id="email" name="email" type="text" value="<?= set_value('email'); ?>" placeholder="Enter email address" />
                                                     <small class="text-danger"><?= form_error('email');?></small>
                                                    </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input class="form-control py-4" id="password1" name="password1" type="password" placeholder="Enter password" />
                                                        <small class="text-danger"><?= form_error('password1');?></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input class="form-control py-4" id="password2" name="password2" type="password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit">Create Account</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            <a href="<?= base_url('auth'); ?>">Have an account? Go to login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>