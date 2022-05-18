<?php

$self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
header("refresh:600; url=$self"); //Refrescamos cada 300 segundos

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Transito Unidades Ingenio El Carmen</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <!-- Custom Font Icons CSS-->
  <link rel="stylesheet" href="css/font.css">
  <!-- Google fonts - Muli-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">

  <link rel="stylesheet" href="css/jquery.lineProgressbar.css" />

</head>

<body ng-app="hr" ng-controller="hrController as hr1" data-ng-init="init()">
  <header class="header">
    <nav class="navbar navbar-expand-lg">

      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="index.php" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">INCA</strong><strong>Transito</strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">I</strong><strong>T</strong></div>
          </a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        <div class="right-menu list-inline no-margin-bottom">
        </div>
      </div>
    </nav>
  </header>
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="#" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">User Gen</h1>
          <p>Visualizador</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
        <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
        <li><a href="batey.php"> <i class="icon-grid"></i>Batey </a></li>
        <li><a href="corralon.php"> <i class="fa fa-bar-chart"></i>Corralon </a></li>
        <li><a href="transito.php"> <i class="icon-padnote"></i>Transito </a></li>

    </nav>
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
      </div>

      <div id="progressbar1"></div>

      <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="statistic-block block">
                <div class="progress-details d-flex align-items-end justify-content-between">
                  <div class="title">
                    <div class="icon"><i class="icon icon-dashboard"></i></div><strong>Tons. Caña</strong>
                  </div>
                  <div class="number dashtext-1">{{hr1.global}}</div>
                </div>
                <div class="progress progress-template">
                  <div role="progressbar" style="width: 100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="statistic-block block">
                <div class="progress-details d-flex align-items-end justify-content-between">
                  <div class="title">
                    <div class="icon"><i class="icon-contract"></i></div><strong>En Corralon</strong>
                  </div>
                  <div class="number dashtext-2">{{hr1.corralon}}</div>
                </div>
                <div class="progress progress-template">
                  <div role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="statistic-block block">
                <div class="progress-details d-flex align-items-end justify-content-between">
                  <div class="title">
                    <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>En Batey</strong>
                  </div>
                  <div class="number dashtext-3">{{hr1.batey}}</div>
                </div>
                <div class="progress progress-template">
                  <div role="progressbar" style="width: 100%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="statistic-block block">
                <div class="progress-details d-flex align-items-end justify-content-between">
                  <div class="title">
                    <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>En Transito</strong>
                  </div>
                  <div class="number dashtext-4">{{hr1.transito}}</div>
                </div>
                <div class="progress progress-template">
                  <div role="progressbar" style="width: 100%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="no-padding-bottom">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="stats-2-block block d-flex">
                <div class="stats-2 d-flex">
                  <div class="stats-2-arrow low"><i class="fa fa-caret-up"></i></div>
                  <div class="stats-2-content"><strong class="d-block">{{hr1.yarda}}</strong><span class="d-block">Unidades en corralon</span>
                    <div class="progress progress-template progress-small">
                      <div role="progressbar" style="width: 100%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-2"></div>
                    </div>
                  </div>
                </div>
                <div class="stats-2 d-flex">
                  <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                  <div class="stats-2-content"><strong class="d-block">{{hr1.bateya}}</strong><span class="d-block">Unidades en batey</span>
                    <div class="progress progress-template progress-small">
                      <div role="progressbar" style="width: 100%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-3"></div>
                    </div>
                  </div>
                </div>
                <div class="stats-2 d-flex">
                  <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                  <div class="stats-2-content"><strong class="d-block">{{hr1.transita}}</strong><span class="d-block">Unidades en transito</span>
                    <div class="progress progress-template progress-small">
                      <div role="progressbar" style="width: 100%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-3"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="stats-3-block block d-flex">
                <div class="stats-3"><strong class="d-block">{{hr1.corralon}}</strong><span class="d-block">En corralon</span>
                  <div class="progress progress-template progress-small">
                    <div role="progressbar" style="width: 100%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                  </div>
                </div>
                <div class="stats-3 d-flex justify-content-between text-center">
                  <div class="item"><strong class="d-block strong-sm">{{hr1.tgrua}}</strong><span class="d-block span-sm">Grua</span>
                    <div class="line"></div><small>{{hr1.ugrua}} unidades</small>
                  </div>
                  <div class="item"><strong class="d-block strong-sm">{{hr1.tplat}}</strong><span class="d-block span-sm">Plataforma</span>
                    <div class="line"></div><small>{{hr1.uplat}} unidades</small>
                  </div>
                  <div class="item"><strong class="d-block strong-sm">{{hr1.thilo}}</strong><span class="d-block span-sm">Hilos</span>
                    <div class="line"></div><small>{{hr1.uhilo}} unidades</small>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="stats-3-block block d-flex">
                <div class="stats-3"><strong class="d-block">{{hr1.batey}}</strong><span class="d-block">En batey</span>
                  <div class="progress progress-template progress-small">
                    <div role="progressbar" style="width: 100%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                  </div>
                </div>
                <div class="stats-3 d-flex justify-content-between text-center">
                  <div class="item"><strong class="d-block strong-sm">{{hr1.tbgrua}}</strong><span class="d-block span-sm">Grua</span>
                    <div class="line"></div><small>{{hr1.ubgrua}} unidades</small>
                  </div>
                  <div class="item"><strong class="d-block strong-sm">{{hr1.tbplat}}</strong><span class="d-block span-sm">Plataforma</span>
                    <div class="line"></div><small>{{hr1.ubplat}} unidades</small>
                  </div>
                  <div class="item"><strong class="d-block strong-sm">{{hr1.tbhilo}}</strong><span class="d-block span-sm">Hilos</span>
                    <div class="line"></div><small>{{hr1.ubhilo}} unidades</small>
                  </div>

                </div>
              </div>

              <div class="stats-3-block block d-flex">
                <div class="stats-3"><strong class="d-block">{{hr1.transito}}</strong><span class="d-block">En transito</span>
                  <div class="progress progress-template progress-small">
                    <div role="progressbar" style="width: 100%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                  </div>
                </div>
                <div class="stats-3 d-flex justify-content-between text-center">
                  <div class="item"><strong class="d-block strong-sm">{{hr1.ttgrua}}</strong><span class="d-block span-sm">Grua</span>
                    <div class="line"></div><small>{{hr1.tugrua}} unidades</small>
                  </div>
                  <div class="item"><strong class="d-block strong-sm">{{hr1.ttplat}}</strong><span class="d-block span-sm">Plataforma</span>
                    <div class="line"></div><small>{{hr1.tuplat}} unidades</small>
                  </div>
                  <div class="item"><strong class="d-block strong-sm">{{hr1.tthilo}}</strong><span class="d-block span-sm">Hilos</span>
                    <div class="line"></div><small>{{hr1.tuhilo}} unidades</small>
                  </div>

                </div>
              </div>

            </div>

          </div>

        </div>
      </section>

      <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4">
              <div class="stats-with-chart-2 block">
                <div class="title"><strong class="d-block">En Corralon</strong><span class="d-block"> </span></div>
                <div class="piechart chart">
                  <canvas id="pieChartHome1"></canvas>
                  <div class="text"><strong class="d-block">{{hr1.corralon}}</strong><span class="d-block">Toneladas</span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="stats-with-chart-2 block">
                <div class="title"><strong class="d-block">En Batey</strong><span class="d-block"> </span></div>
                <div class="piechart chart">
                  <canvas id="pieChartHome2"></canvas>
                  <div class="text"><strong class="d-block">{{hr1.batey}}</strong><span class="d-block">Toneladas</span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="stats-with-chart-2 block">
                <div class="title"><strong class="d-block">En Transito</strong><span class="d-block"> </span></div>
                <div class="piechart chart">
                  <canvas id="pieChartHome3"></canvas>
                  <div class="text"><strong class="d-block">{{hr1.transito}}</strong><span class="d-block">Toneladas</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="footer">
        <div class="footer__block block no-margin-bottom">
          <div class="container-fluid text-center">
            <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            <p class="no-margin-bottom">2021 &copy; Ingenio El Carmen SA de CV Design by <a href="#">Informatica departamento</a>.</p>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper.js/umd/popper.min.js"> </script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="js/charts-home.js"></script>
  <script src="js/front.js"></script>

  <script src="js/angularjs/angular.min.js"></script>
  <script src="js/angularjs/angular-route.min.js"></script>
  <script src="js/angularjs/angular-resource.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
  <script src="js/jquery.lineProgressbar.js"></script>

  <script src="js/dashb.js"></script>

</body>

</html>