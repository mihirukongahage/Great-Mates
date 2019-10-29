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
      background-image: url("./../../assets/img/background4.jpg");
    }

    a:hover{
        text-decoration: none;
    }
    
    .card-body{
      color: 	#0b2829;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .monthContainer{
      width:200px; display:inline-block;
    }

    .form{
      color:red;
      width:400px;
      //margin:auto;
    }
    .button{
      display:inline-block; 
    }
</style>
  </head>
  <body>
    <div class="section offset-4 offset-sm-3 offset-md-3">
      <h1>Monthly report for cattle</h1>
      <h4 class="card-subtitle mb-2 text-muted">Production report</h4>
      <h4 class="card-subtitle mb-2 text-muted">
    
      </h4>
        <div class="section mt-5">

 
              <form  action="<?=base_url('index.php/monthlyRecordController/readCattles'); ?>" method="post"> 
              <div class="form-group">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <label for="sel1">Select year:</label>
                <select class="form-control" id="sel1" name="year">
                  <option value="" selected disabled hidden>Choose here</option>
                  <option>2013 </option>
                  <option>2014 </option>
                  <option>2015 </option>
                  <option>2016 </option>
                  <option>2017 </option>
                  <option>2018 </option>
                  <option>2019 </option>
                </select>
              </div>
              <div class="col-sm-3">

                <label for="sel2">Select month:</label>
                <select class="form-control" id="sel1" name="month">
                  <option value="" selected disabled hidden>Choose here</option>
                  <option>January </option>
                  <option>February </option>
                  <option>March </option>
                  <option>April </option>
                  <option>May </option>
                  <option>June </option>
                  <option>July </option>
                  <option>August </option>
                  <option>September </option>
                  <option>October </option>
                  <option>November </option>
                  <option>December </option>
                </select>

              </div>
           <div class="col-sm-3">  <input type="submit" value="Select" class="button" style="margin-top: 34px;"></div>

       </div>
          </div>
        </div>
      </form>
 

              <?php

                
                        $number   = '' ;
                        $milk     = '' ;
                        $meat     = '' ;
                        $expences = '' ;
                        $income   = ''; 

                if(isset($data)){
                      foreach($data as $row){   
                        $number   = $row->no_of_animals;
                        $milk     = $row->amount_of_milk;
                        $meat     = $row->meat_production;
                        $expences = $row->Expences;
                        $income   = $row->Income; 
                          
                      } 
                } 
               ?> 
              <div class="card card-plain w-75 p-1">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <tbody>
                        <tr>
                          <td>
                            Number of animals in the area
                          </td>
                          <td>
                             <?= $number ?>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Milk Production
                          </td>
                          <td>
                          <?= $milk ?> liters
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Meat Production
                          </td>
                          <td>
                          <?= $meat ?> kilograms
                          </td>
                        </tr>
                        <tr>
                          <td>
                            This months expences for cattle farming
                          </td>
                          <td>
                          <?= $expences ?> lkr
                          </td>
                        </tr>
                        <tr>
                          <td>
                            This months income from cattle farming
                          </td>
                          <td>
                          <?= $income ?> lkr
                          </td>
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