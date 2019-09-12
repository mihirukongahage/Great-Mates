<?php include('partials/header.php')?>

<!--specific css for this file-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/newFarm.css');?>">
<div class="sidebarAlignment">


    <div class="section offset-4 offset-sm-3 offset-md-3">
                                                                          
        <h1>New Farm</h1>
        <h5 class="card-subtitle mb-2 text-muted">Enter Farm Details</h5>
            <div class="mt-5">
                                <form action="<?php echo base_url('index.php/newFarmController/insert');?>" method="post" >
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
                                            <input type="checkbox" name="cattle"  class="form-control checkBoxes"  id="cattle"><label class="textSpacing">Cattle</label> <br>
                                            <input type="checkbox" name="poultry" class="form-control checkBoxes"  id="poultry"><label class="textSpacing">Poultry</label><br>
                                            <input type="checkbox" name="piggery" class="form-control checkBoxes"  id="piggery"><label class="textSpacing">Piggery</label><br>
                                            <input type="checkbox" name="goat"    class="form-control checkBoxes"  id="goat"><label class="textSpacing">Goat</label>   <br>
                                        </div>
                                    </div>

                                    <div class="form-group">
  
                                                    
                                                    <button type="submit" name="insert" class="btn btn-primary setLocationButton" name="save">Set Location</button>
                                                
                                                    <div class="addClearButtonContainer">
                                                        <div class="text-center">
                                                        <div class="addButton"> <button type="submit"  class="btn btn-primary " >Add</button> </div>
                                                        <div class="clearButton"> <button type="reset"   class="btn btn-primary "  >Clear</button> </div>
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
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  </body>
</html>