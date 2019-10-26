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

    <style>
    .card-body{
      background-color: #2A3634;
    }

    body{
      background-color: 	#C8DFD9;
    }

    .card-body{
      color: 	#0b2829;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    h2{
        color: 	white;
    }
    .card-subtitle
    {
        color: 	white;
    }
</style>

  </head>
  <body>
<div class="section offset-4 offset-sm-3 offset-md-3">
  <div class="heading offset-lg-1">
  <p>&nbsp;</p>
    <h1 class="offset-1">Divisional Veterinary Office</h1>
    <h4 class="card-subtitle mb-2 text-muted offset-1">Field Operation Management System</h4>
    <hr>
  </div>
  <div class="container mt-5">
            <div class="row">
              <div class="cardContainer offset-1"> 
                <a class="offset-1" href="<?=base_url('index.php/main/new_farm')?>">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body w3-hover-opacity">
                            <div class="text-center">
                                <i class="fas fa-plus" style="font-size: 35px; color: white;" ></i>
                                <h2 class="card-text">New Farm</h2>
                                <h6 class="card-subtitle mb-2 text-muted">Add a new farm</h6>
                            </div>
                        </div>
                    </div>
                </a>
              </div>
              <div class="cardContainer offset-1"> 
                <a class="offset-1" href="<?=base_url('index.php/main/monthly_records')?>">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body w3-hover-opacity">
                            <div class="text-center">
                                <i class="fas fa-calendar-check" style="font-size: 35px; color: white;"></i>
                                <h2 class="card-text">Monthly Records</h2>
                                <h6 class="card-subtitle mb-2 text-muted">Monthly records</h6>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
                <div class="cardContainer offset-1"> 
                <a class="offset-1" href="<?=base_url('index.php/main/monthly_reports')?>">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body w3-hover-opacity">
                            <div class="text-center">
                                <i class="fas fa-calendar" style="font-size: 35px; color: white;"></i>
                                <h2 class="card-text">Monthly Reports</h2>
                                <h6 class="card-subtitle mb-2 text-muted">Monthly report for piggery</h6>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
                <div class="cardContainer offset-1"> 
                <a class="offset-1" href="<?=base_url('index.php/main/annual_reports')?>">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body w3-hover-opacity">
                            <div class="text-center">
                                <i class="fas fa-calendar" style="font-size: 35px; color: white;"></i>
                                <h2 class="card-text">Annual Reports</h2>
                                <h6 class="card-subtitle mb-2 text-muted">Monthly report for goat</h6>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
                <div class="cardContainer offset-1"> 
                <a class="offset-1" href="<?=base_url('index.php/main/view')?>">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body w3-hover-opacity">
                            <div class="text-center">
                                <i class="fas fa-eye" style="font-size: 35px; color: white;"></i>
                                <h2 class="card-text">View</h2>
                                <h6 class="card-subtitle mb-2 text-muted">Details</h6>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
                <div class="cardContainer offset-1"> 
                <a class="offset-1" href="<?=base_url('index.php/main/farm_locations')?>">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body w3-hover-opacity">
                            <div class="text-center">
                                <i class="fas fa-map-marker-alt" style="font-size: 35px; color: white;"></i>
                                <h2 class="card-text">Farm Locations</h2>
                                <h6 class="card-subtitle mb-2 text-muted">Registered farm locations</h6>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
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
