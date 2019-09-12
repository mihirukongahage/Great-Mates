<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3-sidebar {
            background-color: #2A3634;
        }
        .greatmates {
            color: #FECA9C;
        }
        .nav-link {
            color: #D5AF8B;
        }
</style>
  </head>

  <body>
    <div class="wrapper">
          <div class="w3-sidebar w3-bar-block" style="width:18%">
            <div class="greatmates text-center">
                <div class="container mt-2">
                    <h1>Great Mates</h1>
                </div>
                <div class="mt-5">
                    <a class="nav-link" href="<?=base_url('index.php/main/dashboard')?>">Dashboard<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?=base_url('index.php/main/new_farm')?>">New Farm <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?=base_url('index.php/main/monthly_records')?>">Monthly Records <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?=base_url('index.php/main/monthly_reports')?>">Monthly Reports <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?=base_url('index.php/main/annual_reports')?>">Annual Reports <span class="sr-only">(current)</span></a>
                </div>
            </div>
          </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


