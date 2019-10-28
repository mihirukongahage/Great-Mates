<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/0e393aba9b.js" crossorigin="anonymous"></script>
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
        .user{
           background-color: rgba(0,0,0,0.2);
        }
        .logo{
        width:100%; 
    }

</style>
  </head>

  <body>
    <div class="wrapper">
          <div class="w3-sidebar w3-bar-block" style="width:20%">
            <div class="greatmates">
              <img class="logo" src=<?php echo base_url("assets/img/logo2.png")?> alt="logo" >
                <div class="container text-center">
                    <div class="user">
                      <hr>
                      <h4><?= $username ?></h4>
                      <hr>
                    </div>
                </div>
                    <a class="nav-link" href="<?=base_url('index.php/main/dashboard')?>"><i class="fas fa-tachometer-alt" style="font-size: 25px;"></i> Dashboard<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?=base_url('index.php/main/new_farm')?>"><i class="fas fa-tractor" style="font-size: 25px;"></i> New Farm <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?=base_url('index.php/main/monthly_records')?>"><i class="fas fa-clipboard" style="font-size: 25px;"></i> Monthly Records <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?=base_url('index.php/main/breeding_records')?>"><i class="fas fa-clipboard" style="font-size: 25px;"></i> Breeding Records <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?=base_url('index.php/main/monthly_reports')?>"><i class="fas fa-sticky-note" style="font-size: 25px;"></i> Monthly Reports <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?=base_url('index.php/main/annual_reports')?>"><i class="fas fa-sticky-note" style="font-size: 25px;"></i> Annual Reports <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?=base_url('index.php/main/view')?>"><i class="fas fa-eye" style="font-size: 25px;"></i> View <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?=base_url('index.php/main/about')?>"><i class="fas fa-user-alt" style="font-size: 25px;"></i> About <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?=base_url('index.php/main/logout')?>"><i class="fas fa-sign-out-alt" style="font-size: 25px;"></i> Logout <span class="sr-only">(current)</span></a>

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


