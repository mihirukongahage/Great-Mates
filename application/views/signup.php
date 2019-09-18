    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.src.js"></script>    <style>
    .logo{
        width:25vw; 
    }
    
    </style>       
    </head>
  <body>
    <div class="row mt-5">
    <div class="col col-sm-12 col-md-6 col-lg-4 offset-md-2 offset-lg-3">
        <div class="card login-card" style="width: 50rem"">
        
        <div class="card-body">
                    <div class="row">

                        <div class="left col-md-5 col-lg-3">
                                <img src=<?php echo base_url("assets/img/logo2.png")?>  class="logo" alt="logo" >
                            <p>Description</P>

                        </div>

                        <div class="right col-md-8 col-lg-5 offset-md-3">
                            <h3 class="card-title">SignUp</h3>
                            <h6 class="card-subtitle mb-2 text-muted">Enter your details</h6>

                            <div class="mt-5">
                                <form method="post" action="<?php echo base_url(); ?>index.php/main/signup_validate">
                                    <div class="form-group">
                                        <label for="Name">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Name">
                                        <!-- <span class="text-danger"><?php echo form_error('name'); ?></span> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="Office_id">Office ID Number</label>
                                        <input type="text" name="office_id" class="form-control" id="office_id" placeholder="Office ID Number">
                                        <!-- <span class="text-danger"><?php echo form_error('office_id'); ?></span> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="Password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                                        <!-- <span class="text-danger"><?php echo form_error('password'); ?></span> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="CPassword">Confirm Password</label>
                                        <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password">
                                        <!-- <span class="text-danger"><?php echo form_error('cpassword'); ?></span> -->
                                    </div>
                                    <div class="text-center">
                                    <button type="submit" name="insert" class="btn btn-primary" name="save">Create</button>
                                    <?php
                                        echo $this->session->flashdata("error"); 
                                    ?>
                                </form>
                            </div>

                            <div class="mt-5">
                                <div class="">
                                    <!-- Direct to signup -->
                                    <h6>Have an account?</h6>
                                    <a class="btn btn-primary" href="<?=base_url('index.php/main/login')?>">Log In</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
