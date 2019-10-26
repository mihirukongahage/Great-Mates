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
    .card-body{
      background-color: #DAAF8D;
    }

    body{
      background-color: 	#C8DFD9;
    }

    a:hover{
        text-decoration: none;
    }
    
    .card-body{
      color: 	#0b2829;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>
  </head>
  <body>
    <div class="section offset-4 offset-sm-3 offset-md-3">
    <p>&nbsp;</p>
      <h1>Artificial breeding report</h1>
      <h4 class="card-subtitle mb-2 text-muted"><?= date("Y")?></h4>
      <hr>
        <div class="section mt-5">
        
 
              <div class="card card-plain w-75 p-1">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <tbody>
                      <thead class="">
                        <tr><th>
                          Farm ID
                        </th>
                        <th>
                          Type
                        </th>
                        <th>
                          Semen code
                        </th>
                      </tr>
                      </thead>
                        <tr>
                        <?php
                                $type   = '' ;
                                foreach($data as $row){   
                                  if(($row->cattle)&& (!$row->goat)){
                                    $type = 'cattle';
                                  }else if((!$row->cattle)&& ($row->goat)){
                                    $type = 'goat';
                                  }else if(($row->goat) && ($row->cattle)){
                                    $type = 'cattle , goat';
                                  }
                                  echo "<tr>";
                                  echo "<td>".$row->regNo."</td>";
                                  echo "<td>".$type."</td>"; 
                                  echo "<td>". $row->code."</td>";  
                                }  
                        ?>  
 
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
        <div class="mt-5"></div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  </body>
</html>