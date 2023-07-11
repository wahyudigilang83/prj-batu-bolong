<body >
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="<?= base_url('index/r_auth')?>" method="post">
                                        <input type="hidden" name="id">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="first_name"/>
                                                        <label for="inputFirstName">First name</label>
                                                        <?php echo form_error('first_name','<div class="alert alert-danger">','</div>') ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="last_name"/>
                                                        <label for="inputLastName">Last name</label>
                                                        <?php echo form_error('last_name','<div class="alert alert-danger">','</div>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email"/>
                                                <label for="inputEmail">Email address</label>
                                                <?php echo form_error('email','<div class="alert alert-danger">','</div>') ?>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputUsername" type="text" placeholder="Username" name="username"/>
                                                        <label for="inputPassword">Username</label>
                                                        <?php echo form_error('username','<div class="alert alert-danger">','</div>') ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password"/>
                                                        <label for="inputPasswordConfirm">Password</label>
                                                        <?php echo form_error('password','<div class="alert alert-danger">','</div>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputEmail">Pilih Akun</label><br>
                                                <?php echo form_error('type','<div class="alert alert-danger">','</div>') ?>
                                                <input type="radio" name="type" value="Resto"/> Resto<br>
                                                <input type="radio" name="type" value="Penyewaan"/> Penyewaan<br>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-primary btn-block">Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="<?= base_url('auth')?>">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>