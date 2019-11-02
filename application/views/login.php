<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.src.js"></script>

    <style>
    .logo{
        width:25vw; 
    }
    .card{
        background: rgba(11, 40, 41, 0.7);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8);
    } 
    .card-subtitle{
        color:#B2B2B2 !important
    }
    .card-title{
        color:#E1E1E1 !important
    }
    .text,h3{
        color: #E1E1E1
    }
    .btn{
        background: #0b2829;
        border-color: #0b2829;
    }
    .text-danger{
        color: #ff726f !important
    }
    body{
        background-image: url("./../../assets/img/background4.jpg");
    }

    </style>          
    </head>
  <body>
    <div class="row mt-5">
        <div class="col col-sm-10 col-md-6 col-lg-4 offset-md-2 offset-lg-1">
            <div class="card login-card responsive" style="width: 50rem"">

                <div class="card-body">
                    <div class="row">

                        <div class="left col-md-5 col-lg-3">
                        <div class="logo">
                            <img class="logo responsive" src=<?php echo base_url("assets/img/logo2.png")?> alt="logo" >
                        </div>
                            <h3>D.A.P.H LIVESTOCK</h3>
                        </div>

                        <div class="right col-md-8 col-lg-5 offset-md-3">
                            <h3 class="card-title">Login</h3>
                            <h6 class="card-subtitle mb-2 text-muted">Enter your credentials</h6>

                            <div class="mt-5">
                                <form method="post" action="<?php echo base_url(); ?>index.php/main/login_validation">
                                    <!-- Username -->
                                    <div class="form-group">
                                        <label class="text" for="loginUsername">Username</label>
                                        <input type="text" name="username" class="form-control" id="loginUsername" placeholder="Enter username">
                                        <span class="text-danger"><?php echo form_error('username'); ?></span>
                                    </div>
                                    <!-- Password -->
                                    <div class="form-group">
                                        <label class="text" for="loginPassword">Password</label>
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
                                    <h6 class="card-subtitle mb-2 text-muted">Create a new account</h6>
                                    <a class="btn btn-primary" href="<?=base_url('index.php/main/signup')?>">Register</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>    
    </div>
</body>
</html>