<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/0e393aba9b.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.src.js"></script>

  </head>
  <body>
<style>
  .card-body{
    background-color: 	#106466;
  }

  body{
    background-image: url("./../../assets/img/background4.jpg");
  }

  a:hover{
    text-decoration: none;
  }
  .setLocationButton{
    background-color: 	#106466;
  }
  .btnAdd{
    background-color: 	#106466;
  }
  .btnClear{
    background-color: 	#106466;
  }
  
</style>

<!--specific css for this file-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/newFarm.css');?>">
    
    <div class="section offset-6 offset-sm-4 offset-md-4 offset-lg-3 offset-xl-3">
        <p>&nbsp;</p>
        <h1 class="offset-1">New Farm</h1>
        <h5 class="card-subtitle mb-2 text-muted offset-1">Enter Farm Details</h5>
        <hr>
            <div class=" offset-1 mt-5">
                                <form method="post" action="<?php echo base_url('index.php/newFarmController/insert/'); ?>">
                                    <div class="form-group">
                                        <label class="labelAlignment">Form Registration Number</label>
                                        
                                        <div class="textBoxAlignment">
                                            <input type="text" name="form_reg_no" class="form-control" id="form_reg_no" placeholder="Form Registration Number">
                                                 <!-- <span class="text-danger"><?php echo form_error('form_reg_no'); ?></span> -->
                                            </div>
                                    </div>
                                    <div class="form-group">
                                         <label class="labelAlignment">Owner Name</label>
                                        <div class="textBoxAlignment">
                                            <input type="text" name="owner_name" class="form-control" id="owner_name" placeholder="Owner Name">
                                        <!-- <span class="text-danger"><?php echo form_error('owner_name'); ?></span> -->
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="labelAlignment">Contact Number</label>
                                        <div class="textBoxAlignment">
                                            <input type="number" name="contact_no" class="form-control" id="contact_no" placeholder="Contact Number">
                                        <!-- <span class="text-danger"><?php echo form_error('contact_no'); ?></span> -->
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="labelAlignment">Address</label>
                                        <div class="textBoxAlignment">
                                            <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                                            <!-- <span class="text-danger"><?php echo form_error('address'); ?></span> -->
                                        </div>
                                    </div>

                                    <div class="checkBoxContainer">
                                        <label class="stockType">Live Stock type :</label>
                                        <div class="form-group">
                                            <input type="checkbox" name="poultry" class="form-control checkBoxes"  id="cattle"><label class="textSpacing">Cattle</label> <br>
                                            <input type="checkbox" name="poultry" class="form-control checkBoxes" id="poultry"><label class="textSpacing">Poultry</label><br>
                                            <input type="checkbox" name="piggery" class="form-control checkBoxes" id="piggery"><label class="textSpacing">Piggery</label><br>
                                            <input type="checkbox" name="goat"    class="form-control checkBoxes"    id="goat"><label class="textSpacing">Goat</label>   <br>
                                        </div>
                                    </div>

                                    <div class="form-group">
  
                                                    
                                                    <button type="submit" name="insert" class="btn btn-primary setLocationButton" name="save"><i class="fas fa-map-marker-alt" style="font-size: 20px; color: white;"></i> Set Location</button>
                                                
                                                    <div class="addClearButtonContainer">
                                                        <div class="text-center">
                                                        <div class="addButton"> <button type="submit" name="insert" class="btn btn-primary btnAdd" name="save">Add</button> </div>
                                                        <div class="clearButton"> <button type="reset" name="insert" class="btn btn-primary btnClear" name="clear">Clear</button> </div>
                                                            <?php
                                                                echo $this->session->flashdata("error"); 
                                                            ?>
                                                </div>
                                            </div>
                                    </div>
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