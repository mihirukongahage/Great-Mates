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
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body>
    
    <div class="container">
        <h1>Monthly Records</h1>
        <h5 class="card-subtitle mb-2 text-muted">Details related to cattle</h5>
            <div class="mt-5">
                                <form method="post" action="<?php echo base_url(); ?>index.php/main/signup_validate">
                                    <div class="form-group">
                                        <label for="Farm_reg_no">Farm Registration Number</label>
                                        <input type="text" name="farm_reg_no" class="form-control" id="farm_reg_no" placeholder="Farm Registration Number">
                                        <!-- <span class="text-danger"><?php echo form_error('faarm_reg_no'); ?></span> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="Year">Year</label>
                                        <input class="date-own form-control" name="year" type="text" placeholder="Year">
                                        <!-- <span class="text-danger"><?php echo form_error('owner_name'); ?></span> -->
                                        <script type="text/javascript">
                                        $('.date-own').datepicker({
                                            minViewMode: 2,
                                            format: 'yyyy'
                                        });
                                    </script>
                                    </div>
                                    <div class="form-group">
                                        <label for="No_of_animals">Number of Animals</label>
                                        <input type="number" name="no_of_animals" class="form-control" id="no_of_animals" placeholder="Number of Animals">
                                        <!-- <span class="text-danger"><?php echo form_error('no_of_animals'); ?></span> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="Amount_of_milk">Amount of Milk</label>
                                        <input type="number" name="amount_of_milk" class="form-control" id="amount_of_milk" placeholder="Amount of Milk">
                                        <!-- <span class="text-danger"><?php echo form_error('amount_of_milk'); ?></span> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="Meat_production">Meat Production</label>
                                        <input type="number" name="meat_production" class="form-control" id="meat_production" placeholder="Meat Production">
                                        <!-- <span class="text-danger"><?php echo form_error('meat_production'); ?></span> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="Expences">Expences</label>
                                        <input type="number" name="expences" class="form-control" id="expences" placeholder="Expences">
                                        <!-- <span class="text-danger"><?php echo form_error('expences'); ?></span> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="Meat_production">Income</label>
                                        <input type="number" name="income" class="form-control" id="income" placeholder="Income">
                                        <!-- <span class="text-danger"><?php echo form_error('income'); ?></span> -->
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