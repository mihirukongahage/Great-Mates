<?php include('partials/header.php')?>
    <div class="row mt-5">
        <div class="col col-sm-12 col-md-6 col-lg-4 offset-md-2 offset-lg-3">
            <div class="card login-card" style="width: 50rem"">

                <div class="card-body">
                    <div class="row">

                        <div class="left col-md-5 col-lg-3">
                            <h2>Logo</h1>
                            <p>Description</P>

                        </div>

                        <div class="right col-md-8 col-lg-5 offset-md-3">
                            <h3 class="card-title">Login</h3>
                            <h6 class="card-subtitle mb-2 text-muted">Enter your credentials</h6>

                            <div class="mt-5">
                                <form method="post" action="<?php echo base_url(); ?>index.php/main/login_validation">
                                    <!-- Username -->
                                    <div class="form-group">
                                        <label for="loginUsername">Username</label>
                                        <input type="text" name="username" class="form-control" id="loginUsername" placeholder="Enter username">
                                        <span class="text-danger"><?php echo form_error('username'); ?></span>
                                    </div>
                                    <!-- Password -->
                                    <div class="form-group">
                                        <label for="loginPassword">Password</label>
                                        <input type="password" name="password" class="form-control" id="loginPassword" placeholder="Password">
                                        <span class="text-danger"><?php echo form_error('password'); ?></span>
                                    </div>
                                    <div class="text-center">
                                    <button type="submit" name="insert" class="btn btn-primary">Sign In</button>
                                    <?php
                                        echo $this->session->flashdata("error"); 
                                    ?>
                                    </div>
                                </form>
                            </div>

                            <div class="mt-5">
                                <div class="">
                                    <!-- Direct to signup -->
                                    <h6>Create a new account</h6>
                                    <a class="btn btn-primary" href="<?=base_url('index.php/main/signup')?>">Register</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>    
    </div>


<?php include('partials/footer.php')?>