<body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="<?= base_url('index/auth')?>" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" name="username" value="<?php if(isset($_COOKIE["loginId"])) { echo $_COOKIE["loginId"]; } ?>"/>
                                                <label for="inputEmail">Username</label>
                                                <?php echo form_error('username','<div class="alert alert-danger">','</div>') ?>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" value="<?php if(isset($_COOKIE["loginPass"])) { echo $_COOKIE["loginPass"]; } ?>" />
                                                <label for="inputPassword">Password</label>
                                                <?php echo form_error('password','<div class="alert alert-danger">','</div>') ?>
                                            </div>
                                            <!-- <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" name="remember" <?php if(isset($_COOKIE["loginId"])) { ?> checked="checked" <?php } ?> />
                                                <label class="form-check-label" for="inputRememberPassword" >Remember Password</label>
                                            </div> -->
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-4">
                                                <!--<a class="small" href="password.html">Forgot Password?</a>-->
                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="<?= base_url('auth/register')?>">Need an account for stand? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>