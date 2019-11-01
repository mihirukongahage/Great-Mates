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
      background-image: url("./../../assets/img/background4.jpg");
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
    *{
      margin: 0;
      padding: 0;
    }
    #map {
        height: 650px;
        width: 90%;
      }
</style>

</head>
<body>

<div class="section offset-4 offset-sm-3 offset-md-3">
  <div class="heading offset-lg-1">
  <p>&nbsp;</p>
    <h1 class="offset-1">Farm Locations</h1>
    <h4 class="card-subtitle mb-2 text-muted offset-1"></h4>
    <hr>
  </div>
  <div class="container mt-5">

    <?php
      echo $data
    ?>

    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 7.8731, lng: 80.7718},
          zoom: 8
        });
        marker = new google.maps.Marker({
          position: {lat: 6.909, lng: 79.93},
          map: map
        })
        marker = new google.maps.Marker({
          position: {lat: 6.97, lng: 80.55},
          map: map
        })
        marker = new google.maps.Marker({
          position: {lat: 6.96, lng: 80.34},
          map: map
        })
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT8I5KIt5TOn9yLWfa9-Q50vbay4MVWWI&callback=initMap"
    async defer></script>
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
