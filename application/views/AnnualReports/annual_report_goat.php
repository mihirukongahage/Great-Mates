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

    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>

    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
    <script type="text/javascript">
    FusionCharts.ready(function() {
  var myChart = new FusionCharts({
    type: "dragcolumn2d",
    renderAt: "chart-container",
    width: "75%", height: "450",
    dataFormat: "json",
    dataSource: {
      "chart": {
        "caption": "Annual Report for Cattle",
        "subCaption": "",
        "numberPrefix": "Rs",
        "numberSuffix": "",
        "yaxismaxvalue": "100000",
        "theme": "fusion",
        "plotToolText": "<b>$label</b><br>$seriesName: <b>$dataValue</b>"
      },
      "categories": [{
        "category": [{
          "label": "Jan",
          "fontItalic": "0"
        }, {
          "label": "Feb",
          "fontItalic": "0"
        }, {
          "label": "Mar",
          "fontItalic": "0"
        },{
          "label": "April",
          "fontItalic": "0"
        },{
          "label": "May",
          "fontItalic": "0"
        },{
          "label": "June",
          "fontItalic": "0"
        },{
          "label": "July",
          "fontItalic": "0"
        },{
          "label": "Aug",
          "fontItalic": "0"
        },{
          "label": "Sep",
          "fontItalic": "0"
        },{
          "label": "Auc",
          "fontItalic": "0"
        },{
          "label": "Nov",
          "fontItalic": "0"
        },{
          "label": "Dec",
          "fontItalic": "0"
        },]
      }],
      "dataset": [{
        "seriesname": "Income",
        "data": [
           <?php 
            foreach($data as $row){   
                      echo "{
                        'value': '".$row->Income."',
                        'alpha': '100',
                        'allowDrag': '0'
                        },";
            } 
        ?> 
          
        {
          "value": "110",
          "toolText": "<b>$label</b><br>$seriesName: <b>$dataValue</b>"
        }, {
          "value": "180",
          "toolText": "<b>$label</b><br>$seriesName: <b>$dataValue</b>"
        }]
      }, {
        "seriesname": "Expenditure",
        "data": [
          
         <?php 
            foreach($data as $row){   
                      echo "{
                        'value': '".$row->Expences."',
                        'alpha': '100',
                        'allowDrag': '0'
                        },";
            } 
        ?>  
        {
          "value": "99",
          "toolText": "<b>$label</b><br>$seriesName: <b>$dataValue</b>"
        }, {
          "value": "150",
          "toolText": "<b>$label</b><br>$seriesName: <b>$dataValue</b>"
        }]
      }]
    },
    "events": {
    "dataplotDragEnd": function (ev, props) {
    console.log(props);
    var dataSet = props.datasetName;
    var beforeVal = Math.round(props.startValue * 100) / 100;
    var afterVal = Math.round(props.endValue * 100) / 100;
    document.getElementById('info').innerHTML =  "<b>" + dataSet + "</b> is modified to <b>$" + afterVal + "M</b> from <b>$" + beforeVal + "M</b>";
    }
    }
  }).render();
});
</script>
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
      <h1>Annual report for goat</h1>
      <h4 class="card-subtitle mb-2 text-muted">Production report</h4>
      <br>
        <br>


       
        <div class="monthContainer">
          <form action="<?= base_url('index.php/annualController/readGoat'); ?>" method="post">
          <div class="form-group">
          <div class="select">  
              <label for="sel1">Select year:</label>
              
              
                
              <select class="form-control"  name="year">
                <option value="2019" selected >2019</option>
                <option>2018 </option>
                <option>2017 </option>
                <option>2016 </option>
                <option>2015 </option>
                <option>2014 </option>
                <option>2013 </option>
              </select>
          </div> 

              <div class="select">
              <label for="sel1">Select month:</label>
              <select class="form-control" name="month">
                <option value="January" selected  >January</option>
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
            </div>
        </div>

        <input type="submit" value="Select" class="button">
        </form>


        <div class="section mt-5">
        <?php
            $animals = 0 ;
            $meat_production   = 0;     
            $Expences          = 0;
            $Income            = 0;  
            $milk            = 0;  
                foreach($data as $row){   
                  $animals = $animals + $row->no_of_animals; 
                  $meat_production =   $meat_production + $row->meat_production;
                  $milk =   $milk + $row->amount_of_milk;
                  $Expences = $Expences  + $row->Expences; 
                  $Income   = $Income    + $row->Income;  
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
                            <?= $animals  ?>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Milk Production
                          </td>
                          <td>
                          <?= $milk  ?> liters
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Meat Production
                          </td>
                          <td>
                          <?= $meat_production  ?> kilograms
                          </td>
                        </tr>
                        <tr>
                          <td>
                            This year expences for goat farming
                          </td>
                          <td>
                          <?= $Expences  ?> lkr
                          </td>
                        </tr>
                        <tr>
                          <td>
                            This year income from goat farming
                          </td>
                          <td>
                          <?= $Income  ?> lkr
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-5">
              <div id="chart-container">FusionCharts XT will load here!</div>
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