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

  </head>
  <body>
    
    <div class="container">
        <h1>New Farm</h1>
        <h5 class="card-subtitle mb-2 text-muted">Enter Farm Details</h5>
            <div class="mt-5">
                                <form method="post" action="<?php echo base_url(); ?>index.php/main/signup_validate">
                                    <div class="form-group">
                                        <label for="Form_reg_no">Form Registration Number</label>
                                        <input type="text" name="form_reg_no" class="form-control" id="form_reg_no" placeholder="Form Registration Number">
                                        <!-- <span class="text-danger"><?php echo form_error('form_reg_no'); ?></span> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="Qwner_name">Owner Name</label>
                                        <input type="text" name="owner_name" class="form-control" id="owner_name" placeholder="Owner Name">
                                        <!-- <span class="text-danger"><?php echo form_error('owner_name'); ?></span> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="Contact_no">Contact Number</label>
                                        <input type="number" name="contact_no" class="form-control" id="contact_no" placeholder="Contact Number">
                                        <!-- <span class="text-danger"><?php echo form_error('contact_no'); ?></span> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                                        <!-- <span class="text-danger"><?php echo form_error('address'); ?></span> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Live Stock</label>
                                        <input type="checkbox" name="address" class="form-control" id="address">Cattle
                                        <input type="checkbox" name="address" class="form-control" id="address">Poultry
                                        <input type="checkbox" name="address" class="form-control" id="address">Piggery
                                        <input type="checkbox" name="address" class="form-control" id="address">Goat
                                    </div>
                                    <div class="form-group">
                                        <label for="Location">Select Location</label>
                                        <button type="submit" name="insert" class="btn btn-primary" name="save">Set Location</button>
                                    </div>
                                    <div class="text-center">
                                    <button type="submit" name="insert" class="btn btn-primary" name="save">Add</button>
                                    <?php
                                        echo $this->session->flashdata("error"); 
                                    ?>
                                    </div>
                                </form>
            </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  </body>
</html>