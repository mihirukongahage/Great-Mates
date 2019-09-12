<?php include('partials/header.php')?>
    
    <div class="section offset-4 offset-sm-3 offset-md-3">
      <h1>Divisional Veterinary Office</h1>
      <h4 class="card-subtitle mb-2 text-muted">Field Operation Management System</h4>

    <div class="row">
    <?php 
      if($services->num_rows()>0)
      {
        foreach($services->result() as $row)
        {
          ?>
          <!-- Card to dispaly the service -->
          <div class="offset-1 mt-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"> <?php echo $row->name; ?> </h5>
                <h6 class="card-subtitle mb-2 text-muted">Rs.<?php echo $row->price; ?>.00</h6>
                <p class="card-text"><?php echo $row->description; ?></p>
                <!-- Edit and remove buttons -->
                <a class="btn btn-primary" href="edit_service/?id=<?php echo $row->id; ?>">Edit</a>
                <a class="btn btn-secondary" href="remove_service/?id=<?php echo $row->id; ?>" id="<?php echo $row->id; ?>">Remove</a>
              </div>
            </div>
          </div>    
    <?php }
      }
      else
      {
        //When no services are available
        echo "No Services Available";
      }
    ?>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
<?php include('partials/footer.php')?>